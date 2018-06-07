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

var PRIV_KEY = "5e77d4e14ede7a90f1b56fdf64d6ec33bf7dfe7a";
var PUBLIC_KEY = "8b64a78b95f62f7e1495a58a64050468";


var characterIdArray= ['1009338','1009220','1009351','1009368','1009664'];//hawk,cap'n,hulk,iron,thor
var stage = 2; //hardcoded
var character = null;

function getMarvelResponse() {                                                                           
  var ts = new Date().getTime();
  var hash = CryptoJS.MD5(ts + PRIV_KEY + PUBLIC_KEY).toString();
  
  // the api deals a lot in ids rather than just the strings you want to use

  
  var url = 'http://gateway.marvel.com:80/v1/public/characters/' + characterIdArray[stage];

  console.log(url);
  $.getJSON(url, {
    ts: ts,
    apikey: PUBLIC_KEY,
    hash: hash,
    characters: characterIdArray[0]
    })
    .done(function(data) {
      console.log(data);
      console.log(data.data.results[0].thumbnail.path+'.'+data.data.results[0].thumbnail.extension);
      retrieve(data);
    })
    .fail(function(err){
      console.log(err);
      character = 'sth went wrong';
    });
    
};
getMarvelResponse();

var img = document.createElement("img");
var name = null;
var paragraph = document.createElement("p");

function retrieve(data) {
    character = data.data.results[0];
    img.src = character.thumbnail.path + '/landscape_xlarge' +'.'+ character.thumbnail.extension;
    console.log(character.name);
    document.getElementById("villainName"+stage).innerHTML = data.data.results[0].name; 
    description = document.createTextNode(data.data.results[0].description);
    paragraph.appendChild(description);
}

var src = document.getElementById("villainImg"+stage);
src.appendChild(img);

var element = document.getElementById("villainDesc"+stage);
element.appendChild(paragraph);