<?php
// controll key auth
session_start();
if ($_SESSION["email"]) {
        $value = "<span class='d-flex align-items-center justify-content-center alert-success'>email corretta</span>";
        // reset value session
        // $_SESSION["auth"] = "";
        // $_SESSION["email"] = "";
        session_destroy();
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
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- style css -->
        <link rel="stylesheet" href="../css/style.css">
</head>

<body class="body">
        <!-- log-out -->
        <div class="btn-logout d-flex flex-column justify-content-center align-items-center">
                <?= $value ?>
                <a class="m-3 btn btn-outline-danger" href="../index.php">log out</a>
        </div>
        <!-- /log-out -->
</body>

</html>
<!-- html -->