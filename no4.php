<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Gerak Objek</title>
</head>
<body>
<h2>Form Gerak Objek</h2>
    <form method="post">
        <label for="nama_objek">Nama Objek:</label>
        <input type="text" id="nama_objek" name="nama_objek" required><br><br>

        <label>Aksi:</label>
        <input type="radio" id="maju" name="aksi" value="maju" required>
        <label for="maju">Maju</label>
        <input type="radio" id="mundur" name="aksi" value="mundur" required>
        <label for="mundur">Mundur</label><br><br>

        <label for="jumlah">Jumlah:</label>
        <input type="number" id="jumlah" name="jumlah" required><br><br>

        <input type="submit" value="GO"><br><br>



        
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama_objek = $_POST['nama_objek'];
        $aksi = $_POST['aksi'];
        $jumlah = $_POST['jumlah']; 

        // echo "<h2>Output:</h2>";
        // echo "Nama Objek: $nama_objek<br>";
        // echo "aksi: $aksi<br>";
        // echo "Jumlah: $jumlah<br><br>";

        for ($i = 1; $i <= $jumlah; $i++) {
            if ($i % 3 == 0) {
                echo "$nama_objek <strong>tidak bergerak</strong> pada perhitungan ke-$i<br>"; 
            } else {
                echo "$nama_objek bergerak pada perhitungan ke-$i<br>";
            }
            echo "</li>";
        }
        echo "</ul>";
        echo "~selesai menghitung~";
    }
    ?>
</body>
</html>
