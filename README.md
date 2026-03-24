# La Mesa — Practice Restaurant Website

A practice WordPress site built with Bedrock for learning theme development and agency workflows. The site is a Mexican restaurant theme with custom post types, taxonomy-based menu organization, and a multi-section home page.

## Tech Stack

- **WordPress** via [Bedrock](https://roots.io/bedrock/) (Roots)
- **PHP 8.5**
- **Composer** — dependency management (WordPress core + plugins)
- **LocalWP** — local development server (Nginx + MySQL 8.0)
- **MySQL** on `localhost:10005`

## Local Setup

1. Clone the repo
2. Run `composer install`
3. Copy `.env.example` to `.env` and fill in database credentials
4. Point LocalWP (or your server) webroot to the `web/` directory
5. Activate the `my-theme` theme in WP Admin

## Project Structure

```
config/
  application.php        # Bedrock config (DB, URLs, salts)
  environments/          # Per-environment overrides
web/
  app/
    themes/my-theme/     # All custom theme code lives here
      style.css          # Full stylesheet (CSS custom properties, BEM)
      functions.php      # Theme setup, CPTs, taxonomies, meta boxes
      header.php         # Sticky navbar with nav menu + Order Online CTA
      footer.php         # 3-column footer (contact, brand, hours)
      front-page.php     # Home page (4 sections)
      page-menu.php      # Full menu grouped by category
      page-about.php     # About page (story, values, CTA)
      assets/js/main.js  # Mobile nav toggle, infinite carousels with swipe
    mu-plugins/          # Bedrock autoloader
    plugins/             # Composer-managed (gitignored)
  wp/                    # WordPress core (gitignored)
```

## Theme Features

### Pages
- **Home** — Hero (with welcome text overlay), fan favorites carousel, visit us (with Google Maps embed), photo gallery carousel
- **Menu** — Items grouped by `menu_category` taxonomy with prices and descriptions
- **About** — Story section, values cards, CTA

### Custom Post Types
- **Menu Items** (`menu_item`) — Each item has a title, featured image, price (custom field), and description (custom field)

### Taxonomies
- **Menu Categories** (`menu_category`) — Hierarchical categories: Tacos, Burritos, Quesadillas, Enchiladas, Tortas, Flautas, Sopas y Caldos, Sides, Bebidas, Desayuno, Postres

### Design
- Mexican restaurant color scheme (red `#b42318`, gold `#d4a017`, dark `#1a1208`, cream `#faf6f0`)
- Georgia serif headings, Inter sans-serif body
- Mobile-first responsive (breakpoints at 480px, 768px)
- BEM class naming throughout
- CSS custom properties for all colors, fonts, spacing

## What Was Built

1. **Bedrock setup** — Composer project, `.env` config, Nginx webroot pointed to `web/`
2. **Custom theme** (`my-theme`) — From scratch, no starter theme
3. **Custom post type + taxonomy** — `menu_item` with `menu_category` for organizing the restaurant menu
4. **Meta boxes** — Price and description fields with nonce verification and sanitization
5. **Navigation** — `register_nav_menus()` with primary and footer locations, set up through WP Admin
6. **50+ menu items** — Bulk-inserted via SQL with prices, descriptions, and category assignments
7. **Multi-section home page** — Hero with welcome overlay, fan favorites infinite carousel (8 items, arrows + dots + swipe), visit us with embedded Google Map, photo gallery carousel
8. **Responsive design** — Mobile nav toggle, grid collapses, font scaling, touch swipe on carousels

## Database Seeding

Menu items were bulk-inserted via SQL directly into the LocalWP MySQL database (`localhost:10005`). Categories, prices, descriptions, and taxonomy relationships were all set up in one script. The original Quesadilla item was created manually through WP Admin as a learning exercise.
