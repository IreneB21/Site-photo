<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Claire Parisienne - Photographer</title>

    <!-- google font and icons links -->

    <script src="https://kit.fontawesome.com/f61418b52c.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Quicksand:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200&family=Montserrat:wght@200&family=Quicksand:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">
    
    <!-- css and preload links -->

    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/index.css">
    <link rel="preload" href="images" as="pictures">
    <script src="script.js" defer> </script>

</head>

<body>
    <header>
        <?php require_once(__DIR__ . '/header.php'); ?>
    </header>

    <main>
        <section class="home-presentation">
            <div>
                <h1>Claire Parisienne Photography</h1>
                <p>
                    Présentation : Lorem ipsum dolor sit amet, <em class="important">consectetur</em> adipiscing elit, sed do <em class="important">eiusmod</em> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.
                </p>
                <a href="#contact" class="cta">A PROJECT? CONTACT ME</a>
            </div>
            
            <img src="images/autoportrait3.jpeg" alt="Autoportrait" class="autoportrait">
        </section>

        <section class="home-photos">
            <h2>Favorites</h2>
            <div class="grid favorites">
                <span class="favorites-container box-favorites one"><img src="./images/albumjapon.jpg" alt="Porte-bonheur japonais" ></span>
                <span class="favorites-container box-favorites two"><img src="./images/albumanimaux.jpeg" alt="Oiseau-mouche"></span>
                <span class="favorites-container box-favorites three"><img src="./images/albumitalie3.jpeg" alt="Vieille femme à sa fenêtre"></span>
                <span class="favorites-container box-favorites four"><img src="./images/japon19.jpeg" alt="Eau de pluie sur bidon"></span>
                <span class="favorites-container box-favorites five"><img src="./images/albumjapon3.jpeg" alt="Eau avec pilotis"></span>
                <span class="favorites-container box-favorites six"><img src="./images/photo7.jpeg" alt="Façade d'immeuble en verre"></span>
            </div>

            <div>
                <a href="projects.html" class="cta">ALL MY PROJECTS</a>
            </div>
        </section>

        <section id="contact" class="home-contact">
            <h2>Let's talk about your project</h2>
            <form method="get" action="#">
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