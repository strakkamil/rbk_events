<?php
if ($current === MEDIA_PHOTO) {
  include 'Partials/media-images.php';
  $img_index = 0;
}
if ($current === MEDIA_VIDEO) {
  include 'Partials/media-videos.php';
}
?>
<div class="media-gallery <?= $current === MEDIA_VIDEO ? 'video' : '' ?>">
  <?php foreach (array_chunk($media_elements, 12) as $media_element): ?>
  <div class="page">
    <?php foreach ($media_element as $element): ?>
    <?php if ($current === MEDIA_PHOTO): ?>
    <div class="element-wrapper">
      <img loading="lazy" data-index="<?= $img_index ?>" onClick="openModal(<?= $img_index ?>)"
        src="/assets/images/media-photo/<?= $element['img'] ?>" alt="<?= $element['alt'] ?>">
    </div>
    <?php $img_index++; ?>
    <?php endif; ?>
    <?php if ($current === MEDIA_VIDEO): ?>
    <div class="element-wrapper">
      <?= $element['code'] ?>
    </div>
    <?php endif; ?>
    <?php endforeach; ?>
  </div>
  <?php endforeach; ?>
</div>

<?php if ($current === MEDIA_VIDEO): ?>
<script async src="https://www.tiktok.com/embed.js"></script>
<?php endif; ?>