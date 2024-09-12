<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Navbar</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">


     <!-- bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
  rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
  crossorigin="anonymous">

  <!-- font awesome cdn -->
  <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
     integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
     crossorigin="anonymous"
     referrerpolicy="no-referrer"
   />
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand mx-5" href="#">MyShop</a>

            <!-- Toggler for mobile view -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Content -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <form class="d-flex ms-auto me-3  " role="search">
                    <!-- Search Bar -->
                    <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success text-black fw-bold" type="submit">Search</button>
                </form>

                <!-- Login/Register Buttons -->
                <ul class="navbar-nav mx-5">
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-primary me-2 fw-bold" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-success fw-bold" href="#">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Sub-Navbar -->
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!-- Home Link -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>

            <!-- Categories Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Categories
                </a>
                <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                    <li><a class="dropdown-item text-center" href="category/cosmetic.php">Cosmetic</a></li>
                    <li><a class="dropdown-item text-center" href="category/eyewear.php">Eyewear</a></li>
                    <li><a class="dropdown-item text-center" href="category/accessories.php">Accessories</a></li>
                    <li><a class="dropdown-item text-center" href="category/mens.php">Men's Wear</a></li>
                    <li><a class="dropdown-item text-center" href="category/womens.php">Women's Wear</a></li>
                </ul>
            </li>

            <!-- Brands Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="brandsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Brands
                </a>
                <ul class="dropdown-menu" aria-labelledby="brandsDropdown">
                    <li><a class="dropdown-item text-center" href="brand/nike.php">Nike</a></li>
                    <li><a class="dropdown-item text-center" href="brand/gucci.php">Gucci</a></li>
                    <li><a class="dropdown-item text-center" href="brand/louis.php">Louis Vuitton</a></li>
                </ul>
            </li>

            <!-- Blogs Link -->
            <li class="nav-item">
                <a class="nav-link" href="blogs.php">Blogs</a>
            </li>

            <!-- About Us Link -->
            <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
            </li>

            <!-- Cart Link -->
            <li class="nav-item">
                <a class="nav-link" href="cart.php">Cart</a>
            </li>

            <!-- Contact Link -->
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
        </ul>
    </div>
</nav>





<!-- ************************************** photo Gallery********************************************** -->
<div class="gallery-container">
    <img src="image/download (1).jpeg" class="gallery-image" alt="Image 1">
    <img src="image/download.jpeg" class="gallery-image hidden" alt="Image 2">
    <img src="image/images (1).jpeg" class="gallery-image hidden" alt="Image 3">
    <img src="image/images.jpeg" class="gallery-image hidden" alt="Image 4">
  </div>




