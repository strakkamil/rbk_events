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
    CONTACT => "Pages/contact.php",
  );

  // Meta dla poszczególnych tras (title, description)
  public static array $Meta = array(
    "" => array(
      "title" => "RBK Events",
      "description" => "RBK Events - profesjonalny wodzirej i oprawa muzyczna wesel i imprez okolicznościowych. Skontaktuj się: " . SHOW_PHONE . ", " . EMAIL . ".",
      "keywords" => "wodzirej, muzyka weselna, DJ na wesele, oprawa muzyczna, RBK Events, imprezy okolicznościowe"
    ),
    ABOUT => array(
      "title" => "RBK Events - o mnie",
      "description" => "Dowiedz się więcej o RBK Events, doświadczeniu i podejściu do prowadzenia wesel i imprez.",
      "keywords" => "wodzirej, muzyka weselna, DJ na wesele, oprawa muzyczna, RBK Events, imprezy okolicznościowe"
    ),
    OFFER_WEDDING => array(
      "title" => "RBK Events - oferta weselna",
      "description" => "Poznaj ofertę RBK Events: oprawa muzyczna, DJ, prowadzenie wesel i imprez okolicznościowych.",
      "keywords" => "wodzirej, muzyka weselna, DJ na wesele, oprawa muzyczna, RBK Events, imprezy okolicznościowe"
    ),
    OFFER_WEDDING => array(
      "title" => "RBK Events - oferta urodzin i jubileuszy",
      "description" => "Poznaj ofertę RBK Events: oprawa muzyczna, DJ, prowadzenie urodzin i imprez jubileuszowych.",
      "keywords" => "wodzirej, muzyka weselna, DJ na wesele, oprawa muzyczna, RBK Events, imprezy okolicznościowe"
    ),
    OFFER_EVENTS => array(
      "title" => "RBK Events - oferta urodzin i jubileuszy",
      "description" => "Poznaj ofertę RBK Events: oprawa muzyczna, DJ, prowadzenie urodzin i imprez jubileuszowych.",
      "keywords" => "wodzirej, muzyka weselna, DJ na wesele, oprawa muzyczna, RBK Events, imprezy okolicznościowe"
    ),
    OFFER_LIGHT => array(
      "title" => "RBK Events - oferta dekopracji światłem",
      "description" => "Poznaj ofertę RBK Events: oprawa muzyczna, DJ, prowadzenie urodzin i imprez jubileuszowych.",
      "keywords" => "wodzirej, muzyka weselna, DJ na wesele, oprawa muzyczna, RBK Events, imprezy okolicznościowe"
    ),
    MEDIA_PHOTO => array(
      "title" => "RBK Events - media",
      "description" => "Galeria i nagrania z realizacji RBK Events — przykłady prowadzenia i oprawy muzycznej.",
      "keywords" => "wodzirej, muzyka weselna, DJ na wesele, oprawa muzyczna, RBK Events, imprezy okolicznościowe"
    ),
    CONTACT => array(
      "title" => "RBK Events - kontakt",
      "description" => "Skontaktuj się z RBK Events: " . SHOW_PHONE . ", " . EMAIL . "— omówimy szczegóły Twojej imprezy.",
      "keywords" => "wodzirej, muzyka weselna, DJ na wesele, oprawa muzyczna, RBK Events, imprezy okolicznościowe"
    ),
  );

  public static function GetMeta(string $route): array
  {
    $route = ($route === "/") ? "" : $route;
    if (isset(self::$Meta[$route])) return self::$Meta[$route];
    // domyślne wartości
    return array(
      "title" => "RBK Events",
      "description" => "RBK Events - profesjonalny wodzirej i oprawa muzyczna wesel i imprez okolicznościowych. Skontaktuj się: " . SHOW_PHONE . ", " . EMAIL . ".",
      "keywords" => "wodzirej, muzyka weselna, DJ na wesele, oprawa muzyczna, RBK Events, imprezy okolicznościowe"
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
    MEDIA_VIDEO => true,
    CONTACT => true,
  );
}
