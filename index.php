<?php

namespace Chris\passwordGenerator;

require_once __DIR__ . '/vendor/autoload.php';

use Chris\PasswordGenerator\passwordGenerator;

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="" method="post">
        <label>
            Longueur du mot de passe :
            <input type="number" name="length" min="4" max="32" value="12" required>
        </label>
        <button type="submit" name="generate">Générer le mot de passe</button>
    </form>

    
    <form action="" method="post">
        <label>
            Vérifier le mot de passe :
            <input type="text" name="password" placeholder="Collez ici votre mot de passe">
        </label>
        <button type="submit" name="check_password">Vérifier le mot de passe</button>
    </form>


</body>

</html>
<?php

require_once __DIR__ . '/vendor/autoload.php';

if (isset($_POST['generate'])) {
    
    $length = $_POST['length'];
    echo 'La longueur du mot de passe est : ' . htmlspecialchars($length) . '<br>';

    $password = passwordGenerator::generatePassword($length);

   


    echo 'Le mot de passe généré est : ' . htmlspecialchars($password) . '<br>';
}



if (isset($_POST['check_password'])) {
    $generatePassword = $_POST['password'];

    
    $isStrong = passwordGenerator::isStrongPassword($generatePassword);


    echo "Le mot de passe est-il fort ? " . ($isStrong ? "Oui" : "Non") . '<br>';

    // if ($isStrong) {
    //     echo 'Le mot de passe est fort.<br>';
    // } else {
    //     echo 'Le mot de passe n\'est pas assez fort.<br>';
    // }
}
?>

