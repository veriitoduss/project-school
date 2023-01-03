<head><link rel="icon" href="img/icono.ico" /></head>
<body style="background-image:url(img/fondo_n.jpg)">
  @extends('navs.teacher-grade')
  <div class="home">
    <div class="grade_slider_container">
      <div class="grade_slider owl-carousel">

        <!-- grade Slide -->
        <div class="grade_slide">
          <div class="grade_slide_background">
            <div class="grade_slide_container align-items-center justify-content-center">
              <form action="">
                <h1 id="text-grade">Grado 403</h1>
                <div class="tables-grade">
                  <div class="diseño-table-grade">
                    <table style="width:100%">
                      <tr id="principal-grade">
                        <th>#</th>
                        <th>Nombre</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td id="nombre">texto</td>
                        <td id="notasgrade"></td>
                        <td id="notasgrade"></td>
                        <td id="notasgrade"></td>
                        <td id="notasgrade"></td>
                        <td id="notasgrade"></td>
                        <td id="notasgrade"></td>
                        <td id="notasgrade"></td>
                        <td id="notasgrade"></td>
                        <td id="notasgrade"></td>
                        <td id="notasgrade"></td>
                        <td id="notasgrade"></td>
                        <td id="notasgrade"></td>
                        <td id="notasgrade"></td>
                        <td id="notasgrade"></td>
                        <td id="notasgrade"></td>
                        <td id="notasgrade"></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td id="nombre">texto</td>
                        <td id="notasgrade"></td>
                        <td id="notasgrade"></td>
                        <td id="notasgrade"></td>
                        <td id="notasgrade"></td>
                        <td id="notasgrade"></td>
                        <td id="notasgrade"></td>
                        <td id="notasgrade"></td>
                        <td id="notasgrade"></td>
                        <td id="notasgrade"></td>
                        <td id="notasgrade"></td>
                        <td id="notasgrade"></td>
                        <td id="notasgrade"></td>
                        <td id="notasgrade"></td>
                        <td id="notasgrade"></td>
                        <td id="notasgrade"></td>
                        <td id="notasgrade"></td>
                      </tr>
                    </table>

                  </div>
                </div>
                <!-- acomodar ese left -->
                <div class="row" style="margin-left:1050px;padding-bottom:20px;margin-top: 20px;">
                  <div class="Download col-lg-2">
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
5.1 grade Slider
*********************************/

.grade_slider_container
{
	width: 100%;
	height: 100%;
}
.grade_slide
{
	width: 100%;
	height: 100%;
}
.grade_slide_background
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
.grade_slide_container
{
	width: 90%;
	height: auto;
  top: 29%;
  background-color: rgba(255, 255, 255, 0.801);
  margin: 0 auto;
  border-radius: 30px;
  text-align: center;
}
#text-grade
{
  color: rgb(0, 0, 0);
  padding-top: 25px;
}
.Download input[type="submit"]{
	background: #26A0DA;
	border-radius: 30px;
	cursor: pointer;
	width: 100px;
	height: 30px;
  border:none;
  margin-top: 70%;
  margin-left: -80px;
}
.grade_box_title{
  color: rgb(0, 0, 0);
  font-size: 18px;
}
.Download{
  margin-top: 20px;
}
.tables-grade{
  background-color:rgb(255, 255, 255);
  border-radius: 20px;
  width: 98%;
  margin: 0 auto;
  margin-top: 20px;
  box-shadow: 2px 0 3px rgba(0, 0, 0, 0.678) ;
  overflow-x:auto;
}
.diseño-table-grade{
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
#notasgrade
{
  border-left: 1px solid #dfdfdf;
  border-right: 1px solid #dfdfdf;
  width: 80px;
}
</style>