# RBK Events

A PHP-based website for RBK Events, featuring dynamic routing, responsive design, and multiple page templates.

## 🚀 Features

- **Dynamic Routing System**: Clean URL routing without query strings
- **Modular Components**: Reusable PHP partials for header, footer, hero, and media sections
- **Responsive Design**: Mobile-friendly CSS styling
- **Coming Soon Feature**: Support for pages marked as "coming soon"
- **Cookie Consent Banner**: GDPR-style consent management for statistic and marketing cookies
- **Contact Form**: PHPMailer-powered form with CSRF protection and honeypot spam filter
- **Polish Language Support**: Interface in Polish (pl)
- **SEO Optimized**: Per-route meta tags, Open Graph/Twitter cards, canonical URLs, sitemap and robots.txt
- **Error Handling**: Custom 404 error page

## 🛠️ How It Works

1. **Entry Point**: All requests are routed through `index.php`
2. **Router**: The `Router` class in `router.php` matches URLs to corresponding page files and resolves per-route SEO meta data
3. **Rendering**: Pages are wrapped with header, cookie consent banner, and footer partials
4. **Styling**: CSS is dynamically loaded based on the current page, compiled from SCSS via Sass
5. **Soon Pages**: Special handling for pages marked as "coming soon"
6. **Contact Form**: Submissions are sent via `send.php` using PHPMailer over SMTP, validated with a CSRF token and honeypot field

## 💻 Requirements

- PHP 7.4 or higher
- Composer (for PHPMailer and phpdotenv dependencies)
- Node.js + npm (for compiling SCSS with Sass)
- Web server with URL rewriting support (for clean URLs)

## ⚙️ Setup

1. Install PHP dependencies:
   ```bash
   composer install
   ```
2. Install Node dependencies and build the stylesheets:
   ```bash
   npm install
   npm run watch
   ```
3. Create a `.env` file in the project root with your SMTP credentials (used by `send.php`):
   ```env
   SMTP_HOST=smtp.example.com
   SMTP_PASSWORD=your-password
   ```

## 📝 Configuration

### Adding New Pages

1. Define a route constant in `config.php`:
   ```php
   define('YOUR_PAGE', "/your-page");
   ```
2. Create a new file in the `Pages/` directory
3. Register the route and its SEO meta data in `router.php`:
   ```php
   public static array $Route = array(
       // ...
       YOUR_PAGE => "Pages/your-page.php",
   );

   public static array $Meta = array(
       // ...
       YOUR_PAGE => array(
           "title" => "...",
           "description" => "...",
           "keywords" => "...",
       ),
   );
   ```

### Marking Pages as Coming Soon

In `router.php`, set the route's flag in `Routes::$Soon`:

```php
public static array $Soon = array(
    YOUR_PAGE => true, // This page will show the coming soon template
);
```

## 📱 Responsive Design

The project includes media-specific CSS files for optimal viewing on different devices:

- Desktop displays
- Tablets
- Mobile phones

## 🔗 Links & Resources

- **Live Site**: [https://rbk-events.pl/](https://rbk-events.pl/)
- **Manifest**: `site.webmanifest` - Progressive Web App configuration

## 📧 Support

For questions or support, please use the contact form on our website.

## 📄 License

All rights reserved © 2026 RBK Events.

---

**Language**: Polish (pl) | **Type**: Website | **Built with**: PHP, HTML, SCSS/CSS, JavaScript
