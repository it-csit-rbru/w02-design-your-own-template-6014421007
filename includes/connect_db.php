<?php

//กำหนดตั้งค่า database ทั้งหมด
$configs = [
    "host" => "localhost",
    "username" => "root",
    "password" => "root",
    "db_name" => "php-pro"
];
// ทำการ connect database
$connect = new mysqli( 
    $configs["host"], 
    $configs["username"], 
    $configs["password"],
    $configs["db_name"]
);
// ทำการ check login
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}