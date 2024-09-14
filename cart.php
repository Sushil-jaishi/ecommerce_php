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
  <title>Document</title>
</head>
<body>

<?php

include 'navbar.php';
?>

<div class="container mt-5">
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
          </div>
          </div>
          </div>
</body>
      



      




  

<?php

include 'footer.php'

?>
</body>
</html>