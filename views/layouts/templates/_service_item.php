<?php

use app\models\Service;

/** @var Service $service */
?>

<div class="services-p__card">
    <div class="services-p__card-wrapper">
        <div class="img-wrapper">
            <picture>
                <source type="image/webp" srcset="<?= $service->webp('image_small') ?>">
                <img src="<?= $service->image_small ?>" alt="Изображение">
            </picture>
            <div class="img-top-text">#<?= $service->serviceType->name ?></div>
            <div class="img-bottom-text">
                <div class="img-bottom-text-svg">
                    <svg class="time-svg">
                        <use xlink:href="/static/symbol/sprite.svg#time">
                    </svg>
                    <span><?= $service->time ?></span>
                </div>
                <div class="img-bottom-text-svg">
                    <img src="/static/icons/level.png" alt="">
                    <span><?= $service->serviceBurden->name ?></span>
                </div>
            </div>
        </div>
        <div class="services-p__card-container">
            <div class="services-p__header"><?= $service->name ?></div>
            <div class="services-p__desc"><?=mb_strlen(strip_tags($service->description))>159?mb_substr(strip_tags($service->description),0,159).'...':strip_tags($service->description)?></div>
        </div>
    </div>
    <div class="services-p__card-hovered">
        <picture>
            <source type="image/webp" srcset="<?= $service->webp('image') ?>">
            <img src="<?= $service->image ?>" alt="Изображение">
        </picture>
        <div class="services-p__card-hovered-wrapper">
            <div class="services-p__header"><?= $service->name ?></div>
            <div class="services-p__desc"><?= $service->description ?></div>
        </div>
    </div>
</div>