@extends('layouts/main', ['title' => 'Daftar Nama Karyawan', 'side' => 'Karyawan'])

@section('contents')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Daftar Nama Karyawan</h1>
      </div><!-- /.col -->

    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->



<!-- Main content  ---------------------------------------------------------------------------------------------------------->
<section class="content">
  <div class="container">

    @if (session('massage'))
    <div id="massage" data-massage="{{ session('massage') }}"></div>
    @endif

    <div class="row">
      <div class="col">
        <a href="{{ route('karyawan.create') }}" class="btn btn-primary mb-3">Tambah Karyawan</a>

        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">Club</th>
              <th scope="col">Divisi</th>
              <th scope="col">Jabatan</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>Otto</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>Thornton</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>Thornton</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>

  </div><!-- /.container-fluid -->
</section>
<!-- /.content akhir -------------------------------------------------------------------------------------------------------->

@endsection