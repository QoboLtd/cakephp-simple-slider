<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $slide->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $slide->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Slides'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Sliders'), ['controller' => 'Sliders', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Slider'), ['controller' => 'Sliders', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $slide->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $slide->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Slides'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Sliders'), ['controller' => 'Sliders', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Slider'), ['controller' => 'Sliders', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($slide); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Slide']) ?></legend>
    <?php
    echo $this->Form->input('slider_id', ['options' => $sliders]);
    echo $this->Form->input('title');
    echo $this->Form->input('link');
    echo $this->Form->input('class');
    echo $this->Form->input('identifier');
    echo $this->Form->input('caption');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
