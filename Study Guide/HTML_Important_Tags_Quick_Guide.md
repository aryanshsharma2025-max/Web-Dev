# HTML5 Essential & Important Tags Study Guide
*(High-Yield Reference for College Exams, Lab Viva & Assignments)*

---

# SECTION 1: DOCUMENT STRUCTURE & METADATA TAGS

## 1.1 `<html>`
* **Tag Type:** Paired / Container Tag (`<html>...</html>`)
* **Definition:** The root element that wraps all content in an HTML document.
* **Purpose:** Instructs browser that the document contains HTML code and defines language context.
* **Syntax & Example:**
```html
<html lang="en">
  <!-- Document content -->
</html>
```
* **Output:** Defines document root boundary; no direct visual output.
* **Attributes:** `lang="en"` (Specifies primary document language).
* **Key Notes:** Must contain exactly one `<head>` and one `<body>`.

---

## 1.2 `<head>`
* **Tag Type:** Paired / Container Tag (`<head>...</head>`)
* **Definition:** Container for document metadata (data about the document).
* **Purpose:** Stores page title, character set, CSS stylesheets, scripts, and SEO tags.
* **Syntax & Example:**
```html
<head>
  <meta charset="UTF-8">
  <title>College Portal</title>
  <link rel="stylesheet" href="style.css">
</head>
```
* **Output:** Invisible on page body; configures browser settings and tab header.
* **Key Notes:** Executed/parsed before rendering the `<body>`.

---

## 1.3 `<title>`
* **Tag Type:** Paired Tag (`<title>...</title>`)
* **Definition:** Defines the title of the HTML document.
* **Purpose:** Displays text on browser tab, bookmark label, and search engine results title.
* **Syntax & Example:** `<title>Web Technologies Lab | CSE</title>`
* **Output:** Displays title string in browser top tab bar.
* **Key Notes:** Mandatory tag inside `<head>`. Exactly one title tag per page.

---

## 1.4 `<body>`
* **Tag Type:** Paired / Container Tag (`<body>...</body>`)
* **Definition:** Encapsulates all visible content of an HTML document.
* **Purpose:** Holds headings, paragraphs, images, tables, forms, and scripts shown to users.
* **Syntax & Example:**
```html
<body>
  <h1>Welcome to CSE Portal</h1>
</body>
```
* **Output:** Renders full visual canvas of the web page.

---

## 1.5 `<meta>`
* **Tag Type:** Void / Self-Closing Tag (`<meta>`)
* **Definition:** Provides metadata about character encoding, page description, and viewport layout.
* **Purpose:** Ensures UTF-8 symbol support and responsive layout on mobile screens.
* **Syntax & Examples:**
```html
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
```
* **Key Attributes:**
  * `charset="UTF-8"`: Unicode encoding.
  * `name="viewport"` / `content="width=device-width, initial-scale=1.0"`: Responsive mobile rendering.

---

## 1.6 `<link>`
* **Tag Type:** Void / Self-Closing Tag (`<link>`)
* **Definition:** Links external resources to current HTML document.
* **Purpose:** Attaches external CSS stylesheets or website favicons.
* **Syntax & Example:** `<link rel="stylesheet" href="styles.css">`
* **Key Attributes:** `rel="stylesheet"`, `href="URL"`, `type="text/css"`.

---

# SECTION 2: HEADINGS, TEXT & FORMATTING TAGS

## 2.1 `<h1>` to `<h6>`
* **Tag Type:** Paired Tags (`<h1>...</h1>` to `<h6>...</h6>`)
* **Definition:** Six levels of document headings (`<h1>` highest priority, `<h6>` lowest).
* **Purpose:** Organizes content hierarchy and signals topic importance to search engines.
* **Syntax & Example:**
```html
<h1>Module 1: HTML5 (Main Heading)</h1>
<h2>1.1 Introduction (Sub-heading)</h2>
```
* **Output:** Bold text block rendered in decreasing font sizes from H1 to H6.

