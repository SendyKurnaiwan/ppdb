<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_orangtua;


class OrtuController extends Controller
{
    public function index()
    {
        return view('dashboard.data.ortu');
    }


public function simpan(Request $request)
    {
        $validatedData = $request->validate([
            'id_user' => 'required',
            'id_peserta' => 'required',
            'nama_ayah' => 'required',
            'telepon_ayah' => 'required',
            'tempat_lahir_ayah' => 'required',
            'tanggal_lahir_ayah' => 'required',
            'pendidikan_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'penghasilan_ayah' => 'required',
            // data ibu
            'nama_ibu' => 'required',
            'telepon_ibu' => 'required',
            'tempat_lahir_ibu' => 'required',
            'tanggal_lahir_ibu' => 'required',
            'pendidikan_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'penghasilan_ibu' => 'required'
        
        ]);
        // Simpan data ke database
        data_orangtua::create($validatedData);
    
        // Redirect atau tampilkan pesan sukses
        return redirect()->route('ortu')->with('gass', 'Data berhasil disimpan');
    }
}
