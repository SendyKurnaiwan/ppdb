<?php

namespace App\Http\Controllers;

use App\Models\data_peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class DataPesertaController extends Controller
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
        $data = data_peserta::with('user')->get();
        return view('admin/data_peserta',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = data_peserta::find($id);
        $data->update($request->all());
        return redirect()->route('/admin/peserta')->with('success',' Data Berhasil Di Ubah');
    }
    public function hapus(Request $request)
    {
        data_peserta::whereIn('id', $request->get('selected'))->delete();
        return redirect()->route('/admin/peserta')->with('success',' Data Berhasil Di Hapus');
    }
    public function multihapus(Request $request){
        $id = $request->id;
        data_peserta::whereIn('id', $id)->delete();
        return redirect()->route('/admin/peserta')->with('success',' Data-Data Berhasil Di Hapus');
    }
    public function multiupdate(Request $request){
        $id = $request->id;
        data_peserta::whereIn('id', $id)->update($request->all());
        return redirect()->route('/admin/peserta')->with('success',' Data-Data Berhasil Di Hapus');
    }
}
