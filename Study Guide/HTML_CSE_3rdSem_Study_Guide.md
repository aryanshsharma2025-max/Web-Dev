# Web Technologies (HTML5) Complete Tags & Attributes Reference Guide
**Degree:** Bachelor of Engineering (B.E.) / B.Tech in Computer Science & Engineering (CSE)  
**Subject:** Web Technologies / Web Programming (3rd/4th Semester Curriculum)  
**Standard:** Complete W3C / WHATWG HTML5 Specifications

---

# MODULE 1: DOCUMENT STRUCTURE & METADATA TAGS

### 1.1 `<html>`

#### 1. Tag Name
* **Tag Name:** `<html>`
* **Opening & Closing Form:** `<html>...</html>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<html>` element is the root element of an HTML document. All other HTML tags, elements, and content must be enclosed within this element.

#### 3. Purpose / Function
Serves as the outer container holding both metadata (`<head>`) and body content (`<body>`). Instructs browser parsers that the file contains standard HTML markup.

#### 4. Syntax
```html
<html lang="en">
  <head>...</head>
  <body>...</body>
</html>
```

#### 5. Basic Example
```html
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>VTU CSE Portal</title>
</head>
<body>
  <h1>Welcome Students</h1>
</body>
</html>
```

#### 6. Output
Renders the root HTML document. The `<html>` tag itself has no visual box appearance.

#### 7. Exhaustive Attributes Reference Table
| Attribute | Description | Valid Values | Required/Optional |
| --- | --- | --- | --- |
| `lang` | Specifies the primary natural language of the document content for search engines and screen readers. | Language codes (`en`, `en-US`, `hi`, `fr`) | Recommended |
| `dir` | Specifies text directionality inside the document. | `ltr` (Left-to-Right), `rtl` (Right-to-Left), `auto` | Optional |
| `xmlns` | XML Namespace declaration required when parsing document as XHTML. | `http://www.w3.org/1999/xhtml` | Optional |
| `manifest` | Path to offline application cache manifest file. | URL string | Obsolete in HTML5 |

#### 8. Attribute Code Example
```html
<html lang="en-US" dir="ltr">
```

#### 9. Real-World Case Study / Example
* **Case Study:** Used as the root container on every web document globally.
```html
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <!-- Complete web portal -->
</html>
```

#### 10. Important Notes
Must contain exactly one `<head>` element followed by0 exactly one `<body>` element.

#### 11. Related Tags
Parent element of `<head>` and `<body>`. Child of `<!DOCTYPE html>`.

#### 12. Deprecated / Obsolete Status
**Standard HTML5 Tag.** `manifest` attribute is obsolete in HTML5.

---

### 1.2 `<head>`

#### 1. Tag Name
* **Tag Name:** `<head>`
* **Opening & Closing Form:** `<head>...</head>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<head>` element is a container for document metadata (data about the HTML document) that is processed by the browser and search engines.

#### 3. Purpose / Function
Contains document settings, character encoding, title bar text, external CSS links, inline styles, and JavaScript scripts before the body loads.

#### 4. Syntax
```html
<head>
  <meta charset="UTF-8">
  <title>Page Title</title>
</head>
```

#### 5. Basic Example
```html
<head>
  <meta charset="UTF-8">
  <title>CSE Web Tech Assignment</title>
  <link rel="stylesheet" href="style.css">
</head>
```

#### 6. Output
Invisible on the webpage body canvas. Configures background document metadata and browser tab settings.

#### 7. Exhaustive Attributes Reference Table
| Attribute | Description | Valid Values | Required/Optional |
| --- | --- | --- | --- |
| `profile` | Specifies URL to a metadata profile dictionary. | URL string | Obsolete in HTML5 |
| Global Attributes | Standard global attributes (`id`, `class`, `lang`, `dir`). | Standard global values | Optional |

#### 8. Attribute Code Example
```html
<head lang="en">
```

#### 9. Real-World Case Study / Example
* **Case Study:** Used in every web page to load styles, SEO tags, and scripts.
```html
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Department Portal</title>
</head>
```

#### 10. Important Notes
Must be placed immediately after `<html>` and before `<body>`.

#### 11. Related Tags
Contains `<title>`, `<meta>`, `<link>`, `<style>`, `<script>`, `<base>`.

#### 12. Deprecated / Obsolete Status
**Standard HTML5 Tag.** Core structural metadata container.

---

### 1.3 `<title>`

#### 1. Tag Name
* **Tag Name:** `<title>`
* **Opening & Closing Form:** `<title>...</title>`
* **Tag Type:** Paired Tag

#### 2. Definition
The `<title>` element specifies the title of the document shown in the browser's title bar or page tab.

#### 3. Purpose / Function
Displays text in browser tabs, provides the default name when bookmarking a page, and serves as the main heading in search engine result pages (SERPs).

#### 4. Syntax
```html
<title>Title Text</title>
```

#### 5. Basic Example
```html
<title>Web Technologies Lab | 3rd Sem CSE</title>
```

#### 6. Output
Displays "Web Technologies Lab | 3rd Sem CSE" inside the top tab of the web browser.

#### 7. Exhaustive Attributes Reference Table
| Attribute | Description | Valid Values | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | Standard global values | Optional |

#### 8. Attribute Code Example
```html
<title>VTU CSE Semester 3 Results 2026</title>
```

#### 9. Real-World Case Study / Example
* **Case Study:** Critical for Web SEO and browser window identification.
```html
<head>
  <title>Student Registration | VTU Portal</title>
</head>
```

#### 10. Important Notes
Must contain text only; child HTML tags inside `<title>` are ignored.

#### 11. Related Tags
Parent element is `<head>`.

#### 12. Deprecated / Obsolete Status
**Standard HTML5 Tag.** Mandatory metadata tag.

---

### 1.4 `<body>`

#### 1. Tag Name
* **Tag Name:** `<body>`
* **Opening & Closing Form:** `<body>...</body>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<body>` element defines the document's body, which contains all the visible contents of an HTML document.

#### 3. Purpose / Function
Acts as the main visual canvas holding text, headings, paragraphs, images, hyperlinks, tables, forms, and interactive widgets.

#### 4. Syntax
```html
<body>
  <!-- Visible page content -->
</body>
```

#### 5. Basic Example
```html
<body onload="startApp()">
  <h1>Computer Science Department</h1>
  <p>Welcome to Web Programming Lab.</p>
</body>
```

#### 6. Output
Renders a white canvas page containing a large heading "Computer Science Department" and paragraph text.

#### 7. Exhaustive Attributes Reference Table
| Attribute | Description | Valid Values | Required/Optional |
| --- | --- | --- | --- |
| `onload` | Fires script after body finishes loading. | JS code string | Optional |
| `onunload` | Fires script when user leaves page. | JS code string | Optional |
| `onresize` | Fires script when browser window is resized. | JS code string | Optional |
| `onpopstate` | Fires script when session history changes. | JS code string | Optional |
| `ononline` / `onoffline` | Fires script when browser connection state toggles. | JS code string | Optional |
| `bgcolor` | Background color (Obsolete). | Color hex/name | Obsolete (Use CSS) |
| `text` | Text color (Obsolete). | Color hex/name | Obsolete (Use CSS) |
| `link` / `vlink` / `alink` | Hyperlink colors (Obsolete). | Color hex/name | Obsolete (Use CSS) |

#### 8. Attribute Code Example
```html
<body class="bg-light text-dark" onload="initApp()" onresize="adjustLayout()">
```

#### 9. Real-World Case Study / Example
* **Case Study:** Root container for all user-facing web user interfaces.
```html
<body id="app-root">
  <header>Header</header>
  <main>Main Content</main>
</body>
```

#### 10. Important Notes
There can be only ONE `<body>` element in an HTML document.

#### 11. Related Tags
Sibling to `<head>`. Parent of all visible layout elements.

#### 12. Deprecated / Obsolete Status
**Standard HTML5 Tag.** Legacy styling attributes (`bgcolor`, `text`, `link`) are obsolete in HTML5.

---

### 1.5 `<meta>`

#### 1. Tag Name
* **Tag Name:** `<meta>`
* **Opening & Closing Form:** `<meta>`
* **Tag Type:** Void / Self-Closing Tag

#### 2. Definition
The `<meta>` element provides metadata about the HTML document that cannot be represented by other HTML meta-related elements.

#### 3. Purpose / Function
Configures character set encoding, responsive mobile viewport scaling, page description for search engines, and HTTP header overrides.

#### 4. Syntax
```html
<meta name="spec" content="value">
```

#### 5. Basic Example
```html
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="CSE Web Tech Notes">
<meta name="author" content="Aryansh">
```

#### 6. Output
Non-visual element. Enables proper character decoding (UTF-8) and mobile responsiveness.

#### 7. Exhaustive Attributes Reference Table
| Attribute | Description | Valid Values | Required/Optional |
| --- | --- | --- | --- |
| `charset` | Specifies character encoding format for document. | `UTF-8`, `ISO-8859-1` | Mandatory in HTML5 |
| `name` | Specifies name of metadata property. | `viewport`, `description`, `keywords`, `author`, `robots`, `theme-color` | Optional |
| `content` | Value associated with `name` or `http-equiv`. | Property value string | Required with `name` |
| `http-equiv` | Pragma directive equivalent to HTTP response headers. | `refresh`, `content-type`, `default-style`, `X-UA-Compatible` | Optional |
| `media` | Specifies media target for metadata. | Media query string | Optional |

