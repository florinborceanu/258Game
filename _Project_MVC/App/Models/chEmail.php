<?php
$username = "";
$email    = "";
$errors = array(); 

$host = 'localhost';
$dbname = 'Scharak';
$username = 'root';
$password = 'r22825462';

$conn = mysqli_connect($host, $username, $password, $dbname);

if (isset($_POST['change_email'])) {
  // receive all input values from the form
    $old_email = mysqli_real_escape_string($conn, $_POST['username']);
    $new_email = mysqli_real_escape_string($conn, $_POST['oldEmail']);
    $password = mysqli_real_escape_string($conn, $_POST['newEmail']);
}
print_r($_COOKIE['user_id']);
    

?>
    
    
