<br><br><br>
<h3>Artikel Terkait</h3>
<hr>
<div class="row">
    @foreach($artikelterkait as $key =>$item)
    
    <a href="{{ route('detail', $item->alias) }}">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <img src="https://images.pexels.com/photos/301703/pexels-photo-301703.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" style="width: 90%; border-radius: 8px;">
                </div>
                <div class="col-md-9">
                    <b><h3>{{ $key + 1}}. {{ $item->title }}</h3></b>
                </div>
            </div>
            <br><br>
        </div>
    </a>
    <br><br>
    @endforeach
</div>