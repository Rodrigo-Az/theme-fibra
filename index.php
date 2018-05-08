<?php get_header(); ?>


    <!--BODY-->
  <div class="container-fluid">

       <div class="row">

 
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
     
      <img class="d-block w-100" src="http://localhost/wordpress/wp-content/themes/storefront-child-starter-master/image/slider.png" alt="First slide">
      

       <div class="carousel-caption d-none d-md-block">
   

    <a><h1 class="mx-auto">Diseño Colaborativo y Sostenible</h1></a>
    <p>Imagina productos que tengan triple impacto: Ambiental, Social y Economico. Encontralos en nuestro marketplace!</p>
   
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://localhost/wordpress/wp-content/themes/storefront-child-starter-master/image/slider2-02.jpg" alt="Second slide">
      
       <div class="carousel-caption d-none d-md-block">
   

   <a><h1 class="mx-auto">Financiamiento Colectivo</h1></a>
    <p>Productos innovadores y sostenibles, tenelos antes que nadie apoyando la campaña de los diferentes diseñadores</p>


  </div>

    </div>
   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 

  

 
 
 

</div>
</div>

 <!--financiamiento y marketplace-->

    
     
  

 <!--fin financiamiento-->


 <!--Map.me-->

 <div class="container-fluid">

  <div class="row">

    <div class="mx-auto mt-5">

    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=10WSfwQ_zCWsObGC5TAPC9S32c5ZTcIoK" width="1500" height="700"></iframe>

      </div>

    </div>

</div>

 <!--Map.me-->


 <!--Categorias de Porductos-->

  <div class="container">

       <div class="row">

         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border-bottom">   
          <h2 class="text-center mt-5">Que categorias te interesan?</h2>
          <h5 class="text-center mt-2">conocé los productos destacados de marcas y diseñadores emergentes antes que nadie!</h5>
         </div>
      
       </div>

          <div class="row border-bottom">
            
          <div class="col">
          <a href=""><img class="mx-auto mt-5 " src="http://localhost/wordpress/wp-content/themes/storefront-child-starter-master/image/Vestido-01.svg" width="100" Height="100"></a>
          <div class="text-center montserrat mb-5">vestidos</div>
           </div>
            <div class="col">
           <a href=""><img class="mx-auto mt-5 " src="http://localhost/wordpress/wp-content/themes/storefront-child-starter-master/image/Remera-02.svg" width="100" Height="100"></a>
           <div class="text-center montserrat mb-5">remeras</div>
           </div>
           <div class="col">
           <a href=""><img class="mx-auto mt-5 " src="http://localhost/wordpress/wp-content/themes/storefront-child-starter-master/image/Camisas-03.svg" width="100" Height="100"></a>
           <div class="text-center montserrat mb-5">camisas</div>
          </div>
          <div class="col">
           <a href=""><img class="mx-auto mt-5 " src="http://localhost/wordpress/wp-content/themes/storefront-child-starter-master/image/Cartera-04.svg"width="100" Height="100"></a>
           <div class="text-center montserrat mb-5">carteras</div>
          </div>
          <div class="col">
           <a href=""><img class="mx-auto mt-5 " src="http://localhost/wordpress/wp-content/themes/storefront-child-starter-master/image/silla-05.svg" width="100" Height="100"></a>
           <div class="text-center montserrat mb-5">muebles</div>
           </div>
            <div class="col">
           <a href=""><img class="mx-auto mt-5 " src="http://localhost/wordpress/wp-content/themes/storefront-child-starter-master/image/pantalon-06.svg" width="100" Height="100"> </a>
           <div class="text-center montserrat mb-5">pantalones</div>
            </div>
            <div class="col">
            <a href=""><img class="mx-auto mt-5 " src="http://localhost/wordpress/wp-content/themes/storefront-child-starter-master/image/Falda-07.svg" width="100" Height="100"></a>
            <div class="text-center montserrat mb-5">faldas</div>
            </div>


             <?php echo do_shortcode('[featured_products per_page="12" columns="4"]'); ?>
       
        </div>
    </div>


     

<!--fin productos-->

<!--Productos woocommerce-->







