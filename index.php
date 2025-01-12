<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Enuma Lens & Camera</title>
    <link rel="stylesheet" href="Enuma.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  </head>
  <body>
    <section class="home" id="home">
        <div class="home-text">
            <h1>We Rent Any Sony<br>Camera & <span>Lens</span> You Needs</h1>
            <p>Make Your Moment Captured Beautifully<br> Life Through the Lens!</p>
            <a href="#rent" class="button">Rent Now!</a>
        </div>
    </section>

    <section class="camera" id="camera">
        <div class="heading">
            <span>All Sony Camera Body</span>
            <h2>Amazing Quality Mirrorless Camera</h2>
            <p>Choose Your Favorite Camera Body!</p>
        </div>

        <div class="camera-container container">
            <div class="box">
                <img src="A7S.png" alt="">
                <h2>SONY A7S III</h2>
                <form method="post" action="add_to_cart.php">
                    <input type="hidden" name="id_produk" value="A7S">
                    <input type="hidden" name="nama_produk" value="SONY A7S III">
                    <input type="hidden" name="harga" value="3000"> 
                    <label for="jumlah">Jumlah:</label>
                    <input type="number" id="jumlah" name="jumlah" value="1" min="1">
                    <button type="submit" name="tambah_ke_keranjang">Tambah ke Keranjang</button>
                </form>
            </div>

            <div class="box">
                <img src="A7R.png" alt="">
                <h2>SONY A7RIV</h2>
                <form method="post" action="add_to_cart.php">
                    <input type="hidden" name="id_produk" value="A7R">
                    <input type="hidden" name="nama_produk" value="SONY A7RIV">
                    <input type="hidden" name="harga" value="300K"> 
                    <label for="jumlah">Jumlah:</label>
                    <input type="number" id="jumlah" name="jumlah" value="1" min="1">
                    <button type="submit" name="tambah_ke_keranjang">Tambah ke Keranjang</button>
                </form>

                
            </div>

            <div class="box">
                <img src="A7C.png" alt="">
                <h2>SONY A7CII</h2>
                <form method="post" action="add_to_cart.php">
                    <input type="hidden" name="id_produk" value="A7C">
                    <input type="hidden" name="nama_produk" value="SONY A7CII">
                    <input type="hidden" name="harga" value="3000"> 
                    <label for="jumlah">Jumlah:</label>
                    <input type="number" id="jumlah" name="jumlah" value="1" min="1">
                    <button type="submit" name="tambah_ke_keranjang">Tambah ke Keranjang</button>
                </form>

            </div>

            <div class="box">
                <img src="A9.png" alt="">
                <h2>SONY A9III</h2>
                <form method="post" action="add_to_cart.php">
                    <input type="hidden" name="id_produk" value="A9">
                    <input type="hidden" name="nama_produk" value="SONY A9III">
                    <input type="hidden" name="harga" value="3000"> 
                    <label for="jumlah">Jumlah:</label>
                    <input type="number" id="jumlah" name="jumlah" value="1" min="1">
                    <button type="submit" name="tambah_ke_keranjang">Tambah ke Keranjang</button>
                </form>

            </div>

            <div class="box">
                <img src="A7IV.png" alt="">
                <h2>SONY A7IV</h2>
                <form method="post" action="add_to_cart.php">
                    <input type="hidden" name="id_produk" value="A7IV">
                    <input type="hidden" name="nama_produk" value="SONY A7IV">
                    <input type="hidden" name="harga" value="3000"> 
                    <label for="jumlah">Jumlah:</label>
                    <input type="number" id="jumlah" name="jumlah" value="1" min="1">
                    <button type="submit" name="tambah_ke_keranjang">Tambah ke Keranjang</button>
                </form>

            </div>

            <div class="box">
                <img src="FX3.png" alt="">
                <h2>SONY FX-3</h2>
                <form method="post" action="add_to_cart.php">
                    <input type="hidden" name="id_produk" value="FX3">
                    <input type="hidden" name="nama_produk" value="SONY FX-3">
                    <input type="hidden" name="harga" value="3000"> 
                    <label for="jumlah">Jumlah:</label>
                    <input type="number" id="jumlah" name="jumlah" value="1" min="1">
                    <button type="submit" name="tambah_ke_keranjang">Tambah ke Keranjang</button>
                </form>

            </div>
        </div>
    </section>
    <section class="lens" id="lens">
        <div class="heading">
            <span>Our Special Lens</span>
            <h2>Amazing Photo, Amazing Lens!</h2>
            <p>Chose Your Favorite Lens!</p>
        </div>
        <div class="lens-container container">
            <div class="box">
                <img src="35.png" alt="">
                <h2>SONY FE 35MM GM</h2>
            </div>

            <div class="box">
                <img src="50.png" alt="">
                <h2>SONY FE 50MM GM</h2>
            </div>

            <div class="box">
                <img src="85.png" alt="">
                <h2>SONY FE 85MM GM</h2>
            </div>

            <div class="box">
                <img src="2470.png" alt="">
                <h2>SONY FE 24-70MM GM</h2>
            </div>

            <div class="box">
                <img src="1635.png" alt="">
                <h2>SONY FE 16-35MM GM</h2>
            </div>

            <div class="box">
                <img src="70200.png" alt="">
                <h2>SONY FE 70-200MM GMV</h2>
            </div>
    </section>
    <section class="about container" id="about">
        <div class="about-img">
            <img src="Fto baru/Home2.jpg" alt="">
        </div>
        <div class="about-text">
            <span>About Us</span>
            <h2>Cheap Prize <br>Amazing Experience!</h2>
            <p>Welcome to EnumaLens a place where passion meets creativity! Founded in 2022, we are a dedicated team of professionals who strive to bring you the best in digital solutions, Photography, Videography and Gear Rent. With a commitment to excellence and a love for Photography, we aim to provide a unique experience that goes beyond expectations.-</p>
            <a href="#" class="button">Learn More</a>
        </div>

    </section>
    <script src="script.js"></script>
  </body>
</html>
