<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
// use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Helpers\Helper;

class Registrasi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('registrasi.index');
    }

    public function store(Request $request)
    {
        // // $id = IdGenerator::generate(['table' => 'users', 'field' => 'kode_pendaftaran', 'length' => 5, 'prefix' => 'KD']);
        // $id = Helper::IdGenerator(new User, 'kode_pendaftaran', 5, 'KD');
        $id = Helper::IdGenerator(User::class, 'kode_pendaftaran', 3, 'KD');

        $validatedData = $request->validate([
            'sumber_info' => 'required',
            'nama_lengkap' => 'required',
            'nomor_hp' => 'required|unique:users',
            'jenis_kelamin' => 'required',
            'asal_sekolah' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5',
            'gelombang_pendaftaran' => 'required'
        ]);

        $validatedData['kode_pendaftaran'] = $id;
        $validatedData['password'] = Hash::make($validatedData['password']);

    
        // Simpan data ke database
        User::create($validatedData);
    
        // Redirect atau tampilkan pesan sukses
        return redirect()->route('login')->with('Sukses', 'Data berhasil disimpan');
    }
}