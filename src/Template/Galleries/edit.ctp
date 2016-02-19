<?php
$this->extend('QoboAdminPanel./Common/panel-wrapper');
$this->assign('title', __d('QoboAdminPanel', 'Galleries'));
$this->assign('panel-title', __d('QoboAdminPanel', 'Galleries information'));
?>
<div class="panel-body">
    <?= $this->Form->create($gallery); ?>
    <fieldset>
        <legend><?= __('Edit {0}', ['Gallery']) ?></legend>
        <?php
        echo $this->Form->input('title');
        echo $this->Form->input('link');
        echo $this->Form->input('class');
        echo $this->Form->input('attr_id');
        echo $this->Form->input('caption');
        ?>
    </fieldset>
    <?= $this->Form->button(__("Save")); ?>
    <?= $this->Form->end() ?>
</div>