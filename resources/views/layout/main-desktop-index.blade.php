
<style>
  .main-container-headline{
    width: 100vw;
    padding: 80px 0;
    background-color: #242424;
  }

  .mySlides{
    height: 100%;
    overflow: hidden;
  }
</style>


<div class="col-md-6">
    <div style="width: 100%;">
    @foreach($data as $key => $item)
    <?php
        if($key >= 4){
            break;
        }

        $url_detail = route('/', $item->url_category.'/'.$item->alias);
    ?>
    <a href="<?php echo str_replace('?', '/', $url_detail); ?>">
        <div class="mySlides">
        <div class="numbertext" style="color: white; background-color: rgba(0,0,0,0.5); height: 100%; width: 50%; padding-left: 3vw;">
            <div class="row">
            <div class="col-md-4" style="display: inline-block;">
                <div style="background-color: black; border-radius: 5px; text-align: center; min-width">
                <h4 style="padding: 4px 4px; "><b><?php echo $item->title_category; ?></b></h4>
                </div>
            </div>
            <div class="col-md-4" style="display: inline-block;"></div>
            <div class="col-md-4" style="display: inline-block;"></div>
            </div>
            <h1><b><?php echo $item->title; ?></b></h1>
            <br><br><br><br><br><br><br><br>
            <?php
            $intro = html_entity_decode($item->description);
            ?>
            <h4><?php echo substr($intro, 0, 150).'...'; ?></h4>
            <h4>Cek Selengkapnya...</h4>
        </div>
        <img src="<?php echo "http://cms.shierproject.com/image/content/".$item->image_name; ?>" style="width:100%">
        </div>
    </a>
    
    @endforeach
        
    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>
    
    <div class="caption-container">
        <p id="caption"></p>
    </div>
        
    </div>
</div>

<div class="col-md-6">
    <div class="row">
        <div class="col-md-6"></div>
    </div>
</div>