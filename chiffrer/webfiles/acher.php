<?php 

    $pass = $_POST['pwd'];
    $r = hash('md5', $pass);
    echo $r;

?>
