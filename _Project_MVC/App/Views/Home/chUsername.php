<style type="text/css">
<?php include 'style.php'; ?>
</style>
<script type="text/javascript">
<?php include 'javascript.js'; ?>
</script>
<div id="id04" class="modal">

        <form class="modal-content animate">

            <div class="container">
                <label>
                    <b>Old Username</b>
                </label>
                <input type="text" placeholder="Enter Old Username" name="ouname" required autocomplete="off">
                <label>
                    <b>New Username</b>
                </label>
                <input type="text" placeholder="Enter New Username" name="nuname" required autocomplete="off">

                <label>
                    <b>Password</b>
                </label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="button" class="">Submit</button>

            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn">Cancel</button>
            </div>
        </form>
    </div>