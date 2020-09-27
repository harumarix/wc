<?php
?>

<div class="offers__card">
    <picture>
        <source type="image/webp" srcset="<?=$promo->webp('image')?>">
        <img src="<?=$promo->image?>" alt="Изображение акции №<?=$promo->id?>">
    </picture>
    <img class="angle" src="/static/images/angle.png" alt="">
    <div class="offers__card-wrapper">
        <div class="offers__card-text-container">
            <h2><?=$promo->name?></h2>
            <div class="offers__card-desc">
                <?=$promo->description?>
            </div>
        </div>
        <!-- <a href="#" class="offers__card-footer btn-arrow-wrap">
            <span>Подробнее</span>
            <svg class="btn-arrow">
                <use xlink:href="/static/symbol/sprite.svg#btn">
            </svg>
        </a> -->
    </div>
</div>