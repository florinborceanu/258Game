class Player {

    constructor(name) {
        this.name = name;
        this.hp = 0;
        this.maxHP = 0;
        this.ad = 0;
        this.ap = 0;
        this.armor = 0;
        this.mr = 0;
        this.chest = 0;
        this.helmet = 0;
        this.pants = 0;
        this.mainWeap = 0;
        this.secWeap = 0;
        this.exp = 0;
        this.expNeeded = 0;
        this.level = 0;
        this.stsPoints = 0;
        this.pieces = 0;
    }

    setItems(helmet, chest, pants, mainWeap, secWeap) {
        this.helmet = helmet;
        this.chest = chest;
        this.pants = pants;
        this.mainWeap = mainWeap;
        this.secWeap = secWeap;
    }

    setStats(hp, ad, ap, armor, mr) {
        this.hp = hp;
        this.maxHP = hp;
        this.ad = ad;
        this.ap = ap;
        this.armor = armor;
        this.mr = mr;
    }

    setStage(stage) {
        this.stage = stage;
    }

    getStage() {
        return this.stage;
    }

    setExp(exp) {
        this.exp = exp;
    }

    getExp() {
        return this.exp;
    }

    setExpNeeded(exp) {
        this.expNeeded = exp;
    }

    getExpNeeded() {
        return this.expNeeded;
    }

    setLevel(level) {
        this.level = level;
    }

    getLevel() {
        return this.level;
    }

    setSts(stats) {
        this.stsPoints = stats;
    }

    getSts() {
        return this.stsPoints;
    }

    setPieces(stats) {
        this.pieces = stats;
    }

    getPieces() {
        return this.pieces;
    }

    upgradePoint(point) {
        var number = 0;
        if (point <= 5) {
            this.stsPoints--;
            if (point == 1) {
                this.hp += 500;
            } else if (point == 2) {
                this.ad += 4;
            } else if (point == 3) {
                this.ap += 2;
            } else if (point == 4) {
                this.armor += 5;
            } else if (point == 5) {
                this.mr += 3;
            }
        } else if (point > 5) {
            this.pieces--;
            if (point == 6) {
                this.helmet++;
                this.hp += 75;
                this.armor += 3;
                this.mr += 1;
            } else if (point == 7) {
                this.chest++;
                this.hp += 150;
                this.armor += 7;
                this.mr += 4;
            } else if (point == 8) {
                this.pants++;
                this.hp += 90;
                this.armor += 5;
                this.mr += 3;
            } else if (point == 9) {
                this.mainWeap++;
                this.ad += 15;
                this.ap += 8;
            } else if (point == 10) {
                this.secWeap++;
                this.ad += 6;
                this.ap += 15;
            }
        }
        this.setStats(this.hp, this.ad, this.ap, this.armor, this.mr);
    }
}


class Stage {
    constructor(name, vilain) {
        this.name = name;
        this.vilain = vilain;
    }
}

class Vilain {
    constructor(name, hp, ad, ap, armor, mr) {
        this.name = name;
        this.hp = hp;
        this.ad = ad;
        this.ap = ap;
        this.armor = armor;
        this.mr = mr;
    }
}

window.onload = mainLoading();

var currentPlayer;
var firstStage;
var secondStage;
var thirdStage;
var fourthStage;
var fifthStage;
var villainAttack;
var playedStage;
var currentStage;
var isPaused;

function loadResources() {

    //Init player
    currentPlayer = new Player("Player Name");
    currentPlayer.setItems(1, 1, 1, 1, 1);
    currentPlayer.setStats(15000, 25, 25, 50, 20);
    currentPlayer.setStage(5);
    currentPlayer.setExpNeeded(400);
    currentPlayer.setLevel(1);
    currentPlayer.setSts(10000);
    currentPlayer.setPieces(10000);

    //Load stages
    stage = currentPlayer.getStage();
    updateStage(stage);

    firstStage = new Stage("First Stage", 1);
    secondStage = new Stage("Second Stage", 2);
    thirdStage = new Stage("Third Stage", 3);
    fourthStage = new Stage("Fourth Stage", 4);
    fifthStage = new Stage("Fifth Stage", 5);


    //Load vilains
    firstVilain = new Vilain("Hawk Eye", 1500, 25, 15, 90, 65);
    secondVilain = new Vilain("Captain America", 7000, 100, 70, 120, 90);
    thirdVilain = new Vilain("Hulk", 40000, 45, 45, 530, 240);
    fourthVilain = new Vilain("Iron Man", 100000, 120, 0, 120, 120);
    fifthVilain = new Vilain("Thor", 160000, 10000, 400, 1000, 1000);


}

