<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pelanggan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .animated-hr {
            position: relative;
            opacity: 0;
            transform: translateY(25px); /* Bergerak dari bawah ke atas */
            transition: opacity 0.5s ease-in-out, transform 2s ease-in-out;
        }

        .animated-hr.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="mt-5">Selamat Datang, [Nama Pelanggan]</h1>
                <p class="lead">Cek Status Pesanan Anda.</p>
            </div>
        </div>

        <div class="alert alert-info mt-4">
            <strong>Promo Spesial!</strong> Dapatkan diskon 20% untuk pesanan di atas Rp 100.000. Berlaku hingga 28 Februari 2025.
        </div>
        
        {{-- Status Pesanan  --}}
        <div class="row mt-5">
            <div class="col-md-12">
                <h3>Status Pesanan Anda</h3>
                <p></p>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Cari berdasarkan paket atau tanggal">
                    </div>
                    <div class="col-md-3">
                        <select class="form-select">
                            <option value="">Semua Status</option>
                            <option value="Diproses">Diproses</option>
                            <option value="Sedang Dicuci">Sedang Dicuci</option>
                            <option value="Selesai">Selesai</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-secondary">Cari</button>
                    </div>
                </div>
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
                            <td><span class="badge bg-danger">Belum Bayar</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Cuci Setrika</td>
                            <td>8 Februari 2025</td>
                            <td><span class="badge bg-success">Selesai</span></td>
                            <td>Rp 70.000</td>
                            <td><span class="badge bg-danger">Belum Bayar</span></td>
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

         {{-- Notifikasi Pesanan Selesai  --}}
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="alert alert-success" role="alert">
                    Pesanan <strong>#2</strong> telah selesai! Silakan ambil laundry Anda.
                </div>
            </div>
        </div>

        {{--  Riwayat Pesanan  --}}
        <h3 class="mt-5">Riwayat Pesanan</h3>
        <p></p>
        <div class="row mt-3">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Cari berdasarkan paket atau tanggal">
            </div>
            <div class="col-md-3">
                <select class="form-select">
                    <option value="">Semua Status</option>
                    <option value="Diproses">Diproses</option>
                    <option value="Sedang Dicuci">Sedang Dicuci</option>
                    <option value="Selesai">Selesai</option>
                </select>
            </div>
            <div class="col-md-3">
                <button class="btn btn-secondary">Cari</button>
            </div>
        </div>
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
                    <td>5 Januari 2025</td>
                    <td><span class="badge bg-success">Selesai</span></td>
                    <td>Rp 60.000</td>
                    <td><span class="badge bg-success">Sudah Bayar</span></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Cuci Kering</td>
                    <td>12 Januari 2025</td>
                    <td><span class="badge bg-success">Selesai</span></td>
                    <td>Rp 60.000</td>
                    <td><span class="badge bg-success">Sudah Bayar</span></td>
                </tr>
            </tbody>
        </table>
    </div>  
    <div class="animated-hr">
        <div class="mt-5 text-center">
            <h4>Butuh Bantuan?</h4>
            <p>Hubungi kami di <a href="tel:+628123456789">+62 812-3456-789</a> atau email ke <a href="mailto:support@laundry.com">support@laundry.com</a></p>
        </div>
        <br>     
    </div>

    <script>
        document.addEventListener("scroll", function () {
            var animatedHr = document.querySelector(".animated-hr");
            var position = animatedHr.getBoundingClientRect().top;
            var windowHeight = window.innerHeight;
    
            if (position < windowHeight) {
                animatedHr.classList.add("visible");
            }
        });
    </script>
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
