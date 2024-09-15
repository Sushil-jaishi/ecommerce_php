<?php 
require_once "../database/connection.php";

$sql= "select * from customer";
$result = $conn->query($sql);
$customer = $result -> fetch_all(MYSQLI_ASSOC);
// var_dump($customer);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Order Details</title>
    <link rel="stylesheet" href="view_order.css">
</head>
<body>
    <table> <h2>User's Detail</h2>
        <thead>
            <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
            <?php 
             for($i=0;$i<count($customer);$i++){
             ?>
            <tr>
              <td><?php echo $i+1; ?></td>
              <td><?php echo $customer[$i]['username'] ?></td>
              <td><?php echo $customer[$i]['email'] ?></td>
              <td><?php echo $customer[$i]['contact'] ?></td>
              <td><?php echo $customer[$i]['address'] ?></td>
              <td>
                <!-- Update and Delete buttons -->
                <a href="delete_customer.php?id=<?php echo $customer[$i]['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this customer?');">Delete</a>
              </td>
            </tr>
            <?php } ?>
        </thead>
        <tbody>
            </tbody>
    </table>
</body>
</html>