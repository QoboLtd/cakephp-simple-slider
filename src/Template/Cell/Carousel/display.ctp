<?php
if (!$slides) {
    return false;
}
$carouselId = 'carousel-' . $alias; ?>
<div id="<?= $carouselId ?>" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php foreach ($slides as $key => $slide) : ?>
        <li data-target="<?= $alias . '-' . $key ?>" data-slide-to="<?= $key ?>" class="<?php echo (!$key) ? 'active' : ''; ?>"></li>
    <?php endforeach; ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php foreach ($slides as $key => $slide) : ?>
        <div <?= ($slide->identifier) ? 'id="' . $slide->identifier . '"' : ''; ?>  class="item <?= (!$key) ? 'active' : ''; ?> <?= $slide->class ?>">
            <?php
            $options = [];
            if (!empty($slide->link)) :
              $options += ['url' => $slide->link];
            endif;
            ?>
            <?= $this->Image->display($slide->slide_images[0], 'medium', $options); ?>
            <div class="carousel-caption"><?= $slide->caption; ?></div>
        </div>
    <?php endforeach; ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#<?= $carouselId ?>" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#<?= $carouselId ?>" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>