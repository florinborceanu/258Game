<html>
    <head>
        <style type="text/css">
            <?php include 'css/Responsive.php'; ?>
        </style>
        <style type="text/css">
            <?php include 'css/Modal.php'; ?>
        </style>
        <script type="text/javascript">
            <?php include 'js/javascript.js'; ?>
        </script>
    </head>
    <body>
        <div id="id01" class="modal">
            <form class="modal-content animate">
                <div class="container">
                    <label>
                        <b>Username</b>
                    </label>
                    
                    <input type="text" placeholder="Enter Username" name="uname" required autocomplete="off">

                    <label>
                        <b>Password</b>
                    </label>
                    
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <button type="button" onclick="logIn();" class="">Login</button>

                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    <span class="psw">Forgot
                        <a href="#">password?</a>
                    </span>
                </div>
            </form>
        </div>
    </body>
</html>