<?php
include '../DB/koneksi.php'; // Pastikan koneksi.php ada di TUBES/DB/

// Ambil data vila dari database
$query = mysqli_query($koneksi, "SELECT * FROM vila ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>VilaGo - Daftar Vila</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
      <a class="navbar-brand" href="#">VilaGo</a>
      <div>
        <a class="btn btn-light" href="login.php">Login</a>
      </div>
    </div>
  </nav>

  <!-- Daftar Vila -->
  <div class="container my-5">
    <h2 class="text-center mb-4">Daftar Vila</h2>
    <div class="row">
      <?php while ($row = mysqli_fetch_assoc($query)) : ?>
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img src="../img/<?= htmlspecialchars($row['gambar']) ?>" class="card-img-top" alt="<?= htmlspecialchars($row['nama']) ?>">
            <div class="card-body">
              <h5 class="card-title"><?= htmlspecialchars($row['nama']) ?></h5>
              <p class="card-text">Lokasi: <?= htmlspecialchars($row['lokasi']) ?></p>
              <a href="detail.php?id=<?= $row['id'] ?>" class="btn btn-success">Lihat Detail</a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-success text-white text-center py-3">
    &copy; 2025 VilaGo
  </footer>

  <!-- JS Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
