<?php
$this->extend('QoboAdminPanel./Common/panel-wrapper');
$this->assign('title', __d('QoboAdminPanel', 'Galleries'));
$this->assign('panel-title', __d('QoboAdminPanel', 'Galleries information'));
?>
<div class="panel-body">
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id'); ?></th>
                <th><?= $this->Paginator->sort('title'); ?></th>
                <th><?= $this->Paginator->sort('link'); ?></th>
                <th><?= $this->Paginator->sort('class'); ?></th>
                <th><?= $this->Paginator->sort('attr_id'); ?></th>
                <th><?= $this->Paginator->sort('caption'); ?></th>
                <th><?= $this->Paginator->sort('created'); ?></th>
                <th class="actions"><?= __('Actions'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($galleries as $gallery): ?>
            <tr>
                <td><?= h($gallery->id) ?></td>
                <td><?= h($gallery->title) ?></td>
                <td><?= h($gallery->link) ?></td>
                <td><?= h($gallery->class) ?></td>
                <td><?= h($gallery->attr_id) ?></td>
                <td><?= h($gallery->caption) ?></td>
                <td><?= h($gallery->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link('', ['action' => 'view', $gallery->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                    <?= $this->Html->link('', ['action' => 'edit', $gallery->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                    <?= $this->Form->postLink('', ['action' => 'delete', $gallery->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gallery->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>