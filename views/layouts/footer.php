<?php

use app\models\ServiceType;
use yii\helpers\Url;

?>
<footer>
    <div class="content">
        <div class="footer-top">
            <img src="/static/icons/newlogo.png" alt="">

            <div class="footer-top-block">
                <a href="/site/services">Услуги</a>
                <?php foreach(ServiceType::find()->all() as $serviceType):?>
                    <a href="<?=Url::to(['/site/services','service_type_id'=>$serviceType->id])?>" class="footer-top-tex"><?=$serviceType->name?></a>
                <?php endforeach?>
            </div>

            <div class="footer-top-block">
                    <a href="/site/about">О клубе</a>
                    <a class="footer-top-tex" href="/site/instructors">Команда клуба</a>
                    <div class="footer-top-tex">Вакансии</div>
            </div>

            <div class="footer-top-block block-header">
                <a class="footer-top-header" href="/site/promo">Акции</a>
                    <a class="footer-top-header" href="/card/index">Карты</a>
                    <a class="footer-top-header" href="/news/index">Новости</a>
                    <a class="footer-top-header" href="/events/index">Мероприятия</a>

            </div>

            <div class="footer-top-block">
                    <a href="/site/contacts" class="footer-top-header">Контакты</a>
                    <div class="footer-top-tex">+7 (3462) 94-00-00</div>
                    <div class="footer-top-tex">Сургут, ул. Профоюзов д, 11, <br> «ТРЦ АГОРА»</div>
                    <div class="footer-top-tex">Клуб: ПН-ПТ 06.00-00.00, <br>СБ-ВС 08.00-23.00</div>
                    <div class="footer-top-tex">Отдел продаж: 09.00-22.00</div>
            </div>
        </div>




        <div class="footer-top-mobile">
            <div class="footer-top-header-wrap">
                <div class="footer-top-header">
                    <a href="services.html">Услуги</a>
                    <svg class="btn-menu-services footer-arrow-button">
                        <use xlink:href="/static/symbol/sprite.svg#arrow-down">						
                    </svg>

                    <div class="hidden-bar">
                        <?php foreach(ServiceType::find()->all() as $serviceType):?>
                            <a href="<?=Url::to(['/site/service','service_type_id'=>$serviceType->id])?>" class="footer-top-tex"><?=$serviceType->name?></a>
                        <?php endforeach?>
                    </div>
                </div>
            
                <div class="footer-top-header">
                    <a href="about.html">О клубе</a>
                    <svg class="btn-menu-about footer-arrow-button">
                        <use xlink:href="/static/symbol/sprite.svg#arrow-down">						
                    </svg>

                    <div class="hidden-bar2">
                        <a href="#" class="footer-top-tex">Команда клуба</a>
                        <a href="#" class="footer-top-tex">Вакансии</a>
                    </div>
                </div>

                <div class="footer-top-header">
                    <a href="offers.html">Акции</a>
                </div>

                <div class="footer-top-header">
                    <a href="cards.html">Карты</a>
                </div>

                <div class="footer-top-header">
                    <a href="news.html">Новости</a>
                </div>

                <div class="footer-top-header">
                    <a href="events.html">Мероприятия</a>
                </div>
            </div>	
            <div class="footer-top-footer-wrap">
                <div class="footer-top-footer">
                    <span>+7 (3462) 94-00-00</span>
                </div>

                <div class="footer-top-footer">
                    <span>Сургут, ул. Профоюзов д, 11, «ТРЦ АГОРА»</span>
                </div>

                <div class="footer-top-footer">
                    <span>Клуб: ПН-ПТ 06.00-00.00, <br> СБ-ВС 08.00-23.00</span>
                </div>

                <div class="footer-top-footer">
                    <span>Отдел продаж: 09.00-22.00</span>
                </div>
            </div>
        </div>

    </div>
    <div class="footer-line"></div>

    <div class="content">
            <div class="footer-bottom">
                <div class="footer-bottom-text">© Copyright 2019 WorldClass</div>
                <a href="https://goldcarrot.ru/" class="footer-bottom-text">Разработано в GOLD CARROT</a> 
            </div>
    </div>
</footer>