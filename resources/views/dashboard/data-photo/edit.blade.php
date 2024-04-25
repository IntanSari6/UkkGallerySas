@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mt-4 border-bottom">
    <h3>Edit Data Foto</h3>
</div>
<br>

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Gallery Foto</h4>
        </div>

        <form method="post" action="/dashboard/data-photo/{{$photo->photoId}}" class="mb-5" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group row mb-4">
                    <label for="judulPhoto" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul photo</label>
                    <div class="col-sm-12 col-md-7">
                        <input class="form-control @error('judulPhoto') is-invalid @enderror" type="text" id="judulPhoto" name="judulPhoto" value="{{$photo->judulPhoto}}">
                    </div>
                </div>
                @error('judulPhoto')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
        
                <div class="form-group row mb-4">
                    <label for="deskripsiPhoto" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                    <div class="col-sm-12 col-md-7">
                        <textarea class="summernote-simple" id="deskripsiPhoto" type="hidden" name="deskripsiPhoto">{{$photo->deskripsiPhoto}}</textarea>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label for="lokasiFile" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lokasi file</label>
                    <div class="col-sm-12 col-md-7">
                        <input class="form-control @error('lokasiFile') is-invalid @enderror" type="file" id="lokasiFile" name="lokasiFile" value="{{$photo->lokasiFile}}" onchange="previewImage()">
                    </div>
                  </div>
                  @error('lokasiFile')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Album Id</label>
                    <div class="col-sm-12 col-md-7">
                      <select name="albumId" class="form-control selectric">
                       <option disable value="">Pilih Album</option>
                       @foreach ($album as $item)
                           <option value="{{ $item->albumId }}">{{ $item->namaAlbum }}</option>
                       @endforeach
                      </select>
                    </div>
                  </div>
        
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                    <div class="col-sm-12 col-md-7">
                        <button type="submit" class="btn btn-primary">Publish</button>
                    </div>
                </div>
            </div>
        </form>
        
      </div>
    </div>
  </div>
    
@endsection