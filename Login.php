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
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('http://localhost/UAS/UAS/Fto baru/image.png');
            background-repeat: no-repeat;
            background-size: cover;
            color: #fff;
        }

        .login-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            backdrop-filter: blur(8px);
            background: rgba(0, 0, 0, 0.5);
        }

        .login-box {
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
            color: #ff6b6b;
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