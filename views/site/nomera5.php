<?php

/** @var yii\web\View $this */

use yii\bootstrap4\Carousel;
use yii\helpers\Html;

$this->title = '2-местный 1 категории ';

?>
<div class="site-nomera5">
    <h2>2-местный 1 категории</h2>
    <?php
    echo Carousel::widget ( [
        'items' => [
            [
                'content' => '<img style="width:493px;height:308px" src="images/36.jpg"/>',
            ],
            [
                'content' => '<img style="width:493px;height:308px" src="images/37.jpg"/>',
            ],
        ],
        'options' => [
            'style' => 'width:493px;height:308px'// Задаем ширину контейнера
        ]
    ]);
    ?>
    <dic class="rov"
    <p><strong>Оснащение номера</strong></p>
    <p class="card-text3">
        <br>-1 комната
        <br>-Совмещенный санузел (душевая кабина)
        <br>-Система кондиционирования и отопления
        <br>-Две односпальные кровати (размер 90Х200 см)
        <br>-Письменно-туалетный стол
        <br>-Прикроватная тумбочка
        <br>-Шкаф
        <br>-Телевизор
        <br>-Сейф
        <br>-Фен
        <br>-Комплект полотенец для каждого гостя (полотенце банное, для рук, для ног и пляжное полотенце)<p></p>
</div>
<p><strong>Дополнительное описание</strong></p>
<p>Все номера в санатории для некурящих. <br>Интерьер номера может отличаться от представленного на фотографиях.</p>


