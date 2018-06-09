<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../config/Database.php';
  include_once '../../models/Player.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  /$player = new Player($db);

   $result = $player->read();
  
   $num = $result->rowCount();

  if($num > 0) {
   
    $players_arr = array();
    $players_arr['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
      extract($row);

      $player_item = array(
        id    => $id,
        uid   => $uid,
        level => $level,
        stage => $stage,
        class => $class,
        money => $money,
        st_points =>  $st_points,
        experience => $experience,
        score => $score
      );

      // Push to "data"
      array_push($players_arr['data'], $player_item);
    }

    // Turn to JSON & output
    echo json_encode($players_arr);

  } else {

        echo json_encode(
          array('message' => 'No players Found')
        );
  }
