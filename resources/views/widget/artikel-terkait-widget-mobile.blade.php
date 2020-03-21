<div class="col-md-12">
    <div style="padding: 1px 4px; background-color: darkgray; width: 110px; border-radius: 10px 10px 0px 0px;">
        <h5><b>Artikel Terkait</b></h5>
    </div>
    <div style="border: 2px solid darkgray;">
    </div>
</div>
<br>
@foreach($data as $key => $item)
<a href="{{ route('detail', $item->alias) }}">
    <div class="col-md-12">
        <div class="row" style="vertical-align: text-top;">
            <div class="col-md-4" style="display: inline-block; width: 35vw; vertical-align: text-top;">
            <?php
                if($item->image_name != ''){
            ?>
                <img src="{{ asset('image/content').'/'.$item->image_name }}" alt="" style="width: 100%; border-radius: 8px;">
            <?php
                }else{
            ?>
                <img src="https://images.pexels.com/photos/301703/pexels-photo-301703.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" style="width: 100%; border-radius: 8px;">
            <?php
                }
            ?>
            
            </div>
            <div class="col-md-8" style="display: inline-block; width: 55vw; vertical-align: text-top;">
            <b><h5 style="font-size: 110%;">{{ $item->title }}</h5></b>
            </div>
        </div>
    </div>
</a><br>
@endforeach