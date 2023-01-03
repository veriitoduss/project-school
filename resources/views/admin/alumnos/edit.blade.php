<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../../plugins/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet" type="text/css">
  <link rel="icon" href="../../img/icono.ico" />
  <link rel="stylesheet" type="text/css" href="../../css/navs/nav_admin.css">
  <link rel="stylesheet" type="text/css" href="../../css/responsive.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
  <title>Modificar Alumno</title>
</head>

<body style="background-image:url(../../img/fondo_n.jpg)">
  <div class="super_container">
    <header class="header d-flex flex-row">
      <div class="header_content d-flex flex-row align-items-center">
        <div class="logo_container">
          <div class="logo">
            <h2>logo</h2>
          </div>
        </div>
        <nav class="main_nav_container">
          <div class="main_nav">
            <ul class="main_nav_list">
              <li class="main_nav_item"><a href="{{url('/administrador')}}"><i class="fas fa-home"></i>Inicio</a></li>
              <!-- <li class="main_nav_item"><a href="{{url('/profile-teacher')}}"><i class="fas fa-user"></i>asignacion</a></li> -->
              <li class="main_nav_item"><a href="{{url('/materia')}}"><i class="fas fa-book"></i>Materias</a></li>
              <li class="main_nav_item"><a href="{{url('/estudiante')}}"><i class="fas fa-user-friends"></i>Alumnos</a></li>
              <li class="main_nav_item"><a href="{{url('/profesor')}}"><i class="fas fa-user-tie"></i>Docentes</a></li>
              <li class="main_nav_item"><a href="{{url('/grado')}}"><i class="fas fa-chalkboard-teacher"></i>Grados</a></li>

              <li class="main_nav_item"><a href="{{url('/index-teacher-grade')}}"> <img src="../../img/icono.ico"></a></li>
            </ul>
          </div>
        </nav>
      </div>

    </header>
  </div>
  <div class="containerTablaFiltro align-items-center justify-content-center">
    <h1 class="tituloAlumnoNuevo">Modificar Alumno</h1>
    <form action="{{url('/estudiante/'.$estudiante->id)}}" method="post" style="text-align:center" enctype="multipart/form-data">
      @csrf
      {{method_field('PATCH')}}
      <div class="row" style="margin:0 auto;left:50px;text-align:center;top:10px">

        <div class="col-lg-5">
          <img src="{{asset('storage').'/'.$estudiante->Foto}}" alt="" width="190">
          <div id="div_file">
            <p>Examinar</p>
            <input type="file" name="Foto" value="" id="Foto">
          </div>
        </div>

        <div class="col-lg-3 teacher_box_col">
          <div class="filtro">
            <h2 class="titleInformatio" for="Nombre">Nombre</h2>
            <input type="text" value="{{ $estudiante->Nombre }}" name="Nombre" id="Nombre" />
          </div>
          <div class="filtro">
            <h2 class="titleInformatio" for="Apellido">Apellido</h2>
            <input type="text" value="{{ $estudiante->Apellido }}" name="Apellido" id="Apellido" />
          </div>
          <div class="filtro">
            <h2 class="titleInformatio" for="Telefono">Telefono</h2>
            <input type="text" value="{{ $estudiante->Telefono }}" name="Telefono" id="Telefono" />
          </div>
          <div class="filtro">
            <h2 class="titleInformatio" for="Acudiente">Acudiente</h2>
            <input type="text" value="{{ $estudiante->Acudiente }}" name="Acudiente" id="Acudiente" />
          </div>
        </div>


        <div class="col-lg-3 teacher_box_col">
          <div class="filtro">
            <h2 class="titleInformatio" for="Direccion">Direccion</h2>
            <input type="text" value="{{ $estudiante->Direccion }}" name="Direccion" id="Direccion" />
          </div>
          <div class="filtro">
            <h2 class="titleInformatio" for="Correo">Correo</h2>
            <input type="text" value="{{ $estudiante->Correo }}" name="Correo" id="Correo" />
          </div>
          <div class="filtro">
            <h2 class="titleInformatio" for="TarjetaIdentidad">Tarjeta identidad</h2>
            <input type="text" value="{{ $estudiante->TarjetaIdentidad }}" name="TarjetaIdentidad" id="TarjetaIdentidad" />
          </div>
          <div class="filtroBoton col-lg-5" style="margin-left:50%">
          <input type="submit" value="Guardar" />
        </div>
        </div>

      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
<style>
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

  .filtroBoton input {
    background: #26A0DA;
    border-radius: 30px;
    cursor: pointer;
    border: none;
    width: 80px;
    color: black;
    margin-left: -100px;
    margin-top: 40px;
  }

  select {
    background: white;
    width: 80%;
    height: 25px;
    text-align: center;
    outline: none;
    color: #9A9A9A;
    border: none;
  }

  .titleInformatio {
    color: black;
    font-size: 1.2rem;
    font-weight: 500;
    margin-top: 10px;
  }

  .tituloAlumnoNuevo {
    color: rgb(0, 0, 0);
    padding-top: 25px;
    /* padding-bottom: 25px; */
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



  div#div_file {
    position: relative;
    width: 100px;
    background-color: #26A0DA;
    border-radius: 10px;
    margin: auto;
    margin-top: 20px;
  }

  div#div_file input {
    cursor: pointer;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
  }

  div#div_file p {
    padding: 0;
    margin: 0;
  }
</style>