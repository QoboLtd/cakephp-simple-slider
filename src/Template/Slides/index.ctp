<?php
$this->extend('QoboAdminPanel./Common/panel-wrapper');
$this->assign('title', 'Slides', ['controller' => 'Sliders', 'action' => 'index']);
$this->assign('panel-title', __d('QoboAdminPanel', 'Slides information'));
?>
<div class="panel-body">
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('title'); ?></th>
                <th><?= $this->Paginator->sort('Image'); ?></th>
                <th><?= $this->Paginator->sort('link'); ?></th>
                <th><?= $this->Paginator->sort('class'); ?></th>
                <th><?= $this->Paginator->sort('identifier'); ?></th>
                <th><?= $this->Paginator->sort('caption'); ?></th>
                <th class="actions"><?= __('Actions'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($slides as $slide): ?>
            <tr>
                <td><?= h($slide->title) ?></td>
                <?php
                /**
                 * @todo Look & feel temp.. fix.
                 * Make sure to fill alt, id, class which are included in the entity object.
                 */
                 ?>
                <td><?= $this->Html->image('//lorempixel.com/1200/300?' . $slide->title, ['class' => 'img-responsive']); ?></td>
                <td><?= h($slide->link) ?></td>
                <td><?= h($slide->class) ?></td>
                <td><?= h($slide->identifier) ?></td>
                <td><?= h($slide->caption) ?></td>
                <td class="actions">
                    <?= $this->Html->link('', ['action' => 'edit', $slide->id, $slide->slider->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                    <?= $this->Form->postLink('', ['action' => 'delete', $slide->id, $slide->slider->id], ['confirm' => __('Are you sure you want to delete # {0}?', $slide->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
</div>