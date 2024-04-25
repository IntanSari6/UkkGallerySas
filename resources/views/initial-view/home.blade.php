@extends('initial-view.main')

@section('container')

<div class="container-fluid pt-5">
  <div class="container">
    <div class="text-center pb-2">
      <p class="section-title px-2">
        <span class="px-2">Foto Terbaru</span>
      </p>
    </div>

    <div class="row pb-3">
      @foreach ($photo as $photo) 
      <div class="col-lg-4 mb-4">
        <div class="card border-0 shadow-sm mb-2">
          <img class="card-img-top mb-2" src="{{ asset('storage/' . $photo->lokasiFile) }}" alt="" style="width: 100%;" />
          <div class="card-body bg-light text-center p-4">
            <h4>{{ $photo->judulPhoto }}</h4>
            <div class="d-flex justify-content-center mb-3">
              <small class="mr-3"><i class="fa fa-user text-primary"></i> {{ $photo->user->namaLengkap }} </small>
              <small class="mr-3"><i class="fa fa-folder text-primary"></i> {{ $photo->namaAlbum }} </small>
              <small class="mr-3"><i class="fa fa-comments text-primary"></i></small>
              <small class="mr-3 like-icon"><a href="/like/{$photo->photoId}"><i class="fa fa-heart text-primary"></i></a></small>
            </div>
            <p>{{ $photo->deskripsiPhoto }}</p>
            <a href="/initial-view/detail-photo/{{$photo->photoId}}" class="btn btn-primary px-4 mx-auto my-2">Read More</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>

@endsection