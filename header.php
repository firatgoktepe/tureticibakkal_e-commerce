<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title><?php echo bloginfo( 'name' ); ?></title>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


    <header>
        <nav class="nav">
            <div class="navbar">
                <div class="logo">
                    <a href="<?php echo home_url(); ?>">
                        <?php
                        // Display the Custom Logo
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        
                        if ( has_custom_logo() ) {
                            echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                        } else {
                            echo '<h1>' . get_bloginfo('name') . '</h1>';
                        }
                        ?>
                    </a>
                </div>  
                <?php     
                wp_nav_menu( array(
                  'container'         => false,
                  'theme_location'    => "my-custom-menu",
                  'menu_class'        => 'nav-list',
              ) ); ?>
                    <div>
                        <ul class="top-social-menu">
                        <li>
                            <a href="https://api.whatsapp.com/send?phone=+905367302198"
                            ><i class="fab fa-whatsapp"></i
                            ></a>
                        </li>
                        <li>
                            <a
                            href="mailto:tureticibakkal@gmail.com?subject=Tureticibakkaldan"
                            ><i class="fas fa-envelope"></i
                            ></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                        </ul>
                </div>
                <div class="navbar-toggler">
                    <div class="line line1"></div>
                    <div class="line line2"></div>
                    <div class="line line3"></div>
                </div>
            </div>
        </nav>
    </header>

    <script type="text/javascript">

        function navMenu() {
            const navbarToggler = document.querySelector('.navbar-toggler');
            const navList = document.querySelector('.nav-list');

            if (navbarToggler) {
            navbarToggler.addEventListener('click', function() {
                navList.classList.toggle('nav-active');
                navbarToggler.classList.toggle('toggle');
            });
        }
        };

        navMenu();


    </script>


