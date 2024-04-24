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
        <a href="#">Équipes</a>
        <a href="#">A propos</a>
        <a href="#">Agenda</a>
        <a href="#">Actu</a>
        </div>
        <a href="#" class="group-69">Contact</a>
    </nav>
    <img class="star-12" src="<?php echo get_template_directory_uri(); ?>/asset/img/etoile_jaune.png" alt="Flèche" class="arrow" />
    <div class="group-81">
        <h1>
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                $pageTitle = get_the_title();
                echo $pageTitle;
            }
        }
        ?>
        </h1>
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    echo '<p>' . get_the_content() . '</p>';
                }
            }
            ?>
    </div>
</body>
</html>