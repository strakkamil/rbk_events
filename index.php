<!DOCTYPE html>
<html lang="pl">
<?php
require_once "./router.php";
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RBK Events</title>
</head>

<body>
  <?php
  Router::Run();
  ?>
</body>

</html>