#### 8. Attribute Code Example
```html
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
```

#### 9. Real-World Case Study / Example
* **Case Study:** Essential for mobile responsive web design and SEO indexing.
```html
<meta charset="UTF-8">
<meta name="keywords" content="HTML5, CSE, Web Tech, VTU">
<meta name="robots" content="index, follow">
```

#### 10. Important Notes
Always specify `<meta charset="UTF-8">` as early as possible inside `<head>`.

#### 11. Related Tags
Placed inside `<head>`.

#### 12. Deprecated / Obsolete Status
**Standard HTML5 Tag.** Standard metadata tag.

---

### 1.6 `<link>`

#### 1. Tag Name
* **Tag Name:** `<link>`
* **Opening & Closing Form:** `<link>`
* **Tag Type:** Void / Self-Closing Tag

#### 2. Definition
The `<link>` element specifies relationships between the current document and an external resource.

#### 3. Purpose / Function
Most commonly used to link external CSS stylesheets (`style.css`), favicons, or web fonts.

#### 4. Syntax
```html
<link rel="relationship" href="URL">
```

#### 5. Basic Example
```html
<link rel="stylesheet" href="main.css" type="text/css" media="all">
<link rel="icon" href="favicon.ico" type="image/x-icon">
```

#### 6. Output
Imports external styles/icons into document without generating inline text.

#### 7. Exhaustive Attributes Reference Table
| Attribute | Description | Valid Values | Required/Optional |
| --- | --- | --- | --- |
| `rel` | Specifies relationship type between current document and linked resource. | `stylesheet`, `icon`, `canonical`, `preload`, `prefetch`, `author`, `alternate` | Mandatory |
| `href` | URL location path of linked resource. | URL string | Mandatory |
| `type` | MIME media type of linked resource. | `text/css`, `image/x-icon`, `font/woff2` | Recommended |
| `media` | Specifies target device media query. | `screen`, `print`, `(max-width: 600px)` | Optional |
| `sizes` | Specifies icon size dimensions for visual icons. | `16x16`, `32x32`, `any` | Optional |
| `crossorigin` | Configures CORS fetching behavior. | `anonymous`, `use-credentials` | Optional |
| `integrity` | Base64 hash value for Subresource Integrity (SRI) security verification. | Hash string (`sha384-...`) | Optional |
| `as` | Specifies content type when preloading resources. | `style`, `script`, `font`, `image` | Optional |
| `hreflang` | Language code of linked document. | Language code (`en`, `hi`) | Optional |

#### 8. Attribute Code Example
```html
<link rel="stylesheet" href="https://cdn.example.com/bootstrap.min.css" integrity="sha384-xyz" crossorigin="anonymous">
```

#### 9. Real-World Case Study / Example
* **Case Study:** Attaches external CSS stylesheets across all production web applications.
```html
<link rel="stylesheet" href="print.css" media="print">
```

#### 10. Important Notes
Must be placed inside `<head>`. Void tag (no closing `</link>` tag).

#### 11. Related Tags
Related to `<style>` and `<script>`.

#### 12. Deprecated / Obsolete Status
**Standard HTML5 Tag.** Standard element.

---


# MODULE 2: HEADINGS, TEXT FORMATTING & LINKS

### 2.1 `<h1 to h6>`

#### 1. Tag Name
* **Tag Name:** `<h1 to h6>`
* **Opening & Closing Form:** `<h1>...</h1> to <h6>...</h6>`
* **Tag Type:** Paired / Container Tags

#### 2. Definition
The `<h1>` through `<h6>` elements represent six levels of document section headings. `<h1>` is the highest (most important) level, and `<h6>` is the lowest level.

#### 3. Purpose / Function
Structures document outline hierarchy, improves content readability, and signals section topics to search engines and screen readers.

#### 4. Syntax
```html
<h1>Heading Level 1</h1>
<h2>Heading Level 2</h2>
<h3>Heading Level 3</h3>
```

#### 5. Basic Example
```html
<h1>Web Technologies (18CS52)</h1>
<h2>Module 1: HTML5 Syntax</h2>
<h3>1.1 Tags Overview</h3>
```

#### 6. Output
Renders bold heading text blocks with default font sizes decreasing from <h1> (largest) to <h6> (smallest).

#### 7. Exhaustive Attributes Reference Table
| Attribute | Description | Valid Values | Required/Optional |
| --- | --- | --- | --- |
| `align` | Sets heading alignment (Obsolete). | `left`, `center`, `right`, `justify` | Obsolete (Use CSS) |
| Global Attributes | Standard global attributes (`id`, `class`, `style`, `title`, `dir`, `lang`, `hidden`, `tabindex`, `accesskey`, `role`). | Standard global values | Optional |

#### 8. Attribute Code Example
```html
<h1 id="top-title" class="text-primary font-bold" dir="ltr" tabindex="0">CSE Department</h1>
```

#### 9. Real-World Case Study / Example
* **Case Study:** Used for page article titles, section headers, and documentation headings.
```html
<article>
  <h1 id="ds-lab">Data Structures Lab</h1>
  <h2>Binary Search Trees</h2>
</article>
```

#### 10. Important Notes
Use headings in natural descending sequence (`<h1>` -> `<h2>` -> `<h3>`). Avoid skipping heading levels.

#### 11. Related Tags
Related to `<p>`, `<section>`, `<header>`.

#### 12. Deprecated / Obsolete Status
**Standard HTML5 Tag.** `align` attribute (`<h1 align="center">`) is obsolete; use CSS `text-align` instead.

---

### 2.2 `<p>`

#### 1. Tag Name
* **Tag Name:** `<p>`
* **Opening & Closing Form:** `<p>...</p>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<p>` element represents a paragraph block of text.

#### 3. Purpose / Function
Groups text sentences logically, automatically creating vertical blank line margins before and after the text block.

#### 4. Syntax
```html
<p>Paragraph text content...</p>
```

#### 5. Basic Example
```html
<p>HTML5 is the fifth and current major version of the HTML standard.</p>
<p>It includes new semantic layout elements like header, footer, and section.</p>
```

#### 6. Output
Renders two distinct text paragraphs separated by vertical space margins.

#### 7. Exhaustive Attributes Reference Table
| Attribute | Description | Valid Values | Required/Optional |
| --- | --- | --- | --- |
| `align` | Paragraph alignment (Obsolete). | `left`, `center`, `right`, `justify` | Obsolete (Use CSS) |
| Global Attributes | Standard global attributes (`id`, `class`, `style`, `title`, `dir`, `lang`, `hidden`, `tabindex`). | Standard global values | Optional |

#### 8. Attribute Code Example
```html
<p id="intro-p" class="lead text-muted" dir="ltr">Updated on August 2026.</p>
```

#### 9. Real-World Case Study / Example
* **Case Study:** Used for all prose body text across articles, blogs, and portals.
```html
<section>
  <p class="description">Student USN must be verified before login.</p>
</section>
```

#### 10. Important Notes
Browser engines automatically add vertical block margins around `<p>` tags.

#### 11. Related Tags
Related to `<br>`, `<div>`, `<span>`.

#### 12. Deprecated / Obsolete Status
**Standard HTML5 Tag.** Standard element.

---

### 2.3 `<br and hr>`

#### 1. Tag Name
* **Tag Name:** `<br and hr>`
* **Opening & Closing Form:** `<br> and <hr>`
* **Tag Type:** Void / Self-Closing Tags

#### 2. Definition
`<br>` inserts a single text line break. `<hr>` inserts a thematic horizontal rule line divider.

#### 3. Purpose / Function
`<br>` breaks a text line without starting a new paragraph margin. `<hr>` creates a visual section break line.

#### 4. Syntax
```html
<p>Line 1<br>Line 2</p>
<hr>
```

#### 5. Basic Example
```html
<h1>VTU Examination Notice</h1>
<hr>
<p>Date: 01 Sept 2026<br>Time: 9:30 AM</p>
```

#### 6. Output
Renders a title heading, followed by a solid horizontal divider line, followed by two lines of text stacked directly on top of each other.

#### 7. Exhaustive Attributes Reference Table
| Attribute | Description | Valid Values | Required/Optional |
| --- | --- | --- | --- |
| `align` (in hr) | Rule alignment (Obsolete). | `left`, `center`, `right` | Obsolete (Use CSS) |
| `width` (in hr) | Rule width (Obsolete). | Pixels / percentage | Obsolete (Use CSS) |
| `size` (in hr) | Rule height/thickness (Obsolete). | Pixels | Obsolete (Use CSS) |
| `noshade` (in hr) | Solid color without shading (Obsolete). | `noshade` | Obsolete (Use CSS) |
| `color` (in hr) | Rule color (Obsolete). | Color hex/name | Obsolete (Use CSS) |
| Global Attributes | Standard global attributes. | Standard global values | Optional |

#### 8. Attribute Code Example
```html
<hr id="section-divider" class="my-4 border-top">
```

#### 9. Real-World Case Study / Example
* **Case Study:** Used for address lines, poem line breaks, and dividing article sections.
```html
<address>CSE Block<br>Belagavi</address>
<hr>
```

