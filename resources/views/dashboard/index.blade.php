@extends('dashboard.layout.main')

@section('container')
    <!-- Main Content -->
    <div class="main-content">
        @if (Auth::check())
            <h3>Hallo {{ Auth::user()->username }} selamat datang di beranda anda </h3>
        @endif
    </div>
@endsection
