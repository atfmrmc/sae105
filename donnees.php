<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icon/blueball.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://kit.fontawesome.com/9d34ec166c.js" crossorigin="anonymous"></script>
    <title>WEST WORLD - DONNÉES</title>
</head>

<body>

    <?php
    require 'header.php';
    ?>

    <main>

        <!-- <section class="container" id="intro_donnees">

            <div id="intro_donnees_contenus">
                <div class="left_column">
                    <img id="intro_donnees_photo" src="images/kanye/jumping.webp" alt="Kanye West Photo">
                </div>
                <div class="right_column">
                    <p>Kanye West est un artiste polyvalent américain, connu comme rappeur, chanteur,
                        auteur-compositeur et producteur de musique de renom. Il a débuté sa carrière au début des
                        années 2000 en tant que producteur pour le label Roc-A-Fella Records, où il a produit des succès
                        pour des artistes tels que Jay-Z, Common et Talib Kweli. En 2004, il a sorti son premier album
                        intitulé "The College Dropout", qui a été accueilli avec un grand succès critique et commercial.
                        L'album comprenait des singles à succès tels que "Through the Wire" et "Gold Digger" et lui a
                        valu de nombreuses nominations aux Grammy Awards. Il a ensuite sorti plusieurs autres albums
                        tous aussi réussi comme "Late Registration", "Graduation", "808s & Heartbreak", "My Beautiful
                        Dark Twisted Fantasy", "Yeezus", "The Life of Pablo", "Jesus is King" et "Donda with Child". Sa
                        production musicale est reconnue pour son utilisation d'échantillons et l'intégration de
                        différents genres musicaux dans son travail. Il a vendu plus de 150 millions d'albums à travers
                        le monde et a remporté 21 Grammy Awards. Il est considéré comme un pionnier de l'industrie
                        musicale en raison de son influence sur la scène musicale actuelle.
                    </p>
                    <div id="voir_discographie">
                        <p>Voir discographie</p><button><a href="#base_de_donnees">
                                <i class="fa-solid fa-circle-down">
                                </i></a></button>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="container container_padded container_first" id="base_de_donnees">
            <!-- <h2>TABLEAU</h2> -->
            <!-- <hr> -->
            <h1>Discographie</h1>
            <hr>

            <?php
            $fichier = 'datas/kanyewest.json';
            $tabYEJSON = file_get_contents($fichier);
            $tabYEPHP = json_decode($tabYEJSON, true);

            function checkExplicit($YE)
            {
                if ($YE['explicit'] == "TRUE")
                {
                    return "<img class='bdd_track-name_cell_explicit' src='images/icon/mature.png' alt='Mature Content'>";
                } else
                {
                    return "";
                }
            }

            function checkPopularity($YE)
            {
                if ($YE['popularity'] > 80)
                {
                    return "🔥";
                } elseif ($YE['popularity'] >= 60 && $YE['popularity'] <= 80)
                {
                    return "";
                } elseif ($YE['popularity'] >= 40 && $YE['popularity'] <= 60)
                {
                    return "";
                } else
                {
                    return "🧊";
                }
            }
            ?>

            <table id="ye_playlist" class="display">
                <thead>
                    <tr>
                        <th>Popularité</th>
                        <th>Durée</th>
                        <th>Nom</th>
                        <th>Artistes</th>
                        <th>Album</th>
                        <th>Date de sortie</th>
                        <th>Aperçu</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($tabYEPHP as $YE)
                    { ?>
                    <tr>

                        <td>
                            <div class="bdd_popularity_cell">
                                <div>
                                    <p class="bdd_popularity_cell_rating">
                                        <?php echo $YE['popularity']; ?>
                                    </p>
                                </div>
                                <div class="bbd_popularity_cell_emoji">
                                    <?php echo checkPopularity($YE); ?>
                                </div>
                            </div>

                        </td>
                        <td>
                            <?php echo $YE['duration']; ?>
                        </td>
                        <td>
                            <div class="bdd_track-name_cell">
                                <div><a href="<?php echo $YE['track_uri']; ?>"><?php echo $YE['track_name']; ?></a>
                                </div>

                                <?php echo checkExplicit($YE); ?>

                            </div>

                        </td>
                        <td>
                            <div class="bdd_arstist-list_artist">
                                <a href="<?php echo $YE['artist_uri_1']; ?>"><?php echo $YE['artist_name_1']; ?></a>
                                <a href="<?php echo $YE['artist_uri_2']; ?>"><?php echo $YE['artist_name_2']; ?></a>
                                <a href="<?php echo $YE['artist_uri_3']; ?>"><?php echo $YE['artist_name_3']; ?></a>
                                <a href="<?php echo $YE['artist_uri_4']; ?>"><?php echo $YE['artist_name_4']; ?></a>
                                <a href="<?php echo $YE['artist_uri_5']; ?>"><?php echo $YE['artist_name_5']; ?></a>
                                <a href="<?php echo $YE['artist_uri_6']; ?>"><?php echo $YE['artist_name_6']; ?></a>
                                <a href="<?php echo $YE['artist_uri_7']; ?>"><?php echo $YE['artist_name_7']; ?></a>
                            </div>
                        </td>

                        <td>
                            <div class="bdd_album_cell">
                                <div>
                                    <a href="<?php echo $YE['album_uri']; ?>">
                                        <img src="<?php echo $YE['album_image_url']; ?>"
                                            alt="<?php echo $YE['album_name']; ?>"
                                            style="max-width: 75px; max-height: 75px;"></a>
                                </div>
                                <div><a href="<?php echo $YE['album_uri']; ?>"><?php echo $YE['album_name']; ?></a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <?php echo $YE['album_release_date']; ?>
                        </td>
                        <td> <audio class="yourAudio" loop preload='none'>
                                <source src="<?php echo $YE['track_preview_url']; ?>" type="audio/mpeg">
                            </audio>
                            <a class="audio-control"><i class="fa-solid fa-play"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

            <script src="js/datatable_custom.js"></script>
            <script src="js/play_and_pause.js"></script>

        </section>

    </main>

    <?php
    require 'footer.php';
    ?>

</body>

</html>