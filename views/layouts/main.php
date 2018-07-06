<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap" id="app">
    <div class="container">
        <nav id="w0" class="navbar-inverse navbar-fixed-top navbar">
            <div class="container">
                <div class="navbar-header">
                    <router-link to="/" class="navbar-brand"><?=Yii::$app->name?></router-link>
                </div>
            </div>
        </nav>
        <transition>
            <router-view></router-view>
        </transition>
        <div v-if="this.$route.matched.length == 0">
            <?= $content ?>
        </div>

    </div>
</div>

<footer class="footer">
    <div class="container">

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
