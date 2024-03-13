<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cathy Lourenço - Psychologue - Thérapies</title>

    <link rel="stylesheet" href="./style.css">
    <link rel="preload" href="./images" as="pictures">
    <script src="script.js" defer></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Schibsted+Grotesk:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <?php require_once(__DIR__ . '/header.php'); ?>
    </header>

    <main>
        <section class="section-colorée adultes">
            <div>
                <h1 id="adultes">Adultes</h1>
                <p class="paragraphe-adultes">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <a href="contact.php" class="cta">Prendre rendez-vous</a>
            </div>
            <div><img src="./images/photo14.jpg" alt="" class="photo-adultes"></div>
        </section>

        <section class="section-colorée ado">
            <div class="img-container ado"><img src="./images/photo5.jpeg" alt="" class="photo-ado"></div>
            <div class="carré-ado">
                <h1 id="ado">Adolescents</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <a href="contact.php" class="cta">Prendre rendez-vous</a>
            </div>
        </section>

        <section class="box-téléconsultation">
            <img src="./images/teleconsultation.svg" alt="" class="logo-illustration">
            <h3>Téléconsultation</h3>
            <p>Vous ne pouvez pas vous déplacer ? Vous n'avez pas le temps de vous rendre au cabinet ? Découvrez la thérapie à distance.**</p>
            <a href="teleconsultation.php" class="cta-box">Découvrir</a>
        </section>

        <section class="section-colorée couples">
            <div>
                <h1 id="couples">Couples</h1>
                <p class="paragraphe-couples">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <a href="contact.php" class="cta">Prendre rendez-vous</a>
            </div>
            <div><img src="./images/photo16.jpg" alt="" class="photo-couples"></div>
        </section>
    </main>

    <footer>
        <?php require_once(__DIR__ . '/footer.php'); ?>
    </footer>
</body>

</html>