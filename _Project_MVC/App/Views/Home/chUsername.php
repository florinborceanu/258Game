
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
        <div id="id04" class="modal">
            <form class="modal-content animate" method="post" action="../changeUsername/index">
                <div class="container">
                    
                    <label>
                        <b>New Username</b>
                    </label>
                    
                    <input type="text" placeholder="Enter New Username" name="newUsername" required autocomplete="off">

                    <label>
                        <b>Password</b>
                    </label>
                    
                    <input type="password" placeholder="Enter Password" name="password" required>

                    <button type="submit" name="change_username" class="">Submit</button>

                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn">Cancel</button>
                </div>
            </form>
        </div>
    </body>
</html>