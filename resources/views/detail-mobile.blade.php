@extends('layout.app')

@section('title', 'Shier Project - Detail Mobile')

@section('content')

  <!--    MAIN    -->
  <?php
    if($foto_name != ''){
  ?>
    <div style="overflow: hidden; margin-top: -20px; background-image: url('{{asset('image/content').'/'.$foto_name}}'); height: 65vh; width: 100vw; background-position: center; ">
    <!-- <img style="width: auto; height: 60vh;" src="{{asset('image/content').'/'.$foto_name}}"> -->
  <?php
    }else{
  ?>
    <div style="overflow: hidden; margin-top: -20px; background-image: url('https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg'); height: 65vh; width: 100vw; background-position: center; ">
    <!-- <img style="width: auto; height: 60vh;" src="https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg"> -->
  <?php
    }
  ?>
    <div style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.6), rgba(0,0,0,0.3), rgba(0,0,0,0.1), rgba(255,255,255,0.4), rgba(255,255,255,1)); height: 100%;">
      
      <div style="position: relative; top: 20px; left: 10px;">
        <div class="row">
          <div style="width: 20vw; display: inline-block; padding: 15px;">
          </div>
          <div style="width: 80vw; display: inline-block;color: white; text-align: right; padding: 10px;">
            <h1><b>{{ $title }}</b></h1>
            <p style="color: white;"><i class="fa fa-clock-o" style="font-size: 18px;"></i> {{ $publish_date }}</p>
          </div>
        </div>
      </div>     
    </div>
</div>


<!--    END MAIN    -->

<div class="container" style="background-color: white; overflow-x: hidden;">
<div class="row" style="padding: 10px;">
  <div class="col-md-3" style="display: inline-block;">
    <a href="https://www.facebook.com" target="_blank"><div style="padding: 7px 13px; background-color: blue; border-radius: 20px; width: 41px;"><i class="fa fa-facebook" style="font-size: 25px; color: white;"></i></div></a>
  </div>
  <div class="col-md-3"  style="display: inline-block;">
    <a href="https://www.instagram.com/shierproject" target="_blank"><div style="padding: 6px 10px; background: linear-gradient(to bottom right, #515BD4, #8134AF, #DD2A7B, #FEDA77, #F58529); border-radius: 20px; width: 41px;"><i class="fa fa-instagram" style="font-size: 25px; color: white;"></i></div></a>
  </div>
  <div class="col-md-3"  style="display: inline-block;">
    <a href="https://www.twitter.com" target="_blank"><div style="padding: 6px 10px; background-color: #00ACEE; border-radius: 20px; width: 41px;"><i class="fa fa-twitter" style="font-size: 25px; color: white;"></i></div></a>
  </div>
</div>
  <div class="row">
    <!--  TERBARU -->
    <div class="col-md-12" style="border-right: 1px solid white;">
      <br>
      <hr>
      <div class="row">
        <div class="col-md-12" style="font-size: 17px;">
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

          <br><br><br>
          <hr>
          <div class="artikel_terkait row">
            @include('widget.artikel-terkait-widget-mobile', $artikelterkait)
          </div>
        </div>

      </div>
    </div>
    <!--  TERBARU -->

    <!--  POPULER -->
    <!-- <div class="col-md-4">
      <div class="row">
        

        <div class="col-md-12">
          <h3><a href="https://www.antaranews.com"><b>Antara News Terkini</b></a></h3>
          <hr style="color: black;">
          <div id="antara_news_id" style="height:60vh; width: 100%; overflow-y: scroll;">

          </div>
          <br>
        </div>

      </div>
    </div> -->
    <!--  POPULER -->

  </div>
  <br><br><br>

</div>


<script>

  $(document).ready(function(){
    var rss_antara = 'https://www.antaranews.com/rss/terkini';
    var rss_republika = 'https://www.youtube.com/feeds/videos.xml?channel_id=UCvC4D8onUfXzvjTOM-dBfEA';

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
      var xml = this;
        var x, i, xmlDoc, txt;
        xmlDoc = xml.responseXML;
        txt = "";
        x = xmlDoc.getElementsByTagName("title");
        for (i = 0; i< x.length; i++) {
          txt += x[i].childNodes[0].nodeValue + '<br>';
          if(xmlDoc.getElementsByTagName("title")[i].childNodes[0].nodeValue == 'ANTARA News - Berita Terkini'){

          }else{
            var image_antara = xmlDoc.getElementsByTagName("description")[i].childNodes[0].nodeValue;
            var image_antara_first = image_antara.indexOf('src=');
            var image_antara_last = image_antara.indexOf('.jpg');
            var image_antara_source = image_antara.substring(image_antara_first + 5, image_antara_last + 4);

            var antara_object_news = '<a href="'+ xmlDoc.getElementsByTagName("link")[i].childNodes[0].nodeValue +'" target="_blank">'+
                                      '<div class="row">'+
                                        '<div class="col-md-4">'+
                                          '<img style="width: 100%; border-radius: 5px;" src="'+ image_antara_source +'">'+
                                        '</div>'+
                                        '<div class="col-md-8">'+
                                          '<p>'+ xmlDoc.getElementsByTagName("title")[i].childNodes[0].nodeValue +'</p>'+
                                        '</div>'+
                                      '</div>'+
                                    '</a><br>';
          }

          
          $("#antara_news_id").append(antara_object_news);
        }
      }
    };
    xmlhttp.open("GET", rss_antara, true);
    xmlhttp.send();

    
  });

  
</script>



@endsection