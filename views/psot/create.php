<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Psot */

$this->title = 'Create Psot';
$this->params['breadcrumbs'][] = ['label' => 'Psots', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="psot-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
