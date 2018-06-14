<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');
 
// include database and object files
include_once '../Api/config/database.php';
include_once '../Api/objects/villain.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare product object
$product = new Villain($db);
 
// set ID property of product to be edited
$product->id = $id;
 
// read the details of product to be edited
$product->readOne();
 
// create array
$product_arr = array(
    "id" =>  $product->id,
    "stage" => $product->stage,
    "name" =>  $product->name,
    "class" => $product->class,
    "health" =>  $product->health,
    "attack damage" => $product->ad,
    "ability power" =>  $product->ap,
    "armor" => $product->ar,
    "magic resist" => $product->mr
);
 
// make it json format
print_r(json_encode($product_arr));
?>