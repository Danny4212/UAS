<?php


$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "shop_db";

$db = mysqli_connect($hostname, $username, $password, $database_name);

    if ($db->connect_error) {
    echo 'koneksi database rusak';
    die('error!');
    }
?>