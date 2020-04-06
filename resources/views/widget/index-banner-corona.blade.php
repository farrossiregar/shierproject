<div class="col-md-6" style="padding: 0px; overflow: hidden; background-image: url({{ asset('image/corona-shierproject.jpg') }}); background-position: center; background-size: cover; height: 100%;">
    <div style="width: 100%; height: 100%; background-color: rgba(255,255,255,0.5);">
        <a href="https://api.kawalcorona.com/indonesia/" target="_blank">
            <div class="row" style="padding-top: 50px; ">
                <div class="row" style="text-align: center;">
                <div class="col-md-4"></div>
                <div class="col-4">
                    <h2 style="text-decoration: none; color: black;">DATA CORONA DI INDONESIA</h2>
                    <p  style="text-decoration: none; color: black;">Sumber : api.kawalcorona.com/indonesia/</p>
                </div>
                <div class="col-md-4"></div>
                </div>
                <br><br>
                @foreach($parse as $key => $item)
                
                <div class="col-md-4" >
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8" style="background-color: #dc3545; border-radius: 10px; text-align: center; height: 240px;">
                    <div class="row">
                        <h4  style="text-decoration: none; color: black;"><u><b>Positif</b></u></h4>
                    </div>
                    <div class="row">
                    <br><br><br>
                        <h2  style="text-decoration: none; color: black;"><b><?php echo $item['positif']; ?></b></h2>
                    </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                </div>
                <div class="col-md-4" >
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8" style="background-color: #ffc107; border-radius: 10px; text-align: center; height: 240px;">
                    <div class="row">
                        <h4 style="text-decoration: none; color: black;"><u><b>Meninggal</b></u></h4>
                    </div>
                    <div class="row">
                    <br><br><br>
                        <h2 style="text-decoration: none; color: black;"><b><?php echo $item['meninggal']; ?></b></h2>
                    </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                </div>
                <div class="col-md-4" >
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8" style="background-color: #28a745; border-radius: 10px; text-align: center; height: 240px;">
                    <div class="row">
                        <h4 style="text-decoration: none; color: black;"><u><b>Sembuh</b></u></h4>
                    </div>
                    <div class="row">
                    <br><br><br>
                        <h2 style="text-decoration: none; color: black;"><b><?php echo $item['sembuh']; ?></b></h2>
                    </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                </div>
                @endforeach
                
            </div>
        </a>
    </div>
    <div class="row">
        <div style="position: absolute; bottom: 20px; left: 20px;">
            
            <div class="col-md-5">
                <h4><b>#SOCIALDISTANCING</b></h4>
            </div>
            <div class="col-md-3">
                <h4><b>#STAYATHOME</b></h4>
            </div>
            <div class="col-md-3">
                <h4><b>#LAWANCORONA</b></h4>
            </div>
        </div>
    </div>
</div>