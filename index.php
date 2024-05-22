<?php
require_once __DIR__. "/partials/function.php";

if (!isset($_SESSION)) {
    session_start();
}
if(isset($_GET["email"])){
    $_SESSION["email"]= $_GET["email"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- style css -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <form action="" method="GET">
        <label for="email">inserisci la tua email</label>
        <input id="email" type="text" name="email" value="<?php echo isset($_SESSION["email"])? $_SESSION["email"] : '';?>">
        <button type="submit">invia</button>
    </form>

    <?php echo $value;
            ?>

</body>
</html>