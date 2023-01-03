<html>

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Login</title>
  <link rel="stylesheet" href="css/login.css" />
  <link rel="icon" href="img/icono.ico" />
  <script src="https://kit.fontawesome.com/6f70aed298.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <section id="content">
      <div class="left">
        <form action="{{url('/login')}}" method="POST">
          @csrf
          <h1>Inicia Sesión</h1>

          <div class="information">
            <i class="fas fa-user"> Usuario</i>
            <input type="email" name="email" id="email" autofocus required placeholder="Digite su Usuario" style="margin-left:20px" />
          </div>
          <div class="information">
            <i class="fas fa-unlock-alt"> Contraseña</i>
            <input type="password" name="password" id="password" required placeholder="Digite su Contraseña" />
          </div>
          <div class="containeragregar">
            <input type="submit" class="agregar" value="Ingresar">
          </div>
        </form>
      </div>
      <div class="right">
        @error('message')
        <div class="error">
          <i class="fas fa-exclamation-circle"> </i>
          <p> {{$message}}</p>
        </div>
        @enderror
      </div>
    </section>
  </div>
</body>

</html>
<style>
  .left .agregar {
    background: rgb(254, 231, 154);
    border-radius: 30px;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.8) inset;
    border: 1px solid #D69E31;
    color: #85592e;
    cursor: pointer;
    font: bold 18px Helvetica, Arial, sans-serif;
    width: 100px;
    text-decoration: none;
  }

  .left form input {
    border-radius: 17px;
    border: 1px solid #c8c8c8;
    margin: 0 0 10px;
    width: 80%;
    height: 8%;
    text-align: center;
    background: #F8F8F8;
  }

  .containeragregar {
    margin-top: 40px;
  }

  .error {
    border: 2px solid rgba(220, 38, 38);
    padding: 10px;
    background-color: #fce3e0af;
    border-radius: 10px;
    width: 70%;
    margin: auto;
    color: black;
    margin-top: 35%;
  }

  .error i {
    color: rgba(220, 38, 38);
    font-size: 40px;
    margin: 0;
  }
  .error p {
    color: rgba(220, 38, 38);
  }
</style>