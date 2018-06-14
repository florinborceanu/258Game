
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
        <div id="id03" class="modal">
            <form class="modal-content animate" method="post" action="../changeEmail/index">
                <div class="container">
                    <label>
                        <b>New Email</b>
                    </label>
                    
                    <input type="text" placeholder="Enter New Email" name="newEmail" required autocomplete="off">

                    <label>
                        <b>Password</b>
                    </label>
                    
                    <input type="password" placeholder="Enter Password" name="password" required>

                    <button type="submit" name="change_email" class="">Submit</button>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
                </div>
            </form>
        </div>
    </body>
</html>