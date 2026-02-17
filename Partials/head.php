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
<link rel="icon" href="/favicon.ico" sizes="any" />
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16png" />
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
<link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png" />
<link rel="icon" type="image/png" sizes="512x512" href="/android-chrome-512x512.png" />
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
<?php if ($current === '/'): ?>
<link rel="stylesheet" href="/assets/css/home-page.css" />
<?php elseif ($current === ABOUT): ?>
<link rel="stylesheet" href="/assets/css/about-page.css" />
<?php elseif (in_array($current, [OFFER_WEDDING, OFFER_BIRTHDAY, OFFER_EVENTS])): ?>
<link rel="stylesheet" href="/assets/css/offer-nav-page.css" />
<?php elseif ($current === OFFER_LIGHT): ?>
<link rel="stylesheet" href="/assets/css/offer-page.css" />
<?php elseif ($current === MEDIA_PHOTO): ?>
<link rel="stylesheet" href="/assets/css/media-page.css" />
<?php else: ?>
<link rel="stylesheet" href="/assets/css/not-found-page.css" />
<?php endif; ?>