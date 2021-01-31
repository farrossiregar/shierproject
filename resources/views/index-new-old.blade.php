@extends('layout.app')

@section('title', 'Shier Project')

@section('metadesc', 'Shier Project menampilkan berita ringan seputar hiburan dan gaya hidup.')

@section('content')



<!--    MAIN    -->
<div style="width: 100vw; background-color: #242424; padding: 80px 0;" class="row">
  <div class="container">
    <h3 style="color: white;">Artikel <b><i>TERBARU</i></b></h3>

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

      ?>
    @endforeach

  </div>
  

    <script>
      var slideIndex = 1;
      showSlides(slideIndex);
    </script>
</div>
<br>
<!--    END MAIN    -->

<section>
<?php

/*<div class="row">
    <div class="col-md-1">test</div>
    <div class="col-md-5">test</div>
    <div class="col-md-5">test</div>
    <div class="col-md-1">test</div>
</div>*/
?>
  <div class="container" >
  <?php

  /*<div class="row">
      <div class="col-md-12">
        include('widget.index-banner-corona')
      </div>
    </div> */
  ?>

    <div class="row">
      <div class="col-md-8">
        <h3 style="color: black;">Artikel <b><i>KATEGORI</i></b></h3>
        @foreach($data_category as $key => $item)
        <?php
          $key_category = $key;
        ?>
          <hr>
          <div class="row" style="margin: 50px 0;">
            <a href="<?php echo str_replace('?', '/', route('/', $item->url_title)); ?>" style="text-decoration: none;">
              <div style="text-align: center; overflow: hidden; padding-top: 7%; opacity: 0.9; background-image: url('<?php echo "http://shierproject.com/image/category/".category($item->url_title); ?>'); background-position: center; background-size: cover; width: 100%; height: 20vh;">
                <h1><b style="font-size: 120%; opacity: 1; color: white; text-decoration: none; text-shadow: 2px 2px black;">{{ strtoUpper($item->title) }}</b></h1>
              </div>
            </a>
            
            <div class="row">
            <?php
              $url_title = $item->url_title;
              $idx = 0;
              foreach(dataCategory($item->url_title) as $key => $item){
                $idx = $idx + 1;
                $url_detail = route('/', $url_title.'/'.$item->alias);
                if($key_category % 2 == 0){
                  $br = 7;
                }else{
                  $br = 5;
                }
                if(($idx == 1) or ($idx % $br == 1)){
            ?>
                <br>
                <?php
                  if($key_category % 2 == 0){
                ?>
                <a href="<?php echo str_replace('?', '/', $url_detail); ?>">
                  <div class="col-md-12 terbaru-tile-parent">
                    <div  style="box-shadow: 5px 5px 5px #aaaaaa; border-radius: 10px; background-image: linear-gradient(to bottom, rgba(255,255,255,0.1), rgba(0,0,0,0.2), rgba(0,0,0,0.6)); height: 100%; width: 100%; padding: -10px;">
                      <div class="terbaru-tile" style="background-image: url('<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>'); ">
                        <div class="terbaru-title-tile" style="color: white;">
                          <b style="font-size: 100%; text-decoration: none; color: <?php echo $item->bgcolor_category; ?>; margin-top: 2px; font-size: 18px;">{{ $item->title_category }}</b>|
                          <b style="font-size: 13px; text-decoration: none; margin-top: 5px; color: white;"><i class="fa fa-clock-o"></i>{{ $item->publish_date }}</b></br>
                          <h3 style="margin-top: 0px;"><b style="text-decoration: none; color: white; text-shadow: 2px 2px black;">{{ $item->title }}</b></h3>
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
                    <div style="box-shadow: 5px 5px 5px #aaaaaa; border-radius: 10px;">
                      <div style="background-image: linear-gradient(to bottom, rgba(255,255,255,0.1), rgba(0,0,0,0.2), rgba(0,0,0,0.6)); height: 300px; width: 100%; padding: -10px; border-radius: 10px; overflow: hidden;">
                          <div style="background-image: url('<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>'); background-position: center; background-size: cover; height: 100%; ">
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <b style="font-size: 14px; text-decoration: none; color: <?php echo $item->bgcolor_category; ?>; margin-top: 2px;">{{ $item->title_category }}</b> |
                          <b style="font-size: 13px; text-decoration: none; margin-top: 5px; color: gray;"><i class="fa fa-clock-o"></i>{{ $item->publish_date }}</b><br>
                          <h3 style="margin-top: 0px;"><b style="text-decoration: none; color: black;">{{ $item->title }}</b></h3>
                        </div>
                      </div>
                      <br>
                    </div>
                  </div>
                </a>
                <br>
                <?php
                  }
                ?>
                
              <?php
                }else{
              ?>
                <?php
                  if($key_category % 2 == 0){
                ?>

                <a href="<?php echo str_replace('?', '/', $url_detail); ?>">
                  <div class="col-md-4 terbaru-tile-parent" >
                    <div style="box-shadow: 5px 5px 5px #aaaaaa; border-radius: 10px; background-image: linear-gradient(to bottom, rgba(255,255,255,0.1), rgba(0,0,0,0.2), rgba(0,0,0,0.6)); height: 100%; width: 100%;">
                      <div class="terbaru-tile" style="background-image: url('<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>'); ">
                        <div class="terbaru-title-tile" style="color: white; width: 230px;">
                          <b style="font-size: 100%; text-decoration: none; color: <?php echo $item->bgcolor_category; ?>; margin-top: 2px; font-size: 18px;">{{ $item->title_category }}</b>|
                          <b style="font-size: 13px; text-decoration: none; margin-top: 5px; color: white;"><i class="fa fa-clock-o"></i>{{ $item->publish_date }}</b></br>
                          <h3 style="margin-top: 0px; text-shadow: 2px 2px black;"><b>{{ $item->title }}</b></h3>
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
                        
                        <b style="font-size: 15px; text-decoration: none; color: <?php echo $item->bgcolor_category; ?>; margin-top: 2px;">{{ $item->title_category }}</b>|
                        <b style="font-size: 13px; text-decoration: none; margin-top: 5px; color: gray;"><i class="fa fa-clock-o"></i>{{ $item->publish_date }}</b></br>
                        <b style="font-size: 100%; text-decoration: none; color: black; margin: 10px 0; font-size: 23px;">{{ $item->title }}</b><br>
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

      <!-- SIDE CONTENT -->
      <div class="col-md-4">
          <div class="row">
            @include('widget.artikel-populer-widget', $toparticle)
          </div>

          <div class="row">
            <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/CKK-WaVBtTS/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="13" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px); height: 640px;">
              <div style="padding:16px;"> 
                <a href="https://www.instagram.com/p/CKK-WaVBtTS/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> 
                  <div style=" display: flex; flex-direction: row; align-items: center;"> 
                    <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> 
                    <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> 
                      <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> 
                      <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div>
                    </div>
                  </div>
                  <div style="padding: 19% 0;"></div> 
                  <div style="display:block; height:50px; margin:0 auto 12px; width:50px;">
                    <svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g>
                    </svg>
                  </div>
                  <div style="padding-top: 8px;"> 
                    <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div>
                  </div>
                  <div style="padding: 12.5% 0;"></div> 
                  <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> 
                  <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CKK-WaVBtTS/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Shier Project (@shierproject)</a></p>
              </div>
            </blockquote> 
            <script async src="//www.instagram.com/embed.js"></script>
          </div>
          
        <?php
            /*
        ?>
          <!--
          <br><br><br>
          <div class="row">
            <a href="https://www.instagram.com/the_b_kopi/" target="_blank">
              <div style="width: 80%; margin: auto;">
                <img src="http://cms.shierproject.com/image/ads/the-brians-coffee.gif" style="width: 100%; margin: auto;">
              </div>
            </a>
          </div>
          -->
          <?php
            */
        ?>
      </div>
      <!-- SIDE CONTENT -->
    </div>
    
  </div>
</section>

<br><br><br>   

  

<section class="footer">
  @include('layout.footer')
</section>  

@endsection
  