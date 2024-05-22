<?php
session_start();
if($_SESSION["auth"]){
        echo "<span class='alert-success'>email corretta</span>";
        $_SESSION["auth"]="";
        $_SESSION["email"]="";
} else {
        header('location: ../index.php');
}
// ?>
<a href="../index.php">log out</a>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../css/style.css">
</head>
<body>
        
</body>
</html>