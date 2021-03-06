<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model bttree\smypage\models\PageCategory */

$this->title = Yii::t('smy.page', 'Create Page Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('smy.page', 'Page Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
