<div class="col-md-12">
    <div style="padding: 1px 4px; background-color: darkgray; width: 110px; border-radius: 10px 10px 0px 0px;">
        <h5><b>Artikel Terkait</b></h5>
    </div>
    <div style="border: 2px solid darkgray;">
    </div>
</div>
<br>
@foreach($data as $key => $item)
<?php
    $url_detail = route('/', $url_category.'/'.$item->alias);
?>
<a href="<?php echo str_replace('?', '/', $url_detail); ?>">
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
</a><br>
@endforeach