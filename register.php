<?php

    include "service/database.php";

    if(isset($_POST["register"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "INSERT INTO users (username, password) VALUES 
        ('$username', '$password)";

        if($db->query($sql)) {
            echo "Mantap, Data berhasil Masuk";
        } else {
            echo "Data tidak berhasil masuk";
        }
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Daftar Akun</h3>
    <form action="register.php" method="POST">
        <input type="text" placeholder="username" name="username"/>
        <input type="password" placeholder="password" name="password"/>
        <button type="submit" name="register">Daftar sekarang</button>
    </form>
</body>
</html>