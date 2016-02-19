<?php
$this->extend('QoboAdminPanel./Common/panel-wrapper');
$this->assign('title', __d('QoboAdminPanel', 'Sliders'));
$this->assign('panel-title', __d('QoboAdminPanel', 'Sliders information'));
?>
<div class="panel-body">
    <div class="panel panel-default">
        <!-- Panel header -->
        <div class="panel-heading">
            <h3 class="panel-title"><?= h($slider->title) ?></h3>
        </div>
        <table class="table table-striped" cellpadding="0" cellspacing="0">
            <tr>
                <td><?= __('Title') ?></td>
                <td><?= h($slider->title) ?></td>
            </tr>
            <tr>
                <td><?= __('Alias') ?></td>
                <td><?= h($slider->alias) ?></td>
            </tr>
            <tr>
                <td><?= __('Size') ?></td>
                <td><?= h($slider->size) ?></td>
            </tr>
            <tr>
                <td><?= __('Delay') ?></td>
                <td><?= $this->Number->format($slider->delay) ?></td>
            </tr>
            <tr>
                <td><?= __('Shuffle') ?></td>
                <td><?= $slider->shuffle ? __('Yes') : __('No'); ?></td>
            </tr>
            <tr>
                <td><?= __('Hover') ?></td>
                <td><?= $slider->hover ? __('Yes') : __('No'); ?></td>
            </tr>
        </table>
    </div>
</div>

