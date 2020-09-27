<?php

use app\assets\AjaxLoadAsset;
use app\assets\NewsAsset;
use yii\helpers\Url;
AjaxLoadAsset::register($this);
$this->title = 'Новости'
?>
<div class="news-page">
    <section class="news-p">
        <div class="content">
        <div class="breadcrumbs">
            <a href="/">Главная</a>
            /
            <a href="/news/index">Новости</a>
        </div>
            <h2 class="page-header">НОВОСТИ</h2>
            <div class="news-top-buttons">
                <a href="/news/index" class="news-top-buttons-text <?=Yii::$app->request->getQueryParam('news_category_id',0)==0?'news-top-buttons-active':''?>">Все</a>
                <?php foreach ($newsCategpries as $key => $category):?>
                    <a href="<?=Url::to(['/news/index','news_category_id'=>$category->id])?>" class="news-top-buttons-text <?=Yii::$app->request->getQueryParam('news_category_id') == $category->id?'news-top-buttons-active':''?>"><?=$category->name?></a>
                <?php endforeach?>
            </div>
            <div class="news-p-cards" id="ajax-container">
                <?php foreach ($news as $key => $newsModel):
                    $size = ($key == 0 || ($key+1)%7 == 0)?'b':'s';
                    ?>
                    <div class="news-p-card-<?=$size?>">
                        <?=$this->render("/layouts/templates/_news_item-$size", compact('newsModel','size'));?>
                    </div>
                <?php endforeach?>
            </div>
            <?php if($totalCount>7):?>
                <button class="btn btn-red btn-watch" id='news-show-more' data-page="2" data-per-page="7">Показать больше</button>
            <?php endif?>
        </div>
    </section>
</div>