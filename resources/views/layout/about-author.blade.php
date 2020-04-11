<div class="row">
    <div class="col-md-12">
        <div class="row" style="border-radius: 5px; border: 1px solid lightgrey; padding: 5px; margin-top: 140px; margin-left: 2px; margin-right: 2px;">
            <?php
                use Jenssegers\Agent\Agent;
                $agent = new Agent();
                if(!$agent->isPhone()){
            ?>
                <style>
                    .author_profile{

                    }
                    .follow_me{
                    }
                </style>
            <?php        
                }else{
            ?>
            <style>
                .author_profile{
                    display: inline-block; width: 30vw;
                }
                .follow_me{
                    display: inline-block; width: 20vw;
                }
            </style>
            <?php        
                }
            ?>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 author_profile">
                        <br>
                        <div style="width: 100%; height: 100%; border: 1px solid lightgrey; border-radius: 40px; overflow: hidden;">
                        <img src="http://clothezon.com/allaboutme-farros.com/img/logo-shillouette.jpg" alt="" style="width: 100%;">
                        </div>
                    </div>
                    <div class="col-md-4 author_profile">
                        <br>
                        <h3><b>Farros Shier</b></h3>
                    </div>
                </div>
            </div>
        <hr>
        <div class="row">
            <div class="col-md-12" style="overflow: hidden;">
                <p style="padding: 15px; ">
                    <i>I'm a Back End Engineer on one of the largest Online Media in Indonesia. Love both Back End and Front End...</i>
                </p>
            </div>
            <div class="col-md-12" style="text-align: center; padding: 10px;">
                <hr>
                <h5><b>FOLLOW ME</b></h5>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        
                        <div class="row">
                            <div class="col-md-3 follow_me">
                                <a href="https://www.facebook.com/farros.shier" target="_blank"><div style="padding: 8px; width: 40px; border: 1px solid lightgrey; border-radius: 30px;"><i class="fa fa-facebook"></i></div></a>
                            </div>
                            <div class="col-md-3 follow_me">
                                <a href="https://www.instagram.com/farros.shier/" target="_blank"><div style="padding: 8px; width: 40px; border: 1px solid lightgrey; border-radius: 30px;"><i class="fa fa-instagram"></i></div></a>
                            </div>
                            <div class="col-md-3 follow_me">
                                <a href="https://twitter.com/farrosshier" target="_blank"><div style="padding: 8px; width: 40px; border: 1px solid lightgrey; border-radius: 30px;"><i class="fa fa-twitter"></i></div></a>
                            </div>
                            <div class="col-md-3 follow_me">
                                <a href="https://id.pinterest.com/farrosjackson/" target="_blank"><div style="padding: 8px; width: 40px; border: 1px solid lightgrey; border-radius: 30px;"><i class="fa fa-pinterest"></i></div></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>