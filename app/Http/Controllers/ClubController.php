<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clubs = Club::all();
        return view('clubs.index', compact('clubs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clubs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate(
            [
                'nama_club' => 'required',
                'alamat' => 'required'
            ],
            [
                'nama_club.required' => 'Nama Club Harus diisi!',
                'alamat.required' => 'Alamat Harus diisi!'
            ]
        );

        Club::create($request->all());

        return redirect()->route('club.index')->with('massage', 'Club ' . $request->nama_club . ' berhasi ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function show(Club $club)
    {
        echo $club;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function edit(Club $club)
    {

        return view('clubs.show', compact('club'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Club $club)
    {
        // Validation
        $request->validate(
            [
                'nama_club' => 'required',
                'alamat' => 'required'
            ],
            [
                'nama_club.required' => 'Nama Club Harus diisi!',
                'alamat.required' => 'Alamat Harus diisi!'
            ]
        );

        Club::where('id', $club->id)
            ->update([
                'nama_club' => $request->nama_club,
                'alamat' => $request->alamat
            ]);

        return redirect()->route('club.index')->with('massage', 'Club ' . $request->nama_club . ' berhasi diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function destroy(Club $club)
    {
        Club::destroy($club->id);

        return redirect()->route('club.index')->with('massage', 'Club ' . $club->nama_club . ' berhasi <b class="text-danger">Dihapus</b>');
    }
}
