<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios</title>

    <script src="{{asset('js/app.js')}}" defer></script>
    <link rel="stylesheet" href="{{ asset ('css/app.css')}}"> 

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="/">Publired</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Clientes <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>
        </ul>
      </div>
    </nav>
    <br>
    <div class="container col-md-4">
      <h1>Agregar nuevo usuario</h1>
      <br>

    <form action="{{ url('/cliente')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="nombre">NOMBRE Y APELLIDOS</label>
          <input type="text" class="form-control" name="nombre" id="nombre">
        </div>

        <div class="form-group">
          <label for="foto">AGREGAR FOTO</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="foto" id="foto">
            <label class="custom-file-label" for="inputGroupFile01">Buscar</label>
        </div>
        </div>

        <div class="form-group">
          <label for="nombre">DNI</label>
          <input type="text" class="form-control" name="dni" id="dni">
        </div>

        <div class="form-group">
          <label for="nombre">DIRECCION</label>
          <input type="text" class="form-control" name="direccion" id="direccion">
        </div>

        <div class="form-group">
          <label for="nombre">TELEFONO</label>
          <input type="text" class="form-control"  name="telefono" id="telefono">
        </div>

        <div class="form-group">
          <label for="nombre">TIPO DE SERVICIO</label>
          <input type="text" class="form-control" name="tiposervicio" id="tiposervicio">
        </div>

        <div class="form-group">
          <label for="nombre">DIRECCION IP ASIGNADA</label>
          <input type="text" class="form-control" name="ip" id="ip">
        </div>

        <div class="form-group">
          <label for="nombre">MAC ASIGNADA</label>
          <input type="text" class="form-control" name="mac" id="mac">
        </div>

        <div class="form-row">
          <div class="form-group col">
            <label for="equipo">EQUIPO</label>
          <input type="text" name="equipo" class="form-control" name="equipo" id="equipo">
          </div>

          <div class="form-group col">
            <label for="clave">ClAVE DE WiFi</label>
          <input type="text" class="form-control" name="clave">
          </div>
      </div>

      <div class="form-group">
        <input type="submit" class="btn btn-success btn-block" value ="GUARDAR" >
      </div>

      </form>
    </div>
  
  
</body>
</html>