<!DOCTYPE html>
<html lang="pl">

<head>
  <?php
  include "Partials/meta.php";
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
      filter: invert(1) brightness(2);
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
      <img src="rbkevents-logo.webp" alt="Logo RBK Events" />
    </h1>
    <p>Wkrótce</p>
    <div class="contact">
      <a href="mailto:kontakt.rbkevents@gmail.com">kontakt.rbkevents@gmail.com</a>
      <a href="tel:518637234">518 637 234</a>
    </div>
    <a href="/">Powrót</a>
  </main>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "RBK Events",
      "url": "https://rbk-events.pl",
      "logo": "https://rbk-events.pl/rbkevents-logo.webp"
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