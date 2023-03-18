<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icon/blueball.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/9d34ec166c.js" crossorigin="anonymous"></script>
    <title>WEST WORLD - GALERIE</title>
</head>

<body>

    <?php
    require 'header.php';
    ?>

    <main>

        <section class="container container_padded container_first" id="section_galerie_images">
            <div id="galerie_title">
                <H1>Galerie</H1>
                <hr>
            </div>

            <div id="galerie_hero">

                <form id="galerie_images_upload" action="traitements/upload_image.php" method="post"
                    enctype="multipart/form-data">
                    <label for="image">Choisir un fichier</label>
                    <input type="file" name="image" id="image">
                    <input type="submit" value="Télécharger" class="btn">
                    <div>
                        <?php
                        if (isset($_SESSION['information']))
                        {
                            echo '<p class="affichage' . ($_SESSION['information'] === 'Le fichier est bien en ligne' ? ' green' : '') . '">' . $_SESSION['information'] . '</p>' . "\n";
                            session_unset();
                        }
                        ?>
                    </div>
                </form>

                <div class="full_div">
                    <video class="full_div background_videos" id="background_hero_galerie" autoplay preload loop muted
                        src="images/videos/background_gray.webm"></video>
                </div>
                <div class="full_div">
                    <img id="galerie_img" src="images/kanye/happy.png" alt="Kanye West">
                </div>
                <div class="full_div" id="galerie_gradient"></div>
            </div>

            <?php
            $dir = 'images/galerie';
            $files1 = scandir($dir);

            for ($i = 2; $i < count($files1); $i++)
            {
                echo '<div class="galerie_images"><img src="images/galerie/' . $files1[$i] . '" alt="' . strstr($files1[$i], '.', true) . ' picture"> 
                </div>';
            }
            ?>

        </section>

    </main>

    <?php
    require 'footer.php';
    ?>

</body>

</html>