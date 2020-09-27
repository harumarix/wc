<?php

use app\assets\AjaxLoadAsset;
use app\models\Promo;

AjaxLoadAsset::register($this);
/** @var Promo $promo */

$this->title = 'Акции'
?>
<div class="offers-page">
    <div class="content">
        <div class="breadcrumbs">
            <a href="/">Главная</a>
            /
            <a href="/site/promos">Акции</a>
        </div>
        <h2 class="page-header">АКЦИИ</h2>
        <div class="offers-page-container" id="ajax-container">
            <?=$this->render('/layouts/templates/_promo_items',compact('promos'))?>          
        </div>
        <?php if($totalCount>6):?>
            <button class="btn btn-red" id='promos-show-more' data-page="2" data-per-page="6">Показать больше</button>
        <?php endif?>
    </div>
</div>