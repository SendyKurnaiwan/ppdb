<?php

namespace App\Http\Controllers;

use App\Models\data_lengkap;
use App\Models\data_orangtua;
use Illuminate\Http\Request;

class DataLengkapController extends Controller
{
    public function __construct()

    {

        $this->middleware('auth');

    }
    function index()
    {
        $data = data_orangtua::all();
        return view('admin/data_lengkap',compact('data'));
    }
}