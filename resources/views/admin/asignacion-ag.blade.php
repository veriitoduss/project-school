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
  <title>AsignacionAG</title>
</head>

<body style="background-image:url(img/fondo_n.jpg)">
  @extends('navs.admin')
  <div class="containerTablaFiltro align-items-center justify-content-center">
    <h1 class="tituloGrado">ASIGNACION ALUMNO - GRADO</h1>
    <form action="{{url('/asginacionAG')}}" method="post" style="text-align:center">
      @csrf
      <div class="row" style="margin:0 auto;text-align:center;margin-left:100px">
        <div class="col-lg-4 adminag_box_col">
          <div class="adminag_filtro">
            <h2 class="adminag_box_title">Alumno</h2>
            <select name="Estudiante_id" id="Estudiante_id">
              <option selected class="form-control">--seleccione un Alumno--</option>
              @foreach($estudiantes as $estudiante)
              <option value="{{ $estudiante->id }}">{{ $estudiante->Nombre }} {{ $estudiante->Apellido }}</option>
              @endforeach
            </select>
            <!-- <input type="password" placeholder="Texto" required="" id="Contraseña" /> -->
          </div>
        </div>

        <div class="col-lg-4 adminag_box_col">
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

        <div class="col-lg-2 adminag_box_col">
          <div class="adminag_filtro" style="margin-top: 35px;">
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
              <th>Alumno</th>
              <th>Grado</th>
              <th>modificar</th>
              <th>eliminar</th>
            </tr>
          </thead>
          <tbody>
            @foreach($asignacionAG as $asignacionAG)
            <tr>
              <td>{{ $asignacionAG->estudiante->Nombre }} {{ $asignacionAG->estudiante->Apellido }}</td>
              <td>{{ $asignacionAG->grade->Grade }}</td>
              <td>
                <!-- Button trigger modal -->
                <button type="button" class="botonModificar" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $asignacionAG->id}}">
                  Modificar
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{ $asignacionAG->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modificar {{ $asignacionAG->estudiante->Nombre }} {{ $asignacionAG->estudiante->Apellido }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <form action="{{url('/asginacionAG/'.$asignacionAG->id)}}" method="post">
                        <div class="modal-body">
                          <h2 class="adminag_box_title" style="font-weight: bold;">Grado Actual</h2>
                          <h2 class="adminag_box_title" style="margin: 20px 0 20px 0">{{ $asignacionAG->grade->Grade }}</h2>
                          <h2 class="adminag_box_title" style="font-weight: bold;margin-bottom:20px">Pasa a </h2>
                          @csrf
                          {{method_field('PATCH')}}
                          <select name="Grado_id" id="Grado_id">
                            <option selected class="form-control">--seleccione un grado--</option>
                            @foreach($grados as $grade)
                            <option value="{{ $grade->id }}">{{ $grade->Grade }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="modal-footer justify-content-center">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                          <input type="submit" class="btn btn-primary" style="margin-left: 100px;" value="Guardar">
                          <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </td>
              <td>
                <form action="{{url('/asginacionAG/'.$asignacionAG->id)}}" method="post">
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