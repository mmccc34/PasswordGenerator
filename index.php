<?php
require_once __DIR__ . '/vendor/autoload.php';

use Chris\PasswordGenerator\PasswordGenerator;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css?v=1.0">

    <title>Document</title>
</head>

<body>
    <h1>Générateur de Mot de passe</h1>
    <div class='block'>
        <div class='form1'>
            <form method="POST" action="./index.php">
                <label for="length">Choisissez la longueur du mot de passe :</label>
                <input type="number" id="length" name="length" value="12" required><br>
                <label>Cochez les types de caractères :</label><br>
                <input type="checkbox" name="characters[]" value="upper" checked>
                Majuscules<br>
                <input type="checkbox" name="characters[]" value="lower" checked>
                Minuscules<br>
                <input type="checkbox" name="characters[]" value="numbers" checked>
                Chiffres<br>
                <input type="checkbox" name="characters[]" value="special" checked>
                Caractères spéciaux<br>
                <button type="submit" name="generate">Générer</button>
            </form>
        </div>




        <div class='form2'>
            <form action="./index.php" method="post">
                <label>
                    Vérifier le mot de passe :
                    <input type="text" name="password" placeholder="Collez ici votre mot de passe">
                </label>
                <button type="submit" name="check_password">Vérifier le mot de passe</button>
            </form>
        </div>
    </div>

    <div class='resultBlock'>
        <div class='result'>
            <?php
            try {
                if (isset($_POST['length'])) {

                    $length = (int) $_POST['length'];
                    $selectedCharacters = isset($_POST['characters']) ? $_POST['characters'] : [];

                    $password = PasswordGenerator::generatePassword($length, $selectedCharacters);

                    echo 'Le mot de passe généré est : ' . htmlspecialchars($password) . '<br>';
                }
            } catch (\Exception $e) {
                echo $e->getMessage();
            }

            ?>
        </div>
    </div>
    <div class='verifBlock'>
    <div class ='verif'>
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

    </div>
    </div>
</body>

</html>