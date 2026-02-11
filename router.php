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
            include "Partials/header.php";
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

  // Flagi dla stron w stanie "soon"
  public static array $Soon = array(
    "/o-mnie" => true,
    "/oferta" => true,
    "/media" => true,
    "/kontakt" => true,
  );
}
