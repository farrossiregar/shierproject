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
                    <img src="{{ asset('image/shierproject-logo-png-black.png') }}" alt="shierproject-logo" style="width: 75%;">
                <?php
                    }else{
                ?>
                    <img src="{{ asset('image/shierproject-logo-png-black.png') }}" alt="shierproject-logo" style="width: 40%;">
                <?php
                    }
                ?>
                </a>
            </div>
            <div class="col-md-4">
            <br><br>
                <div class="row">
                    <div class="col-md-12">
                        <b><h4><a href="{{ route('/') }}" style="color: white;">shierproject.com</a></h4></b>
                    </div>
                    <!-- <ul>
                        <a href="{{ route('/') }}"><li><a href="" style="color: white;">Kontak Kami</a></li></a>
                    </ul> -->
                </div>
            </div>
            <div class="col-md-4"></div>
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