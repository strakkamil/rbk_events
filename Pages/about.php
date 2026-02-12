<?php
$hero_img = '/assets/images/biesiada-weselna-z-akordeonem-na-zywo.webp';
$hero_class = 'hero-about';
$text = 'O mnie';
$show_cta = false;
include 'Partials/hero.php';
?>
<section class="about-page">
  <div class="info">
    <h2 class="heading">Cześć, jestem Michał!</h2>
    <p class="text">
      Jestem muzykiem z wykształcenia. Ukończyłem szkołę muzyczną I i II stopnia w klasie akordeonu, co dało mi solidne
      fundamenty i pozwoliło tworzyć oprawę imprez, która jest czymś więcej niż tylko odtwarzaniem piosenek.
    </p>
    <div class="info-img">
      <img src="/assets/images/michal-robak-dj-wodzirej-rbk-events.webp" alt="">
    </div>
  </div>
  <div class="info">
    <h2 class="heading">Od telewizyjnego show do Twojej imprezy</h2>
    <p class="text">
      Moja droga na scenę była pełna wyzwań i niesamowitych doświadczeń. Udział w półfinale programu Disco Star w Polo
      TV czy koncerty na dużych scenach obok największych gwiazd polskiej muzyki tanecznej, takich jak Akcent, Boys, Mig
      czy Baciary, nauczyły mnie, jak ważna jest energia płynąca ze sceny. Dziś całe to doświadczenie przenoszę na Twoją
      imprezę.
    </p>
    <div class="info-img">
      <?php
      $slider_id = 'about_1';
      $slider_images = ['/assets/images/nowoczesny-akordeonista-na-imprezy-firmowe-i-bale.webp', '/assets/images/akordeonista-muzyk-sceniczny-rbk-events.webp', '/assets/images/doswiadczony-muzyk-sceniczny-michal-robak.webp'];
      include 'Partials/slider.php';
      ?>
    </div>
  </div>
  <div class="info">
    <h2 class="heading">Doświadczenie, które procentuje</h2>
    <p class="text">
      Dziś, jako <strong>RBK Events</strong>, łączę to wszystko w nowatorskiej formule <strong>DJ & Live</strong>. Jako
      DJ prezentuję
      największe hity,
      budując energię i idealnie dopasowując muzykę do nastroju gości. Tę starannie przygotowaną selekcję wzbogacam o
      występy na żywo, które nadają całości unikalnego, koncertowego charakteru.
    </p>
    <p class="text">
      Wisienką na torcie jest tradycyjna biesiada przy stołach. Kiedy chwytam za akordeon i ruszam między stoły, energia
      wspólnego śpiewu tworzy niezwykłą atmosferę, której nie da się podrobić.
    </p>
    <div class="info-img">
      <img src="/assets/images/michal-robak-dj-wodzirej-rbk-events.webp" alt="">
    </div>
  </div>
  <div class="info">
    <h2 class="heading">Gwarancja perfekcji w każdym detalu</h2>
    <p class="text">
      Na każdej imprezie towarzyszy mi Mateusz - człowiek odpowiedzialny za oświetlenie i technikę. Taki podział ról to
      <strong>Wasza pewność</strong>, że wszystko działa perfekcyjnie - ja skupiam się na muzyce i kontakcie z gośćmi, a
      on tworzy spektakularną oprawę wizualną. Oznacza to, że możemy idealnie dopasować kolorystykę świateł do sali, a
      każdy detal jest przemyślany - aż po policyjne koguty w trakcie utworu „Policeman”.
    </p>
    <p class="text">
      Podczas wesela Mateusz nagrywa także krótkie, pionowe ujęcia wideo. To świetny, <strong>bezpłatny bonus</strong>,
      który
      otrzymujecie niedługo po imprezie. Materiał nie jest montowany, dzięki czemu zachowuje 100% naturalnej energii i
      pokazuje zabawę z samego serca parkietu.
    </p>
    <p class="text">
      To nie wszystko! Mateusz jest moją prawą ręką i dba o płynną koordynację z obsługą sali i innymi usługodawcami.
      Dzięki temu unikamy organizacyjnego chaosu, a Wy zyskujecie <strong>bezcenny spokój</strong>.
    </p>
    <div class="info-img">
      <?php
      $slider_id = 'about_2';
      $slider_images = ['/assets/images/akordeonista-muzyk-sceniczny-rbk-events.webp', '/assets/images/doswiadczony-muzyk-sceniczny-michal-robak.webp'];
      include 'Partials/slider.php';
      ?>
    </div>
  </div>
</section>