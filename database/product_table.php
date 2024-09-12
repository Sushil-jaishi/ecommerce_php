<?php
require_once 'connection.php';

$sql = "create table product(
id int(6) AUTO_INCREMENT PRIMARY KEY ,
name varchar(20) NOT NULL,
description varchar(200) NOT NULL ,
price int(20) NOT NULL,
category varchar(20) not null,
brand varchar(20) not null,
image varchar(100) NOT NULL
)";

if ($conn->query($sql)==true){
    echo "Table product created successfully";
}
else{
    echo "Error creating table: " . $conn->error;
}

?> 