<!-- ******************************************* Card html  **********************************************-->
 <div class="container my-4 ">
  <div class="row justify-content-center">
    <!-- <div class="bg-primary w-100"> <p class="text-center">Here are our product</p></div> -->
    <!-- Card 1 -->
    <div class="col-md-3 mb-4">
      <div class="card" style="width: 100%;">
        <img src="image/WhatsApp_Image_2024-09-08_at_16.11.25_1cf0fa24-removebg-preview.png" class="card-img-top "  style="width: 80% " alt="...">
        <div class="card-body">
          <h5 class="card-title">Apple Iphone</h5>
          <p class="card-text">Newly launched apple iphone with special updated features.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Price: 100000</li>
        </ul>
        <div class="card-body text-center">
          <a href="#" class="card-link  text-decoration-none border text-white p-2 rounded " style="background-color: rgb(221, 117, 242);">Add to card</a>
          <a href="#" class="card-link text-decoration-none border text-white p-2 rounded " style="background-color: rgb(221, 117, 242);">Shop Now</a>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-3 mb-4">
        <div class="card" style="width: 100%;">
          <img src="image/WhatsApp_Image_2024-09-08_at_16.11.25_1cf0fa24-removebg-preview.png" class="card-img-top "  style="width: 80% " alt="...">
          <div class="card-body">
            <h5 class="card-title">Apple Iphone</h5>
            <p class="card-text">Newly launched apple iphone with special updated features.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Price: 100000</li>
          </ul>
          <div class="card-body text-center">
            <a href="#" class="card-link  text-decoration-none border text-white p-2 rounded " style="background-color: rgb(221, 117, 242);">Add to card</a>
            <a href="#" class="card-link text-decoration-none border text-white p-2 rounded " style="background-color: rgb(221, 117, 242);">Shop Now</a>
          </div>
        </div>
      </div>

    <!-- Card 3 -->
    <div class="col-md-3 mb-4">
        <div class="card" style="width: 100%;">
          <img src="image/WhatsApp_Image_2024-09-08_at_16.11.25_1cf0fa24-removebg-preview.png" class="card-img-top "  style="width: 80% " alt="...">
          <div class="card-body">
            <h5 class="card-title">Apple Iphone</h5>
            <p class="card-text">Newly launched apple iphone with special updated features.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Price: 100000</li>
          </ul>
          <div class="card-body text-center">
            <a href="#" class="card-link  text-decoration-none border text-white p-2 rounded " style="background-color: rgb(221, 117, 242);">Add to card</a>
            <a href="#" class="card-link text-decoration-none border text-white p-2 rounded " style="background-color: rgb(221, 117, 242);">Shop Now</a>
          </div>
        </div>
      </div>

    <!-- Card 4 -->
    <div class="col-md-3 mb-4">
        <div class="card" style="width: 100%;">
          <img src="image/WhatsApp_Image_2024-09-08_at_16.11.25_1cf0fa24-removebg-preview.png" class="card-img-top "  style="width: 80% " alt="...">
          <div class="card-body">
            <h5 class="card-title">Apple Iphone</h5>
            <p class="card-text">Newly launched apple iphone with special updated features.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Price: 100000</li>
          </ul>
          <div class="card-body text-center">
            <a href="#" class="card-link  text-decoration-none border text-white p-2 rounded " style="background-color: rgb(221, 117, 242);">Add to card</a>
            <a href="#" class="card-link text-decoration-none border text-white p-2 rounded " style="background-color: rgb(221, 117, 242);">Shop Now</a>
          </div>
        </div>
      </div>
    <!-- Card 5 (starts a new row) -->
    <div class="col-md-3 mb-4">
        <div class="card" style="width: 100%;">
          <img src="image/WhatsApp_Image_2024-09-08_at_16.11.25_1cf0fa24-removebg-preview.png" class="card-img-top "  style="width: 80% " alt="...">
          <div class="card-body">
            <h5 class="card-title">Apple Iphone</h5>
            <p class="card-text">Newly launched apple iphone with special updated features.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Price: 100000</li>
          </ul>
          <div class="card-body text-center">
            <a href="#" class="card-link  text-decoration-none border text-white p-2 rounded " style="background-color: rgb(221, 117, 242);">Add to card</a>
            <a href="#" class="card-link text-decoration-none border text-white p-2 rounded " style="background-color: rgb(221, 117, 242);">Shop Now</a>
          </div>
        </div>
      </div>

    <!-- Add more cards as needed -->
  </div>
</div>




    <!-- Bootstrap JS -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const images = document.querySelectorAll('.gallery-container img');
        let currentIndex = 0;
    
        function showNextImage() {
          images[currentIndex].classList.add('hidden');
          currentIndex = (currentIndex + 1) % images.length;
          images[currentIndex].classList.remove('hidden');
        }
    
        function changeImage() {
          showNextImage();
        }
    
        // Change image every 2 seconds
        setInterval(showNextImage, 5000);
    
        // Double click to change image manually
        images.forEach(image => {
          image.addEventListener('dblclick', changeImage);
        });
      </script>




<?php

include 'footer.php';
?>
</body>
</html>
