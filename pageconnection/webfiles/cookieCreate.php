<?php 
    setcookie("hasConsent", TRUE, time() + 15);
    header("Location: ./cookies.php");
?>