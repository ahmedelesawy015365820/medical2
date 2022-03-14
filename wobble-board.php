<?php
$active = "enplusblue";
require_once("include/header.php"); ?>
<div id="carouselExampleFade" class="carousel slide carousel-fade " data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item item active">
      <div class="row justify-content-center align-items-center" style="height: 100%;">
        <img src="image/product/wobble-board/1.jpg" width="400px" height="250px">
      </div>
    </div>
    <div class="carousel-item item ">
      <div class="row justify-content-center align-items-center" style="height: 100%;">
        <img src="image/product/wobble-board/2.jpg" width="300px" height="300px">
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
<?php require_once("include/footer.php"); ?>