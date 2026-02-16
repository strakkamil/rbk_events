<?php
include 'Partials/hero-offer.php';
?>

<section class="wrapper offer-birthday offer-events">

  <?php
  $active_index = 0;
  include 'Partials/offer-nav-main.php';
  $active_offer_index = 2;
  include 'Partials/offer-nav-secondary.php'
  ?>

  <div class="heading">
    <h2>Muzyczna wizytówka prestiżowych wydarzeń</h2>
    <span>Organizacja balu studniówkowego czy eventu firmowego wymaga nie tylko świetnej muzyki, ale przede wszystkim
      wyczucia i doświadczenia. Zapewniam oprawę, która podkreśli rangę tej uroczystości.</span>
  </div>
  <div class="cards-container second third">
    <div class="cards">
      <div class="card">
        <div class="header">Eventy firmowe</div>
        <div class="info-container">
          <div class="info">
            <span>Subtelne tło muzyczne buduje atmosferę sprzyjającą rozmowom kuluarowym. Część nieoficjalna to płynne
              przejście w stronę swobodnej zabawy i muzyka, która nie pozwala siedzieć przy stołach.</span>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="header">Studniówki</div>
        <div class="info-container">
          <div class="info">
            <span>Odpowiednia oprawa techniczna części oficjalnej, w tym nagłośnienie przemówień oraz uroczystego
              Poloneza. Gdy parkiet przejmują maturzyści, gram to, co jest na czasie, przeplatając nowości z tanecznymi
              pewniakami.</span>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="header">Bale sylwestrowe i karnawałowe</div>
        <div class="info-container">
          <div class="info">
            <span>Muzyczna podróż przez dekady. Od ery disco i przebojów lat 80., aż po współczesne hity radiowe, które
              porywają do tańca.</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="cards-container second">
    <p class="heading">Indywidualna konfiguracja sprzętowa</p>
    <span class="heading">Konfigurację nagłośnienia oraz rodzaj oświetlenia dobieram indywidualnie, biorąc pod uwagę
      wielkość sali,
      liczbę gości oraz charakter imprezy.</span>
    <div class="cards">
      <div class="card">
        <div class="header">Nagłośnienie</div>
        <div class="info-container">
          <div class="info">
            <span>Dopasowane tak, aby zapewnić możliwie najlepsze pokrycie dźwiękiem sali.</span>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="header">Oświetlenie sceniczne</div>
        <div class="info-container">
          <div class="info">
            <span>Od statycznego oświetlenia dekoracyjnego, po dynamiczne głowice ruchome, tworzące wizualne
              show.</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="cards-container second red">
    <p class="heading">Usługi dodatkowe dla firm</p>
    <div class="cards">
      <div class="card">
        <div class="header">Branding świetlny</div>
        <div class="info-container">
          <div class="info">
            <span>Dekoracja światłem sali (ścian, filarów) w kolorystyce spójnej z identyfikacją wizualną firmy.</span>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="header">Zestaw multimedialny</div>
        <div class="info-container">
          <div class="info">
            <span>Projektor i ekran na statywie do wyświetlenia prezentacji, podsumowań rocznych czy materiałów
              wideo.</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="something-else">
    <p>Planujesz wydarzenie?</p>
    <p class="contact">Napisz do mnie - przygotuję propozycję dopasowaną do Twoich potrzeb.</p>
    <a class="cta second" href="<?= CONTACT ?>"><span>Zapytaj o termin i wycenę</span></a>
  </div>
</section>