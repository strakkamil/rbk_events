<div class="slider-wrapper" id="<?= $slider_id ?>">
  <div class="slider <?= count($slider_images) === 2 ? 'small' : '' ?>">
    <?php foreach ($slider_images as $index => $slider): ?>
      <div class="element element-<?= $index ?>">
        <img loading="lazy" width="186" height="245" src="/assets/images/<?= $slider['img'] ?>"
          alt="<?= $slider['alt'] ?>">
      </div>
    <?php endforeach; ?>
    <button class="prev">
      <img loading="lazy" width="30" height="49" src="/assets/images/arrow.webp" alt="Przycisk zmiany slajdu">
    </button>
    <button class="next">
      <img loading="lazy" width="30" height="49" src="/assets/images/arrow.webp" alt="Przycisk zmiany slajdu">
    </button>
  </div>
  <div class="dots">
    <?php foreach ($slider_images as $index => $value): ?>
      <button title="Przycisk nawigacji kropkowej <?= $index + 1 ?>" data-index="<?= $index ?>"
        class="dot <?= $index == 0 ? 'active' : '' ?>"></button>
    <?php endforeach; ?>
  </div>
</div>