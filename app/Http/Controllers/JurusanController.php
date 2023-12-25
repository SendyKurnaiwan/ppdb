<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function PPLG()
    {
        return view('jurusan.pplg', [
            'title' => 'Jurusan PPLG',
            'active' => 'jurusan'
        ]);
    }

    public function TJKT()
    {
        return view('jurusan.tjkt', [
            'title' => 'Jurusan TJKT',
            'active' => 'jurusan'
        ]);
    }

    public function DKV()
    {
        return view('jurusan.dkv', [
            'title' => 'Jurusan DKV',
            'active' => 'jurusan'
        ]);
    }

    public function Akuntansi()
    {
        return view('jurusan.ak', [
            'title' => 'Jurusan Akuntansi',
            'active' => 'jurusan'
        ]);
    }
}
