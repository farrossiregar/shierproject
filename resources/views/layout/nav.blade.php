<nav class="navbar navbar-inverse" style="margin-bottom: 0px;">
    <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#">ShierProject</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav" id="list-menu">
            <li class="active"><a href="#">Home</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Page 1-1</a></li>
                    <li><a href="#">Page 1-2</a></li>
                    <li><a href="#">Page 1-3</a></li>
                </ul>
            </li>
            
            <!-- <li><a href="#">Anti Gaptek</a></li>
            <li><a href="#">Butuh Hiburan ?</a></li>
            <li><a href="#">Jalan-jalan yuk !</a></li>
            <li><a href="#">Belanja di mana</a></li> -->
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i class="fa fa-instagram" style="font-size: 20px;"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook" style="font-size: 20px;"></i></a></li>
            <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
        </ul>
        </div>
    </div>
</nav>


<script>
    $(document).ready(function(){
        $.ajax({
            type: 'get',
            url: '{{ route('get-menu') }}',
            dataType: 'json',
            success: function(result){
                for(var i = 0; i <= result.length; i++){
                    // var li = "<li><a href=''>"+ $item[0]['title'] +"</a></li>";
                    $("#list-menu").append("<li><a href=''>"+ result[i]['title'] +"</a></li>");
                    //console.log(result[i]['title']);
                }
            }
        });
    });
    
</script>