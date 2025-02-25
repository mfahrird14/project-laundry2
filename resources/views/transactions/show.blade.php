<!-- resources/views/transactions/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Detail Transaksi</h2>
    <p><strong>ID:</strong> {{ $transaction->id }}</p>
    <p><strong>Pelanggan:</strong> {{ $transaction->customer->nama }}</p>
    <p><strong>Jumlah:</strong> Rp {{ number_format($transaction->amount, 2, ',', '.') }}</p>
    <p><strong>Status:</strong> {{ ucfirst($transaction->status) }}</p>
    <br>
    <a href="{{ route('transactions.index') }}">Kembali</a>
@endsection
