<?php
$server_username = "root";
$server_password = "";
$server_host = "localhost";
$database = 'lytran';
 
$conn = mysqli_connect($server_host,$server_username,$server_password,$database) or die("không thể kết nối dữ liệu");
mysqli_query($conn,"SET NAMES 'UTF8'");
