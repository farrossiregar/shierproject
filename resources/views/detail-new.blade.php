@extends('layout.app')

@section('title', $title .' - Shier Project')

<?php
  $desc = substr($fulltexts, strripos($fulltexts, 'shierproject.com') + 33, 250);
?>

@section('metadesc', $desc)

@section('content')

<style>
  .yt-container {
    position:relative;
    padding-bottom:56.25%;
    padding-top:30px;
    height:0;
    overflow:hidden;
  }
  .yt-container iframe, .yt-container object, .yt-container embed {
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
  }
</style>
<!--    MAIN    -->
<div style="height: 35vh; background-color: {{ $bgcolor_category }}" class="row">
  
  <!-- <div class="col-md-12 main_img_web" style="background-image: url('{{ asset('image/category').'/'.$image_category }}');">
    <div class="main_img_web_filter"></div>
  </div> -->
  <div class="col-md-12" style="height: 80%; width: 100vw; background-image: url('{{ asset('image/category').'/'.$image_category }}'); background-position: center; background-size: cover; border-bottom-right-radius: 40px;">
  </div>
  
  <div class="container">
    <div class="row">
    <br>
      <div class="col-md-12">
        <?php
          $url_detail = route('/', $url_category.'/'.$alias);
          $url_detail = str_replace('?', '/', $url_detail);

          $link_category = route('/', $url_category);
          $link_category = str_replace('?', '/', $link_category);
        ?>
        <!-- <h4><b><a href="{{ route('/') }}" style="text-decoration: none; color: black;"><?php echo strtoupper('Shierproject'); ?></a> >> <a href="<?php str_replace('?', '/', route('/', $url_category)); ?>" style="text-decoration: none; color: black;"><?php echo strtoupper('Hiburan'); ?></a> >> <a style="text-decoration: none; color: black;" href="<?php echo $url_detail; ?>"><?php echo strtoupper($title); ?></a></b></h4> -->
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
            <a href="{{ route('/') }}" style="text-decoration: none; color: black; font-size: 15px; font-weight: 600; padding: 5px 5px;"><?php echo strtoupper('Shierproject'); ?></a>
            <a href="#left" style="padding: 5px 2px;"><i class="fa fa-angle-right" style="font-size: 15px; font-weight: 600; color: black"></i></a>
            <a href="<?php echo $link_category; ?>" style="text-decoration: none; color: black; font-size: 15px; font-weight: 600; padding: 5px 4px;"><?php echo strtoupper('Hiburan'); ?></a>
            <a href="#left" style="padding: 5px 2px;"><i class="fa fa-angle-right" style="font-size: 15px; font-weight: 600; font-weight: 1000; color: black"></i></a>
            <a href="<?php echo $url_detail; ?>" style="text-decoration: none; color: black; font-size: 15px; font-weight: 600; padding: 5px 4px;" ><?php echo strtoupper($title); ?></a>
          </div>
      </div>
    </div>
  </div>
</div>

<!--    END MAIN    -->
<div style="background-color: {{ $bgcolor_category }}; height: 10vh; width: 100vw;">
  <div style="background-color: white; height: 10vh; width: 100vw; border-top-left-radius: 40px;">
  </div>
