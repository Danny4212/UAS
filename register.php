<?php

    include "service/database.php";

    $register_message ="";

    if(isset($_SESSION["is_login"])) {
        header("location: register.php");
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
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url('http://localhost/UAS/UAS/Fto baru/image.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            color: black;
        }

        .register-container {
            background-color: rgb(232, 214, 165);
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(7, 73, 117, 0.23);
            max-width: 400px;
            width: 100%;
        }

        .register-box {
            padding: 20px;
            background: rgba(26, 25, 25, 0.2);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        h3 {
            font-style: bold;
            text-align: center;
            margin-bottom: 20px;
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
            color:rgb(41, 11, 130);
            margin-bottom: 15px;
            display: block;
        }

        .link {
            margin-top: 20px;
            text-align: center;
        }

        .link a {
            color: rgb(2, 41, 29);;
            text-decoration: none;
            font-weight: bold;
        }

        .link a:hover {
            text-decoration: underline;
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
                <div class ="link">
                    <p><a href="login.php">Login Akun</a></p>
                </div>
</body>
</html>