<?php 

    require_once "database/connection.php";
    session_start();
    $customer_id= $_SESSION['id'];
    $sql="insert into sell (customer_id,product_id) select customer_id,product_id from cart where customer_id='$customer_id'";
    $conn->query($sql);
    $sql = "delete from cart where customer_id='$customer_id'";
    $conn->query($sql);
    header("location:index.php?message=order completed");
    exit();
?>