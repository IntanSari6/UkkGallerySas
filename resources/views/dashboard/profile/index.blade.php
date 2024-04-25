@extends('dashboard.layout.main')

@section('container')

<div class="container">
    <div class="main-body">
    
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mt-5 border-bottom">
            <h3>Profil</h3>
        </div>
    <br>
          <div class="row gutters-sm">
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Username</h6>
                    </div>
                    <div class="col-sm-9">
                      {{ auth()->user()->username }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama Lengkap</h6>
                    </div>
                    <div class="col-sm-9">
                      {{ auth()->user()->namaLengkap }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9">
                      {{ auth()->user()->email }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Alamat</h6>
                    </div>
                    <div class="col-sm-9">
                      {{ auth()->user()->alamat }}
                    </div>
                  </div>
                  <hr>
                  </div>
            </div>
          </div>

        </div>
    </div>

 

@endsection