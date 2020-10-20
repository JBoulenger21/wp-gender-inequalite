<?php 
/*
Template Name: chiffres
*/

get_header();
   

?>
 
 <section class="chiffres container">
    <h2>Les chiffres des inégalités</h2>
<!-- Présentation des chiffres bruts -->
    <div class="données">
<!-- appel du custom post -->
        <?php
            query_posts( array(
                'post_type' => 'chiffre_base',
                'showposts' => 1
            ) );
        ?>
        <?php while (have_posts()) : the_post(); ?>

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
        <h3>Plus de détails</h3>
        <div class="articles-details">
            <div class="cat tab-left">
                <div class="img-tableau">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cat-social.png" alt="tableau des écart de rémunération selon catégories social">
                </div>
                <div class="article">
                    <h4>Les catégories sociales</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio eligendi maxime facere excepturi, ullam inventore saepe, earum quos non officiis quidem, quisquam tempora nesciunt. In eligendi laborum doloribus ea explicabo! Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit voluptas minima aperiam neque, ab placeat quis dolorem eligendi? Voluptate nesciunt sequi eligendi incidunt reiciendis voluptatum autem. Magni obcaecati laborum dicta!</p>
                    <a href="https://www.inegalites.fr/Les-inegalites-de-salaires-entre-les-femmes-et-les-hommes-etat-des-lieux?id_theme=22" target="_blank" rel="noopener" class="sources">(sources)</a>
                </div>
            </div>
            <div class="ecart-niveau tab-right">              
                <div class="article">
                    <h4>Les niveaux de rémunération</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio eligendi maxime facere excepturi, ullam inventore saepe, earum quos non officiis quidem, quisquam tempora nesciunt. In eligendi laborum doloribus ea explicabo! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem veritatis cum animi harum nisi ab id doloribus fuga pariatur sapiente numquam molestias eligendi voluptates praesentium velit reiciendis est, modi expedita. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium adipisci harum tenetur fuga quam dolor sequi at vel eligendi optio omnis eveniet, error enim, velit debitis, assumenda veniam tempora veritatis.</p>
                    <a href="https://www.inegalites.fr/Les-inegalites-de-salaires-entre-les-femmes-et-les-hommes-etat-des-lieux?id_theme=22" target="_blank" rel="noopener" class="sources">(sources)</a>
                </div>
                <div class="img-tableau">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dif-sexe-niveau.png" alt="tableau des écart de rémunération selon catégories social">
                </div>
            </div>
            <div class="repartition tab-left">
                <div class="img-tableau">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/repartition.png" alt="tableau de la répartition des écarts de rémunération">
                </div>
                <div class="article">
                    <h4>Répartition des inégalitées</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio eligendi maxime facere excepturi, ullam inventore saepe, earum quos non officiis quidem, quisquam tempora nesciunt. In eligendi laborum doloribus ea explicabo! Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit voluptas minima aperiam neque, ab placeat quis dolorem eligendi? Voluptate nesciunt sequi eligendi incidunt reiciendis voluptatum autem. Magni obcaecati laborum dicta!</p>
                    <a href="https://www.inegalites.fr/Les-inegalites-de-salaires-entre-les-femmes-et-les-hommes-etat-des-lieux?id_theme=22" target="_blank" rel="noopener" class="sources">(sources)</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>