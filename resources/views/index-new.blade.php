@extends('layout.app')

@section('title', 'Shier Project')

@section('content')


<!--    MAIN    -->
<div style="height: 60vh;" class="row">
    <!-- <div class="col-md-6" style="width: auto%; height: 100%; background-image: url('https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/B328284533D1C776C141B676F54E8D626B19DC9327F399BB99F196A8DE0A2AF8/scale?aspectRatio=1.78&format=jpeg'); background-size: cover; background-repeat: no-repeat; background-position: center; padding: 0 2px; display: inline-block; overflow: hidden;"></div> -->
    <!-- <div class="col-md-6" style="padding: 0px; overflow: hidden;"> -->
    @include('widget.index-banner-corona')
    
    <div class="col-md-6" style="width: 50vw; height: 100%; padding: 0 2px; display: inline-block; overflow: hidden;">
      <div style="width: 100%;">
        @foreach($data as $key => $item)
        <?php
          $url_detail = route('/', $item->url_category.'/'.$item->alias);
        ?>
        <a href="<?php echo str_replace('?', '/', $url_detail); ?>">
          <div class="mySlides">
            <div class="numbertext" style="color: white; background-color: rgba(0,0,0,0.5); height: 100%; width: 50%; padding-left: 3vw;">
              <h1><b><?php echo $item->title; ?></b></h1>
              <br><br><br><br><br><br><br><br>
              <?php
                $intro = html_entity_decode($item->description);
              ?>
              <h4><?php echo substr($intro, 0, 150).'...'; ?></h4>
              <h4>Cek Selengkapnya...</h4>
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
</div>
<br>
<!--    END MAIN    -->
  
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
            @foreach($data as $key => $item)
            <?php
              if($key >= 10){
                break;
              }
            ?>
            <?php
              $url_detail = route('/', $item->url_category.'/'.$item->alias);
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
  
    <br><br><br>           
    <!-- ADS BANNER INDEX DESKTOP -->
    <!-- <div class="row" style="padding-left: 90px;">
      <div class="col-md-12" style="width: 970px; height: 250px; background: lightgray; text-align: center; padding: auto;">
        <h1 style="margin-top: 90px;">Available Space 970 X 250</h1>
      </div>
    </div> -->
    <!-- ADS BANNER INDEX DESKTOP -->
    <br><br>  
    

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
                <?php
                  if($item->image_name != ''){
                ?>
                  <img style="width: 100%; border-radius: 10px;  height: 160px;" src="<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>">
                <?php
                  }else{
                ?>
                  <img style="width: 100%; border-radius: 10px;  height: 160px;" src="https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg">
                <?php
                  }
                ?>
                <h5 style="text-decoration: none; color: black;">{{ $item->title }}</h5>
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
                <?php
                if($item->image_name != ''){
                ?>
                <img class="image-list" src="<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>">
                <?php
                }else{
                ?>
                <img class="image-list"  src="https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg">
                <?php
                }
                ?>
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
  
    <!--    Koleksi   -->

    @endsection
  