
<!DOCTYPE html>
<html>

<head>
    <title>Scharak Online</title>
    <style type="text/css">
        <?php include 'css/fontStyle.css'; ?>
    </style>
    <style type="text/css">
        <?php include 'css/main.css'; ?>
    </style>
    <style type="text/css">
        <?php include 'https://fonts.googleapis.com/css?family=Ubuntu'; ?>
    </style>
    
</head>
<body>
<div id="backButton"><a href="../home/index" style="text-decoration: none; color: black;"><< Main page</a></div>
    <div id="loadingScreen">
        <div class="loader centered"></div>
    </div>
    <div id="classScreen" class="hidden" style="color: white;">
        <div id="classText">Choose Your Class</div>
        <div id="firstClass" class="stage" onclick="loadClass(1)">
        </div>
        <div id="secondClass" class="stage" onclick="loadClass(2)">
        </div>
        <div id="thirdClass" class="stage" onclick="loadClass(3)">
        </div>
        <div id="fourthClass" class="stage" onclick="loadClass(4)">
        </div>
        <div id="fifthClass" class="stage" onclick="loadClass(5)">
        </div>
    </div>
    <div id="stageScreen" class="hidden">
        <div id="stageText">Choose a Stage</div>
        <div id="firstStage" class="stage" onclick="loadStage(1)">
        </div>
        <div id="secondStage" class="stage" onclick="loadStage(2)">
        </div>
        <div id="thirdStage" class="stage" onclick="loadStage(3)">
        </div>
        <div id="fourthStage" class="stage" onclick="loadStage(4)">
        </div>
        <div id="fifthStage" class="stage" onclick="loadStage(5)">
        </div>
    </div>
    <div id="gameScreen" class="hidden">
        <div class="items">
            <div class="itemContainer">
                
                <div id="classImg">
                </div>
                <div class="statsCol">
                <div id="healthUpgrade" class="statsPoint" onclick="upgrade(1)">
                    <span class="icon" data-icon="&#xe0cb;"></span>
                </div>
                <div id="adUpgrade" class="statsPoint" onclick="upgrade(2)">
                    <span class="icon" data-icon="&#xe0e8;"></span>
                </div>
                <div id="apUpgrade" class="statsPoint" onclick="upgrade(3)">
                    <span class="icon" data-icon="&#xe176;">
                    </span>
                    
                </div>
                <div id="armorUpgrade" class="statsPoint" onclick="upgrade(4)">
                    <span class="icon" data-icon="&#xe006;"></span>
                </div>
                <div id="mrUpgrade" class="statsPoint" onclick="upgrade(5)">
                    <span class="icon" data-icon="&#xe04f;"></span>
                </div>
            </div>
            <div class="itemsCol">
                <div id="helmetUpgrade" class="itemUpgrade" onclick="upgrade(6)">
                    <span class="icon" data-icon="&#xe18f;"></span>
                </div>
                <div id="chestUpgrade" class="itemUpgrade" onclick="upgrade(7)">
                    <span class="icon" data-icon="&#xe1a9;"></span>
                </div>
                <div id="pantsUpgrade" class="itemUpgrade" onclick="upgrade(8)">
                    <span class="icon" data-icon="&#xe2b1;"></span>
                </div>
                <div id="mweapUpgrade" class="itemUpgrade" onclick="upgrade(9)">
                    <span class="icon" data-icon="&#xe107;"></span>
                </div>
                <div id="sweapUpgrade" class="itemUpgrade" onclick="upgrade(10)">
                    <span class="icon" data-icon=" &#xe179;"></span>
                </div>
            </div>
            </div>
            
            
        </div><div class="game">
            <div id="vilainDetails">
            </div>
            <div id="vilainHealth">
                <div id="vilainRealHealth"></div>
            </div>
            <div id="playerDetails">
            </div>
            <div id="playerHealth">
                <div id="playerRealHealth"></div>
            </div>
            <div id="playerExp">
                <div id="playerRealExp"></div>
            </div>
            <div id="mainView">
                <div id ="container">
                        <div id ="animate"></div>
                        <div id ="animateEnemyAttack"></div>
                </div>
            </div>
            <div id="battleField">
                <div id="attackButton">Fight!</div>
            </div>
        </div><div class="stats">
            <div id="vilainContainer">
                <div id="vilainImg">
                    

                </div>
                <div id="vilainDesc">

                </div>
                <center><div id="surrenderButton">Surrender</div>
                <div id="pauseButton">Pause</div></center>
            </div>
        </div>
    </div>
    <div id="afterGame" class="hidden">
        <div id="stateText"></div>
        <div id="scoreBoard"></div>
        <div id="stageScore"></div>
        <div id="totalScore"></div>
        <div id="backToStage">Back to stages</div>
    </div>

</body>
    
    <script type="text/javascript">
        <?php include 'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'; ?>
    </script>
    <script type="text/javascript">
        <?php include 'js/crypto-md5.js'; ?>
    </script>
    <script type="text/javascript">
        <?php include 'js/main.js'; ?>
    </script>
    
    
    

</html>