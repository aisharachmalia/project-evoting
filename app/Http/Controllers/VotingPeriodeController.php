<?php

namespace App\Http\Controllers;

use App\Models\VotingPeriode;
use Illuminate\Http\Request;

class VotingPeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Menampilkan data dalam view
        $votingperiode = VotingPeriode::all();
        return view('admin.periode.index', compact('votingperiode'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.periode.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'periode' => 'required',
            ]);
            $votingperiode = new VotingPeriode();
            $votingperiode-> periode = $request ->periode;
    
            $votingperiode->save();
            return redirect()->route('periode.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VotingPeriode  $votingPeriode
     * @return \Illuminate\Http\Response
     */
    public function show(VotingPeriode $votingPeriode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VotingPeriode  $votingPeriode
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $votingperiode = VotingPeriode::findOrFail($id);
        return view('admin.periode.edit', compact('votingperiode'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VotingPeriode  $votingPeriode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $votingperiode = VotingPeriode::findOrFail($id);
        $votingperiode->periode = $request->periode;

        $votingperiode->save();
        return redirect()->route('periode.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VotingPeriode  $votingPeriode
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $votingperiode = VotingPeriode::findOrFail($id);
        $votingperiode->delete();
        return redirect()->route('periode.index');
    }
}
