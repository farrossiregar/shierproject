<div style="padding: 5vh 0; background-color: black;">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('/') }}" style="color: white;">
                <?php
                    use Jenssegers\Agent\Agent;
                    $agent = new Agent();
                    if(!$agent->isPhone()){
                ?>
                    <img src="{{ asset('image/shierproject-logo-black-rect.png') }}" alt="shierproject-logo" style="width: 75%;">
                    <div class="row">
                        <div class="col-md-2">
                            <i class="fa fa-facebook"></i>
                        </div>
                        <div class="col-md-2">
                            <i class="fa fa-twitter"></i>
                        </div>
                        <div class="col-md-2">
                            <i class="fa fa-instagram"></i>
                        </div>
                    </div>
                <?php
                    }else{
                ?>
                    <img src="{{ asset('image/shierproject-logo-black-rect.png') }}" alt="shierproject-logo" style="width: 40%;">
                    <div class="row">
                        <div class="col-md-2">
                            <i class="fa fa-facebook"></i>
                        </div>
                        <div class="col-md-2">
                            <i class="fa fa-twitter"></i>
                        </div>
                        <div class="col-md-2">
                            <i class="fa fa-instagram"></i>
                        </div>
                    </div>
                <?php
                    }
                ?>
                </a>
            </div>
            <div class="col-md-4">
            <br><br>
                <div class="row">
                    <div class="col-md-12">
                        <h4><a href="{{ route('/') }}" style="color: #333;"><b>shierproject.com</b></a></h4>
                        <h4><a href="<?php echo str_replace("?", "/", route('/', 'jalan-jalan')); ?>" style="color: #333;"><b>Jalan-jalan</b></a></h4>
                        <h4><a href="<?php echo str_replace("?", "/", route('/', 'tokoh-berpengaruh')); ?>" style="color: #333;"><b>Tokoh Berpengaruh</b></a></h4>
                        <h4><a href="<?php echo str_replace("?", "/", route('/', 'tekno')); ?>" style="color: #333;"><b>Tekno</b></a></h4>
                        <h4><a href="<?php echo str_replace("?", "/", route('/', 'hiburan')); ?>" style="color: #333;"><b>Hiburan</b></a></h4>
                        <h4><a href="<?php echo str_replace("?", "/", route('/', 'lifestyle')); ?>" style="color: #333;"><b>Lifestyle</b></a></h4>
                    </div>
                    <!-- <ul>
                        <a href="{{ route('/') }}"><li><a href="" style="color: white;">Kontak Kami</a></li></a>
                    </ul> -->
                </div>
            </div>
            <div class="col-md-4">
            <br><br>
                <div class="row">
                    <div class="col-md-12">
                        <h4><a href="<?php echo str_replace("?", "/", route('/', 'contact-us')); ?>" style="color: #333;"><b>Kontak Kami</b></a></h4>
                </div>
            </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <?php echo 'Copyright © Shier Project'.' '.date('Y'); ?>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        </div>
    </div>
</div>