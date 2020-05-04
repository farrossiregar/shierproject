@extends('layout.app')

@section('title', $title .' - Shier Project')

<?php
  $desc = substr($fulltexts, strripos($fulltexts, 'shierproject.com') + 33, 250);
?>

@section('metadesc', $desc)

@section('content')

  <!--    MAIN    -->
  <div class="main_img_mobile" style=" height: 85vh; background-image: url('<?php echo "http://cms.shierproject.com/image/content/".$foto_name; ?>'); ">
    <div class="main_img_filter">
      <div style="position: relative; top: 20px; left: 10px;">
        <div class="row">
          <div class="title_article_mobile">
            <h1><b>{{ $title }}</b></h1>
            <p style="color: white;"><i class="fa fa-clock-o" style="font-size: 18px;"></i> {{ $publish_date }}</p>
          </div>
        </div>
      </div>  
      <!-- <div class="row">
        <div class="col-md-12">
          <p style="font-size: 10px;"><b><a href="{{ route('/') }}" style="text-decoration: none; color: black;"><?php echo strtoupper('Shierproject'); ?></a>  | <a href="{{ route('get-category', $category) }}" style="text-decoration: none; color: black;"><?php echo strtoupper('Hiburan'); ?></a> | <?php echo strtoupper($title); ?></b></p>
        </div>
      </div>    -->
    </div>
</div>


<!--    END MAIN    -->

<div class="container" style="background-color: white; overflow-x: hidden;">
  <?php
    $url_detail = route('/', $url_category.'/'.$alias);
    $url_detail = str_replace('?', '/', $url_detail);
  ?>
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
      <br><br>


      <div class="row">
        <div class="col-md-12" style="font-size: 17px; padding: 20px;">
          <?php echo html_entity_decode($fulltexts); ?>

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

          <br><br>

          <style>
            .tags_article{
              border: 1px solid lightgray; border-radius: 10px; text-align: center; padding: 5px 5px; margin: 0 4px; display: inline-block;
            }
          </style>
          <div style="border: 0px solid lightgray; border-radius: 6px; margin: 60px 0;">
            <h4><b>Tags</b></h4>
            <hr>
            <br>
            <a href=""><div class="col-md-2 tags_article"><b>Marvel</b></div></a>
            <a href=""><div class="col-md-2 tags_article"><b>Film</b></div></a>
            <a href=""><div class="col-md-2 tags_article"><b>Hiburan</b></div></a>
          </div>


          <div>
            <h4><b>Tinggalkan Komentar</b></h4>
            <hr>
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
            </form>
          </div>
          <br><br>



          @include('layout.about-author')

          <br><br><br>
          <hr>
          <div class="artikel_terkait row">
            @include('widget.artikel-terkait-widget-mobile', $artikelterkait)
          </div>
        </div>

      </div>
    </div>
    <!--  TERBARU -->

  </div>
  <br><br><br>

</div>


@endsection