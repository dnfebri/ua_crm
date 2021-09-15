@extends('layouts/main', ['title' => 'Detail Karyawan', 'side' => 'Karyawan'])

@section('contents')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Detail Karyawan</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">
            {{-- <form action="{{ route('filekaryawan.create') }}" method="post">
            @csrf
            <input type="text" name="id_karyawan" value="{{ $data->id }}" hidden>
            <button type="submit" class="btn btn-danger">Lengkapi Data</button>
            </form> --}}
            @empty($filekaryawan)
            <a href="{{ route('filekaryawan.create', ['filekaryawan'=>$data->nik]) }}"
              class="btn btn-danger py-0">Lengkapi
              Data</a>
            @endempty
          </li>
        </ol>
      </div>

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

    {{-- Card Index --}}
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-4 text-center">
          <img src="{{url('img/karyawan')}}{{$filekaryawan->foto ?? '/foto/default.jpg'}}"
            class="img-fluid img-thumbnail rounded mx-auto d-block" alt="{{ $data->nik }}" style="width: 13rem;">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h3 class="font-weight-bold">{{ $data->nama_karyawan }}</h3>
            <h4 class="font-weight-bold">{{ $data->nik }}</h4>
            <h5 class="font-weight-normal">Club : {{ $data->nama_club }}</h5>
            <h5 class="font-weight-normal">Divisi : {{ $data->nama_divisi }}</h5>
            <h5 class="font-weight-normal">Jabatan : {{ $data->nama_jabatan }}</h5>
            <p class="card-text"><small class="text-muted">Tanggal Terdaftar :
                {{ date('d F Y', strtotime($data->tgl_masuk)) }}</small></p>
            <p>
              Status Karyawan :
              @if($data->status_karyawan != '0')
              <span class="text-green font-weight-bold">
                {{ $data->status_karyawan }}
              </span>
              @else
              <span class="text-red font-weight-bold">
                NON AKTIV
              </span>
              @endif
            </p>
          </div>
        </div>
      </div>
    </div>
    {{-- Akhir Card Index --}}

    {{-- Card Detail --}}
    <div class="card card-secondary">
      <div class="card-header">
        <h3 class="card-title font-weight-bold">Detail</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          {{-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button> --}}
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label class="mb-0">Nomer KTP</label>
              <p>{{ $data->no_ktp }}</p>
            </div>
            <div class="form-group">
              <label class="mb-0">Nama</label>
              <p>{{ $data->nama_karyawan }}</p>
            </div>
            <div class="form-group">
              <label class="mb-0">Tempat, Tanggal Lahir</label>
              <p>{{ $data->tempat_lahir }}, {{ date('d F Y', strtotime($data->tanggal_lahir)) }}</p>
            </div>
            <div class="form-group">
              <label class="mb-0">Jenis Kelamin</label>
              <p>{{ $data->jenis_kelamin }}</p>
            </div>
            <div class="form-group">
              <label class="mb-0">Alamat KTP</label>
              <p>{{ $data->alamat_ktp }}</p>
            </div>
            <div class="form-group">
              <label class="mb-0">Agama</label>
              <p>{{ $data->agama }}</p>
            </div>
            <div class="form-group">
              <label class="mb-0">Status Pernikahan</label>
              <p>{{ $data->status_pernikahan }}</p>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label class="mb-0">Email</label>
              <p>{{ $data->email }}</p>
            </div>
            <div class="form-group">
              <label class="mb-0">Nomer Telpon</label>
              <p>{{ $data->no_telpon }}</p>
            </div>
            <div class="form-group">
              <label class="mb-0">Alamat Tempat Tinggal</label>
              <p>{{ $data->alamat_tmpt_tinggal }}</p>
            </div>
            <div class="form-group">
              <label class="mb-0">Nama Ibu Kandung</label>
              <p>{{ $data->nama_ibu_kandung }}</p>
            </div>
            <div class="form-group">
              <label class="mb-0">Golongan Darah</label>
              <p>{{ $data->gol_darah }}</p>
            </div>
            <div class="form-group">
              <label class="mb-0">Tanggungan Anak</label>
              <p>{{ $data->tanggungan_anak }}</p>
            </div>
            <div class="form-group">
              <label class="mb-0">Nomer Telpon Darurat</label>
              <p>{{ $data->no_telpon_darurat }}</p>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-body -->
      {{-- <div class="card-footer">
        Footer
      </div> --}}
      <!-- /.card-footer-->
    </div>

    <div class="card card-secondary">
      <div class="card-header">
        <h3 class="card-title font-weight-bold">File Pendukung</h3>
        <div class="card-tools">
          @if($filekaryawan != NULL)
          <a href="{{ route('filekaryawan.edit', ['filekaryawan'=>$data->nik]) }}" class="btn btn-warning py-0">Edit</a>
          @endif
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          {{-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button> --}}
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @if($filekaryawan != NULL)
              <tr>
                <th scope="row">1</th>
                <td>KTP</td>
                <td>
                  <img src="{{url('img/karyawan') . $filekaryawan->ktp}}" class="img-fluid img-thumbnail rounded"
                    alt="{{ $filekaryawan->ktp }}" style="width: 13rem;">
                </td>
                <td><a href="#" class="text-decoration-none btn btn-info"><i class="fas fa-search"></i> Lihat</a></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Kartu Keluarga</td>
                <td>
                  <img src="{{url('img/karyawan') . $filekaryawan->kartu_keluarga}}"
                    class="img-fluid img-thumbnail rounded" alt="{{ $filekaryawan->kartu_keluarga }}"
                    style="width: 13rem;">
                </td>
                <td><a href="#" class="text-decoration-none btn btn-info"><i class="fas fa-search"></i> Lihat</a></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Ijazah</td>
                <td>
                  <img src="{{url('img/karyawan') . $filekaryawan->ijazah}}" class="img-fluid img-thumbnail rounded"
                    alt="{{ $filekaryawan->ijazah }}" style="width: 13rem;">
                </td>
                <td><a href="#" class="text-decoration-none btn btn-info"><i class="fas fa-search"></i> Lihat</a></td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Rekening Mandiri</td>
                <td>
                  <img src="{{url('img/karyawan') . $filekaryawan->rek_mandiri }}"
                    class="img-fluid img-thumbnail rounded" alt="{{ $filekaryawan->rek_mandiri }}"
                    style="width: 13rem;">
                </td>
                <td><a href="#" class="text-decoration-none btn btn-info"><i class="fas fa-search"></i> Lihat</a></td>
              </tr>
              @else
              <tr>
                <td class="text-center" colspan="4"><b>File Karyawan Belum Di lengkapi, <a
                      href="{{ route('filekaryawan.create', ['filekaryawan'=>$data->nik]) }}"
                      class="text-danger">Lengkapi Data sekarang</a></b>
                </td>
              </tr>
              @endif
            </tbody>
          </table>
        </div>
      </div>
      <!-- /.card-body -->
      {{-- <div class="card-footer">
        Footer
      </div> --}}
      <!-- /.card-footer-->
    </div>

  </div>
  {{-- Akhir Card Detail --}}

  </div><!-- /.container-fluid -->
</section>
<!-- /.content akhir -------------------------------------------------------------------------------------------------------->

@endsection