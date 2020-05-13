@extends('layout.app')

@section('title', 'Shier Project')

@section('metadesc', 'Shier Project menampilkan berita ringan seputar hiburan dan gaya hidup.')

@section('content')



<!--    MAIN    -->
<div style="width: 100vw; background-color: #242424; padding: 80px 0;" class="row">
  <div class="container">
    <h3 style="color: white;">Artikel <b><i>POPULER</i></b></h3>
    <!-- include('widget.index-banner-corona') -->

    @foreach($data as $key => $item)
      <?php
        if($key >= 4){
          break;
        }

        $url_detail = route('/', $item->url_category.'/'.$item->alias);
        $image_popular = "http://cms.shierproject.com/image/content/".$item->image_name;
        
        if($key == 0){
          
          echo '<a href="'.str_replace('?', '/', $url_detail).'">
                  <div class="col-md-6" style="height: 60vh; overflow: hidden; background-image: url('.$image_popular.'); background-size: cover; background-position: center;">
                    <div style="width: 100%; height: 100%; background-color: rgba(0,0,0,0.6)">
                      <div style="padding: 20px 20px;">
                        <h3><b style="color: '.$item->bgcolor_category.'">'.$item->title_category.'</b></h3>
                        <h1 style="margin-top: 0px;"><b style="color: white;">'.$item->title.'</b></h1>
                      </div>
                    </div>
                  </div>
                </a>';
        }else{
          
          if($key == 1){
            echo '<a href="'.str_replace('?', '/', $url_detail).'">
                    <div class="col-md-6" style="height: 60vh; overflow: hidden;">
                      <div class="row">
                        <div class="col-md-12" style="height: 30vh; overflow: hidden; background-image: url('.$image_popular.'); background-size: cover; background-position: center;">
                          <div style="width: 100%; height: 100%; background-color: rgba(0,0,0,0.6)">
                            <div style="padding: 20px 20px;">
                              <h4><b style="color: '.$item->bgcolor_category.'">'.$item->title_category.'</b></h4>
                              <h3 style="margin-top: 0px;"><b style="color: white;">'.$item->title.'</b></h3>  
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>';
          }else{
            if($key == 2){              
              echo '<div class="row">
                      <a href="'.str_replace('?', '/', $url_detail).'">
                        <div class="col-md-6" style="height: 30vh; overflow: hidden; background-image: url('.$image_popular.'); background-size: cover; background-position: center;">
                          <div style="width: 100%; height: 100%; background-color: rgba(0,0,0,0.6)">  
                            <div style="padding: 20px 20px;">
                              <h4><b style="color: '.$item->bgcolor_category.'">'.$item->title_category.'</b></h4>
                              <h3><b style="color: white;">'.$item->title.'</b></h3>
                            </div>
                          </div>
                        </div>
                      </a>';
            }else{              
              echo '<a href="'.str_replace('?', '/', $url_detail).'">
                      <div class="col-md-6" style="height: 30vh; overflow: hidden; background-image: url('.$image_popular.'); background-size: cover; background-position: center;">
                        <div style="width: 100%; height: 100%; background-color: rgba(0,0,0,0.6)">  
                          <div style="padding: 20px 20px;">
                            <h4><b style="color: '.$item->bgcolor_category.'">'.$item->title_category.'</b></h4>
                            <h3><b style="color: white;">'.$item->title.'</b></h3>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
              </div>';
            }
            
          }
        }
        // echo $item->title.' | '.$key;
      ?>
    @endforeach
    <!-- <div class="col-md-6" style="height: 60vh; padding: 0 2px; overflow: hidden; background-image: url('{{ asset('image/shierproject-logo-black.jpg') }}')"></div>
    
    <div class="col-md-6" style="height: 60vh; padding: 0 2px; overflow: hidden;">
      <div class="row">
        <div class="col-md-12" style="height: 30vh; padding: 0 2px; overflow: hidden; background-image: url('{{ asset('image/shierproject-logo-black.jpg') }}')"></div>
      </div>
      <div class="row">
        <div class="col-md-6" style="height: 30vh; padding: 0 2px; overflow: hidden; background-image: url('{{ asset('image/shierproject-logo-black.jpg') }}')"></div>
        <div class="col-md-6" style="height: 30vh; padding: 0 2px; overflow: hidden; background-image: url('{{ asset('image/shierproject-logo-black.jpg') }}')"></div>
      </div>
    </div> -->
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
    <!-- <div class="row">
      <div class="col-md-12">
        include('widget.index-banner-corona')
      </div>
    </div> -->

    <div class="row">
      <div class="col-md-8">
      <br>
        <div  class="col-md-12">
          <br>
          @foreach($data_category as $key => $item)
          <?php
            $key_category = $key;
          ?>
            <hr>
            <div class="row" style="margin: 50px 0;">
              <a href="<?php echo str_replace('?', '/', route('/', $item->url_title)); ?>" style="text-decoration: none;">
                <div style="text-align: center; overflow: hidden; padding-top: 7%; opacity: 0.7; background-image: url('<?php echo "http://shierproject.com/image/category/".category($item->url_title); ?>'); background-position: center; background-size: cover; width: 100%; height: 20vh;">
                  <h1><b style="font-size: 120%; opacity: 1; color: black; text-decoration: none;">{{ strtoUpper($item->title) }}</b></h1>
                </div>
              </a>
              
              <div class="row">
              <?php
                $url_title = $item->url_title;
                $idx = 0;
                foreach(dataCategory($item->url_title) as $key => $item){
                  $idx = $idx + 1;
                  $url_detail = route('/', $url_title.'/'.$item->alias);
                  
                  if(($idx == 1) or ($idx % 5 == 1)){
                ?>
                  <br>
                  <a href="<?php echo str_replace('?', '/', $url_detail); ?>">
                    <div class="col-md-12 terbaru-tile-parent" >
                      <div class="terbaru-tile" style="background-image: url('<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>'); ">
                        <div style="background-image: linear-gradient(to bottom, rgba(255,255,255,0.1), rgba(0,0,0,0.2), rgba(0,0,0,0.6)); height: 100%; width: 100%; padding: -10px;">
                          <div class="terbaru-title-tile" style="color: white;">
                            <b style="font-size: 100%; text-decoration: none; color: <?php echo $item->bgcolor_category; ?>; margin-top: 2px; font-size: 18px;">{{ $item->title_category }}</b><br>
                            <h3><b>{{ $item->title }} <?php echo $key_category; ?></b></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                  
                <?php
                  }else{
                ?>
                  <?php
                    if($key_category % 2 == 0){
                  ?>

                  <a href="<?php echo str_replace('?', '/', $url_detail); ?>">
                    <div class="col-md-6 terbaru-tile-parent" >
                      <div class="terbaru-tile" style="background-image: url('<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>'); ">
                        <div style="background-image: linear-gradient(to bottom, rgba(255,255,255,0.1), rgba(0,0,0,0.2), rgba(0,0,0,0.6)); height: 100%; width: 100%; padding: -10px;">
                          <div class="terbaru-title-tile" style="color: white;">
                            <b style="font-size: 100%; text-decoration: none; color: <?php echo $item->bgcolor_category; ?>; margin-top: 2px; font-size: 18px;">{{ $item->title_category }}</b><br>
                            <h3><b>{{ $item->title }} <?php echo $key_category; ?></b></h3>
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
                      <div class="row " style="padding: 20px 0;">
                        <div class="col-md-4">
                          <img class="image-list" src="<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>">
                        </div>
                        <div class="col-md-8" style="text-decoration: none; color: black;">
                          
                          <b style="font-size: 100%; text-decoration: none; color: <?php echo $item->bgcolor_category; ?>; margin-top: 2px; font-size: 15px;">{{ $item->title_category }}</b><br>
                          <b style="font-size: 100%; text-decoration: none; color: black; margin: 10px 0; font-size: 23px;">{{ $item->title }}</b><br>
                          <b style="font-size: 100%; text-decoration: none; margin-top: 5px; font-size: 12px; color: gray;"><i class="fa fa-clock-o"></i> {{ $item->publish_date }}</br><br>
                        </div>
                      </div>
                    </div>
                  </a><br>

                  <?php
                    }
                  ?>
                  
                <?php
                  }
                }
              ?>
              </div>
            </div>
          @endforeach

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
    