function updateStage(stage) {
    document.getElementById("secondStage").classList.remove("locked");
    document.getElementById("thirdStage").classList.remove("locked");
    document.getElementById("fourthStage").classList.remove("locked");
    document.getElementById("fifthStage").classList.remove("locked");
    switch (stage) {
        case 1:
            {
                document.getElementById("secondStage").classList.add("locked");
                document.getElementById("thirdStage").classList.add("locked");
                document.getElementById("fourthStage").classList.add("locked");
                document.getElementById("fifthStage").classList.add("locked");
            }
        case 2:
            {
                document.getElementById("thirdStage").classList.add("locked");
                document.getElementById("fourthStage").classList.add("locked");
                document.getElementById("fifthStage").classList.add("locked");
            }
        case 3:
            {
                document.getElementById("fourthStage").classList.add("locked");
                document.getElementById("fifthStage").classList.add("locked");

            }
        case 4:
            {
                document.getElementById("fifthStage").classList.add("locked");
            }
    }
}

function mainLoading() {
    loadResources();
    myVar = setTimeout(showPage, 500);
}

function showPage() {
    document.getElementById("loadingScreen").classList.add("hidden");
    document.getElementById("stageScreen").classList.remove("hidden");
}

function launchGame(stage) {
    playedStage = stage;
    isPaused = 0;
    if (stage == 1) {
        currentVilain = firstVilain;
        document.body.style.backgroundImage = "url(img/hawkeye.jpg)";
    } else if (stage == 2) {
        currentVilain = secondVilain;
        document.body.style.backgroundImage = "url(img/captain.jpg)";

    } else if (stage == 3) {
        currentVilain = thirdVilain;
        document.body.style.backgroundImage = "url(img/hulk.jpg)";

    } else if (stage == 4) {
        currentVilain = fourthVilain;
        document.body.style.backgroundImage = "url(img/ironman.jpg)";

    } else if (stage == 5) {
        currentVilain = fifthVilain;
        document.body.style.backgroundImage = "url(img/thor.jpg)";

    } else {
        console.log("err");
    }


    initialPHealth = currentPlayer.hp;
    initialVHealth = currentVilain.hp;

    player = document.getElementById("playerDetails");
    player.Rhealth = document.getElementById("playerRealHealth");
    player.exp = document.getElementById("playerRealExp");
    player.textContent = currentPlayer.name + " (level: " + currentPlayer.getLevel() + " / " + currentPlayer.getSts() + " points / " + currentPlayer.getPieces() + " pieces)";

    vilain = document.getElementById("vilainDetails");
    vilain.textContent = currentVilain.name;

    vilain.Rhealth = document.getElementById("vilainRealHealth");

    mainGame = document.getElementById("mainView");

    player.Rhealth.style.width = '100%';
    vilain.Rhealth.style.width = '100%';

    statsUpdate();
    getMarvelResponse(stage);
    timedAttack();
}

function finishGame(win) {
    isPaused = 0;
    document.getElementById("gameScreen").classList.add("hidden");
    document.getElementById("afterGame").classList.remove("hidden");
    if (win) {
        if (stage < 5) {
            if (playedStage == currentPlayer.getStage()) {
                currentPlayer.setStage(playedStage + 1);
                updateStage(playedStage + 1);
            }
        }
        var text = document.getElementById("stateText");
        text.textContent = "Victory!";
        // var number = 5;
        // var audio = new Audio('sounds/'+number+' .mp3');
        // audio.play(); 
    } else {
        var text = document.getElementById("stateText");
        text.textContent = "Defeat...";
        // var number = 6;
        // var audio = new Audio('sounds/'+number+'.mp3');
        // audio.play();  
    }
    currentVilain.hp = initialVHealth;
    currentPlayer.hp = currentPlayer.maxHP;

}

