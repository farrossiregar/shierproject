@extends('layout.app')

@section('title', 'Shier Project')

@section('content')


<!--    MAIN    -->
<div style="height: 30vh;" class="row">
  <div class="col-md-12" style="background-image: url('https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/B328284533D1C776C141B676F54E8D626B19DC9327F399BB99F196A8DE0A2AF8/scale?aspectRatio=1.78&format=jpeg'); background-size: cover; width: 100vw; height: 100%; background-repeat: no-repeat; background-position: center; padding: 0 2px;"></div>
</div>

<!--    END MAIN    -->

<div class="container" style="background-color: white;">

  <div class="row">
    <!--  TERBARU -->
    <div class="col-md-8" style="border-right: 1px solid white;">
      <h2><b>{{ $title }}</b></h2>
      <p style="color: lightgray;"><i class="fa fa-clock-o" style="font-size: 20px;"></i> {{ $publish_date }}</p>
      <br>
      <div class="row">
        <div class="col-md-12">
          <a href="facebook.com"><i class="fa fa-instagram" style="font-size: 30px;"></i></a>
          <a href="instagram.com"><i class="fa fa-facebook" style="font-size: 30px;"></i></a>
          <a href="twitter.com"><i class="fa fa-twitter" style="font-size: 30px;"></i></a>
        </div>
      </div>
      <hr style="color: black;">
      <div class="row">
        <div class="col-md-12">
          <img style="width: 100%; border-radius: 10px;" src="{{ $foto_name }}">
          <p>Only when the button is clicked, the navigation bar will be displayed.</p>
        </div>
      </div>
      <hr>
      
      <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-8" style="font-size: 20px;">
          <?php echo html_entity_decode($fulltexts); ?>


          <!-- <br><br>
          <div class="row">
            <div class="col-md-12">
              <img style="width: 100%; border-radius: 10px;" src="{{ $foto_name }}">
              <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            </div>
          </div> -->
          <!-- <p>  
            <?php //echo html_entity_decode($fulltexts); ?>
          </p> -->          

        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          @include('widget.artikel-terkait-widget')
        </div>
      </div>
    </div>
    <!--  TERBARU -->

    <!--  POPULER -->
    <div class="col-md-4">
      <div class="row">
        @include('widget.antaranewswidget')

      </div>
    </div>
    <!--  POPULER -->

  </div>
  <br><br><br>
</div>

@endsection