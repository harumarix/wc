<?php

use app\models\Card;
use yii\helpers\Url;

/** @var Card $card */

$blocks = [];
$totalBlock = [];
foreach ($cards as $key => $card) {
    if(($key+1)%3 != 0){
        $blocks[] = $card;
    }else{
        $blocks[] = $card;
        $totalBlock[] = $blocks;
        $blocks = [];
    }
}
if(count($cards)%3!=0){
    $totalBlock[] = $blocks;
    $blocks = [];
}

$this->title = 'Карты'
?>

<div class="cards-page">
    <section class="cards">
        <div class="content">

            <div class="breadcrumbs">
                <a href="/">Главная</a>
                /
                <a href="/card/index">Карты</a>
            </div>

            <h2 class="page-header">КАРТЫ</h2>
            <?php foreach($totalBlock as $block):?>
                <div class="cards__cards">
                    <?php foreach($block as $card):?>
                        <a href="<?=Url::to(['/card/view','id'=>$card->id])?>" class="cards__card">
                            <picture>
                                <source type="image/webp" srcset="<?=$card->webp('image_outer')?>">
                                <img src="<?=$card->image_outer?>" alt="Изображение">
                            </picture>
                            <img class="img-angle" src="/static/images/angle.png" alt="">
                            <div class="cards__card-container">
                                <div class="cards__card-header"><?=$card->name?></div>

                                <div class="cards__card-footer">
                                    <div class="svg-wrapper">
                                        <svg>
                                            <use xlink:href="/static/symbol/sprite.svg#time" />
                                        </svg>
                                    </div>
                                    <span><?=$card->visit_time?></span>
                                </div>

                                <div class="cards__card-footer">
                                    <div class="svg-wrapper">
                                        <svg class="fire">
                                            <use xlink:href="/static/symbol/sprite.svg#fire" />
                                        </svg>
                                    </div>
                                    <span><?=$card->number_of_times?></span>
                                </div>
                            </div>
                        </a>
                    <?php endforeach?>
                </div>
            <?php endforeach?>
        </div>
    </section>
</div>