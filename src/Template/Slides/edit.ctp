<?php
$this->extend('QoboAdminPanel./Common/panel-wrapper');
$this->assign('title', __d('QoboAdminPanel', 'Slides'));
$this->assign('panel-title', __d('QoboAdminPanel', 'Slides information'));
?>
<div class="panel-body">
    <?= $this->Form->create($slide, ['type' => 'file']); ?>
    <fieldset>
        <legend><?= __('Edit {0}', ['Slide']) ?></legend>
        <?php
        echo $this->Image->display($slide->slide_images[0], 'large');
        echo $this->Form->hidden('slider_id', ['value' => $sliderId]);
        echo $this->Form->input('title');
        echo $this->Form->input('link');
        echo $this->Form->input('caption');
        echo $this->Form->file('file');
        echo $this->Form->error('file');
        ?>
    </fieldset>
    <?= $this->Form->button(__("Save"), ['class' => 'btn-primary']); ?>
    <?= $this->Form->end() ?>
</div>
