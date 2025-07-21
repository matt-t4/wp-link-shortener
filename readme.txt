=== link_shortener ===
Contributors: Matt
Tags: affiliate, link shortener, redirect, URL shortener, affiliate marketing
Requires at least: 5.0
Tested up to: 6.6
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A simple WordPress plugin to create short URLs for affiliate links using a text file. Users manually edit urls.txt to map long URLs to 5-digit codes, and the plugin handles redirects for /to/{code} URLs.

== Description ==

The **Link Shortener Plugin** allows you to create short, clean URLs (e.g., `https://your-site.com/to/aeg25`) for long affiliate links or other URLs. Perfect for affiliate marketers, this plugin makes links more user-friendly and shareable, helping drive traffic and boost click-through rates.

Turn this: https://www.amazon.com/dp/1401971369?tag=affid123
Into this: https://your-website.com/to/xyz89

IN urls.txt, put this: https://www.amazon.com/dp/1401971369?tag=affid123;xyz89

The ;xyz89 goes after the target url.

WP File Manager plugin: Use this plugin to edit urls.txt in the data folder. Navigate to urls.txt. Right click on it. Select edit.
Any WordPress file manager plugin with editing capabilities will work.
You can also use any file editor on your PC and upload it.

On your WordPress post or page, use ../to/xyz89 instead of https://www.amazon.com/dp/1401971369?tag=affid123.
So the link changes to this: ../to/xyz89.
../to/xyz89 gets automatically changed into this: https://your-website.com/to/xyz89
When you click on the link,https://your-website.com/to/xyz89 gets changed to this: https://www.amazon.com/dp/1401971369?tag=affid123

Where did xyz89 come from? You just make up some 5-digit alphanumeric code.

Concerning ../to/xyz89: 
If you enter the 5-digit alphanumeric code incorrectly, then you will get a special error page.
If you enter /t/ or /too/, then you will get the special error page.
Otherwise, you will get a generic error page if there are url issues.

Grok AI
### Features
- **Manual URL Mapping**: Add long URLs and 5-digit alphanumeric codes to `urls.txt` in the plugin's `data/` directory.
- **Redirect Handling**: Automatically redirects `/to/{code}` URLs to the original URL using a 301 redirect.
- **Error Page**: Displays a styled error page for invalid short codes.
- **No Admin Panel**: Simple setup by editing a text file, ideal for beginners.
- **Affiliate Marketing Friendly**: Cloaks complex affiliate links to improve trust and shareability.

### Why Use This Plugin?
- **Increase Clicks**: Clean URLs are more appealing, encouraging clicks on affiliate links.
- **SEO Benefits**: Short, shareable URLs drive referral traffic from social media, improving dwell time and SEO.
- **Lightweight**: Minimal code with no database or JavaScript, ensuring fast performance.

== Installation ==

1. **Download and Install**:
   - Download the plugin zip file.
   - Upload it to your WordPress site via Plugins > Add New > Upload Plugin.
   - Activate the plugin.

2. **Edit urls.txt**:
   - Locate the `urls.txt` file in `wp-content/plugins/link_shortener/data/`.
   - Add one URL mapping per line in the format: `original_url;short_code`
     - Example: `https://my-affiliate-url.com/?code=my-affiliate-code;aeg25`
   - Ensure short codes are exactly 5 alphanumeric characters (e.g., `aeg25`, `xyz89`).
   - Save the file.

3. **Use Short URLs**:
   - Copy the short URL (e.g., `https://your-site.com/to/aeg25`) and use it in posts, pages, or social media.
   - The plugin redirects `/to/aeg25` to the original URL.

4. **Test**:
   - Visit a short URL (e.g., `https://your-site.com/to/aeg25`) to confirm it redirects correctly.
   - Test an invalid URL (e.g., `/to/invalid`) to see the error page.

== Frequently Asked Questions ==

= How do I add a new short URL? =
Edit `urls.txt` in the plugin's `data/` directory. Add a new line with the format `original_url;short_code`, ensuring the short code is 5 alphanumeric characters. Save the file.

= Can I use this for non-affiliate links? =
Yes, the plugin works with any valid URL (starting with `http://` or `https://`).

= What happens if I enter an invalid short code? =
The plugin displays a styled error page with a link to your homepage.

= Do I need to add affiliate disclosures? =
Yes, for affiliate links, include FTC-compliant disclosures in your content (e.g., in posts or pages), as the plugin does not manage disclosures.

= Can I track clicks? =
This version does not include click tracking. Check out advanced tutorials for adding analytics.

== Changelog ==

= 1.0 =
* Initial release.

== Upgrade Notice ==

= 1.0 =
Initial release. No upgrades needed.

== Affiliate Marketing Tips ==
- Use short URLs in social media posts to drive referral traffic.
- Ensure affiliate links are valid to avoid broken redirects.
- Add clear disclosures (e.g., "This is an affiliate link") to comply with FTC guidelines.
- Test short URLs regularly to ensure they work as expected.