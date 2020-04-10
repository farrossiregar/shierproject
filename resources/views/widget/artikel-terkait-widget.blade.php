<br><br><br>
<div style="padding: 1px 4px; background-color: darkgray; width: 130px; border-radius: 10px 10px 0px 0px;">
    <h4><b>Artikel Terkait</b></h4>
</div>
<div style="border: 2px solid darkgray;">
</div>

<hr>
<div class="row">
    @foreach($data as $key => $item)
    
    <a href="{{ route('detail', $item->alias) }}">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <?php
                        if($item->image_name != ''){
                    ?>
                        <img src="<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>" alt="" style="width: 90%; border-radius: 8px;">
                    <?php
                        }else{
                    ?>
                        <img src="https://images.pexels.com/photos/301703/pexels-photo-301703.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" style="width: 90%; border-radius: 8px;">
                    <?php

                        }
                    ?>
                    
                </div>
                <div class="col-md-9">
                    <b style="text-decoration: none; color: black;"><h4>{{ $item->title }}</h4></b>
                </div>
            </div>
            <br><br>
        </div>
    </a>
    <br><br>
    @endforeach
</div>