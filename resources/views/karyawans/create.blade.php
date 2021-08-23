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

<!-- Main content  ---------------------------------------------------------------------------------------------------------->
<section class="content">
  <div class="container">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-sm-6">
        <form action="{{ route('karyawan.store') }}" method="post">
          @csrf
          <div class="mb-2">
            <label for="nama_karyawan" class="form-label">Nama Karyawan</label>
            <input type="text" class="form-control @error('nama_karyawan') is-invalid @enderror" id="nama_karyawan"
              name="nama_karyawan" value="{{ old('nama_karyawan') }}" placeholder="Nama Karyawan">
            @error('nama_karyawan')
            <div id="nama_karyawan" class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-2">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" id="alamat" rows="2" class="form-control @error('alamat') is-invalid @enderror"
              placeholder="Masukan Alamat">{{ old('alamat') }}</textarea>
            @error('alamat')
            <div id="alamat" class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <button type="submit" class="btn btn-success mt-3">Simpan</button>
        </form>
      </div>
    </div>

  </div><!-- /.container-fluid -->
</section>
<!-- /.content akhir -------------------------------------------------------------------------------------------------------->


@endsection