<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shier Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body style='background-color: rgb(245, 247, 250); width: 100vw; overflow-x: hidden; padding-bottom: 10vh;'>

  <nav class="navbar navbar-inverse" style="margin-bottom: 0px;">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#">ShierProject</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <!-- <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Page 1-1</a></li>
              <li><a href="#">Page 1-2</a></li>
              <li><a href="#">Page 1-3</a></li>
            </ul>
          </li> -->
          <li><a href="#">Anti Gaptek</a></li>
          <li><a href="#">Butuh Hiburan ?</a></li>
          <li><a href="#">Jalan-jalan yuk !</a></li>
          <li><a href="#">Belanja di mana</a></li>
        </ul>
        <br><br>
        <ul class="nav navbar-nav navbar-right">
          <div class="container">
            <div class="row">
              <div class="col-md-4" style="width:45%; display: inline-block;">
                <span><a href="#"><i class="fa fa-instagram" style="font-size: 20px;"></i></a></span>
                <span><a href="#"><i class="fa fa-facebook" style="font-size: 20px;"></i></a></span>
              </div>
              <div class="col-md-6" style="width:50%; display: inline-block;">
                <h4>Contact</h4>
              </div>
            </div>
          </div>
          
          <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
        </ul>
      </div>
    </div>
  </nav>

  <!--    MAIN    -->
  <div style="background-image: url('https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/B328284533D1C776C141B676F54E8D626B19DC9327F399BB99F196A8DE0A2AF8/scale?aspectRatio=1.78&format=jpeg'); background-size: cover; width: 100vw; height: 30vh; background-repeat: no-repeat; background-position: center; display: inline-block;"></div>
  <!--    END MAIN    -->

  <div class="container" style="background-color: white;">
    <div class="row">
      <!--  TERBARU -->
      <div class="col-md-12" style="border-right: 1px solid lightgray;">
        <br><br>
        <h4><b>Terbaru</b></h4>
        <hr style="color: black;">
        
        <div class="row">
          <?php
            $no = 0;
          ?>
          @foreach($data as $item)
          
          <?php
            $no = $no + 1; 
          ?>
          <a href="{{ $item->link }}">
            <div class="col-md-6" style="display: inline-block; width: 48%; max-height: 30vh;">
              <img style="width: 100%; border-radius: 10px; " src="https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg">
              <h4>{{ $item->title }}</h4>
            </div>
          </a>
          
          @endforeach
        </div>
        
        <hr>
        <!-- <div class="row">
          <div class="col-md-6" style="display: inline-block; width: 48%; height: 100%;">
            <img style="width: 100%; border-radius: 10px; " src="https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg">
            <h4>Only when the button is clicked, the navigation bar will be displayed.</h4>
          </div>
          <div class="col-md-6" style="display: inline-block; width: 48%; height: 100%;">
            <img style="width: 100%; border-radius: 10px;" src="https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg">
            <h4>Only when the button is clicked, the navigation bar will be displayed.</h4>
          </div>
        </div> -->

        <h3><b>Populer</b></h3>
        <hr>
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-6" style="display: inline-block; width: 45%;">
                <img style="width: 100%;" src="https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg">
              </div>
              <div class="col-md-6" style="display: inline-block; width: 45%;">
                <p>Only when the button is clicked, the navigation bar will be displayed</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6" style="display: inline-block; width: 45%;">
                <img style="width: 100%;" src="https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg">
              </div>
              <div class="col-md-6" style="display: inline-block; width: 45%;">
                <p>Only when the button is clicked, the navigation bar will be displayed</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--  TERBARU -->
    </div>

    <!-- <div class="row"> -->
      <!--  POPULER -->
      <!-- <div class="col-md-12">
        <div class="row"> -->
          <!-- ANTARA NEWS -->
          <!-- <div class="col-md-12">
            <h3><a href="https://www.antaranews.com"><b>Antara News Terkini</b></a></h3>
            <hr style="color: black;">
            <div id="antara_news_id" style="height:60vh; width: 100%; overflow-y: scroll;">

            </div>
            <br>
          </div> -->
          <!-- ANTARA NEWS -->

        <!-- </div>
      </div> -->
      <!--  POPULER -->
    <!-- </div> -->
    
    
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


      var xmlhttpRepublika = new XMLHttpRequest();
      xmlhttpRepublika.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          var xml = this;
          console.log(this);
          var x, i, xmlDoc, txt;
          xmlDoc = xml.responseXML;
          txt = "";
        // x = xmlDoc.getElementsByTagName("title");
          for (i = 0; i< x.length; i++) {
            txt += x[i].childNodes[0].nodeValue + '<br>';
            var republika_object_news = '<a href="'+ xmlDoc.getElementsByTagName("link")[i].childNodes[0].nodeValue +'" target="_blank">'+
                                        '<div class="row">'+
                                          '<div class="col-md-4">'+
                                            '<img style="width: 100%;" src="https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg">'+
                                          '</div>'+
                                          '<div class="col-md-8">'+
                                            '<p>'+ xmlDoc.getElementsByTagName("title")[i].childNodes[0].nodeValue +'</p>'+
                                          '</div>'+
                                        '</div>'+
                                      '</a><br>';
            //$("#republika_news_id").append(republika_object_news);
            alert(xmlDoc);
          }
        }
      };
      xmlhttpRepublika.open("GET", 'http://beta.tribunnews.com/api/index.php/ajax/video_pilihan_article', true);
      xmlhttpRepublika.withCredentials = true;
      xmlhttpRepublika.setRequestHeader("Content-Type", "application/json");
      xmlhttpRepublika.send({ 'request': "authentication token" });
      //xmlhttpRepublika.send();



      $.ajax({
        url: 'https://www.voaindonesia.com/api/zggqre__oq', 
        success: function(result){
          for(var i = 1; i <= result.getElementsByTagName('title').length; i++){
            var data_xml = result.responseXML;

            parser = new DOMParser();
            xmlDoc = parser.parseFromString(result,"text/xml");
            console.log(result);
          }
        }
      });
    });

    
  </script>
</body>
</html>
