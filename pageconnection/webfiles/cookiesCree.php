<?php 
      if($_COOKIE){
        
        ?>
     <h1> <?= $_COOKIE["pseudo"]; ?> </h1>
    <h1> <?= $_COOKIE["password"]; ?>  </h1>
    <?php 
    }
?>