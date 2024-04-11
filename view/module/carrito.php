<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrito Compra</title>


</head>


<body>


    <div class="collapse navbar-collapse"></div>
    <?php include_once 'view/module/header.php'; ?>


    <main>
        <div class="container">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Total</th>
                        </tr>
                    </thead>
        <?php
        $code = $_GET['code']; //Recibe la variable code de la ruta
        $data = new MenuController();
        if (gettype($data) > 0) {
            foreach ($data->mostrarMenu() as $key => $value) {

                if ($value['id_plato'] == $code) { ?>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p id="producto" name="producto"><?php echo($value['nombre_plato']);?></p>
                                        </td>
                                        <td>
                                            <p id="precio" name="precio"><?php echo($value['precio']);?></p>
                                        </td>
                                        <td>
                                            <input type="number" min="1" max="30" step="1" value="" name="cantidad" id="cantidad">
                                        </td>
                                        <td>
                                            <br>
                                        </td>
                                        <td>
                                            <a href="#" id="eliminar" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="eliminarModal">Eliminar</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td colspan="2">
                                            <p class="h3" name = "total" id = "total"><?php echo($value['total']);?></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table> <?php
                                    } else { 


                                            }
                                        }
                                    }
                                                ?> </div>
                                <div class="row">
                                    <div class="col-sm-4 offset-sm-6 d-grid gap-2">
                                        <a href="#" class="btn btn-primary btn-md">Pagar</a>
                                    </div>
                                </div>
                        </div>
    </main>
    <?php
    include_once 'footer.php';



    if (isset($_POST['producto'])) { //Para enviar datos a la base
        $objCtrUser = new CarritoController();
        $objCtrCarrito->SetCrearCarrito(
            $_POST['id_carrito'],
            $_POST['producto'],
            $_POST['precio'],
            $_POST['cantidad'],
            $_POST['total']
        );
    }


    ?>
</body>

</html>