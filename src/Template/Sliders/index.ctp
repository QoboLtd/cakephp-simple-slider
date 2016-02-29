<?php
$this->extend('QoboAdminPanel./Common/panel-wrapper');
$this->assign('title', __d('QoboAdminPanel', 'Sliders'));
$this->assign('panel-title', __d('QoboAdminPanel', 'Sliders information'));
?>
<p class="text-right">
    <?php echo $this->Html->link(
        __('Add New'),
        ['plugin' => $this->request->plugin, 'controller' => $this->request->controller, 'action' => 'add'],
        ['class' => 'btn btn-primary']
    ); ?>
</p>
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('title'); ?></th>
            <th><?= $this->Paginator->sort('alias'); ?></th>
            <th><?= $this->Paginator->sort('shuffle'); ?></th>
            <th><?= $this->Paginator->sort('hover'); ?></th>
            <th><?= $this->Paginator->sort('delay'); ?></th>
            <th><?= $this->Paginator->sort('size'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($sliders as $slider): ?>
        <tr>
            <td><?= h($slider->title) ?></td>
            <td><?= h($slider->alias) ?></td>
            <td><?= h($slider->shuffle) ?></td>
            <td><?= h($slider->hover) ?></td>
            <td><?= $this->Number->format($slider->delay) ?></td>
            <td><?= h($slider->size) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['controller' => 'slides', 'action' => 'add', $slider->id], ['title' => __('Add Slide'), 'class' => 'btn btn-default glyphicon glyphicon-plus']) ?>
                <?= $this->Html->link('', ['controller' => 'slides', 'action' => 'index', $slider->id], ['title' => __('View slides of {0}', $slider->title), 'class' => 'btn btn-default glyphicon glyphicon-list-alt']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $slider->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $slider->id], ['confirm' => __('Are you sure you want to delete # {0}?', $slider->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