function statsUpdate() {
    var points = currentPlayer.getSts();
    if (points == 0) {
        var element = document.getElementById("healthUpgrade");
        element.classList.add("locked");
        element = document.getElementById("adUpgrade");
        element.classList.add("locked");
        element = document.getElementById("apUpgrade");
        element.classList.add("locked");
        element = document.getElementById("armorUpgrade");
        element.classList.add("locked");
        element = document.getElementById("mrUpgrade");
        element.classList.add("locked");
    } else {
        var element = document.getElementById("healthUpgrade");
        element.classList.remove("locked");
        element = document.getElementById("adUpgrade");
        element.classList.remove("locked");
        element = document.getElementById("apUpgrade");
        element.classList.remove("locked");
        element = document.getElementById("armorUpgrade");
        element.classList.remove("locked");
        element = document.getElementById("mrUpgrade");
        element.classList.remove("locked");
    }

    points = currentPlayer.getPieces();
    if (points == 0) {
        var element = document.getElementById("helmetUpgrade");
        element.classList.add("locked");
        element = document.getElementById("chestUpgrade");
        element.classList.add("locked");
        element = document.getElementById("pantsUpgrade");
        element.classList.add("locked");
        element = document.getElementById("mweapUpgrade");
        element.classList.add("locked");
        element = document.getElementById("sweapUpgrade");
        element.classList.add("locked");
    } else {
        var element = document.getElementById("helmetUpgrade");
        element.classList.remove("locked");
        element = document.getElementById("chestUpgrade");
        element.classList.remove("locked");
        element = document.getElementById("pantsUpgrade");
        element.classList.remove("locked");
        element = document.getElementById("mweapUpgrade");
        element.classList.remove("locked");
        element = document.getElementById("sweapUpgrade");
        element.classList.remove("locked");
    }
}

function timedAttack() {
    villainAttack = setInterval(vilainAtk, 500);
}

function vilainAtk() {
    currentPlayer.hp -= currentVilain.ad - 0.1 * currentPlayer.armor + currentVilain.ap - 0.3 * currentPlayer.mr;
    if (currentPlayer.hp <= 0) {
        currentPlayer.hp = 0;
        clearInterval(villainAttack);

        document.body.removeAttribute("style");
        finishGame(0);
    }
    width = (100 * currentPlayer.hp) / initialPHealth;
    if (width > 100) {
        width = 100;
    }
    player.Rhealth.style.width = width + '%';
}

button = document.getElementById("attackButton");
button.onclick = function () {
    // var number = Math.floor(Math.random() * 4)+1;
    // var audio = new Audio('sounds/'+number+'.mp3');
    // audio.play(); 

    if (isPaused == 0) {
        currentVilain.hp -= currentPlayer.ad - 0.1 * currentVilain.armor + currentPlayer.ap - 0.3 * currentVilain.mr;
        currentPlayer.exp += (currentPlayer.ad - 0.1 * currentVilain.armor + currentPlayer.ap - 0.3 * currentVilain.mr) / 3;
        if (currentVilain.hp <= 0) {
            currentVilain.hp = 0;
            clearInterval(villainAttack);


            document.body.removeAttribute("style");
            finishGame(1);
        }

        width = (100 * currentVilain.hp) / initialVHealth;
        if (width > 100) {
            width = 100;
        }
        vilain.Rhealth.style.width = width + '%';

        width = (100 * currentPlayer.exp) / currentPlayer.expNeeded;
        if (currentPlayer.exp >= currentPlayer.expNeeded) {
            width = 0;
            currentPlayer.exp = 0;
            currentPlayer.expNeeded = (currentPlayer.expNeeded * 1.65);

            var level = currentPlayer.getLevel();
            level += 1;
            currentPlayer.setLevel(level);

            var sts = currentPlayer.getSts();
            sts += 10;
            currentPlayer.setSts(sts);
            player = document.getElementById("playerDetails");

            var pcs = currentPlayer.getPieces();
            pcs += 5;
            currentPlayer.setPieces(pcs);
            player = document.getElementById("playerDetails");

            player.textContent = currentPlayer.name + " (level: " + currentPlayer.getLevel() + " / " + currentPlayer.getSts() + " points / " + currentPlayer.getPieces() + " pieces)";

            statsUpdate();
        }
        player.exp.style.width = width + '%';
    }
};

