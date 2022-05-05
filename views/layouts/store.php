<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <div class="container-header">
        <h1 class="text-header">Город</h1>
        <input class="inpur-search" placeholder="Поиск">
        <h1 class="text-header-phone">+7 (999) 222-33-11</h1>
        <h1 class="text-header">О нас</h1>
        <h1 class="text-header">Доставка</h1>
        <h1 class="text-header">Аккаунт</h1>
    </div>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer>
    <div class="container-footer">
        <h1 class="text-header">Город</h1>
        <h1 class="text-footer">Правила пользования сайтом</h1>
        <h1 class="text-footer">Политика обработки персональных данных </h1>
        <h1 class="text-footer">Правила торговли </h1>
        <h1 class="text-footer">© PEPEGA, 2012–2022</h1>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
