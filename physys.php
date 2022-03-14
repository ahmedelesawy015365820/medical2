<?php
$active = "enplusblue";
require_once("include/header.php"); ?>
<div id="carouselExampleFade" class="carousel slide carousel-fade " data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item item active">
      <div class="row justify-content-center align-items-center" style="height: 100%;">
        <img src="image/product/physys/1.png" width="200px" height="400px">
      </div>
    </div>
    <div class="carousel-item item ">
      <div class="row justify-content-center align-items-center" style="height: 100%;">
        <img src="image/product/physys/2.png" width="200px" height="400px">
      </div>
    </div>
    <div class="carousel-item item" style="background-image:url('image/product/physys/3.jpg')"></div>
    <div class="carousel-item item" style="background-image:url('image/product/physys/4.jpg')"></div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <div class="caro">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </div>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <div class="caro">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </div>
  </a>
</div>
<!----------- start enplusblue ------------>
<section class="enplusblue">
  <div class="container">
    <div class="enplusblue-me">
      <div class="info">
        <div class="row">
          <div class="col-md-6 wow slideInLeft" data-wow-duration="1s" data-wow-delay=".5s">
            <div class="enplusblue-info row 	justify-content-center align-items-center">
              <h3>Physiotherapy at your fingertips</h3>
              <p>Over 45 years of experience in physiotherapy at your disposal. 
                The innovative device for electrostimulation, ultrasound therapy and combined therapy. 
                Up to date colour touch screen technology that is quick, simple and user-friendly. 
                PhySys provides all features for successful treatments in a fantastic design.
              </p>
            </div>
          </div>
          <div class="col-md-6 wow slideInRight" data-wow-duration="1s" data-wow-delay=".5s">
            <div class="enplusblue-img row 	justify-content-center">
              <img class="img-thumbnail" src="image/product/physys/5.jpg" width="350px" height="450px" alt="about">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!------------ end enplusblue --------------->
<!----------- start information ------------>
<section class="information">
  <div class="container wow zoomIn" data-wow-duration="1.5s" data-wow-delay="1s">
    <h2>Technical data</h2>
    <div class="row info">
      <div class="col-md-6">
        <h4>Electrostimulation: Channels</h4>
        <p>2, completely independent programmes (Intensity and Parameters)</p>
        <h4>Electrostimulation: Channel selection</h4>
        <ul>
          <li>MonoStim / 1 programme – 1 channel</li>
          <li>TwinStim / 1 programme – 2 channels</li>
          <li>DuoStim / 2 different programmes – 2 channels</li>
        </ul>
        <h4>Electrostimulation: Waveforms</h4>
        <p>Galv., DD, LF, biphasic, MF, MF/LF, interferential, etc.</p>
        <h4>Ultrasound heads</h4>
        <ul>
          <li>Multifrequency heads</li>
          <li>5 cm²</li>
          <li>1 cm² (optional)</li>
        </ul>
        <h4>Frequencies</h4>
        <ul>
          <li>0,8 MHz: deep effect /</li>
          <li>2,4 MHz: superficial effect</li>
          <li>SonoSwing</li>
        </ul>
      </div>
      <div class="col-md-6">
        <h4>Maximum power emission Ultrasound</h4>
        <p>3 W/cm² for 5 cm² head</p>
        <h4>Number of programmes Ultrasound</h4>
        <p>9 programmes</p>
        <h4>Ultrasound Coupling</h4>
        <p>Audio and 2 colours optical</p>
        <h4>Combined Treatment</h4>
        <p>Preset programmes for desired effect or individualy selectable</p>
        <h4>Memory / Update</h4>
        <p>SD-card (4GB) for indication menu memory<br>
Free memory entries: therapy 120 / diagnostic 120 / favourites<br> 120</p>
        <h4>Dimensions (HxWxL)</h4>
        <ul>
          <li>PhySys with column: 138 cm x 53 cm x 52 cm</li>
          <li>PhySys: 30 cm x 35 cm x 20 cm</li>
          <li>Column: 109 cm x 53 cm x 52 cm</li>
        </ul>
      </div>
      <div class="col-lg-6">
        <div class="embed-responsive embed-responsive-21by9 video">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7SIY_sCT9KU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="embed-responsive embed-responsive-21by9 video">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/F_pEaofmFOM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" allowfullscreen>
          </iframe>
        </div>
      </div>
    </div>
  </div>
</section>
<!------------ end radial --------------->

<?php require_once("include/footer.php"); ?>