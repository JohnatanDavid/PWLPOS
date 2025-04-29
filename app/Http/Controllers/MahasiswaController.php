<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Nilai;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function showNilai($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $nilai = Nilai::with('mataKuliah')->where('mahasiswa_id', $id)->get();
        return view('mahasiswa.nilai', compact('mahasiswa', 'nilai'));
    }
}
