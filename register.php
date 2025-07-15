<?php
  include "db.php";
  $username = $_POST["username"];
  $email = $_POST["email"];  
  $password = $_POST["password"];
  
  $sql = $conn->prepare("INSERT INTO users (username,email,password) VALUES (?,?,?)");
  $sql->bind_param("sss", $username, $email, $password);
  if ($sql->execute()) {
    header("location:login.html");
    exit();
  } else {
    echo "Error:" . $sql->error;
  }
?>