<div class="col-md-12">
    <h4 style="color: white;">Artikel <b><i>TERKAIT</i></b></h4>
</div>
<br>
@foreach($data as $key => $item)
<?php
    $url_detail = route('/', $url_category.'/'.$item->alias);
?>
<!-- <a href="<?php echo str_replace('?', '/', $url_detail); ?>">
    <div class="col-md-12">
        <div class="row" style="vertical-align: text-top;">
            <div class="col-md-4" style="display: inline-block; width: 35vw; vertical-align: text-top;">
                <img src="<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>" alt="" style="width: 100%; border-radius: 8px;">
            </div>
            <div class="col-md-8" style="display: inline-block; width: 55vw; vertical-align: text-top;">
            <b><h5 style="font-size: 90%; text-decoration: none; color: black;">{{ $item->title }}</h5></b>
            </div>
        </div>
    </div>
</a><br> -->

<a href="<?php echo str_replace('?', '/', $url_detail); ?>">
    <div class="col-md-4" style="vertical-align: text-top;">
        <div class="row">
            <div class="col-md-12" style="vertical-align: text-top;">
                <div style="border-radius: 5px; height: 160px; background-image: url('<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>'); background-position: center; background-size: cover;">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <b style="text-decoration: none; color: white;"><h4>{{ $item->title }}</h4></b>
            </div>
        </div>
        <br>
    </div>
</a>
@endforeach