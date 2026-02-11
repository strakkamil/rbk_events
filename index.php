<!DOCTYPE html>
<html lang="pl">
<?php
require_once "./router.php";

// Sprawdź czy to strona soon - jeśli tak, wyświetl ją bez headera/footera
$current = strtok($_SERVER["REQUEST_URI"], '?');
$meta = Routes::GetMeta($current);
if (isset(Routes::$Soon[$current]) && Routes::$Soon[$current]) {
  if (file_exists("./Pages/soon.php")) {
    require "./Pages/soon.php";
  }
  exit;
}
?>

<head>
  <?php
  include "Partials/meta.php";
  ?>
  <link rel="stylesheet" href="/assets/css/style.css" />
  <link rel="stylesheet" href="/assets/css/header.css" />
  <link rel="stylesheet" href="/assets/css/hero.css" />
  <?php if ($current === '/'): ?>
    <link rel="stylesheet" href="/assets/css/home.css" />
  <?php endif; ?>
  <link rel="stylesheet" href="/assets/css/footer.css" />
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