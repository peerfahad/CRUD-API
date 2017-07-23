<?php

require __DIR__ . '/../../config/db_config.php';

  $id  = $_POST["id"];
  $post = $_POST;

  $sql = "UPDATE student SET name = '".$post['name']."'
    ,father_name = '".$post['father_name']."',email = '".$post['email']."',phone = '".$post['phone']."' 
    WHERE id = '".$id."'";

  $result = $mysqli->query($sql);

  $sql = "SELECT * FROM student WHERE id = '".$id."'"; 

  $result = $mysqli->query($sql);

  $data = $result->fetch_assoc();

  echo json_encode($data);

?>
