<div class="col-md-12">
    <h4 style="color: white;">Artikel <b><i>TERKAIT</i></b></h4>
</div>
<br>
@foreach($data as $key => $item)
<?php
    if($key >= 6){
        break;
    }
    $url_detail = route('/', $url_category.'/'.$item->alias);
?>


<a href="<?php echo str_replace('?', '/', $url_detail); ?>">
    <div class="row">
        <div style="height: 180px; background-image: url('<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>'); background-position: center; background-size: cover;"></div>
    </div>
    <div class="col-md-4" style="vertical-align: text-top;">
        <div class="row">
            <b style="text-decoration: none; color: white;"><h4>{{ $item->title }}</h4></b>
        </div>
        <br>
    </div>
</a>
@endforeach