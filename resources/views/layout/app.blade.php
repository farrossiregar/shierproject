<!DOCTYPE html>
<html lang="en">
    <head>
      @include('layout.header')
    </head>

    <body style='background-color: white; width: 100vw; overflow-x: hidden;'>

      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N46NT7F"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->


      <!-- Facebook Comments -->
      <!-- <div id="fb-root"></div>
      <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0"></script> -->

      <div id="fb-root"></div>
      <!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0"></script> -->
      <script async defer src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0"></script>
      <!-- <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6"></script> -->


        @include('layout.nav')

        <!--    MAIN    -->
        <!-- <div style="height: 30vh;" class="row">
          <div class="col-md-12" style="background-image: url('https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/B328284533D1C776C141B676F54E8D626B19DC9327F399BB99F196A8DE0A2AF8/scale?aspectRatio=1.78&format=jpeg'); background-size: cover; width: 100vw; height: 100%; background-repeat: no-repeat; background-position: center; padding: 0 2px;"></div>
        </div> -->
        <!--    END MAIN    -->

        @yield('content')

        @include('layout/scroll-to-top')
  </body>
</html>
