<h3 style="color: black;">Artikel <b><i>POPULER</i></b></h3>

<hr>
<div class="row">
    <?php $no = 0; ?>
    @foreach($toparticle as $key => $item)
    <?php $no = $no + 1; ?>
    <?php
        $url_detail = route('/', $item->url_category.'/'.$item->alias);
    ?>

    <a href="<?php echo str_replace('?', '/', $url_detail); ?>">
        <div class="col-md-12">
            <div class="row " style="padding: 20px 0;">
                <div class="col-md-4" style="overflow: hidden;">
                    <!-- <img class="image-list" src="<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>"> -->
                    <div class="image-list" style="height: 100px; background-image: url('<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>'); background-position: center; background-size: cover;">
                        <h1 style="font-weight: 1000; color: white; text-shadow: 2px 2px black; margin-top: 0px;">{{ $no }}</h1>
                    </div>
                </div>
                <div class="col-md-8" style="text-decoration: none; color: black;">
                    <b style="font-size: 16px; text-decoration: none; color: black; margin: 10px 0;">{{ $item->title }}</b><br>
                </div>
            </div>
        </div>
    </a><br>
    @endforeach
</div>