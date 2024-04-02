

    <section style="background-image: url(/view/img/fondo_registro.avif) ;" class="form-register">
     

         <h4>Formulario Registro Usuario</h4>
         <form id="registro" method="post" action="">
        <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingresa tu nombre">
        <input class="controls" type="text" name="apellido" id="apellido" placeholder="Ingresa tu apellido">
        <input class="controls" type="text" name="correo" id="correo" placeholder="Ingresa tu correo">
        <input class="controls" type="text" name="telefono" id="telefono" placeholder="Insegresa tu numero telefonico">
        <input class="controls" type="text" name="contrasena" id="contrasena" placeholder="Ingresa tu contraseña">
        <p>Estoy deacuerdo con <a href="#">Terminos y Condiciones</a></p>
        <input class="botons" onclick="valid(event)"  type="submit" value="Registro" />
        </form>
        


        <p><a href="/login.php">Ya Tengo Cuenta</a></p>
        <?php
        if (isset($_POST['nombres'])){
            $objCtrUser = new UserController();
            $objCtrUser -> setCrearUsuario(
              $_POST['nombres'],
              $_POST['apellido'],
              $_POST['correo'],
              $_POST['telefono'],
              $_POST['contrasena']
            );
          }
        ?>

    </section>
</body>

<?php

include_once 'view/module/footer.php';

?>
</html>