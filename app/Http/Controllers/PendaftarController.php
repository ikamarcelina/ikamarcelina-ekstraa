<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftar;

class PendaftarController extends Controller
{
    public function create()
    {
        return view('daftar');
    }

    public function store(Request $request)
    {
        Pendaftar::create([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'ekskul' => $request->ekskul,
        ]);

        return redirect('/pendaftar');
    }

    public function index()
    {
        $data = Pendaftar::all();
        return view('pendaftar', ['data' => $data]);
    }
}
