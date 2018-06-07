class Player {

    constructor(name) {
        this.name = name;
        this.hp = 0;
        this.ad = 0;
        this.ap = 0;
        this.armor = 0;
        this.mr = 0;
        this.chest = 0;
        this.helmet = 0;
        this.pants = 0;
        this.mainWeap = 0;
        this.secWeap = 0;
    }

    setItems(helmet, chest, pants, mainWeap, secWeap) {
        this.helmet = helmet;
        this.chest = chest;
        this.pants = pants;
        this.mainWeap = mainWeap;
        this.secWeap = secWeap;
    }

    setStats(hp, ad, ap, armor, mr) {
        this.hp = hp + 100 * this.chest * this.chest + 25 * this.helmet * this.helmet + 50 * this.pants * this.pants;
        this.ad = ad + 10 * this.mainWeap * this.mainWeap + 4 * this.secWeap * this.secWeap;
        this.ap = ap + 6 * this.secWeap * this.secWeap;
        this.armor = armor + 10 * this.chest * this.chest + 5 * this.helmet * this.helmet + 8 * this.pants * this.pants;
        this.mr = mr + 5 * this.chest * this.chest + 2.5 * this.helmet * this.helmet + 4 * this.pants * this.pants;
    }

    setStage(stage) {
        this.stage = stage;
    }

    getStage() {
        return this.stage;
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

function loadResources() {

    //Init player
    currentPlayer = new Player("Player Name");
    currentPlayer.setItems(1, 1, 1, 1, 1);
    currentPlayer.setStats(150000, 2500, 25, 50, 20);
    currentPlayer.setStage(1);

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
    secondVilain = new Vilain("Captain America", 7000, 100, 50, 120, 90);
    thirdVilain = new Vilain("Hulk", 20000, 450, 300, 530, 240);
    fourthVilain = new Vilain("Iron Man", 100000, 300, 0, 1200, 1200);
    fifthVilain = new Vilain("Thor", 160000, 10000, 8500, 800, 800);


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
                console.log("test");
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
    if (stage == 1) {
        currentVilain = firstVilain;
    } else if (stage == 2) {
        currentVilain = secondVilain;

    } else if (stage == 3) {
        currentVilain = thirdVilain;

    } else if (stage == 4) {
        currentVilain = fourthVilain;

    } else if (stage == 5) {
        currentVilain = fifthVilain;

    } else {
        console.log("err");
    }


    initialPHealth = currentPlayer.hp;
    initialVHealth = currentVilain.hp;

    player = document.getElementById("playerDetails");
    player.textContent = currentPlayer.name;

    player.Rhealth = document.getElementById("playerRealHealth");

    vilain = document.getElementById("vilainDetails");
    vilain.textContent = currentVilain.name;

    vilain.Rhealth = document.getElementById("vilainRealHealth");

    mainGame = document.getElementById("mainView");
    mainGame.textContent = "MainGame";

    player.Rhealth.style.width = '100%';
    vilain.Rhealth.style.width = '100%';

    timedAttack();
}

function finishGame(win) {
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
    }
    else {
        var text = document.getElementById("stateText");
        text.textContent = "Defeat...";
    }
    currentVilain.hp = initialVHealth;

}

function timedAttack() {
    villainAttack = setInterval(vilainAtk, 500);
}

function vilainAtk() {
    currentPlayer.hp -= currentVilain.ad - 0.1 * currentPlayer.armor + currentVilain.ap - 0.3 * currentPlayer.mr;
    if (currentPlayer.hp <= 0) {
        currentPlayer.hp = 0;
        clearInterval(villainAttack);
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
    currentVilain.hp -= currentPlayer.ad - 0.1 * currentVilain.armor + currentPlayer.ap - 0.3 * currentVilain.mr;
    if (currentVilain.hp <= 0) {
        currentVilain.hp = 0;
        clearInterval(villainAttack);
        finishGame(1);
    }

    width = (100 * currentVilain.hp) / initialVHealth;
    if (width > 100) {
        width = 100;
    }
    vilain.Rhealth.style.width = width + '%';
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