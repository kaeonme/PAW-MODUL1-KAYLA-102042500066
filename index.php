<?php
$produk_list = [
    [
        "nama" => "Wireless Mouse",
        "kategori" => "Aksesoris",
        "harga" => 150000,
        "stok" => 12
    ],
    [
        "nama" => "Mechanical Keyboard",
        "kategori" => "Aksesoris",
        "harga" => 450000,
        "stok" => 5
    ],
    [
        "nama" => "Headset Gaming",
        "kategori" => "Audio",
        "harga" => 350000,
        "stok" => 0 // Contoh stok habis
    ],
    [
        "nama" => "Monitor 24 Inch",
        "kategori" => "Display",
        "harga" => 1800000,
        "stok" => 3
    ],
    [
        "nama" => "Webcam Full HD",
        "kategori" => "Kamera",
        "harga" => 250000,
        "stok" => 0 // Contoh stok habis
    ],
    [
        "nama" => "USB Flashdisk 64GB",
        "kategori" => "Penyimpanan",
        "harga" => 85000,
        "stok" => 20
    ]
];

// Menghitung total seluruh produk secara otomatis (Ketentuan 11)
$total_produk = count($produk_list);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cia Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header / Navbar -->
    <header class="site-header">
        <h1>Cia Store</h1>
        <nav class="site-nav">
            <a href="#">Home</a>
            <a href="#produk">Products</a>
            <a href="#">About</a>
        </nav>
    </header>

    <!-- Mid Section -->
    <section class="mid-section">
        <div class="hero-content">
            <h2>Simple Tech Store.</h2>
            <p>Temukan berbagai perangkat dan aksesoris teknologi untuk kebutuhanmu.</p>
            <a href="#produk" class="btn-hero">Lihat Produk</a>
        </div>
    </section>

    <!-- Section Katalog Produk -->
    <section id="produk" class="product-section">
        <div class="catalog-header">
            <div>
                <p class="subtitle">OUR PRODUCTS</p>
                <h2>Katalog Produk</h2>
            </div>
            <div class="total-badge">
                Total Produk: <strong><?php echo $total_produk; ?></strong>
            </div>
        </div>

        <div class="product-container">
            <?php foreach ($produk_list as $produk): ?>
                <div class="card">
                    <h3><?php echo $produk['nama']; ?></h3>
                    <p class="category"><?php echo $produk['kategori']; ?></p>
                    <p class="price">Rp <?php echo number_format($produk['harga'], 0, ',', '.'); ?></p>

                    <?php if ($produk['stok'] > 0): ?>
                        <p class="status in-stock">Status: Tersedia (Stok: <?php echo $produk['stok']; ?>)</p>
                        <button class="btn-buy">Beli Sekarang</button>
                    <?php else: ?>
                        <p class="status out-of-stock">Status: Stok Habis</p>
                        <button class="btn-buy disabled" disabled>Stok Habis</button>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    </body>
</html>

