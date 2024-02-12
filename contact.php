
<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cathy Lourenço - Psychologue - Contact</title>

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

    <main class="page-contact">
        <section class="contact">
            <div>
                <h1 class="titre-contact" id="contact">Prenez rendez-vous</h1>
            </div>
            <form method="post" action="submit_form.php">
                <fieldset>
                    <legend>Choisissez votre mode de consultation : </legend>
                    <div>
                        <input type="checkbox" id="cabinet" name="cabinet" checked />
                        <label for="cabinet">Au cabinet</label>
                    </div>

                    <div>
                        <input type="checkbox" id="teleconsultation" name="teleconsultation" />
                        <label for="teleconsultation">Téléconsultation</label>
                    </div>
                </fieldset>
                <div class="form-nom-email">
                    <div class="form-colonne">
                        <label for="nom">nom</label>
                        <input type="text" name="nom" id="nom"/>
                    </div>
                    <div class="form-colonne">
                        <label for="email">email</label>
                        <input type="email" name="email" id="email"/>
                    </div>
                </div>
                <label for="message">message</label>
                <textarea name="message" id="message" rows="10"></textarea>
                <input type="submit" value="ENVOYER" class="cta contact"/>
            </form>
        </section>

        <?php
        $retour = mail('cathylourenço@gmail.com', 'Prise de contact', $message, $headers);
        if ($retour)
            echo '<h2>Votre message a bien été envoyé. Je vous répondrai dans les plus brefs délais.</h2>';
        ?>
    </main>

    <footer>
        <?php require_once(__DIR__ . '/footer.php'); ?>
    </footer>
</body>

</html>