#### 10. Important Notes
Use `<br>` ONLY for line breaks that are part of text content (like addresses/poetry), NOT for creating layout spacing (use CSS margins instead).

#### 11. Related Tags
Related to `<p>`, `<div>`.

#### 12. Deprecated / Obsolete Status
**Standard HTML5 Tag.** Legacy `<hr width="50%" align="center">` styling attributes are obsolete in HTML5.

---

### 2.4 `<a>`

#### 1. Tag Name
* **Tag Name:** `<a>`
* **Opening & Closing Form:** `<a href="...">...</a>`
* **Tag Type:** Paired Tag

#### 2. Definition
The `<a>` (Anchor) element creates a hyperlink to web pages, files, email addresses, location anchors, or external URLs.

#### 3. Purpose / Function
Forms the primary building block of the Web, enabling navigation between documents.

#### 4. Syntax
```html
<a href="URL" target="_blank">Link Text</a>
```

#### 5. Basic Example
```html
<a href="https://vtu.ac.in" target="_blank" rel="noopener noreferrer" title="VTU Portal">Visit VTU Official Website</a>
```

#### 6. Output
Renders underlined blue text "Visit VTU Official Website". Clicking it opens vtu.ac.in in a new browser tab.

#### 7. Exhaustive Attributes Reference Table
| Attribute | Description | Valid Values | Required/Optional |
| --- | --- | --- | --- |
| `href` | Target URL or page anchor fragment link destination. | URL string (`https://...`, `#anchor`, `mailto:...`, `tel:...`) | Mandatory for links |
| `target` | Target browsing context for opening link. | `_blank` (new tab), `_self` (same tab), `_parent`, `_top` | Optional |
| `download` | Prompts browser to download target file instead of navigating. | Filename string or empty | Optional |
| `rel` | Specifies relationship between current document and target document. | `noopener`, `noreferrer`, `author`, `bookmark`, `external`, `help`, `license`, `next`, `nofollow`, `prev`, `search` | Security Best Practice |
| `type` | MIME type of target resource. | `application/pdf`, `text/html` | Optional |
| `hreflang` | Natural language of linked target page. | Language code (`en`, `hi`) | Optional |
| `referrerpolicy` | Controls referrer header sent with request. | `no-referrer`, `origin`, `strict-origin-when-cross-origin` | Optional |
| `ping` | List of URLs to notify via POST when user follows link. | Space-separated URLs | Optional |
| `name` / `charset` / `coords` / `shape` / `rev` | Legacy attributes. | Strings | Obsolete in HTML5 |

#### 8. Attribute Code Example
```html
<a href="syllabus.pdf" download="CSE_Syllabus.pdf" target="_blank" rel="noopener" class="btn btn-primary">Download Syllabus</a>
```

#### 9. Real-World Case Study / Example
* **Case Study:** Used for menu links, button actions, document downloads, and internal page jump anchors (`#section1`).
```html
<nav><a href="/home">Home</a> | <a href="/contact">Contact</a></nav>
```

#### 10. Important Notes
Always use `rel="noopener noreferrer"` when setting `target="_blank"` to prevent security tabnabbing vulnerabilities.

#### 11. Related Tags
Related to `<nav>`, `<link>`, `<img>`.

#### 12. Deprecated / Obsolete Status
**Standard HTML5 Tag.** Core hyperlink element.

---

### 2.5 `<img>`

#### 1. Tag Name
* **Tag Name:** `<img>`
* **Opening & Closing Form:** `<img>`
* **Tag Type:** Void / Self-Closing Tag

#### 2. Definition
The `<img>` element embeds an image into an HTML document.

#### 3. Purpose / Function
Displays graphic files (JPEG, PNG, SVG, WebP, GIF) on web pages.

#### 4. Syntax
```html
<img src="URL" alt="Description" width="px" height="px">
```

#### 5. Basic Example
```html
<img src="vtu-logo.png" alt="VTU Official Logo" width="120" height="120" loading="lazy">
```

#### 6. Output
Renders a 120x120 pixel image of the VTU logo on the webpage layout.

#### 7. Exhaustive Attributes Reference Table
| Attribute | Description | Valid Values | Required/Optional |
| --- | --- | --- | --- |
| `src` | Path location URL of image file resource. | Relative or absolute URL | Mandatory |
| `alt` | Accessible fallback text description for screen readers or broken links. | Descriptive text string | Mandatory (for Accessibility) |
| `width` | Display width in pixels. | Integer pixels | Recommended |
| `height` | Display height in pixels. | Integer pixels | Recommended |
| `loading` | Configures browser image loading performance strategy. | `lazy` (loads when near viewport), `eager` (loads immediately) | Optional |
| `srcset` | List of image sources for responsive pixel densities. | Candidate image URLs with width/density descriptors | Optional |
| `sizes` | Image layout sizes for responsive srcset evaluation. | Media condition size strings | Optional with srcset |
| `decoding` | Hints browser on image decoding mode. | `async`, `sync`, `auto` | Optional |
| `fetchpriority` | Sets download priority hint for browser preloader. | `high`, `low`, `auto` | Optional |
| `usemap` | Associates image with an interactive `<map>` element. | `#mapname` | Optional |
| `ismap` | Specifies image as a server-side image map. | `ismap` | Optional |
| `crossorigin` | Configures CORS request settings. | `anonymous`, `use-credentials` | Optional |
| `referrerpolicy` | Specifies referrer policy when fetching image. | `no-referrer`, `strict-origin` | Optional |
| `align` / `border` / `hspace` / `vspace` / `name` | Presentation attributes. | Various | Obsolete in HTML5 |

#### 8. Attribute Code Example
```html
<img src="avatar.jpg" alt="Student Profile Picture" width="150" height="150" loading="lazy" decoding="async" class="rounded-circle">
```

#### 9. Real-World Case Study / Example
* **Case Study:** Used for website logos, user profile avatars, product photos, and diagram figures.
```html
<figure>
  <img src="graph.png" alt="Data Structure Chart" width="400" height="300">
</figure>
```

#### 10. Important Notes
Always provide a descriptive `alt` attribute. If image is purely decorative, use `alt=""`.

#### 11. Related Tags
Related to `<picture>`, `<figure>`, `<figcaption>`.

#### 12. Deprecated / Obsolete Status
**Standard HTML5 Tag.** Core media tag.

---

### 2.6 `<strong and em>`

#### 1. Tag Name
* **Tag Name:** `<strong and em>`
* **Opening & Closing Form:** `<strong>...</strong> and <em>...</em>`
* **Tag Type:** Paired Inline Tags

#### 2. Definition
`<strong>` indicates strong semantic importance. `<em>` indicates vocal stress emphasis.

#### 3. Purpose / Function
`<strong>` renders text in bold to signal critical urgency. `<em>` renders text in italics to signal verbal emphasis.

#### 4. Syntax
```html
<strong>Important Text</strong>
<em>Emphasized Text</em>
```

#### 5. Basic Example
```html
<p><strong>WARNING:</strong> Submission deadline is <em>today</em> before 12:00 PM.</p>
```

#### 6. Output
Renders "WARNING:" in **bold** and "today" in *italics*. Screen readers pronounce `<em>` with elevated emphasis.

#### 7. Exhaustive Attributes Reference Table
| Attribute | Description | Valid Values | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes (`id`, `class`, `style`, `title`, `dir`, `lang`, `hidden`). | Standard global values | Optional |

#### 8. Attribute Code Example
```html
<strong id="warn-msg" class="text-danger" title="Important Notice">Exam Hall Ticket Required!</strong>
```

#### 9. Real-World Case Study / Example
* **Case Study:** Used in documentation warnings, key search terms, and emphasis in text body.
```html
<p><strong>Note:</strong> Always save your file before compiling.</p>
```

#### 10. Important Notes
`<strong>` vs `<b>`: `<b>` is purely visual bold; `<strong>` means semantic importance. `<em>` vs `<i>`: `<i>` is visual italic; `<em>` is vocal stress.

#### 11. Related Tags
Related to `<b>`, `<i>`, `<mark>`.

#### 12. Deprecated / Obsolete Status
**Standard HTML5 Tag.** Preferred semantic tags.

---


# MODULE 3: LIST TAGS

### 3.1 `<ul and ol>`

#### 1. Tag Name
* **Tag Name:** `<ul and ol>`
* **Opening & Closing Form:** `<ul>...</ul> and <ol>...</ol>`
* **Tag Type:** Paired Container Tags

#### 2. Definition
`<ul>` defines an unordered bulleted list. `<ol>` defines an ordered numbered list. Each item inside is enclosed in `<li>` (List Item).

#### 3. Purpose / Function
Groups related items sequentially (ordered sequence) or un-ordered (bullet points).

#### 4. Syntax
```html
<ul>
  <li>Item</li>
</ul>
<ol>
  <li>Item</li>
</ol>
```

#### 5. Basic Example
```html
<h3>Required Tools:</h3>
<ul>
  <li>VS Code IDE</li>
  <li>Node.js Engine</li>
</ul>
<h3>Lab Execution Steps:</h3>
<ol type="1" start="1">
  <li>Write HTML Code</li>
  <li>Open in Chrome Browser</li>
</ol>
```

#### 6. Output
Renders a bulleted list of tools and a numbered list (1, 2) of execution steps.

