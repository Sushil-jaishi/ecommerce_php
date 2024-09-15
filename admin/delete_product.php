<?php
require_once "../database/connection.php";

if (isset($_GET['id'])) {
    $productId = $_GET['id'];
    
    // Delete product
    $sql = "DELETE FROM product WHERE id = '$productId'";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: view_product.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
