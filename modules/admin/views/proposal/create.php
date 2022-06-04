<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Proposal */

$this->title = Yii::t('app', 'Создать заявку');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Заявки'), 'url' => ['index']];
?>
<div class="proposal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
