<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kontak = Kontak::first();

        return view('kontak', compact('kontak'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kontak $kontak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kontak $kontak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kontak = Kontak::find($id); 

        $request->validate([
            'image' => 'image',
            'wa' => 'required',
            'telephone' => 'required',
            'alamat' => 'required',
            'email_pt' => 'required',
            'email_rec' => 'required',
            'linkedin' => 'required',
            'maps_embed' => 'required',
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
        $kontak->update($input);

        return redirect('/admin/kontak')->with('message', 'Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kontak $kontak)
    {
        //
    }
}
