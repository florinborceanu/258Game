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

        $query = "INSERT INTO `Accounts`(`username`, `password`, `email`) VALUES ('$username','$password','$email');";
        mysqli_query($conn, $query);
        $user_check_query = "SELECT * FROM Accounts WHERE username='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($conn, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        $uid=(int)$user['id'];
        
        $query="INSERT INTO `Characters`(`uid`, `level`, `stage`, `class`, `money`, `st_points`, `experience`, `score`, `nickname`) VALUES ($uid,1,1,0,0,0,0,0,'$nickname');";
        mysqli_query($conn, $query);
        
        $query = "insert into Items (uid, helmet, chest, pants, firstWeapon, secondWeapon) values ( $uid, 1, 1, 1, 1, 1)";
        mysqli_query($conn, $query);
        $query = "INSERT INTO Stats (uid, health, ad, ap, ar, mr) values ($uid, 1, 1, 1, 1, 1)";
        mysqli_query($conn, $query);
        $user_id = "-" . $uid ."-";
  	    setcookie("user_id", $user_id, time()+(3600*80),"/");
        header('location: ../home/index');
        exit();
    } else {
        header('location: ../home/index');
    }
    
}
?>
    
    
