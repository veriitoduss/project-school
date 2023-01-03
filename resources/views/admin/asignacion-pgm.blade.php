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
  <title>AsignacionDGM</title>
</head>

<body style="background-image:url(img/fondo_n.jpg)">
  @extends('navs.admin')
  <div class="containerTablaFiltro align-items-center justify-content-center">
    <h1 class="tituloGrado">ASIGNACION PROFESOR - GRADO - MATERIA</h1>
    <form action="{{url('/asginacionDMG')}}" method="post" style="text-align:center">
      @csrf
      <div class="row" style="margin:0 auto;text-align:center;margin-left:100px">
        <div class="col-lg-5 adminag_box_col">
          <div class="adminag_filtro">
            <h2 class="adminag_box_title">Profesor</h2>
            <select name="Profesor_id" id="Profesor_id">
              <option selected class="form-control">--seleccione un Profesor--</option>
              @foreach($profesores as $profesore)
              <option value="{{ $profesore->id }}">{{ $profesore->Nombre }} {{ $profesore->Apellido }}</option>
              @endforeach
            </select>
            <!-- <input type="password" placeholder="Texto" required="" id="Contraseña" /> -->
          </div>
        </div>

        <div class="col-lg-5 adminag_box_col">
          <div class="adminag_filtro">
            <h2 class="adminag_box_title">Grado</h2>
            <select name="Grado_id" id="Grado_id">
              <option selected class="form-control">--seleccione un grado--</option>
              @foreach($grados as $grade)
              <option value="{{ $grade->id }}">{{ $grade->Grade }}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>
      <div class="row" style="margin:0 auto;text-align:center;margin-left:100px">
        <div class="col-lg-5 adminag_box_col">
          <div class="adminag_filtro">
            <h2 class="adminag_box_title">Materia</h2>
            <select name="Materia_id" id="Materia_id">
              <option selected class="form-control">--seleccione un Materia--</option>
              @foreach($materias as $materia)
              <option value="{{ $materia->id }}">{{ $materia->Name }}</option>
              @endforeach
            </select>
            <!-- <input type="password" placeholder="Texto" required="" id="Contraseña" /> -->
          </div>
        </div>

        <div class="col-lg-2 offset-md-2 adminag_box_col">
          <div class="adminag_filtro" style="margin-top: 35px;margin-left:-70px">
            <div class="filtroBoton">
              <input type="submit" value="Agregar">
            </div>
          </div>
        </div>
      </div>
    </form>
    <div class="tablaGrado">
      <div class="diseñoTablaGrado">
        <table class="table" id="prueba" style="padding-right: 20px;">
          <thead>
            <tr class="principal">
              <th>Profesor</th>
              <th>Grado</th>
              <th>Materia</th>
              <th>eliminar</th>
            </tr>
          </thead>
          <tbody>
            @foreach($asignacionDMG as $asignacionDMG)
            <tr>
              <td>{{ $asignacionDMG->profesor->Nombre }} {{ $asignacionDMG->profesor->Apellido }}</td>
              <td>{{ $asignacionDMG->grade->Grade }}</td>
              <td>{{ $asignacionDMG->materia->Name }}</td>
              <td>
                <form action="{{url('/asginacionDMG/'.$asignacionDMG->id)}}" method="post">
                  @csrf
                  {{method_field('DELETE')}}
                  <input type="submit" class="botonEliminar" onclick="return confirm('¿Desea borrar esta asignacion ?')" value="Eliminar">
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
    width: 80%;
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

  .botonModificar a {
    text-decoration: none;
    color: #000;
  }

  .botonModificar a:hover {
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

  .filtroBoton input:hover {
    background: rgba(255, 255, 255, 0.750);
    border: 1.5px solid #26A0DA;
    color: black;
  }

  .filtroBoton input {
    background: #26A0DA;
    border-radius: 30px;
    cursor: pointer;
    border: none;
    width: 80px;
    color: white;
    margin-top: 10px;
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

  .modal-body select {
    border: 1.5px solid #DFDFE5;
    width: 40%;
    border-radius: 5px;
    margin-bottom: 20px;
  }

  .modal-body .title_filtro {
    font-size: 1rem;
  }
</style>