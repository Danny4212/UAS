<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            max-width: 600px;
        }
        h1, h2 {
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, textarea, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h1>Checkout</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nama = htmlspecialchars(trim($_POST['nama']));
        $alamat = htmlspecialchars(trim($_POST['alamat']));
        $metode_pengiriman = htmlspecialchars(trim($_POST['metode_pengiriman']));

        echo "<h2>Detail Pesanan</h2>";
        echo "<p><strong>Nama:</strong> $nama</p>";
        echo "<p><strong>Alamat:</strong> $alamat</p>";
        echo "<p><strong>Metode Pengiriman:</strong> $metode_pengiriman</p>";

        $biaya_pengiriman = 0;
        switch ($metode_pengiriman) {
            case 'JNT':
                $biaya_pengiriman = 20000;
                break;
            case 'JNE':
                $biaya_pengiriman = 25000;
                break;
            case 'Antar Langsung':
                $biaya_pengiriman = 0;
                break;
            default:
                echo "<p><strong>Error:</strong> Metode pengiriman tidak valid.</p>";
                break;
        }

        echo "<p><strong>Biaya Pengiriman:</strong> Rp" . number_format($biaya_pengiriman, 0, ',', '.') . "</p>";
    } else {
        ?>
        <form method="POST" action="">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" required></textarea>

            <label for="metode_pengiriman">Metode Pengiriman:</label>
            <select id="metode_pengiriman" name="metode_pengiriman" required>
                <option value="JNT">JNT</option>
                <option value="JNE">JNE</option>
                <option value="Antar Langsung">Antar Langsung</option>
            </select>

            <button type="submit">Checkout</button>
        </form>
        <?php
    }
    ?>
</body>
</html>