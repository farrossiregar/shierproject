@extends('layout.app')

@section('title', $title_category .' - Shier Project')

@section('content')


<div style="height: 45vh;" class="row">
  <div class="col-md-12" style="background-image: url('{{ asset('image/category').'/'.$image_category }}'); background-size: cover; width: 100vw; height: 100%; background-repeat: no-repeat; background-position: center; padding: 0 2px;">
    <div style="background-image: linear-gradient(to bottom, rgba(0,0,0,0) , rgba(255,255,255,1)); height: 100%;"></div>
  </div>
</div>


<!--    END MAIN    -->

<div class="container" style="background-color: white;">

  <div class="row">
    <!--  TERBARU -->
    <div class="col-md-8" style="border-right: 1px solid lightgray;">
      <div class="row">
        <div class="col-md-12">
          <br>
          <h3 style="color: black;">Artikel <b><i>KATEGORI</i></b></h3>
          <hr>
          <br>
          <div class="row">
            <?php
              if($data){
            ?>
              @foreach($data as $key => $item)
              <?php
                $url_detail = route('/', $url_category.'/'.$item->alias);
              ?>
              <a href="<?php echo str_replace('?', '/', $url_detail); ?>">            
                <div class="col-md-6" style="margin-bottom: 30px;">
                  <div class="row">
                    <div class="col-md-6">
                      <?php
                        if($item->image_name != ''){
                      ?>
                        <img style="width: 100%; height: 120px; border-radius: 10px;" src="<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>">
                      <?php
                        }else{
                      ?>
                        <img style="width: 100%; height: 120px; border-radius: 10px;" src="https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg">
                      <?php
                        }
                      ?>
                      
                    </div>
                    <div class="col-md-6">
                      <h4 style="text-decoration: none; color: black;">{{ $item->title }}</h4>
                    </div>
                  </div>
                </div>
              </a>
              
              @endforeach
            <?php
              }
            ?>
            
          </div>
          
        </div>
      </div>

      <br><br><br>
      
      <!-- <br>
      <div style="padding: 1px 6px; background-color: black; width: 115px; border-radius: 10px 10px 0px 0px; color: white;">
        <h4><b>Film</b></h4>
      </div>
      <div style="border: 2px solid black;"></div>
      <br>

      <div class="row" style="padding: 10px;">
        @foreach($data as $key => $item)
        <?php
          if($key >= 4){
            break;
          }
        ?>
        <div class="col-md-3" style="padding: 4px; overflow:hidden;">
          <div style="background-image: url('https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg'); height: 15vw; border-radius: 10px; margin-left: auto; margin-right: auto; display: block; background-position: center; overflow: hidden;">
            <div style="position: absolute; bottom: 0px; left: 0px; color: white; background-color: rgba(0,0,0,0.8); padding: 2px;">
              <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            </div>
          </div>
        </div> 
        @endforeach
        
      </div> -->
    </div>

    <!--  TERBARU -->

    <!-- ANTARA NEWS -->
    <div class="col-md-4">
    <br>
      <div class="row">
        <div class="col-md-12">
          @include('widget.artikel-populer-widget', $toparticle)

        </div>
      </div>
    </div>
    <!-- ANTARA NEWS -->

  </div>
  
</div>

<div class="footer">
  @include('layout.footer')
</div>

@endsection
