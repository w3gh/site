<?php

$models = Yii::$app->params['downloads'];

/**
 * @var yii\web\View $this
 */
$this->title = 'Скачать';

?>

<div class="site-download">
    <div class="container">
        <div class="row">
        <?php foreach($models as $id => $model): ?>
            <div class="col-sm-4 download-row <?= $id ?>">
                <div class="logo"><h3><?= $model['title'] ?></h3></div>
                <p><?= $model['description'] ?></p>
                <p class="lead">
                    <a href="<?= $model['link'] ?>"
                       class="btn btn-lg btn-outline">
                        Скачать <?= $model['title'] ?>
                    </a>
                </p>
                <p class="version">Версия <?= $model['version'] ?></p>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</div>