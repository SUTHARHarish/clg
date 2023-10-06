<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotal mount - About </title>
    <?php  require('inc/links.php')  ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" /> 
<style>
  .box{
    border-top-color: #21E8CB !important;
  }
</style>
</head>
<body bg-light> 
  <!-- navbar -->
  <?php require('inc/header.php'); ?>
 <!-- ***** -->
 <div class="my-5 px-4">
  <h2 class="h-font fw-bold text-center"> ABOUT US</h2>
  <div class="h-line bg-dark">
  </div>
  <p class="text-center mt-3">
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione alias possimus ad incidunt cum rerum a,<br> fuga doloribus omnis quia. r adipisicing elit. Cumque molestiae iste explicabo minus, ad neque officia odit  
  </p>
 </div>
<div class="container">
  <div class="row justify-content-between align-items-center">
    <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2" >
      <h3 class="mb-3">Loream  ipsum for sit </h3>
      <p >
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam cum commodi
         quae saepe iste dolore maxime veritatis molestiae odit dignissimos!
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam cum commodi
         quae saepe iste dolore maxime verit
      </p>
    </div>
    <div class="col-lg-5 col-md-5 mb-4  order-lg-2  order-md-2 order-1" >
      <img src="images/about/about.jpg" class="w-100">
    </div>
  </div>
</div>

<div class="container mt-5 ">
  <div class="row">
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box ">
        <img src="images/about/hotel.svg" width="70px">
        <h4 class="mt-3"> 100+ ROOMS</h4>
      </div>
   </div>
   <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box ">
        <img src="images/about/customers.svg" width="70px">
        <h4 class="mt-3"> 200+ CUSTOMERS</h4>
      </div>
   </div>
   <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box ">
        <img src="images/about/rating.svg" width="70px">
        <h4 class="mt-3"> 150+ REVIEWS</h4>
      </div>
   </div>
   <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box ">
        <img src="images/about/staff.svg" width="70px">
        <h4 class="mt-3"> 200+ STAFFS</h4>
      </div>
   </div>
  </div>
</div>


 <h3 class="h-font my-5 fw-bold text-center">MANAGEMENT TEAM </h3>

 <div class="container px-4">
   <!-- Swiper -->
   <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide bg-white text-center overflow-hidden rounded mb-4">
        <img src="images/menegar.jpg" class="w-100">
        <h5 class="mt-2"> Randam name </h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/cook.jpg" class="w-100">
        <h5 class="mt-2"> Randam name </h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/spa.jpg" class="w-100">
        <h5 class="mt-2"> Randam name </h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/staf.jpg" class="w-100">
        <h5 class="mt-2"> Randam name </h5>
      </div>
      <!-- <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/securti.jpg" class="w-100">
        <h5 class="mt-2"> Randam name </h5>
      </div> -->
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/sarvent.jpg" class="w-100">
        <h5 class="mt-2"> Randam name </h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/securti.jpg" class="w-100">
        <h5 class="mt-2"> Randam name </h5>
      </div>
      
      </div>
    <div class="swiper-pagination"></div>
  </div>
 </div>
  <!-- footer  -->
   <?php  require('inc/footer.php'); ?>
    <!-- modal -->
    <?php require('inc/modal.php') ?> 

     <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

      <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView:4,
      spaceBetween: 40, 
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: 
      { 
        320:
        {
          slidesPerView:1,
        },
        640:
        {
          slidesPerView:1,
        },
        768:
        {
          slidesPerView:2,
        },
        1024:
        {
          slidesPerView:3,
        },
      }
    });
  </script>

</body>
</html>