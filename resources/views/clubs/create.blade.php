@extends('layouts/main', ['title' => 'Tambah Nama Club', 'side' => 'Club'])

@section('contents')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Tambah Nama Club</h1>
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
        <form action="{{ route('club.store') }}" method="post">
          @csrf
          <div class="mb-2">
            <label for="nama_club" class="form-label">Nama Club</label>
            <input type="text" class="form-control @error('nama_club') is-invalid @enderror" id="nama_club"
              name="nama_club" value="{{ old('nama_club') }}" placeholder="Nama Club">
            @error('nama_club')
            <div id="nama_club" class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-2">
            <label for="alamat" class="form-label">Alamat Club</label>
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