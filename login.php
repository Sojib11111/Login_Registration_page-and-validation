<?php
include "db.php";
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = $conn->prepare("SELECT * FROM users WHERE email=? AND password=?");
    $sql->bind_param("ss", $email, $password);
    $sql->execute();
    $result = $sql->get_result();

    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        $_SESSION["email"] = $email;
        $_SESSION["username"] = $row["username"];
        header("location: dashbord.php");
        exit();
    }
    else{
        echo "Login failed";
    }
}
else{
    echo "Invalid request method";
}
?>
