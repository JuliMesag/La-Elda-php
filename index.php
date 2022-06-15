<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <title>La Elda</title>
</head>

<body>

  <div>
    <h1 class="centrar-inicio">La Elda</h1>
  </div>

  <div class="centrado ">
    <form method="post" id="form">
      <h4 class="centrar-h4">Iniciar Sesión</h4>
      <div class="mb-3">
        <label for="exampleInputUsuario" class="form-label">Usuario</label>
        <input type="text" class="form-control" id="usuario" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="contraseña" required>
      </div>

      <!-- <div class="boton-centrado">
        <a href="/La-Elda-master/seccionesHTML/inventario.php">
          <input type="buton" value="Ingresar" class="boton">
        </a>
      </div> -->

      <div class="boton-centrado">
        <button id="btnIniciar" type="submit" class="boton" >Ingresar</button>
      </div>

      


    </form>
  </div>






  <script src="./js/validacionForm.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="/js/app.js"></script>

</body>

</html>