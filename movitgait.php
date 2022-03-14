<?php
$active = "enplusblue";
require_once("include/header.php"); ?>
<div id="carouselExampleFade" class="carousel slide carousel-fade " data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item item active">
      <div class="row justify-content-center align-items-center" style="height: 100%;">
        <img src="image/product/movitgait/2.png" width="600px" height="300px">
      </div>
    </div>
    <div class="carousel-item item">
      <div class="row justify-content-center align-items-center" style="height: 100%;">
        <img src="image/product/movitgait/3.png" width="600px" height="300px">
      </div>
    </div>
    <div class="carousel-item item ">
      <div class="row justify-content-center align-items-center" style="height: 100%;">
        <img src="image/product/movitgait/4.png" width="600px" height="300px">
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
              <h3>Movit Gait</h3>
              <p>Movit Gait ™ is the ideal tool for clinicians and specialists interested in objectively monitoring and quantifying the patient's physical state and evaluating the effectiveness of a rehabilitation program. Thanks to the network of inertial sensors worn by the patient, it provides a complete and accurate movement analysis.
              <br>Wearable<br>
              Wireless, non-invasive, without external infrastructures<br>
              Accurate<br>
              Validated with gold-standard optoelectronic systems<br>
              Innovative<br>
              Real-time 3D viewing and video synchronization.
              </p>
            </div>
          </div>
          <div class="col-md-6 wow slideInRight" data-wow-duration="1s" data-wow-delay=".5s">
            <div class="enplusblue-img row 	justify-content-center">
              <img class="img-thumbnail" src="image/product/movitgait/1.png" width="450px" height="350px" alt="about">
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
    <h2>Movit Gait analysis</h2>
    <div class="row info">
      <div class="col-md-6">
        <h4>parameters</h4>
        <ul>
          <li>Symmetry indices of duration and length of the half step and step</li>
          <li>Symmetry indices of support times during the gait phases</li>
          <li>Symmetry indices of the impact forces of the leg and foot</li>
          <li>Spatial-temporal indices of the steps of the walk (speed, times and lengths)</li>
          <li>Step cadence</li>
          <li>3D joint angles of the pelvis, hip, knee and ankle</li>
          <li>3D export of data in BVH</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!------------ end radial --------------->

<?php require_once("include/footer.php"); ?>