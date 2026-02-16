# RBK Events

A PHP-based website for RBK Events, featuring dynamic routing, responsive design, and multiple page templates.

## 🚀 Features

- **Dynamic Routing System**: Clean URL routing without query strings
- **Modular Components**: Reusable PHP partials for header, footer, and hero sections
- **Responsive Design**: Mobile-friendly CSS styling
- **Coming Soon Feature**: Support for pages marked as "coming soon"
- **Polish Language Support**: Interface in Polish (pl)
- **SEO optimized**: Structured meta tags
- **Error Handling**: Custom 404 error page

## 📄 Pages

| Route            | File                | Description     |
| ---------------- | ------------------- | --------------- |
| `/`              | `Pages/home.php`    | Homepage        |
| `/o-mnie`        | `Pages/about.php`   | About page      |
| `/oferta/wesela` | `Pages/offer.php`   | Offers/Services |
| `/media`         | `Pages/media.php`   | Media gallery   |
| `/kontakt`       | `Pages/contact.php` | Contact page    |

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

## 🔗 Links & Resources

- **Live Demo** - [https://test.rbk-events.pl/](https://test.rbk-events.pl/)
- **Manifest**: `site.webmanifest` - Progressive Web App configuration

## 📧 Support

For questions or support, please use the contact form on our website.

## 📄 License

All rights reserved © 2024 RBK Events.

---

**Language**: Polish (pl) | **Type**: Website | **Built with**: PHP, HTML, CSS, JavaScript  
**Last Updated**: February 14, 2026
