<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Projects - Claire Parisienne - Photographer</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/projects.css">

    <?php
        $projects_address = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://" . $_SERVER['HTTP_HOST'] . "/Site_Claire/images/projects";
        $dir_projects = './images/projects';
        echo "<script> const projectsSiteAddress = '" . $projects_address . "'; </script>";

        function dirProjectsFilter ($var) {
            return $var !== '.DS_Store' && $var !== '.' && $var !== '..';
        }

        $albums = array_filter(scandir($dir_projects), 'dirProjectsFilter');

        echo "<script> const albums = new Map(); </script>";
        echo "<script> let photosAddresses; </script>";

        $albums_photos = [];
        $photo_extension = array('jpg', 'jpeg', 'png', 'gif');

        foreach($albums as $album) {
            $dir_album = $dir_projects . '/' . $album;
            $photos = array_filter(scandir($dir_album), 'dirProjectsFilter');
            $photos_path = [];
            echo "<script> photosAddresses = []; </script>";

            foreach($photos as $photo) {
                array_push($photos_path, $dir_album . '/' . $photo);
                echo "<script> photosAddresses.push('". $projects_address . "/" . $album . "/" . $photo ."'); </script>";
            }

            $albums_photos[$album] = $photos_path;
            echo "<script> albums.set('". $album ."', photosAddresses); </script>";
        }

        echo "<script> photosAddresses = null; </script>";
    ?>
    
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
                    if (file_exists($dir_projects) == false) {
                        echo 'Directory \'', $dir_projects, '\' not found!';
                    } else {
                        foreach ($albums_photos as $album => $photos) {
                            $album_path = $dir_projects . '/' . $album;

                            if (file_exists($album_path) == false) {
                                echo 'Directory \'', $album_path, '\' not found!';
                            } else {
                                echo '<h2>' . $album . '</h2>';
                                echo '<div class="grid details">';
        
                                foreach ($photos as $photo) {
                                    $tmp = explode('.', $photo);
                                    $photo_type = strtolower( end($tmp));

                                    if (in_array($photo_type, $photo_extension)) {
                                        echo '<div class="link-container-photo">';
                                            echo '<img class="photo-albums" src="' . $photo . '" alt="'. $photo . '"/>';
                                            echo '<div class="photo-hover" onclick="openImg(\'' . $photo .  '\', \''. $album .'\')" >See Photo</div>';
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
        <i class="fa-solid fa-circle-chevron-left" id="previous" onclick="goToPreviousImg()"></i>
        <i class="fa-solid fa-circle-xmark" id="close" onclick="closeImg()"></i>
        <i class="fa-solid fa-circle-chevron-right" id="next" onclick="goToNextImg()"></i>
        <div class="photo-preview-box" id="diapo"></div>
    </div>
</body>

</html>