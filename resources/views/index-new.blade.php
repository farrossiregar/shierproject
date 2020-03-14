@extends('layout.app')

@section('title', 'Shier Project')

@section('content')


<!--    MAIN    -->
<div style="height: 60vh;" class="row">
    <!-- <div class="col-md-6" style="width: auto%; height: 100%; background-image: url('https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/B328284533D1C776C141B676F54E8D626B19DC9327F399BB99F196A8DE0A2AF8/scale?aspectRatio=1.78&format=jpeg'); background-size: cover; background-repeat: no-repeat; background-position: center; padding: 0 2px; display: inline-block; overflow: hidden;"></div> -->
    <div class="col-md-6" style="padding: 0px;">
      <img src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/B328284533D1C776C141B676F54E8D626B19DC9327F399BB99F196A8DE0A2AF8/scale?aspectRatio=1.78&format=jpeg" style="width: 100%; height: auto; margin: 0px;" alt="">
    </div>
    <div class="col-md-6" style="width: 50vw; height: 100%; padding: 0 2px; display: inline-block; overflow: hidden;">
      <div style="width: 100%;">
        @foreach($data as $key => $item)
        <div class="mySlides">
          <div class="numbertext"><?php echo $key + 1; ?></div>
          <img src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/B328284533D1C776C141B676F54E8D626B19DC9327F399BB99F196A8DE0A2AF8/scale?aspectRatio=1.78&format=jpeg" style="width:100%">
        </div>
        @endforeach
          
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

        <div class="caption-container">
          <p id="caption"></p>
        </div>

        <!-- <div class="row" style="overflow: hidden;">
        @foreach($data as $key => $item)
          <div class="column">
            <img class="demo cursor" src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/B328284533D1C776C141B676F54E8D626B19DC9327F399BB99F196A8DE0A2AF8/scale?aspectRatio=1.78&format=jpeg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
          </div>
        @endforeach
        <div class="column">
          <img class="demo cursor" src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/B328284533D1C776C141B676F54E8D626B19DC9327F399BB99F196A8DE0A2AF8/scale?aspectRatio=1.78&format=jpeg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
        </div> -->
          
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

    </div>
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
  
      <!-- ANTARA NEWS -->
      <div class="col-md-4">
      <br>
        <div class="row">
          @include('widget.antaranewswidget')
        </div>
      </div>
      <!-- ANTARA NEWS -->
    </div>
  
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-12">
          <h3><b>Terpopuler</b></h3>
          <hr style="color: black;">
          <div class="row" style="vertical-align: text-top;">
            @foreach($data as $key => $item)
            <?php
              if($key >= 4){
                break;
              }
            ?>
            <!-- <a href="{{ route('detail', $item->alias) }}" >
              <div style="display: inline-block; width: 20%;  vertical-align: text-top;">
                <img style="width: 100%; border-radius: 10px;" src="https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg">
                <p>{{ $item->title }}</p>
              </div>
            </a> -->
            <a href="{{ route('detail', $item->alias) }}" >
              <div class="col-md-3" style="display: inline-block; vertical-align: text-top;">
                <img style="width: 100%; border-radius: 10px;" src="https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg">
                <p>{{ $item->title }}</p>
              </div>
            </a>
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
          <a href="{{ route('detail', $item->alias) }}">
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
  