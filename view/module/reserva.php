<?php
require_once 'view/module/header.php'
?>
          <!-- tarjetas -->
          <div class="container mt-5">
              
            <div class="row mt-5">
               <center>
                   <h2> Elige tu experiencia mundus </h2>
               </center>
            </div>

            <div class="row mt-5">
             <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="view/img/reserva1.png" class="card-img-top" >
                    <div class="card-body">
                     <h5 class="card-title">Agilidad mental</h5>
                          <p class="card-text"> Agilidad mental: Rompecabezas,adivina la palabra (palabras relacionas con viajes y aventuras)   </p>
                      <a href="#" class="btn btn-primary">seleccionar</a>
                    </div>
                  </div>
             </div>
          
              

          
              <div class="col-4">
                 <div class="card" style="width: 18rem;">
                      <img src="view/img/reserva2.png" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">Prueba de Conocimientos</h5>
                          <p class="card-text">Trivia grupal:  Coloca aprueba tu conocimiento a través de preguntas sobre paises, culturas, gastronomia y adivina la bandera.  </p>
                        <a href="#" class="btn btn-primary">seleccionar</a>
                      </div>
                  </div>
              </div>
          
             <div class="col-4">
                 <div class="card" style="width: 18rem;">
                     <img src="view/img/reserva3.png" class="card-img-top" alt="10px" >
                       <div class="card-body">
                        <h5 class="card-title"> Rapidez y punteria</h5>
                        <p class="card-text"> Tiro al arco, guerra de continentes (enfrenta a tus amigos en conocimientos y defiende tu continente )</p>
                        <a href="#" class="btn btn-primary">seleccionar </a>
                    </div>
                  </div>
              </div>
            
            </div>
          </div>
        

          <!-- logo-->
      <div class="container"> 
           <div class="row mt-4"> 
             <center>
                <img src="view/img/logomundus_reserva.png" class="img-fluid" style="height: 250px; margin-top: 20px;" alt="80px">
             </center>
           </div>

          <!-- titulo -->
            <div class="row mt-4"> 
              <center>
                  <h1> Solicita una mesa </h1>
             </center>
            </div>

           <!-- formulario de reservacion-->
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mesa</label>
                <input type="number" name= "mesa"  class="form-control" id="mesa" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">  Este correo sera utilizado para la confirmacion de su reserva.</div>
              </div>

              <div class="mb-3">
                  <label for="exampleFormControlSelect1" class="form-label">Cantidad de personas</label> 
                    <select  class="form-select" id="cant_personas" name="cant_personas">
                        <option>1</option> <option>2</option> <option>3</option> <option>4</option> <option>5</option>
                    </select> 
                  <div id="emailHelp" class="form-text"> En caso de ser mas de 5 personas por favor, comunicarse con el resturante</div>
              </div>

              <div class="mb-3">
                 <label for="exampleInputcalendar" class="form-label">Fecha</label>
                 <input type="date" class="form-control"  id="fecha"  name="fecha">
              </div>

              <div class="mb-3">
                 <label for="exampleInputhora" class="form-label">Hora</label>
                 <input type="time" class="form-control"  id="hora"  name="hora">
              </div>

              <div class="mb-3 ">
                 <input type="checkbox" class="form-check-input" >
                 <label class="form-check-label" for="exampleCheck1">acepto terminos y condiciones</label>
              </div>
                <button type="submit" class="btn btn-primary">Confirmar reserva</button>
            </form>
         </div>


         <?php


            $data = new UserController();
               if (gettype($data) > 0) {
              foreach  ($data->ValidUsuario() as $key => $value)
              {
                if(isset($value['Id'])){

                  $id_usuario = $value['Id'];


                }
              }}
           ?>
         
         <?php
         
        if (isset($_POST['mesa'])){//Para enviar datos a la base
            $objCtrUser = new ReservaController();
            $objCtrReserva -> SetCrearReserva(
              
              $_POST['id_usuario'],
              $_POST['mesa'],
              $_POST['cant_personas'],
              $_POST['fecha'],
              $_POST['hora']
              
            );
          }
        ?>
        

</body>
</html>