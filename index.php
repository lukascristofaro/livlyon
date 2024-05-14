<?php get_header(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liv'Lyon</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asset/css/index.css">
</head>

<body>

    <div class="soustitre">
        <div class="title">
            <img class="petiteetoilefonce" src="<?php echo get_template_directory_uri(); ?>/asset/img/petite_etoile_foncé.svg" />
            <img class="cercle" src="<?php echo get_template_directory_uri(); ?>/asset/img/cercle.svg" />
            <h2 class="subtitle" id="equipe">
                <?php
                $content = get_the_content();
                require_once(ABSPATH . 'wp-content/themes/livlyon/getBlock.php');
                getBlock($content, 2);
                ?>
            </h2>
        </div>
        <p class="paragrapheequipe">
            <?php
            $content = get_the_content();
            require_once(ABSPATH . 'wp-content/themes/livlyon/getBlock.php');
            getBlock($content, 4);
            ?>
        </p>
    </div>


    <div class="cards">
        <?php
        $args = array('post_type' => 'post');
        $my_query = new WP_Query($args);

        if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <?php echo '<div class="card">' ?>
                <?php echo the_post_thumbnail(); ?>
                <?php echo '</div>'; ?>
            <?php endwhile; ?>
        <?php else : ?>
            <p>Il n'y a pas de contenu à afficher</p>
        <?php endif; ?>
    </div>

    <div>
        <?php

        include("nos-reseaux.php")
        ?>
    </div>

</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (window.location.hash === '#actualites') {
            var element = document.getElementById('equipe');
            if (element) {
                element.scrollIntoView();
            }
        }
    });
</script>

</html>