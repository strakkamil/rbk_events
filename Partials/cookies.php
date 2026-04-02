<?php
$marketing_consent = $_COOKIE["marketing_consent"] ?? null;
$statistic_consent = $_COOKIE["statistic_consent"] ?? null;
?>

<section class="cookies-wrapper <?= !isset($marketing_consent) || !isset($statistic_consent) ? 'show' : '' ?>">
  <div class="cookies-agree">
    <p>Serwis www.rbk-events.pl używa plików cookies do prawidłowego działania, analizy ruchu i celów marketingowych.
      Zarządzaj preferencjami poniżej. Wybierz „Zapisz i wyjdź”, aby zaakceptować ustawienia, lub „Odrzuć wszystko”, by
      pozostawić tylko ciasteczka technicznie niezbędne.</p>
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
          Te pliki cookie są absolutnie kluczowe dla prawidłowego działania serwisu www.rbk-events.pl. Odpowiadają za
          podstawowe funkcje techniczne, takie jak poprawne wyświetlanie witryny oraz zapamiętanie Twojej decyzji
          dotyczącej samych plików cookies. Z uwagi na ich niezbędny charakter, nie ma możliwości ich wyłączenia.
        </p>
      </div>
      <div class="cookie-type">
        <div class="row-cookie">
          <label class="switch" for="statistic">
            <input type="checkbox" name="statistic" id="statistic"
              <?= $statistic_consent !== 'false' ? 'checked' : '' ?>>
            <span class="slider"></span>
          </label>
          <span class="text">Analityczne i wydajnościowe (opcjonalne)</span>
        </div>
        <p class="statistic">
          Te pliki cookie pozwalają gromadzić anonimowe informacje statystyczne na temat tego, w jaki sposób
          odwiedzający korzystają z witryny. Pomagają one zrozumieć, które sekcje oferty są najchętniej czytane, co
          pozwala na bieżąco ulepszać stronę i dostosowywać ją do oczekiwań wszystkich potencjalnych klientów.
        </p>
      </div>

      <div class="cookie-type">
        <div class="row-cookie">
          <label class="switch" for="marketing">
            <input type="checkbox" name="marketing" id="marketing"
              <?= $marketing_consent !== 'false' ? 'checked' : '' ?>>
            <span class="slider"></span>
          </label>
          <span class="text">Reklamowe i marketingowe (opcjonalne)</span>
        </div>
        <p class="marketing">
          Te pliki cookie służą do optymalizacji działań promocyjnych, które prowadzi RBK Events - Michał Robak.
          Pozwalają one na śledzenie aktywności w celu wyświetlania Ci bardziej trafnych reklam w innych miejscach w
          internecie (np. w mediach społecznościowych) oraz mierzenia skuteczności prowadzonych kampanii reklamowych.
        </p>
      </div>
    </form>
    <div class="cookies-btns">
      <button class="cta second reject"><span>Odrzuć wszystko</span></button>
      <button class="cta save">Zapisz i wyjdź</button>
    </div>
  </div>
</section>