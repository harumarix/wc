<?php

use app\models\Event;
use yii\helpers\Url;

/** @var Event $model */
$this->title = 'Мероприятия'
?>
<div class="events-event-page">
    <section class="events-event">
        <div class="content">
            <div class="breadcrumbs">
                <a href="/">Главная</a>
                /
                <a href="/evetns/index">Мероприятия</a>
            </div>
            <div class="events-event-wrapper">
                <div class="date">
                    <div class="events-text-grey">Дата</div>
                    <div class="events-text-black"><?=date('d.m.Y',$model->date)?></div>
                    <div class="events-text-grey">Место проведения</div>
                    <div class="events-text-black" style="max-width: 224px;"><?=$model->place?></div>
                    <div class="events-text-grey" style="max-width: 224px;"><?=$model->additional_info?></div>
                    <a href="#contact-us" class="popup-with-zoom-anim"><div class="btn-red">Связаться с нами</div></a>

                    <a href="/events/index" class="btn-arrow-wrap">
                        <span>Ко всем мероприятиям</span>
                        <svg class="btn-arrow-black">
                            <use xlink:href="/static/symbol/sprite.svg#btn">
                        </svg>
                    </a>
                </div>

                <div class="events-event-main">
                    <h2 class="page-header"> <?=Yii::$app->formatter->asDate(date('Y-m-d',$model->date),'long');?> </h2>
                    <h2 class="page-header"> <?=$model->name?></h2>
                    <picture>
                        <source type="image/webp" srcset="<?=$model->webp('image')?>">
                        <img src="<?=$model->image?>" alt="Изображение события №<?=$model->id?>">
                    </picture>
                    <div class="events-event-text">
                        <?=$model->description?>
                    </div>
                </div>

                <div class="events-sidebar">
                    <?php foreach($model->getOtherModels(3) as $other):?>
                        <div class="events-sidebar-block">
                            <div class="events-sidebar-header"><?=$other->name?></div>
                            <a href="<?=Url::to(['/events/view','id'=>$other->id])?>" class="btn-arrow-wrap">
                                <span>Подробнее</span>
                                <svg class="btn-arrow-block">
                                    <use xlink:href="/static/symbol/sprite.svg#btn">
                                </svg>
                            </a>
                        </div>
                    <?php endforeach?>
                </div>
            </div>
        </div>
    </section>
</div>