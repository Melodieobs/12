<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="création de cookies">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>

    <?php if(!isset($_COOKIE['hasConsent'])): ?>
        <div class="center">
            <div class="bandeau">
                <div class="paragraphe">
                    <p>Voulez vous accepter le cookie : </p>
                </div>
                <a href="cookieCreate.php" title="Accepter les cookies">Accepter</a>
                <a href="#" title="Refuser les cookies">Refuser</a>
            </div>
        </div>
    <?php endif; ?>
</body>
</html>