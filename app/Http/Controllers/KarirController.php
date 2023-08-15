<?php

namespace App\Http\Controllers;

use App\Models\Karir;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KarirController extends Controller
{
    /**
     * 
     * @return \Illuminate\Http\Response
     * Display a listing of the resource.
     */
    public function index()
    {
        $karirs = Karir::all();

        return view('karir.index', compact('karirs'));
    }

    /**
     * 
     * @return \Illuminate\Http\Response
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('karir.create');
    }

    /**
     * 
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     * 
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $request->validate([
            'nama_pekerjaan' => 'required',
            'job_requirment' => 'required',
            'deskripsi_pekerjaan' => 'required',
            'salary' => 'required',
            'benefit' => 'required',
            'linkgf' => 'required',
            'fulltime_magang' => 'required',
        ]);
    
        $namaPekerjaan = $request->input('nama_pekerjaan');
        $slug = Str::slug($namaPekerjaan, '-');
    
        $input = $request->all();
        $input['slug'] = $slug; // Menambahkan slug ke array input
        Karir::create($input);
    
        return redirect('/admin/karirs')->with('message', 'Data berhasil ditambahkan');
    }


    /**
     * @param \App\Models\Karir
     * @return \Illuminate\Http\Response
     * Display the specified resource.
     */
    public function show(Karir $karir)
    {
        //
    }

    /**
     * @param \App\Models\Karir
     * @return \Illuminate\Http\Response
     * Show the form for editing the specified resource.
     */
    public function edit(Karir $karir)
    {
        return view('karir.edit' , compact('karir'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Karir $karir)
    {
        $request->validate([
            'nama_pekerjaan' => 'required', 'job_requirment' => 'required', 'deskripsi_pekerjaan' => 'required' , 'salary' => 'required', 'benefit' => 'required','linkgf' => 'required','fulltime_magang' => 'required',
        ]);

        $input = $request->all();

        $karir->update($input);

        return redirect('/admin/karirs')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karir $karir)
    {
        $karir->delete();

        return redirect('/admin/karirs')->with('message', 'Data berhasil dihapus');
    }
}
