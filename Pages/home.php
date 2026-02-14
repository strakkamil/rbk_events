<?php
$hero_img = 'michal-robak-rbk-events-profesjonalna-oprawa-muzyczna';
$hero_img_alt = 'Michał Robak RBK Events profesjonalna oprawa muzyczna';
$hero_class = '';
$text = '';
$show_cta = true;
include 'Partials/hero.php';
?>
<main>
  <section class="about">
    <h2 class="heading">Odkryj oprawę muzyczną w stylu DJ & Live!</h2>
    <p>
      Dzięki takiej formule nie musicie wybierać między DJ-em a zespołem -
      dostajecie to, co najlepsze z obu światów. Nowoczesne sety DJ-skie,
      muzyka na żywo i tradycyjna biesiada z akordeonem. To właśnie ta
      synergia tworzy niepowtarzalny klimat, który wyróżni Wasze wesele.
    </p>
    <a class="cta second" href="/o-mnie"><span>O mnie</span></a>
  </section>
  <section class="events">
    <h2 class="heading">Oprawa muzyczna na najwyższym poziomie</h2>
    <ul>
      <li>
        <span class="list-heading"><span>Wesela</span><img loading="lazy" width="35" height="35"
            src="assets/images/event3.png" alt="Ikona wesela" title="Wesele" /></span>
        <span class="text">Magiczna oprawa muzyczna, która sprawi, że Wasze wesele będzie
          pełne radości, tańca i niezapomnianych wspomnień.</span>
      </li>
      <li>
        <span class="list-heading"><span>Bale</span><img loading="lazy" width="35" height="35"
            src="assets/images/event2.png" alt="Ikona balu" title="Bale" /></span>
        <span class="text">Idealnie dobrany repertuar podkreśli rangę wydarzenia i zapewni
          szampańską zabawę do białego rana.</span>
      </li>
      <li>
        <span class="list-heading"><span>Jubileusze</span><img loading="lazy" width="35" height="35"
            src="assets/images/event1.png" alt="Ikona jubielusz" title="Jubileusz" /></span>
        <span class="text">Elegancka muzyka, podkreślająca wyjątkowość chwili i nadająca
          uroczystości niepowtarzalny klimat.</span>
      </li>
      <li>
        <span class="list-heading"><span>Urodziny</span><img loading="lazy" width="35" height="35"
            src="assets/images/event5.png" alt="Ikona urodzin" title="Urodziny" /></span>
        <span class="text">Energia, zabawa i muzyka, która rozkręci każdą imprezę urodzinową
          i zostanie w pamięci na długo.</span>
      </li>
      <li>
        <span class="list-heading"><span>Imprezy firmowe</span><img loading="lazy" width="35" height="35"
            src="assets/images/event6.png" alt="Ikona imprez firmowych" title="Imprezy firmowe" /></span>
        <span class="text">Oprawa muzyczna budująca świetny nastrój i integrację zespołu
          podczas wydarzeń biznesowych.</span>
      </li>
    </ul>

    <a class="cta second" href="/oferta"><span>Zobacz pełną ofertę</span></a>
  </section>
  <section class="gallery">
    <h2 class="heading">Chwile z parkietu</h2>
    <a class="cta second" href="/media"><span>Więcej</span></a>
    <?php
    $slider_id = 'home_1';
    $slider_images = [
      ['img' => 'nowoczesny-akordeonista-na-imprezy-firmowe-i-bale.webp', 'alt' => 'Nowoczesny akordeonista na imprezy firmowe i bale'],
      ['img' => 'akordeonista-muzyk-sceniczny-michal-robak.webp', 'alt' => 'Akordeonista muzyk sceniczny Michał Robak'],
      ['img' => 'doswiadczony-muzyk-sceniczny-michal-robak.webp', 'alt' => 'Doświadczony muzyk sceniczny Michał Robak']
    ];
    include 'Partials/slider.php';
    ?>
  </section>
</main>