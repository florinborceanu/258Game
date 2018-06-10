<?php
include_once '../Api/config/database.php';


$host = 'localhost';
$dbname = 'Scharak';
$username = 'root';
$password = 'r22825462';

$conn = mysqli_connect($host, $username, $password, $dbname);

 $manage = json_decode($_COOKIE['test'], true);
print_r($manage);
 $level=$manage['level'];
 $stage=$manage['stage'];
 $class=$manage['class'];
 $pieces=$manage['pieces'];
 $stsPoints=$manage['stsPoints'];
 $exp=$manage['exp'];
 $score=$manage['score'];
 $id=$manage['id'];

 $query = "UPDATE Characters SET `level`='$level',`stage`='$stage',`class`='$class',`money`='$pieces',`st_points`='$stsPoints',`experience`='$exp'
 ,`score`='$score' WHERE uid = '$id';";
mysqli_query($conn, $query);

$helmet=$manage['helmet'];
$chest=$manage['chest'];
$pants=$manage['pants'];
$mainWeap=$manage['mainWeap'];
$secWeap=$manage['secWeap'];

$query = "UPDATE `Items` SET `Helmet`='$helmet',`Chest`='$chest',`Pants`='$pants',`firstWeapon`='$mainWeap',`secondWeapon`='$secWeap' WHERE uid = '$id';";
mysqli_query($conn, $query);

$health=$manage['maxHP'];
$ad=$manage['ad'];
$ar=$manage['armor'];
$ap=$manage['ap'];
$mr=$manage['mr'];


$query ="UPDATE `Stats` SET `health`='$health',`ad`='$ad',`ap`='$ap',`ar`='$ar',`mr`='$mr'  WHERE uid = '$id';";
mysqli_query($conn, $query);

 ?>