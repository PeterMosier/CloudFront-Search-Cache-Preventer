# CloudFront Search Cache Preventer | Wordpress Custom Plugin | PHP

Sends HTTP headers to force CloudFront and browsers NOT to cache search results. Prevents SEO spam cache poisoning.

## Version 1.0

Created for the website https://untamedframes.ca to prevent AWS CloudFront from caching search page results.

This is a Wordpress custom plugin (PHP).

## ⚙️ Installation: How To Upload this Custom Plugin to Wordpress

Reminder: The plugin name and version are stored in the header of the .PHP file, so the file names below are merely suggestions to keep things tidy.

Reminder: If using **Wordpress Bitnami Multisite** you can only add plugins from **Network Admin**

1. Copy the `untamed-search-no-cache.php` file to a new folder on your computer. A good (but not mandatory) folder name is `untamed-search-no-cache`
2. Zip up that folder. A good (but not mandatory) name for the zip is `untamed-search-no-cache-v10.zip`
3. In Wordpress Plugins page: **Add Plugin** > **Upload Plugin** > **Choose File**
4. Activate the Plugin. If using Multisite, you can either **Network Activate** for all sites, or enable individually on a particular site's Plugin page.
