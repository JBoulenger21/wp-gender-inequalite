  <div class="footer">

    <div class="container footer-container">

      <div class="footer-navigation">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a>
              <?php wp_nav_menu( array (
              'theme_location' => 'footer-hf',
              'menu_class' => 'menu_navigation',
            ) ); ?>
            </a>
          </li>
        </ul>
      </div>

      <!-- <div class="d-flex justify-content-center"> -->
        <div class="logo-footer">
          <a href="<?php echo home_url( '/' ); ?>">
            <?php echo the_custom_logo()?>
          </a>
        </div>
      <!-- </div> -->

      <div class="avis">
        <!-- <h5>Ce site vous à été utile? Dite le nous.</h5>
        <div class="smiley">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/smiley-content.png" alt="icone logo">       
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/smiley-ni-content-ni-pas-content.png" alt="icone logo">        
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/smiley-pas-contenti.png" alt="icone logo">         
        </div> -->
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-img.png" alt="">
      </div>

    </div>
  </div>
    <?php wp_footer(); ?>
  </body>
</html>
