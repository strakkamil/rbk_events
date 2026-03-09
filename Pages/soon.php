<!DOCTYPE html>
<html lang="pl">

<head>
  <?php
  $meta = [
    'title' => 'Nowości w RBK Events - już wkrótce | RBK Events',
    'description' => "Pracujemy nad czymś nowym! Nowe atrakcje i oferta RBK Events już niebawem. Wróć tutaj za tydzień!",
    'keywords' => 'strona w budowie, wkrótce premiera, nowa oferta'
  ];
  include "Partials/head.php";
  ?>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #171113;
      font-family: "Montserrat", sans-serif;
      font-optical-sizing: auto;
      font-weight: 500;
      font-style: normal;
      color: #fff;
      font-size: 22px;
      line-height: 24px;
    }

    main {
      display: flex;
      justify-content: center;
      flex-direction: column;
      align-items: center;
      gap: 30px;
      margin: 50px auto 0;
      max-width: 360px;
    }

    main h1 img {
      text-align: center;
      width: 300px;
      height: auto;
    }

    main p {
      font-size: 36px;
      line-height: 40px;
      text-align: center;
    }

    main .contact {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 20px;
    }

    main .contact a {
      color: #fff;
      text-decoration: none;
    }

    main .contact a:hover {
      text-decoration: underline;
    }

    a {
      color: #fff;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <main>
    <h1 aria-label="RBK Events">
      <img src="/logo-rbk-events.svg" alt="Logo RBK Events" />
    </h1>
    <p>Wkrótce</p>
    <div class="contact">
      <a href="mailto:<?= EMAIL ?>"><?= EMAIL ?></a>
      <a href="tel:<?= PHONE ?>"><?= SHOW_PHONE ?></a>
    </div>
    <a href="/">Wróć</a>
  </main>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "RBK Events",
      "url": "<?= BASE_URL ?>",
      "logo": "<?= BASE_URL ?>/logo-rbk-events.svg"
      ",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+48-518-637-234",
        "contactType": "customer service",
        "availableLanguage": "Polish"
      }
    }
  </script>
</body>

</html>