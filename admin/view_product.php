
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
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td><img src="" alt=""></td>
              <td>
                <!-- Update and Delete buttons -->
                <button class="btn btn-primary btn-sm">Update</button>
                <button class="btn btn-danger btn-sm">Delete</button>
              </td>
            </tr>
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