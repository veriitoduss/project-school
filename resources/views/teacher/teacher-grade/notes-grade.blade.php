<head><link rel="icon" href="img/icono.ico" /></head>
<body style="background-image:url(img/fondo_n.jpg)">
  @extends('navs.teacher-grade')
  <div class="home">
    <div class="notes_grade_slider_container">
      <div class="notes_grade_slider owl-carousel">

        <!-- notes Slide -->
        <div class="notes_grade_slide">
          <div class="notes_grade_slide_background">
            <div class="notes_grade_slide_container align-items-center justify-content-center">
              <form action="">
                <h1 id="text-notes-grade">Notas Grado 403</h1>
                <div class="row" style="margin:0 auto;text-align:center;">

                  <div class="notes_grade_box_col col-lg-4">
                    <div class="notes_grade_filtro">
                      <h2 class="notes_grade_box_title">Periodo</h2>
                      <select>
                        <option selected class="selected">Selecciona un periodo</option>
                        <option>Texto1</option>
                        <option>Texto2</option>
                        <option>Texto3</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="tables-notes-grade">
                  <div class="diseño-table-notes-grade">
                    <table style="width:100%">
                      <tr id="principal-grade">
                        <th>#</th>
                        <th>Nombre</th>
                        <th>español</th>
                        <th>matematicas</th>
                        <th>ingles</th>
                        <th>educacion fisica</th>
                        <th>ciencias sociales</th>
                        <th>ciencia naturales</th>
                      </tr>
                      <tr>
                        <td id="numeroalumno">1</td>
                        <td id="nombre">texto</td>
                        <td id="notasgradeperiodo"></td>
                        <td id="notasgradeperiodo"></td>
                        <td id="notasgradeperiodo"></td>
                        <td id="notasgradeperiodo"></td>
                        <td id="notasgradeperiodo"></td>
                        <td id="notasgradeperiodo"></td>
                      </tr>
                      <tr>
                        <td id="numeroalumno">2</td>
                        <td id="nombre">texto</td>
                        <td id="notasgradeperiodo"></td>
                        <td id="notasgradeperiodo"></td>
                        <td id="notasgradeperiodo"></td>
                        <td id="notasgradeperiodo"></td>
                        <td id="notasgradeperiodo"></td>
                        <td id="notasgradeperiodo"></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- acomodar ese left -->
                <div class="row" style="margin-left:900px;padding-bottom:20px;margin-top: 20px;">
                  <div class="Download-grade col-lg-2">
                    <input type="submit" value="Descargar" />
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
<style>
  /*********************************
5.1 notes_grade Slider
*********************************/

.notes_grade_slider_container
{
	width: 100%;
	height: 100%;
}
.notes_grade_slide
{
	width: 100%;
	height: 100%;
}
.notes_grade_slide_background
{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
}
.notes_grade_slide_container
{
	width: 90%;
	height: auto;
  top: 29%;
  background-color: rgba(255, 255, 255, 0.801);
  margin: 0 auto;
  border-radius: 30px;
  text-align: center;
}
#text-notes-grade
{
  color: rgb(0, 0, 0);
  padding-top: 25px;
}
.notes_grade_box_col{
  margin: 0 auto;
  margin-top: 10px;
}
.Download-grade input[type="submit"]{
	background: #26A0DA;
	border-radius: 30px;
	cursor: pointer;
	width: 100px;
	height: 30px;
  border:none;
  margin-top: 70%;
  margin-left: 90px;
}
.notes_grade_box_title{
  color: rgb(0, 0, 0);
  font-size: 18px;
}
.save-note-grade{
  margin-top: 20px;
}
.tables-notes-grade{
  background-color:rgb(255, 255, 255);
  border-radius: 20px;
  width: 80%;
  margin: 0 auto;
  margin-top: 20px;
  box-shadow: 2px 0 3px rgba(0, 0, 0, 0.678) ;
  overflow-x:auto;
}
.diseño-table-notes-grade{
  width:95%;
  margin:0 auto;
  padding-top:20px;
  padding-bottom:20px;
  text-align: center;
}
#principal-grade
{
  border-bottom: 2px solid #26A0DA;
  text-align: center;
  color: black;
}
#notasgradeperiodo
{
  width:90px;
  border-left: 1px solid #dfdfdf;
  border-right: 1px solid #dfdfdf;
}
#numeroalumno
{
  width:30px;

}
</style>