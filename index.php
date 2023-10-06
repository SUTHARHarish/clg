<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel mount - Home </title>
    <?php  require('inc/links.php')  ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<style>
   
.availability-form
{
  margin-top: -50px;
  position: relative;
  z-index: 2;
}
@media screen and (max-width: 575px) {
  .availability-form{
    margin-top: 25px;
    padding: 0 35px ;
  }
  
}
.pop:hover
{
  transform: scale(1.03);
  transition: all 0.3s;
}
</style>
</head>
<body bg-light> 
  <!-- navbar -->
  <?php require('inc/header.php'); ?>
 <!-- ***** -->
<div class="container-fluid px-lg-4 mt-4">  
   <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/carousel/1.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/2.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/3.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/4.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/5.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/6.png" class="w-100 d-block"/>
      </div>
    </div>
 </div>
        <!-- ***** -->
        <!-- check availability form -->
<div class="container availability-form">
  <div class="row">
    <div class="col-lg-12 bg-white shadow p-4 rounded">
      <h5 class="mb-4"> Check Booking Availability</h5>
      <form>
          <div class="row align-items-end">
          <div class="col-lg-3 mb-3">
            <label  class="form-label" style="font-weight:500;">Chack-in</label>
            <input type="date" class="form-control shadow-none">
         </div>
         <div class="col-lg-3 mb-3">
            <label  class="form-label" style="font-weight:500;">Chack-out</label>
            <input type="date" class="form-control shadow-none">
         </div>
         <div class="col-lg-3 mb-3">
         <label  class="form-label" style="font-weight:500;">Adult</label>
         <select class="form-select shadow-none">
           
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="1">4</option>
           <option value="2">5</option>
           <option value="3">6</option>
           <option value="1">7</option>
           <option value="2">8</option>
           <option value="3">9</option>

         </select> 
</div>
  <div class="col-lg-2 mb-3">
         <label  class="form-label" style="font-weight:500;">Children</label>
         <select class="form-select shadow-none">
           
         <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="1">4</option>
           <option value="2">5</option>
           <option value="3">6</option>
           <option value="1">7</option>
           <option value="2">8</option>
           <option value="3">9</option>
         </select>
         </div>
           <div class="col-lg-1 mb-lg-3 mt-2">
            <button type="submit" class="btn text-white shadow-none custom-bg"> Submit  </button>
           </div>
       </div>
      </form>
    </div>
  </div>
