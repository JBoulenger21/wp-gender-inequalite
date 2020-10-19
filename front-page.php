<?php get_header(); ?>

<div class="container front-page">

    <div class="encadre-introduction-home">
        <?php
        query_posts(array(
        'post_type' => 'introduction',
        'showposts' => 1
        ) );
        ?>
        <?php while (have_posts()) : the_post(); ?>

        <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-intro-home img-fluid', 'alt' => '']); ?>
        <div class="py-auto p-intro-home"><?php the_content(); ?></div>

        <?php endwhile; ?>
    </div>

    <div class="presentation-home">
        <h2>Présentation</h2>

        <?php
        query_posts(array(
        'post_type' => 'presentation',
        'showposts' => 1
        ) );
        ?>
        <?php while (have_posts()) : the_post(); ?>

        <div class="p-presentation-home"><?php the_content(); ?></div>
        <div class="presentation-home-image mx-auto">
        <?php the_post_thumbnail('post-thumbnail', ['class' => 'presentation-home-image img-fluid', 'alt' => 'illustration presentation']); ?>
        </div>
        <?php endwhile; ?>
    </div>

    <div class="pages-home">
        <h2>Pages</h2>
        <div class="row">

        <?php 
        query_posts(array(
        'post_type' => 'sections',
        'showposts' => 4
        ) );
        ?>
            <?php while (have_posts()) : the_post(); ?>

            <div class="col-lg-6 text-center">
                <h3><?php the_title(); ?></h3>
                <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-page-home img-fluid', 'alt' => 'icone section']); ?>
                <div class="p-home"><?php the_content(); ?></div>
                <button type="button" class="btn btn-lg btn-primary">Voir</button>
            </div>

        <?php endwhile; ?>

        </div>
    </div>

</div>

<?php get_footer(); ?>
