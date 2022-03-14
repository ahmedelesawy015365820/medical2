$(function () {

  $(window).scroll(function () { 
    if($(window).scrollTop() >= 300){
        $(".navbar").addClass("navbar-scro fixed-top");
    }else{
        $(".navbar").removeClass("navbar-scro fixed-top");
    }
});

$('.carousel').carousel({
  interval: 5000
});

    /**********************************************start button-top***********************************/
    $(window).on("scroll", function () {
      if ($(window).scrollTop() >= 350) {
        if ($("div.button-top").is(":hidden")) {
          $("div.button-top").show(1000);
        }
      } else {
        $("div.button-top").hide(1000);
      }
    });


    $("div.button-top").on("click", function (e) {
      e.preventDefault();
      $("html , body").animate(
        {
          scrollTop: 0,
        },
        1000
      );
    });

    // about link => preventDefault
$(".navbar-expand-lg .navbar-nav .dropdown-menu .dropdown-item.active ,.navbar-light .navbar-nav .active>.nav-link,.navbar-light.navbar-nav .nav-link.active,.navbar-light .navbar-nav.nav-link.show, .navbar-light .navbar-nav .show>.nav-link").click(function (e){
  e.preventDefault();
});

//add class active to click element
$(".our-product .product-items .product-item").click(function () {

  $(this).addClass("active").siblings(".product-item").removeClass("active");

  $(".category .single").removeClass("active");
  $(".category .single.all").addClass("active");

  $(".our-product .item").slideUp(1500);

  $(".categories .category").fadeOut(700);

  $(".our-product " + $(this).attr("data-project"))
  .delay(1450)
  .slideDown(1500);

    $(".categories " + $(this).attr("data-project"))
      .delay(650)
      .fadeIn(700);

});

//add class active to click element
$(".category .single").on("click", function () {

  $(this).addClass("active").siblings(".single").removeClass("active");

  $(".our-product .item").slideUp(1500);

  $(".our-product " + $(this).attr("data-cate"))
  .delay(1450)
  .slideDown(1500);
});

  
    /**********************************************start-wow***********************************/
    new WOW().init();
    /**********************************************end-wow***********************************/
  });
  
  // scrolldown contact us page => contact-us

  var contact = document.querySelector(".location");
  if (document.body.contains(contact)) {
    $("body , html")
      .delay(2000)
      .animate(
        {
          scrollTop: $(".location").offset().top - 50,
        },
        2000
      );
  }

  // scrolldown contact us page => contact-us

  var product = document.querySelector(".our-product");
  if (document.body.contains(product)) {
    $("body , html")
      .delay(2000)
      .animate(
        {
          scrollTop: $(".our-product").offset().top - 50,
        },
        2000
      );
  }

  // scrolldown service us page => service

  var service = document.querySelector(".service");
  if (document.body.contains(service)) {
    $("body , html")
      .delay(2000)
      .animate(
        {
          scrollTop: $(".service").offset().top - 200,
        },
        2000
      );
  }


  $(".our-product .product-items .product-item").click(function() {

    $("body , html")
      .delay(400)
      .animate(
        {
          scrollTop: $(".our-product .items-pro").offset().top -300,
        },
        1500
      );

  });
  
  
  /**********************************************start-spiner***********************************/
  $(window).on("load", function () {
    $(".cycle").addClass("completes");
    $(".spiner").fadeOut(2000);
  });
  /**********************************************end-spiner***********************************/
  