@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mt-4 border-bottom">
    <h3>Edit Album</h3>
</div>
<br>

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Gallery Album</h4>
        </div>
        
        <form method="post" action="/dashboard/data-album/{{$album->albumId}}" class="mb-5" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group row mb-4">
                    <label for="namaAlbum" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul Album</label>
                    <div class="col-sm-12 col-md-7">
                        <input class="form-control @error('namaAlbum') is-invalid @enderror" type="text" id="namaAlbum" name="namaAlbum" value="{{$album->namaAlbum}}">
                    </div>
                </div>
                @error('namaAlbum')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
        
                <div class="form-group row mb-4">
                    <label for="deskripsi" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                    <div class="col-sm-12 col-md-7">
                        <textarea class="summernote-simple" id="deskripsi" type="hidden" name="deskripsi">{{$album->deskripsi}}</textarea>
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