---

## 2.2 `<p>` (Paragraph)
* **Tag Type:** Paired Tag (`<p>...</p>`)
* **Definition:** Represents a paragraph block of text.
* **Purpose:** Groups related text sentences with standard top and bottom vertical margin spacing.
* **Example:** `<p>HTML is the standard markup language for Web pages.</p>`

---

## 2.3 `<br>` & `<hr>`
* **Tag Type:** Void Tags (`<br>`, `<hr>`)
* **Definitions:**
  * `<br>`: Inserts a single text line break.
  * `<hr>`: Inserts a horizontal rule line break (thematic divider).
* **Example:**
```html
<p>Line 1<br>Line 2</p>
<hr>
```

---

## 2.4 `<a>` (Anchor / Hyperlink)
* **Tag Type:** Paired Tag (`<a>...</a>`)
* **Definition:** Creates a clickable hyperlink to navigate to another page, file, or section.
* **Purpose:** Enables web navigation.
* **Syntax & Example:** `<a href="https://vtu.ac.in" target="_blank">Visit VTU Website</a>`
* **Key Attributes:**
  * `href="URL"`: Target location link destination.
  * `target="_blank"`: Opens link in a new browser tab.
  * `download`: Prompts file download.

---

## 2.5 `<img>` (Image)
* **Tag Type:** Void Tag (`<img>`)
* **Definition:** Embeds an image file into the webpage layout.
* **Syntax & Example:** `<img src="logo.png" alt="University Logo" width="150" height="100">`
* **Key Attributes:**
  * `src="path"`: Image file source URL (Mandatory).
  * `alt="text"`: Alternate text description for accessibility & broken images (Mandatory).
  * `width` / `height`: Image dimensions in pixels.

---

## 2.6 `<strong>` & `<em>` (Semantic Formatting)
* **Tag Type:** Paired Inline Tags (`<strong>...</strong>`, `<em>...</em>`)
* **Definitions:**
  * `<strong>`: Indicates strong importance (Renders as **bold**).
  * `<em>`: Indicates vocal stress emphasis (Renders as *italics*).
* **Difference from `<b>` & `<i>`:** `<strong>` and `<em>` carry semantic meaning for screen readers, whereas `<b>` and `<i>` are purely visual styling.

---

## 2.7 `<pre>` & `<code>`
* **Tag Type:** Paired Tags (`<pre>...</pre>`, `<code>...</code>`)
* **Definitions:**
  * `<pre>`: Preserves exact white spaces, tabs, and line breaks.
  * `<code>`: Formats inline code snippet in monospace font.
* **Combined Example:**
```html
<pre><code>
#include &lt;iostream&gt;
int main() { return 0; }
</code></pre>
```

---

# SECTION 3: LIST TAGS

## 3.1 Unordered (`<ul>`) & Ordered (`<ol>`) Lists
* **Tag Type:** Container Tags (`<ul>`, `<ol>`) paired with `<li>` (List Item).
* **Definitions:**
  * `<ul>`: Bulleted list where order does not matter.
  * `<ol>`: Numbered sequential list.
* **Examples:**
```html
<!-- Unordered List -->
<ul>
  <li>HTML</li>
  <li>CSS</li>
</ul>

<!-- Ordered List -->
<ol type="1" start="1">
  <li>Step 1</li>
  <li>Step 2</li>
</ol>
```
* **Key Attributes in `<ol>`:** `type="1|A|a|I|i"`, `start="number"`, `reversed`.

---

## 3.2 Description List (`<dl>`, `<dt>`, `<dd>`) *(Frequent Exam Question)*
* **Tag Type:** Paired Container Tags.
* **Definition:** Renders a list of terms (`<dt>`) and their matching descriptions (`<dd>`).
* **Example:**
```html
<dl>
  <dt>HTML</dt>
  <dd>HyperText Markup Language</dd>
  <dt>CSS</dt>
  <dd>Cascading Style Sheets</dd>
</dl>
```

---

