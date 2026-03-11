<?php
if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
  http_response_code(404);
  die();
}

class Page
{
  protected static bool $Return_404 = true;
  protected static function Return_404(): void
  {
    require_once "./Pages/404.php";
    http_response_code(404);
  }
  protected static function File(string $file): string
  {
    if (!empty($file)) {
      (str_contains($file, "?")) ? $file = strtok($file, '?') : $file;
      ($file[strlen($file) - 1] === "/") ? $file = rtrim($file, "/") : $file;
    }
    return $file;
  }
}
class Router extends Page
{
  public static function Run(): void
  {
    $requested_file = self::File($_SERVER["REQUEST_URI"]);
    foreach (Routes::$Route as $request => $file) {
      if ($requested_file === $request) {
        if (file_exists($file)) {
          self::$Return_404 = false;
          // Sprawdź flagę soon
          if (isset(Routes::$Soon[$request]) && Routes::$Soon[$request]) {
            require "./Pages/soon.php";
          } else {
            require $file;
          }
        }
      }
    }
    if (self::$Return_404) self::Return_404();
  }
}
class Routes
{
  public static array $Route = array(
    "" => "Pages/home.php",
    ABOUT => "Pages/about.php",
    OFFER_WEDDING => "Pages/offer-wedding.php",
    OFFER_BIRTHDAY => "Pages/offer-birthday.php",
    OFFER_EVENTS => "Pages/offer-events.php",
    OFFER_LIGHT => "Pages/offer-light.php",
    MEDIA_PHOTO => "Pages/media.php",
    MEDIA_VIDEO => "Pages/media.php",
    CONTACT => "Pages/contact.php",
    PRIVACY => "Pages/privacy.php",
  );

  // Meta dla poszczególnych tras (title, description)
  public static array $Meta = array(
    "" => array(
      "title" => "RBK Events - DJ i Wodzirej z Muzyką na żywo",
      "description" => "Oprawa muzyczna DJ & Live. Łączę nowoczesny styl z wokalem i akordeonem na żywo. Oferuję ciężki dym, iskry i dekoracje światłem. Gramy w całej Polsce. Sprawdź!",
      "keywords" => "dj na wesele, dj z muzyką na żywo, wodzirej z akordeonem, dj z wokalem, nowoczesny dj, michał robak, rbk events, dj cała polska"
    ),
    ABOUT => array(
      "title" => "O mnie - Michał Robak - DJ i Wodzirej na Twoją imprezę | RBK Events",
      "description" => "Poznajmy się! Doświadczenie koncertowe i profesjonalne podejście. Razem z Mateuszem dbamy o każdy detal muzyczny i wizualny. Sprawdź, jak działamy!",
      "keywords" => "michał robak dj, o mnie dj, duet dj i oświetleniowiec, dj śpiewający, akordeonista na wesele, wodzirej, profesjonalny dj muzyka na żywo"
    ),
    OFFER_WEDDING => array(
      "title" => "DJ i Wodzirej z Akordeonem - Wesele w stylu DJ & Live | RBK Events",
      "description" => "Twoje wymarzone wesele z profesjonalną oprawą. Łączę energię DJ-a z wokalem, klawiszami i akordeonem na żywo. Sprawdź moją ofertę!",
      "keywords" => "dj na wesele, dj z muzyką na żywo, ciężki dym wesele, wokal na żywo wesele, wodzirej na wesele, oprawa muzyczna wesela akordeon"
    ),
    OFFER_BIRTHDAY => array(
      "title" => "DJ na urodziny, 18-tkę i jubileusz | RBK Events",
      "description" => "Organizujesz 18-tkę, 40-tkę lub rocznicę? Zapewnię Twoim gościom najlepszą muzykę, zjawiskowe oświetlenie oraz akordeon na żywo. Zapytaj o wolny termin!",
      "keywords" => "dj na urodziny, dj z wokalem na imprezę, oprawa muzyczna osiemnastki, dj na 40 urodziny, dj na 18stke"
    ),
    OFFER_EVENTS => array(
      "title" => "DJ na event firmowy, bankiet i studniówkę | RBK Events",
      "description" => "Prestiżowa oprawa muzyczna dla biznesu i szkół. Elegancja, wyczucie stylu i profesjonalne nagłośnienie. Sprawdź ofertę na bale i konferencje.",
      "keywords" => "dj na event firmowy, dj na studniówkę, oprawa bankietów, imprezy firmowe dj, nagłośnienie eventów, dj muzyka live"
    ),
    OFFER_LIGHT => array(
      "title" => "Dekoracja światłem sali bankietowej | RBK Events",
      "description" => "Pomaluj swoją salę światłem! Nowoczesne oświetlenie LED, oświetlenie architektoniczne i magiczny klimat Twojego przyjęcia. Zapytaj o wycenę!",
      "keywords" => "dekoracje światłem wesele, oświetlenie led sali, oświetlenie architektoniczne"
    ),
    MEDIA_PHOTO => array(
      "title" => "Chwile z parkietu - galeria zdjęć | RBK Events",
      "description" => "Zobacz zdjęcia z naszych realizacji! Spójrz, jak tworzymy unikalny klimat na każdym parkiecie!",
      "keywords" => "galeria zdjęć wesele, zdjęcia dj z wokalem, pełny parkiet, impreza z wodzirejem, zdjęcia z wesela, portfolio"
    ),
    MEDIA_VIDEO => array(
      "title" => "Chwile z parkietu - nagrania wideo | RBK Events",
      "description" => "Poczuj energię na parkiecie! Obejrzyj filmy i przekonaj się, jak wygląda oprawa DJ & Live w praktyce!",
      "keywords" => "wideo z wesela, dj filmy wesele, śpiewający dj wideo, nagrania z imprez muzyka na żywo, dj wodzirej wideo"
    ),
    CONTACT => array(
      "title" => "Kontakt - Zarezerwuj termin | RBK Events",
      "description" => "Masz pytania o termin lub cennik? Wypełnij formularz kontaktowy. Zapewniam dojazd w każde miejsce w Polsce!",
      "keywords" => "kontakt dj, rezerwacja terminu wesele, wolne terminy dj, formularz kontaktowy, dj radomsko, rbk events kontakt"
    ),
    PRIVACY => array(
      "title" => "Polityka prywatności | RBK Events",
      "description" => "Dowiedz się, jak przetwarzamy Twoje dane osobowe na stronie RBK Events. Informacje o formularzu kontaktowym, osadzonych filmach TikTok i plikach cookies.",
      "keywords" => "polityka prywatności, dane osobowe, formularz kontaktowy, cookies, TikTok, RBK Events, dj na wesele"
    ),
  );

  public static function GetMeta(string $route): array
  {
    $route = ($route === "/") ? "" : $route;
    if (isset(self::$Meta[$route])) return self::$Meta[$route];
    // domyślne wartości
    return array(
      "title" => "Błąd 404 - Nie znaleziono strony | RBK Events",
      "description" => "Ups! Ta strona chyba zgubiła rytm. Wróć na stronę główną i sprawdź ofertę oprawy muzycznej na Twoje wydarzenie.",
      "keywords" => "błąd 404, nie znaleziono strony"
    );
  }

  // Flagi dla stron w stanie "soon"
  public static array $Soon = array(
    "" => false,
    ABOUT => false,
    OFFER_WEDDING => false,
    OFFER_BIRTHDAY => false,
    OFFER_EVENTS => false,
    OFFER_LIGHT => false,
    MEDIA_PHOTO => false,
    MEDIA_VIDEO => false,
    CONTACT => false,
    PRIVACY => false,
  );
}
