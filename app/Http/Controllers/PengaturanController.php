<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Perusahaan;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class PengaturanController extends Controller
{
    public function index()
    {
        return view('pengaturan.index');
    }

    public function ubahPassword(Request $request, User $user)
    {
        $validtedData = $request->validate([
            'password' => 'required'
        ]);

        $validtedData['password'] = Hash::make($request->password);
        $user->update($validtedData);
        return redirect('/admin/pengaturan');
    }

    public function ubahNamaPerusahaan(Request $request, Perusahaan $perusahaan)
    {
        $validtedData = $request->validate([
            'nama_perusahaan' => 'required'
        ]);
        $perusahaan->update($validtedData);
        return redirect('/admin/pengaturan');
    }

    public function ubahLogoPerusahaan(Request $request, Perusahaan $perusahaan)
    {
        // dd($request->logo);
        $validtedData = $request->validate([
            'logo' => 'required|file|image'
        ]);

        $filePath = public_path($perusahaan->logo);
        File::delete($filePath);

        $extenFile = $request->logo->getClientOriginalExtension();
        $namaFile = Str::random(10).time().'.'. $extenFile;

        $path = $request->logo->move('image', $namaFile);
        $path = str_replace('\\','/', $path);

        $validtedData['logo'] = $path;

        $perusahaan->update($validtedData);
        return redirect('/admin/pengaturan');
    }
}
