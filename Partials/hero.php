<section class="hero">
  <img src="/assets/images/hero.webp" alt="Zdjęcie hero" />
  <header>
    <?php if (isset($text) && $text != ''): ?>
      <h1 class="heading underline">
        <?= $text ?></strong>
      </h1>
    <?php else: ?>
      <h1 class="heading">
        <span class="bold">DJ i Wodzirej,</span> <br />który rozkręci<br
          class="mobile-br" />
        Twoją imprezę!
      </h1>
    <?php endif; ?>
    <?php if ($show_cta): ?>
      <a class="cta" href="/oferta" aria-label="Link do oferty">Sprawdź ofertę</a>
    <?php endif; ?>
  </header>
</section>