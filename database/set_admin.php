<?php

require_once "connection.php";

$sql="insert into admin (email, password) values ('admin@123.com', '123')";
if($conn->query($sql)==true){
    echo "admin created successfully";
}else{
    echo "failed to create database".$conn->error;
}

?>