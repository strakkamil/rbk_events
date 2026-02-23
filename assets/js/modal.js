export function initModal(wrapper) {
  const container = document.querySelector(".media-modal-container");
  const images = [...document.querySelectorAll(".element-wrapper img")];
  const images_count = [...document.querySelectorAll(".modal-img")].length - 1;
  const slider = wrapper.querySelector(".media-modal");
  const prev = document.querySelector("button.prev");
  const next = document.querySelector("button.next");
  const closeModalBtn = wrapper.querySelector("button.close");
  let currentIndex = 0;
  let startX = 0;
  let endX = 0;

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

  slider.addEventListener("touchstart", (e) => {
    startX = e.touches[0].clientX;
  });

  slider.addEventListener("touchend", (e) => {
    endX = e.changedTouches[0].clientX;
    const diff = startX - endX;

    if (diff > 50) {
      nextImage();
    } else if (diff < -50) {
      prevImage();
    }
  });

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

  for (let image of images) {
    const index = image.dataset.index;
    image.addEventListener("click", () => openModal(index));
  }

  closeModalBtn.addEventListener("click", closeModal);
  prev.addEventListener("click", prevImage);
  next.addEventListener("click", nextImage);
}
