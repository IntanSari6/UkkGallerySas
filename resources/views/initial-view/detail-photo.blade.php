@extends('initial-view.main')

@section('container')

 <!-- Detail Start -->
 <div style="margin-left: 100px" class="py-5">
    <div class="row pt-5">
      <div class="col-lg-8">
        <div class="d-flex flex-column text-left mb-3">
          <p class="section-title pr-5">
            <span class="pr-2">Blog Detail Page</span>
          </p>
          <h1 class="mb-3">{{ $photo->judulFoto }}</h1>
          <div class="d-flex">
            <p class="mr-3"><i class="fa fa-user text-primary"></i> {{ $photo->user->namaLengkap }}</p>
            <p class="mr-3">
              <i class="fa fa-folder text-primary"></i> {{ $photo->judulAlbum }}
            </p>
            {{-- <p class="mr-3"><i class="fa fa-comments text-primary"></i>{{ $photo->comments_count }}</p> --}}
            <p class="mr-3"><i class="fa fa-comments text-primary"></i></p>

            <small class="mr-3 like-icon"><a href="/initial-view/detail-photo/{{$photo->photoId}}/like"><i class="fa fa-heart text-primary">{{$like}}</i></a></small>

          </div>
        </div>
        <div class="mb-5">
            <img class="card-img-top mb-2" src="{{ asset('storage/' . $photo->lokasiFile) }}" alt="" style="width: 400px;" />
          <p>
            {{ $photo->deskripsiPhoto }}
          </p>
      </div>

   <div class="bg-light p-5">
     <div class="row">
    <div class="col-12">
        <div class="card" style="margin-top: 20px;">
            <div class="card-header">
                Komentar
            </div>
            <div class="card-body" style="overflow-y: auto; max-height: 400px;">
                @foreach ($comment as $singleComment)
                <div class="card mb-3">
                    <div class="card-body">
                        <h6 class="card-title">Nama: <b>{{ $singleComment->user->namaLengkap }}</b></h6>
                        <h5 class="card-subtitle mb-2 text-muted">Komentar: <b>{{ $singleComment->isiKomentar }}</b></h5>
                        <footer class="blockquote-footer"> <cite title="Source Title">Tanggal Unggah : {{$singleComment->tanggalKomentar}}</cite></footer>
                    </div>
                </div>
                @endforeach              
            </div>
        </div>
    </div>
</div>

 
    <div class="row">
        <div class="card-body p-4"> 
            <form id="commentForm" method="post" action="/initial-view/detail-photo/{{$id}}" class="mb-5">
                @csrf
                <small style="line-height:5px"></small>
                <div class="form-floating mb-3">
                    <label for="floatingTextarea2">Komentar</label>
                    <textarea class="form-control @error('isiKomentar') is-invalid @enderror" id="isiKomentar" name="isiKomentar" style="height: 100px" required data-parsley-trigger="keyup">{{ old('isiKomentar') }}</textarea>
                    @error('isiKomentar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
    
                <div class="form-floating mb-3">
                    <button type="submit" class="btn btn-primary custom-button">Kirim</button>
                </div>
            </form>
        </div>
    </div>
    </div>
    


    </div>
  </div>
 </div>
  <!-- Detail End -->

@endsection