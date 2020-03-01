@extends('layout.app')

@section('title', 'Shier Project')

@section('content')

<!--    MAIN    -->
<div class="slideshow-container">

<div class="mySlides fade" style="overflow: hidden; height: 30vh;">
  <div class="numbertext">1 / 3</div>
  <img src="https://images.pexels.com/photos/256219/pexels-photo-256219.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade" style="overflow: hidden;  height: 30vh;">
  <div class="numbertext">2 / 3</div>
  <img src="https://images.pexels.com/photos/301703/pexels-photo-301703.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade" style="overflow: hidden;  height: 30vh;">
  <div class="numbertext">3 / 3</div>
  <img src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/B328284533D1C776C141B676F54E8D626B19DC9327F399BB99F196A8DE0A2AF8/scale?aspectRatio=1.78&format=jpeg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
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
  var dots = document.getElementsByClassName("dot");
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
}
</script>

<!-- <div style="background-image: url('https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/B328284533D1C776C141B676F54E8D626B19DC9327F399BB99F196A8DE0A2AF8/scale?aspectRatio=1.78&format=jpeg'); background-size: cover; width: 100vw; height: 30vh; background-repeat: no-repeat; background-position: center; display: inline-block;"></div> -->
  <!--    END MAIN    -->

  <div class="container" style="background-color: white;">
    <div class="row">
      <!--  TERBARU -->
      <div class="col-md-12" style="border-right: 1px solid lightgray;">
        <br><br>
        <h4><b>Terbaru</b></h4>
        <hr style="color: black;">
        
        <div class="row">
          <?php
            $no = 0;
          ?>
          @foreach($data as $item)
          
          <?php
            $no = $no + 1; 
          ?>
          <a href="{{ $item->link }}">
            <div class="col-md-6" style="display: inline-block; width: 48%; height: 30vh;">
              <img style="width: 100%; border-radius: 10px; " src="https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg">
              <div style="height: 5vh; border: 1px solid black;">
                <!-- <h4>{{ $item->title }}</h4> -->
              </div>
            </div>
          </a>
          
          @endforeach
        </div>
        
        <hr>
        <!-- <div class="row">
          <div class="col-md-6" style="display: inline-block; width: 48%; height: 100%;">
            <img style="width: 100%; border-radius: 10px; " src="https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg">
            <h4>Only when the button is clicked, the navigation bar will be displayed.</h4>
          </div>
          <div class="col-md-6" style="display: inline-block; width: 48%; height: 100%;">
            <img style="width: 100%; border-radius: 10px;" src="https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg">
            <h4>Only when the button is clicked, the navigation bar will be displayed.</h4>
          </div>
        </div> -->

        <h3><b>Populer</b></h3>
        <hr>
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-6" style="display: inline-block; width: 45%;">
                <img style="width: 100%;" src="https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg">
              </div>
              <div class="col-md-6" style="display: inline-block; width: 45%;">
                <p>Only when the button is clicked, the navigation bar will be displayed</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6" style="display: inline-block; width: 45%;">
                <img style="width: 100%;" src="https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg">
              </div>
              <div class="col-md-6" style="display: inline-block; width: 45%;">
                <p>Only when the button is clicked, the navigation bar will be displayed</p>
              </div>
            </div>
          </div>
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