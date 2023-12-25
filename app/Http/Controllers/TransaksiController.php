<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use Illuminate\Http\Request;

class transaksiController extends Controller
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

    function indexdashboard()
    {
        return view('dashboard.transaksi');
    }

    function index()
    {
        $data = transaksi::all();
        return view('admin/transaksi',compact('data'));
    }
    
    public function update(Request $request, $id)
    {
        $data = transaksi::find($id);
        if ($request->hasFile('bukti_transfer')) {
        // Move the uploaded file to the destination
        $request->file('bukti_transfer')->move('bukti_transfer/', $request->file('bukti_transfer')->getClientOriginalName());

        // Update the 'bukti_diskon' field in the database
        $data->bukti_transfer = $request->file('bukti_transfer')->getClientOriginalName();
        }
        $data->update($request->except('bukti_transfer'));
        return redirect()->route('/admin/transaksi')->with('success',' Data Berhasil Di Ubah');
    }
    public function hapus($id)
    {
        $data = transaksi::find($id);
        $data->delete();
        return redirect()->route('/admin/transaksi')->with('success',' Data Berhasil Di Hapus');
    }
}
