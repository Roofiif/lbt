<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Beranda;
use App\Models\Client;
use App\Models\Galeri;
use App\Models\Karir;
use App\Models\Kontak;
use App\Models\Layanan;
use App\Models\Perusahaan;

class HomeController extends Controller
{
    public function index(){
        $client =Client::all();
        $beranda =Beranda::first();
        $kontak =Kontak::first();
        $perusahaan = Perusahaan::first();

        return view('home.index', compact(
            'client', 'beranda', 'kontak', 'perusahaan',
        ));
    }
    public function about(){
        $about = About::first();
        $galeri = Galeri::all();
        $kontak =Kontak::first();
        $perusahaan = Perusahaan::first();

        return view('home.about', compact(
            'about', 'galeri', 'kontak', 'perusahaan',
        ));
    }
    public function layanan(){
        $layanan =Layanan::all();
        $kontak =Kontak::first();
        $perusahaan = Perusahaan::first();
        return view('home.layanan', compact('layanan', 'kontak', 'perusahaan',));
    }
    public function karir(){
        $karir =Karir::all();   
        $kontak =Kontak::first();
        $perusahaan = Perusahaan::first();
        return view('home.karir', compact('karir', 'kontak', 'perusahaan',));
    }
    public function kontak(){
        $kontak = Kontak::first();
        $perusahaan = Perusahaan::first();
        return view('home.kontak',compact('kontak', 'perusahaan',));
    }

    public function showBySlug($position)
    { 
        $kontak = Kontak::first();
        $perusahaan = Perusahaan::first();
        $pekerjaan = Karir::where('slug', $position)->first();
        return view('home.detail', compact('pekerjaan','kontak', 'perusahaan'));
    }

}
