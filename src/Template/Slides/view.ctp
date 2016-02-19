<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Slide'), ['action' => 'edit', $slide->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Slide'), ['action' => 'delete', $slide->id], ['confirm' => __('Are you sure you want to delete # {0}?', $slide->id)]) ?> </li>
<li><?= $this->Html->link(__('List Slides'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Slide'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Galleries'), ['controller' => 'Galleries', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Gallery'), ['controller' => 'Galleries', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Slide'), ['action' => 'edit', $slide->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Slide'), ['action' => 'delete', $slide->id], ['confirm' => __('Are you sure you want to delete # {0}?', $slide->id)]) ?> </li>
<li><?= $this->Html->link(__('List Slides'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Slide'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Galleries'), ['controller' => 'Galleries', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Gallery'), ['controller' => 'Galleries', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($slide->title) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= h($slide->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Gallery') ?></td>
            <td><?= $slide->has('gallery') ? $this->Html->link($slide->gallery->title, ['controller' => 'Galleries', 'action' => 'view', $slide->gallery->id]) : '' ?></td>
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
            <td><?= __('Attr Id') ?></td>
            <td><?= h($slide->attr_id) ?></td>
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

