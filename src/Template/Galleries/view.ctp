<?php
$this->extend('QoboAdminPanel./Common/panel-wrapper');
$this->assign('title', __d('QoboAdminPanel', 'Galleries'));
$this->assign('panel-title', __d('QoboAdminPanel', 'Galleries information'));
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($gallery->title) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= h($gallery->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Title') ?></td>
            <td><?= h($gallery->title) ?></td>
        </tr>
        <tr>
            <td><?= __('Link') ?></td>
            <td><?= h($gallery->link) ?></td>
        </tr>
        <tr>
            <td><?= __('Class') ?></td>
            <td><?= h($gallery->class) ?></td>
        </tr>
        <tr>
            <td><?= __('Attr Id') ?></td>
            <td><?= h($gallery->attr_id) ?></td>
        </tr>
        <tr>
            <td><?= __('Caption') ?></td>
            <td><?= h($gallery->caption) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($gallery->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($gallery->modified) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Slides') ?></h3>
    </div>
    <?php if (!empty($gallery->slides)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Gallery Id') ?></th>
                <th><?= __('Title') ?></th>
                <th><?= __('Link') ?></th>
                <th><?= __('Class') ?></th>
                <th><?= __('Attr Id') ?></th>
                <th><?= __('Caption') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($gallery->slides as $slides): ?>
                <tr>
                    <td><?= h($slides->id) ?></td>
                    <td><?= h($slides->gallery_id) ?></td>
                    <td><?= h($slides->title) ?></td>
                    <td><?= h($slides->link) ?></td>
                    <td><?= h($slides->class) ?></td>
                    <td><?= h($slides->attr_id) ?></td>
                    <td><?= h($slides->caption) ?></td>
                    <td><?= h($slides->created) ?></td>
                    <td><?= h($slides->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Slides', 'action' => 'view', $slides->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Slides', 'action' => 'edit', $slides->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Slides', 'action' => 'delete', $slides->id], ['confirm' => __('Are you sure you want to delete # {0}?', $slides->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Slides</p>
    <?php endif; ?>
</div>
