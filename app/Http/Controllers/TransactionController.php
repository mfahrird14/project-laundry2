<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Customer;
use App\Models\Outlet;

class TransactionController extends Controller
{
    /**
     * Menampilkan daftar transaksi.
     */
    public function index()
    {
        $transactions = Transaction::with('customer')->orderBy('created_at', 'desc')->get();
        return view('transactions.index', compact('transactions'));
    }

    /**
     * Menampilkan form untuk membuat transaksi baru.
     */
    public function create()
{
    $outlet = Outlet::all(); // Ambil semua outlet dari database
    $customers = Customer::all(); // Ambil semua pelanggan

    return view('transactions.create', compact('outlet', 'customers'));
}


    /**
     * Menyimpan transaksi baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'amount' => 'required|numeric|min:0',
            'status' => 'required|in:pending,completed,canceled',
        ]);

        Transaction::create($request->all());

        return redirect()->route('transactions.index')->with('success', 'Transaksi berhasil ditambahkan!');
    }

    /**
     * Menampilkan detail transaksi tertentu.
     */
    public function show($id)
    {
        $transaction = Transaction::with('customer')->findOrFail($id);
        return view('transactions.show', compact('transaction'));
    }

    /**
     * Menampilkan form edit transaksi.
     */
    public function edit($id)
    {
        $transaction = Transaction::findOrFail($id);
        $customers = Customer::all();
        return view('transactions.edit', compact('transaction', 'customers'));
    }

    /**
     * Memperbarui transaksi yang ada di database.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'amount' => 'required|numeric|min:0',
            'status' => 'required|in:pending,completed,canceled',
        ]);

        $transaction = Transaction::findOrFail($id);
        $transaction->update($request->all());

        return redirect()->route('transactions.index')->with('success', 'Transaksi berhasil diperbarui!');
    }

    /**
     * Menghapus transaksi dari database.
     */
    public function destroy($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();

        return redirect()->route('transactions.index')->with('success', 'Transaksi berhasil dihapus!');
    }
}
