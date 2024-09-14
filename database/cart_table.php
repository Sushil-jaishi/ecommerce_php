<?php

require_once "connection.php";
$sql = "CREATE TABLE cart (
    id int(6) primary key auto_increment,
    customer_id int not null ,
    product_id varchar(35) not null) ";

if($conn->query($sql)){
    echo "table created successfully";
}else{
    echo "table is not created ".$conn->error;
}

?>