#### 7. Exhaustive Attributes Reference Table
| Tag | Attribute | Description | Valid Values | Required/Optional |
| --- | --- | --- | --- | --- |
| `<ol>` | `type` | Numbering type style. | `1` (numbers), `A` (uppercase alpha), `a` (lowercase alpha), `I` (uppercase Roman), `i` (lowercase Roman) | Optional |
| `<ol>` | `start` | Starting integer number value for list ordering. | Integer number | Optional |
| `<ol>` | `reversed` | Reverses list ordering sequence. | `reversed` | Optional |
| `<li>` | `value` | Sets explicit integer value for current item inside `<ol>`. | Integer number | Optional |
| `<ul>` | `type` | Bullet marker shape (Obsolete). | `disc`, `circle`, `square` | Obsolete (Use CSS) |
| `<ol>` | `compact` | Compact display layout (Obsolete). | `compact` | Obsolete (Use CSS) |

#### 8. Attribute Code Example
```html
<ol type="I" start="1" reversed class="syllabus-list">
  <li value="5">Step 5</li>
</ol>
```

#### 9. Real-World Case Study / Example
* **Case Study:** Used for navigation menus (`<ul>`), recipe steps (`<ol>`), and dropdown lists.
```html
<nav>
  <ul>
    <li><a href="#home">Home</a></li>
    <li><a href="#about">About</a></li>
  </ul>
</nav>
```

#### 10. Important Notes
Direct children of `<ul>` and `<ol>` MUST ONLY be `<li>` elements.

#### 11. Related Tags
Contains `<li>`. Related to `<dl>`.

#### 12. Deprecated / Obsolete Status
**Standard HTML5 Tag.** `type` attribute on `<ul>` (`disc`, `circle`) is deprecated in HTML5; use CSS `list-style-type` instead.

---

### 3.2 `<dl, dt, dd>`

#### 1. Tag Name
* **Tag Name:** `<dl, dt, dd>`
* **Opening & Closing Form:** `<dl><dt>...</dt><dd>...</dd></dl>`
* **Tag Type:** Paired Container Tags

#### 2. Definition
The `<dl>` tag defines a description list. `<dt>` specifies the term/name, and `<dd>` specifies the description/value of that term.

#### 3. Purpose / Function
Used to display glossaries, dictionary definitions, or key-value metadata pairs. *(Frequently asked in 10-mark exam questions)*.

#### 4. Syntax
```html
<dl>
  <dt>Term 1</dt>
  <dd>Description 1</dd>
</dl>
```

#### 5. Basic Example
```html
<dl>
  <dt>HTML</dt>
  <dd>HyperText Markup Language - Standard language for web documents.</dd>
  <dt>CSS</dt>
  <dd>Cascading Style Sheets - Language for document presentation styling.</dd>
</dl>
```

#### 6. Output
Renders terms "HTML" and "CSS" in bold text, followed by indented description lines beneath each term.

#### 7. Exhaustive Attributes Reference Table
| Attribute | Description | Valid Values | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes (`id`, `class`, `style`, `dir`, `lang`). | Standard global values | Optional |

#### 8. Attribute Code Example
```html
<dl id="tech-glossary" class="row">
  <dt class="col-sm-3">Course Code</dt>
  <dd class="col-sm-9">18CS52</dd>
</dl>
```

#### 9. Real-World Case Study / Example
* **Case Study:** Used for FAQs, glossary definitions, metadata terms, and key-value specs.
```html
<dl>
  <dt>Author</dt><dd>Tim Berners-Lee</dd>
  <dt>Year</dt><dd>1991</dd>
</dl>
```

#### 10. Important Notes
Each `<dt>` can have one or multiple matching `<dd>` description tags.

#### 11. Related Tags
Related to `<ul>`, `<ol>`.

#### 12. Deprecated / Obsolete Status
**Standard HTML5 Tag.** Core semantic list structure.

---


# MODULE 4: TABLES (LAB VIVA & EXAMINATION CORE)

### 4.1 `<table, tr, th, td, caption>`

#### 1. Tag Name
* **Tag Name:** `<table, tr, th, td, caption>`
* **Opening & Closing Form:** `<table>...</table>`
* **Tag Type:** Paired Container Tags

#### 2. Definition
The `<table>` element represents data in a two-dimensional grid of rows (`<tr>`) and cells (`<th>` header cell, `<td>` data cell), with an optional title caption (`<caption>`).

#### 3. Purpose / Function
Presents structured tabular data (schedules, grade sheets, database rows).

#### 4. Syntax
```html
<table>
  <caption>Title</caption>
  <tr>
    <th>Header</th>
  </tr>
  <tr>
    <td>Data</td>
  </tr>
</table>
```

#### 5. Basic Example
```html
<table border="1">
  <caption>CSE Semester 3 Timetable</caption>
  <tr>
    <th>USN</th>
    <th>Name</th>
    <th colspan="2">Marks (Theory + Lab)</th>
  </tr>
  <tr>
    <td>1VU22CS001</td>
    <td>Aryansh</td>
    <td>48</td>
    <td>98</td>
  </tr>
</table>
```

#### 6. Output
Renders a 2-row table grid with borderlines, bold centered column headers, and merged header cell spanning across two columns.

#### 7. Exhaustive Attributes Reference Table
| Tag | Attribute | Description | Valid Values | Required/Optional |
| --- | --- | --- | --- | --- |
| `<th>` / `<td>` | `colspan` | Merges *n* adjacent columns horizontally. | Positive integer number (`1`, `2`, `3`) | Highly Tested in Exams |
| `<th>` / `<td>` | `rowspan` | Merges *n* adjacent rows vertically. | Positive integer number (`1`, `2`, `3`) | Highly Tested in Exams |
| `<th>` | `scope` | Associates header cell with columns or rows. | `col`, `row`, `colgroup`, `rowgroup` | Accessibility Best Practice |
| `<th>` / `<td>` | `headers` | Associates cell with explicit header ID string. | Header ID string | Optional |
| `<th>` | `abbr` | Short abbreviation text for screen readers. | Abbreviation string | Optional |
| `<table>` | `border` | Table border width (Only `1` or empty in HTML5). | `1` or `""` | Optional (Use CSS) |
| `<table>` | `cellpadding` | Cell internal padding (Obsolete). | Integer pixels | Obsolete (Use CSS) |
| `<table>` | `cellspacing` | Cell border spacing (Obsolete). | Integer pixels | Obsolete (Use CSS) |
| `<table>` | `width` / `height` | Table dimensions (Obsolete). | Pixels / percentage | Obsolete (Use CSS) |
| `<table>` / `<tr>` / `<th>` / `<td>` | `align` / `valign` | Alignment (Obsolete). | `left`, `center`, `right`, `top`, `middle`, `bottom` | Obsolete (Use CSS) |
| `<table>` | `bgcolor` | Background color (Obsolete). | Color hex/name | Obsolete (Use CSS) |

#### 8. Attribute Code Example
```html
<td rowspan="2" colspan="2" headers="th-marks" class="bg-warning">Merged Cell</td>
```

#### 9. Real-World Case Study / Example
* **Case Study:** Used for grade reports, examination timetables, product pricing tables, and financial data grids.
```html
<table>
  <thead><tr><th scope="col">ID</th><th scope="col">Name</th></tr></thead>
  <tbody><tr><td>1</td><td>Alice</td></tr></tbody>
</table>
```

#### 10. Important Notes
Do NOT use tables for page layout! Use CSS Flexbox/Grid for layout, and `<table>` ONLY for tabular data.

#### 11. Related Tags
Contains `<caption>`, `<thead>`, `<tbody>`, `<tfoot>`, `<tr>`, `<th>`, `<td>`.

#### 12. Deprecated / Obsolete Status
**Standard HTML5 Tag.** Layout presentation attributes (`cellpadding`, `cellspacing`, `width`, `bgcolor`, `align`) are obsolete in HTML5; use CSS styling instead.

---


# MODULE 5: FORMS AND INPUT CONTROLS (HIGHEST EXAM WEIGHTAGE)

### 5.1 `<form>`

#### 1. Tag Name
* **Tag Name:** `<form>`
* **Opening & Closing Form:** `<form>...</form>`
* **Tag Type:** Paired Container Tag

#### 2. Definition
The `<form>` element defines an interactive HTML form used to collect user inputs and send the data payload to a processing web server.

#### 3. Purpose / Function
Acts as the primary wrapper control holding input fields, textareas, checkboxes, dropdowns, and submit buttons.

#### 4. Syntax
```html
<form action="server-endpoint" method="POST">
  <!-- Form controls -->
</form>
```

#### 5. Basic Example
```html
<form action="/submit-student.php" method="POST" enctype="multipart/form-data" autocomplete="on">
  <label for="usn">USN:</label>
  <input type="text" id="usn" name="student_usn" required>
  <button type="submit">Submit</button>
</form>
```

#### 6. Output
Renders an interactive form containing a text input field and a clickable submit button.

