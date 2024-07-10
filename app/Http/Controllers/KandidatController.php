<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use App\Models\VotingPeriode;
use Illuminate\Http\Request;

class KandidatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $votingperiode = VotingPeriode::all();
        $kandidat = Kandidat::all();
        return view('admin.kandidat.index', compact('kandidat', 'votingperiode'));
    }

    public function create()
    {
        $votingperiode = VotingPeriode::all();
        return view('admin.kandidat.create', compact('votingperiode'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_calon' => 'required|unique:kandidats',
            'image' => 'required|max:2048|mimes:png,jpg',
            'visi' => 'required',
            'misi' => 'required',
            'id_periode' => 'required'
        ]);

        $kandidat = new Kandidat();
        $kandidat->nama_calon = $request->nama_calon;
        $kandidat->id_periode = $request->id_periode;
        $kandidat->visi = $request->visi;
        $kandidat->misi = $request->misi;

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/kandidat', $name);
            $kandidat->image = $name;
        }

        $kandidat->save();

        return redirect()->route('kandidat.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function show(Kandidat $kandidat)
    {
        //
    }

    public function edit(Kandidat $kandidat)
    {
        //
    }

    public function update(Request $request, Kandidat $kandidat)
    {
        //
    }

    public function destroy(Kandidat $kandidat)
    {
        //
    }
}
