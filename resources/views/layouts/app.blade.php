<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kasir</title>
</head>
<body>
    <header>
        <h1>Dashboard Kasir</h1>
        <nav>
            <a href="{{ route('transactions.index') }}">Transaksi</a>
            <a href="{{ route('transactions.create') }}">Tambah Transaksi</a>
        </nav>
        <hr>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
