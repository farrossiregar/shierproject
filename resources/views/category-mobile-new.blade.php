@extends('layout.app')

@section('title', 'Category Mobile')

@section('content')


<div style="height: 30vh; width: 104vw; overflow: hidden;" class="row">
  <div class="col-md-12" style="background-image: url('https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/B328284533D1C776C141B676F54E8D626B19DC9327F399BB99F196A8DE0A2AF8/scale?aspectRatio=1.78&format=jpeg'); background-size: cover; width: 110vw; height: 100%; background-repeat: no-repeat; background-position: center;"></div>
</div>


<!--    END MAIN    -->

<div class="container" style="background-color: white;">

  <div class="row">
    <!--  TERBARU -->
    <div class="col-md-8" style="border-right: 1px solid lightgray;">
      <div class="row">
        <div class="col-md-12">
          <h3><b>Terbaru</b></h3>
          <hr style="color: black;">
          <div class="row">
            @foreach($data as $key => $item)
            <a href="{{ route('detail', $item->alias) }}">            
              <div class="col-md-6" style="margin-bottom: 30px;">
                <div class="row">
                  <div class="col-md-6">
                    <img style="width: 100%; border-radius: 10px;" src="https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg">
                  </div>
                  <div class="col-md-6">
                    <h4>{{ $item->title }}</h4>
                  </div>
                </div>
              </div>
            </a>
            
            @endforeach
            <!--div class="col-md-6">
              <div class="row">
                <div class="col-md-6">
                  <img style="width: 100%; border-radius: 10px;" src="https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg">
                </div>
                <div class="col-md-6">
                  <p>Only when the button is clicked, the navigation bar will be displayed.</p>
                </div>
              </div>
            </!--div> -->
          </div>
          <!-- <br>
          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-6">
                  <img style="width: 100%; border-radius: 10px;" src="https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg">
                </div>
                <div class="col-md-6">
                  <p>Only when the button is clicked, the navigation bar will be displayed.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-6">
                  <img style="width: 100%; border-radius: 10px;" src="https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg">
                </div>
                <div class="col-md-6">
                  <p>Only when the button is clicked, the navigation bar will be displayed.</p>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>

      <br><br><br>
      <h3>Film</h3>
      <hr>
      <div class="row" style="padding: 10px;">
        <div class="col-md-3" style="padding: 4px; overflow:hidden;">
          <div style="background-image: url('https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg'); height: 15vw; border-radius: 10px; margin-left: auto; margin-right: auto; display: block; background-position: center; overflow: hidden;">
            <div style="position: absolute; bottom: 0px; left: 0px; color: white; background-color: rgba(0,0,0,0.8); padding: 2px;">
              <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            </div>
          </div>
        </div> 
        <div class="col-md-3" style="padding: 4px; overflow:hidden;">
          <div style="background-image: url('https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg'); height: 15vw; border-radius: 10px; margin-left: auto; margin-right: auto; display: block; background-position: center; overflow: hidden;">
            <div style="position: absolute; bottom: 0px; left: 0px; color: white; background-color: rgba(0,0,0,0.8); padding: 2px;">
              <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            </div>
          </div>
        </div> 
        <div class="col-md-3" style="padding: 4px; overflow:hidden;">
          <div style="background-image: url('https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg'); height: 15vw; border-radius: 10px; margin-left: auto; margin-right: auto; display: block; background-position: center; overflow: hidden;">
            <div style="position: absolute; bottom: 0px; left: 0px; color: white; background-color: rgba(0,0,0,0.8); padding: 2px;">
              <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            </div>
          </div>
        </div> 
        <div class="col-md-3" style="padding: 4px; overflow:hidden;">
          <div style="background-image: url('https://cdn0-production-assets-kly.akamaized.net/medias/1217575/big/035195500_1461824817-ChGQVTVUUAEvYPy.jpg'); height: 15vw; border-radius: 10px; margin-left: auto; margin-right: auto; display: block; background-position: center; overflow: hidden;">
            <div style="position: absolute; bottom: 0px; left: 0px; color: white; background-color: rgba(0,0,0,0.8); padding: 2px;">
              <p>Only when the button is clicked, the navigation bar will be displayed.</p>
            </div>
          </div>
        </div> 
      </div>
    </div>

    <!--  TERBARU -->

    <!-- ANTARA NEWS -->
    <div class="col-md-4">
    <br>
      <div class="row">
        @include('widget.antaranewswidget')

      </div>
    </div>
    <!-- ANTARA NEWS -->

  </div>
  
</div>

@endsection
