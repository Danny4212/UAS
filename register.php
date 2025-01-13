<?php

    include "service/database.php";

    $register_message ="";

    if(isset($_SESSION["is_login"])) {
        header("location: index.html");
    }

    if(isset($_POST["register"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "INSERT INTO users (username, password) VALUES 
        ('$username', '$password')";

        if($db->query($sql)) {
            $register_message = "Daftar Akun Berhasil, Silahkan Login";
        } else {
            $register_message = "Daftar Akun Gagal, Coba Daftar Kembali";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('http://localhost/UAS/UAS/Fto baru/image.png');
            background-repeat: no-repeat;
            background-size: cover;
            color: #fff;
        }

        .register-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            backdrop-filter: blur(8px);
            background: rgba(0, 0, 0, 0.5);
        }

        .register-box {
            padding: 20px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        h3 {
            margin-bottom: 20px;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input {
            margin-bottom: 15px;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            outline: none;
        }

        button {
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            background: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background: #0056b3;
        }

        i {
            color:rgb(124, 13, 13);
            margin-bottom: 15px;
            display: block;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-box">
            <h3>Daftar Akun</h3>
                <i> <?= $register_message ?> </i>
                <form action="register.php" method="POST">
                    <input type="text" placeholder="username" name="username"/>
                    <input type="password" placeholder="password" name="password"/>
                    <button type="submit" name="register">Daftar sekarang</button>
                </form>
</body>
</html>