</div>
<div class="container" style="background-color: white;">
  <div class="row">
    <!--  TERBARU -->
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-8">
          <h1><b>{{ $title }}</b></h1>
        </div>
      </div>
      <p style="color: lightgray;"><i class="fa fa-clock-o" style="font-size: 20px;"></i> {{ $publish_date }}</p>
    </div>
    <div class="col-md-8" style="border-right: 1px solid white;">
      <div class="row">
        <div class="col-md-12" style="top: -200px; overflow: hidden;">
          <div class="row share_btn_article_pos">
          <?php
            $url_detail = route('/', $url_category.'/'.$alias);
            $url_detail = str_replace('?', '/', $url_detail);
          ?>
            <div class="col-md-12" style="">
              <div class="fb_share share_btn_article">
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url_detail; ?>" target="_blank">
                  <i class="fa fa-facebook" style="font-size: 25px; color: white;"></i>
                </a>
              </div>
              <br>
              <div class="ig_share share_btn_article">
                <a href="https://www.instagram.com/shierproject" target="_blank">
                  <i class="fa fa-instagram" style="font-size: 25px; color: white;"></i>
                </a>
              </div>
              <br>
              <div class="twr_share share_btn_article">
                <a href="https://twitter.com/share?url=<?php echo $url_detail; ?>" target="_blank">
                  <i class="fa fa-twitter" style="font-size: 25px; color: white;"></i>
                </a>
              </div>              
              <br>
              <div class="wa_share share_btn_article">
                <a href="https://api.whatsapp.com/send?&text=<?php echo $url_detail; ?>" target="_blank">
                  <i class="fa fa-whatsapp" style="font-size: 25px; color: white;"></i>
                </a>
              </div>
            </div>
          </div>
          <div style="border-radius: 10px; overflow: hidden;">
            <!-- <img style="width: 100%; height: 540px;" src="<?php echo "http://cms.shierproject.com/image/content/".$foto_name; ?>"> -->
            <div style="width: 100%; height: 540px; background-image: url('<?php echo "http://cms.shierproject.com/image/content/".$foto_name; ?>'); background-position: center; background-size: cover;"></div>
          </div>
          <p>{{ $image_caption }}</p>
          <p>
            <?php
              if($image_source != ''){
                echo "Sumber Foto : ".$image_source;
              }
            ?>
          </p>
        </div>
        
      
        <?php
        /*
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
        
        <!-- ADS BANNER 1 -->*/
        ?>
      </div>
      <hr>

      <div class="row">
        <?php
            /*
        ?>
        <!--
        <br><br>
        <div class="col-md-12">
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
      </div>
      <br><br><br>
      
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
        <br><br><br><br><br>

        <style>
          .tags_article{
            border: 1px solid lightgray; border-radius: 10px; text-align: center; padding: 5px 10px; margin: 3px 3px; display: inline-block; font-size: 20px;
          }
        </style>
        <div class="col-md-12" style="border: 0px solid lightgray; border-radius: 6px; margin: 60px 0;">
          <h4><b><i>#</i>Tags</b></h4>
          <hr>
          <br>
          @foreach($tags_article as $key => $item)
          <div class="tags_article"><b><?php echo '#'.$item->title_tags; ?></b></div>
          @endforeach
        </div>

        <?php
            /*
        ?>
        <div class="col-md-12">
          <h4><b>Tinggalkan Komentar</b></h4>
          <!-- <hr>
          <br>
          <form action="">
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

          <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5" data-width="720"></div>


          <!-- <div class="fb-comment-embed"
          data-href="https://www.facebook.com/zuck/posts/10102735452532991?comment_id=1070233703036185"
          data-width="720"></div> -->

        </div>
        <?php
            */
        ?>
      </div>

      
      <!-- <div class="row" id="related-article-position">
        <div class="col-md-12">
          include('widget.artikel-terkait-widget', $artikelterkait)
        </div>
      </div> -->
    </div>
    <!--  TERBARU -->

    <!--  POPULER -->
    <div class="col-md-4">
      <br>
      @include('layout.about-author')
      

      <br><br>
      <div class="row" id="top-article-container">
        <div class="col-md-12">
          @include('widget.artikel-populer-widget', $toparticle)
        </div>
      </div>

    <?php
        /*
    ?>
      <!--
      <br><br><br>
      <div class="row">
        <!-- <h4 style="text-align: center;">Iklan</h4> -->
        <div class="col-md-12">
          <a href="https://www.instagram.com/the_b_kopi/" target="_blank">
            <div style="width: 80%; margin: auto;">
              <img src="http://cms.shierproject.com/image/ads/the-brians-coffee.gif" style="width: 100%;">
            </div>
          </a>
        </div>
      </div>
      -->
    <?php
        */
    ?>
    </div>
    <!--  POPULER -->

  </div>
  <br><br><br>
</div>

<div style="padding: 5vh 0; background-color: #242424;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        @include('widget.artikel-terkait-widget', $artikelterkait)
      </div>
    </div>
  </div>
</div>

<section class="footer">
  @include('layout.footer')
</section>



<script>
  window.addEventListener("scroll", function() {
    var elementTarget = document.getElementById("top-article-container");
    var relatedArticle = document.getElementById("related-article-position");

    // if (window.scrollY > (elementTarget.offsetTop + elementTarget.offsetHeight)) {
    //   $('#top-article-container').addClass("toparticlefixed");
    // }else{
    //   if (window.scrollY > (elementTarget.offsetTop + elementTarget.offsetHeight) && window.scrollY < (relatedArticle.offsetTop + relatedArticle.offsetHeight)) {
    //     $('#top-article-container').addClass("toparticlefixed");
    //   }else{
    //     $('#top-article-container').removeClass("toparticlefixed");
    //   }
      
    // }

    
    // if (window.scrollY > (relatedArticle.offsetTop + relatedArticle.offsetHeight)) {
    //     $('#top-article-container').removeClass("toparticlefixed");
    // }else{
    //     $('#top-article-container').addClass("toparticlefixed");
    // }
  });
</script>

<style>
  .toparticlefixed{
    position: fixed;
    top: 3vh;
    width: 390px;
  }
</style>

@endsection