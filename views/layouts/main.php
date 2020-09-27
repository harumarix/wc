<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AjaxLoadAsset;
use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
AjaxLoadAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=no">	
	<meta property="og:title" content="World Class">
	<meta property="og:description" content="Комфортный фитнес с бассейном в современном клубе в Сургуте">
	<meta property="og:image" content="/static/images/opengraph.png">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="537">
	<meta property="og:image:height" content="240">
	<link rel="icon"  href="/static/icons/favicon-96x96.png">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= $this->title? Html::encode($this->title):'World Class' ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="site-container" id="app">
    <?=$this->render('header')?>
    <main>
        <?= $content ?>
    </main>
    <?=$this->render('footer')?>    
</div>
<?=$this->render('modals')?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
