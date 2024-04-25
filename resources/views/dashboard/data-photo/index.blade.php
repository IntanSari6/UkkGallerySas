@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mt-5 border-bottom">
    <h3>Data Foto</h3>
</div>
<br>

@if (session()->has('success'))
      <div class="alert alert-success col-lg" role="alert">
        {{ session('success') }}
      </div>
      @endif

      <div class="card-body p-0">
        <div class="table-responsive">
          <a href="/dashboard/data-photo/create" class="btn btn-primary mb-3">Tambah</a>
          <table class="table table-striped table-md">
            <tr>
              <th>#</th>
              <th>Judul Foto</th>
              <th>Deskripsi Foto</th>
              <th>Tanggal Unggah</th>
              <th>Lokasi File</th>
              <th>Album </th>
              <th>User </th>
              <th>Aksi</th>
            </tr>
            @foreach ($photo as $photo)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$photo->judulPhoto}}</td>
              <td>{{$photo->deskripsiPhoto}}</td>
              <td>{{$photo->tanggalUnggah}}</td>
              <td>{{$photo->lokasiFile}}</td>
              <td>{{$photo->albumId}}</td>
              <td>{{$photo->userId}}</td>
              <td>
                <a href="/dashboard/data-photo/{{$photo->photoId}}/edit" class="badge bg-warning"><i class="fas ion-edit"></i></a>
                
                <form action="/dashboard/data-photo/{{ $photo->photoId }}" method="POST" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Yakin akan dihapus??')"><i class="fas ion-trash-a"></i></button>
                </form>
                
              </td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
      <div class="card-footer text-right">
        {{-- {!! $inventory->links()!!} --}}
      </div>
    </div>
  </div>
@endsection
