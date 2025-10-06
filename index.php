<?php
session_start();
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Sewa Alat Outdoor & Camping</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="header">
    <div class="container header-container">
      
      <div class="header-controls">
        <a href="login.php" class="login-link-header"><b>Login</b></a>
        <button class="dark-mode-toggle" id="darkModeToggle">Dark Mode</button>
      </div>
      
      <h1 class="logo">Sistem Sewa Alat Outdoor & Camping</h1>
      <p class="tagline">Solusi mudah untuk menyewa perlengkapan outdoor dan camping. Mulai petualanganmu sekarang!</p>
      <nav class="navigation">
        <ul class="nav-list">
          <li class="nav-item"><a href="#about" class="nav-link">Tentang</a></li>
          <li class="nav-item"><a href="#services" class="nav-link">Layanan</a></li>
          <li class="nav-item"><a href="#how" class="nav-link">Cara Sewa</a></li>
          <li class="nav-item"><a href="#contact" class="nav-link">Kontak</a></li>
          </ul>
      </nav>
    </div>
  </header>

  <main>
    <section id="about" class="section">
      <div class="container">
        <h2 class="section-title">Tentang</h2>
        <p>Kami menyediakan berbagai macam perlengkapan outdoor dan camping dengan kualitas terbaik dan harga terjangkau. Mulai dari tenda, sleeping bag, hingga peralatan masak, semua tersedia untuk mendukung petualangan Anda.</p>
      </div>
    </section>

    <section id="services" class="section">
      <div class="container">
        <h2 class="section-title">Layanan Kami</h2>
        <div class="services-grid">
          <article class="card service-card" id="card-rent">
            <h3 class="card-title">Sewa Perlengkapan</h3>
            <p class="card-description">Tenda, matras, sleeping bag, kompor portable, dan lainnya.</p>
          </article>
          <article class="card service-card" id="card-trip">
            <h3 class="card-title">Paket Trip & Perlengkapan</h3>
            <p class="card-description">Paket lengkap untuk keluarga, solo traveller, atau kelompok pendaki.</p>
          </article>
        </div>
      </div>
    </section>

    <section id="how" class="section">
      <div class="container">
        <h2 class="section-title">Cara Sewa</h2>
        <ol class="how-list">
          <li class="how-item">Pilih perlengkapan atau paket yang diinginkan.</li>
          <li class="how-item">Tentukan tanggal dan durasi sewa.</li>
          <li class="how-item">Konfirmasi dan lakukan pembayaran.</li>
          <li class="how-item">Ambil di lokasi atau gunakan layanan antar.</li>
        </ol>
      </div>
    </section>

    <section id="contact" class="section">
      <div class="container">
        <h2 class="section-title">Kontak</h2>
        <address class="contact-address">
          <p>Email: sewaalatoutdoorcamping@gmail.com</p>
          <p>Telp: 0821-4869-9022</p>
          <p id="contact-status"></p>
        </address>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="container">
      <p>&copy; 2025 Sistem Sewa Alat Outdoor & Camping</p>
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>