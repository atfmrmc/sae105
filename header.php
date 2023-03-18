<header>
    <nav class="red_container" id="navbar">
        <div id="nav_logo_div">
            <p id="double_slash_logo">//</p>
            <a class="westworld_animation_div" href="index.php">
                <p id="logo_west">W</p>
                <p id="logo_world">W</p>
            </a>
        </div>

        <?php

        $current_page = basename($_SERVER['PHP_SELF']);

        ?>

        <div id="nav_buttons_div">
            <a href="index.php" <?php if ($current_page == "index.php" || $current_page == "")
                echo 'class="active_window"'; ?>>ACCUEIL</a>
            <p>//</p>
            <a href="donnees.php" <?php if ($current_page == "donnees.php")
                echo 'class="active_window"'; ?>>DONNÉES</a>
            <p>//</p>
            <a href="galerie.php" <?php if ($current_page == "galerie.php")
                echo 'class="active_window"'; ?>>GALERIE</a>
            <p>//</p>
            <a href="partenaires.php" <?php if ($current_page == "partenaires.php")
                echo 'class="active_window"'; ?>>PARTENAIRES</a>
            <p>//</p>
            <a href="contact.php" <?php if ($current_page == "contact.php")
                echo 'class="active_window"'; ?>>CONTACT</a>
        </div>
    </nav>

</header>