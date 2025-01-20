<?php

    include "service/database.php";

    $login_message = "";

    if(isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM users WHERE username = '$username' AND 
        password = '$password'";
        
        $result = $db->query($sql);

        if($result->num_rows> 0) {
            $data = $result->fetch_assoc();
            $_SESSION["username"] = $data["username"];
            $_SESSION["is_login"] = true;
            
            header ("location: index.html");

        } else {
            $login_message = "akun tidak ditemukan";
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

        .login-container {
            background-color: rgb(232, 214, 165);
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(7, 73, 117, 0.23);
            max-width: 400px;
            width: 100%;
        }

        .login-box {
            padding: 20px;
            background: rgba(255, 255, 255, 0.2);
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
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
        <h3>Masuk Akun</h3>
            <i> <?= $login_message  ?> </i>
            <form action="login.php" method="POST">
                <input type="text" placeholder="username" name="username"/>
                <input type="password" placeholder="password" name="password"/>
                <button type="submit" name="login">masuk sekarang</button>
            </form>
</body>
</html>