<?php

use app\assets\CardAsset;

CardAsset::register($this);
$this->title = 'Карты'
?>

<div class="cards-card-page">
    <section class="cards-card">
        <div class="content">
            <div class="breadcrumbs">
                <a href="/">Главная</a>
                /
                <a href="/card/index">Карты</a>
            </div>
            <div class="cards-card-top-container">
                <h2 class="page-header">КАРТЫ</h2>
                <a href="/card/index" class="btn-arrow-wrap"> 
                    <span>К другим картам</span>
                    <svg class="btn-arrow-black">
                        <use xlink:href="/static/symbol/sprite.svg#btn">
                    </svg>
                </a>
            </div>

            <div class="cards-card-main-container">
                <div class="cards-card-img-block">
                    <picture>
                        <source type="image/webp" srcset="<?=$model->webp('image')?>">
                        <img src="<?=$model->image?>" alt="Изображение">
                    </picture>
                    <div class="cards-card-img-block-container">
                        <div class="container-item">
                            <svg>
                                <use xlink:href="/static/symbol/sprite.svg#time" />
                            </svg>
                            <span><?=$model->visit_time?></span>
                        </div>

                        <div class="container-item">
                            <svg>
                                <use xlink:href="/static/symbol/sprite.svg#fire" />
                            </svg>
                            <span><?=$model->number_of_times?></span>
                        </div>
                        <?php if($model->freezing)?>
                        <div class="container-item">
                            <svg>
                                <use xlink:href="/static/symbol/sprite.svg#stop" />
                            </svg>
                            <span>Возможность <br> заморозки карты</span>
                        </div>
                    </div>
                </div>
                <div class="cards-card-text-block">
                    <div class="text-header"><?=$model->name?></div>
                    <div class="text-text">
                        <?=$model->description?>
                    </div>                    
                    <a href="#card-request" id="request-card-from-view" data-card="<?=$model->name?>" class="popup-with-zoom-anim"><div class="btn btn-red">Оформить</div></a>
                </div>
            </div>
        </div>
    </section>
</div>