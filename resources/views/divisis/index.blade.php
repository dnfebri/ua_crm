@extends('layouts/main', ['title' => 'Daftar Nama Divisi', 'side' => 'Divisi'])

@section('contents')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Daftar Nama Divisi</h1>
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

    {{-- @dump($divisis) --}}

    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-sm-5">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Tambah Divisi
        </button>

        <ol class="list-group list-group-numbered mt-3">
          @foreach($divisis as $divisi)
          <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
              <div class="fw-bold">{{$divisi->nama_divisi}}</div>
            </div>
            <div>
              {{-- <a href="{{ route('divisi.show', ['divisi' => $divisi->id]) }}"
              class="badge bg-black rounded-pill text-decoration-none">Detail</a>
              <form action="{{ route('divisi.delete', ['divisi' => $divisi->id]) }}" method="post"
                class="d-inline text-decoration-none">
                @method('delete')
                @csrf
                <button type="submit" class="btn badge bg-danger rounded-pill text-decoration-none"
                  onclick="return confirm('Apakah anda yakin ?')">Hapus</button>
              </form> --}}
            </div>
          </li>
          @endforeach
        </ol>
      </div>
    </div>

  </div><!-- /.container-fluid -->
</section>
<!-- /.content akhir -------------------------------------------------------------------------------------------------------->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Divisi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('divisi.store') }}" method="post">
        @csrf
        <div class="modal-body">
          <div class="mb-2">
            <label for="nama_divisi" class="form-label">Nama Divisi</label>
            <input type="text" class="form-control @error('nama_divisi') is-invalid @enderror" id="nama_divisi"
              name="nama_divisi" value="{{ old('nama_divisi') }}" placeholder="Nama Divisi" required>
            @error('nama_divisi')
            <div id="nama_divisi" class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection