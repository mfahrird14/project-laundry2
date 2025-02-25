// Blade Template (resources/views/transactions/index.blade.php)
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Transaksi Laundry</h1>
    <form action="{{ route('transactions.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Outlet</label>
            <select name="outlet_id" class="form-control">
                @foreach($outlet as $outlet)
                    <option value="{{ $outlet->id }}">{{ $outlet->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Pelanggan</label>
            <select name="customer_id" class="form-control">
                @foreach($nama as $nama)
                    <option value="{{ $customer->id }}">{{ $customer->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Paket</label>
            <select name="package_id" class="form-control">
                @foreach($packages as $package)
                    <option value="{{ $package->id }}">{{ $package->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Tanggal Transaksi</label>
            <input type="date" name="transaction_date" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Batas Waktu</label>
            <input type="date" name="due_date" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Diskon</label>
            <input type="number" name="discount" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Pajak</label>
            <input type="number" name="tax" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-control">
                <option value="Baru">Baru</option>
                <option value="Proses">Proses</option>
                <option value="Selesai">Selesai</option>
                <option value="Diambil">Diambil</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Metode Pembayaran</label>
            <select name="payment_method" class="form-control">
                <option value="Tunai">Tunai</option>
                <option value="Transfer">Transfer</option>
                <option value="E-Wallet">E-Wallet</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Transaksi</button>
    </form>
</div>
@endsection
