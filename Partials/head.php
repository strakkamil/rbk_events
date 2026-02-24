<title><?= htmlspecialchars($meta['title'], ENT_QUOTES, 'UTF-8'); ?></title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="<?php echo htmlspecialchars($meta['description'], ENT_QUOTES, 'UTF-8'); ?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($meta['keywords'], ENT_QUOTES, 'UTF-8'); ?>" />
<meta name="robots" content="index, follow">
<meta property="og:title" content="RBK Events – Wodzirej i oprawa muzyczna wesel" />
<meta property="og:description" content="Profesjonalna oprawa muzyczna i prowadzenie wesel. Skontaktuj się: "
  .<?= SHOW_PHONE ?> />
<meta property="og:image" content="<?= BASE_URL ?>/logo-rbk-events.svg" />
<meta property="og:url" content="<?= BASE_URL ?>" />
<meta property="og:type" content="website" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="RBK Events – Wodzirej i oprawa muzyczna wesel" />
<meta name="twitter:description" content="Profesjonalna oprawa muzyczna i prowadzenie wesel. Skontaktuj się: "
  .<?= SHOW_PHONE ?> />
<meta name="twitter:image" content="<?= BASE_URL ?>/logo-rbk-events.svg" />
<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<?php if ($current === '/'): ?>
  <link rel="stylesheet" href="/assets/css/home-page.css" />
<?php elseif ($current === ABOUT): ?>
  <link rel="stylesheet" href="/assets/css/about-page.css" />
<?php elseif (in_array($current, [OFFER_WEDDING, OFFER_BIRTHDAY, OFFER_EVENTS])): ?>
  <link rel="stylesheet" href="/assets/css/offer-nav-page.css" />
<?php elseif ($current === OFFER_LIGHT): ?>
  <link rel="stylesheet" href="/assets/css/offer-page.css" />
<?php elseif (in_array($current, [MEDIA_PHOTO, MEDIA_VIDEO])): ?>
  <link rel="stylesheet" href="/assets/css/media-page.css" />
<?php elseif ($current === PRIVACY): ?>
  <link rel="stylesheet" href="/assets/css/privacy-page.css" />
<?php else: ?>
  <link rel="stylesheet" href="/assets/css/not-found-page.css" />
<?php endif; ?>