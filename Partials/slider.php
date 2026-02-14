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
    <button alt="Przycisk nawigacji kropkowej <?= $index + 1 ?>" data-index="<?= $index ?>"
      class="dot <?= $index == 0 ? 'active' : '' ?>"></button>
    <?php endforeach; ?>
  </div>
</div>
<script>
(function() {
  const wrapper = document.getElementById('<?= $slider_id ?>');
  const slider = wrapper.querySelector('.slider')
  const dots = wrapper.querySelectorAll('.dot')
  const btnPrev = wrapper.querySelector('button.prev')
  const btnNext = wrapper.querySelector('button.next')
  let sliderIndex = 0
  const sliderMaxIndex = dots.length === 3 ? 2 : 1

  const nextSlide = () => {
    const first = slider.querySelector('.element-0')
    const second = slider.querySelector('.element-1')
    const third = slider.querySelector('.element-2')

    if (sliderMaxIndex === 2) {
      first.className = 'element element-2'
      second.className = 'element element-0'
      third.className = 'element element-1'
    } else {
      first.className = 'element element-1'
      second.className = 'element element-0'
    }

    if (sliderIndex === sliderMaxIndex) {
      sliderIndex = 0
    } else {
      sliderIndex += 1
    }

    setActiveDot()
  }

  const prevSlide = () => {
    const first = slider.querySelector('.element-0')
    const second = slider.querySelector('.element-1')
    const third = slider.querySelector('.element-2')

    if (sliderMaxIndex === 2) {
      first.className = 'element element-1'
      second.className = 'element element-2'
      third.className = 'element element-0'
    } else {
      first.className = 'element element-1'
      second.className = 'element element-0'
    }

    if (sliderIndex === 0) {
      sliderIndex = sliderMaxIndex
    } else {
      sliderIndex -= 1
    }

    setActiveDot()
  }

  const setActiveDot = () => {
    for (let dot of dots) {
      dot.classList.remove('active')
    }
    dots[sliderIndex].classList.add('active')
  }

  const dotManage = () => {
    for (let dot of dots) {
      dot.addEventListener('click', () => {
        const index = +dot.dataset.index
        const diff = sliderIndex - index
        if (diff === -2) {
          btnNext.click()
          btnNext.click()
        }
        if (diff === -1) {
          btnNext.click()
        }
        if (diff === 1) {
          btnPrev.click()
        }
        if (diff === 2) {
          btnPrev.click()
          btnPrev.click()
        }
      })
    }
  }

  dotManage()

  let startX = 0;
  let endX = 0;

  slider.addEventListener('touchstart', e => {
    startX = e.touches[0].clientX;
  });

  slider.addEventListener('touchend', e => {
    endX = e.changedTouches[0].clientX;
    const diff = startX - endX;

    if (diff > 50) {
      btnNext.click()
    } else if (diff < -50) {
      btnPrev.click()
    }
  });

  btnPrev.addEventListener('click', prevSlide)
  btnNext.addEventListener('click', nextSlide)
})()
</script>