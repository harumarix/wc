<?php

use app\models\KidsClub;

/** @var KidsClub $kidsClub */
?>
<div class="kids__card">
    <div class="kids__card-top">
        <picture>
            <source type="image/webp" srcset="<?=$kidsClub->webp('image')?>">
            <img src="<?=$kidsClub->image?>" alt="Изображение клуба №<?=$kidsClub->id?>">
        </picture>
        <div class="kids__card-tag">
            #<?=$kidsClub->kidsClubCategory->name?>
        </div>
        <div class="kids__card-age">
            <?=$kidsClub->age?>
        </div>
    </div>

    <div class="kids__card-bottom">
        <div class="kids__card-head">
            <?=$kidsClub->name?>
        </div>

        <div class="kids__card-text">
            <?=mb_strlen(strip_tags($kidsClub->description))>170?mb_substr(strip_tags($kidsClub->description),0,167).'...':strip_tags($kidsClub->description)?>
        </div>
    </div>
</div>