
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
        <div id="id02" class="modal">
                <form class="modal-content animate" action="../register/index" method="post">
                <div class="container">
                    <label>
                        <b>Email</b>
                    </label>
                    <input type="text" placeholder="Enter Email" name="email" required autocomplete="off">
                    <label>
                        <b>Username</b>
                    </label>
                    <input type="text" placeholder="Enter Username" name="username" required autocomplete="off">
                    
                     <label>
                        <b>Nickname</b>
                    </label>
                    <input type="text" placeholder="Enter Nickname" name="nickname" required autocomplete="off">

                    <label>
                        <b>Password</b>
                    </label>
                    <input type="password" placeholder="Enter Password" name="password_1" required>
                    <label>
                        <b>Repeat Password</b>
                    </label>
                    <input type="password" placeholder="Repeat Password" name="password_2" required>

                    <button type="submit" name="reg_user">Register</button>
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                </div>

                    <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                    <span class="psw">Forgot
                        <a href="#">password?</a>
                    </span>
                </div>
            </form>
        </div>
    </body>
</html>