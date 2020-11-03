<?php
/*
Template Name: Infographie
*/
get_header('pages');
?>

<div class="infographie">


    <?php while (have_posts()) : the_post(); ?>

    <div class="container text-center contenu">
        <?php the_content(); ?>
        <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'alt' => 'infographie']); ?>
    </div>


    <?php endwhile; ?>


</div>


<?php get_footer();?>
