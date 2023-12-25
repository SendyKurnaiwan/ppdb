<?php

namespace App\Http\Controllers;

use App\Models\data_orangtua;
use Illuminate\Http\Request;

class DataOrangtuaController extends Controller
{
    public function __construct()

    {

        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index()
    {
        $data = data_orangtua::all();
        return view('admin/data_orangtua',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = data_orangtua::find($id);
        $data->update($request->all());
        return redirect()->route('/admin/orangtua')->with('success',' Data Berhasil Di Ubah');
    }
    public function hapus($id)
    {
        $data = data_orangtua::find($id);
        $data->delete();
        return redirect()->route('/admin/orangtua')->with('success',' Data Berhasil Di Hapus');
    }
}
