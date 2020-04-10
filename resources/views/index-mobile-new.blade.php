@extends('layout.app')

@section('title', 'Shier Project')

@section('content')

<style>
  .headlineSlide{
    height: 65vh;
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
        <div class="numbertext"><?php //echo $no; ?></div>
          <?php
            if($item->image_name != ''){
          ?>
          <img src="<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>" style="width:auto; height: 65vh;">
          <?php
            }else{
          ?>
          <img src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/B328284533D1C776C141B676F54E8D626B19DC9327F399BB99F196A8DE0A2AF8/scale?aspectRatio=1.78&format=jpeg" style="width:100%; height: 35vh;">
          <?php
            }
          ?>
          <div style="height: 100%; width: 100vw;">
            <div style="text-align: right; height: 105%; width: 65%; position: relative; top: -425px; left: -1px; padding: 30px 10px; color: white; background-color: rgba(0,0,0,0.6);">
              <h3><b>{{ $item->title }}</b></h3>
            </div>
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
          <img class="demo cursor" src="<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>" style="width:100%; height: 40px;" onclick="currentSlide(<?php echo $no; ?>)">
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
  <!--    END MAIN    -->

  <div class="container" style="background-color: white;">

    <div class="row">
      <!--  TERBARU -->
      <div class="col-md-12" style="border-right: 1px solid lightgray;">
        <div class="row">
          <div class="col-md-12">
            <br><br>
            <br>
            <div class="title-list" style="background-color: black; width: 85px;">
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
              if($key >= 8){
                break;
              }
            ?>
            <a href="{{ route('detail', $item->alias) }}" style="display: inline-block; width: 44vw; vertical-align: text-top; margin: 0 2px;">
            <?php
              if($item->image_name != ''){
            ?>
              <img style="width: 100%; height: 120px; border-radius: 10px; " src="<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>">
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
            <div class="title-list" style="background-color: black; width: 80px;">
                <h4><b>Koleksi</b></h4>
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
                          <img src="<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>" alt="" style="width: 100%; border-radius: 8px;">
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
    
  </div>

  @endsection