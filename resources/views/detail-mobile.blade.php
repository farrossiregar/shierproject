@extends('layout.app')

@section('title', $title .' - Shier Project')

<?php
  $desc = substr($fulltexts, strripos($fulltexts, 'shierproject.com') + 33, 250);
?>

@section('metadesc', $desc)

@section('content')

  <!--    MAIN    -->
  <div style="height: 85vh; margin-top: 70px; width: 100vw; background-color: {{ $bgcolor_category }}; ">
    <div class="main_img_mobile" style=" height: 90%; background-image: url('<?php echo "http://cms.shierproject.com/image/content/".$foto_name; ?>'); border-bottom-right-radius: 40px;">
      <!-- <div class="main_img_filter"> -->
      <div style="background-color: rgba(0,0,0,0.5);
      height: 100%;">
        <div style="position: relative; top: 20px; left: 10px;">
          <div class="row">
            <div class="title_article_mobile">
              <h1><b style="text-shadow: 1px 1px black;">{{ $title }}</b></h1>
              <p style="color: white;"><i class="fa fa-clock-o" style="font-size: 18px;"></i> {{ $publish_date }}</p>
            </div>
          </div>
        </div>    
      </div>
      
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php
            $url_detail = route('/', $url_category.'/'.$alias);
            $url_detail = str_replace('?', '/', $url_detail);

            $link_category = route('/', $url_category);
            $link_category = str_replace('?', '/', $link_category);
          ?>
          <style>
            div.scrollmenu {
              /* background-color: #333; */
              overflow: auto;
              white-space: nowrap;
            }

            div.scrollmenu a {
              display: inline-block;
              color: white;
              text-align: center;
              padding: 20px 5px;
              text-decoration: none;
            }
          </style>
          <div class="scrollmenu">
            <a href="{{ route('/') }}" style="text-decoration: none; color: black; font-size: 10px; padding: 5px 5px;"><?php echo strtoupper('Shierproject'); ?></a>
            <a href="#left" style="padding: 5px 2px;"><i class="fa fa-angle-right" style="font-size: 10px; font-weight: 1000; color: black"></i></a>
            <!-- <a href="<?php str_replace('?', '/', route('/', $url_category)); ?>" style="text-decoration: none; color: black; font-size: 10px;  padding: 5px 4px;"><?php echo strtoupper('Hiburan'); ?></a> -->
            <a href="<?php echo $link_category; ?>" style="text-decoration: none; color: black; font-size: 10px;  padding: 5px 4px;"><?php echo strtoupper('Hiburan'); ?></a>
            <a href="#left" style="padding: 5px 2px;"><i class="fa fa-angle-right" style="font-size: 10px; font-weight: 1000; color: black"></i></a>
            <a href="<?php echo $url_detail; ?>" style="text-decoration: none; color: black; font-size: 10px; padding: 5px 4px;" ><?php echo strtoupper($title); ?></a>
          </div>
        </div>
      </div>
  </div>
  <div style="height: 10vh; width: 100vw; background-color: {{ $bgcolor_category }};  border-bottom: 1px solid white;">
    <div style="height: 10vh; width: 100vw; background-color: white; border-top-left-radius: 40px; border-bottom: 1px solid white;">
      <?php
        $url_detail = route('/', $url_category.'/'.$alias);
        $url_detail = str_replace('?', '/', $url_detail);
      ?>
      <div class="container">
        <div class="row" style="padding: 10px;">
          <div class="col-md-3" style="display: inline-block;">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url_detail; ?>" target="_blank"><div class="fb_share share_btn_article"><i class="fa fa-facebook" style="font-size: 25px; color: white;"></i></div></a>
          </div>
          <div class="col-md-3"  style="display: inline-block;">
            <a href="https://www.instagram.com/shierproject" target="_blank"><div class="ig_share share_btn_article"><i class="fa fa-instagram" style="font-size: 25px; color: white;"></i></div></a>
          </div>
          <div class="col-md-3"  style="display: inline-block;">
            <a href="https://twitter.com/share?url=<?php echo $url_detail; ?>" target="_blank"><div class="twr_share share_btn_article"><i class="fa fa-twitter" style="font-size: 25px; color: white;"></i></div></a>
          </div>
          <div class="col-md-3"  style="display: inline-block;">
            <a href="https://api.whatsapp.com/send?&text=<?php echo $url_detail; ?>" target="_blank"><div class="wa_share share_btn_article"><i class="fa fa-whatsapp" style="font-size: 25px; color: white;"></i></div></a>
          </div>
        </div>
      </div>      
    </div>
  </div>


<!--    END MAIN    -->

