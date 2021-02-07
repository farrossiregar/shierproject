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
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{ asset('image/shierproject-logo-black-rect.png') }}" alt="shierproject-logo" style="width: 75%;">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <div class="col-md-2">
                                <a href="https://www.facebook.com/shierproject/" target="_blank"><i class="fa fa-facebook"></i></a>
                            </div>
                            <div class="col-md-2">
                                <a href="https://twitter.com/ShierProject" target="_blank"><i class="fa fa-twitter"></i></a>
                            </div>
                            <div class="col-md-2">
                                <a href="https://www.instagram.com/shierproject" target="_blank"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                        
                    </div>
                <?php
                    }else{
                ?>
                    <img src="{{ asset('image/shierproject-logo-black-rect.png') }}" alt="shierproject-logo" style="width: 40%;">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <a href="https://www.facebook.com/shierproject/" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/ShierProject" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com/shierproject" target="_blank"><i class="fa fa-instagram"></i></a>
                        </div>
                        <div class="col-md-4"></div>
                    </div>

                    <style>
                        .font-footer-site > h4 > a{
                            font-size: 14px;
                        }
                    </style>
                <?php
                    }
                ?>
                </a>
            </div>
            <div class="col-md-4">
            <br><br>
                <div class="row">
                    <div class="col-md-12 font-footer-site">
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
                    <div class="col-md-12 font-footer-site">
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