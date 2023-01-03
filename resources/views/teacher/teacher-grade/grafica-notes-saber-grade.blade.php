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
                <h1 id="text-notes-grade">Graficas Pruebas Saber Grado 403</h1>
                <div class="tables-notes-grade-saber">
                  <div class="row">
                    <div class="col-lg-4">
                      <img src="img/graficas.png">
                    </div>
                    <div class="col-lg-4">
                      <img src="img/graficas.png">
                    </div>
                    <div class="col-lg-4">
                      <img src="img/graficas.png">
                    </div>
                  </div>
                  <div class="row" id="rowone">
                    <div class="col-lg-6">
                      <img src="img/graficas.png">
                    </div>
                    <div class="col-lg-6">
                      <img src="img/graficas.png">
                    </div>
                  </div>
                </div>
                <!-- acomodar ese left -->
                <div class="row" style="margin-left:700px;padding-bottom:20px;margin-top: 10px;">
                  <a type="submit" class="Ginforme" style="color:black">Descargar Graficas</a>
                  <a type="submit" class="Download" style="color:black">Descargar Analisis Completo</a>

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
    background: #11A224;
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
    width: 220px;
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
    width: 80%;
    margin: 0 auto;
    margin-top: 20px;
    box-shadow: 2px 0 3px rgba(0, 0, 0, 0.678);
  }

  img {
    width: 73%;
  }

  #rowone img
  {
    width: 45%;
    padding-top: 0;
    padding-bottom: 30px;
  }
  .row{
  padding-top: 30px;
  }
</style>