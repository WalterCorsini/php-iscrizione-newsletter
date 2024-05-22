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
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body class="body">

        <!-- form -->
        <form class="d-flex flex-column text-center align-items-center justify-content-center text-center w-50 m-auto p-5" method="GET">
            <input type="text" aria-label="email" placeholder="inserisci la tua email" id="email" name="email" value="<?php echo $_SESSION["email"];?>">
            <button class="mt-3 btn btn-success" type="submit"> clicca</button>
        </form>
        <!-- /form -->
        <div class="mt-5 d-flex justify-content-center align-items-center">
            <?php echo $value; ?>
        </div>
        <!-- print message -->
        <!-- /print message -->

    </body>
</html>