#### 7. Exhaustive Attributes Reference Table
| Attribute | Description | Valid Values | Required/Optional |
| --- | --- | --- | --- |
| `action` | URL of server script endpoint that processes form data. | URL string (`/submit.php`, `https://...`) | Mandatory for submission |
| `method` | HTTP submission method. | `GET` (appends in URL query), `POST` (sends in HTTP body payload), `dialog` | Mandatory |
| `enctype` | Encoding type for form submission payload. | `application/x-www-form-urlencoded` (default), `multipart/form-data` (for file uploads), `text/plain` | Required for File Uploads |
| `target` | Target browsing context window for receiving submission response. | `_self`, `_blank`, `_parent`, `_top` | Optional |
| `autocomplete` | Toggles browser auto-fill for all child inputs. | `on`, `off` | Optional |
| `novalidate` | Disables native HTML5 browser form validation checks. | `novalidate` | Optional |
| `name` | Unique name identifier for form. | Name string | Optional |
| `rel` | Relationship of form submit link target. | `external`, `help`, `license` | Optional |
| `accept-charset` | Character encodings accepted by server. | `UTF-8` | Optional |

#### 8. Attribute Code Example
```html
<form action="/upload" method="POST" enctype="multipart/form-data" autocomplete="on" novalidate class="card p-4">
```

#### 9. Real-World Case Study / Example
* **Case Study:** Used for user registration forms, login screens, search bars, checkout forms, and surveys.
```html
<form action="/api/v1/register" method="POST">
  <input type="email" name="email">
  <input type="submit" value="Register">
</form>
```

#### 10. Important Notes
Difference between `GET` and `POST` is a classic 5-mark exam question! `GET` is bookmarkable and exposes data in URL bar; `POST` is secure and handles large payload/file uploads.

#### 11. Related Tags
Contains `<input>`, `<label>`, `<button>`, `<select>`, `<textarea>`, `<fieldset>`.

#### 12. Deprecated / Obsolete Status
**Standard HTML5 Tag.** Core web form container.

---

### 5.2 `<input>`

#### 1. Tag Name
* **Tag Name:** `<input>`
* **Opening & Closing Form:** `<input>`
* **Tag Type:** Void / Self-Closing Tag

#### 2. Definition
The `<input>` element is the most vital interactive form control, allowing users to enter data in various formats specified by the `type` attribute.

#### 3. Purpose / Function
Renders text boxes, password fields, radio buttons, checkboxes, file upload pickers, date pickers, range sliders, and submit buttons.

#### 4. Syntax
```html
<input type="type_name" name="variable_name" value="val">
```

#### 5. Basic Example
```html
<p>USN: <input type="text" name="usn" placeholder="1VU22CS001" required></p>
<p>Password: <input type="password" name="pass" required></p>
<p>Gender: <input type="radio" name="g" value="m" checked> M <input type="radio" name="g" value="f"> F</p>
<p><input type="submit" value="Register"></p>
```

#### 6. Output
Renders a text box with placeholder, a masked password field, two radio buttons (male pre-checked), and a submit button.

#### 7. Exhaustive Attributes Reference Table
| Attribute | Description | Valid Values | Required/Optional |
| --- | --- | --- | --- |
| `type` | Type of interactive input control to render. | `text`, `password`, `email`, `number`, `checkbox`, `radio`, `file`, `hidden`, `submit`, `reset`, `button`, `date`, `time`, `datetime-local`, `month`, `week`, `color`, `range`, `search`, `tel`, `url`, `image` | Mandatory |
| `name` | Field variable key name submitted in HTTP payload. | Variable name string | Mandatory for Server Submission |
| `value` | Initial or submitted data value string. | Value string | Required for radio/checkbox/submit |
| `placeholder` | Short hint text displayed inside empty text box. | Hint string | Recommended |
| `required` | Mandates field completion before submission. | `required` | Mandatory for required inputs |
| `readonly` | Prevents user modification while remaining selectable. | `readonly` | Optional |
| `disabled` | Deactivates control and excludes it from payload. | `disabled` | Optional |
| `checked` | Pre-checks radio button or checkbox control. | `checked` | Optional (radio/checkbox) |
| `pattern` | Regular Expression (RegEx) string for format validation. | Regex pattern string (`[A-Z]{3}[0-9]{3}`) | Optional |
| `minlength` / `maxlength` | Specifies character length boundaries. | Positive integer number | Optional |
| `min` / `max` / `step` | Specifies numeric or date range boundaries and step increment. | Number or date string | Optional (number/range/date) |
| `accept` | Specifies accepted file extensions/MIME types. | `.pdf,.zip`, `image/*` | Optional (file type) |
| `multiple` | Allows selecting multiple files or email addresses. | `multiple` | Optional (file/email) |
| `autocomplete` | Enables browser auto-fill for this specific input. | `on`, `off`, `username`, `current-password` | Optional |
| `autofocus` | Automatically focuses input on page load. | `autofocus` | Optional |
| `list` | Associates input with a `<datalist>` element ID. | Datalist ID string | Optional |
| `form` | Binds input to an external form ID outside parent form. | Form ID string | Optional |
| `formaction` / `formmethod` / `formenctype` / `formnovalidate` / `formtarget` | Overrides parent form submission attributes for submit buttons. | Various | Optional (submit buttons) |
| `src` / `alt` / `width` / `height` | Image properties for `type="image"`. | Image paths/dimensions | Optional (`type="image"`) |
| `capture` | Specifies media capture camera/mic for mobile upload. | `user`, `environment` | Optional (`type="file"`) |

#### 8. Attribute Code Example
```html
<input type="email" name="user_email" id="user_email" class="form-control" placeholder="user@college.edu" required autocomplete="email" autofocus>
```

#### 9. Real-World Case Study / Example
* **Case Study:** Used across all forms on the internet for data input collection.
```html
<input type="file" name="assignment" accept=".pdf,.zip" multiple required>
```

#### 10. Important Notes
Input controls without a `name` attribute will NOT be submitted to the server during form POST/GET!

#### 11. Related Tags
Paired with `<label for="...">`. Container is `<form>`.

#### 12. Deprecated / Obsolete Status
**Standard HTML5 Tag.** HTML5 added new input types (`email`, `url`, `number`, `range`, `date`, `color`, `search`).

---

### 5.3 `<label>`

#### 1. Tag Name
* **Tag Name:** `<label>`
* **Opening & Closing Form:** `<label for="id">...</label>`
* **Tag Type:** Paired Tag

#### 2. Definition
The `<label>` element represents a caption for an item in a user interface.

#### 3. Purpose / Function
Improves web accessibility for screen readers and increases clickable hit target area for radio buttons and checkboxes.

#### 4. Syntax
```html
<label for="target_input_id">Label Text</label>
<input type="text" id="target_input_id" name="var">
```

#### 5. Basic Example
```html
<label for="usn_field">Student USN:</label>
<input type="text" id="usn_field" name="usn">
```

#### 6. Output
Renders text "Student USN:". Clicking the text "Student USN:" automatically focuses the text cursor inside the input field.

#### 7. Exhaustive Attributes Reference Table
| Attribute | Description | Valid Values | Required/Optional |
| --- | --- | --- | --- |
| `for` | Specifies the `id` of the target input element this label belongs to. | Target Input ID string | Mandatory |
| `form` | Associates label with an external form ID. | Form ID string | Optional |

#### 8. Attribute Code Example
```html
<label for="agree_check" class="form-check-label">I agree to terms</label>
```

#### 9. Real-World Case Study / Example
* **Case Study:** Mandatory web accessibility standard on every form input.
```html
<label for="pass">Password:</label>
<input type="password" id="pass" name="password">
```

#### 10. Important Notes
The `for` attribute value MUST match the target input's `id` attribute value exactly!

#### 11. Related Tags
Related to `<input>`, `<select>`, `<textarea>`.

#### 12. Deprecated / Obsolete Status
**Standard HTML5 Tag.** Accessibility core tag.

---

### 5.4 `<select and option>`

#### 1. Tag Name
* **Tag Name:** `<select and option>`
* **Opening & Closing Form:** `<select><option>...</option></select>`
* **Tag Type:** Paired Container Tags

#### 2. Definition
The `<select>` element defines a drop-down menu list. The `<option>` elements define the selectable list items.

#### 3. Purpose / Function
Provides a drop-down menu for users to select one (or multiple) choices from a defined set of options.

#### 4. Syntax
```html
<select name="var">
  <option value="val1">Label 1</option>
</select>
```

#### 5. Basic Example
```html
<label for="branch">Select Branch:</label>
<select id="branch" name="student_branch" required>
  <option value="" disabled selected>-- Choose Branch --</option>
  <option value="cse">Computer Science (CSE)</option>
  <option value="ise">Information Science (ISE)</option>
  <option value="ece">Electronics (ECE)</option>
</select>
```

#### 6. Output
Renders a drop-down menu displaying selectable engineering branches.

#### 7. Exhaustive Attributes Reference Table
| Tag | Attribute | Description | Valid Values | Required/Optional |
| --- | --- | --- | --- | --- |
| `<select>` | `name` | Field variable key sent in HTTP payload. | Variable name string | Mandatory |
| `<select>` | `multiple` | Allows selecting multiple options simultaneously. | `multiple` | Optional |
| `<select>` | `size` | Specifies visible height count of dropdown list lines. | Positive integer | Optional |
| `<select>` | `required` | Mandates option selection before form submission. | `required` | Optional |
| `<select>` | `disabled` | Deactivates dropdown selection control. | `disabled` | Optional |
| `<select>` | `autofocus` | Focuses dropdown automatically on page load. | `autofocus` | Optional |
| `<select>` | `form` | Associates select box with an external form ID. | Form ID string | Optional |
| `<option>` | `value` | Data payload value string submitted when selected. | Value string | Mandatory |
| `<option>` | `selected` | Sets option as default pre-selected item on load. | `selected` | Optional |
| `<option>` | `disabled` | Deactivates option from selection. | `disabled` | Optional |
| `<option>` | `label` | Short label text for option element. | Label string | Optional |

