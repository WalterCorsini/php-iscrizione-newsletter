<?php
session_start();
if(isset($_GET["email"])){
}
// condition for correct email
if (isset($_GET["email"]) && strpos($_GET["email"], '.') && strpos($_GET["email"], '@' )) {
    $_SESSION["email"]= $_GET["email"];
    header('location: ./partials/thankyou.php');
// /condition for correct email

// else error
} elseif(!empty($_GET["email"])) {
    $value = "<span class='alert-danger'>non corrisponde</span>";
}
// else error
    
?>