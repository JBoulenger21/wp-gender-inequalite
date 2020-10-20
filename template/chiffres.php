<?php 
/*
Template Name: chiffres
*/

get_header();
    if (have_posts()): while (have_posts()) : the_post();

?>
 
 <section class="chiffres container">
    <h2>Les chiffres des inégalités</h2>
<!-- Présentation des chiffres bruts -->
    <div class="données">
        <div class="base-salaire">
            <p>En "ETP" [1], les femmes touchent 18,5 % de moins que les hommes, selon l’Insee. La discrimination pure serait d’environ 10 % d’après le ministère du Travail. Le salaire mensuel net moyen des hommes, ETP  est de 2 438 € en 2015, celui des femmes de 1 986 €, soit un écart de 452 €. Les femmes perçoivent donc, en moyenne, 81,5 % du salaire des hommes. Soit un salire inférieur de 18,5%. Ou encore les  hommes touchent 22,8% de plus.</p>
            <a href="https://www.inegalites.fr/Les-inegalites-de-salaires-entre-les-femmes-et-les-hommes-etat-des-lieux?id_theme=22" target="_blank" rel="noopener" class="sources">(sources)</a>
        </div>
        <div class="tableau-base">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/salaire-net-moyen-selon.jpeg" alt="Tableau representant le salaire net moyen (source : INSEE)">
        </div>
    </div>
<!-- Les données en détails -->
    <div class="details">
        <h3>Plus de détails</h3>
        <div class="articles-details">
            <div class="cat">
                <div class="cat-tableau">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cat-social.png" alt="tableau des écart de rémunération selon catégories social">
                </div>
                <div class="social-article">
                    <h4>Les catégories sociales</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio eligendi maxime facere excepturi, ullam inventore saepe, earum quos non officiis quidem, quisquam tempora nesciunt. In eligendi laborum doloribus ea explicabo! Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit voluptas minima aperiam neque, ab placeat quis dolorem eligendi? Voluptate nesciunt sequi eligendi incidunt reiciendis voluptatum autem. Magni obcaecati laborum dicta!</p>
                    <a href="https://www.inegalites.fr/Les-inegalites-de-salaires-entre-les-femmes-et-les-hommes-etat-des-lieux?id_theme=22" target="_blank" rel="noopener" class="sources">(sources)</a>
                </div>
            </div>
            <div class="ecart-niveau">              
                <div class="niveau-article">
                    <h4>Les niveaux de rémunération</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio eligendi maxime facere excepturi, ullam inventore saepe, earum quos non officiis quidem, quisquam tempora nesciunt. In eligendi laborum doloribus ea explicabo! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem veritatis cum animi harum nisi ab id doloribus fuga pariatur sapiente numquam molestias eligendi voluptates praesentium velit reiciendis est, modi expedita. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium adipisci harum tenetur fuga quam dolor sequi at vel eligendi optio omnis eveniet, error enim, velit debitis, assumenda veniam tempora veritatis.</p>
                    <a href="https://www.inegalites.fr/Les-inegalites-de-salaires-entre-les-femmes-et-les-hommes-etat-des-lieux?id_theme=22" target="_blank" rel="noopener" class="sources">(sources)</a>
                </div>
                <div class="niveau-tableau">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dif-sexe-niveau.png" alt="tableau des écart de rémunération selon catégories social">
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile; endif;
get_footer();?>