<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <title>Buscador</title>
</head>
  <body>
    <center><div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
       <div class="carousel-item active">
          <img class="d-block w-50" src="Imagenes/foto.jpeg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-50" src="Imagenes/foto2.jpeg" alt="Second slide">
       </div>
        <div class="carousel-item">
          <img class="d-block w-50" src="Imagenes/foto3.jpeg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div></center>
    <center><font color="#212529"><h1>Motor de Busqueda de 4 Parámetros</h1></font></center>
    <center><form action="{{url('busqueda')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
        <label for="Opcion">Seleccione una opción</label>
        <select class="form-control-sm" id="Opcion" name="opcion">
          <option>Nombre</option>
          <option>Apellido</option>
          <option>Ciudad</option>
          <option>Celular</option>
        </select>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Digite el valor de la opción</label>
        <input type="text" class="form-control-sm" id="valor" name="valor" placeholder="Buscar...">
        &nbsp;&nbsp;&nbsp;
        <button type="submit" class="btn btn-dark mb-2">Buscar</button>
      </div>
    </form></center>
    @yield ('contenido')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>