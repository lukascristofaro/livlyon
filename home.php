

<body>

<?php 
$my_query = new WP_Query();
if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <?php echo the_title(); ?>
<?php endwhile; ?>
<?php else: ?>
    <p>Il n'y a pas de contenu à afficher</p>
<?php endif; ?>

   


</body>

</html>