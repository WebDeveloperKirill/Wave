<?php

/** @var yii\web\View $this */

use yii\bootstrap4\Carousel;
use yii\helpers\Html;

$this->title = '1-местный 1 кат. комфорт';

?>
<div class="site-nomera2">
    <h2>1-местный 1 кат. комфорт</h2>
<?php
echo Carousel::widget ( [
    'items' => [
        [
            'content' => '<img style="width:493px;height:308px" src="images/30.jpg"/>',
        ],
        [
            'content' => '<img style="width:493px;height:308px" src="images/25.jpg"/>',
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
        <br>-Односпальная кровать (размер 90Х200 см)
        <br>-Письменно-туалетный стол
        <br>-Прикроватная тумбочка
        <br>-Шкаф
        <br>-Телевизор
        <br>-Фен
        <br>-Комплект полотенец для каждого гостя (полотенце банное, для рук, для ног и пляжное полотенце)<p></p>
</div>
<p><strong>Дополнительное описание</strong></p>
<p>Все номера в санатории для некурящих. <br>Интерьер номера может отличаться от представленного на фотографиях.</p>

