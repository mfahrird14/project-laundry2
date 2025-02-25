<!-- resources/views/transactions/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Daftar Transaksi</h2>
    <a href="{{ route('transactions.create') }}">Tambah Transaksi</a>
    
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Pelanggan</th>
                <th>Jumlah</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->id }}</td>
                    <td>{{ $transaction->customer->nama }}</td>
                    <td>Rp {{ number_format($transaction->amount, 2, ',', '.') }}</td>
                    <td>{{ ucfirst($transaction->status) }}</td>
                    <td>
                        <a href="{{ route('transactions.show', $transaction->id) }}">Lihat</a> | 
                        <a href="{{ route('transactions.edit', $transaction->id) }}">Edit</a> | 
                        <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
