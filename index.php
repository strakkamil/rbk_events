<!DOCTYPE html>
<html lang="pl">
<?php
require_once "./router.php";

// Sprawdź czy to strona soon - jeśli tak, wyświetl ją bez headera/footera
$current = strtok($_SERVER["REQUEST_URI"], '?');
if (isset(Routes::$Soon[$current]) && Routes::$Soon[$current]) {
  if (file_exists("./Pages/soon.php")) {
    require "./Pages/soon.php";
  }
  exit;
}
?>

<head>
  <meta charset="UTF-8">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RBK Events</title>
  <meta
    name="description"
    content="RBK Events - profesjonalny wodzirej i oprawa muzyczna wesel i imprez okolicznościowych. Skontaktuj się: 518 637 234, kontakt.rbkevents@gmail.com." />
  <meta
    name="keywords"
    content="wodzirej, muzyka weselna, DJ na wesele, oprawa muzyczna, RBK Events, imprezy okolicznościowe" />
  <link rel="stylesheet" href="/assets/css/style.css" />
  <link rel="stylesheet" href="/assets/css/header.css" />
  <?php if ($current === '/'): ?>
    <link rel="stylesheet" href="/assets/css/home.css" />
  <?php endif; ?>
  <link rel="stylesheet" href="/assets/css/footer.css" />
  <link rel="icon" href="/favicon.ico" sizes="any" />

  <!-- PNG -->
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16png" />
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="192x192"
    href="/android-chrome-192x192.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="512x512"
    href="/android-chrome-512x512.png" />

  <!-- Apple -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />

  <!-- Manifest dla PWA -->
  <link rel="manifest" href="/site.webmanifest" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Montserrat:wght@100..900&display=swap"
    rel="stylesheet" />
  <!-- <link rel="preload" as="image" href="assets/images/hero.webp" /> -->
  <!-- Open Graph -->
  <meta
    property="og:title"
    content="RBK Events – Wodzirej i oprawa muzyczna wesel" />
  <meta
    property="og:description"
    content="Profesjonalna oprawa muzyczna i prowadzenie wesel. Skontaktuj się: 518 637 234" />
  <meta
    property="og:image"
    content="https://rbk-events.pl/rbkevents-logo.webp" />
  <meta property="og:url" content="https://rbk-events.pl" />
  <meta property="og:type" content="website" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta
    name="twitter:title"
    content="RBK Events – Wodzirej i oprawa muzyczna wesel" />
  <meta
    name="twitter:description"
    content="Profesjonalna oprawa muzyczna i prowadzenie wesel. Skontaktuj się: 518 637 234" />
  <meta
    name="twitter:image"
    content="https://rbk-events.pl/rbkevents-logo.webp" />
</head>

<body>
  <?php
  include "Partials/header.php";
  Router::Run();
  include "Partials/footer.php";
  ?>
  <script src="assets/js/header.js"></script>
</body>

</html>