</div>

    <!-- our rooms  -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6  my-3">
        <div class="card border-0 shadow " style=" max-width:350px; margin:auto;">
         <img src="images/rooms/1.jpg" class="card-img-top">
        <div class="card-body">
          <h5 >Simple room Name</h5>
          <h6 class="mb-4">₹200 par night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              2 Rooms
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              1 Bathroom
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              1 Balcony
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              3 sofa
            </span>
          </div>
          <div class="fecilities mb-4">
            <h6 class="mb-1"> Facilites </h6>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              Wi-Fi
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              Television
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
             Room heater 
            </span>

          </div>
          <div class="Guests mb-4">
            <h6 class="mb-1"> Guests </h6>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              5 Adult
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              4 Children
            </span>
          </div>
          <div class="rating mb-4">
          <h6 class="mb-1">Rating</h6>
          <span class="badge rounded-pill bg-light">
            <i class="bi bi-star-fill text-warning"></i> 
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now </a>
            <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Details  </a>
          </div>
        </div>
       </div>
      </div>
      <div class="col-lg-4 col-md-6  my-3">
        <div class="card border-0 shadow " style=" max-width:350px; margin:auto;">
         <img src="images/rooms/2.png" class="card-img-top">
        <div class="card-body">
          <h5 >Simple room Name</h5>
          <h6 class="mb-4">₹200 par night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              2 Rooms
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              1 Bathroom
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              1 Balcony
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              3 sofa
            </span>
          </div>
          <div class="fecilities mb-4">
            <h6 class="mb-1"> Facilites </h6>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              Wi-Fi
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              Television
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
             Room heater 
            </span>

          </div>
          <div class="Guests mb-4">
            <h6 class="mb-1"> Guests </h6>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              5 Adult
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              4 Children
            </span>
          </div>
          <div class="rating mb-4">
          <h6 class="mb-1">Rating</h6>
          <span class="badge rounded-pill bg-light">
            <i class="bi bi-star-fill text-warning"></i> 
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now </a>
            <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Details  </a>
          </div>
        </div>
       </div>
      </div>
      <div class="col-lg-4 col-md-6  my-3">
        <div class="card border-0 shadow " style=" max-width:350px; margin:auto;">
         <img src="images/rooms/3.png" class="card-img-top">
        <div class="card-body">
          <h5 >Simple room Name</h5>
          <h6 class="mb-4">₹200 par night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              2 Rooms
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              1 Bathroom
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              1 Balcony
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              3 sofa
            </span>
          </div>
          <div class="fecilities mb-4">
            <h6 class="mb-1"> Facilites </h6>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              Wi-Fi
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              Television
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
             Room heater 
            </span>

          </div>
          <div class="Guests mb-4">
            <h6 class="mb-1"> Guests </h6>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              5 Adult
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              4 Children
            </span>
          </div>
          <div class="rating mb-4">
          <h6 class="mb-1">Rating</h6>
          <span class="badge rounded-pill bg-light">
            <i class="bi bi-star-fill text-warning"></i> 
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now </a>
            <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Details  </a>
          </div>
        </div>
       </div>
      </div>
        <div class="col-lg-12 text-center mt-5">
          <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"> More Rooms >>></a>
        </div>
    </div>
  </div>

  <!-- our facilities  -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES </h2>
  <div class="container ">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5 ">
      <div class="col-lg-2 col-lg-2 text-center bg-white rounded shadow py-4 my-3 pop">
        <img src="images/facilities/wifi.svg" width="80px">
        <h5 class="mt-3">WI-FI</h5>
      </div>
      <div class="col-lg-2 col-lg-2 text-center bg-white rounded shadow py-4 my-3 pop">
        <img src="images/facilities/ac.svg" width="80px">
        <h5 class="mt-3">Air conditioner</h5>
      </div>
      <div class="col-lg-2 col-lg-2 text-center bg-white rounded shadow py-4 my-3 pop">
        <img src="images/facilities/tv.svg" width="80px">
        <h5 class="mt-3">Room Heater </h5>
      </div>
      <div class="col-lg-2 col-lg-2 text-center bg-white rounded shadow py-4 my-3 pop">
        <img src="images/facilities/spa.svg" width="80px">
        <h5 class="mt-3">Spa</h5>
      </div>
       <div class="col-lg-2 col-lg-2 text-center bg-white rounded shadow py-4 my-3 pop">
        <img src="images/facilities/fire.svg" width="80px">
        <h5 class="mt-3">Geyser</h5>
      </div>
      <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"> More Facilites >>></a>
      </div>
    </div>
  </div>
  <!-- Testimonial -->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> TESTIMONIALS </h2>

  <div class="container mt-">
  <div class="swiper swiper-testimonials">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide p-4 bg-light">
      <div class="profile d-flex align-items-center mb-4">
        <img src="images/about/star-fill.svg" width="30px">
        <h6 class="m-0 ms-2 ">Random user 1</h6>
      </div>
      <p >
      I recently had the pleasure of staying at Hotel Mount during my trip to the picturesque mountainside. From the moment I arrived, I was greeted with warmth 
      </p>
      <div class="rating">
          <i class="bi bi-star-fill text-warning"></i> 
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
      </div>
      </div>
      <div class="swiper-slide p-4 bg-light ">
      <div class="profile d-flex align-items-center mb-4 ">
        <img src="images/about/star-fill.svg" width="30px">
        <h6 class="m-0 ms-2 ">Random user 2</h6>
      </div>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis adipisci doloremque cupiditate ipsa quam ratione id deleniti laborum sint nesciunt.
      </p>
      <div class="rating">
          <i class="bi bi-star-fill text-warning"></i> 
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
      </div>
      </div>
      <div class="swiper-slide p-4 bg-light ">
      <div class="profile d-flex align-items-center mb-4 ">
        <img src="images/about/star-fill.svg" width="30px">
        <h6 class="m-0 ms-2 ">Random user 3</h6>
      </div>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis adipisci doloremque cupiditate ipsa quam ratione id deleniti laborum sint nesciunt.
      </p>
      <div class="rating">
          <i class="bi bi-star-fill text-warning"></i> 
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
      </div>
      </div>
      <div class="swiper-slide p-4 bg-light mb-5">
      <div class="profile d-flex align-items-center  mb-3">
        <img src="images/about/star-fill.svg" width="30px">
        <h6 class="m-0 ms-2 ">Random user 4</h6>
      </div>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis adipisci doloremque cupiditate ipsa quam ratione id deleniti laborum sint nesciunt.
      </p>
      <div class="rating">
          <i class="bi bi-star-fill text-warning"></i> 
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
      </div>
      </div>
      <div class="swiper-slide p-4 bg-light">
      <div class="profile d-flex align-items-center  mb-3">
        <img src="images/about/star-fill.svg" width="30px">
        <h6 class="m-0 ms-2 ">Random user 5</h6>
      </div>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis adipisci doloremque cupiditate ipsa quam ratione id deleniti laborum sint nesciunt.
      </p>
      <div class="rating">
          <i class="bi bi-star-fill text-warning"></i> 
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
      </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
  </div>
  <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"> Know More >>></a>
      </div>
        <!-- reach us -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>


  <div class="container">
    <div class="row"> 
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 rounded bg-light">
      <iframe   height="350px " class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29023.051198414872!2d72.72076659999999!3d24.59328895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395d2a7b9c58c24f%3A0x41ec48d89a772ec9!2sMount%20Abu%2C%20Rajasthan%20307501!5e0!3m2!1sen!2sin!4v1694282482137!5m2!1sen!2sin"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-light p-4 rounded mb-4">
          <h5>Call us</h5>
          <a href="tel: +918890991961" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i> +918890991961</a>
          <br>
          <a href="tel: +918890991961" class="d-inline-block text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i> +918890991961</a>

        </div>
        <div class="bg-light p-4 rounded mb-4">
          <h5>Follow us</h5>
          <a href="#" class="d-inline-block mb-3">
          <span class=" badge  bg-light text-dark fs-6">
          <i class="bi bi-twitter me-1"></i> Twitter
          </span>
          </a>
          <br>
          <a href="#" class="d-inline-block mb-3">
          <span class=" badge  bg-light text-dark fs-6">
          <i class="bi bi-facebook me-1"></i> Facebook 
          </span>
          </a>
          <br>
          <a href="#" class="d-inline-block ">
          <span class=" badge  bg-light text-dark fs-6">
          <i class="bi bi-instagram me-1"></i> Instagram
          </span>
          </a>
        </div>
      </div>
    </div>
  </div>
   
  <!-- footer  -->
   <?php  require('inc/footer.php'); ?>
    <!-- modal -->
    <?php require('inc/modal.php') ?> 

         <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        
   <script>
        var swiper = new Swiper(".mySwiper", {
         spaceBetween: 30,
         effect: "fade",
         loop:true,
         autoplay:{
          delay:3500,
          disableOnInteraction:false,
         }
    });

    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView:"3", 
      loop:true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
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