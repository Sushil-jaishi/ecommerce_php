<?php
require_once "../database/connection.php";

if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Fetch the current product details
    $sql = "SELECT * FROM product WHERE id = '$productId'";
    $result = $conn->query($sql);
    $product = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['productName'];
    $description = $_POST['productDescription'];
    $price = $_POST['productPrice'];
    $category = $_POST['productCategory'];
    $brand = $_POST['productBrand'];

    if (is_uploaded_file($_FILES['image']['tmp_name'])) {
        $image = date('dmYHis') . str_replace(" ", "", basename($_FILES['image']['name']));
        move_uploaded_file($_FILES['image']['tmp_name'], "../assets/images/uploads/$image");
    } else {
        $image = $product['image']; // Keep the old image if no new one is uploaded
    }

    $sql = "UPDATE product SET name='$name', description='$description', price='$price', category='$category', brand='$brand', image='$image' WHERE id='$productId'";

    if ($conn->query($sql) === TRUE) {
        header("Location: view_product.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link rel="stylesheet" href="update_product.css">
</head>
<body>
    <div class="container">
        <h2>Update Product</h2>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="productName" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="productName" name="productName" value="<?php echo htmlspecialchars($product['name']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="productDescription" class="form-label">Product Description</label>
                <textarea class="form-control" id="productDescription" name="productDescription" rows="3" required><?php echo htmlspecialchars($product['description']); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="productPrice" class="form-label">Price</label>
                <input type="number" class="form-control" id="productPrice" name="productPrice" value="<?php echo htmlspecialchars($product['price']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="productCategory" class="form-label">Category</label>
                <select class="form-select" id="productCategory" name="productCategory" required>
                    <option value="" disabled>Select a Category</option>
                    <option value="Cosmetic" <?php if ($product['category'] == 'Cosmetic') echo 'selected'; ?>>Cosmetic</option>
                    <option value="Accessories" <?php if ($product['category'] == 'Accessories') echo 'selected'; ?>>Accessories</option>
                    <option value="Eyewear" <?php if ($product['category'] == 'Eyewear') echo 'selected'; ?>>Eyewear</option>
                    <option value="Mens Wear" <?php if ($product['category'] == 'Mens Wear') echo 'selected'; ?>>Men's Wear</option>
                    <option value="Womens Wear" <?php if ($product['category'] == 'Womens Wear') echo 'selected'; ?>>Women's Wear</option>
                    <option value="Others" <?php if ($product['category'] == 'Others') echo 'selected'; ?>>Others</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="productBrand" class="form-label">Brand</label>
                <select class="form-select" id="productBrand" name="productBrand" required>
                    <option value="" disabled>Select a brand</option>
                    <option value="Nike" <?php if ($product['brand'] == 'Nike') echo 'selected'; ?>>Nike</option>
                    <option value="Len's Cart" <?php if ($product['brand'] == "Len's Cart") echo 'selected'; ?>>Len's Cart</option>
                    <option value="Adidas" <?php if ($product['brand'] == 'Adidas') echo 'selected'; ?>>Adidas</option>
                    <option value="others" <?php if ($product['brand'] == 'others') echo 'selected'; ?>>Others</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="productImage" class="form-label">Product Image</label>
                <input type="file" class="form-control" id="productImage" name="image" accept="image/*">
                <?php if ($product['image']): ?>
                    <img src="../assets/images/uploads/<?php echo htmlspecialchars($product['image']); ?>" alt="Product Image" width="50">
                <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
