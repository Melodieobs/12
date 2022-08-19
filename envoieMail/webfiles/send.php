<?php 
    if($_POST){
        $name = $_POST['nom'];
        $email = $_POST['mail'];
        $msg = $_POST['message'];

        $headers =  "From: $email \r\n" .
                    "Reply-To: $email \r\n" .
                    'X-Mailer: PHP/' . phpversion();

        mail("obsmoe12@gmail.com", "formulaire de contact du site ....", $msg, $headers);
    }

?>