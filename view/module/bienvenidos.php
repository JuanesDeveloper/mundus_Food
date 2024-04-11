
<?php
require_once 'view/module/header.php'
?>    
        <!-- carrusel -->
      <div class="container">
          <div id="carouselExampleCaptions" class="carousel slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>

            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="view/img/colombiana.png" class="d-block w-100" alt="130.px">
                <div class="carousel-caption d-none d-md-block">
                   <h5>Hamburguesa cubana</h5>
                   <p>Pan Artesanal, 150 gr de bondionla de cerdo, ropa vieja en reducccion de mango,
                    tocineta ahumada,queso mozzarella
                   </p>
                </div>
              </div>
              

              <div class="carousel-item">
                    <img src="view/img/3 comidas.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Irlanda y reino unido </h5>
                    <p> la oportunidad de probar en un bocado, un pedacito de cada pais</p>
                </div>
              </div>

              <div class="carousel-item">
                  <img src="view/img/4.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Papas irlandesas </h5>
                    <p>Papas rusticas, salchicha artesanal irlandesa, trozos de carne de hamburguesa artesanal, queso asado, tcineta ahumada, salsa mayo tamarindo</p>
                </div>
              </div>
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
         </button>
            
             <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
     
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
            
          <br> 

          <!-- citacion -->
          <figure class="text-center">
            <blockquote class="blockquote">
                <p>El mundo es tuyo </p>
            </blockquote>
            <figcaption class="blockquote-footer">
                <cite title="Source Title">Date un viaje por el mundo </cite>
            </figcaption>
          </figure>

          <br>

           <!-- tarjetas -->
        <div class="container">
          <div class="row">

             <div class="col-4">
                <div class="card" style="width: 18rem;">
                      <img src="view/img/segundacomida.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">MENU</h5>
                        <p class="card-text"> Viaja por el mundo atraves del tu paladar </p>
                        <a href="index.php?Route=menu" class="btn btn-primary">Menu aqui</a>
                    </div>
                  </div>
             </div>

            
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                      <img src="view/img/3 comidas.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Reservas</h5>
                        <p class="card-text">Celebra tus mejores momentos y crea recuerdos inolvidables </p>
                        <a href="index.php?Route=reserva" class="btn btn-primary">Reserva aqui </a>
                    </div>
                </div>
            </div>

            
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                      <img src="view/img/10.png" class="card-img-top" alt="10px" >
                    <div class="card-body">
                        <h5 class="card-title">Sobre Nosotros</h5>
                        <p class="card-text">Conoce quienes somos, nuestra ubicacion y contactos</p>
                        <a href="index.php?Route=nosotros" class="btn btn-primary">Sobre nosotros </a>
                    </div>
                  </div>
            </div>
          </div>

           <!-- botones y imagen -->
          <div class="row mt-5">
              <div class="col-9">
                <h2> Experiencia Mundus </h2>
                  <p> En nuestra sede prseencia de mundus food, vas a viajar por el mundo atraves de tu paladar.Vas a poder jugar trivias, rompecabezas, juego de punteria y muchos otros mas.
                  No te pierdas la oportunidad de visitarnos y tener una escapa por el mundo  </p>
                <div>
                    <a href="index.php?Route=nosotros" type="button" class="btn btn-outline-warning">Conoce mas </a>
                </div>
              </div>

               <div class="col-2"> 
                  <img src="view/img/evento2.PNG" class="img-fluid ">
               </div>

           </div>
       </div>

          <br>

          <a  href="index.php?Route=Admin">Vista Administrador</a>
         
          <!--formulario -->
        

          
            
</body>
</html>