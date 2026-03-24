<title><?= htmlspecialchars($meta['title'], ENT_QUOTES, 'UTF-8'); ?></title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="<?php echo htmlspecialchars($meta['description'], ENT_QUOTES, 'UTF-8'); ?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($meta['keywords'], ENT_QUOTES, 'UTF-8'); ?>" />
<meta name="robots" content="index, follow">
<meta property="og:title" content="RBK Events - DJ i Wodzirej z Muzyką na żywo" />
<meta property="og:description"
  content="Oprawa muzyczna DJ & Live. Łączę nowoczesny styl z wokalem i akordeonem na żywo. Oferuję ciężki dym, iskry i dekoracje światłem. Gramy w całej Polsce. Sprawdź! "
  .<?= SHOW_PHONE ?> />
<meta property="og:image" content="<?= BASE_URL ?>/assets/images/rbk-events-michal-robak-dj-akordeon-muzyka-live.jpg" />
<meta property="og:url" content="<?= BASE_URL ?>" />
<meta property="og:type" content="website" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="RBK Events - DJ i Wodzirej z Muzyką na żywo" />
<meta name="twitter:description"
  content="Oprawa muzyczna DJ & Live. Łączę nowoczesny styl z wokalem i akordeonem na żywo. Oferuję ciężki dym, iskry i dekoracje światłem. Gramy w całej Polsce. Sprawdź! "
  .<?= SHOW_PHONE ?> />
<meta name="twitter:image" content="<?= BASE_URL ?>/logo-rbk-events.png" />
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/svg+xml" href="/favicon.svg">
<link rel="shortcut icon" href="/favicon.ico">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="192x192" href="/web-app-manifest-192x192.png">
<link rel="icon" type="image/png" sizes="512x512" href="/web-app-manifest-512x512.png">
<link rel="manifest" href="/site.webmanifest">
<meta name="msapplication-TileColor" content="#171113">
<meta name="msapplication-TileImage" content="/apple-touch-icon.png">
<meta name="theme-color" content="#171113">
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
<?php elseif ($current === CONTACT): ?>
  <link rel="stylesheet" href="/assets/css/contact-page.css" />
<?php else: ?>
  <link rel="stylesheet" href="/assets/css/not-found-page.css" />
<?php endif; ?>