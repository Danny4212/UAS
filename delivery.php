<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>
<body>
    <h1>Checkout</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nama = htmlspecialchars($_POST['nama']);
        $alamat = htmlspecialchars($_POST['alamat']);
        $metode_pengiriman = htmlspecialchars($_POST['metode_pengiriman']);

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
        }

        echo "<p><strong>Biaya Pengiriman:</strong> Rp" . number_format($biaya_pengiriman, 0, ',', '.') . "</p>";
    } else {
        ?>
        <form method="POST" action="">
            <label for="nama">Nama:</label><br>
            <input type="text" id="nama" name="nama" required><br><br>

            <label for="alamat">Alamat:</label><br>
            <textarea id="alamat" name="alamat" required></textarea><br><br>

            <label for="metode_pengiriman">Metode Pengiriman:</label><br>
            <select id="metode_pengiriman" name="metode_pengiriman" required>
                <option value="JNT">JNT</option>
                <option value="JNE">JNE</option>
                <option value="Antar Langsung">Antar Langsung</option>
            </select><br><br>

            <button type="submit">Checkout</button>
        </form>
        <?php
    }
    ?>
</body>
</html>
