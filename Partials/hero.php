<section class="hero <?= $hero_class ?>">
  <div class="hero-img">
    <div class="gradient-element"></div>
    <picture>
      <source srcset="/assets/images/<?= $hero_img ?>-d.webp" media="(min-width: 600px)">
      <source srcset="/assets/images/<?= $hero_img ?>.webp" media=" (max-width: 599px)">
      <img src="/assets/images/<?= $hero_img ?>.webp" width="412" height="232" alt="<?= $hero_img_alt ?>"
        fetchpriority="high">
    </picture>
  </div>
  <header>
    <?php if (isset($text) && $text != ''): ?>
    <h1 class="heading underline">
      <?= $text ?></strong>
    </h1>
    <?php else: ?>
    <h1 class="heading">
      <span class="bold">DJ i Wodzirej,</span> <br />który rozkręci<br class="mobile-br" />
      Twoją imprezę!
    </h1>
    <?php endif; ?>
    <?php if ($show_cta): ?>
    <a class="cta" href="/oferta" aria-label="Link do oferty">Sprawdź ofertę</a>
    <?php endif; ?>
  </header>
</section>