<?php 

?>
<div class="team-item">
    <picture>
        <source type="image/webp" srcset="<?=$member->webp('image')?>">
        <img src="<?=$member->image?>" alt="Фото тренера №<?=$member->id?>">
    </picture>
    <div class="team-name"><?=$member->name?></div>
    <div class="team-prof"><?=$member->post?></div>
    <a href="#instructor-pop-up" class="btn-arrow-wrap popup-with-zoom-anim">
        <span>Подробнее</span>
        <svg class="btn-arrow-black">
            <use xlink:href="/static/symbol/sprite.svg#btn">
        </svg>
    </a>
</div>