<?php if(isset($_GET["email"]) && strpos($_GET["email"], '@') && strpos($_GET["email"], '.')) {
        $_SESSION["email"] = $_GET["email"];
        $value = "<span class='alert-success'>password corretta</span>";
    } elseif(empty($_GET["email"])){
        $value = "<span class='alert-danger'>Campo Vuoto</span>";       
    } else {
        $value = "<span class='alert-danger'>Errore</span>";       
    }
     ?>