<?php


require_once __DIR__ . '/vendor/autoload.php';

use Chris\PasswordGenerator\PasswordGenerator;

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="./index.php" method="post">
        <label>
            Longueur du mot de passe :
            <input type="number" name="length" value="12" required>
        </label>
        <button type="submit" name="generate">Générer le mot de passe</button>
    </form>

    <?php

    if (isset($_POST['length'])) {

        $length = (int) $_POST['length'];
        echo 'La longueur du mot de passe est : ' . htmlspecialchars($length) . '<br>';

        try {
            $password = PasswordGenerator::generatePassword($length);
            echo 'Le mot de passe généré est : ' . htmlspecialchars($password) . '<br>';
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    ?>

    <form action="./index.php" method="post">
        <label>
            Vérifier le mot de passe :
            <input type="text" name="password" placeholder="Collez ici votre mot de passe">
        </label>
        <button type="submit" name="check_password">Vérifier le mot de passe</button>
    </form>


</body>

</html>


<?php

if (isset($_POST['password'])) {
    $generatePassword = $_POST['password'];

    try {
        $isStrong = PasswordGenerator::isStrongPassword($generatePassword);
        echo "Le mot de passe est-il fort ? " . ($isStrong ? "Oui" : "Non") . '<br>';
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}
?>