<div class="container" style="background-color: white; overflow-x: hidden;">
  <div class="row">
    <!--  TERBARU -->
    <div class="col-md-12" style="border-right: 1px solid white;">
      <br>
      <div class="row">
        <div class="col-md-12">
          <p>{{ $image_caption }}</p>
          <p>
            <?php
              if($image_source != ''){
                echo "Sumber Foto : ".$image_source;
              }
            ?>
          </p>
        </div>
      </div>
      <hr>
      

      <!-- ADS BANNER 1 -->
      <!-- <div class="row">
        <div class="col-md-12" style="width: 320px; height: 100px; background: lightgray; text-align: center; margin: auto;">
          <h2>Available Space 320 X 100</h3>
        </div>
      </div> -->
      <!-- ADS BANNER 1 -->
      
      <?php
        /*
      ?>
      <!--
      <br><br>
      <div class="row">
        <a href="https://www.instagram.com/galerimenawan/" target="_blank">
          <div style="width: 100%;">
            <img src="http://cms.shierproject.com/image/ads/galeri-menawan.jpeg" style="width: 100%;">
          </div>
        </a>
      </div>
      -->
      <?php
        */
      ?>
      <br><br><br>


      <div class="row">
        <div class="col-md-12">
          <div class="txt-article">
            <div class="row" style="font-size: 17px; padding: 20px;">
              <?php
                $pArticle = explode("<p>",html_entity_decode($fulltexts));

                $half = count($pArticle)/ 2;
                for($i = 0; $i <= round($half); $i++){
                  // echo str_replace("</strong>", '</strong><br>', $pArticle[$i]);
                  echo $pArticle[$i];
                }

              ?>
            </div>
            
            <?php
                /*
            ?>
            <!--
            <div class="row" style="background-color: #f0f0f0; padding: 25px 0; margin-top: 20px; margin-bottom: 20px;">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <a href="https://www.instagram.com/the_b_kopi/" target="_blank">
                      <div style="width: 100%;">
                        <img src="http://cms.shierproject.com/image/ads/the-brians-coffee.gif" style="width: 100%;">
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            -->
            <?php
                */
            ?>

            <div class="row" style="font-size: 17px; padding: 20px;">
              <?php
                if(fmod($half, 1) !== 0.00){
                  $half = $half + 0.5;
                }else{
                  $half = $half;
                }

                for($j = $half; $j < count($pArticle); $j++){
                  // echo str_replace('</strong>"', '</strong><br>"', $pArticle[$j]);
                  echo $pArticle[$j];
                }
              ?>
              <?php //echo html_entity_decode($fulltexts); ?>

              <br><br>
              <?php
                if($link != ''){
              ?>
                <div>
                  <a href="{{$link}}" target="_blank">
                    <p style="color: gray;">Sumber : {{ $source }}</p>
                  </a> 
                </div>
                          
              <?php
                }
              ?>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12" style="height: 60px; background-color: linear-gradient(to top, rgba(0,0,0,1), rgba(0,0,0,0.5), rgba(0,0,0,0.3));"></div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="col-md-12">
                <div class="col-md-12">
                  <div id="load_more" class="col-md-12" style="border: 1px solid #969696; text-align: center;">
                    <h4 style="color: #969696;">Baca Lebih Banyak</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          

          

          <br><br>

          <style>
            .tags_article{
              border: 1px solid lightgray; border-radius: 6px; text-align: center; padding: 4px 8px; margin: 2px 2px; display: inline-block; font-size: 15px;
            }
          </style>
          <div class="row" style="border: 0px solid lightgray; border-radius: 6px; margin: 60px 0;">
            <h4><b><i>#</i>Tags</b></h4>
            <hr>
            <br>
            @foreach($tags_article as $key => $item)
            <div class="tags_article"><b><?php echo '#'.$item->title_tags; ?></b></div>
            @endforeach
          </div>
          <br>

          <div class="row">
            <div class="col-md-12">
              <div id="SC_TBlock_830978"></div>
            </div>
          </div>
          <br>

        <?php
            /*
        ?>
          <div>
            <h4><b>Tinggalkan Komentar</b></h4>
            <hr>
            <!-- <form action="">
              <div class="form-group">
                <label for="usr">Nama</label>
                <input type="text" class="form-control" id="usr">
              </div>
              <div class="form-group">
                <label for="usr">Email</label>
                <input type="text" class="form-control" id="usr">
              </div>
              <div class="form-group">
                <label for="comment">Komentar</label>
                <textarea class="form-control" rows="5" id="comment"></textarea>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-primary">Submit</button>
              </div>
            </form> -->
            <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5" data-width="750"></div>
          </div>
          <br><br>
          <?php
            */
        ?>



          @include('layout.about-author')

          <br><br><br>
          <hr>

        </div>
      </div>
    </div>
    <!--  TERBARU -->

  </div>
  <br><br><br>
</div>

<div class="row">
  <div style="padding: 5vh 0; background-color: #242424;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          @include('widget.artikel-terkait-widget-mobile', $artikelterkait)
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row footer">
  @include('layout.footer')
</div>


<script>
  $(window).on('load', function() {
    $('.txt-article').css({'height': '150vh', 'overflow': 'hidden'});
  });

  $('#load_more').on('click', function(){
    $('.txt-article').css({'height': '', 'overflow': ''});
    $(this).hide();
  });
</script>


<script type="text/javascript">
  (sc_adv_out = window.sc_adv_out || []).push({
      id: 830978,
      domain: "n.ads5-adnow.com",
  });
</script>
<script type="text/javascript" src="//st-n.ads5-adnow.com/js/a.js" async></script>


@endsection