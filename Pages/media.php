<?php
$current = strtok($_SERVER["REQUEST_URI"], '?');
include 'Partials/hero-media.php';
$marketing_consent = $_COOKIE["marketing_consent"] ?? null;
?>

<section class="wrapper media">
  <?php if ($current === MEDIA_VIDEO): ?>
    <p class="video-cookies-info <?= $marketing_consent === 'false' ? 'show' : '' ?>">Poniższe materiały wideo pochodzą z
      TikToka. <br> Ze względów prywatności, do ich wyświetlenia niezbędna jest zgoda na pliki cookies z kategorii
      „Reklamowe i marketingowe”. <br> <span class="show-cookie-banner">Zmień ustawienia plików cookies</span>
    </p>
  <?php endif; ?>
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