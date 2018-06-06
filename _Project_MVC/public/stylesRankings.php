* {
    user-select: none;
}
    @font-face {
        font-family: titleFont;
        src: url(/fonts/Muskaters.ttf);
    }

    @font-face {
        font-family: playFont;
        src: url(/fonts/ERASBD.ttf);
    }

    @font-face{
        font-family: Font_SC;
        src: url(/imgs/font.ttf) format('truetype');
    }
        
    @font-face{
        font-family: Font_TA;
        src: url(/imgs/Tahu!.ttf) format('truetype');
    }

    
    
    body {
        background-attachment: fixed;
        background-color: white;
        background-image: url("/imgs/pic1.png");
        background-position: center top;
        background-repeat: no-repeat;
        background-size: cover;
        margin:0px;
        width:100%;

    }

    
    .textBox{
        color : white;
        font-family:Font_SC;
        font-size:100px;
        margin-left:auto;
        margin-right:auto;
        position:relative;
        text-align: center;
        top:40px;
    }
    
    .SubTextBox{
        color : #8bd1d0;
        font-family:Font_SC;
        font-size:40px;
        position:relative;
        text-align: center;
        top:-67px;
    }
    
    
        
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        opacity: 0.8;
    }

    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
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
        transition: 0.5s;
        padding-top: 60px;
    }

    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font: 400 15px/1.8 "Lato", sans-serif;
        font-size: 25px;
        color: #777;
        font-size: 25px;
        display: block;
        transition: 0.3s;
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
    z-index: 8;
}
#center {
    display: flex;
    flex-direction: row;
    width: 60%;
    margin-left: auto;
    margin-right: auto;
    background: linear-gradient(60deg,rgba(224, 158, 132, 0.85),rgba(124, 124, 114, 0.85),rgba(124, 124, 114, 0.815),rgba(224, 158, 132, 0.821));
    border-radius: 20px;
    padding-left: 20px;
    padding-right: 20px;
}
.column {
    
}
#rank{
    width: 10%;
}
#name {
    width: 40%;
}
#class{
    width: 25%;
}
#score {
    width: 25%;
}
.row {
    font-family: Orbitron;
    font-size: 2vw;;
    color:black;
    display: flex;
    flex-direction: column;
    text-align: center;
    padding-top: 10px;
    padding-bottom: 10px;
    border-top: 1px black solid;
}

#colNames {
    border-top: none;
    border-bottom: 1px black solid;
    font-weight: bold;
    font-size: 3vw;
}

.infoBox{
    background: linear-gradient(60deg,rgb(77, 77, 66),#313631,#2f332f,rgb(75, 75, 66));
    position: absolute;
    display: none;
    z-index: 9;
    border-radius: 5px;
    width: 15%;
    margin-left: 24%;
    margin-top: -2.2%;
}
.infoBox img {
    width: 80px;
    height: 80px;
    border-radius: 1000px;
    position: relative;
    float: left;
    margin-left: -40px;
    margin-top: 5px;
    margin-bottom: 5px;
}
.name:hover + .infoBox{
    display: block;
}
.align{
    display: flex;
    flex-direction: row;
}
.info {
    width: 80%;
    height: 80%;
    margin: auto;
    margin-left: 10%;
    margin-right: 10%;
    color: white;
    font-family: Orbitron;
}


@media screen and (max-width: 600px){
    #center { width: 85%; }
    #class{display: none;}
    #rank{width: 15%;}
    #name {width: 50%;}
    #score {width: 35%;}
    .row {font-size: 4vw;}
    #colNames{font-size: 5vw;}
    .name:hover + .infoBox{display: none;}
    
}


 
     