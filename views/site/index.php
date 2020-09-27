<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
//$this->title = 'World Class - Главная страница';
?>
<div class="main-page">
    <section class="preview-section">
        <?php if(count($banners)):?>
        <div class="swiper-container-bg">
            <div class="swiper-wrapper">
                <?php foreach ($banners as $banner) : ?>
                    <div class="swiper-slide">
                        <div class="preview-slide" style="background: url(<?= $banner->webp('image') ?>) bottom no-repeat;">
                            <div class="content">
                                <h1><?= $banner->text ?></h1>
                                <button class="btn btn-red popup-with-zoom-anim" href="#card-request">Подобрать карту</button>
                                <button class="btn btn-white popup-with-zoom-anim" href="#contact-us">Связаться с нами</button>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div> 
        <?php endif?>
        <div class="navigation-block">
            <div class="content">
                <svg class="btn-prev-bg btn-svg">
                    <use xlink:href="/static/symbol/sprite.svg#btn2">
                </svg>

                <div class="swiper-pagination-wrapper">
                    <div class="swiper-pagination"></div>
                </div>

                <svg class="btn-next-bg btn-svg">
                    <use xlink:href="/static/symbol/sprite.svg#btn2">
                </svg>
            </div>
        </div>
    </section>
    <?php if(count($serviceTypes)):?>
        <section class="services">
            <div class="content">
                <h2>УСЛУГИ</h2>

                <div class="services__cards">
                    <?php foreach ($serviceTypes as $i => $serviceType) : ?>
                        <div class="services__card">
                            <div class="services__card-wrapper">
                                <picture>
                                    <source type="image/webp" srcset="<?= $serviceType->webp('image') ?>">
                                    <img src="<?= $serviceType->image ?>" alt="Изображения категории услуги №<?= $i ?>">
                                </picture>

                                <div class="services__card-text">
                                    <?= $serviceType->name ?>
                                </div>
                                <p class="card-desc"><?= $serviceType->name ?></p>
                                <a class="btn btn-red card-btn" href="<?= Url::to(['/site/services', 'service_type_id' => $serviceType->id]) ?>">Узнать больше</a>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
                <a href="<?= Url::to(['/site/services']) ?>"><button class="btn btn-red btn-watch" >Смотреть все</button></a>

            </div>
        </section>
    <?php endif?>
    <?php if(count($promos)):?>
        <section class="offers">
            <div class="content">
                <div class="offers-top-container">
                    <h2>АКЦИИ</h2>
                    <div class="navigation-block">
                        <svg class="btn-prev-offers btn-svg">
                            <use xlink:href="/static/symbol/sprite.svg#btn2">
                        </svg>

                        <svg class="btn-next-offers btn-svg">
                            <use xlink:href="/static/symbol/sprite.svg#btn2">
                        </svg>
                    </div>
                </div>
                <div class="swiper-container-offers">
                    <div class="swiper-wrapper">
                        <?php foreach ($promos as $promo):?>
                            <div class="swiper-slide">
                                <?=$this->render('/layouts/templates/_promo_item',compact('promo'))?>
                            </div>
                        <?php endforeach?>
                    </div>
                </div>        
            </div>
        </section>
    <?php endif?>
    <?php if(count($news)):?>
        <section class="news">
            <div class="content">
                <h2>НОВОСТИ</h2>
                <div class="news__cards">
                    <?php foreach ($news as $key => $newsModel):?>
                        <div class="news__card">
                            <?=$this->render('/layouts/templates/_news_item',compact('newsModel'))?>
                        </div>
                    <?php endforeach?>
                </div>
                <a class="btn btn-red btn-watch" href="/news/index">Смотреть все</a>
            </div>
        </section>
    <?php endif?>
    <section class="form">
        <div class="content">
            <div class="form-container">
                <div class="form-header">
                    Узнайте стоимость нашей клубной карты
                </div>
                <div class="form-subheader">
                    Заполните форму и мы вам перезвоним
                </div>

                <form action="/send/card-request">
                    <input type="text" placeholder="Ваше имя" name="name">
                    <input type="text" placeholder="Ваш номер телефона" name="phone">
                    <input class="btn btn-red" type="submit" value="Отправить">
                </form>
            </div>
        </div>
    </section>
    <?php if(count($events)):?>
        <section class="events-section">
            <div class="content">
                <h2>МЕРОПРИЯТИЯ</h2>
                <div class="events-section-container">
                    <?php foreach ($events as $key => $event):?>
                        <div class="block-border"></div>
                        <div class="events-section-block">
                            <?=$this->render('/layouts/templates/_event_item',compact('event'));?>
                        </div>                    
                    <?php endforeach?>                  
                    <a href="<?= Url::to(['/events/index']) ?>"><button class="btn btn-red" >Смотреть все</button></a>
                </div>
            </div>
        </section>
    <?php endif?>
    <?php if(count($events)):?>
        <section class="team">
            <div class="content">
                <h2>КОМАНДА</h2>
                <div class="team-container">
                    <?php foreach ($team as $member){
                       echo $this->render('/layouts/templates/_team_item',compact('member'));
                    }?>
                    <div class="team-btn-wrapper">
                        <a class="btn btn-red" href="/site/instructors">Смотреть все</a>
                    </div>
                </div>
            </div>
        </section>
    <?php endif?>
    <section class="desc">
        <div class="content">
            <h2>World Class Сургут</h2>
            <div class="desc__container">
                <div class="desc__desc">
                    <div class="desc__text">
                        Уникальный дизайнерский проект в стиле Hi-tech и удачное расположение клуба в ТРЦ «АГОРА» предлагает высокий уровень комфорта для всех любителей фитнеса и здорового образа жизни. <br> <br>
                        В клубе вы найдете команду профессиональных инструкторов, выбор уникальных программ, разнообразные танцевальные классы, пилатес, Mind Body - йога, Gyrokinesis, водные программы, боевые искусства, услуги салона SPA, которые <br> мы считаем неотъемлемой частью тренировочного процесса, и многое другое.
                    </div>
                    <a href="#" class="desc__desc-footer btn-arrow-wrap">
                        <span>Узнать больше</span>
                        <svg class="btn-arrow">
                            <use xlink:href="/static/symbol/sprite.svg#btn">
                        </svg>
                    </a>
                </div>
                <div class="desc__slider">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="/static/images/11.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="/static/images/22.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="/static/images/33.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="/static/images/77.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="/static/images/1010.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="/static/images/1313.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="/static/images/1919.jpg" alt=""></div>
           
                        </div>
                    </div>

                    <!-- Add Arrows -->
                    <svg class="btn-next btn-svg">
                        <use xlink:href="/static/symbol/sprite.svg#btn">
                    </svg>
                    <svg class="btn-prev btn-svg">
                        <use xlink:href="/static/symbol/sprite.svg#btn">
                    </svg>

                </div>
            </div>
        </div>
    </section>

    <!-- <section class="info-red"> 
            <div class="content">
                <div class="info-red-item">
                    <div class="info-red-header">5000 м2</div>
                    <div class="info-red-text">Площадь нашего <br> тренажерного зала</div>
                </div>

                <div class="info-red-item">
                    <div class="info-red-header">25 м2</div>
                    <div class="info-red-text">Площадь<br> бассейна</div>
                </div>

                <div class="info-red-item">
                    <div class="info-red-header">15</div>
                    <div class="info-red-text">Видов различных<br> групповых занятий</div>
                </div>
            </div>	
    </section> -->


    <section class="map-section">
        <div class="" id="map"></div>
        <div class="content">
            <div class="map-contacts-container">
                <div class="map-header">
                    Контакты
                </div>
                <div class="map-text">
                    +7 (3462) 94-00-00 <br><br>
                    Сургут, ул. Профоюзов д, 11, <br> ТРЦ «АГОРА» <br><br>
                    Клуб: ПН-ПТ 06.00-00.00, <br> СБ-ВС 08.00-23.00 <br><br>
                    Отдел продаж: 09.00-22.00
                </div>
                <a href="#" class="map-footer btn-arrow-wrap">
                    <div class="map-footer-text">
                        Связаться с нами
                    </div>
                    <svg class="btn-svg">
                        <use xlink:href="/static/symbol/sprite.svg#btn">
                    </svg>
                </a>
            </div>
        </div>
    </section>
</div>