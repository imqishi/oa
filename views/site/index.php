<?php

/* @var $this yii\web\View */

$this->title = 'OA System';
?>
<div class="site-index">
    <div class="body-content">
        <h3>待办事项</h3>
        <div class="row">
            <div class="col-lg-6">
                <?= $this->render('project/manager') ?>
            </div>
            <div class="col-lg-6">
                <?= $this->render('project/seller') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?= $this->render('event/list') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?= $this->render('hr/staff') ?>
            </div>
        </div>
    </div>
</div>
