<?php 
session_start();
session_unset();
$_SESSION["email"]="";
$_SESSION["email"]= $_GET["email"];
if (isset($_SESSION["email"]) && strpos($_SESSION["email"], '.') && strpos($_SESSION["email"], '@' )) {
        echo "@ e . trovati";
        $_SESSION["auth"]= "ok";
        header('location: ./partials/thankyou.php');
    } else {
        if(!empty($_SESSION["email"])){
            $value = "<span class='alert-danger'>non corrisponde</span>";
        }
    }
?>