<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use Database\Seeders\BerandaSeeder;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beranda = Beranda::first();

        return view('beranda', compact('beranda'));
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
    public function show(Beranda $beranda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Beranda $beranda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $beranda = Beranda::find($id); 

        $request->validate([
            'utama_img' => 'image',
            'desc_ttg' => 'required',
            'sert_logo' => 'image',
            'sert_link' => 'required',
            'sert_desc' => 'required',
            'awasi_logo' => 'image',
        ]);
        $input = $request->all();

        if ($utamaImage = $request->file('utama_img')) {
            $utamaImagePath = 'image/';
            $utamaImageName = $utamaImage->getClientOriginalName();
            $utamaImage->move(public_path($utamaImagePath), $utamaImageName);
            $input['utama_img'] = $utamaImageName;
        }
    
        if ($sertLogo = $request->file('sert_logo')) {
            $sertLogoPath = 'image/';
            $sertLogoName = $sertLogo->getClientOriginalName();
            $sertLogo->move(public_path($sertLogoPath), $sertLogoName);
            $input['sert_logo'] = $sertLogoName;
        }
        if ($awasiLogo = $request->file('awasi_logo')) {
            $awasiLogoPath = 'image/';
            $awasiLogoName = $awasiLogo->getClientOriginalName();
            $awasiLogo->move(public_path($awasiLogoPath), $awasiLogoName);
            $input['awasi_logo'] = $awasiLogoName;
        }
        else{
            unset($input['image']);
        }
        $beranda->update($input);

        return redirect('/admin/beranda')->with('message', 'Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Beranda $beranda)
    {
        //
    }
}
