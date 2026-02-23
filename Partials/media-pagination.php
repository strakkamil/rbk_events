<section class="media-pagination">
  <?php foreach (array_chunk($media_elements, 12) as $index => $media_element): ?>
    <button class="page <?= $index === 0 ? 'active' : '' ?>" data-index="<?= $index ?>"><?= $index + 1 ?></button>
  <?php endforeach; ?>
</section>