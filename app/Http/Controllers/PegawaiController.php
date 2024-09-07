<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtPegawai = pegawai::all(); // Mengambil semua data pegawai
        return view('Pegawai.Data-pegawai', compact('dtPegawai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pegawai.Create-pegawai');
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    // Validasi data sebelum menyimpan
    $validatedData = $request->validate([
        'nama' => 'required|string|max:255',
        'alamat' => 'required|string|max:255',
        'tglhr' => 'required|date',
    ]);

    // Simpan data ke dalam tabel pegawai
    Pegawai::create([
        'nama' => $validatedData['nama'],
        'alamat' => $validatedData['alamat'],
        'tglhr' => $validatedData['tglhr'],
    ]);

    // Redirect ke halaman data-pegawai dengan pesan sukses (opsional)
    return redirect()->route('data-pegawai')->with('success', 'Data pegawai berhasil disimpan!');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
