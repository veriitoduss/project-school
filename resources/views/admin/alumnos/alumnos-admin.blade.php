<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="img/icono.ico" />
  <link rel="stylesheet" type="text/css" href="css/navs/nav_admin.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
  <title>Alumnos</title>
</head>

<body style="background-image:url(img/fondo_n.jpg)">
  @extends('navs.admin')
  <div class="containerTablaFiltro align-items-center justify-content-center">
    <h1 class="tituloGrado">ALUMNOS</h1>
    <div class="col-lg-12">
      <div>
        <a type="submit" class="filtroBoton" href="{{url('estudiante/create')}}">Agregar</a>
      </div>
    </div>
    <div class="tablaGrado">
      <div class="diseñoTablaGrado">
        <table class="table" id="prueba" style="padding-right: 20px; margin-left:-38px;">
          <thead>
            <tr class="principal">
              <th>Foto</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Telefono</th>
              <th>Direccion</th>
              <th>Correo</th>
              <th>T.I</th>
              <th>Acudiente</th>
              <th>modificar</th>
              <th>eliminar</th>
            </tr>
          </thead>
          <tbody>
            @foreach($estudiantes as $estudiante)
            <tr>
              <td>
                <img src="{{asset('storage').'/'.$estudiante->Foto}}" alt="" width="50">
              </td>
              <td>{{ $estudiante->Nombre }}</td>
              <td>{{ $estudiante->Apellido }}</td>
              <td>{{ $estudiante->Telefono }}</td>
              <td>{{ $estudiante->Direccion }}</td>
              <td>{{ $estudiante->Correo }}</td>
              <td>{{ $estudiante->TarjetaIdentidad }}</td>
              <td>{{ $estudiante->Acudiente }}</td>
              <td>
                <button type="button" class="botonModificar" >
                <a href="{{url('/estudiante/'.$estudiante->id.'/edit')}}">Modificar</a>
                </button>
              </td>
              <td>
                <form action="{{url('/estudiante/'.$estudiante->id)}}" method="post">
                  @csrf
                  {{method_field('DELETE')}}
                  <input type="submit" class="botonEliminar" onclick="return confirm('¿Desea borrar a {{$estudiante->Nombre}}?')" value="Eliminar">
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $('#prueba').DataTable();
  </script>
</body>

</html>
<style>
  .tablaGrado {
    background-color: rgb(255, 255, 255);
    border-radius: 20px;
    width: 96%;
    margin: 0 auto;
    margin-top: 20px;
    box-shadow: 2px 0 3px rgba(0, 0, 0, 0.678);
    overflow-x: auto;
    padding-bottom: 20px;
  }

  .diseñoTablaGrado {
    width: 90%;
    margin: 0 auto;
    padding-top: 20px;
    text-align: center;
  }

  .botonEliminar {
    background: red;
    border-radius: 30px;
    cursor: pointer;
    border: none;
    color: white;
    width: 80px;
  }

  .botonModificar {
    background: #26DA5B;
    border-radius: 30px;
    cursor: pointer;
    border: none;
    color: black;
    width: 80px;
    text-decoration: none;
  }
  .botonModificar a{
    text-decoration: none;
    color: #000;
  }
  .botonModificar a:hover{
    text-decoration: none;
    color: #000;
  }

  .filtro input {
    background: white;
    width: 80%;
    height: 25px;
    text-align: center;
    outline: none;
    color: rgb(109, 109, 109);
    border: none;
  }

  .filtro input:hover {
    border: 1.5px solid #26A0DA;

  }

  .filtroBoton:hover {
    background: rgba(255, 255, 255, 0.750);
    border: 1.5px solid #26A0DA;
    color: black;
    text-decoration: none;
  }

  .filtroBoton {
    background: #26A0DA;
    border-radius: 30px;
    cursor: pointer;
    border: none;
    padding: 3px 10px 3px 10px;
    color: white;
    margin-top: 20px;
    text-decoration: none;
  }

  .title_filtro {
    color: black;
    font-size: 1.2rem;
    font-weight: 500;
  }

  .tituloGrado {
    color: rgb(0, 0, 0);
    padding-top: 25px;
    padding-bottom: 25px;
  }

  .containerTablaFiltro {
    width: 90%;
    height: auto;
    background-color: rgba(255, 255, 255, 0.801);
    margin: 0 auto;
    border-radius: 30px;
    text-align: center;
    top: 170px;
    padding-bottom: 35px;
  }

  .modal-footer button {
    background: #EFEFF2;
    color: black;
    border: none;
  }

  .modal-footer button:hover {
    background: #DFDFE5;
    color: black;
  }

  .modal-body {
    background: #F8F8F8;
  }

  .modal-body input {
    border: 1.5px solid #DFDFE5;
    width: 40%;
    border-radius: 5px;
    margin-bottom: 20px;
  }

  .modal-body .title_filtro {
    font-size: 1rem;
  }
</style>