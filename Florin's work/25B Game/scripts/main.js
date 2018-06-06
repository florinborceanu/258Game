class Player {

    constructor(name, ad, ap, armor, mr, hp) {
        this.name = name;
        this.ad = ad;
        this.ap = ap;
        this.armor = armor;
        this.mr = mr;
        this.hp = hp;
    }
}

class Stage {
    constructor(name){
        this.name = name;
    }
}

class Vilain {
    constructor(name, hp, ad, ap, armor, mr)
    {
        this.name = name;
        this.hp = hp;
        this.ad = ad;
        this.ap = ap;
        this.armor = armor;
        this.mr = mr;
    }
}

currentPlayer = new Player("Player Name", 1000, 100, 100, 100, 10000);
currentVilain = new Vilain("Enemy Name", 100000, 100 ,100 ,100 ,100);

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

window.onload = timedAttack;
function timedAttack() {
    var villainAttack = setInterval(vilainAtk, 2000);
}

function vilainAtk() {
    currentPlayer.hp -= currentVilain.ad - 0.1*currentPlayer.armor + currentVilain.ap - 0.3*currentPlayer.mr;
    if(currentPlayer.hp <= 0)
    {
        currentPlayer.hp = 0;
    }
    width = (100*currentPlayer.hp)/initialPHealth;
    player.Rhealth.style.width = width + '%'; 
}

button = document.getElementById("attackButton");
button.onclick = function(){
    currentVilain.hp -= currentPlayer.ad - 0.1*currentVilain.armor + currentPlayer.ap - 0.3*currentVilain.mr;
    if(currentVilain.hp <= 0)
    {
        currentVilain.hp = 0;
    }
    width = (100*currentVilain.hp)/initialVHealth;
    vilain.Rhealth.style.width = width + '%'; 
};


