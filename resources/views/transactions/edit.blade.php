<!-- resources/views/transactions/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>Edit Transaksi</h2>
    <form method="POST" action="{{ route('transactions.update', $transaction->id) }}">
        @csrf
        @method('PUT')

        <label for="customer_id">Pelanggan:</label>
        <select name="customer_id" required>
            @foreach ($customers as $customer)
                <option value="{{ $customer->id }}" {{ $customer->id == $transaction->customer_id ? 'selected' : '' }}>
                    {{ $customer->nama }}
                </option>
            @endforeach
        </select>
        <br><br>

        <label for="amount">Jumlah:</label>
        <input type="number" name="amount" value="{{ $transaction->amount }}" required><br><br>

        <label for="status">Status:</label>
        <select name="status" required>
            <option value="pending" {{ $transaction->status == 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="completed" {{ $transaction->status == 'completed' ? 'selected' : '' }}>Completed</option>
            <option value="canceled" {{ $transaction->status == 'canceled' ? 'selected' : '' }}>Canceled</option>
        </select>
        <br><br>

        <button type="submit">Update</button>
    </form>
@endsection
