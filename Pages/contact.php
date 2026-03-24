<?php
session_start(); // start sesji

// jeśli nie ma tokena – generujemy nowy
if (empty($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrf_token = $_SESSION['csrf_token'];

include 'Partials/hero-contact.php';
?>
<section class="form wrapper">
  <div class="sended">
    <span class="success">
      Wiadomość została pomyślnie wysłana! Jeśli nie odpowiem w ciągu 3 dni roboczych, skontaktuj się telefonicznie: <a
        href="tel:<?= PHONE ?>"><?= SHOW_PHONE ?></a>.</span>
    <span class="error">
      Wystąpił problem techniczny i formularz nie został wysłany. Spróbuj ponownie za chwilę lub skontaktuj się
      telefonicznie: <a href="tel:<?= PHONE ?>"><?= SHOW_PHONE ?></a>.</span>
  </div>
  <h2 class="heading">Napisz do mnie</h2>
  <p>
    Masz pytanie, chcesz zarezerwować termin lub dowiedzieć się więcej?<br>Wypełnij poniższy formularz – odpowiem tak
    szybko, jak to możliwe.
  </p>
  <form action="#" type="POST" novalidate>
    <input type="hidden" name="csrf_token" value="<?= $csrf_token ?>">
    <div class="field-element subject">
      <input name="subject" type="text" required />
      <label for="subject">Temat wiadomości*</label>
      <span class="validation">Temat wiadomości musi zawierać minimum 5 znaków.</span>
    </div>
    <div class="field-element email">
      <input name="email" type="text" required />
      <label for="email">E-mail*</label>
      <span class="validation">Adres e-mail jest niepoprawny.</span>
    </div>
    <div class="field-element name">
      <input name="name" type="text" required />
      <label for="name">Data i miejsce imprezy*</label>
      <span class="validation">Data i miejsce musi zawierać minimum 5 znaków.</span>
    </div>
    <div class="field-element source">
      <select name="source" id="source" required>
        <option value="" disabled selected></option>
        <option value="tiktok">TikTok</option>
        <option value="facebook">Facebook</option>
        <option value="instagram">Instagram</option>
        <option value="youtube">YouTube</option>
        <option value="google">Google</option>
        <option value="z_polecenia">Z polecenia</option>
        <option value="bylem_na_imprezie">Byłem na imprezie</option>
      </select>
      <label for="source">Jak do mnie trafiłeś?*</label>
      <span class="validation">Wybierz opcję z listy</span>
    </div>
    <div class="field-element textarea">
      <textarea name="message" type="text" rows="5" required></textarea>
      <label for="message">Treść wiadomości*</label>
      <span class="validation">Treść wiadomości musi zawierać minimum 20 znaków</span>
    </div>
    <div class="agree">
      <input type="checkbox" value="" id="agree" name="agree" />
      <label for="agree">
        Zapoznałem/am się z <a href="<?= PRIVACY ?>">Polityką Prywatności</a> i akceptuję jej postanowienia. Wyrażam
        zgodę na
        przetwarzanie moich danych osobowych przez RBK Events - Michał Robak w celu
        przygotowania i przesłania oferty.*
      </label>
      <span class="validation">Musisz wyrazić zgodę na przesłanie formularza.</span>
    </div>
    <!-- Honeypot: ukryte pole dla botów -->
    <input type="text" name="phone" style="display:none" autocomplete="off">
    <button class="cta second" type="submit"><span>Wyślij</span></button>
  </form>
</section>