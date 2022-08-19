<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Réaliser dynamiquement une option">
    <title>option</title>
</head>
<body>
<?php
           $monTab =[
                "MARVEL" =>[
                    "Spiderman",
                    "Iron man",
                    "Hulk",
                    "Quichsilver",
                    "thor"
                ],
                "DC COMICS" =>[
                    "Batman",
                    "Wonder Woman",
                    "Aquaman",
                    "Superman",
                    "Cyclone",
                    "Flash"
                ]
                ];

            ?>

<form method="POST" action="./script/script.php">
    <select name="marvel">
<?php foreach ($monTab as $key => $value) : ?>
    <optgroup label="<?php echo $key; ?>">
        <?php foreach ($value as $single) : ?>
        <option value="<?php echo $single; ?>">
        <?= $single; ?>
        </option>
        <?php endforeach; ?>
    </optgroup>
<?php endforeach; ?>

</select>
    <input type="submit" name="envoyer" >
</form>


</body>
</html>