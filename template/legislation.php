<?php 
/*
Template Name: Législation
*/

get_header();

?>
<section class="legislation">

    <?php
        query_posts( array(
            'post_type' => 'legislation',
            'showposts' => 4,
            'numberposts' => 4,
            'order' => 'ASC',
        ) );
    ?>
    <?php while (have_posts()) : the_post(); ?>

    <div class="container">
        <div class="">
            <div class="encadre-legis">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="legislation-content">           
                <?php the_content(); ?>
            </div> 
        </div>
    </div>                     
    <?php endwhile; ?>

    <hr>

</section>

<?php get_footer(); ?>