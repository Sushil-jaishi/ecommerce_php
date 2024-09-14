<?php
require_once "../database/connection.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    
    $name = $_POST['productName'];
    $description = $_POST['productDescription'];
    $price = $_POST['productPrice'];
    $category = $_POST['productCategory'];    
    $brand = $_POST['productBrand'];    
    
    
    if(is_uploaded_file($_FILES['image']['tmp_name'])){ 
        $image = date('dmYHis').str_replace(" ","",basename($_FILES['image']['name']));
        move_uploaded_file($_FILES['image']['tmp_name'], "../assets/images/uploads/$image");
    }else{
        $image = "";
    }

    $sql = " insert into product(name ,description , price ,category,brand, image )VALUES('$name' , '$description' , '$price' , '$category','$brand', '$image')";

    if($conn->query($sql)==true)
    {
        $status="product added success";
    }
    else{
        echo "query error:" . $conn->error;
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Add Product</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="admin.css">





</head>
<body>
<!-- Navbar Section -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <!-- Logo on the left side -->
        <a class="navbar-brand" href="#">
            <img src="../image/WhatsApp_Image_2024-09-08_at_16.11.25_1cf0fa24-removebg-preview.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            Lets' Shop
        </a>

        <!-- Toggler for mobile view -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links on the right side -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_product.php">View Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">View User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_order.php">View Order</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Container -->
<div class="container mt-5 mb-5">
    <h2 class="text-center">Add New Product</h2>
    <div class="row justify-content-center mt-4">
        <!-- Add Product Section -->
        <div class="col-md-6 mx-auto">
            <!-- <h4 class="text-center">Add New Product</h4> -->
            <form id="addProductForm" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="productName" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="productName" name="productName" placeholder="Enter product name" required>
                </div>
                <div class="mb-3">
                    <label for="productDescription" class="form-label">Product Description</label>
                    <textarea class="form-control" id="productDescription" name="productDescription" rows="3" placeholder="Enter a short description" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="productPrice" class="form-label">Price</label>
                    <input type="number" class="form-control" id="productPrice" name="productPrice" placeholder="Enter product price" required>
                </div>
                <div class="mb-3">
                    <label for="productCategory" class="form-label">Category</label>
                    <select class="form-select" id="productCategory" name="productCategory" required>
                        <option value="" disabled selected>Select a Category</option>
                        <option value="Cosmetic">Cosmetic</option>
                        <option value="Accessories">Accessories</option>
                        <option value="Eyewear">Eyewear</option>
                        <option value="Mens Wear">Men's Wear</option>
                        <option value="Womens Wear">Women's Wear</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="productBrand" class="form-label">Brand</label>
                    <select class="form-select" id="productBrand" name="productBrand" required>
                        <option value="" disabled selected>Select a brand</option>
                        <option value="Nike">Nike</option>
                        <option value="Lens">Len's Cart</option>
                        <option value="Adidas">Adidas</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="productImage" class="form-label">Product Image</label>
                    <input type="file" class="form-control" id="productImage" name="image" accept="image/*" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Product</button>
            </form>
        </div>
    </div>
</div>

<!-- Add Bootstrap JS and CSS -->

        <!-- Product Details Section -->
       
    </div>
</div>


<!-- Bootstrap JS and Dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<!-- Custom JS -->
<script src="script.js"></script>

</body>
</html>
