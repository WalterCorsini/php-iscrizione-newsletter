<?php
$a = "ciao";
$b = "pippo";
if(!empty($_GET["email"])){
    $email= $_GET["email"];
}
require_once __DIR__. "/partials/function.php";
if (!isset($_SESSION["email"])) {
    session_unset();
    echo $a;
} else {
    session_start();
    $_SESSION["email"]= $_GET["email"];
    echo $b;
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
    <form method="GET">
        <label for="email">inserisci la tua email</label>
        <input id="email" type="text" name="email" value="<?php echo isset($email) ? $email : '';?>">
        <button type="submit">invia</button>
    </form>
    <?php echo $value;?>


</body>
</html>