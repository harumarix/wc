<?php

use app\assets\TeamAsset;
use app\models\Team;
use yii\helpers\Url;
/** @var Team $member */
TeamAsset::register($this);
$this->title = 'Тренеры'
?>
<div class="instructors">
    <div class="content">
        <div class="breadcrumbs">
            <a href="/">Главная</a>
            /
            <a href="/site/instructors">Тренеры</a>
        </div>
        <?php if(count($team)):?>
            <h2 class="page-header">ТРЕНЕРЫ</h2>
            <div class="instructors__container">
                <?php foreach($team as $member):?>
                    <div class="instructors__item">
                        <picture>
                            <source type="image/webp" srcset="<?=$member->webp('thumb')?>">
                            <img src="<?=$member->thumb?>" alt="фото тренера №<?=$member->id?>">                            
                        </picture>
                        <div class="instructors__name member-name"><?=$member->name?></div>
                        <div class="instructors__prof member-post"><?=$member->post?></div>
                        <div class="member-education" style="display: none"><?=$member->eductaion?></div>
                        <div class="member-achievments" style="display: none"><?=$member->achievments?></div>
                        <div class="member-text" style="display: none"><?=$member->text?></div>
                        <div class="member-specialization" style="display: none"><?=$member->specialization?></div>
                        <div class="member-image" style="display: none"><?=$member->image?></div>
                        <a href="#instructor-pop-up" class="btn-arrow-wrap popup-with-zoom-anim" id="show-team-member">
                            <span>Подробнее</span>
                            <svg class="btn-arrow-black">
                                <use xlink:href="/static/symbol/sprite.svg#btn">
                            </svg>
                        </a>
                    </div>
                <?php endforeach?>
                <?php if($count > 8 && Yii::$app->request->getQueryParam('show_all',0)== 0):?>
                    <div class="instructors__btn-wrapper">
                        <a href="<?=Url::to(['/site/instructors','show_all'=>1])?>"><div class="btn btn-red">Смотреть все</div></a>
                    </div>
                <?php endif?>
            </div>
        <?php endif?>
    </div>
</div>