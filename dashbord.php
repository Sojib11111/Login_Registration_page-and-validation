<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashbord</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dash">
        <h1>Welcome, <?= htmlspecialchars($_SESSION["username"]) ?>!</h1>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>