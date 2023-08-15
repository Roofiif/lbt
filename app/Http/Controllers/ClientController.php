<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * 
     * @return \Illuminate\Http\Response
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();

        return view('client.index', compact('clients'));
    }

    /**
     * 
     * @return \Illuminate\Http\Response
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.create');
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
            'image' => 'required|image', 'company' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')){
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        Client::create($input);

        return redirect('/admin/clients')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * @param \App\Models\Client
     * @return \Illuminate\Http\Response
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * @param \App\Models\Client
     * @return \Illuminate\Http\Response
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('client.edit' , compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'image' => 'required', 'company' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')){
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        $client->update($input);

        return redirect('/admin/clients')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect('/admin/clients')->with('message', 'Data berhasil dihapus');
    }
}
