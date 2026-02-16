<?php
include 'Partials/hero-offer.php';
$tick = '<img loading="lazy" width="20" height="20" src="/assets/images/tick.webp" alt="Grafika elementu tick">';
$tick_gradient = '<img loading="lazy" width="20" height="20" src="/assets/images/tick-gradient.webp" alt="Grafika elementu tick z gradientem">';
$empty = '<img loading="lazy" width="20" height="3" src="/assets/images/empty.webp" alt="Grafika elementu pustego">';
$question_mark = '<img loading="lazy" width="9" height="9" src="/assets/images/question-mark.webp" alt="Grafika znaku zapytania">';
?>

<section class="wrapper offer-birthday">
  <div class="heading">
    <h2>Celebruj swój dzień tak, jak lubisz!</h2>
    <span>Niezależnie od tego, czy kończysz 18 lat, świętujesz 40-tkę, czy organizujesz przyjęcie z okazji 25. rocznicy
      ślubu - Twoja impreza zasługuje na wyjątkową oprawę.</span>
    <span>Złote przeboje minionych dekad, jak i sprawdzone hity taneczne. Do tego internetowe virale i radiowe nowości.
      Mówiąc krótko - najlepsza selekcja muzyczna!</span>
    <span>To jednak nie wszystko.
      Już w podstawowym wariancie otrzymujesz to, co wyróżnia mnie na rynku - porywającą biesiadę z akordeonem.
      Powitalny toast oraz wspólna integracja przy stołach to przecież punkt obowiązkowy!</span>
    <span>Chcesz efektu WOW? Sprawdź wariant <strong>Premium</strong>.</span>
  </div>
  <div class="heading second">
    <h3>Wariant premium</h3>
    <span>Zobacz, co zyskujesz, wybierając opcję rozszerzoną:</span>
  </div>
  <div class="packages">
    <div class="row head">
      <div class="cell">Pakiet</div>
      <div class="cell bg">
        <span class="bold">Standard</span>
        <span class="img"><?= $question_mark ?></span>
        <span class="tooltip">Optymalny wybór</span>
      </div>
      <div class="cell bg">
        <span class="bold">Premium</span>
        <span class="img"><?= $question_mark ?></span>
        <span class="tooltip">Najczęściej wybierany</span>
      </div>
    </div>
    <div class="row">
      <div class="cell">Nagłośnienie</div>
      <div class="cell bg"><?= $tick ?></div>
      <div class="cell bg"><?= $tick ?></div>
    </div>
    <div class="row">
      <div class="cell">Oświetlenie sceniczne</div>
      <div class="cell bg"><?= $tick ?><span>Basic</span></div>
      <div class="cell bg"><?= $tick ?><span>Advanced</span></div>
    </div>
    <div class="row">
      <div class="cell">Oprawa artystyczna</div>
      <div class="cell bg bold"><span>DJ</span></div>
      <div class="cell bg bold"><span>DJ & Live</span></div>
    </div>
    <div class="row">
      <div class="cell">Czas trwania</div>
      <div class="cell bg"><span>7 godzin</span></div>
      <div class="cell bg"><span>8 godzin</span></div>
    </div>
    <div class="row last">
      <div class="cell">Wyrzutnia iskier</div>
      <div class="cell bg"><?= $empty ?></div>
      <div class="cell bg"><?= $tick ?><span>2 sztuki do tortu</span></div>
    </div>
  </div>
  <div class="heading second">
    <span>Wybierając opcję Premium, zyskujesz nie tylko dłuższy czas trwania imprezy, ale także bogatszą oprawę
      artystyczną - w trakcie bloków tanecznych wykonuję na żywo największe polskie przeboje. A ponadto:</span>
  </div>
  <div class="something-else">
    <ul class="list">
      <li class="child-list">
        <div class="first-line"><?= $tick_gradient ?><span>Bogatsze oświetlenie - rozszerzony zestaw zawierający:
          </span></div>
        <ul class="list">
          <li><span>4 głowy ruchome</span></li>
          <li><span>2 listwy Sunstrip</span></li>
          <li><span>2 stroboskopy</span></li>
          <li><span>oświetlenie dekoracyjne</span></li>
        </ul>
      </li>
      <li><?= $tick_gradient ?><span>Materiały video - idealna pamiątka do rodzinnego archiwum</span></li>
      <li><?= $tick_gradient ?><span>Wyrzutnie iskier - 2 fontanny, które uświetnią moment wjazdu tortu</span></li>
    </ul>
    <p class="contact">Napisz do mnie, a wspólnie ustalimy
      szczegóły.</p>
    <a class="cta second" href="<?= CONTACT ?>"><span>Kontakt</span></a>
  </div>
</section>

<?php include 'Partials/tooltip.php'; ?>