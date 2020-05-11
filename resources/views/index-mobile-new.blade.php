@extends('layout.app')

@section('title', 'Shier Project')

@section('metadesc', 'Shier Project menampilkan berita ringan seputar hiburan dan gaya hidup.')

@section('content')

<style>
  .headlineSlide{
    height: 80vh;
  }
</style>
<div class="col-md-12" style="width: 100vw; height: 100%; padding: 0 2px; display: inline-block; overflow: hidden;">
  <div style="width: 100%;">
  <?php
    $no = 0;
  ?>
  @foreach($data as $key => $item)
  <?php
    if($key >= 3){
      break;
    }
    $no = $no + 1;
  ?>
  <?php
    $url_detail = route('/', $item->url_category.'/'.$item->alias);
  ?>
    <a href="<?php echo str_replace('?', '/', $url_detail); ?>">
      <div class="mySlides headlineSlide">
        <div class="numbertext" style="color: white; background-color: rgba(0,0,0,0.5); height: 100%; width: 75%; padding-right: 5px; padding-left: 20px;">
          <div class="row">
            <div class="col-md-6" style="display: inline-block;">
              <!-- <div style="background-color: black; border-radius: 5px; text-align: center; min-width">
                <h5 style="padding: 2px 4px; "><b><?php echo $item->title_category; ?></b></h5>
              </div> -->
              <span class="btn btn-primary btn-xs" style="background-color: <?php echo $item->bgcolor_category; ?>; padding: 0 15px;">
                <h5><b><?php echo $item->title_category; ?></b></h5>
              </span>
            </div>
            <div class="col-md-6" style="display: inline-block;"></div>
            
          </div>
          <h2><b><?php echo $item->title; ?></b></h2>
        </div>

        <div style="width:100%; height: 80vh; overflow: hidden;">
          <!-- <div style="background-image: url('<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?> ?>'); background-position: center; background-size: cover;">
          </div> -->
          <img src="<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>" style="width: auto; height: 120%;">
        </div>
        <!-- <img src="<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>" style="width:auto; height: 70vh;"> -->
          <!-- <div style="height: 100%; width: 100vw;">
            <div style="text-align: right; height: 105%; width: 65%; position: relative; top: -425px; left: -1px; padding: 30px 10px; color: white; background-color: rgba(0,0,0,0.6);">
              <h3><b>{{ $item->title }}</b></h3>
            </div>
          </div> -->
      </div>
    </a>
  @endforeach

    <a class="prev" style="margin-top: 120px;" onclick="plusSlides(-1)">❮</a>
    <a class="next" style="margin-top: 120px;" onclick="plusSlides(1)">❯</a>

    <!-- <div class="caption-container">
      <p id="caption"></p>
    </div> -->

    <div class="row" style="overflow: hidden;">
      <?php
        $no = 0;
      ?>
      @foreach($data as $key => $item)
      <?php
      if($key >= 6){
        break;
      }

        $no = $no + 1;
      ?>
      <!-- <div class="column">
        <img class="demo cursor" src="<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>" style="width:100%; height: 40px;" onclick="currentSlide(<?php echo $no; ?>)">
      </div> -->
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
  <!--    END MAIN    -->

  <div class="container" style="background-color: white; margin-top: 15px;">
    <!-- <div class="row">
      include('widget.index-banner-corona-mobile')
    </div> -->

    <div class="row">
      <!--  TERBARU -->
      <div class="col-md-12" style="border-right: 1px solid lightgray;">
        <div class="row">
          <div class="col-md-12">
            <br><br>
            <div class="title-list" style="background-color: black; width: 85px;">
              <h4><b>Terbaru</b></h4>
            </div>
            <div style="border: 2px solid black;"></div>
            <br>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-12">
            <?php
              $idx = 0;
            ?>
            @foreach($data as $key => $item)
            
            <?php
              if($key >= 3){
                $idx = $idx + 1;
                $url_detail = route('/', $item->url_category.'/'.$item->alias);
                
                if(($idx == 1) or ($idx % 5 == 1)){

            ?>
                  <br><br>
                  <a href="<?php echo str_replace('?', '/', $url_detail); ?>">
                    <div style="width: 100%; background-image: url('<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>'); background-position: center; background-size: cover; height: 175px; border-radius: 10px; overflow: hidden; margin-bottom: 10px;">
                      <div style="background-image: linear-gradient(to bottom, rgba(255,255,255,0.1), rgba(0,0,0,0.2), rgba(0,0,0,0.6)); height: 100%; width: 120%; padding-right: 50px;">
                        <div style="padding: 10px; padding-bottom: 0px;">
                          <b style="font-size: 100%; text-decoration: none; color: <?php echo $item->bgcolor_category; ?>; margin-top: 2px; font-size: 10px;">{{ $item->title_category }}</b><br>
                        </div>
                        
                        <div style="color: white; padding: 10px;">
                          <h4><b>{{ $item->title }}</b></h4>
                        </div>
                      </div>
                    </div>
                  </a>
            
            <?php 
                }else{
            ?>
                  <a href="<?php echo str_replace('?', '/', $url_detail); ?>"  style="display: inline-block; width: 44vw; vertical-align: text-top; margin: 0 2px;">
                    <img style="width: 100%; height: 120px; border-radius: 10px; " src="<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>">
                    <b style="font-size: 100%; text-decoration: none; color: <?php echo $item->bgcolor_category; ?>; margin-top: 2px; font-size: 10px;">{{ $item->title_category }}</b><br>
                    <p style="text-decoration: none; color: black;"><b>{{ $item->title }}</b></p>
                  </a> 

            <?php
                }
              }
            ?>

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
          <?php
            $idx = 0;
          ?>
          @foreach($data as $key => $item)
          <?php
            $url_detail = route('/', $item->url_category.'/'.$item->alias);
          ?>
          <?php
            $idx = $idx + 1;

            $url_detail = route('/', $item->url_category.'/'.$item->alias);

            if(($idx == 1) or ($idx % 5 == 1)){

          ?>
          
          <a href="<?php echo str_replace('?', '/', $url_detail); ?>">
            <div class="col-md-12">
              <div style="width: 100%; background-image: url('<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>'); background-position: center; background-size: cover; height: 175px; border-radius: 10px; overflow: hidden; margin-bottom: 10px;">
                <div style="background-image: linear-gradient(to bottom, rgba(255,255,255,0.1), rgba(0,0,0,0.2), rgba(0,0,0,0.6)); height: 100%; width: 120%; padding-right: 50px;">
                  <div style="padding: 10px; padding-bottom: 0px;">
                    <b style="font-size: 100%; text-decoration: none; color: <?php echo $item->bgcolor_category; ?>; margin-top: 2px; font-size: 10px;">{{ $item->title_category }}</b><br>
                  </div>
                  <div style="color: white; padding: 10px;">
                    <h4><b>{{ $item->title }}</b></h4>
                  </div>
                </div>
              </div>
            </div>
          </a>

          <?php
              }else{
          ?>
          <a href="<?php echo str_replace('?', '/', $url_detail); ?>">
            <div class="col-md-12">
              <div class="row" style="vertical-align: text-top; padding-bottom: 10px; border-bottom: 1px solid gray;">
                  <div class="col-md-4" style="display: inline-block; width: 35vw; height: 95px; vertical-align: text-top; overflow: hidden;">
                    <img src="<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>" alt="" style="width: auto; height: 100%; border-radius: 10px;">
                  </div>
                  <div class="col-md-8" style="display: inline-block; width: 55vw; vertical-align: text-top;">
                    <b style="font-size: 100%; text-decoration: none; color: <?php echo $item->bgcolor_category; ?>; margin-top: 2px; font-size: 10px;">{{ $item->title_category }}</b><br>
                    <b style="font-size: 100%; text-decoration: none; color: black; margin: 10px 0; font-size: 15px;">{{ $item->title }}</b><br>
                    <b style="font-size: 100%; text-decoration: none; margin-top: 5px; font-size: 10px; color: gray;"><i class="fa fa-clock-o"></i> {{ $item->created_at }}</br><br>
                  </div>
              </div>
            </div>
          </a><br>
          <?php
            }
          ?>
          
          @endforeach
        </div>
      </div>
      <!--  TERBARU -->
    </div>
    
  </div>

  @endsection