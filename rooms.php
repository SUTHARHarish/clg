<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotal mount - Rooms </title>
    <?php  require('inc/links.php')  ?>

<style>
  .h-line
{
    width: 150px;
    margin: 0 auto;
    height: 1.7px;
}


</style>
</head>
<body bg-light> 
  <!-- navbar -->
  <?php require('inc/header.php'); ?>
 <!-- ***** -->
 <div class="my-5 px-4">
  <h2 class="h-font fw-bold text-center">OUR ROOMS </h2>
  <div class="h-line bg-dark">
  </div>
  
 </div>
  <div class="container ">
    <div class="row">
     <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
     <nav class="navbar navbar-expand-lg navbar-light bg-light rounded shadow">
  <div class="container-fluid flex-lg-column align-items-stretch">
    <h4 class="mt-2">FILTERS</h4>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdow" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdow">
     <div class="border bg-light p-3 rounded mb-3">
     <h5 class="mb-3" style="font-size:18px;"> CHECH AVAILABILITY</h5>
      <label  class="form-label">Chack-in</label>
      <input type="date" class="form-control shadow-none mb-3">
      <label  class="form-label">Chack-out</label>
      <input type="date" class="form-control shadow-none">
     </div>
     <div class="border bg-light p-3 rounded mb-3">
     <h5 class="mb-3" style="font-size:18px;"> FACILITIES</h5>
     <div class="mb-2">
       <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
       <label  class="form-label" for="f1">Facility one</label>
     </div>
     <div class="mb-2">
       <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
       <label  class="form-label" for="f2">Facility two</label>
     </div>
     <div class="mb-2">
       <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
       <label  class="form-label" for="f1">Facility three</label>
     </div>
     </div>
     <div class="border bg-light p-3 rounded mb-3">
     <h5 class="mb-3" style="font-size:18px;">GUESTS</h5>
     <div class="d-flex ">
       <div class="me-3">
       <label  class="form-label ">Adults</label>
         <input type="number" class="form-control shadow-none ">
       </div>
       <div>
       <label  class="form-label">Children</label>
         <input type="number" class="form-control shadow-none ">
       </div>
     </div>
     </div>
        </div>
       </div>
     </nav>
     </div>

     <div class="col-lg-9 col-md-12 px-4" >
      <div class="card mb-4 border-0 shadow" >
        <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3 ">
      <img src="images/rooms/7.png" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Simple Room Name </h5>
      <div class="features mb-3">
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
          <div class="fecilities mb-3">
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

          <div class="Guests">
            <h6 class="mb-1"> Guests </h6>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              5 Adult
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              4 Children
            </span>
          </div>

    </div>
    <div class="col-md-2 text-center">
    <h6 class="mb-4">₹200 par night</h6>
    <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now </a>
            <a href="#" class="btn btn-sm w-100 btn-outline-dark  shadow-none">More Details  </a>
    </div>
        </div>
</div>
<div class="card mb-4 border-0 shadow" >
        <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3 ">
      <img src="images/rooms/5.png" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Simple Room Name </h5>
      <div class="features mb-3">
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
          <div class="fecilities mb-3">
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

          <div class="Guests">
            <h6 class="mb-1"> Guests </h6>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              5 Adult
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              4 Children
            </span>
          </div>

    </div>
    <div class="col-md-2 text-center">
    <h6 class="mb-4">₹200 par night</h6>
    <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now </a>
            <a href="#" class="btn btn-sm w-100 btn-outline-dark  shadow-none">More Details  </a>
    </div>
        </div>
</div>

<div class="card mb-4 border-0 shadow" >
        <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3 ">
      <img src="images/rooms/4.png" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Simple Room Name </h5>
      <div class="features mb-3">
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
          <div class="fecilities mb-3">
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

          <div class="Guests">
            <h6 class="mb-1"> Guests </h6>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              5 Adult
            </span>
            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
              4 Children
            </span>
          </div>

    </div>
    <div class="col-md-2 text-center">
    <h6 class="mb-4">₹200 par night</h6>
    <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now </a>
            <a href="#" class="btn btn-sm w-100 btn-outline-dark  shadow-none">More Details  </a>
    </div>
        </div>
</div>

    </div>
    </div>
  </div>

 </div>
  <!-- footer  -->
   <?php  require('inc/footer.php'); ?>
    <!-- modal -->
    <?php require('inc/modal.php') ?> 

</body>
</html>