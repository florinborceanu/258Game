<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
// include database and object files
include_once '../Api/config/database.php';
include_once '../Api/objects/villain.php';
 
// instantiate database and player object
$database = new Database();
$db = $database->getConnection();
 
// initialize object
$player = new Villain($db);
 
// query players
$stmt = $player->read();
$num = $stmt->rowCount();
 
// check if more than 0 record found
if($num>0){
 
    // players array
    $players_arr=array();
    $players_arr["records"]=array();
 
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
 
        $player_item=array(
            "id" => $id,
            "stage" => $stage,
            "name" => $name,
            "class" => $class,
            "health" => $health,
            "attack damage" => $ad,
            "ability power" => $ap,
            "armor" => $ar,
            "magic resist" => $mr
            
        );
 
        array_push($players_arr["records"], $player_item);
    }
 
    echo json_encode($players_arr);
}
 
else{
    echo json_encode(
        array("message" => "No players found.")
    );
}
?>