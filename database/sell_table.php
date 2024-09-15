<?php

require_once "connection.php";
$sql = "CREATE TABLE sell (
    id int(6) primary key auto_increment,
    customer_id int not null ,
    product_id int not null,
    FOREIGN KEY (customer_id) references customer(id) on delete cascade,
    FOREIGN KEY (product_id) references product(id) on delete cascade
    ) ";


if($conn->query($sql)){
    echo "table created successfully";
}else{
    echo "table is not created ".$conn->error;
}

?>