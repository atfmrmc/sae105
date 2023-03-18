<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icon/blueball.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/9d34ec166c.js" crossorigin="anonymous"></script>
    <title>WEST WORLD - ACCUEIL</title>
</head>

<body>

    <?php
    require 'header.php';
    ?>

    <main>

        <section class="container  container_first" id="homepage_hero">
            <div class="full_div">
                <video class="full_div background_videos" autoplay preload loop muted
                    src="images/videos/background_gray.webm"></video>
            </div>
            <div class="full_div gradient"></div>
            <div class="full_div">
                <img id="homepage_hero_img" src="images/kanye/kanyered.webp" alt="Kanye West">
            </div id="homepage_hero_text">
            <h1>KANYE WEST</h1>
        </section>
        <div aria-hidden="true" class="marquee" id="content">
            <p class="mouse_marquee_lr">WEST WORLD // WEST WORLD // WEST WORLD // WEST WORLD // WEST WORLD // WEST WORLD
                // WEST WORLD // WEST WORLD // WEST WORLD // WEST WORLD // WEST WORLD // WEST WORLD // </p>
        </div>
        <section class="container container_padded" id="homepage_content">
            <aside class="left_col" id="homepage_content_image"></aside>
            <article class="right_col" id="homepage_cotent_text">
                <h2>Introduction</h2>
                <hr>
                <p>Kanye West est un rappeur, producteur et créateur de mode très réussi et influent. Il est devenu
                    célèbre au début des années 2000 grâce à son travail de production sur The Blueprint de Jay-Z et son
                    premier album solo, The College Dropout. Depuis, il a sorti plusieurs albums acclamés par la
                    critique et best-sellers, comme My Beautiful Dark Twisted Fantasy et Yeezus. En plus de sa carrière
                    musicale, West a également eu un impact considérable dans l'industrie de la mode avec sa ligne de
                    vêtements et de chaussures Yeezy. Cependant, il est également connu pour ses déclarations et actions
                    parfois controversées, ce qui en fait un personnage polarisant dans l'opinion publique. Malgré cela,
                    son influence sur la musique et la mode reste indéniable.</p>
            </article>
        </section>



    </main>

    <script src="js/mouse_marquee_lr.js"></script>

    <?php
    require 'footer.php';
    ?>

</body>

</html>