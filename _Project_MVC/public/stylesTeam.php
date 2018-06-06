
  @font-face {
    font-family: Muskaters;
    src: url(/fonts/Muskaters.ttf);
  }
  /* background set */
body {
	background-image: url("/imgs/bg1.png");
	background-color: #cccccc;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-position: center top; 
	background-size: cover;
	margin: 0;
  padding: 0;	
height:100%;
}
  
  /* navigation bar - proper style for Team-page*/
  .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
  }
  .animate {
      animation: animatezoom 0.6s
  } 
  .sidenav {
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 9;
      top: 0;
      left: 0;
      background-color: #111;
      overflow-x: hidden;
      padding-top: 60px;
      transition: 0.3s;
  }
  .sidenav a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font: 400 15px/1.8 "Lato", sans-serif;
      font-size: 25px;
      color: #777;
      display: block;
  }
  .sidenav a:hover {
      color: #f1f1f1;
  }
  .sidenav .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
  }
  #nav {
      background: linear-gradient(to bottom, rgba(0,0,0,0.85), rgba(0,0,0,0));
      position: absolute;
      z-index: 3;
      width: 100%;
  }
  #menu {
      margin-left:30px;
      color: white;
      width:10%;
      font-family: playFont;
      font-size: 30px;
      position: relative;
      margin-top: 1vw;
      margin-left: 2.5vh;
      z-index: 8;
  }
  /* Styles of texts  ###########################################*/
  .textBox{
    font-family:Muskaters;
    color : white;
    text-align: center;
    font-size:16vh;
    position:relative;
    margin-left:auto;
    margin-right:auto;
    top: 3.5vh;
 }
 .subTextBox{
      font-family:Muskaters;   
      color : #5ab3b1;
      text-align: center;
      font-size:8vh;
      position:relative;
      position:relative;
      margin-left:auto;
      margin-right:auto;
      top:-14.5vh; 
 } 
  /* Team style CSS */
 .avatar1{
    margin-left: 4%;
    margin-right: 4%;
    margin-top: 4%;
    padding:1.5%;
    border-radius: 50%;
    height:12.5vw;
    width: 12.5vw;
    opacity: 1;
    position: relative;
    transition: 0.3s;
    top:-10vh;
  }
  .avatar2{
    margin-left: 4%;
    margin-right: 4%;
    margin-top: 4%;
    padding:1.5%;
    border-radius: 50%;
    height:12.5vw;
    width: 12.5vw;
    position: relative;
    transition: 0.3s;
    top:-10vh;
  }
  .avatar3{
    margin-left: 4%;
    margin-right: 4%;
    padding:1.5%;
    border-radius: 50%;
    height:12.5vw;
    width: 12.5vw;
    position: relative;
    transition: 0.3s;
    top:-10vh;
  }
  .avatar4{
    margin-left: 4%;
    margin-right: 4%;
    padding:1.5%;
    border-radius: 50%;
    height:12.5vw;
    width: 12.5vw;
    position: relative;
    transition: 0.3s;
    top:-10vh;
  }
  
 .avatar1:hover{
  background-color: rgba(61, 87, 92, 0.675);
  opacity: 0.85;
  transition: 0.3s;
  }
.avatar2:hover{
  background-color: rgba(61, 87, 92, 0.675);
  opacity: 0.85;
  transition: 0.3s;
  }
.avatar3:hover{
  background-color: rgba(61, 87, 92, 0.675);
  opacity: 0.85;
  transition: 0.3s;
  }
.avatar4:hover{
  background-color: rgba(61, 87, 92, 0.675);
  opacity: 0.85;
  transition: 0.3s;
  }
