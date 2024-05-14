<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asset/css/header.css">
    <title>Liv'Lyon</title>
</head>

<body>
    <nav class="navbar">
        <a href="https://livlyon.fr" class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/logo.svg" alt="">
        </a>
        <div class="menu">
            <a href="">Équipes</a>
            <div class="space8"></div>
            <a href="">A propos</a>
            <div class="space8"></div>

            <a href="">Agenda</a>
            <div class="space8"></div>

            <a href="">Actu</a>
            <div class="space8"></div>

            <a href="" id="CTA">Contact</a>
        </div>
    </nav>
    <div class="space32"></div>
    <div class="parentpresentation">
        <img class="star-12" src="<?php echo get_template_directory_uri(); ?>/asset/img/etoile_jaune.svg" alt="Flèche" class="arrow" />
        <div class="group-81">
            <h1>
                <?php
                the_title()
                ?>
            </h1>
            <div class="description">
                <?php
                        $content = get_the_content();

                        if ( has_blocks( $content ) ) {
                            $blocks = parse_blocks( $content );
                            echo $blocks[0]['innerHTML'];
                
                        }
                ?>
            </div>
        </div>
    </div>

    <div class="parentbandeau">
        <div class="black">
            <img class="image" src="<?php echo get_template_directory_uri(); ?>/asset/img/ville.svg" alt="Image" class="image" />
            <img class="bande" src="<?php echo get_template_directory_uri(); ?>/asset/img/bandeau.svg" alt="Bandeau" class="bande" />
            <img class="star-11" src="<?php echo get_template_directory_uri(); ?>/asset/img/etoile_jaune.svg" alt="Flèche" class="arrow" />
        </div>
    </div>
</body>

</html>