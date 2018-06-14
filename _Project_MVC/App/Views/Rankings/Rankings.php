
<html>
    <head>
        <style type="text/css">
            <?php include 'css/Responsive.css'; ?>
        </style>
        <style type="text/css">
            <?php include 'css/Rankings.css'; ?>
        </style>
        <script type="text/javascript">
            <?php include 'js/javascript.js'; ?>
        </script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Orbitron">
    </head>
    <body>
        <div class="content">
            <div class="textBox">ScharaK</div>
            <div class="SubTextBox">Rankings</div>
            <div id="center">
                <div class="column" id="rank">
                    <div class="row" id="colNames">Rank</div>
                    <div class="row">#1</div>
                    <div class="row">#2</div>
                    <div class="row">#3</div>
                    <div class="row">#4</div>
                    <div class="row">#5</div>
                    <div class="row">#6</div>
                </div>
                <div class="column" id="name">
                    <div class="row" id="colNames">Name</div>
                    <div class="row">
                        <div class="name">
                            <?php 
                                echo $ranks[0]['nickname'];
                            ?>
                        </div>
                        <div class="infoBox">
                            <div class="align">
                                <div>
                                    <img src="/imgs/av1.png">
                                </div>
                                <div class="info">
                                    <div>level:??</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="name">
                            <?php 
                                echo $ranks[1]['nickname'];
                            ?>
                        </div>
                        <div class="infoBox">
                            <div class="align">
                                <div>
                                    <img src="/imgs/av2.png">
                                </div>
                                <div class="info">
                                    <div>level:??</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="name">
                            <?php 
                                echo $ranks[2]['nickname'];
                            ?>
                        </div>
                        <div class="infoBox">
                            <div class="align">
                                <div>
                                    <img src="/imgs/av3.png">
                                </div>
                                <div class="info">
                                    <div>level:??</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="name">
                            <?php 
                                echo $ranks[3]['nickname'];
                            ?>
                        </div>
                        <div class="infoBox">
                            <div class="align">
                                <div>
                                    <img src="/imgs/av4.png">
                                </div>
                                <div class="info">
                                    <div>level:??</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="name">
                            <?php 
                                echo $ranks[4]['nickname'];
                            ?>
                        </div>
                        <div class="infoBox">
                            <div class="align">
                                <div>
                                    <img src="/imgs/av5.png">
                                </div>
                                <div class="info">
                                    <div>level:??</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="name">
                            <?php 
                                echo $ranks[5]['nickname'];
                            ?>
                        </div>
                        <div class="infoBox">
                            <div class="align">
                                <div>
                                    <img src="/imgs/av6.png">
                                </div>
                                <div class="info">
                                    <div>level:??</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column" id="class">
                    <div class="row" id="colNames">Class</div>
                    <div class="row">
                        <?php 
                            if($ranks[0]['class'] == 0) {
                                echo "None";
                            } else if($ranks[0]['class'] == 1) {
                                echo "Archer";
                            } else if($ranks[0]['class'] == 2) {
                                echo "Mage";
                            } else if($ranks[0]['class'] == 3) {
                                echo "Assasin";
                            } else if($ranks[0]['class'] == 4) {
                                echo "Warrior";
                            } 
                        ?>
                    </div>
                    <div class="row">
                        <?php 
                            if($ranks[0]['class'] == 0) {
                                echo "None";
                            } else if($ranks[1]['class'] == 1) {
                                echo "Archer";
                            } else if($ranks[1]['class'] == 2) {
                                echo "Mage";
                            } else if($ranks[1]['class'] == 3) {
                                echo "Assasin";
                            } else if($ranks[1]['class'] == 4) {
                                echo "Warrior";
                            } 
                        ?>
                    </div>
                    <div class="row">
                        <?php 
                            if($ranks[2]['class'] == 0) {
                                echo "None";
                            } else if($ranks[2]['class'] == 1) {
                                echo "Archer";
                            } else if($ranks[2]['class'] == 2) {
                                echo "Mage";
                            } else if($ranks[2]['class'] == 3) {
                                echo "Assasin";
                            } else if($ranks[2]['class'] == 4) {
                                echo "Warrior";
                            } 
                        ?>
                    </div>
                    <div class="row">
                        <?php 
                            if($ranks[3]['class'] == 0) {
                                echo "None";
                            } else if($ranks[3]['class'] == 1) {
                                echo "Archer";
                            } else if($ranks[3]['class'] == 2) {
                                echo "Mage";
                            } else if($ranks[3]['class'] == 3) {
                                echo "Assasin";
                            } else if($ranks[3]['class'] == 4) {
                                echo "Warrior";
                            } 
                        ?>
                    </div>
                    <div class="row">
                        <?php 
                            if($ranks[4]['class'] == 0) {
                                echo "None";
                            } else if($ranks[4]['class'] == '1') {
                                echo "Archer";
                            } else if($ranks[4]['class'] == '2') {
                                echo "Mage";
                            } else if($ranks[4]['class'] == '3') {
                                echo "Assasin";
                            } else if($ranks[4]['class'] == '4') {
                                echo "Warrior";
                            } 
                        ?>
                    </div>
                    <div class="row">
                        <?php 
                            if($ranks[5]['class'] == 0) {
                                echo "None";
                            } else if($ranks[5]['class'] == 1) {
                                echo "Archer";
                            } else if($ranks[5]['class'] == 2) {
                                echo "Mage";
                            } else if($ranks[5]['class'] == 3) {
                                echo "Assasin";
                            } else if($ranks[5]['class'] == 4) {
                                echo "Warrior";
                            } 
                        ?>
                    </div>
                </div>
                <div class="column" id="score">
                    <div class="row" id="colNames">Score</div>
                    <div class="row">
                        <?php 
                            echo $ranks[0]['score'];
                        ?>
                    </div>
                    <div class="row">
                        <?php 
                            echo $ranks[1]['score'];
                        ?>
                    </div>
                    <div class="row">
                        <?php 
                            echo $ranks[2]['score'];
                        ?>
                    </div>
                    <div class="row">
                        <?php 
                            echo $ranks[3]['score'];
                        ?>
                    </div>
                    <div class="row">
                        <?php 
                            echo $ranks[4]['score'];
                        ?>
                    </div>
                    <div class="row">
                        <?php 
                            echo $ranks[5]['score'];
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>