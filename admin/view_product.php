<?php 
require_once "../database/connection.php";

$sql= "select * from product";
$result = $conn->query($sql);
$product = $result -> fetch_all(MYSQLI_ASSOC);
// var_dump($product);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Management</title>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="view_product.css">
  
  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <h4>Product Details</h4>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Product ID</th>
              <th>Product Name</th>
              <th>Description</th>
              <th>Price</th>
              <th>Category</th>
              <th>Brand</th>
              <th>Image</th>
              <th>Actions</th> <!-- New column for buttons -->
            </tr>
          </thead>
          <tbody id="productTableBody">
            <!-- Product details will be inserted here using JS -->
             <?php 
             for($i=0;$i<count($product);$i++){
             ?>
            <tr>
              <td><?php echo $i+1; ?></td>
              <td><?php echo $product[$i]['name'] ?></td>
              <td><?php echo $product[$i]['description'] ?></td>
              <td><?php echo $product[$i]['price'] ?></td>
              <td><?php echo $product[$i]['category'] ?></td>
              <td><?php echo $product[$i]['brand'] ?></td>
              <td><img src="<?php echo "../assets/images/uploads/".$product[$i]['image']; ?>" alt=""></td>
              <td>
                <!-- Update and Delete buttons -->
                <a href="update_product.php?id=<?php echo $product[$i]['id']; ?>" class="btn btn-primary btn-sm">Update</a>
                <a href="delete_product.php?id=<?php echo $product[$i]['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?');">Delete</a>
              </td>
            </tr>
            <?php } ?>
            <!-- Add more rows as needed -->
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

  
</body>
</html>