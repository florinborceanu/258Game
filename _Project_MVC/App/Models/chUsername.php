<?php
$username = "";
$email    = "";
$errors = array(); 

$host = 'localhost';
$dbname = 'Scharak';
$username = 'root';
$password = 'r22825462';

$conn = mysqli_connect($host, $username, $password, $dbname);

if (isset($_POST['change_username'])) {
  // receive all input values from the form
    $new_username = mysqli_real_escape_string($conn, $_POST['newUsername']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
}
    $var = explode("-", $_COOKIE['user_id']);
    $id= $var[1];

    $password = md5($password);
    $query = "select password from Accounts where id=$id";
    $result = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($result);
    if($password==$result['password']) {
        $query = "UPDATE `Accounts` SET `username`= '$new_username' where id=$id ";
        mysqli_query($conn, $query);
    }
    header('Location: ../home/index');
    exit();