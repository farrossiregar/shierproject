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
    if($key >= 2){
      break;
    }
    $no = $no + 1;
  ?>
  <?php
    $url_detail = route('/', $item->url_category.'/'.$item->alias);
  
    echo '<div class="mySlides headlineSlide" style="width: 100vw; height: 100vh; background-color: #242424;">';
    echo '<div class="row">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h4 style="color: white; padding: 0 20px;">Artikel <b><i>TERBARU</i></b></h4>
                </div>
              </div>
            </div>
          </div>';
    
    if($key == 0){
    
      foreach($data as $key => $item){
        $image_popular = "http://cms.shierproject.com/image/content/".$item->image_name;
        $url_detail = route('/', $item->url_category.'/'.$item->alias);
        if($key == 0){
          echo '<div class="row">
                  <a href="'.str_replace('?', '/', $url_detail).'">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-12" style="padding: 20px;">
                          <div style="background-image: url('.$image_popular.'); background-position: center; background-size: cover; border-radius: 5px; height: 35vh;">
                            <div style="width: 100%; height: 100%; background-color: rgba(0,0,0,0.6); padding: 20px;">  
                              <h5><b style="color: '.$item->bgcolor_category.'; font-weight: 1000;">'.$item->title_category.'</b></h5>
                              <h4><b style="color: white;">'.$item->title.'</b></h4>
                            </div>                              
                          </div>                              
                        </div>
                      </div>                          
                    </div>    
                  </a>       
                </div>';
        }
      }
      
      foreach($data as $key => $item){
        $image_popular = "http://cms.shierproject.com/image/content/".$item->image_name;
        $url_detail = route('/', $item->url_category.'/'.$item->alias);
        if($key == 1){
          echo '<div class="row">
                  <a href="'.str_replace('?', '/', $url_detail).'">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-12" style="padding: 20px;">
                          <div style="background-image: url('.$image_popular.'); background-position: center; background-size: cover; border-radius: 5px; height: 35vh;">
                            <div style="width: 100%; height: 100%; background-color: rgba(0,0,0,0.6); padding: 20px;">  
                              <h5><b style="color: '.$item->bgcolor_category.'; font-weight: 1000;">'.$item->title_category.'</b></h5>
                              <h4><b style="color: white;">'.$item->title.'</b></h4>
                            </div>
                          </div>                              
                        </div>
                      </div>                          
                    </div>    
                  </a>       
                </div>';
        }
      }
    }else{
      foreach($data as $key => $item){
        $image_popular = "http://cms.shierproject.com/image/content/".$item->image_name;
        $url_detail = route('/', $item->url_category.'/'.$item->alias);
        if($key == 2){
          echo '<div class="row">
                  <a href="'.str_replace('?', '/', $url_detail).'">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-12" style="padding: 20px;">
                          <div style="background-image: url('.$image_popular.'); background-position: center; background-size: cover; border-radius: 5px; height: 35vh;">
                            <div style="width: 100%; height: 100%; background-color: rgba(0,0,0,0.6); padding: 20px;">  
                              <h5><b style="color: '.$item->bgcolor_category.'; font-weight: 1000;">'.$item->title_category.'</b></h5>
                              <h4><b style="color: white;">'.$item->title.'</b></h4>
                            </div>
                          </div>                              
                        </div>
                      </div>                          
                    </div>    
                  </a>       
                </div>';
        }
      }

      foreach($data as $key => $item){
        $image_popular = "http://cms.shierproject.com/image/content/".$item->image_name;
        $url_detail = route('/', $item->url_category.'/'.$item->alias);
        if($key == 3){
          echo '<div class="row">
                  <a href="'.str_replace('?', '/', $url_detail).'">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-12" style="padding: 20px;">
                          <div style="background-image: url('.$image_popular.'); background-position: center; background-size: cover; border-radius: 5px; height: 35vh;">
                            <div style="width: 100%; height: 100%; background-color: rgba(0,0,0,0.6); padding: 20px;">  
                              <h5><b style="color: '.$item->bgcolor_category.'; font-weight: 1000;">'.$item->title_category.'</b></h5>
                              <h4><b style="color: white;">'.$item->title.'</b></h4>
                            </div>
                          </div>                              
                        </div>
                      </div>                          
                    </div>    
                  </a>       
                </div>';
        }
      }
    }
    echo '</div>';
    ?>

      
      <!-- <div class="mySlides headlineSlide" style="width: 100vw; height: 100vh; ">
        <div class="row">
          <a href="<?php echo str_replace('?', '/', $url_detail); ?>">
            <div class="col-md-12"></div>   
          </a>     
        </div>
        <div class="row">
          <a href="<?php echo str_replace('?', '/', $url_detail); ?>">
            <div class="col-md-12"></div>   
          </a>       
        </div>
        <div class="numbertext" style="color: white; background-color: rgba(0,0,0,0.5); height: 100%; width: 75%; padding-right: 5px; padding-left: 20px;">
          <div class="row">
            <div class="col-md-6" style="display: inline-block;">              
              <span class="btn btn-primary btn-xs" style="background-color: <?php echo $item->bgcolor_category; ?>; padding: 0 15px;">
                <h5><b><?php echo $item->title_category; ?></b></h5>
              </span>
            </div>
            <div class="col-md-6" style="display: inline-block;"></div>
            
          </div>
          <h2><b><?php echo $item->title; ?></b></h2>
        </div>

        <div style="width:100%; height: 80vh; overflow: hidden;">
          <img src="<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>" style="width: auto; height: 120%;">
        </div>
      </div> -->
  @endforeach

    <a class="prev" style="margin-top: 10%;" onclick="plusSlides(-1)">❮</a>
    <a class="next" style="margin-top: 10%;" onclick="plusSlides(1)">❯</a>

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
      <div  class="col-md-12">
        <h4 style="color: black;">Artikel <b><i>KATEGORI</i></b></h4>
        @foreach($data_category as $key => $item)
        <?php
          $key_category = $key;
        ?>
          <hr>
          <?php 
            if($key == 2){
          ?>  
          <div class="row">
              <div class="col-md-12" style="background-color: rgb(36, 36, 36); padding: 20px 0; color: white;">
                test
              </div>
          </div>
          <?php
            }
          ?>
          <div class="row">
            <a href="<?php echo str_replace('?', '/', route('/', $item->url_title)); ?>" style="text-decoration: none;">
              <div style="text-align: center; overflow: hidden; padding-top: 4%; opacity: 0.9; background-image: url('<?php echo "http://shierproject.com/image/category/".category($item->url_title); ?>'); background-position: center; background-size: cover; width: 100%; height: 20vh;">
                <h1><b style="font-size: 90%; opacity: 1; color: white; text-decoration: none; text-shadow: 2px 2px black;">{{ strtoUpper($item->title) }}</b></h1>
              </div>
            </a>
          </div>
          
          <div class="row" style="margin: 50px 0; margin-top: 5px;">       
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
                <?php
                  if($key_category % 2 == 0){
                ?>
                <a href="<?php echo str_replace('?', '/', $url_detail); ?>">
                  <div class="col-md-12">
                    <div style="width: 100%; background-image: url('<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>'); background-position: center; background-size: cover; height: 240px; border-radius: 10px; overflow: hidden; margin-bottom: 10px;">
                      <div style="background-image: linear-gradient(to bottom, rgba(255,255,255,0.1), rgba(0,0,0,0.2), rgba(0,0,0,0.6)); height: 100%; width: 120%; padding-right: 50px;">
                        <div style="padding: 10px; padding-bottom: 0px;">
                          <b style=" font-size: 13px; text-decoration: none; color: <?php echo $item->bgcolor_category; ?>; margin-top: 2px; font-weight: 1000;">{{ $item->title_category }}</b> |
                          <b style="font-size: 12px; text-decoration: none; margin-top: 5px; color: white;"><i class="fa fa-clock-o"></i> {{ $item->publish_date }}</b>
                        </div>
                        
                        <div style="color: white; padding: 10px; padding-top: 0px;">
                          <h4><b style="font-size:18px; text-shadow: 1px 1px #000000;">{{ $item->title }}</b></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
                <?php
                  }else{
                ?>
                <a href="<?php echo str_replace('?', '/', $url_detail); ?>">
                    <div class="col-md-12" style="padding-bottom: 20px;">
                        <div style="height: 180px; overflow: hidden; border-radius: 10px; vertical-align: baseline;">
                            <img style="width: 100%; height: auto; margin: auto; border-radius: 10px; " src="<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>">
                        </div>
                        
                        <b style="font-size: 13px; text-decoration: none; color: <?php echo $item->bgcolor_category; ?>; margin-top: 2px;">{{ $item->title_category }}</b> |
                        <b style="font-size: 12px; text-decoration: none; margin-top: 5px; color: gray;"><i class="fa fa-clock-o"></i> {{ $item->publish_date }}</b><br>
                        <p style="text-decoration: none; color: black;"><b style="font-size:18px;">{{ $item->title }}</b></p>
                    </div>
                </a> 
                <?php
                  }
                ?>
                
              <?php
                }else{
              ?>
                
                <?php
                  if($key_category % 2 == 0){
                ?>
                  <div class="col-md-6" style="display: inline-block; padding-bottom: 20px;">
                    <a href="<?php echo str_replace('?', '/', $url_detail); ?>"  style="display: inline-block; width: 41vw; vertical-align: text-top;;">
                      <img style="width: 100%; height: 120px; border-radius: 10px; " src="<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>">
                      <b style="font-size: 13px; text-decoration: none; color: <?php echo $item->bgcolor_category; ?>; margin-top: 2px;">{{ $item->title_category }}</b> | 
                      <b style="font-size: 10px; text-decoration: none; margin-top: 5px; color: gray;"><i class="fa fa-clock-o"></i> {{ $item->publish_date }}</b><br>
                      <p style="text-decoration: none; color: black;"><b style="font-size:16px;">{{ $item->title }}</b></p>
                    </a> 
                  </div>
                

                <?php
                  }else{
                ?>
                <a href="<?php echo str_replace('?', '/', $url_detail); ?>">
                  <div class="col-md-12">
                    <div class="row" style="vertical-align: text-top; padding-bottom: 20px;">
                        <div class="col-md-6" style="display: inline-block; width: 48vw; height: 120px; vertical-align: text-top; overflow: hidden; border-radius: 10px;">
                          <!--img src="<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>" alt="" style="width: 100%; height: auto; overflow: hidden; border-radius: 10px;"-->
                          <div style="background-image: url('<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>'); background-size: cover; background-position: cover; height: 120px; width: auto; border-radius: 10px;"></div>
                        </div>
                        <div class="col-md-6" style="display: inline-block; width: 47vw; vertical-align: text-top;">
                          <b style="font-size: 13px; text-decoration: none; color: <?php echo $item->bgcolor_category; ?>; margin-top: 2px;">{{ $item->title_category }}</b> | 
                          <b style="font-size: 10px; text-decoration: none; margin-top: 5px; color: gray;"><i class="fa fa-clock-o"></i> {{ $item->publish_date }}</b><br>
                          <b style="font-size: 16px; text-decoration: none; color: black; margin: 10px 0;">{{ $item->title }}</b><br>
                        </div>
                    </div>
                  </div>
                </a>
                
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
  </div>

  <section class="footer">
    @include('layout.footer')
  </section>  

  @endsection