<?php
$active = "enplusblue";
require_once("include/header.php"); ?>
<div id="carouselExampleFade" class="carousel slide carousel-fade " data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item item active">
      <div class="row justify-content-center align-items-center" style="height: 100%;">
        <img src="image/product/thermopro/1.png" width="200px" height="400px">
      </div>
    </div>
    <div class="carousel-item item ">
      <div class="row justify-content-center align-items-center" style="height: 100%;">
        <img src="image/product/thermopro/2.png" width="200px" height="400px">
      </div>
    </div>
    <div class="carousel-item item ">
      <div class="row justify-content-center align-items-center" style="height: 100%;">
        <img src="image/product/thermopro/3.png" width="200px" height="400px">
      </div>
    </div>
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
              <h3>Thermo Pro</h3>
              <p>A modern shortwave therapy system – simple, clear and quick to use.
                  Shortwave therapy is an electrotherapeutic method of physical medicine
                  in which heat is generated in the tissue by means of high-frequency
                  electrical current. In contrast to heat therapy procedures in which heat
                  is applied from the outside, in shortwave therapy the electrical energy 
                  is converted into thermal energy directly in the tissue. The high-frequency 
                  electromagnetic field generates eddy currents in the treated tissues, leading
                  to molecular excitations and thus to the conversion of electrical energy into heat energy.
              </p>
            </div>
          </div>
          <div class="col-md-6 wow slideInRight" data-wow-duration="1s" data-wow-delay=".5s">
            <div class="enplusblue-img row 	justify-content-center">
              <img class="img-thumbnail" src="image/product/thermopro/1.png" alt="about">
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
        <h4>Mains voltage</h4>
        <p>max. 700 W</p>
        <h4>Applicator</h4>
        <p>Coil field method</p>
        <h4>Output frequency and power</h4>
        <ul>
          <li>27.12 MHz</li>
          <li>Unpulsed max. 100 W</li>
          <li>Pulsed max. 200 Wpeak</li>
        </ul>
      </div>
      <div class="col-md-6">
        <h4>Duty cycle</h4>
        <p>1 : 10 to 9 : 10</p>
        <h4>Pulse frequency</h4>
        <p>0.5 to 1000 Hz</p>
        <h4>Dimensions</h4>
        <p>58,1 cm / 45,9 cm / 85,4 cm (W/D/H)<br>
        (without mounting arm and applicator)</p>
        <h4>Housing dimensions</h4>
        <p>W 322 mm / D 234 mm / H 135 mm</p>
        <h4>Weight</h4>
        <p>37 kg</p>
      </div>
    </div>
  </div>
</section>
<!------------ end radial --------------->

<?php require_once("include/footer.php"); ?>