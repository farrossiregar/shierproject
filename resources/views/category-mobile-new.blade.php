@extends('layout.app')

@section('title', 'Category Mobile')

@section('content')


<div style="height: 30vh; width: 104vw; overflow: hidden;" class="row">
  <?php
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
  <div class="col-md-12" style="background-image: url('{{ asset('image/category').'/'.$image }}'); background-size: cover; width: 110vw; height: 100%; background-repeat: no-repeat; background-position: center;"></div>
</div>


<!--    END MAIN    -->

<div class="container" style="background-color: white;">

  <div class="row">
    <!--  TERBARU -->
    <div class="col-md-8" style="border-right: 1px solid lightgray;">
      <div class="row">
        <div class="col-md-12">
        
        <div class="row">
          <div class="col-md-12">
            <br><br>
            <br>
            <div style="padding: 1px 6px; background-color: black; width: 115px; border-radius: 10px 10px 0px 0px; color: white;">
              <h4><b>Terbaru</b></h4>
            </div>
            <div style="border: 2px solid black;"></div>
            <br>
          </div>
        </div>
        
        
        <div class="row">
          <div class="col-md-12">
            @foreach($data as $key => $item)
            <a href="{{ route('detail', $item->alias) }}" style="display: inline-block; width: 42vw; vertical-align: text-top; margin: 0 2px;">
            <?php
              if($item->image_name != ''){
            ?>
              <img style="width: 100%; border-radius: 10px; " src="{{asset('image/content').'/'.$item->image_name}}">
            <?php
              }else{
            ?>
              <img style="width: 100%; border-radius: 10px; " src="https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg">
            <?php
              }
            ?>
              <h4>{{ $item->title }}</h4>
            </a> 
            @endforeach
          </div>
        </div>
          
        </div>
      </div>

      
    </div>

    <!--  TERBARU -->


  </div>
  
</div>

@endsection
