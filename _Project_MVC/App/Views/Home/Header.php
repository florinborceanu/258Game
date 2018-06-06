<style type="text/css">
<?php include 'style.php'; ?>
</style>
<script type="text/javascript">
<?php include 'javascript.js'; ?>
</script>
<div id="nav">
    <p style="cursor:pointer" onclick="openNav()" id="menu">&#9776;</p>
    </div>
    <div id="buttons">
    <button id="login" onclick="document.getElementById('id01').style.display='block'">LOGIN</button>
    <button id="register" onclick="document.getElementById('id02').style.display='block'">REGISTER</button>
    </div>
    <div id="userPhoto">
        <div class="dropdown-content">
            <a href="#" onclick="document.getElementById('id03').style.display='block'">Change Email</a>
            <a href="#" onclick="document.getElementById('id04').style.display='block'">Change Username</a>
            <a href="#" onclick="document.getElementById('id05').style.display='block'">Change Password</a>
            <a href="#" onclick="logOut()">Log-Out</a>
        </div>
        <a href="#" class="log-reg">
            <img alt="Avatar" src="imgs/avatar.png" style="width: 60px;height:60px;">
        </a>
</div>