# SECTION 4: TABLE TAGS (LAB VIVA ESSENTIAL)

## 4.1 `<table>`, `<tr>`, `<th>`, `<td>`, `<caption>`
* **Definitions:**
  * `<table>`: Container grid for tabular data.
  * `<caption>`: Table heading title caption.
  * `<tr>`: Table Row.
  * `<th>`: Table Header Cell (Bold & centered).
  * `<td>`: Table Data Cell.
* **Example with `colspan` & `rowspan`:**
```html
<table border="1">
  <caption>Student Marks Sheet</caption>
  <tr>
    <th>USN</th>
    <th>Name</th>
    <th colspan="2">Marks (Lab + Theory)</th>
  </tr>
  <tr>
    <td>1VU22CS001</td>
    <td>Aryansh</td>
    <td>48</td>
    <td>95</td>
  </tr>
</table>
```
* **Key Cell Attributes:**
  * `colspan="n"`: Merges *n* adjacent columns horizontally.
  * `rowspan="n"`: Merges *n* adjacent rows vertically.

---

# SECTION 5: FORMS & INPUT CONTROLS (HIGHEST WEIGHTAGE)

## 5.1 `<form>`
* **Tag Type:** Paired Container Tag (`<form>...</form>`)
* **Definition:** Container used to collect user input data and transmit it to a web server.
* **Syntax & Example:**
```html
<form action="/submit-data.php" method="POST">
  <!-- Input controls -->
</form>
```
* **Key Attributes:**
  * `action="URL"`: Target server script endpoint.
  * `method="GET|POST"`: HTTP method. (`GET` appends data in URL; `POST` sends data securely in HTTP request payload body).
  * `enctype="multipart/form-data"`: Mandatory when uploading files via `<input type="file">`.

---

## 5.2 `<input>` Types & Attributes
* **Tag Type:** Void Tag (`<input>`)
* **Essential Input Types Table:**

| `type` Value | Purpose | Example |
| --- | --- | --- |
| `text` | Single-line plain text entry. | `<input type="text" name="username">` |
| `password` | Masks text input with dots/asterisks. | `<input type="password" name="pass">` |
| `email` | Email address entry with auto-validation. | `<input type="email" name="useremail">` |
| `number` | Numeric input with min/max bounds. | `<input type="number" min="1" max="100">` |
| `radio` | Radio button (select ONLY ONE from group). | `<input type="radio" name="gender" value="male">` |
| `checkbox` | Checkbox toggle (select MULTIPLE choices). | `<input type="checkbox" name="skills" value="html">` |
| `file` | File attachment picker. | `<input type="file" name="resume">` |
| `submit` | Submits form to server. | `<input type="submit" value="Submit">` |
| `reset` | Resets form fields to default values. | `<input type="reset" value="Clear">` |

* **Essential Input Attributes:**
  * `name="str"`: Variable key sent to server payload (Mandatory).
  * `value="str"`: Initial or submitted value.
  * `placeholder="text"`: Hint text shown inside empty input box.
  * `required`: Prevents form submission if field is blank.
  * `readonly`: Field is readable but user cannot edit text.
  * `disabled`: Deactivates field and excludes it from form submission payload.

---

