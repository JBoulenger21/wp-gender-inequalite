<?php
/*
Template Name: Causes
*/

get_header();
?>
<div class="container">
<h1>Causes</h1>

<?php
  query_posts(array(
  'post_type' => 'cause',
  'showposts' => 3
  ) );
 if (have_posts()): while (have_posts()) : the_post();
foreach ($post as $post) {
  $i = 0;
  $i++;
  if ($i % 2 == 0){
?>
<div class="row cause">
  <div class="col-lg-6">
      <?php the_post_thumbnail('medium',[ 'alt' => '']) ?>
  </div>
  <div class="col-lg-6">
      <h2><?php the_title(); ?></h2>
      <div class="causeContent">
       <?php the_content(); ?>
      </div>
  </div>
</div>

<?php
} else{
  ?>
  <div class="row cause">
    <div class="col-lg-6">
        <h2><?php the_title(); ?></h2>
        <div class="causeContent">
         <?php the_content(); ?>
        </div>
    </div>
    <div class="col-lg-6">
        <?php the_post_thumbnail('medium',[ 'alt' => '']) ?>
    </div>
  </div>
<?php
}
}
 ?>



<?php endwhile; endif;?>
</div>
<?php get_footer();?>
