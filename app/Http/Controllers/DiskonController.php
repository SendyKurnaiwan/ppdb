<?php

namespace App\Http\Controllers;

use App\Models\diskon;
use Illuminate\Http\Request;

class DiskonController extends Controller
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
        $data = diskon::all();
        return view('admin/diskon',compact('data'));
    }
    
    public function update(Request $request, $id)
    {
        $data = diskon::find($id);
        if ($request->hasFile('bukti_diskon')) {
        // Move the uploaded file to the destination
        $request->file('bukti_diskon')->move('bukti_diskon/', $request->file('bukti_diskon')->getClientOriginalName());

        // Update the 'bukti_diskon' field in the database
        $data->bukti_diskon = $request->file('bukti_diskon')->getClientOriginalName();
        }
        $data->update($request->except('bukti_diskon'));
        return redirect()->route('/admin/diskon')->with('success',' Data Berhasil Di Ubah');
    }
    public function hapus($id)
    {
        $data = diskon::find($id);
        $data->delete();
        return redirect()->route('/admin/diskon')->with('success',' Data Berhasil Di Hapus');
    }
}
