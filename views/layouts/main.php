<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'OA System',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => [
            ['label' => '首页', 'url' => ['/site']],
            ['label' => '人事', 'url' => ['/hr']],
            ['label' => '财务', 'url' => ['/salary']],
            ['label' => '行政', 'url' => ['/staff']],
            ['label' => '项目', 'url' => ['/projects']],
            ['label' => '合同', 'url' => ['/contract']],
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => '管理员', 'url' => ['/admin']],
            ['label' => '客户管理', 'url' => ['/final-user/manage']],
            ['label' => '代理商管理', 'url' => ['/agent/manage']],
            [
                'label' => '人事管理',
                'items' => [
                    ['label' => '部门', 'url' => '/department'],
                    ['label' => '员工', 'url' => '/employee'],
                ],
            ],
            ['label' => '工资管理', 'url' => ['/salary/manage']],
            [
                'label' => '行政管理',
                'items' => [
                    ['label' => '工作日管理', 'url' => '/view-work-day'],
                    ['label' => '考勤管理', 'url' => '/staff/manage'],
                    ['label' => '请假管理', 'url' => '/leave/manage'],
                    ['label' => '本地外出管理', 'url' => '/leave/localtrip'],
                    ['label' => '差旅管理', 'url' => '/leave/outland'],
                    ['label' => '课表管理', 'url' => '/schedule/manage'],
                ],
            ],
            [
                'label' => Yii::$app->user->isGuest ? "请先登录" : "Hi, " . Yii::$app->user->identity->username,
                'items' => [
                    ['label' => '个人信息', 'url' => '/'],
                    ['label' => '周报', 'url' => '/report'],
                    ['label' => '关于', 'url' => '/about'],
                    '<li class="divider"></li>',
                    '<li>'
                    . Html::beginForm(['/admin/user/logout'], 'post')
                    . Html::submitButton(
                        '注销',
                        ['class' => 'btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>',
                ],
            ],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p align="center">Copyright &copy; <?= date('Y') ?> Powered By QiShi</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
