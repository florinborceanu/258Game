<?php
$username = "";
$email    = "";
$errors = array(); 

$host = 'localhost';
$dbname = 'Scharak';
$username = 'root';
$password = 'r22825462';

$conn = mysqli_connect($host, $username, $password, $dbname);

if (isset($_POST['change_password'])) {
  // receive all input values from the form
    $old_password = mysqli_real_escape_string($conn, $_POST['old_password']);
    $new_password = mysqli_real_escape_string($conn, $_POST['new_password']);
    $r_new_password = mysqli_real_escape_string($conn, $_POST['r_new_password']);
}
    $var = explode("-", $_COOKIE['user_id']);
    $id= $var[1];
    
    if($new_password==$r_new_password) {
        
        $old_password = md5($old_password);
        $query = "select password from Accounts where id=$id";
        $result = mysqli_query($conn, $query);
        $result = mysqli_fetch_assoc($result);
        if($old_password==$result['password']) {
            $new_password= md5($new_password);
            $query = "UPDATE `Accounts` SET `password`= '$new_password' where id=$id ";
            mysqli_query($conn, $query);
        }
    }
    header('Location: ../home/index');
    exit();