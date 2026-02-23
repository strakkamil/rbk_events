<div class="media-modal-wrapper">
  <div class="media-modal-container">
    <button class="close"><img width="35" height="35" src="/assets/images/close.svg"
        alt="Przycisk zamknięcia okna modalnego"></button>
    <div class="media-modal">
      <?php foreach ($media_elements as $element): ?>
        <div class="modal-img">
          <img loading="lazy" src="/assets/images/media-photo/<?= $element['img'] ?>" alt="<?= $element['alt'] ?>">
        </div>
      <?php endforeach; ?>
    </div>
    <div class="modal-btns">
      <button class="prev">
        <img loading="lazy" width="15" height="25" src="/assets/images/arrow.webp"
          alt="Przycisk zmiany slajdu wstecz"></button>
      <button class="next"><img loading="lazy" width="15" height="25" src="/assets/images/arrow.webp"
          alt="Przycisk zmiany slajdu naprzód"></button>
    </div>
  </div>
</div>