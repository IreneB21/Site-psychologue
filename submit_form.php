<?php

require_once(__DIR__ . '/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');

$postData = $_POST;

if (
    empty($postData['nom'])
    || empty($postData['email'])
    || trim(strip_tags($postData['nom'])) === ''
    || trim(strip_tags($postData['email'])) === ''
) {
    echo "Merci d'indiquer votre nom et votre email pour prendre rendez-vous.";
    return;
}

$nom = trim(strip_tags($postData['nom']));
$email = trim(strip_tags($postData['email']));
$message = trim(strip_tags($postData['message']));

$insertContact = $mysqlClient->prepare('INSERT INTO Rdv_teleconsultation(nom, email, message) VALUES (:nom, :email, :message)');
$insertContact->execute([
    'nom' => $nom,
    'email' => $email,
    'message' => $message,
]);

$headers = "De : " . $postData['nom'] .', ' . $postData['email'];
$message  = $postData['message'];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cathy Lourenço - Psychologue - Prise de rendez-vous</title>

    <link rel="stylesheet" href="./style.css">
    <link rel="preload" href="./images" as="pictures">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Schibsted+Grotesk:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <?php require_once(__DIR__ . '/header.php'); ?>
    </header>

    <?php
    $retour = mail('cathylourenço@gmail.com', 'Prise de contact', $message, $headers);
    if ($retour)
        echo '<h2>Votre message a bien été envoyé. Je vous répondrai dans les plus brefs délais.</h2>';
    ?>

    <footer>
        <?php require_once(__DIR__ . '/footer.php'); ?>
    </footer>
</body>
</html>