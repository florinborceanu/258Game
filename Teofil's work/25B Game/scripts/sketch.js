
var PRIV_KEY = "5e77d4e14ede7a90f1b56fdf64d6ec33bf7dfe7a";
var PUBLIC_KEY = "8b64a78b95f62f7e1495a58a64050468";


var characterHero;
var wolverine = null;
function getMarvelResponse() {                                                                           
  var ts = new Date().getTime();
  var hash = CryptoJS.MD5(ts + PRIV_KEY + PUBLIC_KEY).toString();
  
  // the api deals a lot in ids rather than just the strings you want to use
  var characterId = '1009718'; // wolverine                                                                             

  var url = 'http://gateway.marvel.com:80/v1/public/characters/1009718';

  console.log(url);
  $.getJSON(url, {
    ts: ts,
    apikey: PUBLIC_KEY,
    hash: hash,
    characters: characterId
    })
    .done(function(data) {
      // sort of a long dump you will need to sort through
      console.log(data);
      console.log(data.data.results[0].thumbnail.path+'.'+data.data.results[0].thumbnail.extension);
      retrieve(data);
    })
    .fail(function(err){
      // the error codes are listed on the dev site
      console.log(err);
      wolverine = 'sth went wrong';
    });
    
};
getMarvelResponse();

var img = document.createElement("img");
//img.src = wolverine.thumbnail.path+ '.'+ wolverine.thumbnail.extension;

function retrieve(data) {
    wolverine = data.data.results[0];
    console.log("worked");
    img.src = wolverine.thumbnail.path + '/landscape_xlarge' +'.'+ wolverine.thumbnail.extension;

}

var src = document.getElementById("villainImg");
src.appendChild(img);


