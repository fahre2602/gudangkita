<?php

namespace App\Http\Controllers;

use App\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobils = Mobil::all() ;
        return view('mobil', ['mobils'=>$mobils, 'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mobils = Mobil::all() ;
        return view('mobil', ['mobils'=>$mobils, 'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mobil = new Mobil() ;
        $mobil->nama = $request->input('nama');
        $mobil->harga = $request->input('harga');
        $mobil->stock = $request->input('stock');
        $mobil->save() ;
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
        $mobil = Mobil::find($id);
        $mobils = Mobil::all() ;
        return view('mobil', ['mobils'=>$mobils, 'mobil'=>$mobil, 'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobil = Mobil::find($id);
        $mobils = Mobil::all() ;
        return view('mobil', ['mobils'=>$mobils, 'mobil'=>$mobil, 'layout'=>'edit']);
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
        $mobil = Mobil::find($id);
        $mobil->nama = $request->input('nama');
        $mobil->harga = $request->input('harga');
        $mobil->stock = $request->input('stock');
        $mobil->save() ;
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
        $mobil = Mobil::find($id);
        $mobil->delete() ;
        return redirect('/') ;
    }
}
