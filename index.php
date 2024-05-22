<?php
// require function
require_once __DIR__.'/partials/function.php';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-iscrizione-newsletter</title>
        <!-- style -->
        <link rel="stylesheet" href="./css/style.css">
    </head>

    <body>

        <!-- form -->
        <form method="GET">
            <label for="email">inserisci email</label>
            <input type="text" id="email" name="email" value="<?php echo $_SESSION["email"];?>">
            <button type="submit"> clicca</button>
        </form>
        <!-- /form -->

        <!-- print message -->
        <?php echo $value; ?>
        <!-- /print message -->

</body>
</html>