<?php
session_start();
if(isset($_GET["email"])){
    $_SESSION["email"]= $_GET["email"];
}
// condition for correct email
if (isset($_SESSION["email"]) && strpos($_SESSION["email"], '.') && strpos($_SESSION["email"], '@' )) {
    $_SESSION["auth"] = "ok";
    header('location: ./partials/thankyou.php');
// /condition for correct email

// else error
} elseif(!empty($_SESSION["email"])) {
    $value = "<span class='alert-danger'>non corrisponde</span>";
}
// else error
    
?>