## 5.3 `<label>`
* **Tag Type:** Paired Tag (`<label>...</label>`)
* **Purpose:** Binds readable text label to an input field for accessibility.
* **Example:**
```html
<label for="student-usn">Enter USN:</label>
<input type="text" id="student-usn" name="usn">
```
* **Key Attribute:** `for="id_value"` (Must match target input's `id` attribute).

---

## 5.4 `<select>` & `<option>` (Dropdown Menu)
* **Example:**
```html
<label for="branch">Select Branch:</label>
<select id="branch" name="branch">
  <option value="cse">Computer Science</option>
  <option value="ise">Information Science</option>
</select>
```

---

## 5.5 `<textarea>` (Multi-line Text Area)
* **Example:** `<textarea name="address" rows="4" cols="30" placeholder="Enter full address..."></textarea>`

---

# SECTION 6: SEMANTIC LAYOUT TAGS (MODERN HTML5)

HTML5 introduced semantic tags to give clear meaning to web layout sections instead of using generic `<div>` elements for everything.

| Tag | Purpose & Description |
| --- | --- |
| `<header>` | Represents top header banner containing title, logo, and main navigation. |
| `<nav>` | Defines container for primary navigation hyperlink menu bar. |
| `<main>` | Encapsulates the unique primary content of the web page (Max 1 per page). |
| `<section>` | Groups related content logically into thematic chapters or topics. |
| `<article>` | Represents a self-contained, independent post or article. |
| `<aside>` | Defines sidebar or callout box with related peripheral content. |
| `<footer>` | Defines bottom footer area containing copyright, terms, and contact details. |
| `<div>` | Generic non-semantic **block-level** container used for CSS styling. |
| `<span>` | Generic non-semantic **inline** container used for inline text styling. |

---

# SECTION 7: MULTIMEDIA & INTERACTIVE TAGS

## 7.1 `<video>` & `<audio>`
* **Example:**
```html
<!-- Video Player -->
<video width="320" height="240" controls poster="thumb.jpg">
  <source src="lecture.mp4" type="video/mp4">
  Your browser does not support video playback.
</video>
```
* **Key Attributes:** `controls` (shows play/pause buttons), `autoplay`, `loop`, `muted`.

---

## 7.2 `<iframe>` (Inline Frame)
* **Definition:** Embeds an external web page or YouTube video window inside current page.
* **Example:** `<iframe src="https://maps.google.com" width="400" height="300" title="Map"></iframe>`

---

## 7.3 `<details>` & `<summary>` (Accordion Widget)
* **Example:**
```html
<details>
  <summary>Click to view Exam Rule</summary>
  <p>Bring college ID card to examination hall.</p>
</details>
```

---

# SECTION 8: QUICK REVISION & COMPARISON SUMMARY

### 1. Block-Level vs Inline Elements

| Feature | Block-Level Elements | Inline Elements |
| --- | --- | --- |
| **Line Break** | Starts on a **new line**; forces newline after. | Fits **inline** with surrounding text. |
| **Width** | Takes **100% full container width**. | Takes ONLY width required by content. |
| **Examples** | `<div>`, `<p>`, `<h1>-<h6>`, `<ul>`, `<table>`, `<form>` | `<span>`, `<a>`, `<img>`, `<strong>`, `<em>`, `<input>` |

---

### 2. Common Void (Self-Closing) Elements List
Void elements **cannot contain child text/content** and **do NOT have closing tags**:
* `<br>`, `<hr>`, `<img>`, `<input>`, `<link>`, `<meta>`, `<source>`

---

# SECTION 9: COMPLETE EXAM PRACTICE HTML PAGE

```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Registration Portal</title>
</head>
<body>

  <header>
    <h1>Department of Computer Science</h1>
    <nav>
      <a href="#about">About</a> | <a href="#register">Register</a>
    </nav>
  </header>

  <main>
    <section id="about">
      <h2>Web Technology Lab Course</h2>
      <p>Learn <strong>HTML5</strong>, <em>CSS3</em>, and JavaScript.</p>
    </section>

    <section id="register">
      <h2>Student Registration Form</h2>
      <form action="/submit" method="POST">
        <p>
          <label for="usn">USN:</label><br>
          <input type="text" id="usn" name="usn" required placeholder="e.g. 1VU22CS001">
        </p>
        <p>
          <label for="branch">Branch:</label><br>
          <select id="branch" name="branch">
            <option value="cse">CSE</option>
            <option value="ise">ISE</option>
          </select>
        </p>
        <p>
          <input type="submit" value="Register Student">
        </p>
      </form>
    </section>
  </main>

  <footer>
    <p>&copy; 2026 College Web Portal. All rights reserved.</p>
  </footer>

</body>
</html>
```
