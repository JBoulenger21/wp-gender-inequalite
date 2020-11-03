<?php 
/*
Template Name: chiffres
*/

get_header('pages');

?>
 
 <section class="chiffres">
    
        <!-- appel du custom post -->
        <?php
            query_posts( array(
                'post_type' => 'chiffre',
                'showposts' => 4,
                'numberposts' => 4,
                'order' => 'ASC',
            ) );
        ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="container">
            <div class="encadre-legis">
                <h2><?php the_title(); ?></h2>
            </div>

    <!-- Présentation des chiffres bruts -->
            <div class="données">
                <div class="articles">
                    <?php the_content(); ?>                     
                </div>
            </div>
        </div>
        <div class="tableau container-fluid mb-5">
            <!-- <div class=""> -->
            <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'alt' => '']); ?>
        </div>
    <!-- </div> -->
    <?php endwhile; ?>
    <!-- </div>   -->
</section>

<?php get_footer(); ?>

