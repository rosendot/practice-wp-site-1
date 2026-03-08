# WordPress + Bedrock Practice Site

## Project Overview
A practice WordPress site built with Bedrock for learning WordPress theme development and agency workflows. The site is a restaurant theme with custom post types.

## Tech Stack
- **WordPress** via Bedrock (Roots)
- **PHP 8.5** — theme development
- **Composer** — dependency management (WordPress core, plugins)
- **LocalWP** — local development server
- **Nginx** — web server (via LocalWP)
- **MySQL 8.0** — database (via LocalWP)

## Key Paths
- Theme files: `web/app/themes/my-theme/`
- Bedrock config: `config/application.php`
- Environment config: `.env` (never commit)
- WordPress core: `web/wp/` (gitignored, managed by Composer)
- Plugins: `web/app/plugins/` (gitignored, managed by Composer)

## Local Environment
- LocalWP site: `practice-wp-site-1.local`
- WP Admin: `practice-wp-site-1.local/wp/wp-admin`
- LocalWP site folder: `C:\Users\Rosendo Torres\Local Sites\practice-wp-site-1\`
- Nginx config: `Local Sites\practice-wp-site-1\conf\nginx\site.conf.hbs` (webroot set to `{{root}}/web`)
- Database: `local` on `localhost:10005` (user: root, pass: root)

## Conventions
- All custom code goes in `web/app/themes/my-theme/`
- Use WordPress coding standards for PHP (spaces, not tabs in PHP; snake_case for functions)
- Escape all output in templates: `esc_html()`, `esc_attr()`, `esc_url()`
- Use nonces for form security
- Plugins are added via Composer: `composer require wpackagist-plugin/plugin-name`
- Never edit WordPress core files or anything in `web/wp/`

## Git Rules
- Never commit `.env` files
- Never commit `vendor/` or `web/wp/`
- Commit messages: short imperative style ("Add hero section", "Fix nav styling")
- The `.gitignore` is pre-configured by Bedrock — trust it
