<script>
    var t1 = 0;
    window.onscroll = scroll1;

    function scroll1() {
    var toTop = document.getElementById('toTop');
    window.scrollY > 60 ? toTop.style.display = 'Block' : toTop.style.display = 'none';
    }

    function abcd() {
    var y1 = window.scrollY;
    y1 = y1 - 1000;
    //window.scrollTo(0, y1);
    window.scrollTo({top: 0, behavior: 'smooth'});
    if (y1 > 60) {
        t1 = setTimeout("abcd()", 200);
    } else {
        clearTimeout(t1);
    }
    }
</script>

<?php
    use Jenssegers\Agent\Agent;
    $agent = new Agent();
    if(!$agent->isPhone()){
?>
<style>
    #toTop {
        display: block;
        position: fixed;
        bottom: 20px;
        right: 55px;
        font-size: 48px;
        border-radius: 32px;
        background-color: black;
        padding: 0 18px;
    }
</style>
<?php
    }else{   
?>
<style>
    #toTop {
        display: block;
        position: fixed;
        bottom: 20px;
        right: 20px;
        font-size: 48px;
        border-radius: 32px;
        background-color: black;
        padding: 0 18px;
    }
</style>
<?php
    }
?>

<style>

    #toTop {
        /* transition: all 0.5s ease 0.5s;
        -moz-transition: all 0.5s ease 0.5s;
        -webkit-transition: all 0.5s ease 0.5s;
        -o-transition: all 0.5s ease 0.5s; */
        opacity: 0.8;
        display: none;
        cursor: pointer;
        transition: 0.3s;
    }

    #toTop:hover {
        opacity: 1;
    }
</style>
<div id="toTop" onclick="abcd()" ><i class="fa fa-angle-up"></i></div>
<!-- <img id="toTop" src="http://via.placeholder.com/50x50" onclick="abcd()" title="Go To Top"> -->