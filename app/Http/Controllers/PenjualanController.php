<?php

namespace App\Http\Controllers;

use App\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjualans = Penjualan::all() ;
        return view('penjualan', ['penjualans'=>$penjualans, 'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penjualans = Penjualan::all() ;
        return view('penjualan', ['penjualans'=>$penjualans, 'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penjualan = new Penjualan() ;
        $penjualan->nama_pembeli = $request->input('nama_pembeli');
        $penjualan->email = $request->input('email');
        $penjualan->no_telepon = $request->input('no_telepon');
        $penjualan->mobil_id = $request->input('mobil_id');
        $penjualan->save() ;
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
        $penjualan = Penjualan::find($id);
        $penjualans = Penjualan::all() ;
        return view('penjualan', ['penjualans'=>$penjualans, 'penjualan'=>$penjualan, 'layout'=>'show']);
    }

    public function rekap()
    {
        $penjualans = Penjualan::all() ;
        return view('penjualan', ['penjualans'=>$penjualans, 'layout'=>'rekap']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penjualan = Penjualan::find($id);
        $penjualans = Penjualan::all() ;
        return view('penjualan', ['penjualans'=>$penjualans, 'penjualan'=>$penjualan, 'layout'=>'edit']);
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
        $penjualan = Penjualan::find($id);
        $penjualan->nama_pembeli = $request->input('nama_pembeli');
        $penjualan->email = $request->input('email');
        $penjualan->no_telepon = $request->input('no_telepon');
        $penjualan->mobil_id = $request->input('mobil_id');
        $penjualan->save() ;
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
        $penjualan = Penjualan::find($id);
        $penjualan->delete() ;
        return redirect('/') ;
    }
}
