<head><link rel="icon" href="img/icono.ico" /></head>
<body style="background-image:url(img/fondo_n.jpg)">
@extends('navs.teacher-grade')
  <div class="home">
    <div class="notes_slider_container">
      <div class="notes_slider owl-carousel">

        <!-- notes Slide -->
        <div class="notes_slide">
          <div class="notes_slide_background">
            <div class="notes_slide_container align-items-center justify-content-center">
              <form action="">
                <h1 id="text-notes">Notas por Periodo</h1>
                <div class="row" style="margin:0 auto;text-align:center;">

                  <div class="col-lg-4 notes_box_col">
                    <div class="notes_filtro">
                      <h2 class="notes_box_title">Materia</h2>
                      <select>
                        <option selected class="selected">Selecciona una Materia</option>
                        <option>Texto1</option>
                        <option>Texto2</option>
                        <option>Texto3</option>
                      </select>
                      <!-- <input type="password" placeholder="Texto" required="" id="Contraseña" /> -->
                    </div>
                  </div>

                  <div class="col-lg-4 notes_box_col">
                    <div class="notes_filtro">
                      <h2 class="notes_box_title">Periodo</h2>
                      <select>
                        <option selected class="selected">Selecciona un Periodo</option>
                        <option>Texto1</option>
                        <option>Texto2</option>
                        <option>Texto3</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-4 notes_box_col">
                    <div class="notes_filtro">
                      <h2 class="notes_box_title">Grado</h2>
                      <select>
                        <option selected class="selected">Selecciona un Grado</option>
                        <option>Texto1</option>
                        <option>Texto2</option>
                        <option>Texto3</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="tables-notes">
                  <div class="diseño-table-notes">
                    <table style="width:100%">
                      <tr id="principal">
                        <th>#</th>
                        <th>Nombre</th>
                        <th>nota1</th>
                        <th>nota2</th>
                        <th>nota3</th>
                        <th>definitiva Saber</th>
                        <th>nota1</th>
                        <th>nota2</th>
                        <th>nota3</th>
                        <th>definitiva Hacer</th>
                        <th>auto- evaluacion</th>
                        <th>coeva</th>
                        <th>heteroeval</th>
                        <th>definitiva Ser</th>
                        <th>evaluacion acumulativa</th>
                        <th>nota periodo</th>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td id="nombre">texto</td>
                        <td id="notas"><input type="text"  required="" id="Contraseña" /></td>
                        <td id="notas"><input type="text"  required="" id="Contraseña" /></td>
                        <td id="notas"><input type="text"  required="" id="Contraseña" /></td>
                        <td id="notas">texto</td>
                        <td id="notas"><input type="text"  required="" id="Contraseña" /></td>
                        <td id="notas"><input type="text"  required="" id="Contraseña" /></td>
                        <td id="notas"><input type="text"  required="" id="Contraseña" /></td>
                        <td id="notas">texto</td>
                        <td id="notas"><input type="text"  required="" id="Contraseña" /></td>
                        <td id="notas"><input type="text"  required="" id="Contraseña" /></td>
                        <td id="notas"><input type="text"  required="" id="Contraseña" /></td>
                        <td id="notas">texto</td>
                        <td id="notas"><input type="text"  required="" id="Contraseña" /></td>
                        <td id="notas">texto</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td id="nombre">texto</td>
                        <td id="notas"><input type="text"  required="" id="Contraseña" /></td>
                        <td id="notas"><input type="text"  required="" id="Contraseña" /></td>
                        <td id="notas"><input type="text"  required="" id="Contraseña" /></td>
                        <td id="notas">texto</td>
                        <td id="notas"><input type="text"  required="" id="Contraseña" /></td>
                        <td id="notas"><input type="text"  required="" id="Contraseña" /></td>
                        <td id="notas"><input type="text"  required="" id="Contraseña" /></td>
                        <td id="notas">texto</td>
                        <td id="notas"><input type="text"  required="" id="Contraseña" /></td>
                        <td id="notas"><input type="text"  required="" id="Contraseña" /></td>
                        <td id="notas"><input type="text"  required="" id="Contraseña" /></td>
                        <td id="notas">texto</td>
                        <td id="notas"><input type="text"  required="" id="Contraseña" /></td>
                        <td id="notas">texto</td>
                      </tr>


                    </table>
                  </div>
                </div>
                <!-- acomodar ese left -->
                <div class="row" style="margin-left:960px;padding-bottom:20px;margin-top: 20px;">
                  <div class="save-note col-lg-2">
                    <input type="submit" value="Cancelar" />
                  </div>
                  <div class="cancel col-lg-2">
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
</body>