<?php 
/*
Template Name: chiffres
*/

get_header();

?>
 
 <section class="chiffres container">
     <!-- appel du custom post -->
    <?php
        query_posts( array(
            'post_type' => 'chiffre',
            'showposts' => 1,
            'numberposts' => 1,
        ) );
    ?>
    <?php while (have_posts()) : the_post(); ?>

    <h2><?php the_title(); ?></h2>

<!-- Présentation des chiffres bruts -->
    <div class="données">
        <div class="base-salaire">
            <?php the_content(); ?>          
            <a href="https://www.inegalites.fr/Les-inegalites-de-salaires-entre-les-femmes-et-les-hommes-etat-des-lieux?id_theme=22" target="_blank" rel="noopener" class="sources">(sources)</a>
        </div>
        <div class="tableau-base">
        <?php the_post_thumbnail('post-thumbnail', ['class' => 'tableau-base img-fluid', 'alt' => '']); ?>
        </div>
    <?php endwhile; ?>
    </div>

<!-- Les données en détails -->
    <div class="details">
        <h3><?php post_type_archive_title(); ?></h3>
        <div class="articles-details">
            <?php
                $detail = get_posts( array(
                    'post_type' => 'detail',
                    'showposts' => 5,
                    'numberposts' => 5,
                    'order' => 'ASC'
                ) );
                $i= 0;
                while (have_posts()) : the_post(); 
            ?>           
            <?php foreach ($detail as $post){
                $i++;
                if ($i % 2 !==0 ){       
            ?>
            <div class="tab-left">
                <div class="img-tableau">
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'alt' => '']); ?>
                </div>
                <div class="article">
                    <h4><?php the_title(); ?></h4>
                    <?php the_excerpt(); ?>
                </div>           
            </div>
            
            <?php
                }else{                
            ?>
            <div class="tab-right">
            <div class="article">
                    <h4><?php the_title(); ?></h4>
                    <?php the_excerpt(  ); ?>
                </div>           
                <div class="img-tableau">
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'alt' => '']); ?>
                </div>
                
            </div>
            
            <?php       
            }
        }
        endwhile;?>
        </div>
       
    </div>
    
</section>

<?php get_footer(); ?>

