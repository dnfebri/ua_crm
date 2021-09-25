<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Divisi;
use App\Models\Filekaryawan;
use App\Models\Jabatan;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function __construct()
    {
        $this->KaryawanModel = new Karyawan();
    }

    public function index()
    {
        $karyawan = $this->KaryawanModel->getAll();
        return view('karyawans.index', compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clubs = Club::all();
        $divisis = Divisi::all();
        $jabatans = Jabatan::all();
        return view('karyawans.create', compact(['clubs', 'divisis', 'jabatans']));
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
                'nik' => ['required', 'unique:karyawans,nik'],
                'nama_karyawan' => 'required',
                'club' => 'required',
                'divisi' => 'required',
                'jabatan' => 'required',
                'jenis_kelamin' => 'required',
                'no_ktp' => ['required', 'numeric', 'digits:16'],
                'alamat_ktp' => 'required',
                'alamat_tmpt_tinggal' => 'required',
                'email' => 'required',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => ['required', 'date'],
                'no_telpon' => ['required', 'numeric', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:11'],
                'nama_ibu_kandung' => 'required',
                'gol_darah' => 'required',
                'agama' => 'required',
                'status_pernikahan' => 'required',
                'tanggungan_anak' => 'required',
                'no_rek_mandiri' => 'required',
                'no_npwp' => 'required',
                'no_bpjs_kesehatan' => 'required',
                'no_bpjs_kt' => 'required',
                'no_telpon_darurat' => ['required', 'numeric', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:11'],
                'tgl_masuk' => ['required', 'date'],
            ],
            [
                'nama_karyawan.required' => 'Nama Karyawan Harus diisi!',
                'alamat_ktp.required' => 'Alamat KTP Harus diisi!'
            ]
        );

        // dump($request->status_karyawan);
        if (empty($request->status_karyawan)) {
            $request->status_karyawan = '0';
        }
        // dump($request->status_karyawan);
        // dd($request);

        Karyawan::create([
            'nik' => $request->nik,
            'nama_karyawan' => $request->nama_karyawan,
            'club' => $request->club,
            'divisi' => $request->divisi,
            'jabatan' => $request->jabatan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_ktp' => $request->no_ktp,
            'alamat_ktp' => $request->alamat_ktp,
            'alamat_tmpt_tinggal' => $request->alamat_tmpt_tinggal,
            'email' => $request->email,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'no_telpon' => $request->no_telpon,
            'nama_ibu_kandung' => $request->nama_ibu_kandung,
            'gol_darah' => $request->gol_darah,
            'agama' => $request->agama,
            'status_pernikahan' => $request->status_pernikahan,
            'tanggungan_anak' => $request->tanggungan_anak,
            'no_rek_mandiri' => $request->no_rek_mandiri,
            'no_npwp' => $request->no_npwp,
            'no_bpjs_kesehatan' => $request->no_bpjs_kesehatan,
            'no_bpjs_kt' => $request->no_bpjs_kt,
            'no_telpon_darurat' => $request->no_telpon_darurat,
            'tgl_masuk' => $request->tgl_masuk,
            'status_karyawan' => $request->status_karyawan
        ]);

        return redirect()->route('karyawan.index')->with('massage', 'Data karyawan ' . $request->nama_karyawan . ' berhasi ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show($karyawan)
    {
        $data = $this->KaryawanModel->getShow($karyawan);
        $filekaryawan = Filekaryawan::where('id_karyawan', $data->id)->first();
        // dd($filekaryawan);
        return view('karyawans.show', compact(['data', 'filekaryawan']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit(Karyawan $karyawan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawan $karyawan)
    {
        //
    }
}
