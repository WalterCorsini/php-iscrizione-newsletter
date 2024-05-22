<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php
    if (isset($_SESSION)) {
        session_start();
    }
    require_once __DIR__ . "/function.php";
    echo "<span class='alert-success'>password corretta</span>";
    ?>
    <a href="index.php"></a>
</body>
</html>