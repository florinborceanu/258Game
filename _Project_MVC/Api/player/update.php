<?php
  header('Content-Type: text/plain');
  $test = utf8_encode($_POST['test']); // Don't forget the encoding
  $data = json_decode($test);
  function console_log( $data ){
      echo '<script>';
      echo 'console.log('.
      json_encode( $data ) .')';
      echo '</script>';
  }

  $var = "futMamaTa";
  console_log($test);
  exit();
 ?>