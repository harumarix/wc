<?php

use app\assets\AjaxLoadAsset;
use yii\helpers\Url;
AjaxLoadAsset::register($this);
$this->title = 'Детский клуб'
?>
<div class="kids">
    <div class="content">

        <div class="breadcrumbs">
            <a href="/">Главная</a>
            /
            <a href="/site/kids">Детский клуб</a>
        </div>

        <h2 class="page-header">ДЕТСКИЙ КЛУБ</h2>

        <div class="kids__select-wrap">
            <a href="/site/kids">
                <div class="kids__select-item <?=Yii::$app->request->getQueryParam('kids_club_category_id',0)==0?'kids__select-item-active':''?>">
                    Все
                </div>
            </a>
            <?php foreach ($kidsCategories as $key => $category):?>
                <a href="<?=Url::to(['/site/kids','kids_club_category_id'=>$category->id])?>">
                    <div class="kids__select-item <?=Yii::$app->request->getQueryParam('kids_club_category_id',0)==$category->id?'kids__select-item-active':''?>">
                        <?=$category->name?>
                    </div>
                </a>
            <?php endforeach?>
        </div>

        <div class="kids__cards-wrap" id="ajax-container">
            <?=$this->render('/layouts/templates/_kids_items',compact('kidsClubs'))?>
        </div>
        <?php if($totalCount>4):?>
            <div class="btn-red" id='kids-show-more' data-page="2" data-per-page="4">Показать больше</div>
        <?php endif?>
        <div class="kids__sns-wrap">
            <div class="kids__sns-item kids__sns-head">
                КЛУБ В СОЦИАЛЬНЫХ СЕТЯХ
            </div>

            <div class="kids__sns-item kids__sns-tag">
                <svg>
                    <use xlink:href="/static/symbol/sprite.svg#insta"></use>
                </svg>
                #worldclasskids
            </div>

            <a href="/" class="btn-arrow-wrap">
                <span>Подробнее</span>
                <svg class="logo">
                    <use xlink:href="/static/symbol/sprite.svg#btn">
                </svg>
            </a>
        </div>
    </div>
</div>