<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');
 
// include database and object files
include_once '../Api/config/database.php';
include_once '../Api/objects/player.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare product object
$product = new Player($db);
 
// set ID property of product to be edited
$product->id = $args[0];
 
// read the details of product to be edited
$product->readOne();
 
// create array
$product_arr = array(
    "id" =>  $product->id,
    "uid" => $product->uid,
    "level" =>  $product->level,
    "stage" => $product->stage,
    "class" =>  $product->class,
    "money" => $product->money,
    "st_points" =>  $product->st_points,
    "experience" => $product->experience,
    "Score" => $product->score
);
 
// make it json format
print_r(json_encode($product_arr));
?>