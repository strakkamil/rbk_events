<div class="media-modal-wrapper">
  <div class="media-modal-container">
    <button class="close" onClick="closeModal()"><img width="35" height="35" src="/assets/images/close.svg"
        alt="Przycisk zamknięcia okna modalnego"></button>
    <div class="media-modal">
      <?php foreach ($media_elements as $element): ?>
      <div class="modal-img">
        <img loading="lazy" src="/assets/images/media-photo/<?= $element['img'] ?>" alt="<?= $element['alt'] ?>">
      </div>
      <?php endforeach; ?>
    </div>
    <div class="modal-btns">
      <button class="prev" onClick="prevImage()">
        <img loading="lazy" width="15" height="25" src="/assets/images/arrow.webp"
          alt="Przycisk zmiany slajdu wstecz"></button>
      <button class="next" onClick="nextImage()"><img loading="lazy" width="15" height="25"
          src="/assets/images/arrow.webp" alt="Przycisk zmiany slajdu naprzód"></button>
    </div>
  </div>
</div>

<script>
const wrapper = document.querySelector(".media-modal-wrapper");
const container = document.querySelector(".media-modal-container");
const images_count = [...document.querySelectorAll(".modal-img")].length - 1;
const slider = document.querySelector(".media-modal");
const prev = document.querySelector("button.prev");
const next = document.querySelector("button.next");
const gap = 50;
let currentIndex = 0;

const openModal = (index) => {
  currentIndex = index;
  const value = `translateX(calc(-${currentIndex * 100}% - ${currentIndex * 50}px))`;
  slider.style.transform = value;
  hideButtons();
  wrapper.classList.add("open");
};

const closeModal = () => {
  wrapper.classList.remove("open");
};

container.addEventListener("click", (e) => {
  e.stopPropagation();
});

wrapper.addEventListener("click", () => {
  closeModal();
});

const prevImage = () => {
  if (currentIndex === 0) return;
  currentIndex--;
  const value = `translateX(calc(-${currentIndex * 100}% - ${currentIndex * 50}px))`;
  slider.style.transform = value;
  hideButtons();
};

const nextImage = () => {
  if (currentIndex === images_count) return;
  currentIndex++;
  const value = `translateX(calc(-${currentIndex * 100}% - ${currentIndex * 50}px))`;
  slider.style.transform = value;
  hideButtons();
};

const hideButtons = () => {
  if (currentIndex === 0) {
    prev.classList.add("hide");
    return;
  }

  if (currentIndex === images_count) {
    next.classList.add("hide");
    return;
  }

  prev.classList.remove("hide");
  next.classList.remove("hide");
};

document.addEventListener("keydown", (e) => {
  switch (e.key) {
    case "ArrowLeft":
      prevImage();
      break;
    case "ArrowRight":
      nextImage();
      break;
    case "Escape":
      closeModal();
      break;
  }
});
</script>