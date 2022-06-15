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
                                <svg xmlns="http://www.w3.org/2000/svg" class="espacio-icono icon icon-tabler icon-tabler-user-plus" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                    <path d="M16 11h6m-3 -3v6" />
                                </svg>
                                <h2>Registrar Cliente</h2>
                            </div>
                            <div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nombre:</label>
                                    <input type="text" class="form-control" id="exampleInputNombre">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Telefono:</label>
                                    <input type="text" class="form-control" id="exampleInputTelefono">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Direccion:</label>
                                    <input type="text" class="form-control" id="exampleInputDireccion">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email:</label>
                                    <input type="text" class="form-control" id="exampleInputEmail">
                                </div>
                                <div class="boton-centrado">
                                   <button type="submit" class="boton">Registrar</button> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="bg-color mt-5 p-2">
                    <h3 class="centrado mb-5">Consultar Cliente</h3>

                    <div class="grid-form">
                        <div class="mx-5">
                            <div>
                                <p>Nombre:</p>
                                <input type="text" class="form-control" id="nombre">
                            </div>
                            <div>
                                <p>Email:</p>
                                <input type="email" class="form-control" id="emailCliente">
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
                                    <th scope="col">Email</th>
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
                        <h3>Total Clientes</h3>
                    </div>

                    <div class="tot-comp">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Direccion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
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
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
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
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
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