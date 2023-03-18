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
    <title>WEST WORLD - CONTACT</title>
</head>

<body>

    <?php
    require 'header.php';
    ?>

    <main>

        <section class="container container_first" id="contact_section">

            <!-- <aside id="contact_form_aside"></aside> -->

            <fieldset>
                <form action="traitements/envoi_mail.php" method="post" id="contact_form">
                    <h1>Nous Contacter</h1>
                    <hr>
                    <div id="contact_names">
                        <div>
                            <label class="contact_form_labels" for="prenom">Prénom</label>
                            <input class="contact_form_inputs" type="text" name="prenom" id="prenom"
                                placeholder="Votre prenom">
                        </div>
                        <div>
                            <label class="contact_form_labels" for="nom">Nom<span>*</span></label>
                            <input class="contact_form_inputs" type="text" name="nom" id="nom" placeholder="Votre nom">

                        </div>
                    </div>
                    <div>
                        <label class="contact_form_labels" for="email">Email<span>*</span></label>
                        <input class="contact_form_inputs" type="email" name="email" id="email"
                            placeholder="nom@domaine.fr">
                    </div>
                    <div id="contact_radial_options">
                        <p class="contact_form_labels" id="contact_form_radial_title">Type de contact<span>*</span></p>
                        <div class="contact_radial_options_i">
                            <label class="contact_form_labels radial_label" for="information">Information</label>
                            <input class="contact_form_inputs radial_btn" type="radio" name="typeContact"
                                id="information" value="demande d'information">
                        </div>
                        <div class="contact_radial_options_i">
                            <label class="contact_form_labels radial_label" for="demande_devis">Demande de devis</label>
                            <input class="contact_form_inputs radial_btn" type="radio" name="typeContact"
                                id="demande_devis" value="demande de devis">
                        </div>
                        <div class="contact_radial_options_i">
                            <label class="contact_form_labels radial_label" for="reclamation">Réclamation</label>
                            <input class="contact_form_inputs radial_btn" type="radio" name="typeContact"
                                id="reclamation" value="faire une reclamation">
                        </div>
                    </div>
                    <div>
                        <label class="contact_form_labels" for="sujet">sujet<span>*</span></label>
                        <input class="contact_form_inputs" type="text" name="sujet" id="sujet"
                            placeholder="Votre sujet">
                    </div>
                    <div>
                        <label class="contact_form_labels" for="message">Message<span>*</span></label>
                        <textarea class="contact_form_inputs" name="message" id="message" cols="30" rows="10"
                            placeholder="Votre message"></textarea>
                    </div>
                    <input type="submit" value="Envoyer" class="btn">

                    <div class="contact_form_error_div">
                        <?php
                        if (isset($_SESSION['information']))
                        {
                            echo '<p' . ($_SESSION['information'] === 'Votre demande a bien été envoyée' ? ' class="green' : '') . '">' . $_SESSION['information'] . '</p>' . "\n";
                            session_unset();
                        }
                        ?>
                    </div>

                </form>
            </fieldset>

            <div class=" full_div">
                <video class="full_div background_videos" id="background_contact" autoplay preload loop muted
                    src="images/videos/background_gray.webm"></video>
            </div>
            <div class="full_div">
                <img id="contact_img" src="images/kanye/black_and_white.png" alt="Kanye West">
            </div>
            <div class="full_div" id="contact_page_gradient"></div>

        </section>
    </main>

    <?php
    require 'footer.php';
    ?>

</body>

</html>