#### 8. Attribute Code Example
```html
<select name="course" id="course" class="form-select" required size="1">
  <option value="3" selected>Semester 3</option>
</select>
```

#### 9. Real-World Case Study / Example
* **Case Study:** Used for country pickers, branch selectors, payment method dropdowns, and state lists.
```html
<select name="sem">
  <option value="3" selected>Semester 3</option>
</select>
```

#### 10. Important Notes
If an `<option>` has no `value` attribute specified, the text inside option is sent to server as value.

#### 11. Related Tags
Parent `<select>`, child `<option>`, `<optgroup>`.

#### 12. Deprecated / Obsolete Status
**Standard HTML5 Tag.** Standard dropdown control.

---

### 5.5 `<textarea>`

#### 1. Tag Name
* **Tag Name:** `<textarea>`
* **Opening & Closing Form:** `<textarea>...</textarea>`
* **Tag Type:** Paired Tag

#### 2. Definition
The `<textarea>` element represents a multi-line plain-text editing control.

#### 3. Purpose / Function
Allows users to enter large multi-line text input (comments, addresses, feedback, long answers).

#### 4. Syntax
```html
<textarea name="var" rows="4" cols="50">Default text</textarea>
```

#### 5. Basic Example
```html
<label for="feedback">Student Remarks:</label><br>
<textarea id="feedback" name="remarks" rows="4" cols="40" placeholder="Enter comments here..."></textarea>
```

#### 6. Output
Renders a 4-row by 40-column resizable multi-line text box with placeholder text.

#### 7. Exhaustive Attributes Reference Table
| Attribute | Description | Valid Values | Required/Optional |
| --- | --- | --- | --- |
| `name` | Field variable key for server submission payload. | Variable name string | Mandatory |
| `rows` | Visible height of text area in text lines count. | Positive integer number | Recommended |
| `cols` | Visible width of text area in average character widths. | Positive integer number | Recommended |
| `placeholder` | Hint text shown inside empty text box. | Hint string | Optional |
| `required` | Mandates field completion before form submission. | `required` | Optional |
| `readonly` | Prevents text editing while remaining selectable. | `readonly` | Optional |
| `disabled` | Deactivates text area control. | `disabled` | Optional |
| `minlength` / `maxlength` | Specifies character length boundaries. | Positive integer number | Optional |
| `wrap` | Controls text wrapping on submission (`soft` default, `hard` inserts newlines). | `soft`, `hard` | Optional |
| `autofocus` | Focuses text area on page load. | `autofocus` | Optional |
| `form` | Associates text area with an external form ID. | Form ID string | Optional |

#### 8. Attribute Code Example
```html
<textarea name="bio" id="bio" class="form-control" rows="3" cols="50" placeholder="Short Bio" maxlength="500" required></textarea>
```

#### 9. Real-World Case Study / Example
* **Case Study:** Used for comment sections, feedback forms, essay submissions, and address fields.
```html
<textarea name="code_submission" rows="10" cols="80"></textarea>
```

#### 10. Important Notes
Default initial text must be placed BETWEEN `<textarea>` and `</textarea>`, NOT inside a `value` attribute!

#### 11. Related Tags
Related to `<input>`, `<form>`.

#### 12. Deprecated / Obsolete Status
**Standard HTML5 Tag.** Standard multi-line input tag.

---


# MODULE 6: SEMANTIC LAYOUT TAGS (HTML5 CORE)

### 6.1 `<header, footer, main, section, article, aside, nav>`

#### 1. Tag Name
* **Tag Name:** `<header, footer, main, section, article, aside, nav>`
* **Opening & Closing Form:** `<semantic-tag>...</semantic-tag>`
* **Tag Type:** Paired Container Tags

#### 2. Definition
HTML5 semantic layout elements give clear meaning to web page structures, replacing generic non-semantic `<div>` tags with meaningful layout landmarks.

#### 3. Purpose / Function
Improves website SEO, page structure organization, readability, and accessibility for screen reader assistive software.

#### 4. Syntax
```html
<header>Nav & Title</header>
<main>
  <section>
    <article>Content</article>
  </section>
  <aside>Sidebar</aside>
</main>
<footer>Copyright</footer>
```

#### 5. Basic Example
```html
<header>
  <h1>VTU CSE Department</h1>
  <nav aria-label="Main Menu"><a href="#home">Home</a></nav>
</header>
<main id="main-content" role="main">
  <section id="assignment">
    <h2>Web Tech Assignment</h2>
    <p>Complete all module questions.</p>
  </section>
</main>
<footer>
  <p>&copy; 2026 VTU. All rights reserved.</p>
</footer>
```

#### 6. Output
Renders structured page layout with header banner at top, main section in middle, and footer banner at bottom.

#### 7. Exhaustive Attributes Reference Table
| Tag Name | Semantic Purpose & Function | Common Use Case |
| --- | --- | --- |
| `<header>` | Introductory branding, site logo, title & navigation. | Top bar header of website or article header. |
| `<nav>` | Major section containing primary navigation links. | Top navbar, menu list links. |
| `<main>` | Unique primary landmark content area of the document. | Main body content (Only 1 per page). |
| `<section>` | Standalone thematic section with a heading. | Landing page sections (Features, Pricing, Contact). |
| `<article>` | Self-contained, independently distributable content unit. | Blog posts, news articles, forum comments. |
| `<aside>` | Content indirectly related to main content. | Blog sidebars, callout boxes, advertisements. |
| `<footer>` | Footer for page or section (copyright, contact). | Bottom site footer, copyright notice. |
| Global Attributes | Standard global attributes (`id`, `class`, `style`, `role`, `aria-label`, `hidden`). | Standard global values |

#### 8. Attribute Code Example
```html
<main id="main-content" role="main" aria-label="Primary Content" class="container py-4">
```

#### 9. Real-World Case Study / Example
* **Case Study:** Used on 100% of modern HTML5 websites to build clean semantic document layouts.
```html
<header><nav>Links</nav></header>
<main><article>Post</article></main>
<footer>Copyright</footer>
```

#### 10. Important Notes
`<div>` vs Semantic Tags: `<div>` has ZERO semantic meaning (used only for CSS styling). `<section>` and `<article>` tell search engines what the content actually represents.

#### 11. Related Tags
Related to `<div>`, `<span>`.

#### 12. Deprecated / Obsolete Status
**Standard HTML5 Tag.** Native HTML5 landmark elements.

---

### 6.2 `<div and span>`

#### 1. Tag Name
* **Tag Name:** `<div and span>`
* **Opening & Closing Form:** `<div>...</div> and <span>...</span>`
* **Tag Type:** Paired Container Tags

#### 2. Definition
`<div>` (Content Division) is a generic **block-level** container. `<span>` is a generic **inline** container. Neither carries semantic meaning.

#### 3. Purpose / Function
Used to group elements or text fragments for CSS styling (colors, layout) or JavaScript DOM manipulation when no semantic tag applies.

#### 4. Syntax
```html
<div class="box">
  <p>Text with <span class="highlight">colored</span> word.</p>
</div>
```

#### 5. Basic Example
```html
<div style="background-color: #f1f5f9; padding: 15px; border-radius: 5px;">
  <h3>Notification</h3>
  <p>Status: <span style="color: green; font-weight: bold;">PASSED</span></p>
</div>
```

#### 6. Output
Renders a full-width grey background box containing heading and text with the word "PASSED" highlighted in bold green font.

#### 7. Exhaustive Attributes Reference Table
| Feature | `<div>` Tag | `<span>` Tag |
| --- | --- | --- |
| **Display Mode** | `display: block;` | `display: inline;` |
| **Line Break** | Forces new line before and after. | Fits inline inside surrounding text. |
| **Width** | Takes 100% full container width. | Occupies ONLY as much width as text needs. |
| **Use Case** | Layout wrappers, card boxes, grid rows. | Highlighting text words, badge labels, icons. |
| Global Attributes | Full support (`id`, `class`, `style`, `title`, `dir`, `lang`, `hidden`, `tabindex`, `contenteditable`, `draggable`, `data-*`, `role`, `aria-*`). | Standard global values |

#### 8. Attribute Code Example
```html
<div id="card-1" class="row" data-card-id="101" role="region" tabindex="0">
  <span class="badge bg-primary" data-status="new">New</span>
</div>
```

#### 9. Real-World Case Study / Example
* **Case Study:** Used extensively in CSS Flexbox/Grid layouts, card components, and inline text formatting.
```html
<div class="card">
  <p>Price: <span class="price">$99</span></p>
</div>
```

#### 10. Important Notes
Use semantic tags (`<article>`, `<section>`, `<header>`) whenever possible, and reserve `<div>`/`<span>` strictly for CSS styling and JS hooks.

#### 11. Related Tags
Related to `<section>`, `<article>`, `<p>`.

#### 12. Deprecated / Obsolete Status
**Standard HTML5 Tag.** Generic structural wrappers.

---


# MODULE 7: MULTIMEDIA, INTERACTIVE & SCRIPTING TAGS

