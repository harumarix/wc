<?php

use yii\helpers\Url;

?>
<div class="news__card-main-wrapper">
    <picture>
        <source type="image/webp" srcset="<?=$newsModel->webp('thumb')?>">
        <img src="<?=$newsModel->thumb?>" alt="Изображение новости №<?=$newsModel->id?>">
    </picture>
    <div class="news__card-container">
        <?php if(isset($showCategory) && $showCategory):?>
            <div class="news-p__hash">#<?=$newsModel->newsCategory->name?></div>
        <?php endif?>
        <div class="news__date"><?=date('d.m.Y',$newsModel->date)?></div>
        <div class="news__header"><?=$newsModel->title?></div>
        <div class="news__desc"><?=mb_strlen(strip_tags($newsModel->text))>62?mb_substr(strip_tags($newsModel->text),0,59).'...':strip_tags($newsModel->text)?></div>
    </div>
</div>

<a href="<?=Url::to(['/news/view','id'=>$newsModel->id])?>" class="news__footer btn-arrow-wrap">
    <span>Подробнее</span>
    <svg class="btn-arrow-black">
        <use xlink:href="/static/symbol/sprite.svg#btn">
    </svg>
</a>