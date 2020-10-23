<?php 
/*
Template Name: Législation
*/

get_header();

?>
<section class="legislation">

    <?php
        query_posts( array(
            'post_type' => 'législation',
            'showposts' => 4,
            'numberposts' => 4,
            'order' => 'ASC',
        ) );
    ?>
    <?php while (have_posts()) : the_post(); ?>

    <div class="container">
        <h2><?php the_title(); ?></h2>
        <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'alt' => '']); ?>
        <?php the_content(); ?> 
        </div>                     
    <?php endwhile; ?>
   
</section>

<?php get_footer(); ?>