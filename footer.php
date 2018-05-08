<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">

		


			<div class="container-fluid py-3">

   		<div class="row">

   		<div class="col-12 col-sm-3 col-md-3 mb-3 text-center mt-5">

   			<h4>Explorar</h4>

   			
            <ul class="mx-auto">
               

                  <a href="">Lo que hacemos</a>
                   <a href="">Financiamiento</a>
                    <a href="">Marketplace</a>
                     <a href="">Invertir</a>


               
            </ul>


   		</div>

   		<div class="col-12 col-sm-3 col-md-3 mb-3 text-center mt-5">

   			<h4>Acerca de</h4>

   			


              <ul class="mx-auto">
              

                  <a href="">Sobre Nosotros</a>
                   <a href="">Blog</a>
                    <a href="">Confianza y Seguridad</a>
                     <a href="">Ayuda y Servicio Tecnico</a>
                     <a href="">Contacto</a>


               
            </ul>

   		</div>

   		<div class="col-12 col-sm-3 col-md-3 mb-3 text-center mt-5">

   			<h4>Emprendedores</h4>

   		



            <ul class="mx-auto">
               

                  <a href="">Como Funciona</a>
                   <a href="">Centro de Educación</a>
                    <a href="">Directorio de Expertos</a>
                     <a href="">Tarifas</a>
                     <a href="">Programa</a>


               
            </ul>


   		</div>

   		<div class="col-12 col-sm-3 col-md-3 mb-3 text-center mt-5">

   			<h4>Politica de Uso</h4>

   			

            <ul class="mx-auto">
               

                  <a href="">Terminos de Uso</a>
                   <a href="">Politica de Privacidad</a>
                    <a href="">Politica de Cookies</a>
                     <a href="">Terminos de los Socios</a>
                    


               
            </ul>

   		</div>

   	</div>


   	</div>

      <?php
      /**
       * Functions hooked in to storefront_footer action
       *
       * @hooked storefront_footer_widgets - 10
       * @hooked storefront_credit         - 20
       */
      do_action( 'storefront_footer' ); ?>


		</div><!-- .col-full -->


	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
