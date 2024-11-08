<?php
require_once __DIR__ . '/vendor/autoload.php';

use Chris\PasswordGenerator\PasswordGenerator;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="./index2.php?v=1.0">
        <label for="length">Longueur du mot de passe :</label>
        <input type="number" id="length" name="length" value="12" min="4" required>
        <label>Types de caractères :</label><br>
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
            
    <?php

    if (isset($_POST['length']) && isset($_POST['characters'])) {

        $length = (int) $_POST['length'];
        $selectedCharacters = $_POST['characters'];
        try {
            
            $password = PasswordGenerator::generatePassword($length, $selectedCharacters);
            echo 'Le mot de passe généré est : ' . htmlspecialchars($password) . '<br>';
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
    dd($_POST['characters']). '<br>';
    
    ?>
    <div class=form2>
        <form action="./index2.php" method="post">
            <label>
                Vérifier le mot de passe :
                <input type="text" name="password" placeholder="Collez ici votre mot de passe">
            </label>
            <button type="submit" name="check_password">Vérifier le mot de passe</button>
        </form>
    </div>
    </div>


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
</body>

</html>