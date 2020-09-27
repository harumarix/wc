<?php

use app\assets\AjaxLoadAsset;

AjaxLoadAsset::register($this);
$this->title = 'Мероприятия'
?>
<div class="events-page">
    <section class="events">
        <div class="content">

            <div class="breadcrumbs">
                <a href="/">Главная</a>
                /
                <a href="">Мероприятия</a>
            </div>

            <h2 class="page-header">МЕРОПРИЯТИЯ</h2>
            <div class="events-top-buttons">
                <a class="events-top-buttons-text <?=Yii::$app->request->getQueryParam('upcoming',0)==0 && Yii::$app->request->getQueryParam('archive',0)!=1?'events-top-buttons-active':''?>" href="/events/index">Все</a>
                <a class="events-top-buttons-text <?=Yii::$app->request->getQueryParam('upcoming',0)==1?'events-top-buttons-active':''?>" href="/events/index?upcoming=1">Ближайшие</a>
                <a class="events-top-buttons-text <?=Yii::$app->request->getQueryParam('archive',0)==1?'events-top-buttons-active':''?>" href="/events/index?archive=1">Архив</a>
            </div>

            <div class="events-container" id="ajax-container">
                <?=$this->render('/layouts/templates/_event_items',compact('events'))?>                
            </div>
            <?php if($totalCount>3):?>
                <button class="btn btn-red" id='events-show-more' data-page="2" data-per-page="3">Показать больше</button>
            <?php endif?>
        </div>
    </section>
</div>