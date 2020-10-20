<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <?php wp_head(); ?>
  </head>
  <body>

    <header class="header">
      <div class="container">
        <nav class="navigation">
          <div class="logo">
            <a href="<?php echo home_url( '/' ); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.white.png" alt="icone logo">
            </a>
          </div>
          <div class="item-navigation">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a>
                  <?php wp_nav_menu( array (
                  'theme_location' => 'navigation-hf',
                  'menu_class' => 'menu_navigation',
                ) ); ?>
                </a>
              </li>
            </ul>

          </div>


        </nav>
        <div class="container contain-404">
          <h1>Oops<span class="bidouille">_</span>!</h1>
          <h2 class="truc">Page non trouvée. Retournez à l'accueil.</h2>
        </div>

      </div>

    </header>
    <style>
      .header{
        background-image: url('<?php header_image() ?>');
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        width: 100%;
      }
    </style>
