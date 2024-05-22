<?php if(isset($_GET["email"]) && strpos($_GET["email"], '@') && strpos($_GET["email"], '.') ) {
        $_SESSION["email"] = $_GET["email"];
        $value = "password corretta";
    } else {
        $value = "Errore";       
    }
     ?>