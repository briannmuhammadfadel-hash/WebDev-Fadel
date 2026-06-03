<?php
// Hubungkan ke database
$koneksi = mysqli_connect("localhost", "root", "", "game_catalog");

// Jika gagal koneksi, tampilkan error
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data dari tabel games yang asli
$query = "SELECT * FROM games";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Game Digital</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <h1>🎮 GameFaddfebb</h1>
        <p>Koleksi Game Digital Saya 2026</p>
    </header>

    <main class="katalog">
        
        <?php 
        // Lakukan perulangan data game asli
        while($row = mysqli_fetch_assoc($result)) { 
        ?>
            <div class="kartu-game">
                <img src="<?php echo $row['cover_url']; ?>" alt="<?php echo $row['judul']; ?>">
                <div class="info-game">
                    <h3><?php echo $row['judul']; ?></h3>
                    <p class="genre">⭐ <?php echo $row['rating']; ?> | <?php echo $row['platform']; ?></p>
                </div>
            </div>
        <?php 
        } 
        ?>

    </main>

    <footer>
        <p>&copy; 2026 GameVault. Terhubung Terbuka.</p>
    </footer>

</body>
</html>
