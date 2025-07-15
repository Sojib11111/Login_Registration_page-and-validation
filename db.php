<?php
$host ="localhost";
$user = "root";
$pass ="111245";
$db ="user_role";

$conn =new mysqli($host,$user,$pass,$db);

if($conn -> connect_error){
    die("connection failed:".$conn -> connect_error);
}
?>