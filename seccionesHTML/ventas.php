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

    <?php include '../includes/templates/header.php' ?>

    <div class="grid">

        <?php include '../includes/templates/secciones.php' ?>

        <div class="p-4">
            <div>
                <div class="grid-form bg-color p-2 mt-4">
                    <div>
                        <h3 class="pb-4 centrado">Detalles de esta venta</h3>


                        <div>
                            <div class="grid-ventas">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nombre:</label>
                                    <input type="text" class="form-control" id="nombreProducto">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Cantidad:</label>
                                    <input type="number" class="form-control" id="exampleInputcantidad">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Precio:</label>
                                    <input type="number" class="form-control" id="exampleInputprecio-total">
                                </div>
                                <!-- <button type="submit" class="btn btn-primary">Registrar</button> -->
                            </div>
                        </div>


                        <div class="tot-comp">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col">Precio</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td id="listaNomProd">-</td>
                                        <td id="listaNomCant">-</td>
                                        <td id="listaNomPrec">$</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>$</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>$</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="tot-comp pt-5 pb-5">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <!-- <th scope="col">Descuento</th> -->
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <!-- <td>$</td> -->
                                        <td id="totalVent">$</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div>
                        <h3 class="centrado">Total a cobrar</h3>

                        <h2 class="centrado pt-5  fuente-total" id="totalCobrar">$00.000</h2>
                        <hr class="hr-venta">

                        <div class="pt-5">
                            <div class="mb-3">

                                <div class=" flex-form">
                                    <h3>Total recibido:</h3>
                                    <input type="number" class="margen-input-venta form-control" placeholder="$" id="exampleInputtotal">
                                </div>
                                <hr class="hr-venta">
                            </div>
                        </div>

                        <div class="pt-5 flex-form">
                            <h3>Total a devolver:</h3>
                            <h3 class="fuente-devolver" id="totDevolver">$00.000</h3>
                        </div>
                        <div class="centrado mt-2 mb-4">
                            <button type="submit" class="boton">Finalizar</button>
                        </div>

                    </div>
                </div>

                <div class="mt-5  bg-color p-2">
                    <div class="centrado pt-4 m-4">
                        <h3>Total ventas de hoy</h3>
                    </div>

                    <div class="tot-comp">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Producto</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Direccion</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Precio total</th>
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





    <script src="/js/ventas.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="/js/app.js"></script>
</body>

</html>