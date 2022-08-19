<!-- Référence au liste pokémon. -->
<ul>
<?php 

    /* Permet de faire référence ou garder les mêmes variable (pour évité de recrée) */
    require("./conn.php");


    if($connexion){


            //On selectionne tout de la table pour pouvoir après l'apparaitre en liste
        $execResult = $connexion->query("SELECT * FROM pokemon_games");
            //Permettra d'afficher le tableau
        $assocResult = $execResult->fetchAll(PDO::FETCH_ASSOC);


        foreach($assocResult as $single):
            ?>
            <li>
            <?= $single["pkmn_id"]; ?> | <?= $single["pkmn_game_name"]; ?> | <?= $single["pkmn_generation"]; ?> | <?= $single["pkmn_release_date"]; ?> | <?= $single["pkmn_support"]; ?> | <?= $single["pkmn_image"]; ?> 
                <a href="./update.php?id=<?= $single["pkmn_id"] ?>">Modifier</a>
                <form action=""></form>
            </li>
            
            <?php
        endforeach;
        
    }
    
    ?>
    </ul>