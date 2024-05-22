<?php   
        if (isset($_SESSION)) {
            session_start();
        }
        
        if(isset($_GET["email"]) && strpos($_GET["email"], '@') && strpos($_GET["email"], '.')) {
            header('location: ./partials/thankyou.php?');
        } elseif(isset($_GET["email"]) && !empty($_GET["email"])){
            $value = "<span class='alert-danger'>non esiste nessuna corrispondenza per questa email</span>";  
        } elseif(empty($_GET["email"])) {
            $value = "<span class='alert-danger'>campo vuoto</span>"; 
        }
?>