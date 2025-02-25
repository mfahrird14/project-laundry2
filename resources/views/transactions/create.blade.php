<!-- resources/views/transactions/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Tambah Transaksi</h2>
    <form method="POST" action="{{ route('transactions.store') }}">
        @csrf
        <label for="customer_id">Pelanggan:</label>
        <select name="customer_id" required>
            <option value="">Pilih Pelanggan</option>
            @foreach ($customers as $customer)
                <option value="{{ $customer->id }}">{{ $customer->nama }}</option>
            @endforeach
        </select>
        <br><br>

        @if(isset($outlet) && count($outlet) > 0)
            <label for="outlet_id">Pilih Outlet:</label>
            <select name="outlet_id" required>
                <option value="">Pilih Outlet</option>
                @foreach ($outlet as $o)
                    <option value="{{ $o->id }}">{{ $o->name }}</option>
                @endforeach
            </select>
        @endif



        <label for="amount">Jumlah:</label>
        <input type="number" name="amount" required><br><br>

        <label for="status">Status:</label>
        <select name="status" required>
            <option value="pending">Pending</option>
            <option value="completed">Completed</option>
            <option value="canceled">Canceled</option>
        </select>
        <br><br>

        <button type="submit">Simpan</button>
    </form>
@endsection