<!-- <section style="width: 100vw; background-color: #242424; padding: 80px 0;">
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
</section> -->
  

<!-- <section>
  <div class="container">
    
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-8">
          <br>
          <div class="title-list" style="background-color: black; width: 85px;">
              <h4><b>Koleksi</b></h4>
          </div>
          <div style="border: 2px solid black;"></div>
          <br>
          <?php
            $idx = 0;
          ?>
          @foreach($data as $item)
          <?php
            $url_detail = route('/', $item->url_category.'/'.$item->alias);
          ?>
          <?php
            $idx = $idx + 1;

            $url_detail = route('/', $item->url_category.'/'.$item->alias);

            if(($idx == 1) or ($idx % 5 == 1)){

          ?>
          
          <div class="row">
            <a href="<?php echo str_replace('?', '/', $url_detail); ?>">
              <div class="col-md-12 terbaru-tile-parent" >
                <div class="terbaru-tile" style="background-image: url('<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>'); ">
                  <div style="background-image: linear-gradient(to bottom, rgba(255,255,255,0.1), rgba(0,0,0,0.2), rgba(0,0,0,0.6)); height: 100%; width: 100%; padding: -10px;">
                    <div class="terbaru-title-tile" style="color: white;">
                      <b style="font-size: 100%; text-decoration: none; color: <?php echo $item->bgcolor_category; ?>; margin-top: 2px; font-size: 20px;">{{ $item->title_category }}</b><br>
                      <h3><b>{{ $item->title }}</b></h3>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          
          <?php
            }else{
          ?>
          <a href="<?php echo str_replace('?', '/', $url_detail); ?>">
            <div class="row " style="padding-bottom: 10px; border-bottom: 1px solid gray;">
              <div class="col-md-4">
                <img class="image-list" src="<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>">
              </div>
              <div class="col-md-8" style="text-decoration: none; color: black;">
                
                <b style="font-size: 100%; text-decoration: none; color: <?php echo $item->bgcolor_category; ?>; margin-top: 2px; font-size: 15px;">{{ $item->title_category }}</b><br>
                <b style="font-size: 100%; text-decoration: none; color: black; margin: 10px 0; font-size: 23px;">{{ $item->title }}</b><br>
                <b style="font-size: 100%; text-decoration: none; margin-top: 5px; font-size: 12px; color: gray;"><i class="fa fa-clock-o"></i> {{ $item->publish_date }}</br><br>
              </div>
            </div>
          </a><br>
          <?php
            }
          ?>
      
          @endforeach
          
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
  </div>
</section> -->
    <!--    Koleksi   -->

    @endsection
  