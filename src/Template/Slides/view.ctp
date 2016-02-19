<?php
$this->extend('QoboAdminPanel./Common/panel-wrapper');
$this->assign('title', __d('QoboAdminPanel', 'Slides'));
$this->assign('panel-title', __d('QoboAdminPanel', 'Slides information'));
?>
<div class="panel-body">
    <div class="panel panel-default">
        <!-- Panel header -->
        <div class="panel-heading">
            <h3 class="panel-title"><?= h($slide->title) ?></h3>
        </div>
        <table class="table table-striped" cellpadding="0" cellspacing="0">
            <tr>
                <td><?= __('Slider') ?></td>
                <td><?= $slide->has('slider') ? $this->Html->link($slide->slider->title, ['controller' => 'Sliders', 'action' => 'view', $slide->slider->id]) : '' ?></td>
            </tr>
            <tr>
                <td><?= __('Title') ?></td>
                <td><?= h($slide->title) ?></td>
            </tr>
            <tr>
                <td><?= __('Link') ?></td>
                <td><?= h($slide->link) ?></td>
            </tr>
            <tr>
                <td><?= __('Class') ?></td>
                <td><?= h($slide->class) ?></td>
            </tr>
            <tr>
                <td><?= __('Identifier') ?></td>
                <td><?= h($slide->identifier) ?></td>
            </tr>
            <tr>
                <td><?= __('Caption') ?></td>
                <td><?= h($slide->caption) ?></td>
            </tr>
            <tr>
                <td><?= __('Created') ?></td>
                <td><?= h($slide->created) ?></td>
            </tr>
            <tr>
                <td><?= __('Modified') ?></td>
                <td><?= h($slide->modified) ?></td>
            </tr>
        </table>
    </div>
</div>

