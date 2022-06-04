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
    <link rel="icon" href="images/icon.png">
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <?php
    NavBar::begin([
        'brandLabel' => '<img src="images/logo.png" style="display: inline; vertical-align: top; height:32px;">  Wave ',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav ',],
        'items' => [
            ['label' => 'Главная', 'url' => ['/site/index']],
            ['label' => 'Отдых', 'url' => ['/site/about']],
            ['label' => 'Номера', 'url' => ['site/'], 'items' => [
                ['label' => 'Выбор номеров', 'url' => ['site/nomera', 'tag' => 'new']],
                ['label' => '1-местный комфорт ', 'url' => ['site/nomera2', 'tag' => 'new']],
                ['label' => '1-местный 1 категории ', 'url' => ['site/nomera3', 'tag' => 'new']],
                ['label' => '2-местный 1 кат. комфорт', 'url' => ['site/nomera4', 'tag' => 'new']],
                ['label' => '2-местный 1 категории', 'url' => ['site/nomera5', 'tag' => 'new']],
                ]],
            ['label' => 'Лечение', 'url' => ['/site/spisok']],
            ['label' => 'Цены', 'url' => ['/site/prays']],
            ['label' => 'Контакты', 'url' => ['/site/contacts']],
            ['label' => 'Админ-панель', 'url' => ['/admin/users/index'], 'visible'=>Yii::$app->user->identity->isAdmin
            and !Yii::$app->user->isGuest],
            ['label' => 'Запрос наличия', 'url' => ['/site/contact']],
            ['label' => 'Регистрация', 'url' => ['/site/signup'], 'visible'=>Yii::$app->user->isGuest],
            Yii::$app->user->isGuest ? (
            ['label' => 'Авторизация', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                . Html::submitButton(
                    'Выход (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-outline-inline logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],

    ]);
    NavBar::end();
    ?>
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

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-left">&copy; Санаторий Wave <?= date('Y') ?></p>

    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

