<head><link rel="icon" href="img/icono.ico" /></head>
<body>
  @extends('navs.teacher-grade')
  <div class="home">
    <div class="hero_slider_container">
      <div class="hero_slider owl-carousel">

        <!-- Hero Slide -->
        <div class="hero_slide">
          <div class="hero_slide_background" style="background-image:url(img/slider_background.jpg)"></div>
          <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">

          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="hero_boxes">
    <div class="hero_boxes_inner">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 hero_box_col">
            <a class="hero_box d-flex flex-row align-items-center justify-content-start" href="{{url('/notesdirector')}}">
              <i class="fas fa-tasks"></i>
              <div class="hero_box_content">
                <h2 class="hero_box_title">NOTAS POR PERIODO</h2>
                <!-- <a href="courses.html" class="hero_box_link">view more</a> -->
              </div>
            </a>
          </div>

          <div class="col-lg-6 hero_box_col">
            <a class="hero_box d-flex flex-row align-items-center justify-content-start" href="{{url('/notesaberdirector')}}">
              <i class="fas fa-tasks"></i>
              <div class="hero_box_content">
                <h2 class="hero_box_title">NOTAS POR PRUEBA SABER</h2>
                <!-- <a href="courses.html" class="hero_box_link">view more</a> -->
              </div>
            </a>
          </div>
        </div>
        <div class="row" id="row1">
          <div class="col-lg-6 hero_box_col">
            <a class="hero_box d-flex flex-row align-items-center justify-content-start" href="{{url('/notesabergrade')}}">
              <i class="fas fa-chart-pie"></i>
              <div class="hero_box_content">
                <h2 class="hero_box_title">PRUEBA SABER</h2>
                <!-- <a href="courses.html" class="hero_box_link">view more</a> -->
              </div>
            </a>
          </div>

          <div class="col-lg-6 hero_box_col">
            <a class="hero_box d-flex flex-row align-items-center justify-content-start" href="{{url('/notesgrade')}}">
              <i class="fab fa-leanpub"></i>
              <div class="hero_box_content">
                <h2 class="hero_box_title">CONSOLIDADOS</h2>
                <!-- <a href="courses.html" class="hero_box_link">view more</a> -->
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="popular page_section">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="section_title text-center">
            <h1> </h1>
          </div>
        </div>
      </div>

      <div class="row course_boxes">

        <!-- Popular Course Item -->
        <div class="col-lg-6 course_box">
          <!-- <div class="card"> -->
          <img class="card-img-top" src="img/listaAl.png" alt="">
          <div class="course_boxes-text">LISTA ESTUDIANTES</div>
          <!-- <div class="card-body text-center">
							<div class="card-title"><a href="courses.html">A complete guide to design</a></div>
							<div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
						</div> -->
          <!-- </div> -->
        </div>

        <!-- Popular Course Item -->
        <div class="col-lg-6 course_box">
          <!-- <div class="card"> -->
          <img class="card-img-top" src="img/listaAl.png" alt="">
          <div class="course_boxes-text">LISTA MATERIAS</div>

          <!-- <div class="card-body text-center">
							<div class="card-title"><a href="courses.html">Beginners guide to HTML</a></div>
							<div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
						</div> -->
          <!-- </div> -->
        </div>
      </div>
    </div>
  </div>
</body>