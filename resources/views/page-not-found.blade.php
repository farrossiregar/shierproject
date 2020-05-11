@extends('layout.app')

@section('title', 'Halaman Tidak Ditemukan - Shier Project')

@section('content')


<!--    END MAIN    -->

<div class="container" style="background-color: white; height: 75vh; overflow: hidden;">
  <div class="row" style="margin-top: 10vh; text-align: center;">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <strong style=" font-size: 8vw;"><b>404</b></strong><br>
      <strong style="width: 80vw;"><b>Oops, halaman yang anda cari tidak ditemukan</b></strong>
      <br>
      <br>
      <br>
      Kembali ke <strong><a href="{{ route('/') }}">Home</a></strong>
    </div>
    <div class="col-md-2"></div>
    
  </div>
</div>

@endsection
