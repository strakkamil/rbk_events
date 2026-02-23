<?php
$current = strtok($_SERVER["REQUEST_URI"], '?');
include 'Partials/hero-media.php';
?>

<section class="wrapper media">
  <div class="heading">
    <h2>Chwile z parkietu</h2>
  </div>
  <div class="media-gallery-wrapper">
    <nav class="media-main-nav">
      <a href="<?= MEDIA_PHOTO ?>" class="<?= ($current === MEDIA_PHOTO) ? 'active' : '' ?>">Zdjęcia</a>
      <a href="<?= MEDIA_VIDEO ?>" class="<?= ($current === MEDIA_VIDEO) ? 'active' : '' ?>">Filmy</a>
    </nav>
    <div class="gallery-container">
      <?php include 'Partials/media-pages.php' ?>
      <?php include 'Partials/media-pagination.php' ?>
    </div>
  </div>
  <?php if ($current === MEDIA_PHOTO) include 'Partials/media-modal.php'; ?>
</section>

<script>
</script>