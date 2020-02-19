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

    <body style='background-color: rgb(245, 247, 250); width: 100vw; overflow-x: hidden;'>

    @include('layout.nav')

        <!--    MAIN    -->
        <div style="height: 30vh;" class="row">
            <div class="col-md-12" style="background-image: url('https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/B328284533D1C776C141B676F54E8D626B19DC9327F399BB99F196A8DE0A2AF8/scale?aspectRatio=1.78&format=jpeg'); background-size: cover; width: 100vw; height: 100%; background-repeat: no-repeat; background-position: center; padding: 0 2px;"></div>
            
            </div>
        <!--    END MAIN    -->

<div class="container" style="background-color: white;">
  <div class="row">
    <!--  TERBARU -->
    <div class="col-md-8" style="border-right: 1px solid white;">
      <h3><b>{{ $title }}</b></h3>
      <hr style="color: black;">
      <div class="row">
        <div class="col-md-12">
          <img style="width: 100%; border-radius: 10px;" src="{{ $foto_name }}">
          <p>Only when the button is clicked, the navigation bar will be displayed.</p>
        </div>
      </div>
      <hr>
      
      <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-8">
            <?php echo html_entity_decode($fulltexts); ?>
            </p>

            <!-- <br><br>
            <div class="row">
                <div class="col-md-12">
                <img style="width: 100%; border-radius: 10px;" src="{{ $foto_name }}">
                <p>Only when the button is clicked, the navigation bar will be displayed.</p>
                </div>
            </div> -->
            <!-- <p>  
                <?php //echo html_entity_decode($fulltexts); ?>
            </p> -->

            <!--    Artikel Terkait     -->
            @include('layout.artikel-terkait-widget')
            <!--    Artikel Terkait     -->

        </div>

      </div>


    </div>
    <!--  TERBARU -->

    <!--  POPULER -->
    <div class="col-md-4">
      <div class="row">
        <div class="col-md-12">
          <h3><b>Republika Ekonomi</b></h3>
          <hr style="color: black;">
          <div id="republika_news_id" style="height:60vh; width: 100%; overflow-y: scroll; overflow-x:visible;">
            <div class="row">
              <div class="col-md-4">
                <img style="width: 100%;" src="https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg">
              </div>
              <div class="col-md-8">
                <p>Only when the button is clicked, the navigation bar will be displayed.</p>
              </div>
            </div>
            <br>
          </div>
        </div>

        @include('layout.antaranewswidget')

      </div>
    </div>
    <!--  POPULER -->

  </div>
  <br><br><br>

  
  
</div>

</body>
</html>
