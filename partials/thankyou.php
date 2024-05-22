<?php
// controll key auth
session_start();
if ($_SESSION["auth"]) {
        echo "<span class='alert-success'>email corretta</span>";
        // reset value session
        $_SESSION["auth"] = "";
        $_SESSION["email"] = "";
} else {
        // if don't have auth, redirect to home
        header('location: ../index.php');
}
// 
?>

<!-- html -->
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>thankyou</title>
        <!-- style css -->
        <link rel="stylesheet" href="../css/style.css">
</head>

<body>
        <!-- log-out -->
        <a href="../index.php">log out</a>
        <!-- /log-out -->
</body>

</html>
<!-- html -->