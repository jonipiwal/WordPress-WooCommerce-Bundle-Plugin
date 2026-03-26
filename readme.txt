=== WooCommerce Bundle Plugin ===
Contributors: softbourne
Tags: woocommerce, bundle, product, shortcode
Requires at least: 5.8
Tested up to: 6.7
Requires PHP: 7.4
Stable tag: 2.2.0
License: GPLv2 or later

WooCommerce products ke liye Bundle Product functionality.

== Description ==

Admin mein professional repeater builder se bundle items configure karo. Frontend par [wc_bundle] shortcode se display karo. Order ke saath automatically bundle details bhi jaati hain.

== Shortcodes ==

[wc_bundle]
Current product ka bundle display karta hai. Product page par use karo.

[wc_bundle id="123"]
Kisi bhi page par specific product ID ka bundle show karo.

[setwear_bundle]
Backward compatibility – same output deta hai.

== Features ==

* Drag-and-drop item reordering (jQuery UI Sortable)
* Rich text description (Bold, Italic, Underline, Color)
* Per-item Size & Color variants with custom dropdowns
* Media Library image upload per item
* Read More / Read Less toggle on frontend (2-line clamp)
* Order ke saath bundle contents automatically jaate hain
* Admin order page par bundle items table mein dikhte hain
* Custom Post Type: sbp_bundle (WooCommerce menu ke andar)
* Plugin Info Page: WooCommerce > Bundle Plugin Info
* Responsive – mobile friendly

== Order Meta ==

Checkout par in details ka record automatically order ke saath save hota hai:
- Bundle Item Titles
- Sizes (agar set ki hain)
- Colors (agar set ki hain)

Admin > Orders > Order detail > Bundle Contents table mein dekhein.

== Admin Info Page ==

WooCommerce > Bundle Plugin Info par jaen:
- Saare shortcodes ki list
- Step-by-step usage guide
- Design specs
- Plugin version info

== Installation ==

1. Plugin folder ko /wp-content/plugins/ mein upload karo
2. WordPress admin mein plugin activate karo
3. WooCommerce > Products mein product open karo
4. Bundle Product meta-box enable karo
5. Bundle items add karo
6. Product description mein [wc_bundle] shortcode add karo

== Changelog ==

= 2.2.0 =
* NEW: Order ke saath bundle details automatically jaati hain
* NEW: Admin order page par bundle contents table
* NEW: Custom Post Type sbp_bundle
* NEW: Plugin Info & Shortcode reference page (WooCommerce menu mein)
* FIX: Frontend items se border-radius hataya
* FIX: Main box ka border-radius hataya (sirf top border accent raha)

= 2.1.0 =
* Professional admin UI with repeater builder
* Rich text description editor
* Sizes and colors variants
* Drag-and-drop reordering

= 2.0.0 =
* Initial release

== Author ==

Softbourne Technologies
https://softbourne.com
