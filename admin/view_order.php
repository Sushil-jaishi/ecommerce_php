<?php 
require_once "../database/connection.php";

$sql= "select * from sell left join customer on sell.customer_id=customer.id left join product on sell.product_id=product.id";    
$result = $conn->query($sql);
$product = $result -> fetch_all(MYSQLI_ASSOC);
// var_dump($product);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Order Details</title>
    <link rel="stylesheet" href="view_order.css">
</head>
<body>
    <table> <h2>Order Detail</h2>
        <thead>
            <tr>
                <th>S.N.</th>
                <th>Customer Name</th>
                <th>Customer Contact</th>
                <th>Product Name</th>
                <th>Total Amount</th>
            </tr>
            <?php 
             for($i=0;$i<count($product);$i++){
             ?>
            <tr>
              <td><?php echo $i+1; ?></td>
              <td><?php echo $product[$i]['username'] ?></td>
              <td><?php echo $product[$i]['contact'] ?></td>
              <td><?php echo $product[$i]['name'] ?></td>
              <td><?php echo $product[$i]['price'] ?></td>
            </tr>
            <?php } ?>
        </thead>
        <tbody>
            </tbody>
    </table>
</body>
</html>