<?php
$username = "";
$email    = "";
$errors = array(); 

$host = 'localhost';
$dbname = 'Scharak';
$username = 'root';
$password = 'r22825462';

$conn = mysqli_connect($host, $username, $password, $dbname);

if (isset($_POST['reg_user'])) {
  // receive all input values from the form
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $nickname = mysqli_real_escape_string($conn, $_POST['nickname']);
    $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
    
    if ($password_1 != $password_2) {
	   array_push($errors, "The two passwords do not match");
    }
    
    $user_check_query = "SELECT * FROM Accounts WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);
  
    if ($user) { // if user exists
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
        }

        if ($user['email'] === $email) {
        array_push($errors, "email already exists");
        }
    }
    if (count($errors) == 0) {
        $password = md5($password_1);//encrypt the password before saving in the database

  	     $query = "INSERT INTO `Accounts`(`username`, `password`, `email`, `nickname`) VALUES ('$username','$password','$email','$nickname')";
  	     mysqli_query($conn, $query);
         setcookie("user_id", $username, time()+3600,"/");
         header('location: ../home/index');
    }
    
}

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
  	$query = "SELECT * FROM Accounts WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: ../rankings/index');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>
    
    
