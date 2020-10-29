<?php
/*
Template Name: Causes
*/
get_header();
?>
<div class="container">
<h1>Causes</h1>

<<<<<<< HEAD
<?php
  $cause = get_posts(array(
  'post_type' => 'cause',
  'showposts' => 3,
  'numberposts' => 3,
  'order' => 'ASC'
  ) );
$i = 0;
while (have_posts()) : the_post();
 ?>
<div class="causeDesktop">
 <?php

foreach ($cause as $post) {

  $i++;
  if ($i % 2 == 0){
?>
<div class="row cause">
  <div class="col-lg-6 col-sm-12">
      <?php the_post_thumbnail('medium',[ 'alt' => '']) ?>
  </div>
  <div class="col-lg-6 col-sm-12">
      <h3><?php the_title(); ?></h3>
      <div class="causeContent">
       <?php the_excerpt(); ?>
=======
<div class="centerCause">
  <div class="container">
    <div class="encadre-legis">
      <h2>Causes</h2>
    </div>


    <?php
      $cause = get_posts(array(
      'post_type' => 'cause',
      'showposts' => 3,
      'numberposts' => 3,
      'order' => 'ASC'
      ) );
    $i = 0;
    while (have_posts()) : the_post();
     ?>
    <div class="causeDesktop">
     <?php

    foreach ($cause as $post) {

      $i++;
      if ($i % 2 == 0){
    ?>
    <div class="row cause">
      <div class="col-lg-6 col-sm-12">
          <?php the_post_thumbnail('medium',[ 'alt' => '']) ?>
      </div>
      <div class="col-lg-6 col-sm-12 childcenter">
          <h3><?php the_title(); ?></h3>
          <div class="causeContent">
           <?php the_excerpt(); ?>
          </div>
>>>>>>> features/Julie
      </div>
  </div>
</div>

<?php
} else{
  ?>
  <div class="row cause">
    <div class="col-lg-6 col-sm-12">
        <h3><?php the_title(); ?></h3>
        <div class="causeContent">
         <?php the_excerpt(); ?>
        </div>
    </div>
    <div class="col-lg-6 col-sm-12">
        <?php the_post_thumbnail('medium',[ 'alt' => '']) ?>
    </div>
  </div>
<?php
}
}

endwhile;
?>
</div>

<?php
query_posts(array(
'post_type' => 'cause',
'showposts' => 3,
'numberposts' => 3,
'order' => 'ASC'
) );
while (have_posts()) : the_post();
 ?>
</div>
<div class="causeResponsive">
  <div class="row cause">
    <div class="col-12">
        <h3><?php the_title(); ?></h3>
        <div class="causeContent">
         <?php the_content(); ?>
        </div>
        <?php the_post_thumbnail('thumbnail',[ 'alt' => '']) ?>
    </div>
  </div>
</div>
<?php endwhile; ?>
</div>


<<<<<<< HEAD
=======
<div class="centerCause">
  <div class="container">
    <h2>Conséquences</h2>
>>>>>>> features/Julie


<div class="container">
<h1>Conséquences</h1>

<?php
$consequence = get_posts(array(
'post_type' => 'consequence',
'showposts' => 3,
'numberposts' => 3,
'order' => 'ASC'
) );
$i = 0;
while (have_posts()) : the_post();
 ?>
<div class="causeDesktop">
 <?php

foreach ($consequence as $post) {

  $i++;
  if ($i <=3){
  if ($i % 2 != 0){
?>
<div class="row cause">
  <div class="col-lg-6 col-sm-12">
      <?php the_post_thumbnail('medium',[ 'alt' => '']) ?>
  </div>
  <div class="col-lg-6 col-sm-12">
      <h3><?php the_title(); ?></h3>
      <div class="causeContent">
       <?php the_excerpt(); ?>
      </div>
  </div>
</div>

<?php
} else{
  ?>
  <div class="row cause">
    <div class="col-lg-6 col-sm-12">
        <h3><?php the_title(); ?></h3>
        <div class="causeContent">
         <?php the_excerpt(); ?>
        </div>
    </div>
    <div class="col-lg-6 col-sm-12">
        <?php the_post_thumbnail('medium',[ 'alt' => '']) ?>
    </div>
  </div>
<?php
}
}
}
endwhile;
?>
</div>

<?php
query_posts(array(
'post_type' => 'consequence',
'showposts' => 3,
'numberposts' => 3,
'order' => 'ASC'
) );
while (have_posts()) : the_post();
 ?>
</div>
<div class="causeResponsive">
  <div class="row cause">
    <div class="col-12">
        <h3><?php the_title(); ?></h3>
        <div class="causeContent">
         <?php the_content(); ?>
        </div>
        <?php the_post_thumbnail('thumbnail',[ 'alt' => '']) ?>
    </div>
  </div>
</div>
<?php endwhile; ?>
</div>

<hr>

<?php get_footer();?>
