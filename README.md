# WordPress Link Shortener Plugin

A simple WordPress plugin for affiliate marketers to create short URLs (e.g., `https://your-site.com/to/aeg25`) from long affiliate links using a text file. No admin panel or database required, making it beginner-friendly and lightweight. Perfect for driving traffic with clean, shareable URLs.

## Features
- **Short URLs**: Turn long affiliate links into short URLs (e.g., `/to/xyz89`) for better click-through rates.
- **Text File Storage**: Store URL mappings in `data/urls.txt` (format: `original_url;short_code`).
- **Custom Error Page**: Displays a styled error page for invalid URLs (e.g., `/to/invalid`, `/t/xyz89`).
- **Affiliate Marketing**: Cloaks complex affiliate links, improving trust and shareability.
- **SEO Benefits**: Short URLs are shareable on social media, driving referral traffic.

## Installation
1. **Download**: Clone or download this repository as a zip file.
2. **Install**:
   - Upload the `wp-link-shortener` folder to `wp-content/plugins/` on your WordPress site.
   - Activate the plugin in WordPress under Plugins > Installed Plugins.
3. **Configure**:
   - Open `data/urls.txt` in a text editor or via FTP.
   - Add URL mappings in the format: `original_url;short_code` (e.g., `https://my-affiliate-url.com/?code=aff123;aeg25`).
   - Ensure short codes are 5 alphanumeric characters (e.g., `xyz89`).
4. **Use**:
   - Use short URLs (e.g., `https://your-site.com/to/aeg25`) in posts, pages, or social media.
   - Test redirects and error pages (e.g., `/to/invalid`).

## Requirements
- WordPress 5.0 or higher (tested up to 6.6).
- PHP with file I/O support (standard in most hosting environments).

## Usage
- Edit `data/urls.txt` to add your affiliate links and unique 5-character codes.
- Example:
 https://www.google.com;xyz89
 https://my-affiliate-url.com/?code=aff123;aeg25
 
 - Visit `https://your-site.com/to/xyz89` to redirect to the original URL.
- Invalid URLs (e.g., `/to/invalid`, `/t/xyz89`) show a styled error page.

## Affiliate Marketing Tips
- Use short URLs in social media posts to increase clicks and referral traffic.
- Add FTC-compliant disclosures (e.g., "This is an affiliate link") in your content.
- Test URLs regularly to ensure they redirect correctly.

## Tutorial
Watch the YouTube tutorial for a step-by-step guide: [Insert YouTube link here].
Created by Matt for affiliate marketers learning WordPress plugin development.

## Contributing
Feel free to fork this repository and submit pull requests for improvements (e.g., adding click tracking or an admin panel).

## License
GPLv2 or later. See [LICENSE](http://www.gnu.org/licenses/gpl-2.0.html).

## Credits
Developed by Matt. Inspired by the need for simple, effective tools for affiliate marketers.

