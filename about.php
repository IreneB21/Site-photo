<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About - Claire Parisienne - Photographer</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/about.css">
    <link rel="preload" href="images" as="pictures">
    <script src="script.js"> </script>

    <script src="https://kit.fontawesome.com/f61418b52c.js" crossorigin="anonymous"></script>

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

    <main class="about-main">
        <section class="about-autoportrait">
        </section>

        <section>
            <h1>About me</h1>
            <div class="carre-contenu">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <h2>Services</h2>
                <ul>
                    <li>Portrait seul ou à plusieurs,</li>
                    <li>Shooting mode,</li>
                    <li>Retouches sur mesure,</li>
                    <li>Développement.</li>
                </ul>
            </div>

            <div>
                <a href="projects.html" class="cta">GO TO MY PROJECTS</a>
            </div>
        </section>

        <section class="section-tarifs">
            <h2>Tarifs</h2>
            <table>
                <thead>
                    <tr>
                        <th>Désignation</th>
                        <th>Quantité</th>
                        <th>Prix</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Retouches photo studio professionnel</td>
                        <td>x 800 photos</td>
                        <td>3200€/800 photos</td>
                    </tr>
                    <tr>
                        <td>Assistant photo lumière professionnel</td>
                        <td>x 2 sets studio</td>
                        <td>1500€/journée</td>
                    </tr>
                </tbody>
            </table>

            <div>
                <a href="index.html#contact" class="cta">CONTACT-ME</a>
            </div>
        </section>
    </main>

    <footer>
        <?php require_once(__DIR__ . '/footer.php'); ?>
    </footer>
</body>

</html>




