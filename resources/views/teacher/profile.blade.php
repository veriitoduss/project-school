<head><link rel="icon" href="img/icono.ico" /></head>
<body>
  @extends('navs.teacher')
  <div class="home">
    <div class="teacher_slider_container">
      <div class="teacher_slider owl-carousel">

        <!-- teacher Slide -->
        <div class="teacher_slide">
          <div class="teacher_slide_background" style="background-image:url(img/event_2.jpg)">
            <div class="teacher_slide_container align-items-center justify-content-center">
              <form action="">
                <div class="row" style="margin:0 auto;left:50px;text-align:center;top:65px">

                  <div class="col-lg-3 teacher_box_col">
                    <img src="img/icono.ico">
                  </div>

                  <div class="col-lg-2 teacher_box_col">
                    <input type="submit" value="Editar" />
                  </div>

                  <div class="col-lg-3 teacher_box_col">
                    <div class="information">
                      <h2 class="teacher_box_title">Nombre</h2>
                      <input type="text" placeholder="Nombre" required="" id="Cuenta" />
                    </div>
                    <div class="information">
                      <h2 class="teacher_box_title">Apellido</h2>
                      <input type="password" placeholder="Apellido" required="" id="Contraseña" />
                    </div>
                    <div class="information">
                      <h2 class="teacher_box_title">Telefono</h2>
                      <input type="password" placeholder="Telefono" required="" id="Contraseña" />
                    </div>
                  </div>

                  <div class="col-lg-3 teacher_box_col">
                    <div class="information">
                      <h2 class="teacher_box_title">Dirección</h2>
                      <input type="text" placeholder="Dirección" required="" id="Cuenta" />
                    </div>
                    <div class="information">
                      <h2 class="teacher_box_title">Correo</h2>
                      <input type="password" placeholder="Correo" required="" id="Contraseña" />
                    </div>
                    <div class="information">
                      <h2 class="teacher_box_title">Cedula</h2>
                      <input type="password" placeholder="Cedula" required="" id="Contraseña" />
                    </div>

                    <div class="save col-lg-2">
                      <input type="submit" value="Guardar" />
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</body>