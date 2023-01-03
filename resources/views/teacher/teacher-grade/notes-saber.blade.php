<head><link rel="icon" href="img/icono.ico" /></head>
<body style="background-image:url(img/fondo_n.jpg)">
@extends('navs.teacher-grade')
  <div class="home">
    <div class="notes_saber_slider_container">
      <div class="notes_saber_slider">

        <!-- notes Slide -->
        <div class="notes_saber_slide">
          <div class="notes_saber_slide_background">
            <div class="notes_saber_slide_container align-items-center justify-content-center">
              <form action="">
                <h1 id="text-notes-saber">Notas Pruebas Saber</h1>
                <div class="row" style="margin:0 auto;text-align:center;">

                  <div class="col-lg-4 notes_box_col">
                    <div class="notes_saber_filtro">
                      <h2 class="notes_saber_box_title">Materia</h2>
                      <select>
                        <option selected class="selected">Selecciona una Materia</option>
                        <option>Texto1</option>
                        <option>Texto2</option>
                        <option>Texto3</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-4 notes_box_col">
                    <div class="notes_saber_filtro">
                      <h2 class="notes_saber_box_title">Periodo</h2>
                      <select>
                        <option selected class="selected">Selecciona un Periodo</option>
                        <option>Texto1</option>
                        <option>Texto2</option>
                        <option>Texto3</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-4 notes_box_col">
                    <div class="notes_saber_filtro">
                      <h2 class="notes_saber_box_title">Grado</h2>
                      <select>
                        <option selected class="selected">Selecciona un Grado</option>
                        <option>Texto1</option>
                        <option>Texto2</option>
                        <option>Texto3</option>
                      </select>
                    </div>
                  </div>

                </div>
                <div class="tables-notes-saber">
                  <div class="diseño-table-notes-saber">
                    <table style="width:90%;margin:0 auto">
                      <tr id="principal-notes-saber">
                        <th>#</th>
                        <th>Nombre</th>
                        <th>nota</th>
                        <th>rendimiento</th>
                      </tr>
                      <tr>
                        <td id="numero">1</td>
                        <td id="nombre">texto</td>
                        <td id="notas"><input type="text" required="" id="Contraseña" /></td>
                        <td id="rendimiento">
                          <select>
                            <option selected class="selected">Selecciona el rendimiento</option>
                            <option>Texto1</option>
                            <option>Texto2</option>
                            <option>Texto3</option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td id="numero">2</td>
                        <td id="nombre">texto</td>
                        <td id="notas"><input type="text" required="" id="Contraseña" /></td>
                        <td id="rendimiento">
                          <select>
                            <option selected class="selected">Selecciona el rendimiento</option>
                            <option>Texto1</option>
                            <option>Texto2</option>
                            <option>Texto3</option>
                          </select>
                        </td>
                      </tr>
                    </table>

                  </div>
                </div>
                <!-- acomodar ese left -->
                <div class="row" style="margin-left:960px;padding-bottom:20px;margin-top: 20px;">
                  <div class="save-note-saber col-lg-2">
                    <input type="submit" value="Cancelar" />
                  </div>
                  <div class="cancel-saber col-lg-2">
                    <input type="submit" value="Subir notas" />
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>