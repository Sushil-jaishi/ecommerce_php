<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Navbar</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="styl.css">


    <style>
        /* Style for navbar */
.navbar {
  background: #ea4ed3;

}

.navbar-brand {
  font-size: 1.5rem;
  font-weight: bold;
}

.form-control {
  width: 500px !important; /* Adjust width of the search input */
}

.nav-link {
  color: rgb(8, 5, 8);
}




/* 
style for sub-navbar */

/* Sub-Navbar */
.navbar.bg-light {
  padding: 0.5rem 1rem;
  border-bottom: 1px solid #ddd;
}

.nav-link {
  color: #333;
  font-weight: bold;
}

.nav-link:hover {
  color: #007bff;
}

/* Dropdown items */
.dropdown-menu {
  border-radius: 5px;
}

.dropdown-item:hover {
  background-color: #f8f9fa;
  color: #007bff;
}


/* Sub-Navbar Styling */
.navbar.bg-light {
  background-color: #f875f8 !important; /* Light pink background */
  padding: 0.5rem 0; /* Vertical padding */
  margin-top: 3px;
  text-align: center; /* Center the content */
}

.navbar-nav {
  margin: 0 auto; /* Center the navbar items */
  display: flex;
  justify-content: center; /* Center the items horizontally */
  gap: 30px; /* Add space between the items */
}

.nav-link {
  color: #333;
  font-weight: bold;
  padding: 10px 15px; /* Add padding to increase the clickable area */
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

/* Hover Effect */
.nav-link:hover {
  color: #ffffff;
  background-color: #ec407a; /* Darker pink on hover */
}

/* Dropdown Styling */
.dropdown-menu {
  background-color: #b534ad; /* Light pink background for dropdown */
  border-radius: 5px;
}

.dropdown-item:hover {
  font-size: large;
  color: black;
  font-weight: 600;
  background-color: #e181f4; /* Slightly darker pink on hover */
  color: #333;
}

/* Responsive Fixes */
@media (max-width: 992px) {
  .navbar-nav {
      flex-direction: column; /* Stack items vertically on smaller screens */
      gap: 10px; /* Adjust spacing */
  }
}

    </style>


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
                        <a class="nav-link btn btn-outline-primary me-2 fw-bold" href="userlogin.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-success fw-bold" href="registration.php">Register</a>
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

    <!-- Bootstrap JS -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
   





</body>
</html>
