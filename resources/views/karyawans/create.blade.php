@extends('layouts/main', ['title' => 'Tambah Nama Karyawan', 'side' => 'Karyawan'])

@section('contents')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Tambah Nama Karyawan</h1>
      </div><!-- /.col -->

    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

{{-- @dump($clubs)
@dump($divisis)
@dump($jabatans) --}}

<!-- Main content  ---------------------------------------------------------------------------------------------------------->
<section class="content">
  <div class="container mb-3">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-sm-12">
        <form action="{{ route('karyawan.store') }}" method="post">
          @csrf
          <div class="mb-2 row">
            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik"
                value="{{ old('nik') }}" placeholder="NIK">
              @error('nik')
              <div id="nik" class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-2 row">
            <label for="nama_karyawan" class="col-sm-2 col-form-label">Nama Karyawan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('nama_karyawan') is-invalid @enderror" id="nama_karyawan"
                name="nama_karyawan" value="{{ old('nama_karyawan') }}" placeholder="Nama Karyawan">
              @error('nama_karyawan')
              <div id="nama_karyawan" class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-2 row">
            <label for="club" class="col-sm-2 col-form-label">Club</label>
            <div class="col-sm-10">
              <select class="form-select @error('club') is-invalid @enderror" name="club" id="club">
                <option value="" selected>Pilih Club</option>
                @foreach($clubs as $club)
                <option value="{{$club->id}}" {{old('club') == $club->id ? 'selected' : ''}}>{{$club->nama_club}}
                </option>
                @endforeach
              </select>
              @error('club')
              <div id="club" class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-2 row">
            <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
            <div class="col-sm-10">
              <select class="form-select @error('divisi') is-invalid @enderror" name="divisi" id="divisi">
                <option selected>Pilih Divisi</option>
                @foreach($divisis as $divisi)
                <option value="{{$divisi->id}}" {{old('divisi') == $divisi->id ? 'selected' : ''}}>
                  {{$divisi->nama_divisi}}</option>
                @endforeach
              </select>
              @error('divisi')
              <div id="divisi" class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-2 row">
            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-10">
              <select class="form-select @error('jabatan') is-invalid @enderror" name="jabatan" id="jabatan">
                <option selected>Pilih Jabatan</option>
                @foreach($jabatans as $jabatan)
                <option value="{{$jabatan->id}}" {{old('jabatan') == $jabatan->id ? 'selected' : ''}}>
                  {{$jabatan->nama_jabatan}}</option>
                @endforeach
              </select>
              @error('jabatan')
              <div id="jabatan" class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-2 row">
            <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
              <select class="form-select @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin"
                id="jenis_kelamin">
                <option value="" selected>Pilih Gol Darah</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
              @error('jenis_kelamin')
              <div id="jenis_kelamin" class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-2 row">
            <label for="no_ktp" class="col-sm-2 col-form-label">No KTP</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('no_ktp') is-invalid @enderror" id="no_ktp" name="no_ktp"
                value="{{ old('no_ktp') }}" placeholder="No KTP">
              @error('no_ktp')
              <div id="no_ktp" class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-2 row">
            <label for="alamat_ktp" class="col-sm-2 col-form-label">Alamat KTP</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('alamat_ktp') is-invalid @enderror" id="alamat_ktp"
                name="alamat_ktp" value="{{ old('alamat_ktp') }}" placeholder="Alamat KTP">
              @error('alamat_ktp')
              <div id="alamat_ktp" class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-2 row">
            <label for="alamat_tmpt_tinggal" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <div class="icheck-primary">
                <input type="checkbox" name="checkbox_ktp" id="checkbox_ktp" {{ old('checkbox_ktp') ? 'checked' : '' }}>
                <label for="checkbox_ktp">Alamat Tempat Tinggal Sesuai KTP</label>
              </div>
            </div>
          </div>
          <div class="mb-2 row">
            <label for="alamat_tmpt_tinggal" class="col-sm-2 col-form-label">Alamat Tempat Tinggal</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('alamat_tmpt_tinggal') is-invalid @enderror"
                id="alamat_tmpt_tinggal" name="alamat_tmpt_tinggal" value="{{ old('alamat_tmpt_tinggal') }}"
                placeholder="Alamat Tempat Tinggal">
              @error('alamat_tmpt_tinggal')
              <div id="alamat_tmpt_tinggal" class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-2 row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                value="{{ old('email') }}" placeholder="Email">
              @error('email')
              <div id="email" class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-2 row">
            <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat lahir</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir"
                name="tempat_lahir" value="{{ old('tempat_lahir') }}" placeholder="Tempat lahir">
              @error('tempat_lahir')
              <div id="tempat_lahir" class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-2 row">
            <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal lahir</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir"
                name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" placeholder="Tanggal lahir">
              @error('tanggal_lahir')
              <div id="tanggal_lahir" class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-2 row">
            <label for="no_telpon" class="col-sm-2 col-form-label">Nomer Telpon</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('no_telpon') is-invalid @enderror" id="no_telpon"
                name="no_telpon" value="{{ old('no_telpon') }}" placeholder="Nomer Telpon">
              @error('no_telpon')
              <div id="no_telpon" class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-2 row">
            <label for="nama_ibu_kandung" class="col-sm-2 col-form-label">Nama Ibu Kandung</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('nama_ibu_kandung') is-invalid @enderror"
                id="nama_ibu_kandung" name="nama_ibu_kandung" value="{{ old('nama_ibu_kandung') }}"
                placeholder="Nama Ibu Kandung">
              @error('nama_ibu_kandung')
              <div id="nama_ibu_kandung" class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-2 row">
            <label for="gol_darah" class="col-sm-2 col-form-label">Gol Darah</label>
            <div class="col-sm-10">
              <select class="form-select @error('gol_darah') is-invalid @enderror" name="gol_darah" id="gol_darah">
                <option value="" selected>Pilih Gol Darah</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
              </select>
              @error('gol_darah')
              <div id="gol_darah" class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-2 row">
            <label for="agama" class="col-sm-2 col-form-label">Agama</label>
            <div class="col-sm-10">
              <select class="form-select @error('agama') is-invalid @enderror" name="agama" id="agama">
                <option value="" selected>Pilih Agama</option>
                <option value="ISLAM">ISLAM</option>
                <option value="KATOLIK">KATOLIK</option>
                <option value="HINDU">HINDU</option>
                <option value="BUDDHA">BUDDHA</option>
                <option value="PROTESTAN">PROTESTAN</option>
              </select>
              @error('agama')
              <div id="agama" class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-2 row">
            <label for="status_pernikahan" class="col-sm-2 col-form-label">Status Pernikahan</label>
            <div class="col-sm-10">
              <select class="form-select @error('status_pernikahan') is-invalid @enderror" name="status_pernikahan"
                id="status_pernikahan">
                <option value="" selected>Pilih Status Pernikahan</option>
                <option value="Belum Menikah">Belum Menikah</option>
                <option value="Menikah">Menikah</option>
                <option value="Cerai Hidup">Cerai Hidup</option>
                <option value="Cerai Mati">Cerai Mati</option>
              </select>
              @error('status_pernikahan')
              <div id="status_pernikahan" class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-2 row">
            <label for="tanggungan_anak" class="col-sm-2 col-form-label">Tanggungan Anak</label>
            <div class="col-sm-10">
              <select class="form-select @error('tanggungan_anak') is-invalid @enderror" name="tanggungan_anak"
                id="tanggungan_anak">
                <option value="" selected>Pilih Tanggungan Anak</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
              @error('tanggungan_anak')
              <div id="tanggungan_anak" class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-2 row">
            <label for="no_rek_mandiri" class="col-sm-2 col-form-label">Nomer Rekening Mandiri</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('no_rek_mandiri') is-invalid @enderror" id="no_rek_mandiri"
                name="no_rek_mandiri" value="{{ old('no_rek_mandiri') }}" placeholder="Nomer Rekening Mandiri">
              @error('no_rek_mandiri')
              <div id="no_rek_mandiri" class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-2 row">
            <label for="no_npwp" class="col-sm-2 col-form-label">Nomer NPWP</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('no_npwp') is-invalid @enderror" id="no_npwp" name="no_npwp"
                value="{{ old('no_npwp') }}" placeholder="Nomer NPWP">
              @error('no_npwp')
              <div id="no_npwp" class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-2 row">
            <label for="no_bpjs_kesehatan" class="col-sm-2 col-form-label">Nomer BPJS Kesehatan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('no_bpjs_kesehatan') is-invalid @enderror"
                id="no_bpjs_kesehatan" name="no_bpjs_kesehatan" value="{{ old('no_bpjs_kesehatan') }}"
                placeholder="Nomer BPJS Kesehatan">
              @error('no_bpjs_kesehatan')
              <div id="no_bpjs_kesehatan" class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-2 row">
            <label for="no_bpjs_kt" class="col-sm-2 col-form-label">Nomer BPJS Ketenagakerjaan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('no_bpjs_kt') is-invalid @enderror" id="no_bpjs_kt"
                name="no_bpjs_kt" value="{{ old('no_bpjs_kt') }}" placeholder="Nomer BPJS Ketenagakerjaan">
              @error('no_bpjs_kt')
              <div id="no_bpjs_kt" class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-2 row">
            <label for="no_darurat" class="col-sm-2 col-form-label">Nomer Telpon Darurat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('no_darurat') is-invalid @enderror" id="no_darurat"
                name="no_darurat" value="{{ old('no_darurat') }}" placeholder="Nomer Telpon Darurat">
              @error('no_darurat')
              <div id="no_darurat" class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-2 row">
            <label for="tgl_masuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('tgl_masuk') is-invalid @enderror" id="tgl_masuk"
                name="tgl_masuk" value="{{ old('tgl_masuk') }}" placeholder="Tanggal Masuk">
              @error('tgl_masuk')
              <div id="tgl_masuk" class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="mb-2 row">
            <label for="checkbox_ktp" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <div class="icheck-primary">
                <input type="checkbox" name="status_karyawan" id="status_karyawan"
                  {{ old('status_karyawan') ? 'checked' : '' }}>
                <label for="status_karyawan">Status Karywan Aktif!</label>
              </div>
            </div>
          </div>

          <button type="submit" class="btn btn-success mt-3">Simpan</button>
        </form>
      </div>
    </div>

  </div><!-- /.container-fluid -->
</section>
<!-- /.content akhir -------------------------------------------------------------------------------------------------------->


@endsection