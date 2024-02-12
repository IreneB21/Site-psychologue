<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cathy Lourenço - Psychologue</title>

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

    <main>
        <section class="section-colorée présentation">
            <h1>Cathy Lourenço <br>Psychologue</h1>
            <p class="paragraphe-présentation">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </p>
        </section>

        <div class="img-container">
            <img src="./images/portrait3.jpeg" alt="Autoportrait Cathy Lourenço" class="photo-accueil">
        </div>

        <section class="box-rdv">
            <div class="box-rdv-cabinet">
                <img src="./images/cabinet.svg" alt="" class="logo-illustration">
                <h3>Cabinet</h3>
                <p>Je vous accueille tous les jours de la semaine dans mon cabinet de Clamart**.</p>
                <a href="contact.php" class="cta-box">Prendre rendez-vous</a>
            </div>
            <div class="box-rdv-teleconsultation">
                <img src="./images/teleconsultation.svg" alt="" class="logo-illustration">
                <h3>Téléconsultation</h3>
                <p>Je propose aussi des séances à distance pour vous faciliter la vie**.</p>
                <a href="contact.php" class="cta-box">Prendre rendez-vous</a>
            </div>
        </section>

        <section class="section-colorée approche">
            <div><img src="./images/photo13.jpg" alt="" class="photo-approche"></div>
            <div>
                <h1>Mon approche</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <h2>Découvrez les thérapies</h2>
                <div class="cta-thérapies">
                    <a href="therapies.php#adultes" class="cta">Adultes</a>
                    <a href="therapies.php#ado" class="cta">Adolescents</a>
                    <a href="therapies.php#couples" class="cta">Couples</a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <?php require_once(__DIR__ . '/footer.php'); ?>
    </footer>
</body>

</html>