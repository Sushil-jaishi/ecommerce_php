<?php
require_once "database/connection.php";

session_start();
if(isset($_SESSION['username'])){

$customer_id=$_SESSION['id'] ;     
if(isset($_GET["id"])){
    $id=$_GET["id"];
    $sql="select * from cart where customer_id='$customer_id' and product_id='$id'";
    $result=$conn-> query($sql);
    if($result->num_rows==0){
    $sql = "insert into cart (customer_id,product_id) values ('$customer_id','$id')";
    $conn->query($sql); 
    header("location:cart.php");
    exit();
    }else{
        header("location:cart.php");
        exit();
}
}
}
?>  