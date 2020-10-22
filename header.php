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
          <!--Icone ouvrant menu-->
          <div class="open-menu" onclick="openNav()">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
          </div>
          <!-- The overlay -->
          <div class="menu">
            <div id="myNav" class="overlay">
        <!-- Button to close the overlay navigation -->
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                <div class="container">
                  <div class="close-bar1"></div>
                  <div class="close-bar2"></div>
                  <div class="close-bar3"></div>
                </div>
              </a>
        <!-- Overlay content -->
              <div class="overlay-content">
                <a>
                  <?php wp_nav_menu( array (
                    'theme_location' => 'navigation-hf',
                    'menu_class' => 'menu_navigation',
                  ) ); ?> 
                </a>
              </div>
            </div>
          </div>

          <div class="logo">
            <a href="<?php echo home_url( '/' ); ?>">
            <?php echo the_custom_logo()?>
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
        <h1><?php echo bloginfo('name'); ?></h1>


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
    <script>
      /* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("myNav").style.width = "100%";
  }
  /* Close when someone clicks on the "x" symbol inside the overlay */
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  }
    </script>