function loadStage(stage) {
    if (stage <= currentPlayer.getStage()) {
        document.getElementById("loadingScreen").classList.remove("hidden");
        document.getElementById("stageScreen").classList.add("hidden");
        launchGame(stage);
        setTimeout(showGame, 500);
    }
}

function showGame() {
    document.getElementById("loadingScreen").classList.add("hidden");
    document.getElementById("gameScreen").classList.remove("hidden");
}

var backToStage = document.getElementById("backToStage");
backToStage.onclick = function () {
    document.getElementById("afterGame").classList.add("hidden");
    document.getElementById("stageScreen").classList.remove("hidden");
}





function upgrade(type) {
    var sts = currentPlayer.getSts();
    var pieces = currentPlayer.getPieces();
    if (type <= 5) {
        if (sts > 0) {
            currentPlayer.upgradePoint(type);
            sts--;
            currentPlayer.setSts(sts);
            statsUpdate();
        }
    } else {
        if (pieces > 0) {
            currentPlayer.upgradePoint(type);
            pieces--;
            currentPlayer.setPieces(pieces);
            statsUpdate();
        }
    }
    player = document.getElementById("playerDetails");
    player.textContent = currentPlayer.name + " (level: " + currentPlayer.getLevel() + " / " + currentPlayer.getSts() + " points / " + currentPlayer.getPieces() + " pieces)";
}
var PRIV_KEY = "5e77d4e14ede7a90f1b56fdf64d6ec33bf7dfe7a";
var PUBLIC_KEY = "8b64a78b95f62f7e1495a58a64050468";


var characterIdArray = ['1009338', '1009220', '1009351', '1009368', '1009664']; //hawk,cap'n,hulk,iron,thor
var character = null;

function getMarvelResponse(stage) {
    var ts = new Date().getTime();
    var hash = CryptoJS.MD5(ts + PRIV_KEY + PUBLIC_KEY).toString();

    // the api deals a lot in ids rather than just the strings you want to use
    var url = 'http://gateway.marvel.com:80/v1/public/characters/' + characterIdArray[stage - 1];

    console.log(url);
    $.getJSON(url, {
            ts: ts,
            apikey: PUBLIC_KEY,
            hash: hash,
            characters: characterIdArray[0]
        })
        .done(function (data) {
            retrieve(data);
        })
        .fail(function (err) {
            character = 'sth went wrong';
        });

};

var img = document.createElement("img");
var name = null;
var paragraph = document.createElement("p");

function retrieve(data) {
    character = data.data.results[0];
    img.src = character.thumbnail.path + '/standard_fantastic' + '.' + character.thumbnail.extension;

    var smth = document.getElementById("vilainDesc");
    smth.textContent = data.data.results[0].description;
}

var src = document.getElementById("vilainImg");
src.appendChild(img);

var element = document.getElementById("vilainDesc");
element.appendChild(paragraph);

buttonSurrender = document.getElementById("surrenderButton");
buttonSurrender.onclick = function () {
    currentVilain.hp = 0;
    clearInterval(villainAttack);


    document.body.removeAttribute("style");
    finishGame(0);
}

buttonPause = document.getElementById("pauseButton");
buttonPause.onclick = function () {
    if (isPaused == 0) {
        clearInterval(villainAttack);
        document.getElementById("attackButton").classList.add("locked");
        isPaused = 1;
    } else {
        villainAttack = setInterval(vilainAtk, 500);
        document.getElementById("attackButton").classList.remove("locked");
        isPaused = 0;
    }
}