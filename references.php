<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icon/blueball.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/9d34ec166c.js" crossorigin="anonymous"></script>
    <title>WEST WORLD - RÉFÉRENCES</title>
</head>

<body>

    <?php
    require 'header.php';
    ?>

    <main>

        <section class="container container_first" id="page_references">

            <h1>Références</h1>
            <hr>

            <div class="references_subsection" id="references_images">
                <div class="references_subsection_content">
                    <h2>Images & Pictogrammes</h2>
                    <hr>
                    <a target="_blank" href="https://www.last.fm/music/Kanye+West/+images">Photos :<span> last.fm</span>
                    </a>
                    <a target="_blank" href="https://fontawesome.com/">Pictogrammes :<span> fontawesome.com</span>
                    </a>
                    <a target="_blank" href="https://open.spotify.com/"> Pochette d'albums:<span> spotify.com</span>
                    </a>
                </div>
                <div class="references_subsection_side">
                    <div class="references_gradient"></div>
                    <video class="references_video_exemple" autoplay preload loop muted
                        src="images/videos/background_gray.webm"></video>
                    <div id="references_images_div">
                        <img class="references_images" id="references_images_1" src="images/kanye/kanyered.webp"
                            alt="Kanye West">
                        <img class="references_images" id="references_images_2" src="images/kanye/black_and_white.png"
                            alt="Kanye West">
                        <img class="references_images" id="references_images_3" src="images/kanye/happy.png"
                            alt="Kanye West">
                    </div>
                </div>
            </div>

            <div class="references_subsection" id="references_video">
                <div class="references_subsection_content">
                    <h2>Videos</h2>
                    <hr>
                    <a target="_blank" href="https://makebackground.io/">Video de Fond :<span> makebackground.io</span>
                    </a>
                    <a target="_blank" href="https://open.spotify.com/"> Extrait de musique:<span> spotify.com</span>
                    </a>
                </div>
                <div class="references_subsection_side">
                    <div class="references_gradient"></div>
                    <video class="references_video_exemple" autoplay preload loop muted
                        src="images/videos/background_gray.webm"></video>
                </div>

            </div>

            <div class="references_subsection" id="references_police">
                <div class="references_subsection_content">
                    <h2>Polices</h2>
                    <hr>
                    <a target="_blank" href="https://fonts.google.com/specimen/Outfit">Outfit :<span>
                            fonts.google.com</span>
                    </a>
                </div>
                <div class="references_subsection_side">
                    <p id="references_example_outfit">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z <br>
                        a b c d e f g h i j k l m n o p q r s t u v w x y z <br>
                        0 1 2 3 4 5 6 7 8 9 > ? ! . , : @ & +</p>
                    <div class="references_gradient"></div>
                    <video class="references_video_exemple" autoplay preload loop muted
                        src="images/videos/background_gray.webm"></video>
                </div>
            </div>

        </section>

    </main>

    <?php
    require 'footer.php';
    ?>

</body>

</html>