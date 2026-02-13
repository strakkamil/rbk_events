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
    (file_exists("./Pages/404.php")) ?  require_once "./Pages/404.php" : http_response_code(404);
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
    "/o-mnie" => "Pages/about.php",
    "/oferta" => "Pages/offer.php",
    "/media" => "Pages/media.php",
    "/kontakt" => "Pages/contact.php",
  );

  // Meta dla poszczególnych tras (title, description)
  public static array $Meta = array(
    "" => array(
      "title" => "RBK Events",
      "description" => "RBK Events - profesjonalny wodzirej i oprawa muzyczna wesel i imprez okolicznościowych. Skontaktuj się: 518 637 234, " . EMAIL . ".",
      "keywords" => "wodzirej, muzyka weselna, DJ na wesele, oprawa muzyczna, RBK Events, imprezy okolicznościowe"
    ),
    "/o-mnie" => array(
      "title" => "RBK Events - o mnie",
      "description" => "Dowiedz się więcej o RBK Events, doświadczeniu i podejściu do prowadzenia wesel i imprez.",
      "keywords" => "wodzirej, muzyka weselna, DJ na wesele, oprawa muzyczna, RBK Events, imprezy okolicznościowe"
    ),
    "/oferta" => array(
      "title" => "RBK Events - oferta",
      "description" => "Poznaj ofertę RBK Events: oprawa muzyczna, DJ, prowadzenie wesel i imprez okolicznościowych.",
      "keywords" => "wodzirej, muzyka weselna, DJ na wesele, oprawa muzyczna, RBK Events, imprezy okolicznościowe"
    ),
    "/media" => array(
      "title" => "RBK Events - media",
      "description" => "Galeria i nagrania z realizacji RBK Events — przykłady prowadzenia i oprawy muzycznej.",
      "keywords" => "wodzirej, muzyka weselna, DJ na wesele, oprawa muzyczna, RBK Events, imprezy okolicznościowe"
    ),
    "/kontakt" => array(
      "title" => "RBK Events - kontakt",
      "description" => "Skontaktuj się z RBK Events: 518 637 234," . EMAIL . "— omówimy szczegóły Twojej imprezy.",
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
      "description" => "RBK Events - profesjonalny wodzirej i oprawa muzyczna wesel i imprez okolicznościowych. Skontaktuj się: 518 637 234, " . EMAIL . ".",
      "keywords" => "wodzirej, muzyka weselna, DJ na wesele, oprawa muzyczna, RBK Events, imprezy okolicznościowe"
    );
  }

  // Flagi dla stron w stanie "soon"
  public static array $Soon = array(
    "/o-mnie" => false,
    "/oferta" => true,
    "/media" => true,
    "/kontakt" => true,
  );
}