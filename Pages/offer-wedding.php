<?php
include 'Partials/hero-offer.php';
$tick = '<img loading="lazy" width="20" height="20" src="/assets/images/tick.webp" alt="Grafika elementu tick">';
$tick_gradient = '<img loading="lazy" width="20" height="20" src="/assets/images/tick-gradient.webp" alt="Grafika elementu tick z gradientem">';
$empty = '<img loading="lazy" width="20" height="3" src="/assets/images/empty.webp" alt="Grafika elementu pustego">';
$question_mark = '<img loading="lazy" width="9" height="9" src="/assets/images/question-mark.webp" alt="Grafika znaku zapytania">';
?>

<section class="wrapper">
  <div class="heading">
    <h2>Wesele na miarę Waszych marzeń</h2>
    <span>Moim celem jest przygotowanie oferty idealnie dopasowanej do Waszej wizji, dlatego stworzyłem pakiety, które
      odpowiadają na różne potrzeby.</span>
  </div>
  <div class="packages">
    <div class="row head">
      <div class="cell">Pakiet</div>
      <div class="cell bg">
        <span class="bold">Standard</span>
        <span class="img"><?= $question_mark ?></span>
        <span class="tooltip">Pakiet dostępny tylko w okresie listopad - luty</span>
      </div>
      <div class="cell bg">
        <span class="bold">Premium</span>
        <span class="img"><?= $question_mark ?></span>
        <span class="tooltip">Najczęściej wybierany</span>
      </div>
      <div class="cell bg">
        <span class="bold">VIP</span>
        <span class="img"><?= $question_mark ?></span>
        <span class="tooltip">Opcja dla najbardziej wymagających</span>
      </div>
    </div>
    <div class="row">
      <div class="cell">Nagłośnienie</div>
      <div class="cell bg"><?= $tick ?></div>
      <div class="cell bg"><?= $tick ?></div>
      <div class="cell bg"><?= $tick ?></div>
    </div>
    <div class="row">
      <div class="cell">Oświetlenie sceniczne</div>
      <div class="cell bg"><?= $tick ?><span>Basic</span></div>
      <div class="cell bg"><?= $tick ?><span>Advanced</span></div>
      <div class="cell bg"><?= $tick ?><span>Pro</span></div>
    </div>
    <div class="row">
      <div class="cell">Oprawa artystyczna</div>
      <div class="cell bg bold"><span>DJ</span></div>
      <div class="cell bg bold"><span>DJ & Live</span></div>
      <div class="cell bg bold"><span>DJ & Live</span></div>

    </div>
    <div class="row">
      <div class="cell">Biesiada przy stołach na akordeonie</div>
      <div class="cell bg"><?= $empty ?></div>
      <div class="cell bg"><?= $tick ?></div>
      <div class="cell bg"><?= $tick ?></div>
    </div>
    <div class="row">
      <div class="cell">Akordeonowe Show (Live Act + set klubowy)</div>
      <div class="cell bg"><?= $empty ?></div>
      <div class="cell bg"><?= $tick ?></div>
      <div class="cell bg"><?= $tick ?></div>
    </div>
    <div class="row">
      <div class="cell">Materiały video z wesela</div>
      <div class="cell bg"><?= $empty ?></div>
      <div class="cell bg"><?= $tick ?></div>
      <div class="cell bg"><?= $tick ?></div>
    </div>
    <div class="row">
      <div class="cell">Wyrzutnia iskier</div>
      <div class="cell bg"><?= $empty ?></div>
      <div class="cell bg"><?= $tick ?><span>Pierwszy taniec - 2&nbsp;szt.</span></div>
      <div class="cell bg"><?= $tick ?><span>Pierwszy taniec - 4&nbsp;szt.</span><span>Tort - 2&nbsp;szt.</span></div>
    </div>
    <div class="row">
      <div class="cell">Cięzki dym</div>
      <div class="cell bg"><?= $empty ?></div>
      <div class="cell bg"><?= $tick ?></div>
      <div class="cell bg"><?= $tick ?></div>
    </div>
    <div class="row last">
      <div class="cell">Dekoracje światłem</div>
      <div class="cell bg"><?= $empty ?></div>
      <div class="cell bg"><?= $empty ?></div>
      <div class="cell bg"><?= $tick ?></div>
    </div>
  </div>
  <div class="important">
    <p class="heading">Ważne!</p>
    <p class="secondary">Oferta jest skrojona pod imprezy odbywające się w zamkniętych przestrzeniach, takich jak sale
      weselne,
      bankietowe czy hotelowe. Nie obsługujemy wydarzeń plenerowych.</p>
  </div>
  <div class="cards-container">
    <p class="heading">Poznaj różnice między pakietami</p>
    <span class="heading">Zobacz, co dokładnie kryje się pod pojęciami, konfiguracjami oświetleniowymi oraz wariantami
      artystycznymi,
      które wchodzą w skład poszczególnych pakietów:</span>
    <div class="cards">
      <div class="card">
        <div class="header">Warianty oprawy artystycznej</div>
        <div class="info-container">
          <div class="info margin">
            <?= $tick ?>
            <p>Opcja DJ (pakiet Standard)</p>
            <span>W tym wariancie bawimy się przy największych przebojach odtwarzanych z konsolety
              DJ-skiej.</span>
          </div>
          <div class="info">
            <?= $tick ?>
            <p>Opcja DJ & Live (pakiet Premium oraz VIP)</p>
            <span>Opcja DJ & Live (pakiet Premium oraz VIP) Podstawą zabawy jest muzyka odtwarzana z konsolety, ale
              całość
              wzbogacam o występy na żywo, śpiewając i grając na klawiszach lub akordeonie. Stanowi to atrakcyjne
              urozmaicenie repertuaru.</span>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="header">Oświetlenie sceniczne</div>
        <div class="info-container">
          <div class="info margin">
            <?= $tick ?>
            <p>Wersja Basic (pakiet&nbsp;Standard)</p>
            <span>Optymalna, estetyczna baza na mniejsze przyjęcia. Konfiguracja obejmuje 2 głowy ruchome oraz światło
              dekoracyjne.</span>
          </div>
          <div class="info margin">
            <?= $tick ?>
            <p>Wersja Advanced (pakiet&nbsp;Premium)</p>
            <span>Rozszerzony zestaw z 4 głowami ruchomymi, wzbogacony o 2 listwy Sunstrip, 2 stroboskopy oraz
              wytwornicę delikatnej mgły.</span>
          </div>
          <div class="info">
            <?= $tick ?>
            <p>Wersja Pro (pakiet&nbsp;VIP)</p>
            <span>Najbardziej rozbudowany system oświetleniowy. 6 głów ruchomych i 4 listwy Sunstrip. Całość dopełnia
              wytwornica mgły, 2 stroboskopy oraz klimatyczne oświetlenie dekoracyjne.</span>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="header second-line">Akordeonowe Show<span>(dostępne wyłącznie w pakiecie VIP)</span></div>
        <div class="info-container">
          <div class="info margin single">
            <span>To coś więcej niż tradycyjna biesiada przy stołach. To atrakcja podzielona na dwa etapy:</span>
          </div>
          <div class="info margin">
            <?= $tick ?>
            <p>Klimatyczny wstęp</p>
            <span>Zadbam o wyjątkową atmosferę już podczas składania życzeń. Zagram na żywo nastrojowe, instrumentalne
              przeboje do profesjonalnych podkładów muzycznych, tworząc eleganckie tło dla Waszych pierwszych chwil z
              gośćmi.</span>
          </div>
          <div class="info">
            <?= $tick ?>
            <p>Sceniczny Live Act</p>
            <span>Po północy wkraczam z energetycznym show. Największe dyskotekowe hity w połączeniu z żywym
              instrumentem zyskują nowe, unikalne brzmienie i niepowtarzalny charakter.</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="cards-container second">
    <p class="heading">Zawsze w dobrym guście</p>
    <div class="cards">
      <div class="card">
        <div class="header">Energia i klasa</div>
        <div class="info-container">
          <div class="info">
            <span>Prowadzę imprezę z dobrym smakiem i wyczuciem. Bez żenujących zabaw i krępujących sytuacji. Tylko
              świetna muzyka i doskonała atmosfera.</span>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="header">Wasz dzień, <br>Wasza muzyka</div>
        <div class="info-container">
          <div class="info">
            <span>Jestem elastyczny i otwarty na Wasze sugestie. Możecie dostarczyć mi swoją playlistę z ulubionymi
              utworami, a ja z przyjemnością wkomponuję je w scenariusz imprezy.</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="cards-container second third">
    <p class="heading">Usługi dodatkowe</p>
    <span class="heading">Wzbogać swoje wesele o niezapomniane atrakcje.</span>
    <div class="cards">
      <div class="card">
        <div class="header">Wyprowadzenie Pary Młodej z domu</div>
        <div class="info-container">
          <div class="info">
            <span>Tradycyjna oprawa instrumentalna na akordeonie podczas wyprowadzenia z domu rodzinnego.</span>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="header">Fontanny iskier</div>
        <div class="info-container">
          <div class="info">
            <span>Spektakularne fontanny sceniczne, idealne do podkreślenia momentu wjazdu tortu lub pierwszego
              tańca.</span>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="header">Ciężki dym</div>
        <div class="info-container">
          <div class="info">
            <span>(„Taniec w chmurach”) - Niezwykle fotogeniczny efekt, który sprawi, że Wasz pierwszy taniec będzie
              wyglądał jak z bajki.</span>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="header">Nagłośnienie
          ślubu cywilnego</div>
        <div class="info-container">
          <div class="info">
            <span>Nagłośnienie ceremonii w plenerze lub na sali, aby każdy z gości doskonale słyszał słowa
              przysięgi.</span>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="header">Zestaw multimedialny</div>
        <div class="info-container">
          <div class="info">
            <span>Projektor z dużym ekranem do wyświetlenia podziękowań dla rodziców, prezentacji zdjęć czy Love
              Story.</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="something-else">
    <p h>Nie znalazłeś idealnego pakietu?</p>
    <span>Skontaktuj się ze mną! Stworzymy
      indywidualną ofertę, dopasowaną
      dokładnie do Twoich potrzeb.</span>
    <ul class="list">
      <li><?= $tick_gradient ?><span>Dopasujemy zakres usług do Twoich
          oczekiwań</span></li>
      <li><?= $tick_gradient ?><span>Uwzględnimy budżet i
          harmonogram</span></li>
      <li><?= $tick_gradient ?><span>Stworzymy pakiet specjalnie
          dla Ciebie</span></li>
    </ul>
    <p class="contact">Napisz do mnie, a wspólnie ustalimy
      szczegóły.</p>
    <a class="cta second" href="<?= CONTACT ?>"><span>Kontakt</span></a>
  </div>
</section>

<?php include 'Partials/tooltip.php'; ?>