<?php

$username = "";
$email    = "";
$errors = array(); 

$host = 'localhost';
$dbname = 'Scharak';
$username = 'root';
$password = 'r22825462';

$conn = mysqli_connect($host, $username, $password, $dbname);
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT id FROM Accounts WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {
      $user_id = implode(" ",mysqli_fetch_assoc($results));
      $user_id = "&" . $user_id ."&";
  	  setcookie("user_id", $user_id, time()+(3600*80),"/");
        header('location: ../home/index');
      exit();
  	} else {
  		array_push($errors, "Wrong username/password combination");
        header('location: ../home/index');
  	}
  }
}

?>