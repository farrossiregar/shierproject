<div style="width: 100vw; overflow: hidden;">
    
    <?php
        use Jenssegers\Agent\Agent;
        $agent = new Agent();
        if(!$agent->isPhone()){
    ?>

    <div class="row" style="background-color: black; overflow: hidden; width:100vw;">
        <div class="container" style="overflow: hidden; width:100vw;">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <a href="{{ route('/') }}">
                        <img src="{{ asset('image/shierproject-logo-black.jpg') }}" alt="" style="width: 320px; height: auto;">
                    </a>
                </div>
                <div class="col-md-6" style="padding-top: 30px;">
                    <form class="form-inline">
                        <div class="form-group col-md-6 input-group-lg">
                            <input type="text" class="form-control" id="" placeholder="Search...">
                        </div>
                        <div type="submit" class="btn btn-primary" style="padding: 9px 12px;"><i class="fa fa-search" style="font-size: 25px;"></i></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
        }
    ?>

    <div style="width: 100vw; overflow: hidden;">
        <nav class="navbar navbar-inverse" style="margin-bottom: 0px; margin-top: 0px; width: 100vw; overflow: hidden;">
            <div class="container-fluid" style="width: 100vw; overflow: hidden;">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <!-- <a class="navbar-brand" href="{{ route('/') }}">
                        <img src="{{ asset('image/shierproject-logo-black.jpg') }}" alt="" style="width: 120px; height: auto; top: -5px;">
                    </a> -->
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <div class="container">
                        <?php
                            if($agent->isPhone()){
                        ?>
                        
                        <div class="row">
                            <div class="col-md-4" style="display: inline-block;">
                                <a href="{{ route('/') }}" style=" padding: 2px;">
                                    <img src="{{ asset('image/shierproject-logo-black.jpg') }}" alt="" style="width: 120px; height: auto;">
                                </a>
                            </div>
                            <div class="col-md-6" style="display: inline-block;">
                                <div class="row">
                                    <div class="col-md-10" style="display: inline-block;">
                                        <input type="text" class="form-control" id="" placeholder="Search...">
                                    </div>
                                    <div class="col-md-2" style="display: inline-block;">
                                        <div class="btn btn-primary"><i class="fa fa-search"></i></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <?php
                            }
                        ?>
                        <ul class="nav navbar-nav" id="list-menu">
                            <li class="active"><a href="{{ route('/') }}">Home</a></li>
                            <!-- <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Page 1-1</a></li>
                                    <li><a href="#">Page 1-2</a></li>
                                    <li><a href="#">Page 1-3</a></li>
                                </ul>
                            </li> -->
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <!-- <li><a href="#"><i class="fa fa-instagram" style="font-size: 20px;"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook" style="font-size: 20px;"></i></a></li> -->
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Daftar / Masuk<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                                    <li><a href="#"><i class="glyphicon glyphicon-user"></i> Kontak Kami</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

    </div>
    
</div>




<script>
    $(document).ready(function(){
        $.ajax({
            type: 'get',
            url: '{{ route('get-menu') }}',
            dataType: 'json',
            success: function(result){
                for(var i = 0; i <= result.length; i++){
                    $("#list-menu").append("<li><a href='{{ route('category') }}'>"+ result[i]['title'] +"</a></li>");
                }
            }
        });
    });
    
</script>