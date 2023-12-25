<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Dflydev\DotAccessData\Data;

class DataUserController extends Controller
{
    public function __construct()

    {

        $this->middleware('auth');

    }

    function index()
    {
        
        $data = User::all();        
        return view('admin/data_user',compact('data'));
    }
    
    public function update(Request $request, $id)
    {
        $data = User::find($id);
        $data->fill($request->all());
        $data->save();
        return redirect()->route('/admin/user')->with('success',' Data Berhasil Di Ubah');
    }
    public function hapus($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('/admin/user')->with('success',' Data Berhasil Di Hapus');
    }
}
