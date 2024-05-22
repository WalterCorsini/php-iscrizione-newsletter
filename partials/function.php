<?php
        if (isset($_SESSION)) {
            session_start();
        }
    if(isset($_GET["email"]) && strpos($_GET["email"], '@') && strpos($_GET["email"], '.')) {
        header('location: ./partials/thankyou.php?');
        die();        
    } elseif(empty($_GET["email"])){
        $value = "<span class='alert-danger'>Campo Vuoto</span>";
    } else {
        $value = "<span class='alert-danger'>Errore</span>";       
    }
     ?>