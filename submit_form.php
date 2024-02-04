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
    echo "Merci de m'indiquer votre nom et votre email pour prendre rendez-vous.";
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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Quicksand:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200&family=Montserrat:wght@200&family=Quicksand:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <?php require_once(__DIR__ . '/header.php'); ?>
    </header>

        <h1>Votre message a bien été envoyé. Je vous répondrai dans les plus brefs délais.</h1>

    <footer>
        <?php require_once(__DIR__ . '/footer.php'); ?>
    </footer>
</body>
</html>