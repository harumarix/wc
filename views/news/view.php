<?php
$this->title = 'Новости'
?>
<div class="news-page">
    <section class="news-p-article">
        <div class="content">
            <div class="breadcrumbs">
                <a href="/">Главная</a>
                /
                <a href="/news/index">Новости</a>
            </div>

            <div class="news-p-article-top">
                <h2><?= mb_strtoupper($model->title) ?></h2>
                <a href="#" class="btn-arrow-wrap">
                    <span>Ко всем новостям</span>
                    <svg class="btn-arrow-black">
                        <use xlink:href="/static/symbol/sprite.svg#btn">
                    </svg>
                </a>

            </div>
            <div class="news-p-article-wrapper">
                <div class="news-p-article-main">
                    <div class="date"><?= date('d.m.Y', $model->date) ?></div>
                    <h2 class="news-p-article-header"><?= $model->title ?></h2>
                    <picture>
                        <source type="image/webp" srcset="<?= $model->webp('image') ?>">
                        <img src="<?= $model->image ?>" alt="Изображение новости №<?= $model->id ?>">
                    </picture>

                    <div class="news-p-article-text">
                        <?= $model->text ?>
                    </div>
                </div>

                <div class="news-p-article-sidebar">
                    <?php foreach ($model->getOtherModels(3) as $key => $other) : ?>
                        <div class="news-p-article-sidebar-block">
                            <div class="news-p-article-sidebar-date"><?= date('d.m.Y', $other->date) ?></div>
                            <div class="news-p-article-sidebar-header"><?= $other->title ?></div>
                            <div class="news-p-article-sidebar-text"><?= mb_strlen($other->text) > 67 ? mb_substr($other->text, 0, 64) . '...' : $other->text ?></div>
                            <a href="#" class="btn-arrow-wrap">
                                <span>Подробнее</span>
                                <svg class="btn-arrow-block">
                                    <use xlink:href="/static/symbol/sprite.svg#btn">
                                </svg>
                            </a>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
    </section>
</div>