<!--blog-->


       

      <!--inicio blog -->

      <div class="container-fluid bg-dark">

          <div class="row">
          
          
          
          <h2 class="text-white mx-auto mt-5 mb-3"> DiBlog </h2>
     


      </div>
       
       

        <div class="row mb-5">


          


           
                
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                                  
                            <!--blog-->
                                                      <div class="col-12 col-sm-6 col-md-4 mt-3 mb-3">     
                                                      	<div class="card">
                                                      			
                                        				         <div class"card-block">
                                        				          <a href="<?php the_permalink(); ?>" <h4 class="card-title"><?php the_title(); ?></h4> 

                                        				           <p class="card-text"><?php the_excerpt(); ?></p>       

                                        				           <div class="card-footer">
                                        				           	<small class="text-muted">
                                        				                    
                                        				                   <?php the_category(', '); ?>

                                        				             </small>
                                        				          </div>
                                        				      </div>
                            				         
                            					               </div>	
                            				                </div>

                            				          
                            				    <?php endwhile; else : ?>
                              <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                            <?php endif; ?>


            

          </div>
      
      </div>        
		
    </div>
 
    <!--fin del blog-->

<!--div contacto-->

<div class="container-fluid rain">
      
           

               

          

          <div class="row">

     
               <div class="col-12 col-sm-12 col-md-4 mb-3 text-center mt-5">  
                 
                 <img class="mx-auto mb-2" src="http://localhost/wordpress/wp-content/themes/storefront-child-starter-master/image/envio.svg" width="40" Height="40">
                <h5 class="text-light tex-center">Envios</h5>
                <p class="text-light tex-center">Nos aseguramos que tus productos lleguen al lugar que quieras</p>

              </div>

              <div class="col-12 col-sm-12 col-md-4 mb-3 text-center mt-5">  

                 <img class="mx-auto mb-2" src="http://localhost/wordpress/wp-content/themes/storefront-child-starter-master/image/pagos.png" width="40" Height="40">
                <h5 class="text-light ">Pagos</h5>
                <p class="text-light ">Tenes las opciones de abonarlo en efectivo o mediante todas las tarjetas</p>

              </div>
 
                <div class="col-12 col-sm-12 col-md-4 mb-3 text-center mt-5">  

                  <img class="mx-auto mb-2" src="http://localhost/wordpress/wp-content/themes/storefront-child-starter-master/image/crow.png" width="40" Height="40">
                  <h5 class=" text-light">Crowfounding</h5>
                  <p class="text-light">Muchos de los productos forman parte de campañas de financiamiento colectivo, participa y tenelos antes que nadie</p>

                </div>

             </div>

           

</div>


<!--inicio seccion de productos-->

<div class="container fluid">

  <div class="row">

    <div class="container mt-5 mb-5">

<?php echo do_shortcode('[recent_products per_page="12" columns="4"]'); ?>


    </div>

  </div>

</div>


<!--inicio div contacto-->



<div class="container-fluid bg-dark mt-3">

            <div class="row align-items-center">

              <div class="col-12 col-sm-6 col-md-6 mb-3 border-right">  

                  <h5 class="montserrat text-white text-center mt-4 "> Nuestras Redes Sociales </h5>

                  <div class="row mt-3">

                    <div class="col">
                  <a href=""><img class="float-right" src="http://localhost/wordpress/wp-content/themes/storefront-child-starter-master/image/facebook.png" width="40" Height="40"></a>
                  
                    </div>
                    <div class="col">
                  <a href=""><img class="mx-auto" src="http://localhost/wordpress/wp-content/themes/storefront-child-starter-master/image/Curso-de-Instagram.png" width="30" Height="30"></a>
                 </div>

                  <div class="col">
                  <a href=""><img class="float-left" src="http://localhost/wordpress/wp-content/themes/storefront-child-starter-master/image/whatsapp.png" width="30" Height="30"></a>

                </div>

                    </div>

                    <div class="row">
                     <div class="mx-auto">

                  <button type="button" class="btn btn-outline-warning mt-4 mb-4">Recibi mas info!</button>
                 
                    </div>
                  </div>




                            
                   

                

              </div>


   <div class="col-12 col-sm-6 col-md-6 mb-3">


                       <h5 class="montserrat text-white text-center mt-4 "> Envianos un mensaje </h5>

                       

                  <div class="row">
                     <div class="mx-auto">

                  <button type="button" class="btn btn-outline-warning mt-4 mb-4">Contact Form</button>
                 
                    </div>
                  </div>

                 
                    


                    </div>
              
            </div>

</div>



<!--fin contacto-->



<!--div redes sociales-->
<div class="container-fluid rain">

  <div class="row">

    <div class="container mt-5 mb-5 text-center">

<h2 class="montserrat text-center mt-2 mb-2">Formate on line</h2>
<p class="montserrat"> FIBRA tiene una plataforma de aprendizaje en linea y colaborativo, te proponemos que nos acompañes en este proceso de aprendizaje
de los negocios de diseño</p>

<button type="button" class="btn btn-outline-warning">Registrate</button>
<button type="button" class="btn btn-outline-warning">Mas Información</button>


    </div>

</div>

</div>



<?php get_footer(); ?>