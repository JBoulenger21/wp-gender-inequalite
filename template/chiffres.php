<?php 
/*
Template Name: chiffres
*/

get_header();
    if (have_posts()): while (have_posts()) : the_post();

?>
 
 <section class="chiffres container">
    <h2>Les chiffres des inégalités</h2>
    <div class="données">
        <div class="base-salaire">
            <p>En "ETP" [1], les femmes touchent 18,5 % de moins que les hommes, selon l’Insee. La discrimination pure serait d’environ 10 % d’après le ministère du Travail. Le salaire mensuel net moyen des hommes, ETP  est de 2 438 € en 2015, celui des femmes de 1 986 €, soit un écart de 452 €. Les femmes perçoivent donc, en moyenne, 81,5 % du salaire des hommes. Soit un salire inférieur de 18,5%. Ou encore les  hommes touchent 22,8% de plus.</p>
            <a href="#" class="sources">sources</a>
        </div>
        <div class="tableau-base">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/salaire-net-moyen-selon.jpeg" alt="Tableau representant le salaire net moyen (source : INSEE)">
        </div>
    </div>
</section>
<?php endwhile; endif;
get_footer();?>