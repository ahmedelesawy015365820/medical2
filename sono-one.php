<?php
$active = "enplusblue";
require_once("include/header.php"); ?>
<div id="carouselExampleFade" class="carousel slide carousel-fade " data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item item active">
          <div class="row justify-content-center align-items-center" style="height: 100%;">
            <img src="image/product/sono one/1.png" width="350px" height="400px">
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
                <div class="col-md-6 wow slideInLeft" data-wow-duration="1s"  data-wow-delay=".5s">
                    <div class="enplusblue-info row 	justify-content-center align-items-center">
                      <h3>Ultrasound therapy</h3>
                      <p>For many decades, ultrasound therapy has been successfully 
                        established as treatment for chronic and degenerative 
                        diseases of the musculoskelettal and support system.
                      </p>
                    </div>
                </div>
                <div class="col-md-6 wow slideInRight" data-wow-duration="1s"  data-wow-delay=".5s">
                    <div class="enplusblue-img row 	justify-content-center">
                      <img class="img-thumbnail" src="image/product/sono one/2.jpg" width="350px" height="300px" alt="about">
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
  <div class="container wow zoomIn" data-wow-duration="1.5s"  data-wow-delay="1s">
    <h2>Technical data</h2>
    <div class="row info">
      <div class="col-md-6">
        <h4>Frequency</h4>
        <p>1 and 3 MHz</p>
        <h4>Ultrasound types</h4>
        <ul>
          <li>Continuous ultrasound</li>
          <li>Pulsed ultrasound, adjustable pulse frequencies <br>
              10 Hz, 20 Hz, 50 Hz, 100 Hz<br>
              Duty ratio: 1:1, 1:2, 1:5, 1:10
          </li>
        </ul>
        <h4>Transducer surface</h4>
        <p>5 cm2, AER = 3 cm2</p>
        <h4>Intensity</h4>
        <p>Max. 3 W/cm2</p>
      </div>
      <div class="col-md-6">
        <h4>Intensity levels</h4>
        <p>0.1 W/cm² to 3 W/cm² in intervals of 0.1 W/cm²</p>
        <h4>Number of ultrasound transducer connections</h4>
        <p>1</p>
        <h4>Dimensions (LxWxH) / Weight</h4>
        <p>23,8 cm x 13,8 cm x 9,5 cm  / 1 kg</p>
      </div>
    </div>
  </div>
</section>
<!------------ end radial --------------->

<?php  require_once("include/footer.php"); ?>