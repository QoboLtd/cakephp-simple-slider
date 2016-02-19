<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Galleries'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Slides'), ['controller' => 'Slides', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Slide'), ['controller' => 'Slides', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Galleries'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Slides'), ['controller' => 'Slides', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Slide'), ['controller' => 'Slides', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($gallery); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Gallery']) ?></legend>
    <?php
    echo $this->Form->input('title');
    echo $this->Form->input('link');
    echo $this->Form->input('class');
    echo $this->Form->input('attr_id');
    echo $this->Form->input('caption');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
