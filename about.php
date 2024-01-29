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
                <p class="presentation-paragrah">
                    Claire, 36 ans, parisienne. Travaillant dans la finance depuis plusieurs années, j’ai cherché un moyen d’exprimer ma créativité. J’ai découvert la photo de rue il y a 7 ans, le plaisir de garder les yeux ouverts en permanence et de chercher la beauté, la poésie dans les petits détails autour de moi, dans un rayon de lumière, un reflet, une attitude... 
                    Chercher le beau partout, dans ce qui nous entoure, permet de voir la vie sous une facette plus douce, et d’apprendre à se réjouir de ce qui peut sembler banal à un oeil non exercé.
                    <br /> 
                    La rue est un immense terrain de jeu, au sein duquel je tente en permanence de m’améliorer et de me renouveler. 
                    J’espère que vous apprécierez cet échantillon de mon travail.
                    <br />
                    J’ai choisi pour commencer une sélection de photos du Japon, le pays du soleil levant où mon plaisir de faire de la photo était exacerbé. 
                    La lumière y est plus nuancée, les attitudes plus douces. Tout y est encore plus sujet à beauté.
                    J’ai aussi eu envie de partager ma vision des détails, ou comment un petit rien peut se révéler source de merveilleux. 
                    <br />
                    Dans la section « print » vous trouverez une projection de mon travail imprimé et encadré, n’hésitez pas à me contacter si l’une des impressions vous touche, et si vous l’imaginez chez vous.</p>

                <h2>Services</h2>
                <ul>
                    <li>Portrait seul ou à plusieurs,</li>
                    <li>Impression,</li>
                    <li>Retouches sur mesure,</li>
                </ul>
            </div>

            <div>
                <a href="projects.php" class="cta">GO TO MY PROJECTS</a>
            </div>
        </section>

        <section id="contact" class="home-contact">
            <h2>Let's talk about your project</h2>
            <form method="POST" action="submit-form.php">
                <div class="form-name-email">
                    <div class="form-column">
                        <label for="name">name</label>
                        <input type="text" name="name" id="name"/>
                    </div>
                    <div class="form-column">
                        <label for="email">email</label>
                        <input type="email" name="email" id="email"/>
                    </div>
                </div>
                <label for="message">message</label>
                <textarea name="message" id="message" rows="10"></textarea>
                <input type="submit" value="SEND" class="cta"/>
            </form>
        </section>
    </main>

    <footer>
        <?php require_once(__DIR__ . '/footer.php'); ?>
    </footer>
</body>

</html>




