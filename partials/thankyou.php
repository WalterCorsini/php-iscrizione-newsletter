<?php
// controll key auth
session_start();
if ($_SESSION["auth"]) {
        $value = "<span class='d-flex align-items-center justify-content-center alert-success'>email corretta</span>";
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
         <!-- bootstrap -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
        <!-- log-out -->
        <div class="p-5 d-flex flex-column justify-content-center align-items-center">
                <?= $value ?>
                <a class="m-3 btn btn-outline-success" href="../index.php">log out</a>
        </div>
        <!-- /log-out -->
</body>

</html>
<!-- html -->