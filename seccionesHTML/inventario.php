<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body>
    <?php
    require '../model/conexion.php';
    $db = conectarBD();

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>"; 

        $nombre = $_POST['nombre'];
        $categoria = $_POST['categoria'];
        $cantidad = $_POST['cantidad'];
        $proveedor = $_POST['proveedor'];
        $precioCompra = $_POST['precioCompra'];
        $precioVenta = $_POST['precioVenta'];

        // Insertar a la base de datos
        $insertar = " INSERT INTO productos(nombre, categoria, cantidad, proveedor, precioCompra, precioVenta)
        VALUES ('$nombre', '$categoria', '$cantidad', '$proveedor', '$precioCompra', '$precioVenta')";
 
        //echo $insertar;

        $resultado = mysqli_query($db, $insertar);

        if($resultado){
            echo "resultado correctamente mijooo";
        }
    }   

    
    ?>

    <?php include '../includes/templates/header.php' ?>

    <div class="grid">

        <?php include '../includes/templates/secciones.php' ?>

        <div class="p-4">
            <div>
                <div>
                    <div>
                        <form class="grid-form mt-4" method="post" action="inventario.php">
                            <div class="centrar-compra">
                                <svg xmlns="http://www.w3.org/2000/svg" class="espacio-icono icon icon-tabler icon-tabler-checkup-list" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                                    <rect x="9" y="3" width="6" height="4" rx="2" />
                                    <path d="M9 14h.01" />
                                    <path d="M9 17h.01" />
                                    <path d="M12 16l1 1l3 -3" />
                                </svg>

                                <h2> Registrar Producto</h2>
                            </div>
                            <div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nombre:</label>
                                    <input type="text" name="nombre" class="form-control" id="exampleInputNombre">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Categoria:</label>
                                    <input type="text" name="categoria" class="form-control" id="exampleInputCategoria">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Cantidad:</label>
                                    <input type="text" name="cantidad" class="form-control" id="exampleInputCantidad">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Proveedor:</label>
                                    <input type="text" name="proveedor" class="form-control" id="exampleInputProveedor">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Precio de compra:</label>
                                    <input type="text" name="precioCompra" class="form-control" id="exampleInputCompra">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Precio de venta:</label>
                                    <input type="text" name="precioVenta" class="form-control" id="exampleInputVenta">
                                </div>
                                <div class="boton-centrado">
                                    <button type="submit" class="boton">Registrar</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>

                <div class="bg-color mt-5 p-2">
                    <h3 class="centrado mb-5">Consultar producto</h3>

                    <div class="grid-form">
                        <div class="mx-5">
                            <div>
                                <p>Nombre:</p>
                                <input type="text" class="form-control" id="nombre">
                            </div>
                            <div>
                                <p>Proveedor:</p>
                                <input type="text" class="form-control" id="email">
                            </div>
                        </div>

                        <div class="me-5">
                            <div>
                                <p>Categoria:</p>
                                <input type="text" class="form-control" id="exampleInputtotal">
                            </div>
                        </div>
                    </div>

                    <div class="centrado mt-5 mb-5">
                        <button type="submit" class=" boton">Consultar</button>
                    </div>

                    <div class="tot-comp pb-5">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Proveedor</th>
                                    <th scope="col">Categoria</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


                <div class="mt-5  bg-color p-2">
                    <div class="centrado pb-5">
                        <h3>Total Productos</h3>
                    </div>

                    <div class="tot-comp">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Proveedor</th>
                                    <th scope="col">Precio de compra</th>
                                    <th scope="col">Precio de venta</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="/js/app.js"></script>
</body>

</html>