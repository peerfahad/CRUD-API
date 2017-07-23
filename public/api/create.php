<?php

require __DIR__ . '/../../config/db_config.php';

  $post = $_POST;

  $sql = "INSERT INTO student (name,father_name,email,phone) 
		  VALUES ('".$post['name']."','".$post['father_name']."','".$post['email']."','".$post['phone']."')";

  $result = $mysqli->query($sql);

  $sql = "SELECT * FROM student Order by id desc LIMIT 1"; 

  $result = $mysqli->query($sql);

  $data = $result->fetch_assoc();

echo json_encode($data);
