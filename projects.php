<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Projects - Claire Parisienne - Photographer</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/projects.css">
    <script src="script.js" defer></script>

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

    <main>
        <section>
            <h1>Projects</h1>
        </section>
 
        <section class="projects-section-photos" id="photoAlbums">

            <div class="albums">
                <?php
                    $projects_path = 'http://localhost/Site_Claire/images/projects';
                    $dirProjects = './images/projects';

                    if (file_exists($dirProjects) == false) {
                        echo 'Directory \'', $dir, '\' not found!';
                    } else {

                        function dirProjectsFilter ($var) {
                            return $var !== '.DS_Store' && $var !== '.' && $var !== '..';
                        }

                        $projects_contents =  array_filter(scandir($dirProjects), 'dirProjectsFilter');

                        foreach ($projects_contents as $album) {

                            $dir = $dirProjects . '/' . $album;
                            $file_display = array('jpg', 'jpeg', 'png', 'gif');

                            if (file_exists($dir) == false) {
                                echo 'Directory \'', $dir, '\' not found!';
                            } else {
                                $dir_contents = scandir($dir);

                                echo '<h2>' . $album . '</h2>';
                                echo '<div class="grid details">';
        
                                foreach ($dir_contents as $file) {
                                    $tmp = explode('.', $file);
                                    $file_type = strtolower( end($tmp));
                                    if (($file !== '.') && ($file !== '..') && (in_array( $file_type, $file_display))) {
                                        echo '<div class="link-container-photo">';
                                            echo '<img src="' . $dir . '/'. $file . '" alt="'. $file . '"/>';
                                            echo '<div class="photo-hover" onclick="openImg(\'' . $dir . '/' . $file .  '\')" >See Photo</div>';
                                        echo '</div>';
                                    }
                                }

                                echo '</div>';
                            }
                        }
                    }
                ?>
            </div>
        </section>
    </main>

    <footer>
        <?php require_once(__DIR__ . '/footer.php'); ?>
    </footer>

    <div class="preview-box" id="carrousel">
        <div class="photo-preview-box">
            <i class="fa-solid fa-circle-chevron-left" id="previous"></i>
            <i class="fa-solid fa-circle-xmark" id="close" onclick="closeImg()"></i>
            <i class="fa-solid fa-circle-chevron-right" id="next"></i>
        </div>
    </div>
</body>

</html>