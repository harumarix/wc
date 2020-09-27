<?php

use yii\helpers\Url;
?>
<div class="events-section-block-item events-block-item-first">
    <div class="events-section-block-header-red"><?=Yii::$app->formatter->asDate(date('Y-m-d',$event->date),'long');?></div>
    <div class="events-section-block-header"><?php 
        $date = Yii::$app->formatter->asDate(date('Y-m-d',$event->date),'php:l');
        echo mb_strtoupper(mb_substr($date,0,1)).mb_substr($date,1)
        ?></div>
    <div class="events-section-block-header"><?=date('H:i',$event->date)?></div>
</div>
<div class="events-section-block-item">
    <picture>
        <source type="image/webp" srcset="<?=$event->webp('thumb')?>">
        <img src="<?=$event->thumb?>" alt="Изображение события №<?=$event->id?>">
    </picture>
</div>
<div class="events-section-block-item events-block-item-third">
    <div class="events-section-block-header"><?=$event->name?></div>
    <a href="<?=Url::to(['/events/view','id'=>$event->id])?>" class="btn-arrow-wrap">
        <span>Подробнее</span>
        <svg class="btn-arrow-black">
            <use xlink:href="/static/symbol/sprite.svg#btn">
        </svg>
    </a>
</div>
<div class="events-section-block-item">
    <div class="events-section-block-text"><?=$event->additional_info?></div>
    <div class="events-section-block-footer"><?=$event->place?></div>
</div>