<?php

use app\assets\AjaxLoadAsset;
use yii\helpers\Url;
AjaxLoadAsset::register($this);
$this->title = 'Услуги'
?>
<div class="services-page">
    <section class="services-p">
        <div class="content">

            <div class="breadcrumbs">
                <a href="/">Главная</a>
                /
                <a href="/site/services">Услуги</a>
            </div>

            <h2 class="page-header">УСЛУГИ</h2>

            <div class="services-p__buttons">
                <a href="/site/services" class="services-p__btn <?=Yii::$app->request->getQueryParam('service_type_id',0)==0?'services-p__btn-active':''?>">Все</a>
                <?php foreach ($serviceTypes as $key => $category):?>
                    <a href="<?=Url::to(['/site/services','service_type_id'=>$category->id])?>" class="services-p__btn <?=Yii::$app->request->getQueryParam('service_type_id') == $category->id?'services-p__btn-active':''?>"><?=$category->name?></a>
                <?php endforeach?>
            </div>

            <div class="services-p__cards" id="ajax-container">
                <?=$this->render('/layouts/templates/_service_items',compact('services'))?>
            </div>
            <?php if($totalCount>12):?>
                <button class="btn btn-red btn-watch" id='services-show-more' data-page="2" data-per-page="12">Показать больше</button>
            <?php endif?>
        </div>
    </section>
</div>