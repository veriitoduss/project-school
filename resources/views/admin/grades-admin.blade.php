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
  <title>Grados</title>
</head>

<body style="background-image:url(img/fondo_n.jpg)">
  @extends('navs.admin')
  <div class="containerTablaFiltro align-items-center justify-content-center">
    <h1 class="tituloGrado">GRADOS</h1>
    <form action="{{url('/grado')}}" method="post" style="text-align:center">
      @csrf
      <div class="row" style="width:70%;margin:auto">
        <div class="col-lg-5 offset-md-2">
          <div class="filtro">
            <h2 class="title_filtro">Grado</h2>
            <input type="text" placeholder="Digite el Grado" name="Grade" id="Grade" />
          </div>
        </div>
        <div class="col-lg-3">
          <div class="filtroBoton">
            <input type="submit" value="Agregar">
          </div>
        </div>
      </div>
    </form>
    <div class="tablaGrado">
      <div class="diseñoTablaGrado">
        <table class="table" id="prueba" >
          <thead>
            <tr class="principal">
              <th>Grado</th>
              <th>Eliminar</th>
            </tr>
          </thead>
          <tbody>
            @foreach($grados as $grade)
            <tr>
              <td>{{ $grade->Grade }}</td>
              <td>
                <form action="{{url('/grado/'.$grade->id)}}" method="post">
                  @csrf
                  {{method_field('DELETE')}}
                  <!-- <input type="submit" onclick="return confirm('¿seguro de borrarlo?')" value="Eliminar"> -->
                  <input type="submit" class="botonEliminar" onclick="return confirm('¿Desea borrar el grado {{ $grade->Grade }} ?')" value="Eliminar">
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
    width: 70%;
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
    margin-top: 20px;
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
    width: 80%;
    height: auto;
    background-color: rgba(255, 255, 255, 0.801);
    margin: 0 auto;
    border-radius: 30px;
    text-align: center;
    top: 170px;
    padding-bottom: 35px;
  }


</style>