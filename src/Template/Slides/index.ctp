<?php
$this->extend('QoboAdminPanel./Common/panel-wrapper');
$this->assign('title', 'Slides', ['controller' => 'Sliders', 'action' => 'index']);
$this->assign('panel-title', __d('QoboAdminPanel', 'Slides information'));
?>
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('title'); ?></th>
            <th><?= $this->Paginator->sort('Image'); ?></th>
            <th><?= $this->Paginator->sort('link'); ?></th>
            <th><?= $this->Paginator->sort('caption'); ?></th>
            <th><?= $this->Paginator->sort('new_tab'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($slides as $slide): ?>
        <?php
        $newTab = $slide->get('new_tab');
        $newTabStatus = $newTab ? 'ok' : 'remove';
        ?>
        <tr>
            <td><?= h($slide->title) ?></td>
            <td><?= $this->Image->display($slide->slide_images[0], 'small'); ?></td>
            <td><?= h($slide->link) ?></td>
            <td><?= h($slide->caption) ?></td>
            <td><span class="glyphicon glyphicon-<?= $newTabStatus ?>" aria-hidden="true"></span></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'edit', $slide->id, $slide->slider_id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $slide->id, $slide->slider_id], ['confirm' => __('Are you sure you want to delete # {0}?', $slide->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="ctas">
    <?= $this->Html->link(__('Back'), ['controller' => 'sliders'], ['class' => 'btn btn-default']) ?>
</div>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>
