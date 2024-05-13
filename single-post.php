<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/asset/css/single-post.css" />
<img class="image_projet" src="<?php the_post_thumbnail_url(); ?>" alt="Image" class="image_projet" />

<div class="soustitre">
    <div class="title">
        <img class="petiteetoilefonce" src="<?php echo get_template_directory_uri(); ?>/asset/img/petite_etoile_foncé.svg" />
        <img class="cercle" src="<?php echo get_template_directory_uri(); ?>/asset/img/cercle.svg" />
        <h2 class="title">
            <?php
            $content = get_the_content();

            require_once(ABSPATH . 'wp-content/themes/livlyon/getBlock.php');
            getBlock($content, 2);



            ?>
        </h2>
    </div>
    <div class="paragrapheequipe">
        <?php
        $content = get_the_content();

        require_once(ABSPATH . 'wp-content/themes/livlyon/getBlock.php');
        getBlock($content, 4);



        ?>
    </div>

</div>
<?php include("nos-reseaux.php") ?>
<div class="membres">
    <div class="title">
        <img class="petiteetoilefonce" src="<?php echo get_template_directory_uri(); ?>/asset/img/petite_etoile_foncé.svg" />
        <img class="cercle2" src="<?php echo get_template_directory_uri(); ?>/asset/img/cercle.svg" />
        <h2 class="title">
            <?php
            $content = get_the_content();
            require_once(ABSPATH . 'wp-content/themes/livlyon/getBlock.php');
            getBlock($content, 6);
            ?>
        </h2>
    </div>
    <div class="paragrapheequipe">
        <?php
            $content = get_the_content();
            require_once(ABSPATH . 'wp-content/themes/livlyon/getBlock.php');
            getBlock($content, 8);
        ?>
    </div>
</div>
<div class="cards">
<?php
    $content = get_the_content();

    if (has_blocks($content)) {
        $blocks = parse_blocks($content);
        for ($i = 10; $i < count($blocks); $i+=6) {
            echo '<div class="card">';
            if (isset($blocks[$i])) {
                echo $blocks[$i]['innerHTML'];
            }
            if (isset($blocks[$i+1])) {
                echo $blocks[$i+2]['innerHTML'];
            }
            if (isset($blocks[$i+2])) {
                echo $blocks[$i+4]['innerHTML'];
            }
            echo '</div>';
        }
    }
?>
</div>

<img class="imgvague" src="<?php echo get_template_directory_uri(); ?>/asset/img/vague.svg" class="redStar" />

<?php get_footer(); ?>