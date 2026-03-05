<?php
$hero_img = 'biesiada-weselna-z-akordeonem-na-zywo';
$hero_img_alt = 'Biesiada weselna z akordeonem na żywo';
$hero_class = 'triangle';
$text = 'O mnie';
$show_cta = false;
include 'Partials/hero.php';
?>
<section class="wrapper">
  <div class="info">
    <h2 class="heading">Cześć, jestem Michał!</h2>
    <div class="text-container">
      <p class="text">
        Jestem muzykiem z wykształcenia. Ukończyłem szkołę muzyczną I i II stopnia w klasie akordeonu, co dało mi
        solidne
        fundamenty i pozwoliło tworzyć oprawę imprez, która jest czymś więcej niż tylko odtwarzaniem piosenek.
      </p>
    </div>
    <div class="image-container">
      <div class="info-img">
        <div class="image-squares">
          <span class="square"></span>
          <span class="square square_second"></span>
          <div class="square-image-container">
            <img loading="lazy" width="238" height="322" src="/assets/images/michal-robak-dj-wodzirej-rbk-events.webp"
              alt="Michał Robak DJ Wodzirej RBK Events">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="info second">
    <h2 class="heading">Od telewizyjnego show do Twojej imprezy</h2>
    <div class="text-container">
      <p class="text">
        Moja droga na scenę była pełna wyzwań i niesamowitych doświadczeń. Udział w półfinale programu Disco Star w
        Polo
        TV czy koncerty na dużych scenach obok największych gwiazd polskiej muzyki tanecznej, takich jak Akcent, Boys,
        Mig
        czy Baciary, nauczyły mnie, jak ważna jest energia płynąca ze sceny. Dziś całe to doświadczenie przenoszę na
        Twoją
        imprezę.
      </p>
    </div>
    <div class="image-container">
      <?php
      $slider_id = 'about_1';
      $slider_images = [
        ['img' => 'michal-robak-akordeonowe-show.webp', 'alt' => 'Michał Robak akordeonowe show'],
        ['img' => 'akordeonista-muzyk-sceniczny-michal-robak.webp', 'alt' => 'Akordeonista muzyk sceniczny Michał Robak'],
        ['img' => 'doswiadczony-muzyk-sceniczny-michal-robak.webp', 'alt' => 'Doświadczony muzyk sceniczny Michał Robak']
      ];
      include 'Partials/slider.php';
      ?>
    </div>
  </div>
  <div class="info third">
    <h2 class="heading">Doświadczenie, które procentuje</h2>
    <div class="text-container">
      <p class="text">
        Dziś, jako <strong>RBK Events</strong>, łączę to wszystko w nowatorskiej formule <strong>DJ & Live</strong>.
        Jako
        DJ prezentuję
        największe hity,
        budując energię i idealnie dopasowując muzykę do nastroju gości. Tę starannie przygotowaną selekcję wzbogacam o
        występy na żywo, które nadają całości unikalnego, koncertowego charakteru.
      </p>
      <p class="text margin">
        Wisienką na torcie jest tradycyjna biesiada przy stołach. Kiedy chwytam za akordeon i ruszam między stoły,
        energia
        wspólnego śpiewu tworzy niezwykłą atmosferę, której nie da się podrobić.
      </p>
    </div>
    <div class="image-container">
      <div class="info-img">
        <div class="info-img">
          <div class="image-squares">
            <span class="square"></span>
            <span class="square square_second"></span>
            <div class="square-image-container">
              <img loading="lazy" width="238" height="322"
                src="/assets/images/profesjonalny-muzyk-na-eventy-biznesowe.webp"
                alt="Profesjonalny muzyk na eventy biznesowe">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="info fourth">
    <h2 class="heading">Gwarancja perfekcji w każdym detalu</h2>
    <div class="text-container">
      <p class="text">
        Na każdej imprezie towarzyszy mi Mateusz - człowiek odpowiedzialny za oświetlenie i technikę. Ten podział ról to
        gwarancja najwyższej jakości. Podczas gdy ja skupiam się na muzyce i prowadzeniu zabawy, on dba o profesjonalną
        oprawę wizualną wydarzenia.
      </p>
      <p class="text margin">
        Mateusz czuwa również nad płynną koordynacją z obsługą sali oraz innymi usługodawcami. Ponadto w trakcie imprezy
        łapie najlepsze momenty, nagrywając ujęcia wideo z parkietu. Nagrania te otrzymujecie po weselu jako bezpłatny
        dodatek.
      </p>
    </div>
    <div class="image-container">
      <?php
      $slider_id = 'about_2';

      $slider_images = [
        ['img' => 'relacja-foto-video-z-wesela-dla-pary-mlodej.webp', 'alt' => 'Relacja foto video z wesela dla pary młodej'],
        ['img' => 'oprawa-muzyczna-dj-i-instrumenty-klawiszowe.webp', 'alt' => 'Oprawa muzyczna DJ i instrumenty klawiszowe'],
      ];
      include 'Partials/slider.php';
      ?>
    </div>
    <a class="cta" href="<?= OFFER_WEDDING ?>"><span>Poznaj moją ofertę</span></a>
  </div>
</section>