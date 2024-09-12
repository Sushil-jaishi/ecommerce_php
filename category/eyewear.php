<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Navbar</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="category.css">
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <style>
        .card-img-top {
            width: 100%;
            height: 120px; /* Reduced height */
            object-fit: cover; /* Ensure the image fits without being cut */
        }
        .card {
            max-width: 240px;  /* Set max width for the card */
            max-height: 320px; /* Set max height for the card */
            display: flex;
            flex-direction: column;
            overflow: hidden;  /* Handle content overflow */
        }
        .card-body {
            flex: 1;
            padding: 0.5rem; /* Adjust padding */
        }
        .card-title {
            font-size: 1rem;  /* Adjust title size */
            margin-bottom: 0.5rem; /* Reduce spacing below title */
        }
        .card-text {
            font-size: 0.75rem; /* Reduce font size */
            margin-bottom: 0.5rem; /* Reduce spacing below text */
        }
        .list-group-item {
            font-size: 0.75rem; /* Ensure list item font size matches */
        }
        .card-body.text-center {
            margin-top: auto;
            display: flex;
            justify-content: center;
            gap: 10px; /* Space between buttons */
        }
        .card-body.text-center a.card-link {
            display: inline-flex; 
            height: 30px; /* Reduce height */
            line-height: 30px; /* Center text vertically */
            padding: 0 8px; /* Reduce padding */
            font-size: 0.75rem; /* Reduce font size */
            text-align: center;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand mx-5" href="#">MyShop</a>
            <!-- Toggler for mobile view -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar Content -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <form class="d-flex ms-auto me-3" role="search">
                    <!-- Search Bar -->
                    <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success text-black fw-bold" type="submit">Search</button>
                </form>
                <!-- Login/Register Buttons -->
            </div>
        </div>
    </nav>

    <!-- Sub-Navbar -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Home Link -->
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>
                <!-- Categories Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                        <li><a class="dropdown-item text-center" href="cosmetic.php">Cosmetic</a></li>
                        <li><a class="dropdown-item text-center" href="eyewear.php">Eyewear</a></li>
                        <li><a class="dropdown-item text-center" href="accessories.php">Accssories</a></li>
                        <li><a class="dropdown-item text-center" href="mens.php">Men's Wear</a></li>
                        <li><a class="dropdown-item text-center" href="womens.php">Women's Wear</a></li>
                    </ul>
                </li>
                <!-- Brands Dropdown -->
            </ul>
        </div>
    </nav>

    <!-- 3rd section -->

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Home Link -->
                <li class="nav-item">
                    <h5>Eyewear Section</h5>
                    <p>Choose your desired one</p>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Card HTML -->
    <div class="container my-4">
        <div class="row">
            <!-- Repeat this block for each card -->
            <div class="col-md-2 mb-4">
                <div class="card">
                    <img src="../image/WhatsApp_Image_2024-09-08_at_16.11.25_1cf0fa24-removebg-preview.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Apple Iphone</h5>
                        <p class="card-text">Newly launched</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Price: 100000</li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="#" class="card-link text-decoration-none border text-white" style="background-color: rgb(221, 117, 242);">Add to cart</a>
                        <a href="#" class="card-link text-decoration-none border text-white" style="background-color: rgb(221, 117, 242);">Shop Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-2 mb-4">
                <div class="card">
                    <img src="../image/WhatsApp_Image_2024-09-08_at_16.11.25_1cf0fa24-removebg-preview.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Apple Iphone</h5>
                        <p class="card-text">Newly launched</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Price: 100000</li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="#" class="card-link text-decoration-none border text-white" style="background-color: rgb(221, 117, 242);">Add to cart</a>
                        <a href="#" class="card-link text-decoration-none border text-white" style="background-color: rgb(221, 117, 242);">Shop Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-2 mb-4">
                <div class="card">
                    <img src="../image/WhatsApp_Image_2024-09-08_at_16.11.25_1cf0fa24-removebg-preview.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Apple Iphone</h5>
                        <p class="card-text">Newly launched</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Price: 100000</li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="#" class="card-link text-decoration-none border text-white" style="background-color: rgb(221, 117, 242);">Add to cart</a>
                        <a href="#" class="card-link text-decoration-none border text-white" style="background-color: rgb(221, 117, 242);">Shop Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-2 mb-4">
                <div class="card">
                    <img src="../image/WhatsApp_Image_2024-09-08_at_16.11.25_1cf0fa24-removebg-preview.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Apple Iphone</h5>
                        <p class="card-text">Newly launched</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Price: 100000</li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="#" class="card-link text-decoration-none border text-white" style="background-color: rgb(221, 117, 242);">Add to cart</a>
                        <a href="#" class="card-link text-decoration-none border text-white" style="background-color: rgb(221, 117, 242);">Shop Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-2 mb-4">
                <div class="card">
                    <img src="../image/WhatsApp_Image_2024-09-08_at_16.11.25_1cf0fa24-removebg-preview.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Apple Iphone</h5>
                        <p class="card-text">Newly launched</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Price: 100000</li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="#" class="card-link text-decoration-none border text-white" style="background-color: rgb(221, 117, 242);">Add to cart</a>
                        <a href="#" class="card-link text-decoration-none border text-white" style="background-color: rgb(221, 117, 242);">Shop Now</a>
                    </div>
                </div>
            </div>


            <div class="col-md-2 mb-4">
                <div class="card">
                    <img src="../image/WhatsApp_Image_2024-09-08_at_16.11.25_1cf0fa24-removebg-preview.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Apple Iphone</h5>
                        <p class="card-text">Newly launched</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Price: 100000</li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="#" class="card-link text-decoration-none border text-white" style="background-color: rgb(221, 117, 242);">Add to cart</a>
                        <a href="#" class="card-link text-decoration-none border text-white" style="background-color: rgb(221, 117, 242);">Shop Now</a>
                    </div>
                </div>
            </div>


            <div class="col-md-2 mb-4">
                <div class="card">
                    <img src="../image/WhatsApp_Image_2024-09-08_at_16.11.25_1cf0fa24-removebg-preview.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Apple Iphone</h5>
                        <p class="card-text">Newly launched</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Price: 100000</li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="#" class="card-link text-decoration-none border text-white" style="background-color: rgb(221, 117, 242);">Add to cart</a>
                        <a href="#" class="card-link text-decoration-none border text-white" style="background-color: rgb(221, 117, 242);">Shop Now</a>
                    </div>
                </div>
            </div>


            <div class="col-md-2 mb-4">
                <div class="card">
                    <img src="../image/WhatsApp_Image_2024-09-08_at_16.11.25_1cf0fa24-removebg-preview.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Apple Iphone</h5>
                        <p class="card-text">Newly launched</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Price: 100000</li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="#" class="card-link text-decoration-none border text-white" style="background-color: rgb(221, 117, 242);">Add to cart</a>
                        <a href="#" class="card-link text-decoration-none border text-white" style="background-color: rgb(221, 117, 242);">Shop Now</a>
                    </div>
                </div>
            </div>


            <div class="col-md-2 mb-4">
                <div class="card">
                    <img src="../image/WhatsApp_Image_2024-09-08_at_16.11.25_1cf0fa24-removebg-preview.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Apple Iphone</h5>
                        <p class="card-text">Newly launched</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Price: 100000</li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="#" class="card-link text-decoration-none border text-white" style="background-color: rgb(221, 117, 242);">Add to cart</a>
                        <a href="#" class="card-link text-decoration-none border text-white" style="background-color: rgb(221, 117, 242);">Shop Now</a>
                    </div>
                </div>
            </div>


            <div class="col-md-2 mb-4">
                <div class="card">
                    <img src="../image/WhatsApp_Image_2024-09-08_at_16.11.25_1cf0fa24-removebg-preview.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Apple Iphone</h5>
                        <p class="card-text">Newly launched</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Price: 100000</li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="#" class="card-link text-decoration-none border text-white" style="background-color: rgb(221, 117, 242);">Add to cart</a>
                        <a href="#" class="card-link text-decoration-none border text-white" style="background-color: rgb(221, 117, 242);">Shop Now</a>
                    </div>
                </div>
            </div>


            <div class="col-md-2 mb-4">
                <div class="card">
                    <img src="../image/WhatsApp_Image_2024-09-08_at_16.11.25_1cf0fa24-removebg-preview.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Apple Iphone</h5>
                        <p class="card-text">Newly launched</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Price: 100000</li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="#" class="card-link text-decoration-none border text-white" style="background-color: rgb(221, 117, 242);">Add to cart</a>
                        <a href="#" class="card-link text-decoration-none border text-white" style="background-color: rgb(221, 117, 242);">Shop Now</a>
                    </div>
                </div>
            </div>


            <div class="col-md-2 mb-4">
                <div class="card">
                    <img src="../image/WhatsApp_Image_2024-09-08_at_16.11.25_1cf0fa24-removebg-preview.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Apple Iphone</h5>
                        <p class="card-text">Newly launched</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Price: 100000</li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="#" class="card-link text-decoration-none border text-white" style="background-color: rgb(221, 117, 242);">Add to cart</a>
                        <a href="#" class="card-link text-decoration-none border text-white" style="background-color: rgb(221, 117, 242);">Shop Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-2 mb-4">
                <div class="card">
                    <img src="../image/WhatsApp_Image_2024-09-08_at_16.11.25_1cf0fa24-removebg-preview.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Apple Iphone</h5>
                        <p class="card-text">Newly launched</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Price: 100000</li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="#" class="card-link text-decoration-none border text-white" style="background-color: rgb(221, 117, 242);">Add to cart</a>
                        <a href="#" class="card-link text-decoration-none border text-white" style="background-color: rgb(221, 117, 242);">Shop Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-2 mb-4">
                <div class="card">
                    <img src="../image/WhatsApp_Image_2024-09-08_at_16.11.25_1cf0fa24-removebg-preview.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Apple Iphone</h5>
                        <p class="card-text">Newly launched</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Price: 100000</li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="#" class="card-link text-decoration-none border text-white" style="background-color: rgb(221, 117, 242);">Add to cart</a>
                        <a href="#" class="card-link text-decoration-none border text-white" style="background-color: rgb(221, 117, 242);">Shop Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-2 mb-4">
                <div class="card">
                    <img src="../image/WhatsApp_Image_2024-09-08_at_16.11.25_1cf0fa24-removebg-preview.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Apple Iphone</h5>
                        <p class="card-text">Newly launched</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Price: 100000</li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="#" class="card-link text-decoration-none border text-white" style="background-color: rgb(221, 117, 242);">Add to cart</a>
                        <a href="#" class="card-link text-decoration-none border text-white" style="background-color: rgb(221, 117, 242);">Shop Now</a>
                    </div>
                </div>
            </div>
            <!-- Repeat end -->
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <?php include '../footer.php'; ?>
</body>
</html>
