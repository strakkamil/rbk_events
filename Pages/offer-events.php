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
        <div class="header">Event firmowy</div>
        <div class="info-container">
          <div class="info">
            <span>Subtelne tło muzyczne buduje atmosferę sprzyjającą rozmowom kuluarowym. Część nieoficjalna to płynne
              przejście w stronę swobodnej zabawy i muzyka, która nie pozwala siedzieć przy stołach.</span>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="header">Studniówka</div>
        <div class="info-container">
          <div class="info">
            <span>Prestiżowa oprawa części oficjalnej i perfekcyjne brzmienie Poloneza. W części rozrywkowej potężne uderzenie muzyczne, które nie pozwoli maturzystom zejść z parkietu do białego rana.</span>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="header">Sylwester i karnawał</div>
        <div class="info-container">
          <div class="info">
            <span>Idealnie dobrany repertuar w połączeniu z widowiskowym oświetleniem tworzą ekskluzywny charakter wydarzenia, który od pierwszej minuty nakręca gości do szampańskiej zabawy.<!--Taneczna podróż przez dekady – od hitów disco i przebojów lat 80., aż po współczesne radiowe brzmienia. Energia, różnorodność i muzyka, która przez całą noc trzyma parkiet w ruchu.--></span>
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
            <span>Dopasowane tak, aby zapewnić możliwie najlepsze pokrycie sali czystym i selektywnym brzmieniem.</span>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="header">Oświetlenie sceniczne</div>
        <div class="info-container">
          <div class="info">
            <span>Od statycznego światła dekoracyjnego po dynamiczne głowice ruchome, tworzące wizualne show.</span>
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
            <span>Dekoracja światłem sali (wnęk, ścian oraz filarów) w kolorystyce spójnej z identyfikacją wizualną firmy.</span>
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
    <p class="contact">Napisz do mnie – przygotuję propozycję dopasowaną do Twoich potrzeb.</p>
    <a class="cta second" href="<?= CONTACT ?>"><span>Zapytaj o termin i wycenę</span></a>
  </div>
</section>