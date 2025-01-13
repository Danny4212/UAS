<?php

$conn = mysqli_connect('localhost','root','','cart_db');

if ($conn) { 
    
} else {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>