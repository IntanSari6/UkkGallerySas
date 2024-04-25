@extends('initial-view.main')
  
@section('container')

<div class="container-fluid tm-container-content tm-mt-60">
    <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">Detail Album</span>
        </p>
        <h1 class="mb-4">Our Scoop And Skoops Gallery</h1>
      </div>

    <div class="row pb-3">
      <div class="col-12">
          <div class="card mb-4">
              <div class="card-header p-4">
                  <h4>Judul Album : {{$photos[0]->namaAlbum}}</h4>
              </div>
              <div class="card-body text-center">
                  <blockquote class="blockquote mb-0">
                      <p><h5>Deskripsi Album :{{$photos[0]->deskripsi}}</h5></p>
                      <footer class="blockquote-footer"> <cite title="Source Title">Tanggal Unggah : {{$photos[0]->tanggalDibuat}}</cite></footer>
                  </blockquote>
              </div>
          </div>
      </div>
  </div>

    <div class="row mb-4">
        @foreach ($photos as $photo)
        <div class="col-md-4">
            <div class="card mb-4">
                <img class="card-img-top" src="{{ asset('storage/' . $photo->lokasiFile) }}" alt="" style="width: 100%;" />
                <div class="card-body">
                    <h5 class="card-title">Judul Foto : {{$photo->judulPhoto}}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>


</div>

@endsection