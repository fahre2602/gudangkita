<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = Barang::all() ;
        return view('barang', ['barangs'=>$barangs, 'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barangs = Barang::all() ;
        return view('barang', ['barangs'=>$barangs, 'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barang = new Barang() ;
        $barang->kode_barang = $request->input('kode_barang');
        $barang->nama_barang = $request->input('nama_barang');
        $barang->jenis_barang = $request->input('jenis_barang');
        $barang->jumlah_barang = $request->input('jumlah_barang');
        $barang->letak_barang = $request->input('letak_barang');
        $barang->save() ;
        return redirect('/') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barang::find($id);
        $barangs = Barang::all() ;
        return view('barang', ['barangs'=>$barangs, 'barang'=>$barang, 'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::find($id);
        $barangs = Barang::all() ;
        return view('barang', ['barangs'=>$barangs, 'barang'=>$barang, 'layout'=>'edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);
        $barang->kode_barang = $request->input('kode_barang');
        $barang->nama_barang = $request->input('nama_barang');
        $barang->jenis_barang = $request->input('jenis_barang');
        $barang->jumlah_barang = $request->input('jumlah_barang');
        $barang->letak_barang = $request->input('letak_barang');
        $barang->save() ;
        return redirect('/') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::find($id);
        $barang->delete() ;
        return redirect('/') ;
    }
}
