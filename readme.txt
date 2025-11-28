=== Still Game Quotes ===
Contributors: andydehaney-steven
Tags: still game, quotes, admin, fun, scottish, tv
Requires at least: 5.2
Tested up to: 6.8
Requires PHP: 7.2
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Shows a random quote from the Scottish TV show "Still Game" in the top right of your WordPress admin screens.

== Description ==

Still Game Quotes is a tiny fun plugin inspired by the classic "Hello Dolly" plugin.

When activated, it displays a random quote from the Scottish TV show *Still Game* in the top right corner of your WordPress admin area.

== Installation ==

1. Upload the `still-game-quotes` folder to the `/wp-content/plugins/` directory, or install the plugin zip via the WordPress "Plugins → Add New → Upload Plugin" screen.
2. Activate the plugin through the "Plugins" menu in WordPress.
3. Visit your Dashboard and other admin pages to see a random Still Game quote.

== Frequently Asked Questions ==

= Where do the quotes come from? =

They are hard-coded in the plugin file. You can edit, add, or remove quotes by opening `still-game-quotes.php` and adjusting the `$quotes` array.

= Can I change where the quote appears? =

Yes. The CSS in `sgq_admin_css()` controls the placement. You can edit that function or override it with your own admin CSS.

== Changelog ==

= 1.0.0 =
* Initial release.
