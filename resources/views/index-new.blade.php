@extends('layout.app')

@section('title', 'Shier Project')

@section('metadesc', 'Shier Project menampilkan berita ringan seputar hiburan dan gaya hidup.')

@section('content')



<!--    MAIN    -->
<div style="width: 100vw; background-color: #242424; padding: 80px 0;" class="row">

  <!-- include('widget.index-banner-corona') -->
  <div class="col-md-6" style="height: 60vh; padding: 0 2px; overflow: hidden; background-image: url('{{ asset('image/shierproject-logo-black.jpg') }}')"></div>
  
  <div class="col-md-6" style="height: 60vh; padding: 0 2px; overflow: hidden;">
    <div style="width: 100%;">
      @foreach($data as $key => $item)
      <?php
        if($key >= 3){
          break;
        }

        $url_detail = route('/', $item->url_category.'/'.$item->alias);
      ?>
      <a href="<?php echo str_replace('?', '/', $url_detail); ?>">
        <div class="mySlides">
          <div class="numbertext" style="color: white; background-color: rgba(0,0,0,0.5); height: 100%; width: 50%; padding-left: 3vw;">
            <div class="row">
              <div class="col-md-4" style="display: inline-block;">
                <div style="background-color: black; border-radius: 5px; text-align: center; min-width">
                  <h4 style="padding: 4px 4px; "><b><?php echo $item->title_category; ?></b></h4>
                </div>
              </div>
              <div class="col-md-4" style="display: inline-block;"></div>
              <div class="col-md-4" style="display: inline-block;"></div>
            </div>
            <h1><b><?php echo $item->title; ?></b></h1>
            <br><br><br><br><br><br><br><br>
            <?php
              $intro = html_entity_decode($item->description);
            ?>
          </div>
          <img src="<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>" style="width:100%">
        </div>
      </a>
        
      @endforeach
        
      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>
      
      <div class="caption-container">
        <p id="caption"></p>
      </div>
        
    </div>
  </div>

    <script>
      var slideIndex = 1;
      showSlides(slideIndex);
    </script>
</div>
<br>
<!--    END MAIN    -->

<section>
  <div class="container" >
    <div class="row">
      <div class="col-md-8">
        <div  class="col-md-12">
          <!--  TERBARU -->
          <br>
          <div class="title-list" style="width: 92px; background-color: black;">
              <h4><b>Terbaru</b></h4>
          </div>
          <div style="border: 2px solid black;"></div>
          <br>
          <div class="row">
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
                  <a href="<?php echo str_replace('?', '/', $url_detail); ?>">
                    <div class="col-md-12 terbaru-tile-parent" >
                      <div class="terbaru-tile" style="background-image: url('<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>'); ">
                        <div style="background-image: linear-gradient(to bottom, rgba(255,255,255,0.1), rgba(0,0,0,0.2), rgba(0,0,0,0.6)); height: 100%; width: 100%; padding: -10px;">
                          <div class="terbaru-title-tile" style="color: white;">
                            <h3><b>{{ $item->title }}</b></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
           <?php 
                }else{
            ?>
                  <a href="<?php echo str_replace('?', '/', $url_detail); ?>">
                    <div class="col-md-6 terbaru-tile-parent" >
                      <div class="terbaru-tile" style="background-image: url('<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>'); ">
                        <div style="background-image: linear-gradient(to bottom, rgba(255,255,255,0.1), rgba(0,0,0,0.2), rgba(0,0,0,0.6)); height: 100%; width: 100%; padding: -10px;">
                          <div class="terbaru-title-tile" style="color: white;">
                            <h3><b>{{ $item->title }}</b></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
            <?php
                }
              }
            ?>
            
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
  </div>
</section>

  
    <br><br><br>           
    <!-- ADS BANNER INDEX DESKTOP -->
    <!-- <div class="row" style="padding-left: 90px;">
      <div class="col-md-12" style="width: 970px; height: 250px; background: lightgray; text-align: center; padding: auto;">
        <h1 style="margin-top: 90px;">Available Space 970 X 250</h1>
      </div>
    </div> -->
    <!-- ADS BANNER INDEX DESKTOP -->
    <br><br>  
    
<section style="width: 100vw; background-color: #242424; padding: 80px 0;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-12">
          <br>
          <div class="title-list" style="background-color: black; width: 122px;">
            <h4><b>Terpopuler</b></h4>
          </div>
          <div style="border: 2px solid black;"></div>
          <br>
          <div class="row" style="vertical-align: text-top;">
            @foreach($data as $key => $item)
            <?php
              if($key >= 4){
                break;
              }
            ?>

            <?php
              $url_detail = route('/', $item->url_category.'/'.$item->alias);
            ?>
            <a href="<?php echo str_replace('?', '/', $url_detail); ?>">
              <div class="col-md-3" style="display: inline-block; vertical-align: text-top;">
                <img style="width: 100%; border-radius: 10px;  height: 160px;" src="<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>">
                <h5 style="text-decoration: none; color: white;">{{ $item->title }}</h5>
              </div>
            </a>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  

<section>
  <div class="container">
    <!--    Koleksi   -->
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-8">
          <br>
          <div class="title-list" style="background-color: black; width: 85px;">
              <h4><b>Koleksi</b></h4>
          </div>
          <div style="border: 2px solid black;"></div>
          <br>
          @foreach($data as $item)
          <?php
            $url_detail = route('/', $item->url_category.'/'.$item->alias);
          ?>
          <a href="<?php echo str_replace('?', '/', $url_detail); ?>">
            <div class="row ">
              <div class="col-md-4">
                <img class="image-list" src="<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>">
              </div>
              <div class="col-md-8" style="text-decoration: none; color: black;">
                
                <p style="color: gray; font-size: 12px;"><i class="fa fa-clock-o"></i> {{ $item->created_at }}</p>
                <h3><b>{{ $item->title }}</b></h3>
                <?php
                  $intro = html_entity_decode($item->description);
                ?>
                <!-- <p style="color: gray;"><?php echo substr($intro, 0, 150).'...'; ?></p> -->
              </div>
            </div>
          </a><br>
          @endforeach
          
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
  </div>
</section>
    <!--    Koleksi   -->

    @endsection
  