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

        $namafile = $karyawan->nik . '_' . $karyawan->nama_karyawan;

        $namafoto = $namafile . '.' . $request->file('img_foto')->getClientOriginalExtension();
        $namaktp = $namafile . '.' . $request->file('img_ktp')->getClientOriginalExtension();
        $namakk = $namafile . '.' . $request->file('img_kartu_keluarga')->getClientOriginalExtension();
        $namaijazah = $namafile . '.' . $request->file('img_ijazah')->getClientOriginalExtension();
        $namarekening = $namafile . '.' . $request->file('img_rek_mandiri')->getClientOriginalExtension();

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
        // dd($filekaryawan);
        return view('filekaryawan.edit', compact(['data', 'filekaryawan']));
    }

    public function update(Request $request, Filekaryawan $filekaryawan)
    {
        $karyawan = Karyawan::where('id', $filekaryawan->id_karyawan)->first();
        // dd($karyawan);
        $request->validate([
            'img_foto' => 'image|mimes:jpeg,png,jpg|max:2048',
            'img_ktp' => 'image|mimes:jpeg,png,jpg|max:2048',
            'img_kartu_keluarga' => 'image|mimes:jpeg,png,jpg|max:2048',
            'img_ijazah' => 'image|mimes:jpeg,png,jpg|max:2048',
            'img_rek_mandiri' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $namafoto = $filekaryawan->foto;
        $namaktp = $filekaryawan->ktp;
        $namakk = $filekaryawan->kartu_keluarga;
        $namaijazah = $filekaryawan->ijazah;
        $namarekening = $filekaryawan->rek_mandiri;

        $namafile = $karyawan->nik . '_' . $karyawan->nama_karyawan;

        //// Update image ke storage public ////
        if ($request->file('img_foto')) {
            $namafoto = $namafile . '.' . $request->file('img_foto')->getClientOriginalExtension();
            $request->file('img_foto')->move(public_path('/img/karyawan/foto'), $namafoto);
            $namafoto = '/' . 'foto/' . $namafoto;
        }

        if ($request->file('img_ktp')) {
            $namaktp = $namafile . '.' . $request->file('img_ktp')->getClientOriginalExtension();
            $request->file('img_ktp')->move(public_path('/img/karyawan/ktp'), $namaktp);
            $namaktp = '/' . 'ktp/' . $namaktp;
        }

        if ($request->file('img_kartu_keluarga')) {
            $namakk = $namafile . '.' . $request->file('img_kartu_keluarga')->getClientOriginalExtension();
            $request->file('img_kartu_keluarga')->move(public_path('/img/karyawan/kartu_keluarga'), $namakk);
            $namakk = '/' . 'kartu_keluarga/' . $namakk;
        }

        if ($request->file('img_ijazah')) {
            $namaijazah = $namafile . '.' . $request->file('img_ijazah')->getClientOriginalExtension();
            $request->file('img_ijazah')->move(public_path('/img/karyawan/ijazah'), $namaijazah);
            $namaijazah = '/' . 'ijazah/' . $namaijazah;
        }

        if ($request->file('img_rek_mandiri')) {
            $namarekening = $namafile . '.' . $request->file('img_rek_mandiri')->getClientOriginalExtension();
            $request->file('img_rek_mandiri')->move(public_path('/img/karyawan/rek_mandiri'), $namarekening);
            $namarekening = '/' . 'rek_mandiri/' . $namarekening;
        }

        Filekaryawan::where('id', $filekaryawan->id)
            ->update([
                'foto' => $namafoto,
                'ktp' => $namaktp,
                'kartu_keluarga' => $namakk,
                'ijazah' => $namaijazah,
                'rek_mandiri' => $namarekening,
            ]);

        return redirect()->route('karyawan.show', ['karyawan' => $karyawan->id])->with('massage', 'Data karyawan ' . $request->nama_karyawan . ' berhasi diupdate!');
    }
}
