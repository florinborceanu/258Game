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
        <div id="id05" class="modal">
            <form class="modal-content animate">
                <div class="container">
                    <label>
                        <b>Old Password</b>
                    </label>
                    
                    <input type="password" placeholder="Enter Old Password" name="opsw" required>
                    
                    <label>
                        <b>New Password</b>
                    </label>
                    
                    <input type="password" placeholder="Enter New Password" name="npsw" required>
                    
                    <label>
                        <b>Repeat New Password</b>
                    </label>
                    
                    <input type="password" placeholder="Repeat New Password" name="rnpsw" required>

                    <button type="button" class="">Submit</button>

                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id05').style.display='none'" class="cancelbtn">Cancel</button>
                </div>
            </form>
        </div>
    </body>
</html>