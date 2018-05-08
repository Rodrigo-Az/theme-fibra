<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header>
	


		  <div class="container-fluid navbarazul">

         <div class="row">

                  <div class="col"><!--empieza el logo-->

                            <div class="mt-3" style="width: auto;">
                            <a href="#">
                                <img src="http://localhost/wordpress/wp-content/themes/storefront-child-starter-master/image/logofibra.png"class="img-responsive" width="200" height="60" alt="">
                            </a>
                            </div>
                        

                  </div>

                  

                  

                       <nav class="navbar navbar-dark">  

                        <div class="col navbar-nav">


                           <?php wp_nav_menu(array(

                                'theme_location' => 'Cuenta',
                                 'depth' => 2,
                                'container' => 'div',
                                'container_class' => 'container cuenta mt-5',
                                'container_id' => '',
                                'menu_class' => 'nav justify-content-end',
                                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                                  'walker' => new wp_bootstrap_navwalker()

                            )); ?>

                          </div>  

                        </nav>      
                    

          </div>  

        </div>


   <!--finf vanbar>


<!--segunda navbar-->



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

 
  <?php wp_nav_menu(array(

      'theme_location' => 'superior',
       'depth' => 2,
      'container' => 'div',
      'container_class' => 'collapse navbar-collapse',
      'container_id' => 'navbarSupportedContent',
      'menu_class' => 'nav navbar-nav',
      'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
        'walker' => new wp_bootstrap_navwalker()

  )); ?>


</nav>



<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
<script type="text/javascript">
    window.cookieconsent_options = {"message":"Este sitio web utiliza cookies para garantizar que obtengas la mejor experiencia de navegación.","dismiss":"Acepto","learnMore":"Más información","link":"http://localhost/wordpress/politica-de-cookies/","theme":"dark-floating"};
</script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
<!-- End Cookie Consent plugin -->
	</header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 */
	do_action( 'storefront_before_content' ); ?>

	

		<?php
		/**
		 * Functions hooked in to storefront_content_top
		 *
		 * @hooked woocommerce_breadcrumb - 10
		 */
		do_action( 'storefront_content_top' );