### 7.1 `<audio and video>`

#### 1. Tag Name
* **Tag Name:** `<audio and video>`
* **Opening & Closing Form:** `<video>...</video> and <audio>...</audio>`
* **Tag Type:** Paired Container Tags

#### 2. Definition
The `<video>` and `<audio>` tags embed native video clips and audio streams into an HTML document without requiring third-party plugins (like Flash).

#### 3. Purpose / Function
Plays video files (MP4, WebM) and audio files (MP3, WAV) natively in browser pages.

#### 4. Syntax
```html
<video src="file.mp4" controls width="400"></video>
<audio src="file.mp3" controls></audio>
```

#### 5. Basic Example
```html
<video width="320" height="240" controls poster="thumbnail.jpg" preload="metadata">
  <source src="lecture.mp4" type="video/mp4">
  <source src="lecture.webm" type="video/webm">
  Your browser does not support HTML5 video.
</video>
```

#### 6. Output
Renders a video player box with media playback controls (Play, Pause, Volume, Fullscreen) displaying thumbnail image.

#### 7. Exhaustive Attributes Reference Table
| Attribute | Description | Valid Values | Required/Optional |
| --- | --- | --- | --- |
| `src` | Direct path URL of media file. | URL string | Optional (if `<source>` used) |
| `controls` | Displays browser native playback controls. | `controls` | Recommended |
| `autoplay` | Plays media automatically on page load. | `autoplay` | Optional |
| `loop` | Automatically restarts media playback when finished. | `loop` | Optional |
| `muted` | Mutes audio output by default. | `muted` | Optional |
| `preload` | Hints browser on media preloading strategy. | `auto` (preloads full media), `metadata` (preloads duration/dimensions), `none` | Recommended |
| `poster` (in video) | Thumbnail image URL displayed before play. | Image URL string | Optional |
| `width` / `height` (in video) | Display dimensions in pixels. | Integer pixels | Recommended |
| `playsinline` (in video) | Plays inline on mobile iOS without fullscreen. | `playsinline` | Optional |
| `crossorigin` | Configures CORS request settings. | `anonymous`, `use-credentials` | Optional |

#### 8. Attribute Code Example
```html
<video controls autoplay muted loop preload="metadata" poster="preview.jpg" width="100%" height="auto" playsinline>
```

#### 9. Real-World Case Study / Example
* **Case Study:** Used on video streaming portals (YouTube, Netflix), podcast hosts, and course portals.
```html
<audio controls preload="none">
  <source src="podcast.mp3" type="audio/mpeg">
</audio>
```

#### 10. Important Notes
Always include `<source>` tags with multiple video formats (MP4, WebM) inside `<video>` for cross-browser fallback support.

#### 11. Related Tags
Contains `<source>`, `<track>`.

#### 12. Deprecated / Obsolete Status
**Standard HTML5 Tag.** Native media elements.

---

### 7.2 `<iframe>`

#### 1. Tag Name
* **Tag Name:** `<iframe>`
* **Opening & Closing Form:** `<iframe></iframe>`
* **Tag Type:** Paired Tag

#### 2. Definition
The `<iframe>` (Inline Frame) element is used to embed another HTML document or external webpage inside the current document.

#### 3. Purpose / Function
Embeds external content such as Google Maps location frames, YouTube video embeds, PDF previews, or payment gateways.

#### 4. Syntax
```html
<iframe src="URL" width="width" height="height" title="desc"></iframe>
```

#### 5. Basic Example
```html
<iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" width="560" height="315" title="YouTube video player" allowfullscreen loading="lazy"></iframe>
```

#### 6. Output
Renders an embedded 560x315 interactive YouTube video window directly on the page.

#### 7. Exhaustive Attributes Reference Table
| Attribute | Description | Valid Values | Required/Optional |
| --- | --- | --- | --- |
| `src` | URL location of external webpage or document to embed. | URL string | Mandatory |
| `width` / `height` | Display dimensions of iframe window in pixels or %. | Integer pixels / percentage | Recommended |
| `title` | Accessible title description of iframe content. | Title string | Mandatory for Accessibility |
| `name` | Target browsing context window name for target links. | Name string | Optional |
| `sandbox` | Applies security restrictions to embedded frame. | `allow-forms`, `allow-scripts`, `allow-same-origin`, `allow-popups`, `allow-modals`, `allow-top-navigation` | Security Best Practice |
| `loading` | Configures lazy loading performance. | `lazy`, `eager` | Optional |
| `allow` | Specifies Feature Policy / Permissions Policy permissions. | `camera`, `microphone`, `geolocation`, `fullscreen`, `autoplay` | Optional |
| `allowfullscreen` | Permits iframe to request fullscreen display. | `allowfullscreen` | Optional |
| `referrerpolicy` | Controls referrer header sent when loading frame. | `no-referrer`, `strict-origin` | Optional |
| `frameborder` / `marginwidth` / `marginheight` / `scrolling` / `align` | Presentation attributes. | Various | Obsolete in HTML5 |

#### 8. Attribute Code Example
```html
<iframe src="map.html" width="100%" height="450" title="Campus Map" loading="lazy" sandbox="allow-scripts allow-same-origin" allowfullscreen>
```

#### 9. Real-World Case Study / Example
* **Case Study:** Used for YouTube video embeds, Google Maps widgets, and embedded payment frames (Stripe, Razorpay).
```html
<iframe src="document.pdf" width="600" height="400" title="PDF Reader"></iframe>
```

#### 10. Important Notes
Always add a `title` attribute to `<iframe>` tags so screen readers can describe the embedded content to visually impaired users.

#### 11. Related Tags
Related to `<video>`, `<a>`.

#### 12. Deprecated / Obsolete Status
**Standard HTML5 Tag.** Standard embedding frame tag.

---

### 7.3 `<script and noscript>`

#### 1. Tag Name
* **Tag Name:** `<script and noscript>`
* **Opening & Closing Form:** `<script>...</script>`
* **Tag Type:** Paired Tags

#### 2. Definition
`<script>` embeds dynamic executable JavaScript code or links external script files. `<noscript>` defines fallback content rendered when JavaScript is disabled.

#### 3. Purpose / Function
`<script>` adds dynamic interactivity, form validation, and DOM manipulation. `<noscript>` warns users if JS is turned off.

#### 4. Syntax
```html
<script src="app.js" defer></script>
<noscript>Please enable JavaScript.</noscript>
```

#### 5. Basic Example
```html
<script>
  function showMessage() {
    alert("Assignment Submitted!");
  }
</script>
<noscript>
  <p style="color:red;">JavaScript is required to run this application.</p>
</noscript>
```

#### 6. Output
Executes JavaScript logic invisibly. Renders warning text ONLY if browser has disabled JavaScript execution.

#### 7. Exhaustive Attributes Reference Table
| Attribute | Description | Valid Values | Required/Optional |
| --- | --- | --- | --- |
| `src` | Path to external JavaScript file (.js). | URL string | Mandatory for external scripts |
| `defer` | Downloads script asynchronously and executes ONLY after HTML parsing finishes. | `defer` | Recommended for Head scripts |
| `async` | Downloads script asynchronously and executes immediately when loaded. | `async` | Optional |
| `type` | MIME type or script module context. | `text/javascript`, `module`, `importmap` | Optional |
| `crossorigin` | Configures CORS request behavior. | `anonymous`, `use-credentials` | Optional |
| `integrity` | Subresource Integrity (SRI) security verification hash string. | Hash string (`sha384-...`) | Optional |
| `nomodule` | Prevents script execution in browsers that support ES modules. | `nomodule` | Optional |
| `referrerpolicy` | Controls referrer header sent when fetching script. | `no-referrer`, `origin` | Optional |
| `language` | Scripting language (Obsolete). | `javascript` | Obsolete in HTML5 |

#### 8. Attribute Code Example
```html
<script src="https://cdn.example.com/app.js" defer type="module" crossorigin="anonymous" integrity="sha384-abc"></script>
```

#### 9. Real-World Case Study / Example
* **Case Study:** Included on every interactive web application to power JavaScript frameworks (React, Vue) and DOM logic.
```html
<script src="bootstrap.bundle.min.js" defer></script>
```

#### 10. Important Notes
Place external `<script>` links inside `<head>` with the `defer` attribute to prevent blocking HTML parser rendering.

#### 11. Related Tags
Related to `<noscript>`, `<template>`.

#### 12. Deprecated / Obsolete Status
**Standard HTML5 Tag.** Legacy `language="javascript"` attribute is obsolete in HTML5.

---


# MODULE 8: CSE SYLLABUS THEORY & CONCEPTUAL REFERENCE

---

## 8.1 Exhaustive HTML Global Attributes Reference Table

Global attributes are attributes that can be used on **any HTML5 element**.