.closure{
  position: absolute;
  background-color:rgba(192, 154, 121, 0.199);
  width: 100%;
  height: 100%;
  z-index: 7;
  display: none;
}
.popUpArt{
  display: none;
  position:relative;
  font-size: 125%;
  width: 65vw;
  height: 13vw;
  background-color: rgba(255, 255, 255, 0.535);
  border-radius: 5%;
  margin-left:17vw;

  top: 0vh;
}
.authorName{
  top:-5vh;
}
.author1Name{
  font-family: Muskaters;
  font-size: 7vw;
  text-align: center;
  position: relative;
  color: #191925;
  display: none;
  top:-5vh;
}
.author2Name{
  font-family: Muskaters;
  font-size: 7vw;
  text-align: center;
  position: relative;
  color: #191925;
  display: none;
  top:-5vh;
}
.author3Name{
  font-family: Muskaters;
  font-size: 7vw;
  text-align: center;
  position: relative;
  color: #191925;
  display: none;
  top:-5vh;
}
.author4Name{
  font-family: Muskaters;
  font-size: 7vw;
  text-align: center;
  position: relative;
  color: #191925;
  display: none;
  top:-5vh;
}
.author1Description{
  display: none;
  font-size: 3vw;
  text-align: center;
  margin-top: 0vh;
  font-family: 'Times New Roman', Times, serif;
}
.author2Description{
  display: none;
  font-size: 3vw;
  text-align: center;
  margin-top: 0vh;
  font-family: 'Times New Roman', Times, serif;
}
.author3Description{
  display: none;
  font-size: 3vw;
  text-align: center;
  margin-top: 0vh;
  font-family: 'Times New Roman', Times, serif;
}
.author4Description{
  display: none;
  font-size: 3vw;
  text-align: center;
  margin-top: 0vh;
  font-family: 'Times New Roman', Times, serif;
}

/* different proportions for different devices' screens */
@media  (min-width: 481px) and (max-width: 768px){
  .avatar1{
    margin-left: 25%;
    margin-right: 0%;
    margin-top: 0vh;
    height:17vw;
    width: 17vw;
  }
  .avatar2{
    margin-left: 5%;
    margin-right: 25%;
    margin-top: 0vh;
    height:17vw;
    width: 17vw;
  }
  .avatar3{
    margin-left: 25%;
    margin-right: 0%;
    margin-top: 0px;
    height:17vw;
    width: 17vw;
  }
  .avatar4{
    margin-left: 5%;
    margin-right: 25%;
    margin-top: 0px;
    height:17vw;
    width: 17vw;
  }
  .textBox{
    font-size:12vh;
    top: -0.5vh ;
  }
  .subTextBox{
    font-size:6vh;
    top: -14vh ;
  }
}

@media  (min-width: 321px) and (max-width: 375px) {
  .avatar1{
    margin-left: 36%;
    margin-right: 36%;
    margin-top: -4vh;
    height:20vw;
    width: 20vw;
  }
  .avatar2{
    margin-left: 36%;
    margin-right: 36%;
    margin-top: 0px;
    height:20vw;
    width: 20vw;
  }
  .avatar3{
    margin-left: 36%;
    margin-right: 36%;
    margin-top: 0px;
    height:20vw;
    width: 20vw;
  }
  .avatar4{
    margin-left: 36%;
    margin-right: 36%;
    margin-top: 0px;
    height:20vw;
    width: 20vw;
  }
  .textBox{
    font-size:14vh;
    top: 0vh ;
  }
  .subTextBox{
    font-size:8vh;
    margin-top: 0vh ;
  }
  .authorName{
    top:-2.3vh;
  }
}
@media  (min-width: 376px) and (max-width: 480px) {
  .avatar1{
    margin-left: 36%;
    margin-right: 36%;
    margin-top: -4vh;
    height:17vw;
    width: 17vw;
  }
  .avatar2{
    margin-left: 36%;
    margin-right: 36%;
    margin-top: 0px;
    height:17vw;
    width: 17vw;
  }
  .avatar3{
    margin-left: 36%;
    margin-right: 36%;
    margin-top: 0px;
    height:17vw;
    width: 17vw;
  }
  .avatar4{
    margin-left: 36%;
    margin-right: 36%;
    margin-top: 0px;
    height:17vw;
    width: 17vw;
  }
  .textBox{
    font-size:14vh;
    top: 0vh ;
  }
  .subTextBox{
    font-size:8vh;
    top: -15vh ;
  }
  .authorName{
    top:-2.3vh;
  }
}
@media  (max-width: 320px) {
  .avatar1{
    margin-left: 36%;
    margin-right: 36%;
    margin-top: -4vh;
    height:25vw;
    width: 25vw;
  }
  .avatar2{
    margin-left: 36%;
    margin-right: 36%;
    margin-top: 0px;
    height:25vw;
    width: 25vw;
  }
  .avatar3{
    margin-left: 36%;
    margin-right: 36%;
    margin-top: 0px;
    height:25vw;
    width: 25vw;
  }
  .avatar4{
    margin-left: 36%;
    margin-right: 36%;
    margin-top: 0px;
    height:25vw;
    width: 25vw;
  }
  .authorName{
    top:-1.8vh;
  }
  .textBox{
    font-size:14vh;
    top: 0vh ;
  }
  .subTextBox{
    font-size:8vh;
    top: -15vh ;
  }
}
