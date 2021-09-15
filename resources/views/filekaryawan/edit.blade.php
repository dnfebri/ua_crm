@extends('layouts/main', ['title' => 'Upload File Karyawan', 'side' => 'Karyawan'])

@section('contents')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Upload File Karyawan</h1>
      </div>

    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->


<!-- Main content  ---------------------------------------------------------------------------------------------------------->
<section class="content">
  <div class="container">

    {{-- Card Index --}}
    <div class="row">
      <div class="col-sm-4">

        <div class="card">
          <img src="{{url('img/karyawan/foto/default.jpg')}}" class="img-fluid img-thumbnail rounded mx-auto d-block"
            alt="..." style="width: 13rem;">
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

      <div class="col-sm-8">
        <div class="card card-secondary">
          <div class="card-header">
            <h3 class="card-title font-weight-bold">Upload File</h3>

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
            <form action="{{ route('filekaryawan.store') }}" method="post" enctype="multipart/form-data">
              @csrf
              <input type="text" name="id_karyawan" id="id_karyawan" value="{{ $data->id }}" hidden>
              <div class="mb-3 row">
                <label for="img_foto" class="col-lg-3 col-form-label">Foto Karyawan</label>
                <div class="col-lg-9">
                  <div class="mb-3">
                    <input class="form-control mb-2 input-img @error('img_foto') is-invalid @enderror" id="img_foto"
                      name="img_foto" value="" type="file">
                    @error('img_foto')
                    <div id="img_foto" class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                    <img src="{{url('img/karyawan')}}{{ $filekaryawan->foto ?? '/default.png' }}"
                      class="img-thumbnail img-previuw">
                    <div class="img-label">
                      {{ $filekaryawan->foto }}
                    </div>
                  </div>
                </div>
              </div>

              <div class="mb-3 row">
                <label for="img_ktp" class="col-lg-3 col-form-label">Foto KTP</label>
                <div class="col-lg-9">
                  <div class="mb-3">
                    <input class="form-control mb-2 input-img @error('img_ktp') is-invalid @enderror" id="img_ktp"
                      name="img_ktp" value="" type="file">
                    @error('img_ktp')
                    <div id="img_ktp" class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                    <img src="{{url('img/karyawan')}}{{ $filekaryawan->ktp ?? '/default.png' }}"
                      class="img-thumbnail img-previuw">
                    <div class="img-label">
                      {{ $filekaryawan->ktp }}
                    </div>
                  </div>
                </div>
              </div>

              <div class="mb-3 row">
                <label for="img_kartu_keluarga" class="col-lg-3 col-form-label">Foto Kartu Keluarga</label>
                <div class="col-lg-9">
                  <div class="mb-3">
                    <input class="form-control mb-2 input-img @error('img_kartu_keluarga') is-invalid @enderror"
                      id="img_kartu_keluarga" name="img_kartu_keluarga" value="" type="file">
                    @error('img_kartu_keluarga')
                    <div id="img_kartu_keluarga" class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                    <img src="{{url('img/karyawan')}}{{ $filekaryawan->kartu_keluarga ?? '/default.png' }}"
                      class="img-thumbnail img-previuw">
                    <div class="img-label">
                      {{ $filekaryawan->kartu_keluarga }}
                    </div>
                  </div>
                </div>
              </div>

              <div class="mb-3 row">
                <label for="img_ijazah" class="col-lg-3 col-form-label">Foto Ijazah</label>
                <div class="col-lg-9">
                  <div class="mb-3">
                    <input class="form-control mb-2 input-img @error('img_ijazah') is-invalid @enderror" id="img_ijazah"
                      name="img_ijazah" value="" type="file">
                    @error('img_ijazah')
                    <div id="img_ijazah" class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                    <img src="{{url('img/karyawan')}}{{ $filekaryawan->ijazah ?? '/default.png' }}"
                      class="img-thumbnail img-previuw">
                    <div class="img-label">
                      {{ $filekaryawan->ijazah }}
                    </div>
                  </div>
                </div>
              </div>

              <div class="mb-3 row">
                <label for="img_rek_mandiri" class="col-lg-3 col-form-label">Foto Rekening Mandiri</label>
                <div class="col-lg-9">
                  <div class="mb-3">
                    <input class="form-control mb-2 input-img @error('img_rek_mandiri') is-invalid @enderror"
                      id="img_rek_mandiri" name="img_rek_mandiri" value="" type="file">
                    @error('img_rek_mandiri')
                    <div id="img_rek_mandiri" class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                    <img src="{{url('img/karyawan')}}{{ $filekaryawan->rek_mandiri ?? '/default.png' }}"
                      class="img-thumbnail img-previuw">
                    <div class="img-label">
                      {{ $filekaryawan->rek_mandiri }}
                    </div>
                  </div>
                </div>
              </div>

              <div class="d-grid gap-2 col-6 mx-auto">
                {{-- <button class="btn btn-primary me-md-2" type="button">Button</button> --}}
                <button class="btn btn-success" type="submit"><i class="fas fa-save me-md-1"></i> Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    {{-- Akhir Card Index --}}



  </div>

  </div><!-- /.container-fluid -->
</section>
<!-- /.content akhir -------------------------------------------------------------------------------------------------------->

@endsection