| Attribute | Purpose / Function | Valid Values | Example Usage |
| --- | --- | --- | --- |
| `id` | Unique identifier for an element across the entire DOM tree. Used for CSS styling, JS DOM selection, and URL fragment anchors. | Unique string | `<div id="header-bar">` |
| `class` | Groups multiple elements under common class names for CSS styling and JS selection. | Space-separated class names | `<p class="lead text-primary">` |
| `style` | Applies inline CSS styling rules directly on the element. | CSS declarations string | `<h1 style="color: blue;">` |
| `title` | Provides advisory tooltip text shown when hovering mouse over element. | Tooltip string | `<abbr title="HyperText Markup Language">HTML</abbr>` |
| `lang` | Specifies the language code of the element's text content. | Language code (`en`, `hi`) | `<p lang="fr">Bonjour</p>` |
| `dir` | Specifies text directionality. | `ltr`, `rtl`, `auto` | `<p dir="rtl">سلام</p>` |
| `hidden` | Hides element visually from page display. | `hidden`, `until-found` | `<div hidden>Secret</div>` |
| `tabindex` | Controls keyboard Tab key navigation focus order. | Integer (`0`, `-1`, `1`) | `<div tabindex="0">` |
| `contenteditable` | Allows user to edit element text content live. | `true`, `false` | `<div contenteditable="true">` |
| `draggable` | Specifies whether element is draggable via Drag & Drop API. | `true`, `false`, `auto` | `<img draggable="true">` |
| `spellcheck` | Controls browser spelling/grammar checking. | `true`, `false` | `<textarea spellcheck="true">` |
| `translate` | Hints whether text should be translated by translation tools. | `yes`, `no` | `<span translate="no">Brand</span>` |
| `accesskey` | Keyboard shortcut key trigger to focus element. | Single character | `<button accesskey="s">` |
| `data-*` | Custom data payload attribute for developer JavaScript storage. | String | `<button data-user-id="1092">` |
| `role` | WAI-ARIA role defining element semantic purpose for accessibility. | ARIA role string (`button`, `navigation`) | `<div role="button">` |

---

## 8.2 Event Handler Attributes vs JavaScript Event Listeners

Event handler attributes execute inline JavaScript code when specific user interactions occur.

### Common Inline Event Attributes Table

| Event Attribute | Trigger Condition | Example Usage |
| --- | --- | --- |
| `onclick` | Fires when element is clicked. | `<button onclick="submitForm()">Submit</button>` |
| `onchange` | Fires when input value is committed/changed. | `<select onchange="updateCity(this.value)">` |
| `oninput` | Fires instantly as user types in text box. | `<input oninput="liveSearch(this.value)">` |
| `onsubmit` | Fires when form submission occurs. | `<form onsubmit="return validate()">` |
| `onload` | Fires when element/page finishes loading. | `<body onload="initApp()">` |

### Why Modern Web Development Prefers `addEventListener()`
1. **Separation of Concerns (SoC):** Keeps HTML markup clean and moves JavaScript logic into modular `.js` files.
2. **Security & CSP:** Inline event handlers violate Content Security Policy (`unsafe-inline`) rules and expose sites to XSS security vulnerabilities.
3. **Multiple Event Binding:** Inline attributes allow only ONE handler assignment per event. `addEventListener()` allows attaching multiple independent listener functions.

```html
<!-- DISCOURAGED (Inline Handler) -->
<button onclick="saveData()">Save</button>

<!-- RECOMMENDED (Modular JS Listener) -->
<button id="saveBtn">Save</button>
<script>
  document.getElementById("saveBtn").addEventListener("click", function() {
    console.log("Data Saved Securely");
  });
</script>
```

---

## 8.3 Void (Self-Closing) Elements vs Container Elements

1. **Container Elements (Paired Tags):** Have an opening tag (`<tag>`) and a closing tag (`</tag>`). They encapsulate inner text or child HTML elements. Examples: `<div>`, `<p>`, `<h1>`, `<table>`, `<form>`.
2. **Void Elements (Self-Closing Tags):** Cannot contain child text or inner HTML content. They do NOT have closing tags (`</input>` or `</img>` cause syntax errors in HTML5). Examples: `<br>`, `<hr>`, `<img>`, `<input>`, `<meta>`, `<link>`, `<source>`.

---

## 8.4 Block-Level vs Inline Elements Comparison

| Aspect / Feature | Block-Level Elements | Inline Elements |
| --- | --- | --- |
| **Default Display** | `display: block;` | `display: inline;` |
| **Line Break** | Always starts on a **new line**; forces newline after. | Fits **inline** within surrounding text flow. |
| **Width** | Occupies **100% full width** of parent container. | Occupies ONLY as much width as content requires. |
| **Margins & Padding** | Respects all 4 sides (Top, Bottom, Left, Right). | Respects Left & Right; ignores Top & Bottom vertical height margins. |
| **Key Examples** | `<div>`, `<p>`, `<h1>-<h6>`, `<section>`, `<article>`, `<ul>`, `<table>`, `<form>` | `<span>`, `<a>`, `<img>`, `<strong>`, `<em>`, `<code>`, `<label>`, `<input>` |

---

# MODULE 9: COMPLETE CSE LAB ASSIGNMENT HTML5 PAGE

Below is a complete, fully functional HTML5 webpage designed according to standard 3rd Semester CSE Web Technologies lab curriculum guidelines.

```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="VTU CSE Web Technologies Lab Assignment 1">
  <title>VTU CSE Department | Student Registration Portal</title>
  
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8fafc;
      color: #0f172a;
      line-height: 1.6;
    }
    header {
      background-color: #0f172a;
      color: white;
      text-align: center;
      padding: 1.5rem;
    }
    nav {
      background-color: #1e293b;
      padding: 0.75rem;
      text-align: center;
    }
    nav a {
      color: #38bdf8;
      margin: 0 15px;
      text-decoration: none;
      font-weight: bold;
    }
    .container {
      max-width: 1000px;
      margin: 20px auto;
      padding: 20px;
      background: white;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin: 15px 0;
    }
    table, th, td {
      border: 1px solid #cbd5e1;
    }
    th, td {
      padding: 10px;
      text-align: left;
    }
    th {
      background-color: #f1f5f9;
    }
    fieldset {
      border: 1px solid #cbd5e1;
      padding: 15px;
      border-radius: 6px;
      margin-bottom: 15px;
    }
    legend {
      font-weight: bold;
    }
    footer {
      background-color: #0f172a;
      color: white;
      text-align: center;
      padding: 1rem;
      margin-top: 30px;
    }
  </style>
</head>
<body>

  <!-- Document Header -->
  <header>
    <h1>Visvesvaraya Technological University</h1>
    <p>Department of Computer Science & Engineering</p>
  </header>

  <!-- Navigation Bar -->
  <nav aria-label="Main Navigation">
    <a href="#about">Course Overview</a>
    <a href="#schedule">Exam Schedule</a>
    <a href="#register">Student Registration</a>
  </nav>

  <!-- Main Content Container -->
  <main class="container" role="main">
    
    <!-- About Section -->
    <section id="about">
      <article>
        <h2>Web Technologies (18CS52)</h2>
        <p>This lab course introduces students to <strong>HTML5</strong>, <em>CSS3</em>, JavaScript, and server-side web development.</p>
      </article>
    </section>

    <hr>

    <!-- Table Section -->
    <section id="schedule">
      <h2>Semester 3 Examination Timetable</h2>
      <table>
        <caption>Table 1: CSE Exam Schedule 2026</caption>
        <thead>
          <tr>
            <th scope="col">Subject Code</th>
            <th scope="col">Subject Name</th>
            <th scope="col" colspan="2">Date & Session</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>18CS51</td>
            <td>Management & Entrepreneurship</td>
            <td>01 Sept 2026</td>
            <td>Morning</td>
          </tr>
          <tr>
            <td>18CS52</td>
            <td>Web Technology & Applications</td>
            <td>04 Sept 2026</td>
            <td>Morning</td>
          </tr>
        </tbody>
      </table>
    </section>

    <hr>

    <!-- Registration Form Section -->
    <section id="register">
      <h2>Lab Assignment Submission Form</h2>
      <form action="/submit-assignment" method="POST" enctype="multipart/form-data" autocomplete="on">
        
        <fieldset>
          <legend>Student Personal Details</legend>
          
          <p>
            <label for="usn">USN Number:</label><br>
            <input type="text" id="usn" name="student_usn" placeholder="e.g. 1VU22CS001" required pattern="1[A-Z]{2}[0-9]{2}[A-Z]{2}[0-9]{3}">
          </p>

          <p>
            <label for="email">College Email:</label><br>
            <input type="email" id="email" name="student_email" placeholder="student@college.edu" required autocomplete="email">
          </p>

          <p>
            <label for="branch">Select Branch:</label><br>
            <select id="branch" name="branch" required>
              <option value="" disabled selected>-- Select Branch --</option>
              <option value="cse">Computer Science (CSE)</option>
              <option value="ise">Information Science (ISE)</option>
            </select>
          </p>
        </fieldset>

        <fieldset>
          <legend>Assignment File Submission</legend>
          
          <p>
            <label for="file">Upload Code (.pdf / .zip):</label><br>
            <input type="file" id="file" name="code_file" accept=".pdf,.zip" required>
          </p>

          <p>
            <label for="remarks">Remarks:</label><br>
            <textarea id="remarks" name="student_remarks" rows="3" cols="40" placeholder="Enter optional comments..." maxlength="500"></textarea>
          </p>
        </fieldset>

        <button type="submit">Submit Assignment</button>
        <button type="reset">Reset Form</button>
      </form>
    </section>

  </main>

  <!-- Document Footer -->
  <footer>
    <p>&copy; 2026 VTU Department of Computer Science. All rights reserved.</p>
  </footer>

</body>
</html>
```
