<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = produk::all();
        return view ('produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_produk'=> 'required',
            'keterangan'=> 'required',
            'harga'=> 'required',
            'jumlah'=> 'required',

        ]);

        $data = $request->all();
        $data['nama_produk']= $request->nama_produk;
        $data['keterangan']= $request->keterangan;
        $data['harga']= $request->harga;
        $data['jumlah']= $request->jumlah;
        produk::create($data);
        return redirect()->route('produk.tampil')->with(['success' =>'produk berhasil di tambahkan']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Request $request,$id)
    {
        $produk = produk::find($id);
        // dd($produk);
        return view('produk.edit',compact('produk'));
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
        $produk = produk::find($id);
        $produk ->nama_produk = $request->nama_produk;
        $produk ->keterangan = $request->keterangan;
        $produk ->harga = $request->harga;
        $produk ->jumlah = $request->jumlah;
        $produk->save();

        return redirect()->route('produk.tampil')->with(['success' =>'produk berhasil di update']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = produk::find($id);
        $produk->delete();
        return back();
    }
}
