<?php
include 'Partials/hero-contact.php';
?>
<section class="form wrapper">
  <div class="sended">
    <span>
      Dziękuje za przesłanie wiadomości, skontaktuje się w możliwe
      najszybszym czasie.</span>
  </div>
  <h2 class="heading">Napisz do Nas</h2>
  <p>
    Masz pytania, chcesz zarezerwować termin lub dowiedzieć się więcej o
    naszej ofercie? Wypełnij formularz – odpowiemy tak szybko, jak to
    możliwe.
  </p>
  <form action="#" type="POST">
    <div class="field-element subject">
      <input name="subject" type="text" required />
      <label for="subject">Temat*</label>
      <span class="validation">Temat musi mieć minimum 5 znaków</span>
    </div>
    <div class="field-element name">
      <input name="name" type="text" required />
      <label for="name">Imię i nazwisko*</label>
      <span class="validation">Imię i nazwisko musi mieć minimum 5 znaków</span>
    </div>
    <div class="field-element email">
      <input name="email" type="type" required />
      <label for="email">Email*</label>
      <span class="validation">Email nie jest poprawny</span>
    </div>
    <div class="field-element textarea">
      <textarea name="message" type="text" required rows="5"></textarea>
      <label for="message">Temat wiadomości*</label>
      <span class="validation">Treść wiadomości musi zawierać minimum 20 znaków</span>
    </div>
    <div class="agree">
      <input type="checkbox" value="" id="agree" name="agree" required />
      <label for="agree">
        Wyrażam zgodę na przetwarzanie moich danych osobowych zgodnie z
        ustawą o ochronie danych osobowych w związku z realizacją
        zgłoszenia. Podanie danych jest dobrowolne, ale niezbędne do
        przetworzenia zapytania. Zostałem/am poinformowany/a, że
        przysługuje mi prawo dostępu do swoich danych, możliwości ich
        poprawiania, żądania zaprzestania ich przetwarzania.
        Administratorem danych osobowych jest: RBK Michał Robak
      </label>
      <span class="validation">Musisz wyraźić zgodę na przesłanie formularza</span>
    </div>
    <button class="cta second" type="submit"><span>Wyślij</span></button>
  </form>
</section>