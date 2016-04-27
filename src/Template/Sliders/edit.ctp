<?php
$this->extend('QoboAdminPanel./Common/panel-wrapper');
$this->assign('title', __d('QoboAdminPanel', 'Sliders'));
$this->assign('panel-title', __d('QoboAdminPanel', 'Sliders information'));
?>
<?= $this->Form->create($slider); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Slider']) ?></legend>
    <?php
    echo $this->Form->input('title');
    echo $this->Form->input('alias');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>