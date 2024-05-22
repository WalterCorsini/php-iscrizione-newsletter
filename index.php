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

    <body>

        <!-- form -->
        <form class="d-flex flex-column text-center align-items-center justify-content-center w-50 m-auto p-5" method="GET">
            <div class="d-flex flex-column align-items-center justify-content-center p-5">
                <label for="email">inserisci email</label>
                <input type="text" id="email" name="email" value="<?php echo $_SESSION["email"];?>">
                <button type="submit"> clicca</button>
            </div>
            
            <?php echo $value; ?>
            
        </form>
        <!-- /form -->

        <!-- print message -->
        <!-- /print message -->

    </body>
</html>