@extends('layout.app')

@section('title', 'Shier Project')

@section('content')


<!--    MAIN    -->
<div style="height: 30vh;" class="row">
  <?php
    $id_category = $category;
    if($id_category == '1'){
      $image = 'woman-walking-on-pathway-while-strolling-luggage-1008155.jpg';
    }elseif($id_category == '3'){
      $image = 'grayscale-photography-of-mosque-2863202.jpg';
    }elseif($id_category == '4'){
      $image = 'men-working-at-night-256219.jpg';
    }elseif($id_category == '5'){
      $image = 'app-entertainment-ipad-mockup-265685.jpg';
    }elseif($id_category == '6'){
      $image = 'brown-shopping-bags-5956.jpg';
    }elseif($id_category == '7'){
      $image = 'man-riding-bicycle-on-city-street-310983.jpg';
    }else{
      $image = 'woman-walking-on-pathway-while-strolling-luggage-1008155.jpg';
    }
  ?>
  <div class="col-md-12 main_img_web" style="background-image: url('{{ asset('image/category').'/'.$image }}');">
    <div class="main_img_web_filter"></div>
  </div>
</div>

<!--    END MAIN    -->

<div class="container" style="background-color: white;">

  <div class="row">
    <!--  TERBARU -->
    <div class="col-md-8" style="border-right: 1px solid white;">
      <!-- <p style="font-size: 12px;"><b><a href="{{ route('/') }}" style="text-decoration: none; color: black;"><?php echo strtoupper('Shierproject'); ?></a>  | <a href="{{ route('get-category', $category) }}" style="text-decoration: none; color: black;"><?php echo strtoupper('Hiburan'); ?></a> | <?php echo strtoupper($title); ?></b></p> -->
      <h1><b>{{ $title }}</b></h1>
      <p style="color: lightgray;"><i class="fa fa-clock-o" style="font-size: 20px;"></i> {{ $publish_date }}</p>
      <div class="row">
        <div class="col-md-12" style="top: -200px;">
          <div class="row share_btn_article_pos">
            <div class="col-md-12" style="">
              <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('detail', $alias) }}" target="_blank"><div class="fb_share share_btn_article"><i class="fa fa-facebook" style="font-size: 25px; color: white;"></i></div></a>
              <br>
              <a href="https://www.instagram.com/shierproject" target="_blank"><div class="ig_share share_btn_article"><i class="fa fa-instagram" style="font-size: 25px; color: white;"></i></div></a>
              <br>
              <a href="https://twitter.com/share?url={{ route('detail', $alias) }}" target="_blank"><div class="twr_share share_btn_article"><i class="fa fa-twitter" style="font-size: 25px; color: white;"></i></div></a>
              <br>
              <a href="https://api.whatsapp.com/send?&text={{ route('detail', $alias) }}" target="_blank"><div class="wa_share share_btn_article"><i class="fa fa-whatsapp" style="font-size: 25px; color: white;"></i></div></a>
            </div>
          </div>
          <div style="border-radius: 10px; overflow: hidden;">
            <img style="width: 100%;" src="<?php echo "http://cms.shierproject.com/image/content/".$foto_name; ?>">
          </div>
          <!-- <img style="width: 100%; border-radius: 10px;" src="<?php echo "http://cms.shierproject.com/image/content/".$foto_name; ?>"> -->
          <p>{{ $image_caption }}</p>
          <p>
            <?php
              if($image_source != ''){
                echo "Sumber Foto : ".$image_source;
              }
            ?>
          </p>
        </div>
      

        <!-- ADS BANNER 1 -->
        <!-- <div class="row">
          <div class="col-md-12">
            <div class="col-md-12">
              <div class="col-md-12" style="width: 729px; height: 90px; background: lightgray; text-align: center; margin: auto;">
                <h1>Available Space 729 X 90</h1>
              </div>
            </div>
          </div>
        </div> -->
        
        <!-- ADS BANNER 1 -->
      </div>
      <hr>
      
      <div class="row">
        <div class="col-md-12 txt-article">
          <?php echo html_entity_decode($fulltexts); ?>

          <br><br>
          <?php
            if($link != ''){
          ?>
            <a href="{{$link}}" target="_blank">
              <p style="color: gray;">Sumber : {{ $source }}</p>
            </a>            
          <?php
            }
          ?>
          
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          @include('widget.artikel-terkait-widget', $artikelterkait)
        </div>
      </div>
    </div>
    <!--  TERBARU -->

    <!--  POPULER -->
    <div class="col-md-4">
    <br>
      @include('layout.about-author')
      

      <br><br>
      <div class="row">
        @include('widget.antaranewswidget')
      </div>
    </div>
    <!--  POPULER -->

  </div>
  <br><br><br>
</div>

@endsection