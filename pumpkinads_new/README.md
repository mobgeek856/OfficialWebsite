# PUMPKIN TECHNOLOGY Corporate Website

Single-page corporate website based on `WEBSITE_CREATE.md`. **Pure HTML5 + CSS + JS**—no Node.js. One page with anchor navigation: click **Home**, **Solutions** (with sub-items RTB, Advertiser, HTML5, SDK), **Blog**, or **Contact** to scroll to the corresponding section.

## How to Use

1. **Open directly in browser**  
   Double-click `index.html` or open it from your file manager.

2. **Or use any static server** (optional, for same-origin if needed):
   ```bash
   # Python 3
   python3 -m http.server 8000
   # Then open http://localhost:8000
   ```

No `npm install` or Node.js required.

## Files

| File | Description |
|------|-------------|
| `index.html` | Single page with all sections; nav links use `#home`, `#solutions`, `#blog`, `#contact`, etc. |
| `styles.css` | All styles (layout, header, footer, cards, form, responsive) |
| `script.js` | Smooth scroll for anchor links, mobile menu toggle |
| `assest/page_res/` | Images and assets (referenced by relative path) |
| `privacy-policy.html`, `terms.html`, `cookie-policy.html` | Placeholder legal pages (linked from footer) |

## Assets

Images live in `assest/page_res/` (e.g. `assest/page_res/1/1-1 Home-kv.png`). Replace or add files there; paths in `index.html` are relative.
