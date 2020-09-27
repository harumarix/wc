<?php
?>

<?php foreach ($models as $key => $newsModel):
    $size = ($key == 0 || ($key+1)%7 == 0)?'b':'s';
    ?>
    <div class="news-p-card-<?=$size?>">
        <?=$this->render("/layouts/templates/_news_item-$size", compact('newsModel','size'));?>
    </div>
<?php endforeach?>