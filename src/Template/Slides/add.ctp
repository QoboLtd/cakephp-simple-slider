<?php
$this->extend('QoboAdminPanel./Common/panel-wrapper');
$this->assign('title', __d('QoboAdminPanel', 'Slides'));
$this->assign('panel-title', __d('QoboAdminPanel', 'Slides information'));
?>
<div class="panel-body">
    <?= $this->Form->create($slide); ?>
    <fieldset>
        <legend><?= __('Add {0}', ['Slide']) ?></legend>
        <?php
        echo $this->Form->hidden('slider_id', ['value' => $sliderId]);
        echo $this->Form->input('title');
        echo $this->Form->input('img_src', ['label' => __('Image source file')]);
        echo $this->Form->input('link');
        echo $this->Form->input('class');
        echo $this->Form->input('identifier');
        echo $this->Form->input('caption');
        ?>
    </fieldset>
    <?= $this->Form->button(__("Add")); ?>
    <?= $this->Form->end() ?>
</div>