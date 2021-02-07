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
                        <img src="{{ asset('image/shierproject-logo-black-rect.png') }}" alt="" style="width: 320px; height: auto;">
                    </a>
                </div>
                <div class="col-md-6" style="padding-top: 30px;">
                    <!-- <form class="form-inline">
                        <div class="form-group col-md-6 input-group-lg">
                            <input type="text" class="form-control" id="" placeholder="Search...">
                        </div>
                        <div type="submit" class="btn btn-primary" style="padding: 9px 12px;"><i class="fa fa-search" style="font-size: 25px;"></i></div>
                    </form> -->
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
                <div class="navbar-header" style="overflow: hidden;">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <?php
                        if($agent->isPhone()){
                    ?>
                    <a class="navbar-brand" href="{{ route('/') }}">
                        <img src="{{ asset('image/shierproject-logo-darkgrey-rect.png') }}" alt="" style="width: 120px; height: auto; top: -5px;">
                    </a>
                    <?php
                        }
                    ?>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <div class="container">
                        <?php
                            if($agent->isPhone()){
                        ?>
                        <br>
                        <div class="row">
                            <!-- <div class="col-md-10" style="display: inline-block;">
                                <input type="text" class="form-control" id="" placeholder="Search...">
                            </div>
                            <div class="col-md-2" style="display: inline-block;">
                                <div class="btn btn-primary"><i class="fa fa-search"></i></div>
                            </div> -->
                        </div>
                        <?php
                            }
                        ?>
                        <ul class="nav navbar-nav" id="list-menu">
                            <li class="active"><a href="{{ route('/') }}">Home</a></li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{ route('contact-us') }}"><i class="glyphicon glyphicon-user"></i> Kontak Kami</a></li>
                            <!-- <li><a href="#"><i class="fa fa-instagram" style="font-size: 20px;"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook" style="font-size: 20px;"></i></a></li> -->
                            <!-- <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Daftar / Masuk<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                                    <li><a href="#"><i class="glyphicon glyphicon-user"></i> Kontak Kami</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    
    <?php
        if(!$agent->isPhone()){
    ?>
    <div id="container_nav" style="background-color: black; width: 100vw; height: 50vh; position: absolute; z-index: 1; display: none; overflow: hidden;">
        <div class="container" id="dropdown_hover" style="overflow: hidden;">
            
        </div>
    </div>
    <?php
        }
    ?>
</div>

<style>

</style>




<script>
    $(document).ready(function(){
        $.ajax({
            type: 'get',
            url: '{{ route('get-menu') }}',
            dataType: 'json',
            success: function(result){
                //console.log(result);
                for(var i = 0; i <= result.length; i++){
                    
                    var url = '{{ route("/{category}", ":category") }}';
                    url = url.replace(':category', result[i]['url_title']);
                    url = url.replace('?', '/');

                    var nav_container_hover =   '<div onmouseenter="hover_menu2('+ result[i]['id'] +', \''+ result[i]['url_title'] +'\')" onmouseleave="unhover_menu2('+ result[i]['id'] +')" class="row" id="menu'+ result[i]['id'] +'" style="display: none; padding: 40px 0;">'+
                                                    '<div class="col-md-4" >'+
                                                        '<div style="width: 100%; overflow: hidden; border-radius: 20px; display: inline-block;">'+
                                                            '<img src="http://shierproject.com/image/category/'+ result[i]['image'] +'" alt=""  style="width: 90%;">'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<div class="col-md-8" style="display: inline-block;"><h3>'+
                                                        '<div class="row art_cat_div" id="article_category_div'+ result[i]['id'] +'"></div>'
                                                    '</h3></div>'+
                                                '</div>';
                    var user_agent = "<?php echo $agent->isPhone(); ?>";
                    var image_category = 'http://shierproject.com/image/category/'+result[i]['image'];
                    if(!user_agent){
                        //$('#list-menu').append('<li onmouseenter="hover_menu('+ result[i]['id'] +', \''+ result[i]['url_title'] +'\')" onmouseleave="unhover_menu('+ result[i]['id'] +', '+ result[i]['title'] +')" class="nav_hover"><a href="'+url+'">'+ result[i]['title'] +' </a></li>');
                        $('#list-menu').append('<li class="nav_hover"><a href="'+url+'">'+ result[i]['title'] +' </a></li>');
                    }else{
                        $('#list-menu').append('<li id="menu_mobile'+result[i]['id']+'" style="text-align: left; color: white; background-image: url(""); background-position: center;"><a href="'+url+'"><b style="color: '+ result[i]['bgcolor_category'] +';">'+ result[i]['title'] +' </b></a></li>');
                        $('#menu_mobile'+result[i]['id']).css("background-image", "url('"+image_category+"')"); 
                    }
                    
                    $('#dropdown_hover').append(nav_container_hover);

                }
            }
        });
    });

    function articleMenu(id, title){
        console.log(id);
        $.ajax({
            type: 'get',
            url: 'http://api.shierproject.com/data-category/base64:rx5lQkMlm1ZEKJRBp31M9rcLb5GPfhvXgTwyAYePVHs=/' + title,
            dataType: 'json',
            success: function(result_cat){
                var cleandiv = $('.art_cat_div').not('#article_category_div' + id);
                cleandiv.html("");
                cleandiv.empty();

                var url = '{{ route("/{category}", ":category") }}';
                url = url.replace(':category', title);
                url = url.replace('?', '/');

                result_cat.forEach(function(item){
                    console.log(item['title']);
                    var article_category = '<div class="col-md-6" style=""><h4><b><a href="'+ url + '/' + item['alias'] +'" style="color: white;"> '+ item['title'] + '</a></b></h4></div>';
                    $('#article_category_div' + id).append(article_category);
                    
                });   
            }
        });
    }

    function hover_menu(id, title){
        // $('#container_nav').show();
        // $('#menu' + id).show();

        // articleMenu(id, title);
    }

    function unhover_menu(id){
        // $('#container_nav').hide();
        // $('#menu' + id).hide();

        // $('#article_category_div' + id).empty();
        // $('#article_category_div' + id).html("");
    }

    function hover_menu2(id, title){
        // $('#container_nav').show();
        // $('#menu' + id).show();

        //articleMenu(id, title);
    }

    function unhover_menu2(id){
        // $('#container_nav').hide();
        // $('#menu' + id).hide();

        // $('#article_category_div' + id).empty();
        // $('#article_category_div' + id).html("");
    }


    
</script>