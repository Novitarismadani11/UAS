<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Beranda</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="transaksi.php">Transaksi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="keuangan.php">Keuangan</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-3">
                <!-- Sidebar -->
                <div class="list-group">
                    <a href="#submenu-dashboard" class="list-group-item list-group-item-action" data-toggle="collapse" aria-expanded="false">Dashboard</a>
                    <div class="collapse" id="submenu-dashboard">
                        <a href="transaksi.php" class="list-group-item list-group-item-action">Transaksi</a>
                        <a href="keuangan.php" class="list-group-item list-group-item-action">Keuangan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <!-- Content Area -->
                <h2>Selamat datang di Dashboard</h2>
                <p>Silakan pilih submenu di sebelah kiri.</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-2 mt-3">
        <p>&copy; 2023 Nama Perusahaan. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
