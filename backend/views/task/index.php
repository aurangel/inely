<?php

/**
 * This file is part of the Inely project.
 *
 * (c) Inely <http://github.com/hirootkit/inely>
 *
 * @author rootkit
 * @var $this    yii\web\View
 */

\backend\assets\TaskAsset::register($this);

$this->registerCssFile('tools/dock/dockmodal.css');
$this->registerCssFile('tools/forms/admin-forms.css');

?>

<!-- begin: .tray-left -->
<aside class="tray tray-left va-t tray250">
    <?= $this->render('aside', [ 'dataProvider' => $dataProvider, 'countOf' => $countOf ]) ?>
</aside>
<!-- end: .tray-left -->

<section class="list-tabs">
    <?= $this->render('project') ?>
</section>

<?= $this->render('create') ?>

<?php
$main = <<<SCRIPT
$('ul.panel-tabs li:nth-child(3)').addClass('active');
SCRIPT;

$this->registerJs($main, $this::POS_END);
?>