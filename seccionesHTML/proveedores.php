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
                <div>
                    <div>
                        <form class="grid-form mt-4">
                            <div class="centrar-compra">
                                <svg xmlns="http://www.w3.org/2000/svg" class="espacio-icono icon icon-tabler icon-tabler-truck" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="7" cy="17" r="2" />
                                    <circle cx="17" cy="17" r="2" />
                                    <path d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
                                </svg>
                                <h2>Registrar Proveedor</h2>
                            </div>
                            <div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nombre:</label>
                                    <input type="text" class="form-control" id="proveedorNombre">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Categoria:</label>
                                    <input type="text" class="form-control" id="proveedorCategoria">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Telefono:</label>
                                    <input type="text" class="form-control" id="proveedorTelefono">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Dirección:</label>
                                    <input type="text" class="form-control" id="proveedorDireccion">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email:</label>
                                    <input type="text" class="form-control" id="proveedorEmail">
                                </div>
                                <div class="boton-centrado">
                                    <button type="submit" class="boton">Registrar</button>
                                </div>
                                
                            </div>

                        </form>
                    </div>
                </div>

                <div class="bg-color mt-5 p-2">
                    <h3 class="centrado mb-5">Consultar Proveedor</h3>

                    <div class="grid-form">
                        <div class="mx-5">
                            <div>
                                <p>Nombre:</p>
                                <input type="text" class="form-control" id="nombre">
                            </div>
                            <div>
                                <p>Categoria:</p>
                                <input type="text" class="form-control" id="categoria">
                            </div>
                        </div>

                        <div class="me-5">
                            <div>
                                <p>Telefono:</p>
                                <input type="tel" class="form-control" id="exampleInputtotal">
                            </div>
                            <div>
                                <p>Direccion:</p>
                                <input type="text" class="form-control" id="exampleInputtotal">
                            </div>
                        </div>
                    </div>

                    <div class="centrado mt-5 mb-5">
                        <button type="submit" class="boton">Consultar</button>
                    </div>

                    <div class="tot-comp pb-5">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Direccion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <!-- <tr>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="mt-5  bg-color p-2">
                    <div class="centrado pb-5">
                        <h3>Total Proveedores</h3>
                    </div>

                    <div class="tot-comp">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Direccion</th>
                                    <th scope="col">Email</th>
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
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
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
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
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
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
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