@extends('layout.app')

@section('title', 'Shier Project')

@section('metadesc', 'Shier Project menampilkan berita ringan seputar hiburan dan gaya hidup.')

@section('content')


<style>
  .terbaru-tile{
    height: 36vh; 
    background-position: center; border-radius: 5px; background-size: cover; padding: 2%; margin: 2% 0;
}

.terbaru-tile-parent{
    display: inline-block;
}

.terbaru-tile-parent > div{
    border-radius: 5px; background-image: linear-gradient(to bottom, rgba(255,255,255,0.1), rgba(0,0,0,0.2), rgba(0,0,0,0.6)); height: 100%; width: 100%; padding: -10px;
}

.article-cat-title{
    font-size: 100%; text-decoration: none; margin-top: 2px; font-size: 18px;
}

.article-cat-date{
    font-size: 13px; text-decoration: none; margin-top: 5px; color: white;
}

.article-title-judul{
    text-decoration: none; color: white; text-shadow: 2px 2px black;
}

.terbaru-title-tile{
    color: white; position: absolute; bottom: 2%; padding: 2%; font-size: 120%;
}

.terbaru-title-tile2{
    margin-top: 0px; text-shadow: 2px 2px black;
}


.terbaru-tile-2{
    background-image: linear-gradient(to bottom, rgba(255,255,255,0.1), rgba(0,0,0,0.2), rgba(0,0,0,0.6)); height: 300px; width: 100%; padding: -10px; border-radius: 5px; overflow: hidden;
}


.terbaru-title-parent-div{
    border-radius: 5px; background-image: linear-gradient(to bottom, rgba(255,255,255,0.1), rgba(0,0,0,0.2), rgba(0,0,0,0.6)); height: 100%; width: 100%;
}

.article-cat-title2{
    font-size: 14px; text-decoration: none; margin-top: 2px;
}

.article-cat-date2{
    font-size: 13px; text-decoration: none; margin-top: 5px; color: gray;
}

.latest-1{
    height: 60vh; overflow: hidden; background-size: cover; background-position: center;
}

.latest-2, .latest-3 , .latest-4{
    overflow: hidden; background-size: cover; background-position: center;
}

.latest-1 > div, .latest-2 > div, .latest-3 > div{
    width: 100%; height: 100%; background-color: rgba(0,0,0,0.6)
}


.title-cat-banner{
    text-align: center; overflow: hidden; padding-top: 7%; opacity: 0.9; background-position: center; background-size: cover; width: 100%; height: 20vh;
}


.title-cat{
    font-size: 120%; opacity: 1; color: white; text-decoration: none; text-shadow: 2px 2px black;
}

.image-list-article-title{
    font-size: 100%; text-decoration: none; color: black; margin: 10px 0; font-size: 23px;
}

.image-list-date{
    font-size: 13px; text-decoration: none; margin-top: 5px; color: gray;
}

.image-list-cat-title{
    font-size: 15px; text-decoration: none;  margin-top: 2px;
}

</style>
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
                  <div class="col-md-6 latest-1" style="background-image: url('.$image_popular.'); ">
                    <div>
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
                        <div class="col-md-12 latest-2" style="height: 30vh; background-image: url('.$image_popular.'); ">
                          <div>
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
                        <div class="col-md-6 latest-3" style="height: 30vh; background-image: url('.$image_popular.');">
                          <div>  
                            <div style="padding: 20px 20px;">
                              <h4><b style="color: '.$item->bgcolor_category.'">'.$item->title_category.'</b></h4>
                              <h3><b style="color: white;">'.$item->title.'</b></h3>
                            </div>
                          </div>
                        </div>
                      </a>';
            }else{              
              echo '<a href="'.str_replace('?', '/', $url_detail).'">
                      <div class="col-md-6 latest-4" style="height: 30vh;  background-image: url('.$image_popular.');">
                        <div>  
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
              <div class="title-cat-banner" style="background-image: url('<?php echo "http://shierproject.com/image/category/".category($item->url_title); ?>');">
                <h1><b class="title-cat">{{ strtoUpper($item->title) }}</b></h1>
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
                    <div>
                      <div class="terbaru-tile" style="background-image: url('<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>'); ">
                        <div class="terbaru-title-tile" style="color: white;">
                          <b class="article-cat-title" style="color: <?php echo $item->bgcolor_category; ?>;">{{ $item->title_category }}</b>|
                          <b class="article-cat-date"><i class="fa fa-clock-o"></i>{{ $item->publish_date }}</b></br>
                          <h3 style="margin-top: 0px;"><b style="article-title-judul">{{ $item->title }}</b></h3>
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
                    <div style="border-radius: 5px;">
                      <div class="terbaru-tile-2">
                          <div style="background-image: url('<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>'); background-position: center; background-size: cover; height: 100%; ">
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <b class="article-cat-title2" style="color: <?php echo $item->bgcolor_category; ?>;">{{ $item->title_category }}</b> |
                          <b class="article-cat-date2"><i class="fa fa-clock-o"></i>{{ $item->publish_date }}</b><br>
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
                    <div class="terbaru-title-parent-div">
                      <div class="terbaru-tile" style="background-image: url('<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>'); ">
                        <div class="terbaru-title-tile" style="color: white; width: 230px;">
                          <b class="article-cat-title" style="color: <?php echo $item->bgcolor_category; ?>;">{{ $item->title_category }}</b>|
                          <b class="article-cat-date"><i class="fa fa-clock-o"></i>{{ $item->publish_date }}</b></br>
                          <h3 class="terbaru-title-tile2"><b>{{ $item->title }}</b></h3>
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
                        
                        <b class="image-list-cat-title" style="color: <?php echo $item->bgcolor_category; ?>;">{{ $item->title_category }}</b>|
                        <b class="image-list-date"><i class="fa fa-clock-o"></i>{{ $item->publish_date }}</b></br>
                        <b class="image-list-article-title">{{ $item->title }}</b><br>
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
          <br><br>

          <div class="row">
            <div class="col-md-12" style="z-index: 1;">
              <div id="SC_TBlock_830981"></div>  
            </div>
          </div>
          <br><br>

          <div class="row">
            @include('widget.instagram-embed-widget')
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


<script type="text/javascript">
(sc_adv_out = window.sc_adv_out || []).push({
    id: 830981,
    domain: "n.ads5-adnow.com",
});
</script>
<script type="text/javascript" src="//st-n.ads5-adnow.com/js/a.js" async></script>

@endsection
  