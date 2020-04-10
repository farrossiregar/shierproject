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
  <div class="col-md-12" style="background-image: url('{{ asset('image/category').'/'.$image }}'); background-size: cover; width: 100vw; height: 100%; background-repeat: no-repeat; background-position: center; padding: 0 2px;">
    <div style="background-image: linear-gradient(to bottom, rgba(0,0,0,0) , rgba(255,255,255,1)); height: 100%;"></div>
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
        <div class="col-md-12" style="top: -130px;">
          <div class="row" style="position: relative; top: 180px; left: 20px;">
            <div class="col-md-12">
              <a href="https://www.facebook.com" target="_blank"><div style="padding: 7px 13px; background-color: blue; border-radius: 20px; width: 41px;"><i class="fa fa-facebook" style="font-size: 25px; color: white;"></i></div></a>
              <br>
              <a href="https://www.instagram.com/shierproject" target="_blank"><div style="padding: 6px 10px; background: linear-gradient(to bottom right, #515BD4, #8134AF, #DD2A7B, #FEDA77, #F58529); border-radius: 20px; width: 41px;"><i class="fa fa-instagram" style="font-size: 25px; color: white;"></i></div></a>
              <br>
              <a href="https://www.twitter.com" target="_blank"><div style="padding: 6px 10px; background-color: #00ACEE; border-radius: 20px; width: 41px;"><i class="fa fa-twitter" style="font-size: 25px; color: white;"></i></div></a>
            
            </div>
          </div>
        <?php
          if($foto_name != ''){
        ?>
          <img style="width: 100%; border-radius: 10px;" src="<?php echo "http://cms.shierproject.com/image/content/".$foto_name; ?>">
        <?php
          }else{
            $img_src = 'https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/B328284533D1C776C141B676F54E8D626B19DC9327F399BB99F196A8DE0A2AF8/scale?aspectRatio=1.78&format=jpeg';
        ?>
          <img style="width: 100%; border-radius: 10px;" src="<?php echo $img_src; ?>">
        <?php
          }
        ?>
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
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-12">
              <div class="col-md-12" style="width: 729px; height: 90px; background: lightgray; text-align: center; margin: auto;">
                <h1>Available Space 729 X 90</h1>
              </div>
            </div>
          </div>
        </div>
        
        <!-- ADS BANNER 1 -->
      </div>
      <hr>
      
      <div class="row">
        <div class="col-md-12" style="font-size: 20px;">
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
      <!-- <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4">
              <div style="width: 100%; height: 100%;">
                <img src="http://clothezon.com/allaboutme-farros.com/img/logo-shillouette.jpg" alt="" style="width: 100%;">
              </div>
            </div>
            <div class="col-md-4">
              <h3><b>Farros Shier</b></h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <div>
              <p>
                I consider myself as an IT Business Artisan. Or Consultant CTO if you prefer. 
                I'm a self-taught Web Developper, coach and teacher. My main work is helping and
                guiding digital startups.
                </p>
              </div>
              
            </div>
          </div>
          
          </div>
        </div>
      </div> -->

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