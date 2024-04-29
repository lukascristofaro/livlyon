<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asset/css/header.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <title>Liv'Lyon</title>
</head>
<body>
    <nav>
        <div class="group-137">
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/asset/img/logo.svg" alt="Liv Lyon" class="logo" />
        <div class="group-136">
        <a href="#" class="equipe">Équipes</a>
        <a href="#">A propos</a>
        <a href="#">Agenda</a>
        <a href="#">Actu</a>
        <a href="#" class="group-69">Contact</a>

        </div>
        </div>
    </nav>
    <img class="star-12" src="<?php echo get_template_directory_uri(); ?>/asset/img/etoile_jaune.svg" alt="Flèche" class="arrow" />
    <div class="group-81">
        <h1>
        <?php
        the_title()
        ?>
        </h1>
        <div class="description">
            <?php
            the_content()
            ?>
        </div>
    </div>
    <img class="star-11" src="<?php echo get_template_directory_uri(); ?>/asset/img/etoile_jaune.svg" alt="Flèche" class="arrow" />
    <img class="image" src="<?php echo get_template_directory_uri(); ?>/asset/img/ville.svg" alt="Image" class="image" />
    <img class="bande" src="<?php echo get_template_directory_uri(); ?>/asset/img/bandeau.svg" alt="Bandeau" class="bande" />

</body>
</html>