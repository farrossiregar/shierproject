@extends('layout.app')

@section('title', $title_category .' - Shier Project')

@section('content')


<div style="height: 30vh; width: 104vw; overflow: hidden;" class="row">
  <div class="col-md-12" style="background-image: url('{{ asset('image/category').'/'.$image_category }}'); background-size: cover; width: 110vw; height: 100%; background-repeat: no-repeat; background-position: center;">
    <div style="background-image: linear-gradient(to bottom, rgba(0,0,0,0) , rgba(255,255,255,1)); height: 105%;"></div>
  </div>
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
              <img style="width: 100%; height: 120px; border-radius: 10px; " src="<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>">
            <?php
              }else{
            ?>
              <img style="width: 100%; height: 120px; border-radius: 10px; " src="https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg">
            <?php
              }
            ?>
              <h4 style="text-decoration: none; color: black;">{{ $item->title }}</h4>
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
