<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Slide'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Galleries'), ['controller' => 'Galleries', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Gallery'), ['controller' => ' Galleries', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('gallery_id'); ?></th>
            <th><?= $this->Paginator->sort('title'); ?></th>
            <th><?= $this->Paginator->sort('link'); ?></th>
            <th><?= $this->Paginator->sort('class'); ?></th>
            <th><?= $this->Paginator->sort('attr_id'); ?></th>
            <th><?= $this->Paginator->sort('caption'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($slides as $slide): ?>
        <tr>
            <td><?= h($slide->id) ?></td>
            <td>
                <?= $slide->has('gallery') ? $this->Html->link($slide->gallery->title, ['controller' => 'Galleries', 'action' => 'view', $slide->gallery->id]) : '' ?>
            </td>
            <td><?= h($slide->title) ?></td>
            <td><?= h($slide->link) ?></td>
            <td><?= h($slide->class) ?></td>
            <td><?= h($slide->attr_id) ?></td>
            <td><?= h($slide->caption) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $slide->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $slide->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $slide->id], ['confirm' => __('Are you sure you want to delete # {0}?', $slide->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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