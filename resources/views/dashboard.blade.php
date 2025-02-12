<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pelanggan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="mt-5">Selamat Datang, [Nama Pelanggan]</h1>
                <p class="lead">Cek status pesanan dan buat pesanan baru dengan mudah.</p>
            </div>
        </div>


        <!-- Status Pesanan -->
        <div class="row mt-5">
            <div class="col-md-12">
                <h3>Status Pesanan Anda</h3>
                <p></p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Paket</th>
                            <th>Tanggal</th>
                            <th>Status Cucian</th>
                            <th>Total Harga</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Cuci Kering</td>
                            <td>10 Februari 2025</td>
                            <td><span class="badge bg-danger">Diproses</span></td>
                            <td>Rp 50.000</td>
                            <td><span class="badge bg-danger">Belum Dibayar</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Cuci Setrika</td>
                            <td>8 Februari 2025</td>
                            <td><span class="badge bg-success">Selesai</span></td>
                            <td>Rp 70.000</td>
                            <td><span class="badge bg-danger">Belum Dibayar</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Cuci Setrika</td>
                            <td>11 Februari 2025</td>
                            <td><span class="badge bg-warning">Sedang Dicuci</span></td>
                            <td>Rp 65.000</td>
                            <td><span class="badge bg-success">Sudah Bayar</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Notifikasi Pesanan Selesai -->
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="alert alert-success" role="alert">
                    Pesanan <strong>#2</strong> telah selesai! Silakan ambil laundry Anda.
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
