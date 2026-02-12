# RBK Events

A modern PHP-based website for RBK Events, featuring dynamic routing, responsive design, and multiple page templates.

## 📁 Project Structure

```
rbk_events/
├── index.php              # Main entry point
├── router.php             # Routing logic and page management
├── site.webmanifest       # PWA manifest
├── assets/
│   ├── css/               # Stylesheets
│   │   ├── style.css      # Global styles
│   │   ├── header.css     # Header styles
│   │   ├── hero.css       # Hero section styles
│   │   ├── home.css       # Home page styles
│   │   ├── about.css      # About page styles
│   │   └── footer.css     # Footer styles
│   ├── images/            # Image assets
│   └── js/
│       └── header.js      # Header functionality
├── Pages/                 # Page templates
│   ├── home.php           # Home page
│   ├── about.php          # About page
│   ├── offer.php          # Offers/Services
│   ├── media.php          # Media gallery
│   ├── contact.php        # Contact page
│   ├── soon.php           # Coming soon page
│   └── 404.php            # Error page
└── Partials/              # Reusable components
    ├── header.php         # Header component
    ├── footer.php         # Footer component
    ├── hero.php           # Hero section component
    └── meta.php           # Meta tags component
```

## 🚀 Features

- **Dynamic Routing System**: Clean URL routing without query strings
- **Modular Components**: Reusable PHP partials for header, footer, and hero sections
- **Responsive Design**: Mobile-friendly CSS styling
- **Coming Soon Feature**: Support for pages marked as "coming soon"
- **Polish Language Support**: Interface in Polish (pl)
- **SEO optimized**: Structured meta tags
- **Error Handling**: Custom 404 error page

## 📄 Pages

| Route      | File                | Description     |
| ---------- | ------------------- | --------------- |
| `/`        | `Pages/home.php`    | Homepage        |
| `/o-mnie`  | `Pages/about.php`   | About page      |
| `/oferta`  | `Pages/offer.php`   | Offers/Services |
| `/media`   | `Pages/media.php`   | Media gallery   |
| `/kontakt` | `Pages/contact.php` | Contact page    |

## 🛠️ How It Works

1. **Entry Point**: All requests are routed through `index.php`
2. **Router**: The `Router` class in `router.php` matches URLs to corresponding page files
3. **Rendering**: Pages are wrapped with header and footer partials
4. **Styling**: CSS is dynamically loaded based on the current page
5. **Soon Pages**: Special handling for pages marked as "coming soon"

## 💻 Requirements

- PHP 7.0 or higher
- Web server with URL rewriting support (for clean URLs)

## 📝 Configuration

### Adding New Pages

1. Create a new file in `Pages/` directory
2. Add the route to `Routes::$Route` in `router.php`:
   ```php
   "/your-page" => "Pages/your-page.php"
   ```

### Marking Pages as Coming Soon

In `router.php`, add the route to `Routes::$Soon`:

```php
public static array $Soon = array(
    "/your-page" => true,  // This page will show the coming soon template
);
```

## 📱 Responsive Design

The project includes media-specific CSS files for optimal viewing on different devices:

- Desktop displays
- Tablets
- Mobile phones

## 🔗 Links

- **Live Demo** - [https://test.rbk-events.pl/](https://test.rbk-events.pl/)
- **Manifest**: `site.webmanifest` - Progressive Web App configuration

---

**Language**: Polish (pl) | **Type**: Website | **Built with**: PHP, HTML, CSS, JavaScript
