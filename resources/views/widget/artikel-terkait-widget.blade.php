<br><br><br>
<h3 style="color: white;">Artikel <b><i>TERKAIT</i></b></h3>

<hr>
<div class="row">
    @foreach($data as $key => $item)
    <?php
        if($key >= 6){
            break;
        }
        $url_detail = route('/', $url_category.'/'.$item->alias);
    ?>
    <a href="<?php echo str_replace('?', '/', $url_detail); ?>">
        <div class="col-md-4" style="vertical-align: text-top;">
            <div class="row">
                <div class="col-md-12" style="vertical-align: text-top;">
                    <div style="border-radius: 5px; height: 200px; background-image: url('<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>'); background-position: center; background-size: cover;">
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
</div>