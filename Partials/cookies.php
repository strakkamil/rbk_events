<?php
$marketing_consent = $_COOKIE["marketing_consent"] ?? null;
$statistic_consent = $_COOKIE["statistic_consent"] ?? null;
?>

<section class="cookies-wrapper <?= !isset($marketing_consent) || !isset($statistic_consent) ? 'show' : '' ?>">
  <div class="cookies-agree">
    <p>Na stronie internetowej można znaleźć informacje dotyczące celów przetwarzania i dostawców, którzy przetwarzają
      dane osobowe na naszej stronie internetowej.</p>
    <form action="#">
      <div class="cookie-type">
        <div class="row-cookie">
          <label class="switch" for="necessary">
            <input type="checkbox" name="necessary" id="necessary" checked disabled>
            <span class="slider"></span>
          </label>
          <span class="text">Niezbędne pliki cookie</span>
        </div>
        <p class="necessary">
          Te pliki cookie są niezbędne dla funkcjonowania strony internetowej i nie mogą być wyłączone w naszych
          systemach.
          Są one zazwyczaj ustawiane tylko w odpowiedzi na działania podejmowane przez użytkownika, które sprowadzają
          się
          do
          zapytania o usługi, takie jak ustawienie preferencji prywatności, logowanie lub wypełnianie formularzy. Można
          ustawić przeglądarkę tak, aby blokowała lub ostrzegała o tych plikach cookie, ale niektóre części witryny nie
          będą
          wtedy działały. Te pliki cookie nie przechowują żadnych danych osobowych.
        </p>
      </div>
      <div class="cookie-type">
        <div class="row-cookie">
          <label class="switch" for="marketing">
            <input type="checkbox" name="marketing" id="marketing"
              <?= $marketing_consent !== 'false' ? 'checked' : '' ?>>
            <span class="slider"></span>
          </label>
          <span class="text">Pliki cookie związane z reklamami i ich odbiorcami</span>
        </div>
        <p class="marketing">
          Te pliki cookie mogą być ustawiane przez naszych partnerów reklamowych za pośrednictwem naszej strony
          internetowej. Mogą one być wykorzystywane przez te firmy do budowania profilu zainteresowań użytkownika i
          wyświetlania odpowiednich reklam na innych stronach. Nie przechowują one bezpośrednio danych osobowych, lecz
          opierają się na jednoznacznej identyfikacji przeglądarki i sprzętu internetowego. Jeśli użytkownik nie zezwoli
          na stosowanie tych plików cookie, doświadcza mniej ukierunkowanych reklam.
        </p>
      </div>
      <div class="cookie-type">
        <div class="row-cookie">
          <label class="switch" for="statistic">
            <input type="checkbox" name="statistic" id="statistic"
              <?= $statistic_consent !== 'false' ? 'checked' : '' ?>>
            <span class="slider"></span>
          </label>
          <span class="text">Pliki cookie wydajności</span>
        </div>
        <p class="statistic">
          Te pliki cookie umożliwiają nam zliczanie wizyt i źródeł ruchu, dzięki czemu możemy mierzyć i poprawiać
          wydajność naszej witryny. Pomagają one ustalić, które strony są najbardziej i najmniej popularne i zobaczyć,
          jak odwiedzający poruszają się po stronie. Wszystkie informacje zbierane przez te pliki cookie są agregowane i
          tym samym anonimowe. Jeśli użytkownik nie zezwoli na stosowanie tych plików cookie, nie będziemy wiedzieć,
          kiedy odwiedził naszą stronę internetową.
        </p>
      </div>
    </form>
    <div class="cookies-btns">
      <button class="cta reject">Odrzuć wszystko</button>
      <button class="cta save">Zapisz i wyjdź</button>
    </div>
    <a class="cookies-link" href="<?= PRIVACY ?>">Dowiedz się więcej</a>
  </div>
</section>