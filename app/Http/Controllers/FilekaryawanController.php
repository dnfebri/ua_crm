<?php

namespace App\Http\Controllers;

use App\Models\Filekaryawan;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class FilekaryawanController extends Controller
{
    public function __construct()
    {
        $this->KaryawanModel = new Karyawan();
    }

    public function create($request)
    {
        $data = $this->KaryawanModel->getShow($request);
        return view('filekaryawan.create', compact('data'));
    }

    public function store(Request $request)
    {
        $karyawan = Karyawan::where('id', $request->id_karyawan)->first();

        $request->validate([
            'img_foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'img_ktp' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'img_kartu_keluarga' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'img_ijazah' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'img_rek_mandiri' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $namafoto = $karyawan->nik . '.' . $request->file('img_foto')->getClientOriginalExtension();
        $namaktp = $karyawan->nik . '.' . $request->file('img_ktp')->getClientOriginalExtension();
        $namakk = $karyawan->nik . '.' . $request->file('img_kartu_keluarga')->getClientOriginalExtension();
        $namaijazah = $karyawan->nik . '.' . $request->file('img_ijazah')->getClientOriginalExtension();
        $namarekening = $karyawan->nik . '.' . $request->file('img_rek_mandiri')->getClientOriginalExtension();

        //// Simpan image ke storage public ////
        $request->file('img_foto')->move(public_path('/img/karyawan/foto'), $namafoto);
        $request->file('img_ktp')->move(public_path('/img/karyawan/ktp'), $namaktp);
        $request->file('img_kartu_keluarga')->move(public_path('/img/karyawan/kartu_keluarga'), $namakk);
        $request->file('img_ijazah')->move(public_path('/img/karyawan/ijazah'), $namaijazah);
        $request->file('img_rek_mandiri')->move(public_path('/img/karyawan/rek_mandiri'), $namarekening);

        Filekaryawan::create([
            'id_karyawan' => $request->id_karyawan,
            'foto' => '/' . 'foto/' . $namafoto,
            'ktp' => '/' . 'ktp/' . $namaktp,
            'kartu_keluarga' => '/' . 'kartu_keluarga/' . $namakk,
            'ijazah' => '/' . 'ijazah/' . $namaijazah,
            'rek_mandiri' => '/' . 'rek_mandiri/' . $namarekening,
        ]);

        return redirect()->route('karyawan.show', ['karyawan' => $karyawan->id])->with('massage', 'Data karyawan ' . $request->nama_karyawan . ' berhasi dilengkapi!');
    }

    public function edit($request)
    {
        // cara menampilakan nama di form input file dimana ???
        $data = $this->KaryawanModel->getShow($request);
        $filekaryawan = Filekaryawan::where('id_karyawan', $data->id)->first();
        return view('filekaryawan.edit', compact(['data', 'filekaryawan']));
    }

    public function update(Request $request)
    {
        dd($request);
    }
}
