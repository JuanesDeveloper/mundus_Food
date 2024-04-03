<?php
require_once 'view/module/header.php'
?>
<body>
    <div class="container"> 
        <div class="row mt-4"> 
          <center>
             <img src="view/img/logo_inicio.png" class="img-fluid" style="height: 160px; margin-top: 40px;" alt="80px">
          </center>

    <section class="form-register">
        <h4>Inicio sesion</h4>
<form method="POST">
       <input class="controls" type="text" name="correo" id="correo" placeholder="Ingresa tu correo">
       <input class="controls" type="text" name="password" id="password" placeholder="Ingresa tu contraseña">
       <label class="form-check-label" for="exampleCheck1">Acepto terminos y condiciones</label>
       <input class="botons"  type="submit" value="Ingresar" />
</form>
       <p><a href="">¿No tienes cuenta? Crea tu cuenta </a></p>
       <?php
       if(isset($_POST['correo']))
       {
        $user = $_POST['correo'];
        $contrasena = $_POST['password'];
        try
        {
            $objCtl = new UserController();
            $objCtl -> getVerifyPass( $user, $contrasena);

        }
        catch(Exception$e)
        {

        }

       }
       


       ?>
   </section>
</div>

</body>
</html>