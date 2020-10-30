  <div class="footer">

    <div class="container">

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

      <div class="d-flex justify-content-center">
        <div class="logo-footer">
          <a href="<?php echo home_url( '/' ); ?>">
            <?php echo the_custom_logo()?>
          </a>
        </div>
      </div>
    </div>
  </div>
    <?php wp_footer(); ?>
  </body>
</html>
