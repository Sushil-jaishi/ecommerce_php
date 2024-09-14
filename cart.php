<?php

require_once "database/connection.php";
session_start();
$customer_id= $_SESSION['id'];
if(isset($_GET['delete'])){
  $delete_id = $_GET['delete'];
  $sql = "delete from cart where customer_id='$customer_id' and product_id='$delete_id'";
  $conn->query($sql);
}
$sql = "select distinct * from cart inner join product on cart.product_id=product.id where cart.customer_id='$customer_id'";
$result=$conn->query($sql);
$cart=$result->fetch_all(MYSQLI_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart Page</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    /* Style to place checkout section on top of the cart */
    #checkout-section {
      display: none;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      background-color: rgba(255, 255, 255, 0.9); /* Slight transparency */
      z-index: 10; /* Make sure it stays on top */
    }
  </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container mt-5 position-relative">
    <div class="row justify-content-center">
      <div class="col-sm-12 col-md-6 col-lg-9">
        <table class="table text-center table-bordered">
          <thead class="text-white" style="background-color:#F3A9F5">
          <tr>
              <th>Serial No.</th>
              <th>Product Name</th>
              <th>Product Price</th>
              <th>Delete</th>
            </tr>
            <?php 
            for($i=0;$i<count($cart);$i++){
            ?>
            <tr>
              <td><?php echo $i+1; ?></td>
              <td><?php echo $cart[$i]['name']; ?></td>
              <td><?php echo $cart[$i]['price']; ?></td>
              <td><a href="cart.php?delete=<?php echo $cart[$i]['id']; ?>">delete</a></td>
            </tr>
            <?php } ?>
          </thead>
          </table>
          <div class="d-flex justify-content-end mt-3">
                <button class="btn btn-success btn-lg" onclick="showCheckout()">Proceed to Checkout</button>
            </div>
          </div>
        </div>
        <div id="checkout-section" class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header bg-primary text-white">
              <h4 class="text-center">Proceed to Checkout</h4>
            </div>
            <div class="card-body">
              <form action="order_process.php" method="POST">
                <!-- User Name -->
    

                <!-- Payment Method -->
                <div class="mb-3">
                  <label for="payment" class="form-label">Payment Method</label>
                  <select class="form-select" id="payment" name="payment" required>
                    <option value="" disabled selected>Select payment method</option>
                    <option value="cod">Cash on Delivery</option>
                    <option value="online">Online Payment</option>
                  </select>
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-between mt-4">
                  <button type="submit" class="btn btn-success btn-lg">Confirm Order</button>
                  <button type="button" class="btn btn-danger btn-lg" onclick="hideCheckout()">Cancel Order</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript to Toggle Checkout Section -->
<script>
function showCheckout() {
    document.getElementById('checkout-section').style.display = 'block';
}

function hideCheckout() {
    document.getElementById('checkout-section').style.display = 'none';
}
</script>
</body>
</html>










