<?php

use yii\helpers\Url;

?>
<picture>
    <source type="image/webp" srcset="<?= $newsModel->webp('image') ?>">
    <img src="<?= $newsModel->image?>" alt="Изображение новости №<?= $newsModel->id ?>">
</picture>
<div class="news-p__card-container">
    <div class="news-p__hash">#<?= $newsModel->newsCategory->name ?></div>
    <div class="news-p__date"><?= date('d.m.Y', $newsModel->date) ?></div>
    <div class="news-p__header"><?= $newsModel->title ?></div>
    <div class="news-p__desc"><?= mb_strlen(strip_tags($newsModel->text)) > 62 ? mb_substr(strip_tags($newsModel->text), 0, 59) . '...' : strip_tags(strip_tags($newsModel->text))  ?></div>
    <a href="<?= Url::to(['/news/view', 'id' => $newsModel->id]) ?>" class="news-p__footer btn-arrow-wrap">
        <span>Подробнее</span>
        <svg class="btn-arrow">
            <use xlink:href="/static/symbol/sprite.svg#btn">
        </svg>
    </a>
</div>


