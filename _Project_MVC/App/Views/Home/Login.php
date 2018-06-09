
<html>
    <head>
        <style type="text/css">
            <?php include 'css/Responsive.css'; ?>
        </style>
        <style type="text/css">
            <?php include 'css/Modal.css'; ?>
        </style>
        <script type="text/javascript">
            <?php include 'js/javascript.js'; ?>
        </script>
    </head>
    <body>
        <div id="id01" class="modal">
            <form class="modal-content animate" method="post" action="../login/index">
                <div class="container">
                    <label>
                        <b>Username</b>
                        <?php
echo $_SESSION['succes'];
?>
                    </label>
                    
                    <input type="text" placeholder="Enter Username" name="username" required autocomplete="off">

                    <label>
                        <b>Password</b>
                    </label>
                    
                    <input type="password" placeholder="Enter Password" name="password" required>

                    <button type="submit" name="login_user" class="">Login</button>

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