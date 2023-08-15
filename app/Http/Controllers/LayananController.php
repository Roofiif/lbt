<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * 
     * @return \Illuminate\Http\Response
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanans = Layanan::all();

        return view('layanan.index', compact('layanans'));
    }

    /**
     * 
     * @return \Illuminate\Http\Response
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layanan.create');
    }

    /**
     * 
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_layanan' => 'required',  'deskripsi_layanan' => 'required' , 
        ]);

        $input = $request->all();

        Layanan::create($input);

        return redirect('/admin/layanans')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * @param \App\Models\Layanan
     * @return \Illuminate\Http\Response
     * Display the specified resource.
     */
    public function show(Layanan $layanan)
    {
        //
    }

    /**
     * @param \App\Models\Layanan
     * @return \Illuminate\Http\Response
     * Show the form for editing the specified resource.
     */
    public function edit(Layanan $layanan)
    {
        return view('layanan.edit' , compact('layanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Layanan $layanan)
    {
        $request->validate([
            'nama_layanan' => 'required', 'deskripsi_layanan' => 'required' , 
        ]);

        $input = $request->all();

        $layanan->update($input);

        return redirect('/admin/layanans')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Layanan $layanan)
    {
        $layanan->delete();

        return redirect('/admin/layanans')->with('message', 'Data berhasil dihapus');
    }
}
