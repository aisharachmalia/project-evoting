<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use Illuminate\Http\Request;

class kelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kelasList = Kelas::withCount('siswa')->get();

        // Menampilkan data dalam view
        return view('admin.kelas.index', compact('kelasList'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {
        $validated = $request->validate([
        'nama_kelas' => 'required',
        ]);
        $kelas = new kelas();
        $kelas-> nama_kelas = $request ->nama_kelas;

        $kelas->save();
        return redirect()->route('kelas.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kelas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kelas = kelas::findOrFail($id);
        return view('admin.kelas.show', compact('kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas = kelas::findOrFail($id);
        return view('admin.kelas.edit', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kelas = kelas::findOrFail($id);
        $kelas->nama_kelas = $request->nama_kelas;

        $kelas->save();
        return redirect()->route('kelas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelas = kelas::findOrFail($id);
        $kelas->delete();
        return redirect()->route('kelas.index');   }
}