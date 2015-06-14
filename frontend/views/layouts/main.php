<?php
    use yii\helpers\ArrayHelper;
    use kartik\alert\AlertBlock;

    /* @var $this \yii\web\View */
    /* @var $content string */

    if (!Yii::$app->user->isGuest)
        $this->beginContent('@frontend/views/layouts/_base.php');
    else
        $this->beginContent('@frontend/views/layouts/_landing.php');
?>

<?php if (Yii::$app->session->hasFlash('alert')): ?>
<?= AlertBlock::widget([
        'useSessionFlash' => false,
        'type' => AlertBlock::TYPE_GROWL,
        'alertSettings' => [
            'alert' => [
                'body' => ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'body'),
            ],
            'settings' => [
                'type' => ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'options'),
            ]
        ]
    ]);
?>
<?php endif; ?>

<?= $content ?>

<?php
    $this->endContent();
?>
