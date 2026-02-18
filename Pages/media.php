<?php
include 'Partials/hero-media.php';
?>

<section class="wrapper media">
  <div class="heading">
    <h2>Chwile z parkietu</h2>
  </div>
  <div class="media-gallery-wrapper">
    <nav class="media-main-nav">
      <a href="<?= MEDIA_PHOTO ?>" class="active">Zdjęcia</a>
      <a href="<?= MEDIA_VIDEO ?>">Filmy</a>
    </nav>
    <div class="gallery-container">
      <?php include 'Partials/media-pages.php' ?>
      <?php include 'Partials/media-pagination.php' ?>
    </div>
  </div>
  <?php include 'Partials/media-modal.php' ?>
</section>

<script>
const heading = document.querySelector('.heading')
const gallery_container = document.querySelector('.media-gallery')
const pages = [...document.querySelectorAll('.page')]
const pagination_buttons = [...document.querySelectorAll('.media-pagination button')]
let header_height = document.querySelector('nav.main-nav').getBoundingClientRect().height
const scrollMargin = header_height + 40
const gap = 15
let page_width = pages[0].getBoundingClientRect().width
let lastWidth = window.innerWidth;

const scrollToTop = () => {
  const top = pages[0].getBoundingClientRect().top + window.scrollY - scrollMargin
  window.scrollTo({
    top,
    behavior: "smooth"
  })
}

const removeActiveClass = () => {
  for (let btn of pagination_buttons) {
    btn.classList.remove('active')
  }
}

const changePage = (index) => {
  const translate = index * page_width + index * gap
  removeActiveClass()
  pagination_buttons[index].classList.add('active')
  gallery_container.style.transform = `translateX(-${translate}px)`
  scrollToTop()
}

const resizeHelper = () => {
  if (window.innerWidth !== lastWidth) {
    header_height = document.querySelector('nav.main-nav').getBoundingClientRect().height
    page_width = pages[0].getBoundingClientRect().width
    const activeButton = document.querySelector('.media-pagination button.active')
    activeButton.click()
  }
  lastWidth = window.innerWidth;
}

window.addEventListener('resize', resizeHelper)
</script>