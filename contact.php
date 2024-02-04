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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Quicksand:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200&family=Montserrat:wght@200&family=Quicksand:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">
    
</head>

<body>
    <header>
        <?php require_once(__DIR__ . '/header.php'); ?>
    </header>

    <main>
        <section class="contact cabinet">
            <div>
                <img src="" alt="">
                <h1 class="titre-contact">Au cabinet</h1>
            </div>
            <form method="post" action="submit_form.php">
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
                <input type="submit" value="ENVOYER" class="cta"/>
            </form>
        </section>

        <section class="contact teleconsultation">
            <div>
                <img src="" alt="">
                <h1 class="titre-contact">Téléconsultation</h1>
            </div>
            <form method="post" action="submit_form.php">
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
                <input type="submit" value="ENVOYER" class="cta"/>
            </form>
        </section>
    </main>

    <footer>
        <?php require_once(__DIR__ . '/footer.php'); ?>
    </footer>
</body>

</html>