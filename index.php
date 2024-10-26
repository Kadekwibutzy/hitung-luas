<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Bangun Geometri</title>
    <style>
        .box {
            border: 1px solid #333;
            padding: 20px;
            margin: 20px;
            width: 300px;
        }
    </style>
</head>
<body>
    <h1>Hitung Luas dan Keliling</h1>

    <div class="box">
        <h2>Luas Persegi Panjang</h2>
        <form method="post">
            Panjang: <input type="number" name="panjang" required><br>
            Lebar: <input type="number" name="lebar" required><br>
            <button type="submit" name="hitungPersegiPanjang">Hitung</button>
        </form>
        <?php
        if (isset($_POST['hitungPersegiPanjang'])) {
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];
            $luasPersegiPanjang = $panjang * $lebar;
            echo "Luas: $luasPersegiPanjang";
        }
        ?>
    </div>

    <div class="box">
        <h2>Keliling Persegi</h2>
        <form method="post">
            Sisi: <input type="number" name="sisi" required><br>
            <button type="submit" name="hitungKelilingPersegi">Hitung</button>
        </form>
        <?php
        if (isset($_POST['hitungKelilingPersegi'])) {
            $sisi = $_POST['sisi'];
            $kelilingPersegi = 4 * $sisi;
            echo "Keliling: $kelilingPersegi";
        }
        ?>
    </div>

    <div class="box">
        <h2>Luas Segitiga</h2>
        <form method="post">
            Alas: <input type="number" name="alas" required><br>
            Tinggi: <input type="number" name="tinggi" required><br>
            <button type="submit" name="hitungLuasSegitiga">Hitung</button>
        </form>
        <?php
        if (isset($_POST['hitungLuasSegitiga'])) {
            $alas = $_POST['alas'];
            $tinggi = $_POST['tinggi'];
            $luasSegitiga = 0.5 * $alas * $tinggi;
            echo "Luas: $luasSegitiga";
        }
        ?>
    </div>

    <div class="box">
        <h2>Luas Lingkaran</h2>
        <form method="post">
            Jari-jari: <input type="number" name="jariJari" required><br>
            <button type="submit" name="hitungLuasLingkaran">Hitung</button>
        </form>
        <?php
        if (isset($_POST['hitungLuasLingkaran'])) {
            $jariJari = $_POST['jariJari'];
            $luasLingkaran = pi() * pow($jariJari, 2);
            echo "Luas: $luasLingkaran";
        }
        ?>
    </div>

    <div class="box">
        <h2>Keliling Lingkaran</h2>
        <form method="post">
            Jari-jari: <input type="number" name="jariJari2" required><br>
            <button type="submit" name="hitungKelilingLingkaran">Hitung</button>
        </form>
        <?php
        if (isset($_POST['hitungKelilingLingkaran'])) {
            $jariJari2 = $_POST['jariJari2'];
            $kelilingLingkaran = 2 * pi() * $jariJari2;
            echo "Keliling: $kelilingLingkaran";
        }
        ?>
    </div>
</body>
</html>
