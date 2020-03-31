@extends('layout.app')

@section('title', 'Shier Project')

@section('content')

<style>
  .headlineSlide{
    height: 30vh;
  }
</style>
<div class="col-md-12" style="width: 100vw; height: 100%; padding: 0 2px; display: inline-block; overflow: hidden;">
  <div style="width: 100%;">
  <?php
    $no = 0;
  ?>
  @foreach($data as $key => $item)
  <?php
    $no = $no + 1;
  ?>
    <a href="{{ route('detail', $item->alias) }}">
      <div class="mySlides headlineSlide">
        <div class="numbertext"><?php echo $no; ?></div>
          <?php
            if($item->image_name != ''){
          ?>
          <img src="{{asset('image/content').'/'.$item->image_name}}" style="width:100%; height: 35vh;">
          <?php
            }else{
          ?>
          <img src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/B328284533D1C776C141B676F54E8D626B19DC9327F399BB99F196A8DE0A2AF8/scale?aspectRatio=1.78&format=jpeg" style="width:100%; height: 35vh;">
          <?php
            }
          ?>
          <div style="position: relative; top: -70px; left: 0px; width: 100vw; padding: 5px; color: white; background-color: rgba(0,0,0,0.6);">
            <h5><b>{{ $item->title }}</b></h5>
          </div>
      </div>
    </a>
  @endforeach

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <div class="row" style="overflow: hidden;">
      <?php
        $no = 0;
      ?>
      @foreach($data as $key => $item)
      <?php
        $no = $no + 1;
      ?>
      <div class="column">
        <?php
          if($item->image_name != ''){
        ?>
          <img class="demo cursor" src="{{asset('image/content').'/'.$item->image_name}}" style="width:100%; height: 40px;" onclick="currentSlide(<?php echo $no; ?>)">
        <?php
          }else{
        ?>
          <img class="demo cursor" src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/B328284533D1C776C141B676F54E8D626B19DC9327F399BB99F196A8DE0A2AF8/scale?aspectRatio=1.78&format=jpeg" style="width:100%; height: 40px;" onclick="currentSlide(<?php echo $no; ?>)" >
        <?php
          }
        ?>
      </div>
      @endforeach
    
    </div>
  </div>
</div>
  <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("demo");
          var captionText = document.getElementById("caption");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
          captionText.innerHTML = dots[slideIndex-1].alt;
        }
      </script>
<br>
<!-- <div style="background-image: url('https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/B328284533D1C776C141B676F54E8D626B19DC9327F399BB99F196A8DE0A2AF8/scale?aspectRatio=1.78&format=jpeg'); background-size: cover; width: 100vw; height: 30vh; background-repeat: no-repeat; background-position: center; display: inline-block;"></div> -->
  <!--    END MAIN    -->

  <div class="container" style="background-color: white;">
    <div class="row">
      <!--  TERBARU -->
      <div class="col-md-12" style="border-right: 1px solid lightgray;">
        <div class="row">
          <div class="col-md-12">
            <br><br>
            <br>
            <div style="padding: 1px 6px; background-color: black; width: 115px; border-radius: 10px 10px 0px 0px; color: white;">
              <h4><b>Terbaru</b></h4>
            </div>
            <div style="border: 2px solid black;"></div>
            <br>
          </div>
        </div>
        
        
        <div class="row">
          <div class="col-md-12">
            @foreach($data as $key => $item)
            <?php
              if($key >= 4){
                break;
              }
            ?>
            <a href="{{ route('detail', $item->alias) }}" style="display: inline-block; width: 44vw; vertical-align: text-top; margin: 0 2px;">
            <?php
              if($item->image_name != ''){
            ?>
              <img style="width: 100%; height: 120px; border-radius: 10px; " src="{{asset('image/content').'/'.$item->image_name}}">
            <?php
              }else{
            ?>
              <img style="width: 100%; height: 120px; border-radius: 10px; " src="https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg">
            <?php
              }
            ?>
              <h5 style="text-decoration: none; color: black;">{{ $item->title }}</h5>
            </a> 
            @endforeach
          </div>
        </div>

        <hr>
        <div class="artikel_terkait row">
          <div class="col-md-12">
            <div style="padding: 1px 10px; background-color: black; color: white; width: 80px; border-radius: 10px 10px 0px 0px;">
                <h5><b>Koleksi</b></h5>
            </div>
            <div style="border: 2px solid black;">
            </div>
          </div>
          <br>
          @foreach($data as $key => $item)
          <a href="{{ route('detail', $item->alias) }}">
              <div class="col-md-12">
                  <div class="row" style="vertical-align: text-top;">
                      <div class="col-md-4" style="display: inline-block; width: 35vw; vertical-align: text-top;">
                      <?php
                          if($item->image_name != ''){
                      ?>
                          <img src="{{ asset('image/content').'/'.$item->image_name }}" alt="" style="width: 100%; border-radius: 8px;">
                      <?php
                          }else{
                      ?>
                          <img src="https://images.pexels.com/photos/301703/pexels-photo-301703.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" style="width: 100%; border-radius: 8px;">
                      <?php
                          }
                      ?>
                      
                      </div>
                      <div class="col-md-8" style="display: inline-block; width: 55vw; vertical-align: text-top;">
                      <b><h5 style="font-size: 100%; text-decoration: none; color: black;">{{ $item->title }}</h5></b>
                      </div>
                  </div>
              </div>
          </a><br>
          @endforeach
        </div>
      </div>
      <!--  TERBARU -->
    </div>

    <!-- <div class="row"> -->
      <!--  POPULER -->
      <!-- <div class="col-md-12">
        <div class="row"> -->
          <!-- ANTARA NEWS -->
          <!-- <div class="col-md-12">
            <h3><a href="https://www.antaranews.com"><b>Antara News Terkini</b></a></h3>
            <hr style="color: black;">
            <div id="antara_news_id" style="height:60vh; width: 100%; overflow-y: scroll;">

            </div>
            <br>
          </div> -->
          <!-- ANTARA NEWS -->

        <!-- </div>
      </div> -->
      <!--  POPULER -->
    <!-- </div> -->
    
    
  </div>

  @endsection