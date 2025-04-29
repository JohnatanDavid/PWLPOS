<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use App\Models\Pelanggan;
use App\Models\Kamar;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    // Menampilkan semua reservasi
    public function index()
    {
        $reservasi = Reservasi::with(['pelanggan', 'kamar'])->get();
        return view('reservasi.index', compact('reservasi'));
    }

    // Form tambah reservasi
    public function create()
    {
        $pelanggan = Pelanggan::all();
        $kamar = Kamar::all();
        return view('reservasi.create', compact('pelanggan', 'kamar'));
    }

    // Simpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'pelanggan_id' => 'required',
            'kamar_id' => 'required',
            'tanggal_check_in' => 'required|date',
            'tanggal_check_out' => 'required|date|after_or_equal:tanggal_check_in',
            'total_biaya' => 'required|integer',
        ]);

        Reservasi::create($request->all());

        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil ditambahkan.');
    }

    // Tampilkan detail pelanggan saat nama diklik
    public function show($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.show', compact('pelanggan'));
    }

    // Form edit
    public function edit($id)
    {
        $reservasi = Reservasi::findOrFail($id);
        $pelanggan = Pelanggan::all();
        $kamar = Kamar::all();
        return view('reservasi.edit', compact('reservasi', 'pelanggan', 'kamar'));
    }

    // Update data
    public function update(Request $request, $id)
    {
        $reservasi = Reservasi::findOrFail($id);
        $request->validate([
            'pelanggan_id' => 'required',
            'kamar_id' => 'required',
            'tanggal_check_in' => 'required|date',
            'tanggal_check_out' => 'required|date|after_or_equal:tanggal_check_in',
            'total_biaya' => 'required|integer',
        ]);

        $reservasi->update($request->all());

        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil diperbarui.');
    }

    // Hapus data
    public function destroy($id)
    {
        $reservasi = Reservasi::findOrFail($id);
        $reservasi->delete();

        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil dihapus.');
    }
}
