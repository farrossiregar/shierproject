@extends('layout.app')

@section('title', 'Shier Project')

@section('content')


<!--    MAIN    -->
<div style="height: 60vh;" class="row">
    <div class="col-md-6" style="background-image: url('https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/B328284533D1C776C141B676F54E8D626B19DC9327F399BB99F196A8DE0A2AF8/scale?aspectRatio=1.78&format=jpeg'); background-size: cover; width: 50vw; height: 100%; background-repeat: no-repeat; background-position: center; padding: 0 2px; display: inline-block;"></div>
    <div class="col-md-6" style="background-image: url('https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/B328284533D1C776C141B676F54E8D626B19DC9327F399BB99F196A8DE0A2AF8/scale?aspectRatio=1.78&format=jpeg'); background-size: cover; width: 50vw; height: 100%; background-repeat: no-repeat; background-position: center; padding: 0 2px; display: inline-block;"></div>
</div>
<br>
<!--    END MAIN    -->
  
  <div class="container" >
    <div class="row">
      <div class="col-md-8">
        <div  class="col-md-12">
          <!--  TERBARU -->
          <h3><b>Terbaru</b></h3>
          <hr style="color: black;">
          <div class="row">
            @foreach($data as $item)
            <div class="col-md-6 terbaru-tile-parent" >
              <div class="terbaru-tile">
                <div class="terbaru-title-tile">
                  <a href=""><b>{{ $item->title }}</b></a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <!--  TERBARU -->
        </div>
      </div>
  
      <!--  POPULER -->
      <div class="col-md-4">
        <div class="row">
          <!-- ANTARA NEWS -->
          <div class="col-md-12">
            <h3><a href="https://www.antaranews.com"><b>Antara News Terkini</b></a></h3>
            <hr style="color: black;">
            <div id="antara_news_id" style="height:60vh; width: 100%;">
  
            </div>
            <br>
          </div>
          <!-- ANTARA NEWS -->
  
          <!-- <div class="col-md-12">
            <h3><b>Republika Ekonomi</b></h3>
            <hr style="color: black;">
            <div id="republika_news_id" style="height:60vh; width: 100%; overflow-y: scroll; overflow-x:visible;">
              <div class="row">
                <div class="col-md-4">
                  <img style="width: 100%;" src="https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg">
                </div>
                <div class="col-md-8">
                  <p>Only when the button is clicked, the navigation bar will be displayed.</p>
                </div>
              </div>
              <br>
            </div>
          </div> -->
  
        </div>
      </div>
      <!--  POPULER -->
    </div>
  
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-12">
          <h3><b>Terpopuler</b></h3>
          <hr style="color: black;">
          <div class="row">
            @foreach($data as $item)
            <div class="col-md-3">
              <img style="width: 100%; border-radius: 10px;" src="https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg">
              <p>{{ $item->title }}</p>
            </div>
            @endforeach
            
          </div>
        </div>
      </div>
    </div>
  
    <!--    Koleksi   -->
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-8">
          <h3><b>Koleksi</b></h3>
          <hr style="color: black;">
          @foreach($data as $item)
          <a href="" target="_blank">
            <div class="row">
              <div class="col-md-4">
                <img style="width: 100%; border-radius: 5px;" src="https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg">
              </div>
              <div class="col-md-8">
                <h4>{{ $item->title }}</h4>
              </div>
            </div>
          </a><br>
          @endforeach
          
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
  
    <!--    Koleksi   -->

    @endsection
  