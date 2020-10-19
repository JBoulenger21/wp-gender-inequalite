<?php get_header(); ?>

<div class="container front-page">

    <div class="encadre-introduction-home">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trans.png" alt="illustration et logo transgenre">
        <p class="py-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit expedita maiores quod accusamus minus ullam temporibus repudiandae explicabo eos praesentium. Veritatis ullam repellendus voluptatum ipsam reprehenderit nostrum veniam distinctio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit expedita maiores quod accusamus minus ullam temporibus repudiandae explicabo eos praesentium. Veritatis ullam repellendus voluptatum ipsam reprehenderit nostrum veniam distinctio.</p>
    </div>

    <div class="presentation-home">
        <h2>Présentation</h2>
        <p class="mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit expedita maiores quod accusamus minus ullam temporibus repudiandae explicabo eos praesentium. Veritatis ullam repellendus voluptatum ipsam reprehenderit nostrum veniam distinctio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit expedita maiores quod accusamus minus ullam temporibus repudiandae explicabo eos praesentium. Veritatis ullam repellendus voluptatum ipsam reprehenderit nostrum veniam distinctio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit expedita maiores quod accusamus minus ullam temporibus repudiandae explicabo eos praesentium. Veritatis ullam repellendus voluptatum ipsam reprehenderit nostrum veniam distinctio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit expedita maiores quod accusamus minus ullam temporibus repudiandae explicabo eos praesentium. Veritatis ullam repellendus voluptatum ipsam reprehenderit nostrum veniam distinctio.</p>
        <div class="presentation-home-image mx-auto">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/girlspeak.png" alt="illustration femme megaphone">
        </div>
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
