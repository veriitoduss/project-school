<head><link rel="icon" href="img/icono.ico" /></head>
<body style="background-image:url(img/fondo_n.jpg)">
  @extends('navs.teacher-grade')
  <div class="home">
    <div class="notes_grade_saber_slider_container">
      <div class="notes_grade_saber_slider owl-carousel">

        <!-- notes Slide -->
        <div class="notes_grade_saber_slide">
          <div class="notes_grade_saber_slide_background">
            <div class="notes_grade_saber_slide_container align-items-center justify-content-center">
              <form action="">
                <h1 id="text-notes-grade">Informe Pruebas Saber Grado 403</h1>
                <div class="tables-notes-grade-saber">
                  <div class="diseño-table-notes-grade-saber">
                    <table style="width:100%">
                      <tr id="principal-grade-saber">
                        <th rowspan="3">Asignatura</th>
                        <th rowspan="3">No. estudiantes evaluados</th>
                        <th colspan="8">Estudantes por desempeño</th>
                      </tr>
                      <tr id="principal-grade-saber">
                        <th colspan="2">bajo</th>
                        <th colspan="2">basico</th>
                        <th colspan="2">alto</th>
                        <th colspan="2">superior</th>
                      </tr>
                      <tr id="principal-grade-saber-one">
                        <th>#</th>
                        <th>%</th>
                        <th>#</th>
                        <th>%</th>
                        <th>#</th>
                        <th>%</th>
                        <th>#</th>
                        <th>%</th>
                      </tr>
                      <tr>
                        <td id="notainformes">texto</td>
                        <td id="notainformes"></td>
                        <td id="notainforme"></td>
                        <td id="notainforme"></td>
                        <td id="notainforme"></td>
                        <td id="notainforme"></td>
                        <td id="notainforme"></td>
                        <td id="notainforme"></td>
                        <td id="notainforme"></td>
                        <td id="notainforme"></td>
                      </tr>
                      <tr>
                        <td id="notainformes">texto</td>
                        <td id="notainformes"></td>
                        <td id="notainforme"></td>
                        <td id="notainforme"></td>
                        <td id="notainforme"></td>
                        <td id="notainforme"></td>
                        <td id="notainforme"></td>
                        <td id="notainforme"></td>
                        <td id="notainforme"></td>
                        <td id="notainforme"></td>
                      </tr>
                    </table>

                  </div>
                </div>
                <!-- acomodar ese left -->
                <div class="row" style="margin-left:850px;padding-bottom:20px;margin-top: 10px;">
                  <a type="submit" class="Ginforme" style="color:black" href="{{url('/graficasabergrade')}}">Generar Graficas</a>
                  <a type="submit" class="Download" style="color:black">Descargar</a>

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
5.1 notes Slider
*********************************/

  .notes_grade_saber_slider_container {
    width: 100%;
    height: 100%;
  }

  .notes_grade_saber_slide {
    width: 100%;
    height: 100%;
  }

  .notes_grade_saber_slide_background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
  }

  .notes_grade_saber_slide_container {
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


  .Ginforme {
    background: #26A0DA;
    border-radius: 30px;
    cursor: pointer;
    width: 150px;
    height: 30px;
    border: none;
    margin-top: 70%;
    padding-top: 3px;

  }

  .Download {
    background: #11A224;
    border-radius: 30px;
    cursor: pointer;
    width: 100px;
    height: 30px;
    border: none;
    margin-top: 70%;
    margin-left: 20px;
    color: black;
    padding-top: 3px;

  }

  .notes_grade_saber_box_title {
    color: rgb(0, 0, 0);
    font-size: 18px;
  }

  .Ginforme,
  .Download {
    margin-top: 20px;
  }

  .tables-notes-grade-saber {
    background-color: rgb(255, 255, 255);
    border-radius: 20px;
    width: 90%;
    margin: 0 auto;
    margin-top: 20px;
    box-shadow: 2px 0 3px rgba(0, 0, 0, 0.678);
    overflow-x: auto;
  }

  .diseño-table-notes-grade-saber {
    width: 95%;
    margin: 0 auto;
    padding-top: 20px;
    padding-bottom: 20px;
    text-align: center;
  }

  #principal-grade-saber-one,
  #principal-grade-saber 
  {
    text-align: center;
    color: black;
  }
  #principal-grade-saber-one
  {
  border-bottom: 2px solid #26A0DA;
}
#notainforme
{
  text-align: center;
  width: 20px;
  border-left: 1px solid #dfdfdf;
  border-right: 1px solid #dfdfdf;
}
#notainformes
{
  text-align: center;
  width: 20px;
}
</style>