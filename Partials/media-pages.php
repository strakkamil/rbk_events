<?php
include 'Partials/media-images.php';
?>

<div class="media-gallery">
  <?php foreach (array_chunk($media_elements, 12) as $index => $media_element): ?>
    <div class="page">
      <?php foreach ($media_element as $element): ?>
        <div class="element-wrapper">
          <img loading="lazy" src="/assets/images/media-photo/<?= $element['img'] ?>" alt="<?= $element['alt'] ?>">
        </div>
      <?php endforeach; ?>
    </div>
  <?php endforeach; ?>
</div>