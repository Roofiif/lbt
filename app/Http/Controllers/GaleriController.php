<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * 
     * @return \Illuminate\Http\Response
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeris = Galeri::all();

        return view('galeri.index', compact('galeris'));
    }

    /**
     * 
     * @return \Illuminate\Http\Response
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('galeri.create');
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
            'image' => 'required|image'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')){
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        Galeri::create($input);

        return redirect('/admin/galeris')->with('message', 'Data berhasil ditambahkan');

        // dd($request->all());
    }

    /**
     * @param \App\Models\Galeri
     * @return \Illuminate\Http\Response
     * Display the specified resource.
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * @param \App\Models\Galeri
     * @return \Illuminate\Http\Response
     * Show the form for editing the specified resource.
     */
    public function edit(Galeri $galeri)
    {
        return view('galeri.edit' , compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galeri $galeri)
    {
        $request->validate([
            'image' => 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')){
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }else{
            unset($input['image']);
        }
        $galeri->update($input);

        return redirect('/admin/galeris')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galeri $galeri)
    {
        $galeri->delete();

        return redirect('/admin/galeris')->with('message', 'Data berhasil dihapus');
    }
}
