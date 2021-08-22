@extends('layouts/main', ['title' => 'Daftar Nama Club', 'side' => 'Club'])

@section('contents')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Daftar Nama Club</h1>
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

    {{-- @dump($clubs) --}}

    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-sm-5">
        <a href="{{ route('club.create') }}" class="btn btn-primary mb-3">Tambah Club</a>

        <ol class="list-group list-group-numbered">
          @foreach($clubs as $club)
          <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
              <div class="fw-bold">{{$club->nama_club}}</div>
            </div>
            <div>
              {{-- <a href="{{ route('club.edit', ['club' => $club->id]) }}"
              class="badge bg-yellow rounded-pill text-decoration-none">Edit</a> --}}
              <a href="{{ route('club.show', ['club' => $club->id]) }}"
                class="badge bg-black rounded-pill text-decoration-none">Detail</a>
              {{-- <a href="#" class="badge bg-danger rounded-pill text-decoration-none">Delete</a> --}}
              <form action="{{ route('club.delete', ['club' => $club->id]) }}" method="post"
                class="d-inline text-decoration-none">
                @method('delete')
                @csrf
                <button type="submit" class="btn badge bg-danger rounded-pill text-decoration-none"
                  onclick="archiveFunction()">Hapus</button>
              </form>
            </div>
          </li>
          @endforeach
        </ol>
      </div>
    </div>

  </div><!-- /.container-fluid -->
</section>
<!-- /.content akhir -------------------------------------------------------------------------------------------------------->


@endsection