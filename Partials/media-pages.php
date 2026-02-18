<?php
include 'Partials/media-images.php';
$img_index = 0;
?>

<div class="media-gallery">
  <?php foreach (array_chunk($media_elements, 12) as $media_element): ?>
  <div class="page">
    <?php foreach ($media_element as $element): ?>
    <div class="element-wrapper">
      <img loading="lazy" data-index="<?= $img_index ?>" onClick="openModal(<?= $img_index ?>)"
        src="/assets/images/media-photo/<?= $element['img'] ?>" alt="<?= $element['alt'] ?>">
    </div>
    <?php $img_index++; ?>
    <?php endforeach; ?>
  </div>
  <?php endforeach; ?>
</div>