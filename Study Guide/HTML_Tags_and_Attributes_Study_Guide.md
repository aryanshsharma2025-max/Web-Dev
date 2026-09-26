
# SECTION B: HEADINGS AND TEXT TAGS


### 2.1 `<h1 to h6>`

#### 1. Tag Name
* **Tag Name:** `<h1 to h6>`
* **Opening & Closing Form:** `<h1>...</h1> to <h6>...</h6>`
* **Tag Type:** Paired / Container Tags

#### 2. Definition
The `<h1>` through `<h6>` elements represent six levels of section headings in HTML documents. `<h1>` represents the highest section level (most important) and `<h6>` represents the lowest level.

#### 3. Purpose / Function
Used to structure document hierarchy, organize text content logically, improve readability, and signal content importance to search engine indexing crawlers and accessibility screen readers.

#### 4. Syntax
```html
<h1>Heading Level 1 (Main Title)</h1>
<h2>Heading Level 2</h2>
<h3>Heading Level 3</h3>
<h4>Heading Level 4</h4>
<h5>Heading Level 5</h5>
<h6>Heading Level 6 (Sub-heading)</h6>
```

#### 5. Basic Example
```html
<h1>Computer Science Engineering</h1>
<h2>Semester 3 Syllabus</h2>
<h3>Web Technologies</h3>
```

#### 6. Output
Renders headings with descending font size and font weight by default browser styles (`<h1>` largest bold, `<h6>` smallest bold).

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `align` | Sets text alignment (`left`, `center`, `right`, `justify`). | `align="center"` | Deprecated (Use CSS) |
| Global Attributes | Supports `id`, `class`, `style`, `title`, `lang`. | `id="unit-1"` | Optional |

#### 8. Attribute Example
```html
<h1 id="main-heading" class="text-primary text-center">Data Structures</h1>
<h2 class="section-title">Binary Search Trees</h2>
```

#### 9. Real-World Example
* **Use Case:** Used across all articles, blogs, documentation sites (e.g. MDN, Wikipedia) to establish semantic content outline.
* **Code:**
```html
<article>
  <h1>Understanding Operating Systems</h1>
  <h2>1. Process Management</h2>
  <h3>1.1 CPU Scheduling Algorithms</h3>
</article>
```

#### 10. Important Notes
Only use ONE `<h1>` per page representing the page main topic. Never skip heading levels (e.g., do not jump from `<h1>` directly to `<h3>`). Avoid using headings solely to resize text; use CSS for visual sizing.

#### 11. Related Tags
Related to `<header>`, `<hgroup>`, and structural sectioning tags like `<section>` and `<article>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tags.** `align` attribute is deprecated in HTML5.

---

### 2.2 `<p>`

#### 1. Tag Name
* **Tag Name:** `<p>`
* **Opening & Closing Form:** `<p>...</p>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<p>` tag defines a paragraph of text. Browsers automatically add vertical margin (blank space) before and after a paragraph element.

#### 3. Purpose / Function
Groups related sentences into distinct block paragraphs to organize written textual content cleanly.

#### 4. Syntax
```html
<p>Paragraph text content goes here...</p>
```

#### 5. Basic Example
```html
<p>HTML stands for HyperText Markup Language. It is the standard markup language for documents designed to be displayed in a web browser.</p>
```

#### 6. Output
Displays a block of body text separated from adjacent content by top and bottom margins.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `align` | Specifies alignment of text inside paragraph. | `align="justify"` | Deprecated (Use CSS) |
| Global Attributes | Supports `id`, `class`, `style`, `title`. | `class="lead"` | Optional |

#### 8. Attribute Example
```html
<p class="lead-text" style="line-height: 1.6;">This paragraph introduces the assignment topic with custom styling.</p>
```

#### 9. Real-World Example
* **Use Case:** Used everywhere on the web for news stories, blog posts, documentation, and product descriptions.
* **Code:**
```html
<section>
  <p>Our college was established in 1995 with a vision to provide quality technical education.</p>
  <p>We offer undergraduate programs in CSE, ECE, and Mechanical Engineering.</p>
</section>
```

#### 10. Important Notes
`<p>` is a block-level element. It cannot contain other block-level elements such as `<div>`, `<table>`, or `<h1>`-`<h6>`. Browsers automatically close a `<p>` tag when encountering another block element.

#### 11. Related Tags
Related to `<br>`, `<hr>`, `<pre>`, and `<span>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** `align` attribute is deprecated.

---

### 2.3 `<br>`

#### 1. Tag Name
* **Tag Name:** `<br>`
* **Opening & Closing Form:** `<br> (No closing tag)`
* **Tag Type:** Empty / Void Tag

#### 2. Definition
The `<br>` tag produces a line break (newline) in text. It moves subsequent content directly to the next line without creating a new paragraph margin.

#### 3. Purpose / Function
Forces a line break where line breaks are significant, such as in poems, postal addresses, or lyrics.

#### 4. Syntax
```html
Line 1 text<br>Line 2 text
```

#### 5. Basic Example
```html
<p>Department of Computer Science<br>Engineering Block A<br>VTU Campus, Belagavi</p>
```

#### 6. Output
Renders the address on three separate consecutive lines without paragraph gaps between them.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `clear` | Indicates where next line should begin after floating elements. | `clear="all"` | Deprecated (Use CSS clear) |

#### 8. Attribute Example
```html
<span>First Line</span><br><span>Second Line</span>
```

#### 9. Real-World Example
* **Use Case:** Used in contact address display cards, poem stanzas, and form receipt displays.
* **Code:**
```html
<address>
  John Doe<br>
  123 College Road<br>
  New Delhi, India 110001
</address>
```

#### 10. Important Notes
Do NOT use `<br>` to create visual vertical spacing between paragraphs; use CSS margins instead for accessibility and maintainability.

#### 11. Related Tags
Related to `<p>`, `<address>`, and `<pre>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** `clear` attribute is deprecated.

---

### 2.4 `<hr>`

#### 1. Tag Name
* **Tag Name:** `<hr>`
* **Opening & Closing Form:** `<hr> (No closing tag)`
* **Tag Type:** Empty / Void Tag

#### 2. Definition
The `<hr>` tag represents a thematic break between paragraph-level elements in an HTML page (e.g., a shift of topic in a story or scene transition).

#### 3. Purpose / Function
Visually renders as a horizontal rule/divider line separating different sections or topics.

#### 4. Syntax
```html
<hr>
```

#### 5. Basic Example
```html
<h3>Section 1: Introduction</h3>
<p>Content of section 1.</p>
<hr>
<h3>Section 2: Methodology</h3>
<p>Content of section 2.</p>
```

#### 6. Output
Renders a thin horizontal dividing line across the width of the parent container separating Section 1 from Section 2.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `align` | Sets alignment (`left`, `center`, `right`). | `align="center"` | Deprecated |
| `color` | Sets line color. | `color="blue"` | Deprecated |
| `size` | Sets line thickness in pixels. | `size="4"` | Deprecated |
| `width` | Sets line width in px or %. | `width="80%"` | Deprecated |

#### 8. Attribute Example
```html
<!-- HTML5 Standard formatting via CSS -->
<hr style="border: 0; height: 2px; background: #cbd5e1; margin: 20px 0;">
```

#### 9. Real-World Example
* **Use Case:** Used between article sections, modal dialog footers, and blog comment dividers.
* **Code:**
```html
<article>
  <p>End of Chapter 1 summary.</p>
  <hr>
  <p>Chapter 2 begins here.</p>
</article>
```

#### 10. Important Notes
In HTML5, `<hr>` is defined semantically as a thematic break, not just a purely visual decorative line.

#### 11. Related Tags
Related to `<section>`, `<article>`, and CSS border styling.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Presentation attributes (`color`, `size`, `width`, `align`, `noshade`) are obsolete.

---

### 2.5 `<pre>`

#### 1. Tag Name
* **Tag Name:** `<pre>`
* **Opening & Closing Form:** `<pre>...</pre>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<pre>` tag defines preformatted text. Text inside `<pre>` is displayed in a fixed-width monospace font and preserves both whitespace spaces and line breaks exactly as typed in the source code.

#### 3. Purpose / Function
Used to present code listings, ASCII art, tabular text, or formatted computer output without HTML space collapsing.

#### 4. Syntax
```html
<pre>
  Preserved line 1
    Indented line 2
</pre>
```

#### 5. Basic Example
```html
<pre>
  #include <iostream>
  using namespace std;
  int main() {
      cout << "Hello World!";
      return 0;
  }
</pre>
```

#### 6. Output
Renders C++ source code with exact spacing and tab indents intact using a monospace font (Courier/Consolas).

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `width` | Specifies maximum characters per line. | `width="80"` | Deprecated |
| Global Attributes | Supports `class`, `id`, `style`. | `class="code-block"` | Optional |

#### 8. Attribute Example
```html
<pre class="bg-dark text-light p-3">
  SELECT * FROM Students WHERE gpa > 3.5;
</pre>
```

#### 9. Real-World Example
* **Use Case:** Used extensively on technical sites like StackOverflow, GitHub, and tutorial platforms to display multi-line source code.
* **Code:**
```html
<pre><code>
function add(a, b) {
    return a + b;
}
</code></pre>
```

#### 10. Important Notes
Combine `<pre>` with `<code>` for code snippets. Reserved HTML characters like `<` and `>` inside `<pre>` must still be escaped as `&lt;` and `&gt;`.

#### 11. Related Tags
Related to `<code>`, `<kbd>`, `<samp>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** `width` attribute is obsolete.

---

### 2.6 `<blockquote>`

#### 1. Tag Name
* **Tag Name:** `<blockquote>`
* **Opening & Closing Form:** `<blockquote>...</blockquote>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<blockquote>` element indicates that the enclosed text is an extended quotation taken from another external source.

#### 3. Purpose / Function
Renders indented block quotation text, attributing cited material in academic papers, blogs, and news reports.

#### 4. Syntax
```html
<blockquote cite="URL">
  Quoted text content
</blockquote>
```

#### 5. Basic Example
```html
<blockquote cite="https://www.w3.org/TR/html52/">
  HTML5 is the 5th major version of the core language of the World Wide Web.
</blockquote>
```

#### 6. Output
Displays the quoted paragraph indented from both left and right margins.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `cite` | Specifies URL pointing to the original source document. | `cite="https://quote-source.com"` | Optional |

#### 8. Attribute Example
```html
<blockquote cite="https://en.wikipedia.org/wiki/Alan_Turing">
  <p>Sometimes it is the people no one imagines anything of who do the things that no one can imagine.</p>
</blockquote>
```

#### 9. Real-World Example
* **Use Case:** Used in news articles, reviews, academic websites, and quote cards.
* **Code:**
```html
<figure>
  <blockquote cite="https://quotes.com/steve-jobs">
    <p>Design is not just what it looks like and feels like. Design is how it works.</p>
  </blockquote>
  <figcaption>— Steve Jobs</figcaption>
</figure>
```

#### 10. Important Notes
Use `<blockquote>` for multi-line block quotes. For short inline quotes inside a paragraph, use `<q>`.

#### 11. Related Tags
Related to `<q>`, `<cite>`, `<figure>`, `<figcaption>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Not deprecated.

---

### 2.7 `<q>`

#### 1. Tag Name
* **Tag Name:** `<q>`
* **Opening & Closing Form:** `<q>...</q>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<q>` tag defines a short inline quotation. Most web browsers automatically surround text in `<q>` tags with quotation marks (e.g. "...")

#### 3. Purpose / Function
Used for short, inline quotes that fit inside a running paragraph sentence.

#### 4. Syntax
```html
<p>Text <q cite="URL">Inline quotation</q> continued text.</p>
```

#### 5. Basic Example
```html
<p>As Neil Armstrong famously said, <q>That's one small step for man, one giant leap for mankind.</q></p>
```

#### 6. Output
Renders: As Neil Armstrong famously said, "That's one small step for man, one giant leap for mankind."

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `cite` | Specifies URL location of original quote source. | `cite="https://nasa.gov"` | Optional |

#### 8. Attribute Example
```html
<p>The professor reminded us, <q cite="https://syllabus.edu">Assignments are due at midnight.</q></p>
```

#### 9. Real-World Example
* **Use Case:** Used in blog posts, news stories, and online literary essays.
* **Code:**
```html
<p>Sir Tim Berners-Lee stated that <q cite="https://w3.org">The Web as I envisaged it, we haven't seen it yet.</q></p>
```

#### 10. Important Notes
Do not type literal quotation marks inside `<q>` tags; browsers inject locale-appropriate quotation marks automatically.

#### 11. Related Tags
Related to `<blockquote>` and `<cite>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Not deprecated.

---

### 2.8 `<abbr>`

#### 1. Tag Name
* **Tag Name:** `<abbr>`
* **Opening & Closing Form:** `<abbr>...</abbr>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<abbr>` element represents an abbreviation or acronym (e.g., HTML, CPU, NASA, IEEE).

#### 3. Purpose / Function
Provides the full expansion of an abbreviation via the `title` attribute, showing a tooltip when hovered by users.

#### 4. Syntax
```html
<abbr title="Full Expansion Text">Abbreviation</abbr>
```

#### 5. Basic Example
```html
<p>We are learning <abbr title="HyperText Markup Language">HTML</abbr> in CSE department.</p>
```

#### 6. Output
Renders "HTML" usually with a dotted underline. Hovering over it displays tooltip "HyperText Markup Language".

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `title` | Provides full phrase/definition of the abbreviation. | `title="Central Processing Unit"` | Recommended |

#### 8. Attribute Example
```html
<p>The <abbr title="Institute of Electrical and Electronics Engineers">IEEE</abbr> standard is followed worldwide.</p>
```

#### 9. Real-World Example
* **Use Case:** Used in technical documentations, medical portals, academic papers, and government portals.
* **Code:**
```html
<p>Contact the <abbr title="Doctor of Philosophy">PhD</abbr> department for research admissions.</p>
```

#### 10. Important Notes
Replaces the obsolete `<acronym>` tag. Crucial for screen readers to spell out acronyms correctly.

#### 11. Related Tags
Related to `<dfn>` and `<cite>`. Replaces `<acronym>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Not deprecated.

---

### 2.9 `<address>`

#### 1. Tag Name
* **Tag Name:** `<address>`
* **Opening & Closing Form:** `<address>...</address>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<address>` HTML element indicates that the enclosed HTML provides contact information for a person, department, or organization.

#### 3. Purpose / Function
Encapsulates email addresses, physical locations, phone numbers, social media handles, or website authors.

#### 4. Syntax
```html
<address>
  Contact details...
</address>
```

#### 5. Basic Example
```html
<address>
  Written by <a href="mailto:author@college.edu">Aryansh Sharma</a>.<br>
  Visit us at: College Campus, Block 4<br>
  New Delhi, India
</address>
```

#### 6. Output
Renders enclosed text in italic font by default, separated as a block element.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Supports `id`, `class`, `style`. | `class="contact-info"` | Optional |

#### 8. Attribute Example
```html
<address class="footer-contact">
  Email: <a href="mailto:info@univ.edu">info@univ.edu</a>
</address>
```

#### 9. Real-World Example
* **Use Case:** Used in page footers (`<footer>`), article author contact blocks, and company About Us pages.
* **Code:**
```html
<footer>
  <address>
    Contact Dean of Academics: <a href="tel:+911123456789">+91 11 2345 6789</a>
  </address>
</footer>
```

#### 10. Important Notes
Should only contain contact information relevant to its surrounding context (e.g. article author or site owner), not arbitrary physical addresses.

#### 11. Related Tags
Related to `<footer>` and `<a>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Not deprecated.

---

### 2.10 `<cite>`

#### 1. Tag Name
* **Tag Name:** `<cite>`
* **Opening & Closing Form:** `<cite>...</cite>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<cite>` tag marks a reference to a cited creative work (e.g., a book, paper, essay, poem, song, movie, artwork, website).

#### 3. Purpose / Function
Provides semantic citation of title references in academic writing and literature citations.

#### 4. Syntax
```html
<p>Text about work <cite>Title of Work</cite>.</p>
```

#### 5. Basic Example
```html
<p>More details can be found in <cite>Introduction to Algorithms (CLRS)</cite>.</p>
```

#### 6. Output
Renders the title "Introduction to Algorithms (CLRS)" in italicized font.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="book-title"` | Optional |

#### 8. Attribute Example
```html
<p>Refer to chapter 3 of <cite class="source-ref">Modern Operating Systems</cite> by Tanenbaum.</p>
```

#### 9. Real-World Example
* **Use Case:** Used on online research repositories, university library catalogs, and Wikipedia references.
* **Code:**
```html
<p>As described in <cite>The C Programming Language</cite> by Kernighan and Ritchie...</p>
```

#### 10. Important Notes
Must contain the title of a work, not the name of a person.

#### 11. Related Tags
Related to `blockquote`, `q`, `abbr`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Not deprecated.

---

### 2.11 `<code>`

#### 1. Tag Name
* **Tag Name:** `<code>`
* **Opening & Closing Form:** `<code>...</code>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<code>` tag displays its contents formatted in a manner intended to indicate that the text is a short fragment of computer code.

#### 3. Purpose / Function
Formats inline computer programming terms, variable names, function signatures, or HTML tag names in a monospace font.

#### 4. Syntax
```html
<p>Use the <code>functionName()</code> to compute values.</p>
```

#### 5. Basic Example
```html
<p>In Python, use the <code>print()</code> function to output text to the console.</p>
```

#### 6. Output
Renders `print()` in a monospace font (e.g., Courier) embedded inline inside paragraph text.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Supports `class` for syntax highlighter integration. | `class="language-cpp"` | Optional |

#### 8. Attribute Example
```html
<code class="language-javascript">const count = 10;</code>
```

#### 9. Real-World Example
* **Use Case:** Used throughout programming documentation sites like MDN, GeeksforGeeks, and W3Schools.
* **Code:**
```html
<p>To check file status in Git, type <code>git status</code> into terminal.</p>
```

#### 10. Important Notes
For multi-line block code snippets, enclose `<code>` inside a `<pre>` element.

#### 11. Related Tags
Related to `<pre>`, `<kbd>`, `<samp>`, `<var>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Not deprecated.

---

### 2.12 `<kbd>`

#### 1. Tag Name
* **Tag Name:** `<kbd>`
* **Opening & Closing Form:** `<kbd>...</kbd>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<kbd>` tag represents user input, typically keyboard key entries, voice commands, or manual input instructions.

#### 3. Purpose / Function
Styles text to visually represent keyboard shortcuts or user input keys.

#### 4. Syntax
```html
<p>Press <kbd>Key</kbd> to execute.</p>
```

#### 5. Basic Example
```html
<p>Press <kbd>Ctrl</kbd> + <kbd>C</kbd> to copy selected text.</p>
```

#### 6. Output
Renders "Ctrl" and "C" in monospace style (often styled with CSS to look like physical keyboard key caps).

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="key-btn"` | Optional |

#### 8. Attribute Example
```html
<p>Save file using <kbd class="keycap">Ctrl</kbd> + <kbd class="keycap">S</kbd>.</p>
```

#### 9. Real-World Example
* **Use Case:** Used in software user manuals, OS shortcut cheatsheets, and web IDE tutorials.
* **Code:**
```html
<p>To open Developer Tools in Chrome, press <kbd>F12</kbd> or <kbd>Ctrl</kbd> + <kbd>Shift</kbd> + <kbd>I</kbd>.</p>
```

#### 10. Important Notes
Can be nested (e.g. `<kbd><kbd>Ctrl</kbd> + <kbd>V</kbd></kbd>`) to indicate combined shortcut gestures.

#### 11. Related Tags
Related to `<code>`, `<samp>`, `<var>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Not deprecated.

---

### 2.13 `<samp>`

#### 1. Tag Name
* **Tag Name:** `<samp>`
* **Opening & Closing Form:** `<samp>...</samp>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<samp>` element represents sample output from a computer program or system.

#### 3. Purpose / Function
Used to display terminal messages, system error codes, or console outputs in documentation.

#### 4. Syntax
```html
<p>Server returned: <samp>Sample output</samp></p>
```

#### 5. Basic Example
```html
<p>If compilation fails, terminal shows <samp>Error 404: File Not Found</samp>.</p>
```

#### 6. Output
Renders "Error 404: File Not Found" in default browser monospace font.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="console-output"` | Optional |

#### 8. Attribute Example
```html
<samp class="terminal-text">Build Succeeded: 0 errors, 0 warnings</samp>
```

#### 9. Real-World Example
* **Use Case:** Used in CLI tool documentations, server status monitoring dashboards, and dev tutorials.
* **Code:**
```html
<p>Terminal response: <samp>PING google.com (142.250.190.46): 56 data bytes</samp></p>
```

#### 10. Important Notes
Distinguishes program results (`<samp>`) from user typed commands (`<kbd>`) and source code (`<code>`).

#### 11. Related Tags
Related to `<code>`, `<kbd>`, `<var>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Not deprecated.

---

### 2.14 `<var>`

#### 1. Tag Name
* **Tag Name:** `<var>`
* **Opening & Closing Form:** `<var>...</var>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<var>` element represents a variable name in mathematical expressions or programming context.

#### 3. Purpose / Function
Styles variables in mathematical formulas or programming documentation in italicized form.

#### 4. Syntax
```html
<p>Equation: <var>x</var> = <var>y</var> + 2</p>
```

#### 5. Basic Example
```html
<p>In the equation <var>E</var> = <var>m</var><var>c</var><sup>2</sup>, <var>c</var> is the speed of light.</p>
```

#### 6. Output
Renders "E", "m", and "c" as italicized mathematical variables: *E* = *m**c*²

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="math-var"` | Optional |

#### 8. Attribute Example
```html
<p>Let <var class="variable">n</var> be the number of array elements.</p>
```

#### 9. Real-World Example
* **Use Case:** Used in online engineering math portals (e.g. Wolfram Alpha, Khan Academy) and algorithm analysis articles.
* **Code:**
```html
<p>Time complexity is O(<var>n</var> log <var>n</var>).</p>
```

#### 10. Important Notes
Provides clear semantic context to math screen readers compared to plain italic `<i>`.

#### 11. Related Tags
Related to `<code>`, `<sub>`, `<sup>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Not deprecated.

---

### 2.15 `<b>`

#### 1. Tag Name
* **Tag Name:** `<b>`
* **Opening & Closing Form:** `<b>...</b>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<b>` element draws attention to text for utilitarian purposes without implying any extra importance, urgency, or emphasis.

#### 3. Purpose / Function
Used to offset text stylistically (e.g. keywords in abstract, product names, lead sentence terms) in bold font.

#### 4. Syntax
```html
<b>Bold Text</b>
```

#### 5. Basic Example
```html
<p>The two main components are <b>Frontend</b> and <b>Backend</b> development.</p>
```

#### 6. Output
Renders "Frontend" and "Backend" in bold font weight.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="fw-bold"` | Optional |

#### 8. Attribute Example
```html
<b class="highlight-term">Important Term:</b> Abstract Data Type
```

#### 9. Real-World Example
* **Use Case:** Used in product summaries, dictionary entries, and bold keyword list items.
* **Code:**
```html
<p><b>Note:</b> Bring your hall ticket to the exam room.</p>
```

#### 10. Important Notes
Do not use `<b>` when text carries strong importance or urgency; use `<strong>` instead for accessibility.

#### 11. Related Tags
Related to `<strong>`, `<i>`, `<em>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Redefined in HTML5 for stylistic bolding without strong importance.

---

### 2.16 `<strong>`

#### 1. Tag Name
* **Tag Name:** `<strong>`
* **Opening & Closing Form:** `<strong>...</strong>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<strong>` tag indicates that its contents have strong importance, seriousness, or urgency.

#### 3. Purpose / Function
Renders text in bold font while semantically marking it as critical information for screen readers.

#### 4. Syntax
```html
<strong>Crucial Alert Text</strong>
```

#### 5. Basic Example
```html
<p><strong>Warning:</strong> Submitting after deadline results in 0 marks.</p>
```

#### 6. Output
Renders "Warning:" in bold weight, announced with emphasized audio pitch by screen reader software.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="text-danger"` | Optional |

#### 8. Attribute Example
```html
<strong class="alert-text">Danger: High Voltage Area</strong>
```

#### 9. Real-World Example
* **Use Case:** Used in security warnings, critical form instructions, and vital terms on banking sites.
* **Code:**
```html
<p><strong>DO NOT</strong> share your OTP password with anyone.</p>
```

#### 10. Important Notes
Use `<strong>` when text importance affects semantic meaning; use `<b>` for generic bolding without special importance.

#### 11. Related Tags
Related to `<b>`, `<em>`, `<mark>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Not deprecated.

---

### 2.17 `<i>`

#### 1. Tag Name
* **Tag Name:** `<i>`
* **Opening & Closing Form:** `<i>...</i>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<i>` element represents a range of text set off from normal prose in an alternate voice or mood (e.g. technical terms, foreign words, thoughts, ship names).

#### 3. Purpose / Function
Styles text in italics for idiomatic expressions, foreign terms, or taxonomy terms.

#### 4. Syntax
```html
<i>Italicized Text</i>
```

#### 5. Basic Example
```html
<p>The Latin term <i>Et cetera</i> is commonly written as etc.</p>
```

#### 6. Output
Renders "Et cetera" in italic font style.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="font-italic"` | Optional |

#### 8. Attribute Example
```html
<i class="latin-phrase">Status quo</i>
```

#### 9. Real-World Example
* **Use Case:** Used for scientific names (*Homo sapiens*), foreign phrases, book titles, and icon fonts (e.g. FontAwesome `<i class="fa fa-user"></i>`).
* **Code:**
```html
<p>The scientific name of lion is <i>Panthera leo</i>.</p>
```

#### 10. Important Notes
For semantic stress emphasis, use `<em>`. Use `<i>` for technical terms or foreign phrases without extra stress emphasis.

#### 11. Related Tags
Related to `<em>`, `<cite>`, `<var>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Redefined in HTML5 as idiomatic/alternate voice text.

---

### 2.18 `<em>`

#### 1. Tag Name
* **Tag Name:** `<em>`
* **Opening & Closing Form:** `<em>...</em>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<em>` tag marks text that has stress emphasis. Nesting `<em>` increases the degree of stress.

#### 3. Purpose / Function
Changes the vocal emphasis of a sentence when spoken aloud, altering semantic meaning.

#### 4. Syntax
```html
<em>Emphasized Text</em>
```

#### 5. Basic Example
```html
<p>You <em>must</em> complete the prerequisite course first.</p>
```

#### 6. Output
Renders "must" in italic font. Screen readers pronounce "must" with verbal stress emphasis.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="stress"` | Optional |

#### 8. Attribute Example
```html
<p>I <em>love</em> web programming!</p>
```

#### 9. Real-World Example
* **Use Case:** Used in speech transcripts, persuasive copy, legal disclaimers, and instructional material.
* **Code:**
```html
<p>Do <em>not</em> unplug the USB drive while transferring files.</p>
```

#### 10. Important Notes
Use `<em>` for verbal stress emphasis; use `<i>` for foreign phrases, taxonomy names, or technical terms.

#### 11. Related Tags
Related to `<i>`, `<strong>`, `<mark>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Not deprecated.

---

### 2.19 `<mark>`

#### 1. Tag Name
* **Tag Name:** `<mark>`
* **Opening & Closing Form:** `<mark>...</mark>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<mark>` tag represents text highlighted or marked for reference purposes due to its relevance in another context.

#### 3. Purpose / Function
Visually highlights text with a default yellow background, representing search result matches or highlighted study notes.

#### 4. Syntax
```html
<mark>Highlighted Text</mark>
```

#### 5. Basic Example
```html
<p>Search results for "HTML": Learning <mark>HTML</mark> tags and attributes.</p>
```

#### 6. Output
Renders "HTML" with a bright yellow background highlight like a physical highlighter marker.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `style="background: cyan;"` | Optional |

#### 8. Attribute Example
```html
<mark style="background-color: #fef08a;">Exam Keyword</mark>
```

#### 9. Real-World Example
* **Use Case:** Used in search engines to highlight matching query terms, PDF text highlight tools, and study notes.
* **Code:**
```html
<p>Query: "Data". Match found: Introduction to <mark>Data</mark> Structures.</p>
```

#### 10. Important Notes
Do not use `<mark>` purely for visual syntax highlighting of code; use CSS spans for code highlighting.

#### 11. Related Tags
Related to `<strong>`, `<em>`, `<small>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Standard HTML5 element.

---

### 2.20 `<small>`

#### 1. Tag Name
* **Tag Name:** `<small>`
* **Opening & Closing Form:** `<small>...</small>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<small>` tag renders side comments and small print such as copyright text, legal disclaimers, licensing terms, or sub-text.

#### 3. Purpose / Function
Reduces text font size by one size smaller (e.g. from medium to small) while semantically denoting fine print.

#### 4. Syntax
```html
<small>Fine print text</small>
```

#### 5. Basic Example
```html
<p>Course Fee: $500 <small>(Taxes applicable as per government rules)</small></p>
```

#### 6. Output
Renders tax notice in smaller sub-text font size.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="text-muted"` | Optional |

#### 8. Attribute Example
```html
<small class="copyright-text">© 2026 University Portal. All rights reserved.</small>
```

#### 9. Real-World Example
* **Use Case:** Used in page footers for copyright notices, terms of service disclaimers, and pricing fine print.
* **Code:**
```html
<footer>
  <small>&copy; 2026 College Name. Registered trademark.</small>
</footer>
```

#### 10. Important Notes
In HTML5, `<small>` has semantic meaning representing "fine print" or legal caveats, not just arbitrary font shrink.

#### 11. Related Tags
Related to `<footer>`, `<sub>`, `<sup>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Redefined in HTML5 for legal fine print.

---

### 2.21 `<sub>`

#### 1. Tag Name
* **Tag Name:** `<sub>`
* **Opening & Closing Form:** `<sub>...</sub>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<sub>` tag defines subscript text. Subscript text appears half a character below the normal line and is rendered in a smaller font.

#### 3. Purpose / Function
Used for chemical formulas (e.g., H₂O), mathematical matrix indices (x₁), and footnotes.

#### 4. Syntax
```html
Text<sub>subscript</sub>
```

#### 5. Basic Example
```html
<p>Chemical formula for water is H<sub>2</sub>O and Glucose is C<sub>6</sub>H<sub>12</sub>O<sub>6</sub>.</p>
```

#### 6. Output
Renders "2" below H, "6", "12", "6" below C, H, O as chemical subscript formulas.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="chem-sub"` | Optional |

#### 8. Attribute Example
```html
<p>Matrix element: A<sub>i,j</sub></p>
```

#### 9. Real-World Example
* **Use Case:** Used in chemistry education sites, scientific research databases, and math formula rendering engines.
* **Code:**
```html
<p>Sulfuric acid formula: H<sub>2</sub>SO<sub>4</sub></p>
```

#### 10. Important Notes
Ensure subscript font sizes do not break baseline line-height spacing in paragraphs.

#### 11. Related Tags
Related to `<sup>`, `<var>`, `<code>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Not deprecated.

---

### 2.22 `<sup>`

#### 1. Tag Name
* **Tag Name:** `<sup>`
* **Opening & Closing Form:** `<sup>...</sup>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<sup>` tag defines superscript text. Superscript text appears half a character above the normal line and is rendered in a smaller font.

#### 3. Purpose / Function
Used for mathematical exponents (e.g., x²), ordinal numbers (1ˢᵗ, 2ⁿᵈ), and citation references [1].

#### 4. Syntax
```html
Text<sup>superscript</sup>
```

#### 5. Basic Example
```html
<p>Pythagoras Theorem: a<sup>2</sup> + b<sup>2</sup> = c<sup>2</sup></p>
```

#### 6. Output
Renders "2" as raised exponent superscripts: a² + b² = c²

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="footnote-ref"` | Optional |

#### 8. Attribute Example
```html
<p>Today is August 28<sup>th</sup>, 2026.</p>
```

#### 9. Real-World Example
* **Use Case:** Used in Wikipedia reference citation tags ([1]), math web portals, and date formatting.
* **Code:**
```html
<p>Einstein equation: E = mc<sup>2</sup></p>
<p>See reference<sup>[1]</sup> for details.</p>
```

#### 10. Important Notes
Crucial for proper mathematical and citation notation standards.

#### 11. Related Tags
Related to `<sub>`, `<var>`, `<cite>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Not deprecated.

---

### 2.23 `<del>`

#### 1. Tag Name
* **Tag Name:** `<del>`
* **Opening & Closing Form:** `<del>...</del>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<del>` tag represents text that has been deleted or removed from a document.

#### 3. Purpose / Function
Displays text with a strikethrough line across it, signaling track changes or price discounts.

#### 4. Syntax
```html
<del cite="URL" datetime="YYYY-MM-DD">Deleted Text</del>
```

#### 5. Basic Example
```html
<p>Special Price: <del>$100</del> $75!</p>
```

#### 6. Output
Renders "$100" crossed out with a horizontal strikethrough line.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `cite` | URL documenting the reason for deletion. | `cite="rev.html"` | Optional |
| `datetime` | Timestamp of when deletion occurred. | `datetime="2026-08-28T10:00"` | Optional |

#### 8. Attribute Example
```html
<p>Exam Date: <del datetime="2026-08-01">August 10</del> <ins datetime="2026-08-01">August 15</ins></p>
```

#### 9. Real-World Example
* **Use Case:** Used on E-commerce discount product cards, document versioning tools (GitHub diffs), and wiki edit logs.
* **Code:**
```html
<p>Original Fee: <del>$500</del> <ins>$350</ins> (Discounted)</p>
```

#### 10. Important Notes
Pair with `<ins>` tag for documenting document edits and versioning history.

#### 11. Related Tags
Related to `<ins>`, `<s>`, `<mark>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Not deprecated.

---

### 2.24 `<ins>`

#### 1. Tag Name
* **Tag Name:** `<ins>`
* **Opening & Closing Form:** `<ins>...</ins>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<ins>` tag represents a range of text that has been inserted into a document.

#### 3. Purpose / Function
Displays inserted text with an underline, representing additions in document editing or revision history.

#### 4. Syntax
```html
<ins cite="URL" datetime="YYYY-MM-DD">Inserted Text</ins>
```

#### 5. Basic Example
```html
<p>Project submission deadline extended to <ins>Friday 5 PM</ins>.</p>
```

#### 6. Output
Renders "Friday 5 PM" with a visual underline indicating new inserted content.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `cite` | Specifies URL explaining edit reason. | `cite="edit-reason.html"` | Optional |
| `datetime` | Specifies date/time of insertion. | `datetime="2026-08-28"` | Optional |

#### 8. Attribute Example
```html
<ins cite="notice.pdf" datetime="2026-08-28">New Syllabus updated</ins>
```

#### 9. Real-World Example
* **Use Case:** Used in legal contract diff displays, GitHub code change reviews, and collaborative document editors.
* **Code:**
```html
<p>The meeting is rescheduled from <del>2 PM</del> to <ins>4 PM</ins>.</p>
```

#### 10. Important Notes
Always combine `<del>` and `<ins>` for semantic diff representation.

#### 11. Related Tags
Related to `<del>`, `<u>`, `<s>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Not deprecated.

---

### 2.25 `<s>`

#### 1. Tag Name
* **Tag Name:** `<s>`
* **Opening & Closing Form:** `<s>...</s>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<s>` tag renders text with a strikethrough line, representing content that is no longer accurate or relevant.

#### 3. Purpose / Function
Used for out-of-date information or out-of-stock items where visual strikethrough is needed without document edit semantics.

#### 4. Syntax
```html
<s>Outdated text</s>
```

#### 5. Basic Example
```html
<p>Item Status: <s>Sold Out</s> (Back in Stock!)</p>
```

#### 6. Output
Renders "Sold Out" crossed through with a line.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="text-muted"` | Optional |

#### 8. Attribute Example
```html
<s class="strikethrough">Old price $50</s>
```

#### 9. Real-World Example
* **Use Case:** Used in shopping carts for strike-through original prices and expired promo codes.
* **Code:**
```html
<p>Offer: <s>Free Shipping</s> (Standard rates apply)</p>
```

#### 10. Important Notes
Use `<del>` when indicating actual historical document revisions; use `<s>` for general non-relevant text display.

#### 11. Related Tags
Related to `<del>`, `<ins>`, `<u>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Redefined in HTML5.

---

### 2.26 `<u>`

#### 1. Tag Name
* **Tag Name:** `<u>`
* **Opening & Closing Form:** `<u>...</u>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<u>` tag renders text with an unarticulated line (underline) to represent non-textual annotation such as spelling errors or proper names in Chinese.

#### 3. Purpose / Function
Renders text with an underline without implying hyperlink functionality.

#### 4. Syntax
```html
<u>Annotated text</u>
```

#### 5. Basic Example
```html
<p>Please check for <u style="text-decoration-color: red;">speling</u> errors in your code.</p>
```

#### 6. Output
Renders "speling" underlined (often styled with red squiggly line for spell check UI).

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="spelling-error"` | Optional |

#### 8. Attribute Example
```html
<u class="wavy-underline">Unsure term</u>
```

#### 9. Real-World Example
* **Use Case:** Used in word processor interfaces (Google Docs red spell check line) and language annotations.
* **Code:**
```html
<p>Misspelled word detected: <u class="error-mark">teh</u> (Replace with "the")</p>
```

#### 10. Important Notes
Avoid using `<u>` where users might confuse underlined text with a clickable hyperlink `<a>`. Style with CSS instead.

#### 11. Related Tags
Related to `<a>`, `<ins>`, `<mark>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Redefined in HTML5 to avoid confusion with hyperlinks.

---

### 2.27 `<bdi>`

#### 1. Tag Name
* **Tag Name:** `<bdi>`
* **Opening & Closing Form:** `<bdi>...</bdi>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<bdi>` (Bi-Directional Isolation) tag isolates a span of text that might be formatted in a different direction (e.g. Arabic, Hebrew) from surrounding text.

#### 3. Purpose / Function
Prevents bidirectional text rendering bugs when embedding dynamic user-generated content in mixed language sites.

#### 4. Syntax
```html
<bdi>User generated text</bdi>
```

#### 5. Basic Example
```html
<ul>
  <li>User <bdi>إبراہيم</bdi>: 50 points</li>
  <li>User <bdi>John</bdi>: 45 points</li>
</ul>
```

#### 6. Output
Renders username "إبراہيم" correctly in right-to-left orientation without distorting surrounding colon and point text direction.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `dir="auto"` | Optional |

#### 8. Attribute Example
```html
<bdi class="username">Dynamic Name</bdi>
```

#### 9. Real-World Example
* **Use Case:** Used on international forum platforms, Twitter/X usernames, and multilingual eCommerce comments.
* **Code:**
```html
<p>Top Commenter: <bdi>سارة</bdi> liked your post.</p>
```

#### 10. Important Notes
Essential for internationalization (i18n) when user-supplied names or titles are of unknown text direction.

#### 11. Related Tags
Related to `<bdo>` and global `dir` attribute.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Standard HTML5 element.

---

### 2.28 `<bdo>`

#### 1. Tag Name
* **Tag Name:** `<bdo>`
* **Opening & Closing Form:** `<bdo dir="ltr|rtl">...</bdo>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<bdo>` (Bi-Directional Override) element explicitly overrides the current text directionality.

#### 3. Purpose / Function
Forces text to render strictly Left-To-Right (`ltr`) or Right-To-Left (`rtl`) regardless of Unicode properties.

#### 4. Syntax
```html
<bdo dir="ltr|rtl">Text content</bdo>
```

#### 5. Basic Example
```html
<p><bdo dir="rtl">This text will be written from right to left.</bdo></p>
```

#### 6. Output
Renders text reversed character by character from right to left display.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `dir` | Specifies mandatory text direction (`ltr` or `rtl`). | `dir="rtl"` | Required |

#### 8. Attribute Example
```html
<bdo dir="rtl">123456789</bdo>
```

#### 9. Real-World Example
* **Use Case:** Used in specialized multi-lingual typography rendering, RTL layout adjustments, and text games.
* **Code:**
```html
<p>Reversed string display: <bdo dir="rtl">HTML5 Assignment</bdo></p>
```

#### 10. Important Notes
The `dir` attribute is mandatory on `<bdo>`. Omitting `dir` invalidates the element.

#### 11. Related Tags
Related to `<bdi>` and `lang` attribute.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Not deprecated.

---

### 2.29 `<wbr>`

#### 1. Tag Name
* **Tag Name:** `<wbr>`
* **Opening & Closing Form:** `<wbr> (No closing tag)`
* **Tag Type:** Empty / Void Tag

#### 2. Definition
The `<wbr>` (Word Break Opportunity) element specifies a position within text where the browser may optionally break a line if needed by wrapping rules.

#### 3. Purpose / Function
Prevents awkward layout overflow for extremely long URL strings or unhyphenated compound words on mobile screens.

#### 4. Syntax
```html
VeryLongWord<wbr>SubPart
```

#### 5. Basic Example
```html
<p>Visit https://www.university<wbr>.ac.in/departments<wbr>/computer-science<wbr>/syllabus</p>
```

#### 6. Output
Renders the long URL cleanly, breaking at `<wbr>` locations on small mobile viewports without forcing horizontal scrollbars.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="break-opp"` | Optional |

#### 8. Attribute Example
```html
<span>Supercalifragilistic<wbr>expialidocious</span>
```

#### 9. Real-World Example
* **Use Case:** Used in mobile responsive web designs displaying long API endpoints, file paths, or DNA sequences.
* **Code:**
```html
<p>File: C:/Users/Student/Desktop/Projects/WebTech/<wbr>Assignment_Final_Version_2026.html</p>
```

#### 10. Important Notes
Unlike `&shy;` (soft hyphen), `<wbr>` does not insert a hyphen character (-) when the line wraps.

#### 11. Related Tags
Related to `<br>` and CSS `word-break` property.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Standard HTML5 element.

---


# SECTION C: LINK AND NAVIGATION TAGS


### 3.1 `<a>`

#### 1. Tag Name
* **Tag Name:** `<a>`
* **Opening & Closing Form:** `<a>...</a>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<a>` (Anchor) element creates a hyperlink to web pages, files, email addresses, locations within the same page, or any URL target.

#### 3. Purpose / Function
Enables hyperlinking and navigation between web resources—the core foundational feature of the World Wide Web.

#### 4. Syntax
```html
<a href="URL" target="_blank|_self" rel="noopener">Anchor Text</a>
```

#### 5. Basic Example
```html
<a href="https://www.google.com" target="_blank" rel="noopener">Visit Google Search</a>
```

#### 6. Output
Renders underlined blue text "Visit Google Search" which opens Google in a new browser tab when clicked.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `href` | Specifies the destination URL or target anchor. | `href="https://univ.edu"` | Recommended |
| `target` | Browsing context to open link (`_blank`, `_self`, `_parent`, `_top`). | `target="_blank"` | Optional |
| `rel` | Specifies relationship between current doc and target (`noopener`, `noreferrer`, `nofollow`). | `rel="noopener"` | Recommended for `_blank` |
| `download` | Prompts browser to download target file rather than navigating to it. | `download="assignment.pdf"` | Optional |
| `hreflang` | Specifies language of linked document. | `hreflang="en"` | Optional |
| `type` | Specifies MIME type of target resource. | `type="application/pdf"` | Optional |

#### 8. Attribute Example
```html
<a href="notes.pdf" download="HTML5_Notes.pdf" type="application/pdf">Download Study Notes (PDF)</a>
```

#### 9. Real-World Example
* **Use Case:** Used everywhere across all websites for site navigation menus, CTA buttons, internal page anchors, email links (`mailto:`), and tel links (`tel:`).
* **Code:**
```html
<!-- Real world multi-attribute Anchor tag -->
<a href="mailto:support@college.edu?subject=Admission%20Query"
   class="btn btn-primary"
   title="Send Email to Support">
   Contact Support
</a>
```

#### 10. Important Notes
Always add `rel="noopener noreferrer"` when using `target="_blank"` to prevent window.opener security phishing vulnerabilities. Ensure anchor text is descriptive for screen readers (avoid "click here").

#### 11. Related Tags
Related to `<nav>`, `<link>`, `<button>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** `name` attribute on `<a>` is obsolete in HTML5; use `id` attribute instead for page fragment anchors.

---

### 3.2 `<nav>`

#### 1. Tag Name
* **Tag Name:** `<nav>`
* **Opening & Closing Form:** `<nav>...</nav>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<nav>` element represents a section of a page whose purpose is to provide navigation links, either within the current document or to other documents.

#### 3. Purpose / Function
Semantically wraps main website navigation bars, sidebars, footers navigation, and pagination controls.

#### 4. Syntax
```html
<nav>
  <ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="about.html">About</a></li>
  </ul>
</nav>
```

#### 5. Basic Example
```html
<nav aria-label="Main Menu">
  <a href="#home">Home</a> |
  <a href="#courses">Courses</a> |
  <a href="#contact">Contact</a>
</nav>
```

#### 6. Output
Renders a navigation link group separated by pipe symbols.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `aria-label` | Describes the navigation block for screen reader users. | `aria-label="Primary Navigation"` | Recommended |
| Global Attributes | Supports `id`, `class`, `style`. | `class="navbar"` | Optional |

#### 8. Attribute Example
```html
<nav class="navbar navbar-expand-lg bg-light" aria-label="Top Menu">
  <!-- Navigation content -->
</nav>
```

#### 9. Real-World Example
* **Use Case:** Used in header navigation bars of Amazon, Wikipedia, YouTube, and college portals.
* **Code:**
```html
<header>
  <nav>
    <ul class="nav-menu">
      <li><a href="/dashboard">Dashboard</a></li>
      <li><a href="/courses">My Courses</a></li>
      <li><a href="/profile">Profile</a></li>
    </ul>
  </nav>
</header>
```

#### 10. Important Notes
Not all links on a page should be wrapped in `<nav>`; it is reserved for major navigational blocks.

#### 11. Related Tags
Related to `<a>`, `<header>`, `<ul>`, `<li>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Standard HTML5 semantic element.

---


# SECTION D: IMAGES AND MULTIMEDIA TAGS


### 4.1 `<img>`

#### 1. Tag Name
* **Tag Name:** `<img>`
* **Opening & Closing Form:** `<img ... > (No closing tag)`
* **Tag Type:** Empty / Void Tag

#### 2. Definition
The `<img>` tag embeds an image into an HTML document. It creates a holding space for the referenced image file specified by the `src` attribute.

#### 3. Purpose / Function
Displays graphical assets, logos, photographs, diagrams, and icons on web pages.

#### 4. Syntax
```html
<img src="image.jpg" alt="Description of image" width="300" height="200">
```

#### 5. Basic Example
```html
<img src="campus.jpg" alt="University Belagavi Main Campus Building" width="600" height="400">
```

#### 6. Output
Renders the specified image on screen with width 600px and height 400px. If image fails to load, displays alternative text "University Belagavi Main Campus Building".

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `src` | Specifies path/URL of image file. | `src="logo.png"` | Required |
| `alt` | Alternative text description for screen readers and failed loads. | `alt="Company Logo"` | Required (a11y) |
| `width` | Specifies intrinsic width of image in pixels. | `width="300"` | Optional |
| `height` | Specifies intrinsic height of image in pixels. | `height="200"` | Optional |
| `loading` | Defines loading strategy (`lazy` or `eager`). | `loading="lazy"` | Recommended |
| `srcset` | Defines list of image sources for responsive screens. | `srcset="small.jpg 500w, large.jpg 1000w"` | Optional |
| `sizes` | Defines screen layout sizes for responsive images. | `sizes="(max-width: 600px) 100vw, 50vw"` | Optional |
| `decoding` | Hints image decoding (`async`, `sync`, `auto`). | `decoding="async"` | Optional |

#### 8. Attribute Example
```html
<img src="student-avatar.jpg" alt="Student Profile Photo" width="150" height="150" loading="lazy" decoding="async">
```

#### 9. Real-World Example
* **Use Case:** Used across all web pages for user profile photos, product listings on Amazon, banner graphics, and logo branding.
* **Code:**
```html
<img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97" 
     alt="Developer coding on laptop" 
     width="800" 
     height="500" 
     loading="lazy" 
     class="rounded-lg shadow-md">
```

#### 10. Important Notes
The `alt` attribute is mandatory for accessibility compliance (WCAG). Always specify `width` and `height` to prevent Layout Shifts (CLS - Cumulative Layout Shift).

#### 11. Related Tags
Related to `<picture>`, `<figure>`, `<figcaption>`, `<canvas>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Attributes `align`, `border`, `hspace`, `vspace` are obsolete in HTML5.

---

### 4.2 `<picture>`

#### 1. Tag Name
* **Tag Name:** `<picture>`
* **Opening & Closing Form:** `<picture>...</picture>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<picture>` tag contains zero or more `<source>` elements and one `<img>` element to offer alternative versions of an image for different display devices/screen sizes.

#### 3. Purpose / Function
Implements responsive art direction, serving different image formats (AVIF, WebP, JPG) or dimensions based on media query screen widths.

#### 4. Syntax
```html
<picture>
  <source media="(min-width: 800px)" srcset="large.jpg">
  <source media="(min-width: 450px)" srcset="medium.jpg">
  <img src="fallback.jpg" alt="Responsive Image">
</picture>
```

#### 5. Basic Example
```html
<picture>
  <source srcset="banner-dark.webp" media="(prefers-color-scheme: dark)">
  <img src="banner-light.png" alt="Welcome Banner">
</picture>
```

#### 6. Output
Automatically displays dark theme banner when system dark mode is active; otherwise displays light mode banner.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="responsive-pic"` | Optional |

#### 8. Attribute Example
```html
<picture class="hero-image">
  <source srcset="hero.avif" type="image/avif">
  <source srcset="hero.webp" type="image/webp">
  <img src="hero.jpg" alt="Hero Header" width="1200" height="600">
</picture>
```

#### 9. Real-World Example
* **Use Case:** Used on modern news sites, media portals (Netflix, Apple.com) for crisp performance across mobile retina and desktop screens.
* **Code:**
```html
<picture>
  <source media="(min-width: 1024px)" srcset="desktop-hero.jpg">
  <source media="(min-width: 640px)" srcset="tablet-hero.jpg">
  <img src="mobile-hero.jpg" alt="College Admission Banner">
</picture>
```

#### 10. Important Notes
The fallback `<img>` element MUST be the last child element inside `<picture>`. If omitted, no image will be displayed.

#### 11. Related Tags
Related to `<img>`, `<source>`, `<figure>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Standard HTML5 responsive element.

---

### 4.3 `<source>`

#### 1. Tag Name
* **Tag Name:** `<source>`
* **Opening & Closing Form:** `<source ... > (No closing tag)`
* **Tag Type:** Empty / Void Tag

#### 2. Definition
The `<source>` tag specifies multiple media resources for media elements like `<picture>`, `<audio>`, and `<video>`.

#### 3. Purpose / Function
Provides alternative audio, video, or image format streams for browser codec fallback compatibility.

#### 4. Syntax
```html
<source src="file.mp4" type="video/mp4" media="(min-width: 600px)">
```

#### 5. Basic Example
```html
<video controls>
  <source src="lecture.webm" type="video/webm">
  <source src="lecture.mp4" type="video/mp4">
</video>
```

#### 6. Output
Browser selects and plays WebM video format if supported, falling back to MP4 format seamlessly.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `src` | Path to audio or video resource file. | `src="audio.mp3"` | Required for audio/video |
| `srcset` | Image source list for `<picture>`. | `srcset="image.avif"` | Required for picture |
| `type` | MIME type of media resource. | `type="video/mp4"` | Strongly Recommended |
| `media` | Media query condition for resource selection. | `media="(min-width: 768px)"` | Optional |

#### 8. Attribute Example
```html
<source srcset="high-res.webp" type="image/webp" media="(min-width: 1200px)">
```

#### 9. Real-World Example
* **Use Case:** Used in video platforms (YouTube embeds), responsive hero pictures, and podcasts.
* **Code:**
```html
<audio controls>
  <source src="podcast.opus" type="audio/ogg; codecs=opus">
  <source src="podcast.mp3" type="audio/mpeg">
</audio>
```

#### 10. Important Notes
`<source>` tags are evaluated sequentially by browser engines from top to bottom; the first supported source is loaded.

#### 11. Related Tags
Nested inside `<picture>`, `<video>`, and `<audio>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Not deprecated.

---

### 4.4 `<figure>`

#### 1. Tag Name
* **Tag Name:** `<figure>`
* **Opening & Closing Form:** `<figure>...</figure>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<figure>` tag represents self-contained content, frequently with a caption (`<figcaption>`), referenced as a single unit.

#### 3. Purpose / Function
Encapsulates images, diagrams, photos, code snippets, or quotes alongside an optional caption.

#### 4. Syntax
```html
<figure>
  <!-- Media content like img, code, video -->
  <figcaption>Caption text</figcaption>
</figure>
```

#### 5. Basic Example
```html
<figure>
  <img src="binary-tree.png" alt="Binary Tree Structure">
  <figcaption>Figure 1.1: Binary Search Tree Representation</figcaption>
</figure>
```

#### 6. Output
Displays binary tree diagram image with caption text aligned beneath it as a unified semantic block.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="diagram-box"` | Optional |

#### 8. Attribute Example
```html
<figure class="figure border p-2 rounded">
  <img src="chart.svg" alt="Sales Chart" class="figure-img img-fluid">
  <figcaption class="figure-caption">Quarterly Growth Chart</figcaption>
</figure>
```

#### 9. Real-World Example
* **Use Case:** Used in textbook publications, online academic journals, engineering blogs, and newspaper articles.
* **Code:**
```html
<figure>
  <pre><code>int x = 10;</code></pre>
  <figcaption>Listing 1: Variable Declaration in C++</figcaption>
</figure>
```

#### 10. Important Notes
Can contain multiple images or elements, but usually contains only one `<figcaption>` as first or last child.

#### 11. Related Tags
Related to `<figcaption>`, `<img>`, `<blockquote>`, `<pre>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Standard HTML5 element.

---

### 4.5 `<figcaption>`

#### 1. Tag Name
* **Tag Name:** `<figcaption>`
* **Opening & Closing Form:** `<figcaption>...</figcaption>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<figcaption>` tag represents a caption or legend describing the rest of the contents of its parent `<figure>` element.

#### 3. Purpose / Function
Provides title labels, citations, or descriptive captions to diagrams, code listings, or images.

#### 4. Syntax
```html
<figcaption>Descriptive Caption Text</figcaption>
```

#### 5. Basic Example
```html
<figcaption>Fig. 3.2 — Architecture of von Neumann Computer Model</figcaption>
```

#### 6. Output
Renders caption text underneath or above figure content in smaller/italic legend styling.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="caption-text"` | Optional |

#### 8. Attribute Example
```html
<figcaption class="text-center text-muted">Figure 1: Campus Infrastructure Map</figcaption>
```

#### 9. Real-World Example
* **Use Case:** Used on Wikipedia articles, research papers, image galleries, and news photography.
* **Code:**
```html
<figure>
  <img src="dna.png" alt="DNA Double Helix">
  <figcaption>Figure 4: Molecular structure of Deoxyribonucleic acid (DNA)</figcaption>
</figure>
```

#### 10. Important Notes
Must be placed as either the FIRST child or LAST child inside a `<figure>` tag.

#### 11. Related Tags
Parent tag must be `<figure>`. Related to `<caption>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Not deprecated.

---

### 4.6 `<audio>`

#### 1. Tag Name
* **Tag Name:** `<audio>`
* **Opening & Closing Form:** `<audio>...</audio>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<audio>` element is used to embed sound content in documents, such as music, podcasts, or voice recordings.

#### 3. Purpose / Function
Plays audio files directly in web browsers natively without requiring external plugin software (Flash).

#### 4. Syntax
```html
<audio src="audio.mp3" controls>
  Your browser does not support audio.
</audio>
```

#### 5. Basic Example
```html
<audio controls preload="metadata">
  <source src="lecture-audio.mp3" type="audio/mpeg">
  <source src="lecture-audio.ogg" type="audio/ogg">
  Your browser does not support the audio element.
</audio>
```

#### 6. Output
Displays native browser media player controls (Play/Pause button, timeline scrubber, volume slider, duration display).

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `src` | Specifies path to audio file. | `src="song.mp3"` | Optional if source nested |
| `controls` | Displays browser default playback UI controls. | `controls` | Recommended |
| `autoplay` | Plays audio automatically on page load (Muted policy applies). | `autoplay` | Optional |
| `loop` | Automatically replays audio when finished. | `loop` | Optional |
| `muted` | Mutes audio output by default. | `muted` | Optional |
| `preload` | Hints preloading strategy (`none`, `metadata`, `auto`). | `preload="none"` | Optional |

#### 8. Attribute Example
```html
<audio controls loop muted preload="auto">
  <source src="background.mp3" type="audio/mp3">
</audio>
```

#### 9. Real-World Example
* **Use Case:** Used on Spotify Web Player, SoundCloud, podcast websites, and online language learning apps (Duolingo).
* **Code:**
```html
<div class="audio-player">
  <h3>Pronunciation Guide:</h3>
  <audio controls>
    <source src="word-pronunciation.mp3" type="audio/mpeg">
  </audio>
</div>
```

#### 10. Important Notes
Modern browsers block `autoplay` with sound enabled unless user has previously interacted with the web page.

#### 11. Related Tags
Related to `<video>`, `<source>`, `<track>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Replaced legacy `<embed>` and Flash audio plugins.

---

### 4.7 `<video>`

#### 1. Tag Name
* **Tag Name:** `<video>`
* **Opening & Closing Form:** `<video>...</video>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<video>` element embeds a media player for video playback (e.g. MP4, WebM) natively inside HTML documents.

#### 3. Purpose / Function
Renders video streams, online video lectures, movie trailers, and background video animations.

#### 4. Syntax
```html
<video src="video.mp4" controls width="640" height="360"></video>
```

#### 5. Basic Example
```html
<video width="800" height="450" controls poster="thumbnail.jpg">
  <source src="lab-demo.mp4" type="video/mp4">
  <source src="lab-demo.webm" type="video/webm">
  Your browser does not support HTML5 video.
</video>
```

#### 6. Output
Displays an 800x450 video player player box showing thumbnail image, play button, volume slider, full-screen toggle, and scrub timeline.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `src` | Specifies URL of video file. | `src="movie.mp4"` | Optional if source nested |
| `controls` | Shows playback controls (play, pause, volume, fullscreen). | `controls` | Recommended |
| `poster` | Specifies preview thumbnail image displayed before play. | `poster="thumb.jpg"` | Optional |
| `width` | Width of video player box in pixels. | `width="640"` | Recommended |
| `height` | Height of video player box in pixels. | `height="360"` | Recommended |
| `autoplay` | Plays video automatically upon load. | `autoplay` | Optional |
| `loop` | Loops video playback continuously. | `loop` | Optional |
| `muted` | Silences audio track of video. | `muted` | Recommended for bg videos |
| `playsinline` | Plays inline on mobile browsers instead of forced fullscreen. | `playsinline` | Recommended for mobile |

#### 8. Attribute Example
```html
<video width="100%" height="auto" autoplay loop muted playsinline poster="bg-poster.jpg">
  <source src="hero-loop.mp4" type="video/mp4">
</video>
```

#### 9. Real-World Example
* **Use Case:** Used in video streaming platforms (YouTube, Netflix, Vimeo), course portals (Coursera, Udemy), and landing page hero backgrounds.
* **Code:**
```html
<section class="course-video">
  <h2>Lecture 1: Introduction to Data Structures</h2>
  <video controls width="100%" poster="lecture1-cover.png">
    <source src="https://cdn.univ.edu/lectures/lec1.mp4" type="video/mp4">
    <track src="subtitles_en.vtt" kind="subtitles" srclang="en" label="English">
  </video>
</section>
```

#### 10. Important Notes
To enable `autoplay` reliably across mobile and desktop browsers, you MUST also add the `muted` attribute.

#### 11. Related Tags
Related to `<audio>`, `<source>`, `<track>`, `<iframe>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Replaced obsolete `<object>` and Flash video players.

---

### 4.8 `<track>`

#### 1. Tag Name
* **Tag Name:** `<track>`
* **Opening & Closing Form:** `<track ... > (No closing tag)`
* **Tag Type:** Empty / Void Tag

#### 2. Definition
The `<track>` tag is used as a child of `<audio>` and `<video>` elements to specify timed text tracks (e.g. subtitles, captions, chapter headings).

#### 3. Purpose / Function
Adds closed captions (CC), subtitles in multiple languages, or chapter definitions to video/audio players for accessibility.

#### 4. Syntax
```html
<track kind="subtitles|captions" src="file.vtt" srclang="en" label="English">
```

#### 5. Basic Example
```html
<video controls src="lecture.mp4">
  <track kind="subtitles" src="subtitles_en.vtt" srclang="en" label="English Subtitles" default>
  <track kind="subtitles" src="subtitles_hi.vtt" srclang="hi" label="Hindi Subtitles">
</video>
```

#### 6. Output
Overlay closed caption subtitle text on top of playing video based on timing defined in WebVTT (`.vtt`) file.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `src` | URL of WebVTT track file (.vtt). | `src="subtitles.vtt"` | Required |
| `kind` | Type of text track (`subtitles`, `captions`, `descriptions`, `chapters`). | `kind="captions"` | Required |
| `srclang` | Two-letter language code of track text. | `srclang="en"` | Required for subtitles |
| `label` | User-visible title of track in player CC selection menu. | `label="English (CC)"` | Recommended |
| `default` | Enables this track by default if user preferences match. | `default` | Optional |

#### 8. Attribute Example
```html
<track kind="chapters" src="chapters.vtt" srclang="en" label="Chapter Markers">
```

#### 9. Real-World Example
* **Use Case:** Used on YouTube, Netflix, Coursera, and TED Talks for international subtitles and deaf accessibility captions.
* **Code:**
```html
<video controls poster="movie.jpg">
  <source src="movie.mp4" type="video/mp4">
  <track kind="captions" src="movie_en.vtt" srclang="en" label="English Captions" default>
</video>
```

#### 10. Important Notes
Must point to valid WebVTT standard format file (`.vtt`). Child tag of `<video>` or `<audio>`.

#### 11. Related Tags
Nested inside `<video>` and `<audio>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Standard HTML5 accessibility element.

---

### 4.9 `<iframe>`

#### 1. Tag Name
* **Tag Name:** `<iframe>`
* **Opening & Closing Form:** `<iframe></iframe>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<iframe>` (Inline Frame) tag embeds another HTML document into the current web page.

#### 3. Purpose / Function
Embeds external third-party widgets like Google Maps, YouTube video embeds, payment gateways, or external page previews.

#### 4. Syntax
```html
<iframe src="URL" width="width" height="height" title="Description"></iframe>
```

#### 5. Basic Example
```html
<iframe src="https://maps.google.com/maps?q=belagavi&output=embed" width="600" height="450" style="border:0;" loading="lazy" title="Google Map of Belagavi"></iframe>
```

#### 6. Output
Renders an interactive Google Map window embedded directly inside current webpage container.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `src` | Address of document to embed. | `src="page.html"` | Required |
| `width` | Frame width in pixels or %. | `width="560"` | Optional |
| `height` | Frame height in pixels or %. | `height="315"` | Optional |
| `title` | Accessible text label for screen readers. | `title="YouTube Player"` | Mandatory for a11y |
| `sandbox` | Enables strict security restrictions on iframe content. | `sandbox="allow-scripts"` | Strongly Recommended |
| `allow` | Specifies feature policy capabilities (`fullscreen`, `camera`). | `allow="fullscreen"` | Optional |
| `loading` | Lazy load frame (`lazy`, `eager`). | `loading="lazy"` | Optional |

#### 8. Attribute Example
```html
<iframe src="https://www.youtube-nocookie.com/embed/dQw4w9WgXcQ" width="560" height="315" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
```

#### 9. Real-World Example
* **Use Case:** Used for YouTube video embeds, Google Maps on contact pages, Stripe payment forms, and CodePen embeds.
* **Code:**
```html
<div class="ratio ratio-16x9">
  <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="College Intro Video" allowfullscreen></iframe>
</div>
```

#### 10. Important Notes
Always include a descriptive `title` attribute for screen readers. Use `sandbox` attribute when embedding untrusted third-party URLs to prevent malicious script executions.

#### 11. Related Tags
Related to `<video>`, `<embed>`, `<object>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Attributes `frameborder`, `scrolling`, `marginwidth`, `marginheight` are obsolete in HTML5.

---


# SECTION E: LIST TAGS


### 5.1 `<ul>`

#### 1. Tag Name
* **Tag Name:** `<ul>`
* **Opening & Closing Form:** `<ul>...</ul>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<ul>` tag defines an unordered list of items. Items in `<ul>` are displayed with bullet point symbols by default.

#### 3. Purpose / Function
Groups related items where order of sequence does not matter, such as feature lists, navigation links, or ingredient lists.

#### 4. Syntax
```html
<ul>
  <li>Item 1</li>
  <li>Item 2</li>
</ul>
```

#### 5. Basic Example
```html
<ul>
  <li>Data Structures</li>
  <li>Operating Systems</li>
  <li>Web Technologies</li>
</ul>
```

#### 6. Output
Renders a bulleted list with solid circular bullet dots preceding each course item.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `type` | Sets bullet style (`disc`, `circle`, `square`). | `type="square"` | Deprecated (Use CSS list-style-type) |
| Global Attributes | Standard global attributes. | `class="feature-list"` | Optional |

#### 8. Attribute Example
```html
<ul style="list-style-type: square;" class="ms-4">
  <li>HTML5</li>
  <li>CSS3</li>
</ul>
```

#### 9. Real-World Example
* **Use Case:** Used in navigation menus (`<nav><ul>`), footer link columns, feature bullet lists, and bulleted assignment topics.
* **Code:**
```html
<nav>
  <ul class="nav-links">
    <li><a href="/home">Home</a></li>
    <li><a href="/about">About</a></li>
  </ul>
</nav>
```

#### 10. Important Notes
Direct child elements of `<ul>` MUST only be `<li>` elements (or `<template>` / `<script>`). Never put `<p>` or `<div>` directly inside `<ul>`.

#### 11. Related Tags
Related to `<ol>`, `<li>`, `<dl>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** `type` attribute is deprecated in HTML5; use CSS `list-style-type`.

---

### 5.2 `<ol>`

#### 1. Tag Name
* **Tag Name:** `<ol>`
* **Opening & Closing Form:** `<ol>...</ol>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<ol>` tag defines an ordered list of items. Items in `<ol>` are automatically numbered sequentially by default.

#### 3. Purpose / Function
Presents sequential step-by-step instructions, rankings, recipes, or prioritized task lists.

#### 4. Syntax
```html
<ol type="1|A|a|I|i" start="number">
  <li>First step</li>
  <li>Second step</li>
</ol>
```

#### 5. Basic Example
```html
<ol>
  <li>Download VS Code Editor</li>
  <li>Install Live Server Extension</li>
  <li>Write index.html file</li>
</ol>
```

#### 6. Output
Renders a numbered list: 1. Download VS Code... 2. Install Live Server... 3. Write index.html...

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `type` | Specifies numbering type (`1` numbers, `A` uppercase letters, `a` lowercase letters, `I` uppercase Roman, `i` lowercase Roman). | `type="A"` | Optional |
| `start` | Specifies starting numerical value for list sequence. | `start="5"` | Optional |
| `reversed` | Reverses numbering sequence order (high to low). | `reversed` | Optional |

#### 8. Attribute Example
```html
<ol type="I" start="1" class="syllabus-list">
  <li>Module I: Basics</li>
  <li>Module II: Advanced</li>
</ol>
```

#### 9. Real-World Example
* **Use Case:** Used in recipe instruction steps, top 10 rankings, algorithmic step listings, and legal document clauses.
* **Code:**
```html
<h3>Algorithm Steps:</h3>
<ol type="1">
  <li>Start program</li>
  <li>Read inputs <var>a</var> and <var>b</var></li>
  <li>Compute sum = <var>a</var> + <var>b</var></li>
  <li>Print sum and stop</li>
</ol>
```

#### 10. Important Notes
Direct children of `<ol>` MUST only be `<li>` elements.

#### 11. Related Tags
Related to `<ul>`, `<li>`, `<dl>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** `compact` attribute is obsolete.

---

### 5.3 `<li>`

#### 1. Tag Name
* **Tag Name:** `<li>`
* **Opening & Closing Form:** `<li>...</li>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<li>` (List Item) tag is used to represent an individual item inside an ordered list (`<ol>`), unordered list (`<ul>`), or menu (`<menu>`).

#### 3. Purpose / Function
Wraps content for each individual item entry within a parent list container.

#### 4. Syntax
```html
<li>List item content</li>
```

#### 5. Basic Example
```html
<ul>
  <li>C++ Programming</li>
  <li>Java Programming</li>
</ul>
```

#### 6. Output
Renders an individual bulleted list item entry.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `value` | Sets ordinal numerical value for item in an `<ol>`. | `value="10"` | Optional (Only in `<ol>`) |
| `type` | Sets marker style for this specific item. | `type="circle"` | Deprecated |

#### 8. Attribute Example
```html
<ol>
  <li value="5">Step 5 (Resumed)</li>
  <li>Step 6</li>
</ol>
```

#### 9. Real-World Example
* **Use Case:** Used in every dropdown menu option, navbar link list, step procedure, and tab panel item.
* **Code:**
```html
<ul class="todo-list">
  <li class="completed">Finish HTML Assignment</li>
  <li class="pending">Study Operating Systems</li>
</ul>
```

#### 10. Important Notes
Parent container MUST be `<ul>`, `<ol>`, or `<menu>`. Can contain nested `<ul>` or `<ol>` for multi-level hierarchical trees.

#### 11. Related Tags
Nested inside `<ul>`, `<ol>`, `<menu>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** `type` attribute is deprecated.

---

### 5.4 `<dl>`

#### 1. Tag Name
* **Tag Name:** `<dl>`
* **Opening & Closing Form:** `<dl>...</dl>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<dl>` tag defines a description list (formerly definition list), containing a set of terms (`<dt>`) and descriptions (`<dd>`).

#### 3. Purpose / Function
Groups key-value pairs, glossary terms, metadata lists, or FAQ items.

#### 4. Syntax
```html
<dl>
  <dt>Term 1</dt>
  <dd>Description of Term 1</dd>
</dl>
```

#### 5. Basic Example
```html
<dl>
  <dt>HTML</dt>
  <dd>HyperText Markup Language</dd>
  <dt>CSS</dt>
  <dd>Cascading Style Sheets</dd>
</dl>
```

#### 6. Output
Displays terms bold/left-aligned and definitions indented underneath each term.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="glossary"` | Optional |

#### 8. Attribute Example
```html
<dl class="row">
  <dt class="col-sm-3">Course Code</dt>
  <dd class="col-sm-9">18CS52</dd>
</dl>
```

#### 9. Real-World Example
* **Use Case:** Used for glossaries, product specification key-value tables, metadata sidebars, and FAQs.
* **Code:**
```html
<dl>
  <dt>CPU</dt>
  <dd>Central Processing Unit - Main execution hardware.</dd>
  <dt>RAM</dt>
  <dd>Random Access Memory - Volatile system memory.</dd>
</dl>
```

#### 10. Important Notes
Contains alternating `<dt>` (term) and `<dd>` (description) children. In HTML5, `<div>` tags can wrap `<dt>`/`<dd>` pairs inside `<dl>` for styling.

#### 11. Related Tags
Related to `<dt>`, `<dd>`, `<ul>`, `<ol>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Not deprecated.

---

### 5.5 `<dt>`

#### 1. Tag Name
* **Tag Name:** `<dt>`
* **Opening & Closing Form:** `<dt>...</dt>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<dt>` tag specifies a term (or name) in a description list (`<dl>`).

#### 3. Purpose / Function
Acts as the key/term header in key-value description lists.

#### 4. Syntax
```html
<dt>Term Name</dt>
```

#### 5. Basic Example
```html
<dt>Bandwidth</dt>
```

#### 6. Output
Displays "Bandwidth" in bold font weight.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="fw-bold"` | Optional |

#### 8. Attribute Example
```html
<dt class="term-title">Algorithm</dt>
```

#### 9. Real-World Example
* **Use Case:** Used in glossaries, FAQ questions, dictionary terms, and property names.
* **Code:**
```html
<dl>
  <dt>Recursion</dt>
  <dd>A process in which a function calls itself directly or indirectly.</dd>
</dl>
```

#### 10. Important Notes
Must be placed inside a `<dl>` element (or inside a `<div>` inside a `<dl>`). Followed by one or more `<dd>` tags.

#### 11. Related Tags
Parent tag is `<dl>`. Sibling tag is `<dd>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Not deprecated.

---

### 5.6 `<dd>`

#### 1. Tag Name
* **Tag Name:** `<dd>`
* **Opening & Closing Form:** `<dd>...</dd>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<dd>` tag provides the description, definition, or value for the preceding term (`<dt>`) in a description list (`<dl>`).

#### 3. Purpose / Function
Provides explanation text for terms defined by `<dt>`.

#### 4. Syntax
```html
<dd>Description text</dd>
```

#### 5. Basic Example
```html
<dd>Data rate supported by a network connection.</dd>
```

#### 6. Output
Displays description text indented below or next to the preceding term.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="desc-text"` | Optional |

#### 8. Attribute Example
```html
<dd class="ms-3 text-muted">A step-by-step procedure for solving a problem.</dd>
```

#### 9. Real-World Example
* **Use Case:** Used in dictionary definitions, product spec sheets (e.g. Dimensions: 15x10 cm), and FAQ answers.
* **Code:**
```html
<dl>
  <dt>How do I register?</dt>
  <dd>Click on the sign up button and submit your details.</dd>
</dl>
```

#### 10. Important Notes
Must be a child of `<dl>` (or wrapper `<div>` inside `<dl>`). One `<dt>` can have multiple `<dd>` descriptions.

#### 11. Related Tags
Parent is `<dl>`. Paired with `<dt>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Not deprecated.

---


# SECTION F: TABLE TAGS


### 6.1 `<table>`

#### 1. Tag Name
* **Tag Name:** `<table>`
* **Opening & Closing Form:** `<table>...</table>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<table>` HTML element represents tabular data — information presented in a two-dimensional table comprised of rows and columns.

#### 3. Purpose / Function
Displays structured matrix data such as timetables, grade cards, pricing plans, and financial reports.

#### 4. Syntax
```html
<table>
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
  <tr>
    <th>USN</th>
    <th>Name</th>
  </tr>
  <tr>
    <td>1VU22CS001</td>
    <td>Aryansh</td>
  </tr>
</table>
```

#### 6. Output
Renders a grid table with border showing USN and Name headers with data row below.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `border` | Enables simple table grid border (`0` or `1`). | `border="1"` | Optional (CSS preferred) |
| `cellpadding` | Pixel space inside cells. | `cellpadding="8"` | Deprecated (Use CSS padding) |
| `cellspacing` | Pixel space between cells. | `cellspacing="0"` | Deprecated (Use CSS border-spacing) |
| `width` | Specifies table width. | `width="100%"` | Deprecated (Use CSS width) |

#### 8. Attribute Example
```html
<table class="table table-bordered table-striped" id="student-table">
```

#### 9. Real-World Example
* **Use Case:** Used for college exam timetables, student grade reports, flight schedules, stock market tables.
* **Code:**
```html
<table class="table-styled">
  <caption>Semester 3 Marks</caption>
  <thead><tr><th>Subject</th><th>Marks</th></tr></thead>
  <tbody><tr><td>Web Tech</td><td>95</td></tr></tbody>
</table>
```

#### 10. Important Notes
Tables should ONLY be used for tabular data, NEVER for overall web page layout design (use CSS Flexbox/Grid instead).

#### 11. Related Tags
Related to `<caption>`, `<thead>`, `<tbody>`, `<tfoot>`, `<tr>`, `<th>`, `<td>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Presentation attributes (`cellpadding`, `cellspacing`, `width`, `bgcolor`) are obsolete.

---

### 6.2 `<caption>`

#### 1. Tag Name
* **Tag Name:** `<caption>`
* **Opening & Closing Form:** `<caption>...</caption>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<caption>` element specifies the title or heading of a table.

#### 3. Purpose / Function
Provides a clear descriptive title for a table for accessibility screen readers.

#### 4. Syntax
```html
<caption>Table Title Caption</caption>
```

#### 5. Basic Example
```html
<table>
  <caption>Table 1.1: Student Attendance Record - August 2026</caption>
  <!-- rows -->
</table>
```

#### 6. Output
Renders title text centered directly above the top border of the table.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `align` | Sets caption placement (`top`, `bottom`). | `align="bottom"` | Deprecated |

#### 8. Attribute Example
```html
<caption style="caption-side: bottom;" class="text-muted">Source: VTU Examination Board</caption>
```

#### 9. Real-World Example
* **Use Case:** Used in academic journals, scientific data tables, and public report tables.
* **Code:**
```html
<table>
  <caption>Weekly Class Time Table - CSE Sec A</caption>
  <tr><th>Day</th><th>9 AM - 10 AM</th></tr>
</table>
```

#### 10. Important Notes
Must be the VERY FIRST child element inside a `<table>` tag, appearing before `<thead>` or `<tr>`.

#### 11. Related Tags
Parent element must be `<table>`. Related to `<figcaption>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** `align` attribute is deprecated.

---

### 6.3 `<thead>`

#### 1. Tag Name
* **Tag Name:** `<thead>`
* **Opening & Closing Form:** `<thead>...</thead>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<thead>` (Table Head) tag groups the header content in an HTML table.

#### 3. Purpose / Function
Encapsulates heading rows (`<tr><th>`), allowing browsers/printers to repeat table headers across multi-page printouts.

#### 4. Syntax
```html
<thead>
  <tr>
    <th>Column 1</th>
    <th>Column 2</th>
  </tr>
</thead>
```

#### 5. Basic Example
```html
<table>
  <thead>
    <tr>
      <th>Subject Code</th>
      <th>Subject Title</th>
      <th>Credits</th>
    </tr>
  </thead>
</table>
```

#### 6. Output
Groups header row cleanly at top of table.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="table-dark"` | Optional |

#### 8. Attribute Example
```html
<thead class="bg-primary text-white">
```

#### 9. Real-World Example
* **Use Case:** Used in large enterprise data tables, invoice printouts, and pagination tables.
* **Code:**
```html
<table class="data-table">
  <thead class="sticky-top">
    <tr><th>ID</th><th>Name</th><th>Role</th></tr>
  </thead>
</table>
```

#### 10. Important Notes
Must be placed inside `<table>`, after `<caption>`, and before `<tbody>` or `<tfoot>`.

#### 11. Related Tags
Nested in `<table>`. Related to `<tbody>`, `<tfoot>`, `<th>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Not deprecated.

---

### 6.4 `<tbody>`

#### 1. Tag Name
* **Tag Name:** `<tbody>`
* **Opening & Closing Form:** `<tbody>...</tbody>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<tbody>` (Table Body) tag encapsulates the main data rows (`<tr><td>`) of an HTML table.

#### 3. Purpose / Function
Separates data rows from header (`<thead>`) and summary footer (`<tfoot>`) sections.

#### 4. Syntax
```html
<tbody>
  <tr>
    <td>Data 1</td>
    <td>Data 2</td>
  </tr>
</tbody>
```

#### 5. Basic Example
```html
<table>
  <tbody>
    <tr><td>18CS51</td><td>Management</td><td>3</td></tr>
    <tr><td>18CS52</td><td>Web Tech</td><td>4</td></tr>
  </tbody>
</table>
```

#### 6. Output
Groups content rows of table body.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="table-group-divider"` | Optional |

#### 8. Attribute Example
```html
<tbody class="divide-y divide-gray-200">
```

#### 9. Real-World Example
* **Use Case:** Used in dynamic JavaScript data tables (DataTables, React tables) for sorting and filtering data rows.
* **Code:**
```html
<table>
  <thead><tr><th>Item</th><th>Price</th></tr></thead>
  <tbody id="cart-items">
    <tr><td>Laptop</td><td>$1000</td></tr>
  </tbody>
</table>
```

#### 10. Important Notes
Multiple `<tbody>` elements can exist in a single table to divide data into distinct row sections.

#### 11. Related Tags
Nested in `<table>`. Related to `<thead>`, `<tfoot>`, `<tr>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Not deprecated.

---

### 6.5 `<tfoot>`

#### 1. Tag Name
* **Tag Name:** `<tfoot>`
* **Opening & Closing Form:** `<tfoot>...</tfoot>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<tfoot>` (Table Footer) tag groups footer/summary content in an HTML table (such as totals, averages, or page counts).

#### 3. Purpose / Function
Renders table summary footers at the bottom of data grids.

#### 4. Syntax
```html
<tfoot>
  <tr>
    <td>Total</td>
    <td>100</td>
  </tr>
</tfoot>
```

#### 5. Basic Example
```html
<table>
  <tfoot>
    <tr>
      <td>Total Credits:</td>
      <td>24</td>
    </tr>
  </tfoot>
</table>
```

#### 6. Output
Displays total credits row at bottom of table.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="fw-bold"` | Optional |

#### 8. Attribute Example
```html
<tfoot class="bg-light font-weight-bold">
```

#### 9. Real-World Example
* **Use Case:** Used in invoice balance sheets, e-commerce cart totals, and financial summaries.
* **Code:**
```html
<table>
  <tbody><tr><td>Subtotal</td><td>$500</td></tr></tbody>
  <tfoot><tr><th>Grand Total:</th><th>$500</th></tr></tfoot>
</table>
```

#### 10. Important Notes
In HTML5, `<tfoot>` can be placed either before or after `<tbody>`, but browser renders it at the bottom.

#### 11. Related Tags
Nested in `<table>`. Related to `<thead>`, `<tbody>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Not deprecated.

---

### 6.6 `<tr>`

#### 1. Tag Name
* **Tag Name:** `<tr>`
* **Opening & Closing Form:** `<tr>...</tr>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<tr>` (Table Row) tag defines a horizontal row of cells in a table.

#### 3. Purpose / Function
Acts as container for table header cells (`<th>`) or table data cells (`<td>`).

#### 4. Syntax
```html
<tr>
  <th>Header</th>
  <td>Data</td>
</tr>
```

#### 5. Basic Example
```html
<tr>
  <td>August 28</td>
  <td>HTML5 Exam</td>
  <td>Passed</td>
</tr>
```

#### 6. Output
Renders a single horizontal row containing three table cells.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="table-row-hover"` | Optional |

#### 8. Attribute Example
```html
<tr class="bg-gray-100" id="row-1">
```

#### 9. Real-World Example
* **Use Case:** Used in every grid table row on web applications.
* **Code:**
```html
<tbody>
  <tr id="student-101">
    <td>101</td>
    <td>Rahul Kumar</td>
  </tr>
</tbody>
```

#### 10. Important Notes
Must be placed inside `<thead>`, `<tbody>`, `<tfoot>`, or directly in `<table>`. Contains only `<th>` or `<td>`.

#### 11. Related Tags
Nested in `<thead>`, `<tbody>`, `<tfoot>`. Contains `<th>`, `<td>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** `bgcolor`, `align`, `valign` attributes are obsolete.

---

### 6.7 `<th>`

#### 1. Tag Name
* **Tag Name:** `<th>`
* **Opening & Closing Form:** `<th>...</th>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<th>` (Table Header) tag defines a header cell in a table. Text inside `<th>` is bold and centered by default.

#### 3. Purpose / Function
Provides column or row header labels in tabular data for human readability and screen reader accessibility.

#### 4. Syntax
```html
<th scope="col|row" colspan="n" rowspan="n">Header Title</th>
```

#### 5. Basic Example
```html
<tr>
  <th scope="col">Student ID</th>
  <th scope="col">Name</th>
  <th scope="col">GPA</th>
</tr>
```

#### 6. Output
Displays "Student ID", "Name", "GPA" in bold, centered text inside header cells.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `scope` | Specifies whether header applies to `col`, `row`, `colgroup`, or `rowgroup`. | `scope="col"` | Recommended (a11y) |
| `colspan` | Number of columns this header cell spans. | `colspan="2"` | Optional |
| `rowspan` | Number of rows this header cell spans. | `rowspan="2"` | Optional |
| `abbr` | Abbreviation for long header text. | `abbr="Sub Code"` | Optional |

#### 8. Attribute Example
```html
<th scope="col" colspan="2" class="text-center">Contact Details</th>
```

#### 9. Real-World Example
* **Use Case:** Used across all tabular data headers on college portals, banking sites, and data sheets.
* **Code:**
```html
<thead>
  <tr>
    <th scope="col">Roll No</th>
    <th scope="col">Student Name</th>
  </tr>
</thead>
```

#### 10. Important Notes
Always include `scope="col"` or `scope="row"` on `<th>` elements to ensure screen readers correctly associate headers with data cells.

#### 11. Related Tags
Nested in `<tr>`. Related to `<td>`, `<thead>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** `align`, `width`, `height`, `bgcolor` obsolete.

---

### 6.8 `<td>`

#### 1. Tag Name
* **Tag Name:** `<td>`
* **Opening & Closing Form:** `<td>...</td>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<td>` (Table Data) tag defines a standard data cell in an HTML table. Text in `<td>` is regular-weighted and left-aligned by default.

#### 3. Purpose / Function
Contains actual data values within table grid rows.

#### 4. Syntax
```html
<td colspan="n" rowspan="n">Cell Data</td>
```

#### 5. Basic Example
```html
<tr>
  <td>1VU22CS045</td>
  <td>Priya Sharma</td>
  <td>9.4</td>
</tr>
```

#### 6. Output
Renders three regular left-aligned data cells inside a table row.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `colspan` | Specifies number of columns cell should span across. | `colspan="3"` | Optional |
| `rowspan` | Specifies number of rows cell should span across. | `rowspan="2"` | Optional |
| `headers` | Space-separated IDs of `<th>` elements providing header context. | `headers="col-name"` | Optional |

#### 8. Attribute Example
```html
<td colspan="2" class="text-center font-bold">Total Marks: 450</td>
```

#### 9. Real-World Example
* **Use Case:** Used to display cell data values in grade lists, pricing grid comparisons, and financial reports.
* **Code:**
```html
<tr>
  <td>Web Tech Lab</td>
  <td rowspan="2">Exam Slot A</td>
</tr>
<tr>
  <td>OS Lab</td>
</tr>
```

#### 10. Important Notes
Use `colspan` and `rowspan` for merging adjacent table cells in complex schedule tables.

#### 11. Related Tags
Nested in `<tr>`. Related to `<th>`, `<table>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** `width`, `height`, `align`, `valign`, `bgcolor` obsolete.

---

### 6.9 `<colgroup>`

#### 1. Tag Name
* **Tag Name:** `<colgroup>`
* **Opening & Closing Form:** `<colgroup>...</colgroup>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<colgroup>` tag specifies a group of one or more columns in a table for formatting.

#### 3. Purpose / Function
Applies CSS styles (like column background colors or widths) to whole columns at once without repeating styles on every `<td>`.

#### 4. Syntax
```html
<colgroup>
  <col span="2" style="background-color: yellow;">
</colgroup>
```

#### 5. Basic Example
```html
<table>
  <colgroup>
    <col style="background-color: #f1f5f9;">
    <col style="background-color: #e2e8f0;">
  </colgroup>
  <tr><td>Col 1</td><td>Col 2</td></tr>
</table>
```

#### 6. Output
Applies light grey background color to first column and darker grey to second column.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `span` | Number of consecutive columns the group spans. | `span="3"` | Optional |

#### 8. Attribute Example
```html
<colgroup span="2" class="col-highlight">
```

#### 9. Real-World Example
* **Use Case:** Used in financial spreadsheets and comparison tables to highlight entire columns.
* **Code:**
```html
<table>
  <colgroup>
    <col style="width: 20%;">
    <col style="width: 80%;">
  </colgroup>
  <tr><th>Label</th><th>Value</th></tr>
</table>
```

#### 10. Important Notes
Must be placed inside `<table>`, after `<caption>` and before `<thead>` / `<tr>`. Contains `<col>` tags.

#### 11. Related Tags
Nested in `<table>`. Contains `<col>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Not deprecated.

---

### 6.10 `<col>`

#### 1. Tag Name
* **Tag Name:** `<col>`
* **Opening & Closing Form:** `<col ... > (No closing tag)`
* **Tag Type:** Empty / Void Tag

#### 2. Definition
The `<col>` tag specifies column properties for each column within a `<colgroup>` element.

#### 3. Purpose / Function
Sets column width or style properties across entire table columns.

#### 4. Syntax
```html
<col span="number" style="css_style">
```

#### 5. Basic Example
```html
<colgroup>
  <col style="width: 100px; background-color: #dbeafe;">
  <col style="width: 300px;">
</colgroup>
```

#### 6. Output
Sets first table column to fixed 100px width with light blue fill.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `span` | Specifies number of columns the `<col>` spans. | `span="2"` | Optional |

#### 8. Attribute Example
```html
<col span="2" style="background-color: #fef08a;">
```

#### 9. Real-World Example
* **Use Case:** Used in pricing grid columns to highlight recommended plan column.
* **Code:**
```html
<colgroup>
  <col span="1">
  <col class="popular-column">
</colgroup>
```

#### 10. Important Notes
Does not hold content; used solely for styling column rules.

#### 11. Related Tags
Nested inside `<colgroup>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Presentation attributes (`width`, `align`, `valign`) obsolete.

---


# SECTION G: FORMS AND INPUT TAGS


### 7.1 `<form>`

#### 1. Tag Name
* **Tag Name:** `<form>`
* **Opening & Closing Form:** `<form>...</form>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<form>` element represents a document section containing interactive controls for submitting user information to a web server.

#### 3. Purpose / Function
Encapsulates inputs, buttons, checkboxes, dropdowns, and textareas to process user input data (e.g. login, registration, search).

#### 4. Syntax
```html
<form action="server_script.php" method="GET|POST" enctype="multipart/form-data">
  <!-- Form inputs -->
</form>
```

#### 5. Basic Example
```html
<form action="/submit-assignment" method="POST">
  <label for="student">Student Name:</label>
  <input type="text" id="student" name="student_name" required>
  <button type="submit">Submit</button>
</form>
```

#### 6. Output
Renders a text box for student name and a submit button. Submitting sends data via POST request to `/submit-assignment`.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `action` | Specifies URL endpoint where form data is sent on submit. | `action="/api/login"` | Recommended |
| `method` | HTTP method used (`GET` or `POST`). | `method="POST"` | Required |
| `enctype` | Specifies encoding type for form submission (`application/x-www-form-urlencoded`, `multipart/form-data`, `text/plain`). | `enctype="multipart/form-data"` | Required for file uploads |
| `target` | Window target for server response (`_self`, `_blank`). | `target="_blank"` | Optional |
| `autocomplete` | Enables/disables auto completion (`on` or `off`). | `autocomplete="on"` | Optional |
| `novalidate` | Disables default browser HTML5 validation checks when submitting. | `novalidate` | Optional |
| `name` | Specifies form name for script reference. | `name="loginForm"` | Optional |

#### 8. Attribute Example
```html
<form action="upload.php" method="POST" enctype="multipart/form-data" autocomplete="off" novalidate>
```

#### 9. Real-World Example
* **Use Case:** Used in every login box (Google, Facebook), sign up form, payment checkout, search bar, and feedback portal.
* **Code:**
```html
<form action="/api/v1/register" method="POST" class="needs-validation">
  <h2>Student Registration Form</h2>
  <div class="mb-3">
    <label for="email">College Email</label>
    <input type="email" id="email" name="user_email" required class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Register Now</button>
</form>
```

#### 10. Important Notes
Always specify `enctype="multipart/form-data"` on `<form>` when uploading files via `<input type="file">`; otherwise file binary data will not be transmitted.

#### 11. Related Tags
Related to `<input>`, `<button>`, `<label>`, `<textarea>`, `<select>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Not deprecated.

---

### 7.2 `<input>`

#### 1. Tag Name
* **Tag Name:** `<input>`
* **Opening & Closing Form:** `<input ... > (No closing tag)`
* **Tag Type:** Empty / Void Tag

#### 2. Definition
The `<input>` tag is used to create interactive controls for web-based forms to accept data from the user.

#### 3. Purpose / Function
Serves as the primary versatile form element, rendering text boxes, checkboxes, radio buttons, file pickers, sliders, and submit controls depending on its `type` attribute value.

#### 4. Syntax
```html
<input type="type_name" name="field_name" value="initial_val">
```

#### 5. Basic Example
```html
<input type="text" name="username" placeholder="Enter USN Number" required>
```

#### 6. Output
Renders a single-line text input field with gray placeholder text.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `type` | Specifies input control type (`text`, `password`, `email`, `number`, etc.). | `type="email"` | Required |
| `name` | Name key submitted to server with field value. | `name="user_email"` | Mandatory for forms |
| `value` | Default or entered text value of input. | `value="Aryansh"` | Optional |
| `placeholder` | Short hint displayed inside empty field. | `placeholder="e.g. 1VU22CS001"` | Optional |
| `required` | Mandates field must be filled before submission. | `required` | Optional |
| `readonly` | Prevents user modification while retaining submit value. | `readonly` | Optional |
| `disabled` | Disables interaction and excludes from form submission. | `disabled` | Optional |
| `minlength` | Minimum character length required. | `minlength="8"` | Optional |
| `maxlength` | Maximum character length allowed. | `maxlength="50"` | Optional |
| `min` | Minimum numerical or date boundary value. | `min="0"` | Optional |
| `max` | Maximum numerical or date boundary value. | `max="100"` | Optional |
| `step` | Numerical stepping interval (`step="0.01"`). | `step="5"` | Optional |
| `pattern` | Regular expression regex string for value validation. | `pattern="[A-Z]{3}[0-9]{4}"` | Optional |
| `checked` | Specifies radio or checkbox is selected by default. | `checked` | Optional (radio/checkbox) |
| `multiple` | Allows selecting multiple values/files. | `multiple` | Optional (file/email) |
| `accept` | Specifies acceptable MIME file extensions. | `accept=".pdf,.png"` | Optional (file type) |
| `autocomplete`| Enables browser auto-fill suggestions. | `autocomplete="username"` | Optional |

#### 8. Attribute Example
```html
<input type="password" id="pwd" name="user_pass" minlength="8" maxlength="20" required placeholder="Enter strong password">
```

#### 9. Real-World Example
* **Use Case:** Used in every web form across the internet.
* **Code:**
```html
<!-- Real World Input Element with Validation -->
<input type="text" 
       id="usn" 
       name="student_usn" 
       pattern="1[A-Z]{2}[0-9]{2}[A-Z]{2}[0-9]{3}" 
       placeholder="1VU22CS001" 
       title="Enter valid VTU USN Format" 
       required 
       class="form-input">
```

#### 10. Important Notes
Inputs must always have a corresponding `<label>` tag for accessibility. Always include `name` attribute on `<input>`; unnamed inputs are ignored during form POST submissions.

#### 11. Related Tags
Related to `<label>`, `<form>`, `<datalist>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Attributes `align`, `usemap` obsolete.

---


### 7.2.1 Detailed Explanation of Major `<input>` Types

| Input Type | Description & Purpose | Syntax Example | HTML5 Validation Behavior |
| --- | --- | --- | --- |
| `text` | Standard single-line plain text box. | `<input type="text" name="fname">` | General text string input. |
| `password` | Masks typed characters (bullets/asterisks) for security. | `<input type="password" name="pwd">` | Security masking enabled. |
| `email` | Accepts email address format. | `<input type="email" name="user_email">` | Validates `name@domain.com` format. |
| `number` | Accepts numeric values with spin arrows. | `<input type="number" min="1" max="100" step="1">` | Restricts non-numeric characters. |
| `tel` | Input field for phone numbers. | `<input type="tel" pattern="[0-9]{10}">` | Best combined with regex `pattern`. |
| `url` | Field for entering web addresses (URLs). | `<input type="url" placeholder="https://">` | Validates `http://` or `https://` prefix. |
| `search` | Single-line search text box with clear (x) button. | `<input type="search" name="query">` | Provides clear button on modern browsers. |
| `date` | Native date picker popup (Year, Month, Day). | `<input type="date" name="dob">` | Format: `YYYY-MM-DD`. |
| `time` | Native time picker popup (Hours, Minutes). | `<input type="time" name="alarm">` | Format: `HH:MM` (24-hr or AM/PM). |
| `datetime-local` | Combined date and time picker (No timezone). | `<input type="datetime-local" name="event_time">` | Format: `YYYY-MM-DDTHH:MM`. |
| `month` | Native month and year selection control. | `<input type="month" name="exp_month">` | Format: `YYYY-MM`. |
| `week` | Native week number and year selection. | `<input type="week" name="proj_week">` | Format: `YYYY-Www`. |
| `color` | Native GUI color picker palette popup. | `<input type="color" name="fav_color" value="#2563eb">` | Returns 6-digit Hex code (`#rrggbb`). |
| `checkbox` | Square toggle option allowing multiple selections. | `<input type="checkbox" name="skills" value="html" checked>` | Returns boolean/value if checked. |
| `radio` | Circular mutually exclusive single-choice option button. | `<input type="radio" name="gender" value="male">` | Grouped by identical `name` attribute. |
| `file` | File selection dialog picker for file uploads. | `<input type="file" name="resume" accept=".pdf" multiple>` | Requires `enctype="multipart/form-data"`. |
| `hidden` | Concealed input field carrying background data. | `<input type="hidden" name="user_id" value="10928">` | Hidden from visual layout display. |
| `range` | Graphical slider bar for selecting approximate numeric value. | `<input type="range" min="0" max="100" value="50">` | Default numeric slider UI control. |
| `submit` | Submit button that triggers form submission. | `<input type="submit" value="Submit Form">` | Sends form payload to server. |
| `reset` | Reset button that clears all form inputs back to default values. | `<input type="reset" value="Reset Fields">` | Clears all input field entries. |
| `button` | Generic clickable input button for JS scripts. | `<input type="button" value="Click Me" onclick="doSomething()">` | No default submit behavior. |

---

### 7.3 `<label>`

#### 1. Tag Name
* **Tag Name:** `<label>`
* **Opening & Closing Form:** `<label>...</label>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<label>` element represents a caption for an item in a user interface, binding descriptive text to a form control element.

#### 3. Purpose / Function
Improves usability by allowing users to click label text to focus the input box or toggle checkboxes, and enables screen readers to speak field captions.

#### 4. Syntax
```html
<label for="input_id">Field Label Text</label>
<input type="text" id="input_id">
```

#### 5. Basic Example
```html
<label for="phone">Phone Number:</label>
<input type="tel" id="phone" name="user_phone">
```

#### 6. Output
Renders "Phone Number:" text next to input box. Clicking the text automatically activates and focuses the phone input box.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `for` | Specifies the `id` of the target input element this label describes. | `for="user_email"` | Mandatory for explicit linkage |

#### 8. Attribute Example
```html
<label for="terms">
  <input type="checkbox" id="terms" name="agree"> I agree to Terms & Conditions
</label>
```

#### 9. Real-World Example
* **Use Case:** Used in every accessible web form across Google, Microsoft, and government portals.
* **Code:**
```html
<div class="form-group">
  <label for="student_id" class="form-label">Student ID Card Number:</label>
  <input type="text" id="student_id" name="sid" class="form-control">
</div>
```

#### 10. Important Notes
The `for` attribute on `<label>` MUST match the exact `id` attribute value of the associated input element.

#### 11. Related Tags
Related to `<input>`, `<textarea>`, `<select>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Standard HTML5 accessibility element.

---

### 7.4 `<button>`

#### 1. Tag Name
* **Tag Name:** `<button>`
* **Opening & Closing Form:** `<button>...</button>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<button>` element represents a clickable button, used to submit forms or execute custom JavaScript actions.

#### 3. Purpose / Function
Renders styled clickable buttons that can contain rich HTML content like icons, formatted text, and images inside.

#### 4. Syntax
```html
<button type="submit|reset|button">Button Text</button>
```

#### 5. Basic Example
```html
<button type="submit" class="btn-submit">
  <img src="icon-send.png" alt="" width="16">
  Send Assignment
</button>
```

#### 6. Output
Renders a clickable button displaying an icon alongside the text "Send Assignment".

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `type` | Type behavior (`submit`, `reset`, `button`). Default in forms is `submit`. | `type="button"` | Strongly Recommended |
| `disabled` | Disables button interactions. | `disabled` | Optional |
| `name` | Name sent with form data on click. | `name="action"` | Optional |
| `value` | Value sent with form data on click. | `value="save_draft"` | Optional |
| `formaction` | Overrides parent form action URL on submit. | `formaction="/save-draft"` | Optional |
| `formmethod` | Overrides parent form HTTP method on submit. | `formmethod="POST"` | Optional |

#### 8. Attribute Example
```html
<button type="button" onclick="window.print()" class="btn btn-outline-secondary">Print Hall Ticket</button>
```

#### 9. Real-World Example
* **Use Case:** Used for submit buttons, modal dialog triggers, play/pause controls, and UI action triggers.
* **Code:**
```html
<button type="submit" class="btn btn-primary btn-lg">
  <i class="fa fa-paper-plane"></i> Submit Registration
</button>
```

#### 10. Important Notes
Always specify `type="button"` for non-submitting JS buttons inside forms; otherwise browser defaults to submitting the form (`type="submit"`).

#### 11. Related Tags
Related to `<input type="button">`, `<form>`, `<a>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Replaced `<input type="button">` due to richer styling support.

---

### 7.5 `<textarea>`

#### 1. Tag Name
* **Tag Name:** `<textarea>`
* **Opening & Closing Form:** `<textarea>...</textarea>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<textarea>` tag defines a multi-line text input control for entering longer prose text.

#### 3. Purpose / Function
Used for feedback forms, comment boxes, post composition, and multi-line address fields.

#### 4. Syntax
```html
<textarea name="field" rows="4" cols="50" placeholder="Hint"></textarea>
```

#### 5. Basic Example
```html
<textarea id="feedback" name="user_feedback" rows="5" cols="40" placeholder="Type your assignment feedback here..."></textarea>
```

#### 6. Output
Renders a resizable multi-line text input box 5 rows tall and 40 columns wide.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `name` | Name submitted with field content. | `name="comments"` | Required in forms |
| `rows` | Specifies visible height in text lines. | `rows="6"` | Recommended |
| `cols` | Specifies visible width in character average width. | `cols="50"` | Recommended |
| `placeholder` | Hint text inside empty textarea. | `placeholder="Enter text..."` | Optional |
| `maxlength` | Maximum allowed character count. | `maxlength="500"` | Optional |
| `required` | Mandates field completion. | `required` | Optional |
| `readonly` | Prevents user editing. | `readonly` | Optional |
| `wrap` | Text wrapping behavior (`soft` or `hard`). | `wrap="hard"` | Optional |

#### 8. Attribute Example
```html
<textarea name="bio" rows="4" maxlength="300" placeholder="Brief student bio..." required></textarea>
```

#### 9. Real-World Example
* **Use Case:** Used in comment sections, blog article composition tools, review submission forms, and code playgrounds.
* **Code:**
```html
<div class="form-group">
  <label for="address">Permanent Address:</label>
  <textarea id="address" name="address" rows="3" class="form-control" required></textarea>
</div>
```

#### 10. Important Notes
Unlike `<input value="...">`, initial text for `<textarea>` is placed BETWEEN opening `<textarea>` and closing `</textarea>` tags.

#### 11. Related Tags
Related to `<input>`, `<label>`, `<form>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Not deprecated.

---

### 7.6 `<select>`

#### 1. Tag Name
* **Tag Name:** `<select>`
* **Opening & Closing Form:** `<select>...</select>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<select>` element is used to create a drop-down selection list of options.

#### 3. Purpose / Function
Allows users to pick one or multiple options from a predefined drop-down list menu.

#### 4. Syntax
```html
<select name="select_name">
  <option value="val1">Option 1</option>
</select>
```

#### 5. Basic Example
```html
<label for="branch">Select Branch:</label>
<select id="branch" name="student_branch">
  <option value="cse">Computer Science</option>
  <option value="ece">Electronics & Communication</option>
  <option value="mech">Mechanical</option>
</select>
```

#### 6. Output
Displays a drop-down menu defaulting to "Computer Science". Clicking opens list choices.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `name` | Field name sent on form submit. | `name="branch"` | Required in forms |
| `multiple` | Allows selecting multiple options simultaneously (Ctrl/Cmd click). | `multiple` | Optional |
| `size` | Specifies visible dropdown rows without opening. | `size="4"` | Optional |
| `required` | Requires selection of non-empty option. | `required` | Optional |
| `disabled` | Disables dropdown interaction. | `disabled` | Optional |

#### 8. Attribute Example
```html
<select name="subjects" id="sub" multiple size="3" class="form-select">
```

#### 9. Real-World Example
* **Use Case:** Used for country select pickers, date dropdowns, state options, and branch selectors on university portals.
* **Code:**
```html
<div class="mb-3">
  <label for="state">State of Residence:</label>
  <select id="state" name="state" required class="form-select">
    <option value="" selected disabled>-- Choose State --</option>
    <option value="KA">Karnataka</option>
    <option value="MH">Maharashtra</option>
  </select>
</div>
```

#### 10. Important Notes
Direct child elements must be `<option>` or `<optgroup>` tags.

#### 11. Related Tags
Related to `<option>`, `<optgroup>`, `<datalist>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Not deprecated.

---

### 7.7 `<option>`

#### 1. Tag Name
* **Tag Name:** `<option>`
* **Opening & Closing Form:** `<option>...</option>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<option>` tag defines an item choice in a drop-down list created by `<select>`, `<optgroup>`, or `<datalist>`.

#### 3. Purpose / Function
Specifies individual choices and values within selection menus.

#### 4. Syntax
```html
<option value="choice_value">Option Label</option>
```

#### 5. Basic Example
```html
<option value="sem3" selected>Semester 3</option>
```

#### 6. Output
Renders "Semester 3" option selected by default in dropdown.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `value` | Data payload sent to server when option selected. | `value="IN"` | Recommended |
| `selected` | Pre-selects this option by default when loaded. | `selected` | Optional |
| `disabled` | Disables selecting this individual option item. | `disabled` | Optional |

#### 8. Attribute Example
```html
<option value="us" disabled>United States (Unavailable)</option>
```

#### 9. Real-World Example
* **Use Case:** Used inside every select dropdown menu.
* **Code:**
```html
<select name="gender">
  <option value="" disabled selected>Choose Gender</option>
  <option value="female">Female</option>
  <option value="male">Male</option>
</select>
```

#### 10. Important Notes
If `value` attribute is omitted, server receives the raw text inside `<option>...</option>`.

#### 11. Related Tags
Nested in `<select>`, `<optgroup>`, `<datalist>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Not deprecated.

---

### 7.8 `<optgroup>`

#### 1. Tag Name
* **Tag Name:** `<optgroup>`
* **Opening & Closing Form:** `<optgroup label="...">...</optgroup>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<optgroup>` element creates sub-grouped category headings for `<option>` items inside a `<select>` dropdown menu.

#### 3. Purpose / Function
Organizes long list options into distinct categorized groups.

#### 4. Syntax
```html
<select>
  <optgroup label="Group Title">
    <option value="v1">Opt 1</option>
  </optgroup>
</select>
```

#### 5. Basic Example
```html
<select name="electives">
  <optgroup label="CSE Electives">
    <option value="ai">Artificial Intelligence</option>
    <option value="ml">Machine Learning</option>
  </optgroup>
  <optgroup label="ECE Electives">
    <option value="vlsi">VLSI Design</option>
  </optgroup>
</select>
```

#### 6. Output
Renders dropdown with non-selectable bold category headers ("CSE Electives", "ECE Electives") grouping options.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `label` | Category group header title text. | `label="UG Courses"` | Mandatory |
| `disabled` | Disables all option items inside group. | `disabled` | Optional |

#### 8. Attribute Example
```html
<optgroup label="PG Stream" disabled>
```

#### 9. Real-World Example
* **Use Case:** Used in vehicle selectors (Category: SUV, Sedan), location pickers (Continent > Country), and branch electives.
* **Code:**
```html
<select name="car_model">
  <optgroup label="Electric Vehicles">
    <option value="tesla_3">Tesla Model 3</option>
  </optgroup>
</select>
```

#### 10. Important Notes
The `label` attribute is required to provide title for the sub-group category header.

#### 11. Related Tags
Nested in `<select>`. Contains `<option>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Not deprecated.

---

### 7.9 `<fieldset>`

#### 1. Tag Name
* **Tag Name:** `<fieldset>`
* **Opening & Closing Form:** `<fieldset>...</fieldset>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<fieldset>` element is used to group related input controls and labels within a web form, drawing a visible box frame around them.

#### 3. Purpose / Function
Logically organizes form fields into distinct logical modules (e.g., Personal Info, Academic Details).

#### 4. Syntax
```html
<fieldset>
  <legend>Section Title</legend>
  <!-- Input fields -->
</fieldset>
```

#### 5. Basic Example
```html
<fieldset>
  <legend>Personal Information</legend>
  <label>First Name: <input type="text" name="fname"></label><br>
  <label>Last Name: <input type="text" name="lname"></label>
</fieldset>
```

#### 6. Output
Renders a grey bordered box enclosing the inputs with "Personal Information" embedded into the top line border.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `disabled` | Disables ALL child form inputs contained inside group. | `disabled` | Optional |
| `form` | Associates fieldset with a parent `<form>` ID. | `form="regForm"` | Optional |
| `name` | Name of fieldset group. | `name="personal_group"` | Optional |

#### 8. Attribute Example
```html
<fieldset disabled id="payment-fields">
```

#### 9. Real-World Example
* **Use Case:** Used in multi-step wizard forms, checkout payment sections, and profile editing screens.
* **Code:**
```html
<fieldset class="border p-3 rounded">
  <legend class="w-auto px-2">Account Security</legend>
  <input type="password" placeholder="New Password">
</fieldset>
```

#### 10. Important Notes
Greatly assists accessibility screen readers by contextualizing grouped inputs.

#### 11. Related Tags
Contains `<legend>`. Parent is `<form>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Not deprecated.

---

### 7.10 `<legend>`

#### 1. Tag Name
* **Tag Name:** `<legend>`
* **Opening & Closing Form:** `<legend>...</legend>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<legend>` tag defines a caption title for the parent `<fieldset>` element.

#### 3. Purpose / Function
Displays section headers embedded into top borders of fieldset containers.

#### 4. Syntax
```html
<legend>Group Caption Title</legend>
```

#### 5. Basic Example
```html
<legend>Payment Options</legend>
```

#### 6. Output
Renders caption text embedded directly on top border line of fieldset.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `align` | Sets alignment (`left`, `center`, `right`). | `align="center"` | Deprecated |

#### 8. Attribute Example
```html
<legend class="font-bold text-primary">Emergency Contact</legend>
```

#### 9. Real-World Example
* **Use Case:** Used inside form fieldsets on university and bank portals.
* **Code:**
```html
<fieldset>
  <legend>Guardian Details</legend>
  <input type="text" name="guardian_name">
</fieldset>
```

#### 10. Important Notes
MUST be the VERY FIRST child element inside a `<fieldset>` element.

#### 11. Related Tags
Parent must be `<fieldset>`. Related to `<caption>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** `align` attribute is deprecated.

---

### 7.11 `<datalist>`

#### 1. Tag Name
* **Tag Name:** `<datalist>`
* **Opening & Closing Form:** `<datalist>...</datalist>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<datalist>` tag contains a set of `<option>` elements that represent recommended auto-complete options for an `<input>` element.

#### 3. Purpose / Function
Provides an interactive auto-suggest autocomplete dropdown for standard single-line text inputs while still allowing custom typing.

#### 4. Syntax
```html
<input list="list_id">
<datalist id="list_id">
  <option value="Option 1">
</datalist>
```

#### 5. Basic Example
```html
<label for="browser">Browser:</label>
<input list="browsers" id="browser" name="browser">
<datalist id="browsers">
  <option value="Chrome">
  <option value="Firefox">
  <option value="Edge">
  <option value="Safari">
</datalist>
```

#### 6. Output
Displays a standard text box that shows auto-suggest dropdown list when user clicks or types inside it.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `id="city-list"` | Mandatory (`id` matches input `list`) |

#### 8. Attribute Example
```html
<datalist id="courses">
  <option value="Computer Science Engineering">
</datalist>
```

#### 9. Real-World Example
* **Use Case:** Used in search search bars, airport location search boxes, and college degree selector fields.
* **Code:**
```html
<label for="city">Search City:</label>
<input list="cities" id="city" name="city" placeholder="Type city name">
<datalist id="cities">
  <option value="Bangalore">
  <option value="Belagavi">
  <option value="Delhi">
</datalist>
```

#### 10. Important Notes
The `id` attribute of `<datalist>` MUST match the `list` attribute of the bound `<input>` element.

#### 11. Related Tags
Paired with `<input list="...">`. Contains `<option>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Standard HTML5 element.

---

### 7.12 `<output>`

#### 1. Tag Name
* **Tag Name:** `<output>`
* **Opening & Closing Form:** `<output>...</output>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<output>` element represents the result of a calculation performed by JavaScript or form script operations.

#### 3. Purpose / Function
Provides a semantic element for displaying live calculation results (e.g. range slider value, shopping total calculation).

#### 4. Syntax
```html
<output name="result_name" for="input_ids">Initial output</output>
```

#### 5. Basic Example
```html
<form oninput="x.value=parseInt(a.value)+parseInt(b.value)">
  <input type="number" id="a" value="50"> +
  <input type="number" id="b" value="25"> =
  <output name="x" for="a b">75</output>
</form>
```

#### 6. Output
Renders calculate total "75". Changing inputs recalculates and updates text dynamically.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `for` | Space-separated list of IDs of input elements contributing to output. | `for="num1 num2"` | Recommended |
| `name` | Field name sent on submission. | `name="total"` | Optional |
| `form` | Parent form ID. | `form="calcForm"` | Optional |

#### 8. Attribute Example
```html
<output id="volume-val" for="vol-range">50%</output>
```

#### 9. Real-World Example
* **Use Case:** Used in loan EMI calculators, dynamic shopping cart calculators, and range slider value labels.
* **Code:**
```html
<input type="range" id="rating" min="1" max="10" oninput="out.value=this.value">
Score: <output id="out" for="rating">5</output>/10
```

#### 10. Important Notes
Essential for semantic accessibility when displaying dynamic mathematical outputs.

#### 11. Related Tags
Related to `<input type="range">`, `<progress>`, `<meter>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Standard HTML5 element.

---

### 7.13 `<progress>`

#### 1. Tag Name
* **Tag Name:** `<progress>`
* **Opening & Closing Form:** `<progress>...</progress>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<progress>` element represents the completion progress of a task, such as a file download, installation, or form submission.

#### 3. Purpose / Function
Displays a dynamic horizontal progress bar representing task completion status percentage.

#### 4. Syntax
```html
<progress value="current_val" max="max_val"></progress>
```

#### 5. Basic Example
```html
<label for="file">Downloading Assignment PDF:</label>
<progress id="file" value="70" max="100"> 70% </progress>
```

#### 6. Output
Renders a blue horizontal progress bar filled to 70% length.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `value` | Current completed value of progress. | `value="45"` | Required (if determinate) |
| `max` | Maximum target value (default is 1.0). | `max="100"` | Optional |

#### 8. Attribute Example
```html
<progress value="0.75" max="1.0" class="w-100"></progress>
```

#### 9. Real-World Example
* **Use Case:** Used in file upload widgets (Dropbox, Google Drive), multi-step registration progress bars, and quiz timers.
* **Code:**
```html
<div class="upload-status">
  <p>Uploading resume.pdf...</p>
  <progress value="80" max="100"></progress> 80%
</div>
```

#### 10. Important Notes
Do not use `<progress>` to display disk space or gauge measurements; use `<meter>` for scalar range measurements.

#### 11. Related Tags
Related to `<meter>`, `<output>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Standard HTML5 element.

---

### 7.14 `<meter>`

#### 1. Tag Name
* **Tag Name:** `<meter>`
* **Opening & Closing Form:** `<meter>...</meter>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<meter>` element represents a scalar measurement within a known range, or a fractional value (e.g. disk usage, relevance match score, battery level).

#### 3. Purpose / Function
Displays a gauge bar indicating values relative to low, high, and optimum ranges.

#### 4. Syntax
```html
<meter value="val" min="min" max="max" low="low" high="high" optimum="opt"></meter>
```

#### 5. Basic Example
```html
<label for="disk">Server Storage Used:</label>
<meter id="disk" value="85" min="0" max="100" low="30" high="80" optimum="20">85%</meter>
```

#### 6. Output
Renders a gauge bar coloured yellow/red signaling high storage capacity warning.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `value` | Current numeric value measured. | `value="60"` | Required |
| `min` | Minimum bound of range (default 0). | `min="0"` | Optional |
| `max` | Maximum bound of range (default 1.0). | `max="100"` | Optional |
| `low` | Upper boundary of low range. | `low="30"` | Optional |
| `high` | Lower boundary of high range. | `high="80"` | Optional |
| `optimum` | Optimal value point in range. | `optimum="15"` | Optional |

#### 8. Attribute Example
```html
<meter value="9" min="0" max="10" low="3" high="7" optimum="9">9/10</meter>
```

#### 9. Real-World Example
* **Use Case:** Used in password strength gauges, battery indicators, storage quota meters, and voter results.
* **Code:**
```html
<p>Password Strength: <meter value="0.9" optimum="1.0"></meter> Strong</p>
```

#### 10. Important Notes
`<meter>` is for static fractional scalar measurements; `<progress>` is for dynamic task completion.

#### 11. Related Tags
Related to `<progress>`, `<output>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Standard HTML5 element.

---


# SECTION H: SEMANTIC LAYOUT TAGS


### 8.1 `<header>`

#### 1. Tag Name
* **Tag Name:** `<header>`
* **Opening & Closing Form:** `<header>...</header>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<header>` element represents introductory content, typically containing a group of introductory or navigational aids.

#### 3. Purpose / Function
Encapsulates headings (`<h1>`-`<h6>`), site branding logo, search form, and main navigation links.

#### 4. Syntax
```html
<header>
  <h1>Site Title</h1>
  <nav>...</nav>
</header>
```

#### 5. Basic Example
```html
<header>
  <img src="college-logo.png" alt="VTU Logo">
  <h1>Visvesvaraya Technological University</h1>
  <nav><a href="#home">Home</a></nav>
</header>
```

#### 6. Output
Renders site header banner block containing logo, main title, and navigation bar.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="site-header"` | Optional |

#### 8. Attribute Example
```html
<header class="bg-primary text-white p-3 shadow">
```

#### 9. Real-World Example
* **Use Case:** Used at top of every website layout (e.g. Amazon header bar, Wikipedia top banner).
* **Code:**
```html
<header class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">College Portal</a>
</header>
```

#### 10. Important Notes
Can be used as page top header OR inside `<article>` and `<section>` as article headers.

#### 11. Related Tags
Related to `<footer>`, `<nav>`, `<main>`, `<h1>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Standard HTML5 semantic element.

---

### 8.2 `<footer>`

#### 1. Tag Name
* **Tag Name:** `<footer>`
* **Opening & Closing Form:** `<footer>...</footer>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<footer>` element represents a footer for its nearest sectioning content or sectioning root element.

#### 3. Purpose / Function
Contains copyright notices, author contact details, site map links, privacy policy, and terms of service.

#### 4. Syntax
```html
<footer>
  <p>&copy; 2026 University. All rights reserved.</p>
</footer>
```

#### 5. Basic Example
```html
<footer>
  <p>&copy; 2026 Department of CSE. Contact: <address>info@college.edu</address></p>
</footer>
```

#### 6. Output
Renders a block section at bottom of document containing copyright and contact info.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="site-footer"` | Optional |

#### 8. Attribute Example
```html
<footer class="bg-gray-900 text-gray-300 py-6">
```

#### 9. Real-World Example
* **Use Case:** Used at bottom of every web page for footers.
* **Code:**
```html
<footer>
  <div class="footer-links">
    <a href="/privacy">Privacy Policy</a> | <a href="/terms">Terms</a>
  </div>
</footer>
```

#### 10. Important Notes
Contact information inside `<footer>` should be enclosed in an `<address>` tag.

#### 11. Related Tags
Related to `<header>`, `<address>`, `<small>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Standard HTML5 semantic element.

---

### 8.3 `<main>`

#### 1. Tag Name
* **Tag Name:** `<main>`
* **Opening & Closing Form:** `<main>...</main>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<main>` element represents the dominant content of the `<body>` of a document.

#### 3. Purpose / Function
Encapsulates unique primary content of the page, excluding repetitive sidebars, headers, footers, and nav bars.

#### 4. Syntax
```html
<main>
  <h1>Primary Page Topic</h1>
  <p>Main content area...</p>
</main>
```

#### 5. Basic Example
```html
<body>
  <header>Nav</header>
  <main>
    <h2>HTML Assignment Submission</h2>
    <p>Upload document below.</p>
  </main>
  <footer>Footer</footer>
</body>
```

#### 6. Output
Defines main content body area for browser rendering and screen reader landmark focus.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `id="main-content"` | Optional |

#### 8. Attribute Example
```html
<main id="main-content" role="main" class="container mt-4">
```

#### 9. Real-World Example
* **Use Case:** Used in every modern web app layout to isolate main content.
* **Code:**
```html
<main>
  <article>
    <h1>Lesson 1: Introduction</h1>
  </article>
</main>
```

#### 10. Important Notes
There MUST NOT be more than ONE visible `<main>` element in a document. Must not be descendant of `<header>`, `<footer>`, or `<nav>`.

#### 11. Related Tags
Related to `<article>`, `<section>`, `<body>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Standard HTML5 landmark element.

---

### 8.4 `<section>`

#### 1. Tag Name
* **Tag Name:** `<section>`
* **Opening & Closing Form:** `<section>...</section>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<section>` element represents a standalone generic section of a document, which typically has its own heading.

#### 3. Purpose / Function
Groups related content logically into thematic chapters, tabs, or sections.

#### 4. Syntax
```html
<section>
  <h2>Section Title</h2>
  <p>Section content...</p>
</section>
```

#### 5. Basic Example
```html
<section id="syllabus">
  <h2>Course Syllabus</h2>
  <p>Module 1: HTML5 Tags</p>
</section>
```

#### 6. Output
Renders thematic section with heading and paragraph.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `id="about-us"` | Optional |

#### 8. Attribute Example
```html
<section id="features" class="py-5 bg-light">
```

#### 9. Real-World Example
* **Use Case:** Used on landing pages to break content into Features, Testimonials, Pricing, and Contact sections.
* **Code:**
```html
<section class="pricing-table">
  <h2>Subscription Plans</h2>
</section>
```

#### 10. Important Notes
Should typically contain a heading element (`<h1>`-`<h6>`). If container is purely for CSS styling, use `<div>` instead.

#### 11. Related Tags
Related to `<article>`, `<div>`, `<main>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Standard HTML5 semantic tag.

---

### 8.5 `<article>`

#### 1. Tag Name
* **Tag Name:** `<article>`
* **Opening & Closing Form:** `<article>...</article>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<article>` element represents a self-contained composition in a document that is intended to be independently distributable or reusable (e.g. blog post, news story, forum post).

#### 3. Purpose / Function
Encapsulates independent content units that make sense on their own when RSS syndicated or shared.

#### 4. Syntax
```html
<article>
  <h2>Article Title</h2>
  <p>Article content...</p>
</article>
```

#### 5. Basic Example
```html
<article>
  <h2>Web Technologies Lab Assignment 1</h2>
  <p>Published on August 28, 2026 by CSE Dept.</p>
  <p>Complete all HTML tag exercises.</p>
</article>
```

#### 6. Output
Renders standalone article content block.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="blog-post"` | Optional |

#### 8. Attribute Example
```html
<article class="card p-4 mb-4 shadow-sm">
```

#### 9. Real-World Example
* **Use Case:** Used for news posts (BBC, CNN), blog entries, product cards (Amazon), and user comments.
* **Code:**
```html
<article class="news-item">
  <header><h3>New Library Opened</h3></header>
  <p>The new campus library opens today.</p>
</article>
```

#### 10. Important Notes
An `<article>` should make complete sense independently if pulled out of the page layout.

#### 11. Related Tags
Related to `<section>`, `<aside>`, `<header>`, `<footer>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Standard HTML5 semantic tag.

---

### 8.6 `<aside>`

#### 1. Tag Name
* **Tag Name:** `<aside>`
* **Opening & Closing Form:** `<aside>...</aside>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<aside>` element represents a portion of a document whose content is only indirectly related to the document's main content (e.g. sidebars, callout boxes, ads, related links).

#### 3. Purpose / Function
Renders peripheral content like sidebars, callouts, related article lists, or advertising blocks.

#### 4. Syntax
```html
<aside>
  <h3>Related Links</h3>
  <!-- Sidebar links -->
</aside>
```

#### 5. Basic Example
```html
<main><article>Main Lesson Content</article></main>
<aside>
  <h3>Quick Facts</h3>
  <p>HTML was created by Tim Berners-Lee in 1991.</p>
</aside>
```

#### 6. Output
Renders sidebar callout content box adjacent to main article.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="sidebar"` | Optional |

#### 8. Attribute Example
```html
<aside class="col-md-4 sidebar-box">
```

#### 9. Real-World Example
* **Use Case:** Used for blog sidebars, related posts boxes, ad banners, and Wikipedia info callouts.
* **Code:**
```html
<aside class="widget-area">
  <div class="widget"><h4>Search Portal</h4></div>
</aside>
```

#### 10. Important Notes
Do not put main article content inside `<aside>`; use only for auxiliary related sub-content.

#### 11. Related Tags
Related to `<main>`, `<article>`, `<section>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Standard HTML5 semantic tag.

---

### 8.7 `<div>`

#### 1. Tag Name
* **Tag Name:** `<div>`
* **Opening & Closing Form:** `<div>...</div>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<div>` (Content Division) element is the generic container for flow content. It has no effect on content or layout until styled using CSS.

#### 3. Purpose / Function
Used as a non-semantic block container to group elements for CSS styling, Flexbox/Grid layout, or JavaScript DOM manipulation.

#### 4. Syntax
```html
<div class="wrapper">
  <!-- Child elements -->
</div>
```

#### 5. Basic Example
```html
<div class="card">
  <h3>Card Header</h3>
  <p>Card description text.</p>
</div>
```

#### 6. Output
Renders a block box container styled according to CSS `.card` rules.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes (`id`, `class`, `style`). | `class="container"` | Optional |

#### 8. Attribute Example
```html
<div id="app-root" class="d-flex flex-column align-items-center">
```

#### 9. Real-World Example
* **Use Case:** Used extensively across all websites for layout wrappers, flex containers, modal boxes, grid rows, and UI components.
* **Code:**
```html
<div class="row">
  <div class="col-6">Column 1</div>
  <div class="col-6">Column 2</div>
</div>
```

#### 10. Important Notes
Use `<div>` ONLY when no semantic tag (`<article>`, `<section>`, `<header>`, `<main>`) is appropriate.

#### 11. Related Tags
Related to `<span>`, `<section>`, `<article>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Standard non-semantic block element.

---

### 8.8 `<span>`

#### 1. Tag Name
* **Tag Name:** `<span>`
* **Opening & Closing Form:** `<span>...</span>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<span>` element is a generic inline container for phrasing content, which does not inherently represent anything.

#### 3. Purpose / Function
Used to group inline elements or text fragments for CSS styling (colors, fonts) or JavaScript manipulation without starting a new line.

#### 4. Syntax
```html
<p>Text <span class="highlight">styled text</span> text continuation.</p>
```

#### 5. Basic Example
```html
<p>Status: <span style="color: green; font-weight: bold;">APPROVED</span></p>
```

#### 6. Output
Renders word "APPROVED" in bold green text inline within paragraph.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="badge"` | Optional |

#### 8. Attribute Example
```html
<span class="badge bg-success text-white">Passed</span>
```

#### 9. Real-World Example
* **Use Case:** Used for badge tags, colored status text, icon wrappers, price highlights, and inline JS hooks.
* **Code:**
```html
<p>Price: <span class="price-tag">$49.99</span></p>
```

#### 10. Important Notes
`<span>` is an INLINE element. It does not force newlines. Use `<div>` for block containers.

#### 11. Related Tags
Related to `<div>`, `<mark>`, `<strong>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Standard non-semantic inline element.

---


# SECTION I: INTERACTIVE ELEMENTS


### 9.1 `<details>`

#### 1. Tag Name
* **Tag Name:** `<details>`
* **Opening & Closing Form:** `<details>...</details>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<details>` tag creates an interactive disclosure widget that the user can open and close to reveal or hide additional information.

#### 3. Purpose / Function
Implements native HTML accordion dropdowns and collapsible FAQ panels without requiring JavaScript.

#### 4. Syntax
```html
<details open>
  <summary>Click to expand</summary>
  <p>Hidden content details...</p>
</details>
```

#### 5. Basic Example
```html
<details>
  <summary>View Assignment Guidelines</summary>
  <p>1. Must be submitted in PDF format.</p>
  <p>2. Maximum length 10 pages.</p>
</details>
```

#### 6. Output
Renders a clickable arrow toggle titled "View Assignment Guidelines". Clicking expands and reveals the hidden guidelines.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `open` | Specifies that details should be expanded/visible by default on load. | `open` | Optional |

#### 8. Attribute Example
```html
<details open class="faq-item">
```

#### 9. Real-World Example
* **Use Case:** Used in FAQ accordion lists, spoiler warnings, GitHub pull request details, and expandable sidebar menus.
* **Code:**
```html
<details>
  <summary>Question 1: What is HTML5?</summary>
  <p>HTML5 is the latest version of HyperText Markup Language.</p>
</details>
```

#### 10. Important Notes
Pair with `<summary>` as first child tag. Clicking summary toggles `open` attribute state automatically.

#### 11. Related Tags
Contains `<summary>`. Related to `<dialog>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Standard HTML5 interactive element.

---

### 9.2 `<summary>`

#### 1. Tag Name
* **Tag Name:** `<summary>`
* **Opening & Closing Form:** `<summary>...</summary>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<summary>` element specifies a visible heading or legend for a parent `<details>` disclosure box.

#### 3. Purpose / Function
Acts as the clickable header text for expanding/collapsing `<details>` widgets.

#### 4. Syntax
```html
<summary>Clickable Heading Text</summary>
```

#### 5. Basic Example
```html
<summary>Click here to view hints</summary>
```

#### 6. Output
Renders clickable heading text with small triangular expand arrow next to it.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="fw-bold"` | Optional |

#### 8. Attribute Example
```html
<summary class="font-weight-bold text-primary">Module 1 FAQ</summary>
```

#### 9. Real-World Example
* **Use Case:** Used as header title in accordions across documentation platforms (GitHub, MDN).
* **Code:**
```html
<details>
  <summary>Click for Solution Code</summary>
  <pre><code>cout &lt;&lt; "Solved!";</code></pre>
</details>
```

#### 10. Important Notes
Must be the VERY FIRST child element inside a `<details>` element.

#### 11. Related Tags
Parent element must be `<details>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Standard HTML5 element.

---

### 9.3 `<dialog>`

#### 1. Tag Name
* **Tag Name:** `<dialog>`
* **Opening & Closing Form:** `<dialog>...</dialog>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<dialog>` tag defines a native modal dialog window or popup box in an HTML document.

#### 3. Purpose / Function
Implements native popups, alert modals, confirmation dialogs, and popup submission forms.

#### 4. Syntax
```html
<dialog id="myModal" open>
  <p>Modal Dialog Window</p>
  <button onclick="myModal.close()">Close</button>
</dialog>
```

#### 5. Basic Example
```html
<dialog id="confirmDialog">
  <h3>Confirm Submission</h3>
  <p>Are you sure you want to submit?</p>
  <button onclick="document.getElementById('confirmDialog').close()">Cancel</button>
</dialog>
```

#### 6. Output
Renders modal overlay dialog window on page when activated via JS `.showModal()`.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `open` | Indicates modal is currently active and visible. | `open` | Optional |

#### 8. Attribute Example
```html
<dialog id="loginModal" class="p-4 rounded shadow-lg">
```

#### 9. Real-World Example
* **Use Case:** Used for web app login popups, cookie consent popups, and confirmation dialog boxes.
* **Code:**
```html
<dialog id="termsModal">
  <form method="dialog">
    <p>Agree to terms?</p>
    <button value="cancel">Cancel</button>
    <button value="default">Agree</button>
  </form>
</dialog>
```

#### 10. Important Notes
Use JavaScript `.showModal()` method to open as backdrop modal, and `.close()` method to dismiss.

#### 11. Related Tags
Related to `<details>`, `<form>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Standard HTML5 element.

---


# SECTION J: SCRIPTING AND EMBEDDED CONTENT


### 10.1 `<script>`

#### 1. Tag Name
* **Tag Name:** `<script>`
* **Opening & Closing Form:** `<script>...</script>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<script>` element is used to embed executable JavaScript code or reference external JavaScript files via the `src` attribute.

#### 3. Purpose / Function
Adds dynamic interactivity, DOM manipulation, form validation, and API fetch calls to web pages.

#### 4. Syntax
```html
<script src="app.js" async defer></script>
<!-- OR Inline Script -->
<script>
  // JS code
</script>
```

#### 5. Basic Example
```html
<script>
  function showGreeting() {
    alert("Welcome to HTML Web Tech Assignment!");
  }
</script>
```

#### 6. Output
Executes JavaScript logic in browser engine without displaying visual content text on body.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `src` | Path to external JavaScript file (.js). | `src="main.js"` | Required for external scripts |
| `async` | Downloads script asynchronously and executes immediately when loaded. | `async` | Optional |
| `defer` | Downloads script asynchronously and executes only AFTER HTML parsing finishes. | `defer` | Recommended |
| `type` | MIME type or module definition (`text/javascript`, `module`). | `type="module"` | Optional |
| `crossorigin` | Configures CORS requests for external scripts. | `crossorigin="anonymous"` | Optional |

#### 8. Attribute Example
```html
<script src="https://cdn.example.com/app.js" defer type="module"></script>
```

#### 9. Real-World Example
* **Use Case:** Used on every single web application to include frameworks (React, Vue, jQuery) and interactive code.
* **Code:**
```html
<script src="bootstrap.bundle.min.js" defer></script>
```

#### 10. Important Notes
Place external script links in `<head>` with the `defer` attribute to avoid blocking page rendering HTML parsing.

#### 11. Related Tags
Related to `<noscript>`, `<template>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** `language` attribute is obsolete.

---

### 10.2 `<noscript>`

#### 1. Tag Name
* **Tag Name:** `<noscript>`
* **Opening & Closing Form:** `<noscript>...</noscript>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<noscript>` element defines alternative content to be rendered for users who have disabled JavaScript in their browser or have a browser that doesn't support scripts.

#### 3. Purpose / Function
Provides fallback warning messages when JavaScript is required to view a web application.

#### 4. Syntax
```html
<noscript>
  <p>Warning: JavaScript is disabled in your browser.</p>
</noscript>
```

#### 5. Basic Example
```html
<noscript>
  <div style="color: red; padding: 10px;">
    JavaScript is turned off! Please enable JavaScript to submit this assignment.
  </div>
</noscript>
```

#### 6. Output
Renders warning banner ONLY if browser JavaScript execution is disabled.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="alert-box"` | Optional |

#### 8. Attribute Example
```html
<noscript class="bg-warning text-dark p-3">
```

#### 9. Real-World Example
* **Use Case:** Used in Single Page Applications (React, Angular, Next.js) to notify users if JS runtime is disabled.
* **Code:**
```html
<noscript>
  <h2>JavaScript Required</h2>
  <p>We're sorry but this app doesn't work properly without JavaScript enabled.</p>
</noscript>
```

#### 10. Important Notes
Content inside `<noscript>` is completely ignored by browser engine if JavaScript is enabled.

#### 11. Related Tags
Related to `<script>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Standard HTML5 fallback tag.

---

### 10.3 `<canvas>`

#### 1. Tag Name
* **Tag Name:** `<canvas>`
* **Opening & Closing Form:** `<canvas>...</canvas>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<canvas>` tag is used to draw graphics on the fly via JavaScript scripting (2D drawing context or 3D WebGL context).

#### 3. Purpose / Function
Renders dynamic interactive graphs, charts, 2D/3D browser games, image processing filters, and animations.

#### 4. Syntax
```html
<canvas id="myCanvas" width="400" height="200">Fallback text</canvas>
```

#### 5. Basic Example
```html
<canvas id="graphCanvas" width="500" height="300" style="border:1px solid #ccc;"></canvas>
<script>
  const ctx = document.getElementById("graphCanvas").getContext("2d");
  ctx.fillStyle = "blue";
  ctx.fillRect(10, 10, 150, 80);
</script>
```

#### 6. Output
Renders a 500x300 pixel graphics box containing a blue rectangle.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `width` | Specifies canvas coordinate grid width in pixels (default 300). | `width="800"` | Recommended |
| `height` | Specifies canvas coordinate grid height in pixels (default 150). | `height="600"` | Recommended |

#### 8. Attribute Example
```html
<canvas id="gameCanvas" width="800" height="600"></canvas>
```

#### 9. Real-World Example
* **Use Case:** Used in Chart.js data graphs, browser games (Phaser), Three.js 3D web graphics, and photo editors (Figma canvas).
* **Code:**
```html
<canvas id="signature-pad" width="400" height="200" class="border"></canvas>
```

#### 10. Important Notes
Must set `width` and `height` as direct attributes on `<canvas>`, NOT in CSS, to prevent coordinate resolution distortion.

#### 11. Related Tags
Related to `<script>`, `<img>`, `<svg>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Standard HTML5 graphics element.

---

### 10.4 `<template>`

#### 1. Tag Name
* **Tag Name:** `<template>`
* **Opening & Closing Form:** `<template>...</template>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<template>` tag is a mechanism for holding HTML content that is not rendered when the page loads, but can be instantiated later at runtime using JavaScript.

#### 3. Purpose / Function
Stores reusable HTML markup blueprints (e.g., dynamic table row templates, card templates) to clone via JS DOM scripts.

#### 4. Syntax
```html
<template id="my-tpl">
  <!-- HTML blueprint -->
</template>
```

#### 5. Basic Example
```html
<template id="row-template">
  <tr>
    <td class="usn"></td>
    <td class="name"></td>
  </tr>
</template>
```

#### 6. Output
Hidden on initial load. Content inside `<template>` is invisible until cloned and inserted into DOM via JavaScript.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes (`id`). | `id="card-tpl"` | Mandatory (`id` for JS reference) |

#### 8. Attribute Example
```html
<template id="comment-template">
```

#### 9. Real-World Example
* **Use Case:** Used in modern Web Components framework architectures, dynamic table generators, and SPA rendering.
* **Code:**
```html
<template id="item-template">
  <li class="todo-item"><span class="title"></span></li>
</template>
```

#### 10. Important Notes
Browser parses content inside `<template>` for syntax errors on load, but does not render images or run scripts inside it until instantiated.

#### 11. Related Tags
Related to `<slot>`, `<script>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Standard HTML5 Web Component tag.

---

### 10.5 `<slot>`

#### 1. Tag Name
* **Tag Name:** `<slot>`
* **Opening & Closing Form:** `<slot>...</slot>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<slot>` element — part of the Web Components technology suite — is a placeholder inside a Web Component shadow DOM that you can fill with your own markup.

#### 3. Purpose / Function
Enables component slot composition in custom Shadow DOM elements.

#### 4. Syntax
```html
<slot name="slot_name">Default fallback text</slot>
```

#### 5. Basic Example
```html
<template id="my-card">
  <h2><slot name="card-title">Default Title</slot></h2>
  <p><slot name="card-body">Default Body</slot></p>
</template>
```

#### 6. Output
Renders custom slotted content passed into Web Component instance.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `name` | Specifies slot identifier name for target insertion. | `name="header"` | Optional |

#### 8. Attribute Example
```html
<slot name="user-name">Guest User</slot>
```

#### 9. Real-World Example
* **Use Case:** Used in custom Web Component UI libraries (LitElement, Stencil, Shoelace).
* **Code:**
```html
<custom-element>
  <span slot="user-name">Aryansh</span>
</custom-element>
```

#### 10. Important Notes
Used specifically inside Web Components Shadow DOM structures.

#### 11. Related Tags
Related to `<template>`, `<script>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Standard HTML5 Web Component tag.

---


# SECTION K: TEXT EDITING AND RUBY ELEMENTS


### 11.1 `<time>`

#### 1. Tag Name
* **Tag Name:** `<time>`
* **Opening & Closing Form:** `<time>...</time>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<time>` element represents a specific period in time or a date.

#### 3. Purpose / Function
Provides machine-readable date/time annotations for search engines, calendar integrations, and localized date formatting.

#### 4. Syntax
```html
<time datetime="YYYY-MM-DDThh:mm:ss">Visible Date Text</time>
```

#### 5. Basic Example
```html
<p>Assignment due date: <time datetime="2026-08-31T23:59">August 31, 2026 at midnight</time></p>
```

#### 6. Output
Displays "August 31, 2026 at midnight" while providing ISO machine format `2026-08-31T23:59` to search engines.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `datetime` | Machine-readable date/time string in ISO 8601 format. | `datetime="2026-08-28"` | Mandatory for machine parsing |

#### 8. Attribute Example
```html
<time datetime="2026-08-28T20:50:00+05:30">August 28, 2026</time>
```

#### 9. Real-World Example
* **Use Case:** Used on news articles (published dates), event management sites, blog timestamps, and calendar invites.
* **Code:**
```html
<article>
  <p>Posted on <time datetime="2026-08-28">Today</time></p>
</article>
```

#### 10. Important Notes
Always provide standardized ISO format (`YYYY-MM-DD`) in `datetime` attribute.

#### 11. Related Tags
Related to `<data>`, `<mark>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Standard HTML5 semantic tag.

---

### 11.2 `<data>`

#### 1. Tag Name
* **Tag Name:** `<data>`
* **Opening & Closing Form:** `<data>...</data>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<data>` element links a given piece of content with a machine-readable translation value.

#### 3. Purpose / Function
Associates plain text values with machine-readable product SKUs, currency amounts, or numerical IDs.

#### 4. Syntax
```html
<data value="machine_val">Human visible text</data>
```

#### 5. Basic Example
```html
<p>Product: <data value="SKU-98745">Wireless Mouse</data> - Price: $25</p>
```

#### 6. Output
Renders "Wireless Mouse" to user while linking background machine SKU `SKU-98745`.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| `value` | Machine-readable data value string. | `value="10928"` | Required |

#### 8. Attribute Example
```html
<data value="978-0131103627">C Programming Language Book</data>
```

#### 9. Real-World Example
* **Use Case:** Used in eCommerce product catalogs, inventory management, and database record views.
* **Code:**
```html
<ul>
  <li><data value="PROD-01">Laptop</data></li>
</ul>
```

#### 10. Important Notes
Use `<time>` for dates/times and `<data>` for generic machine-readable strings/numbers.

#### 11. Related Tags
Related to `<time>`, `<meter>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Standard HTML5 element.

---

### 11.3 `<ruby>`

#### 1. Tag Name
* **Tag Name:** `<ruby>`
* **Opening & Closing Form:** `<ruby>...</ruby>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<ruby>` element represents small annotations renderable above or next to base text, used in East Asian typography (Furigana annotations).

#### 3. Purpose / Function
Provides pronunciation guides for East Asian characters (Japanese Kanji, Chinese Hanzi).

#### 4. Syntax
```html
<ruby> Base Text <rt> Annotation </rt> </ruby>
```

#### 5. Basic Example
```html
<ruby> 漢 <rt> かん </rt> 字 <rt> じ </rt> </ruby>
```

#### 6. Output
Displays Japanese Kanji characters with small phonetic Hiragana guide reading annotations above them.

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `lang="ja"` | Optional |

#### 8. Attribute Example
```html
<ruby lang="ja"> 明日 <rt> あした </rt> </ruby>
```

#### 9. Real-World Example
* **Use Case:** Used in Japanese and Chinese language learning websites and East Asian news portals.
* **Code:**
```html
<p><ruby> 東京 <rp>(</rp><rt>とうきょう</rt><rp>)</rp> </ruby></p>
```

#### 10. Important Notes
Contains `<rt>` (ruby text) and optional `<rp>` (ruby parenthesis fallback).

#### 11. Related Tags
Contains `<rt>` and `<rp>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Standard HTML5 international typography element.

---

### 11.4 `<rt>`

#### 1. Tag Name
* **Tag Name:** `<rt>`
* **Opening & Closing Form:** `<rt>...</rt>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<rt>` tag marks the ruby text component of a ruby annotation, providing pronunciation or translation subtext.

#### 3. Purpose / Function
Renders small phonetic sub-text above base character in `<ruby>`.

#### 4. Syntax
```html
<rt>Phonetic Reading</rt>
```

#### 5. Basic Example
```html
<ruby>字<rt>じ</rt></ruby>
```

#### 6. Output
Renders small text "じ" above "字".

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="furigana"` | Optional |

#### 8. Attribute Example
```html
<rt class="small-text">reading</rt>
```

#### 9. Real-World Example
* **Use Case:** Used inside `<ruby>` tags.
* **Code:**
```html
<ruby>本<rt>ほん</rt></ruby>
```

#### 10. Important Notes
Must be nested inside a `<ruby>` element.

#### 11. Related Tags
Parent is `<ruby>`. Sibling is `<rp>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Standard HTML5 element.

---

### 11.5 `<rp>`

#### 1. Tag Name
* **Tag Name:** `<rp>`
* **Opening & Closing Form:** `<rp>...</rp>`
* **Tag Type:** Paired / Container Tag

#### 2. Definition
The `<rp>` (Ruby Parentheses) tag provides fallback parentheses to surround ruby text for browsers that do not support `<ruby>` annotations.

#### 3. Purpose / Function
Provides fallback display `( reading )` on non-ruby legacy browsers.

#### 4. Syntax
```html
<rp>(</rp><rt>text</rt><rp>)</rp>
```

#### 5. Basic Example
```html
<ruby>漢<rp>(</rp><rt>かん</rt><rp>)</rp></ruby>
```

#### 6. Output
Modern browsers hide `<rp>` content. Legacy non-ruby browsers display fallback: 漢(かん).

#### 7. Attributes
| Attribute | Description | Example | Required/Optional |
| --- | --- | --- | --- |
| Global Attributes | Standard global attributes. | `class="fallback-parens"` | Optional |

#### 8. Attribute Example
```html
<rp>(</rp>
```

#### 9. Real-World Example
* **Use Case:** Used for backward-compatible East Asian site localization.
* **Code:**
```html
<ruby>日<rp>[</rp><rt>に</rt><rp>]</rp></ruby>
```

#### 10. Important Notes
Nested in `<ruby>` immediately before and after `<rt>`.

#### 11. Related Tags
Nested in `<ruby>`. Sibling to `<rt>`.

#### 12. Deprecated/Obsolete Status
**Standard HTML5 Tag.** Standard HTML5 element.

---


# SECTION L: DEPRECATED AND OBSOLETE TAGS

The following tags were used in older HTML versions (HTML 4.01 / XHTML) for presentation and styling, but are **OFFICIALLY OBSOLETE / DEPRECATED in HTML5**. Modern web developers MUST NOT use these tags; use CSS for styling instead.

### 12.1 `<font>`
* **Status:** **OBSOLETE / DEPRECATED**
* **Reason:** Violated separation of concerns by mixing presentation with HTML structure.
* **Obsolete Syntax:** `<font size="4" color="red" face="Arial">Text</font>`
* **Modern HTML5 + CSS Alternative:** Use CSS properties: `font-size`, `color`, and `font-family`.
```html
<!-- Modern Alternative -->
<span style="font-size: 18px; color: red; font-family: Arial, sans-serif;">Styled Text</span>
```

---

### 12.2 `<center>`
* **Status:** **OBSOLETE / DEPRECATED**
* **Reason:** Presentation-only tag used to center text and elements horizontally.
* **Obsolete Syntax:** `<center><p>Centered Content</p></center>`
* **Modern HTML5 + CSS Alternative:** Use CSS `text-align: center;` or Flexbox `justify-content: center;`.
```html
<!-- Modern Alternative -->
<div style="text-align: center;">Centered Content</div>
```

---

### 12.3 `<marquee>`
* **Status:** **OBSOLETE / DEPRECATED**
* **Reason:** Non-standard tag that created scrolling text animations. It harms web accessibility (WCAG) and causes usability distractions.
* **Obsolete Syntax:** `<marquee direction="left">Scrolling News Text</marquee>`
* **Modern HTML5 + CSS Alternative:** Use CSS3 `@keyframes` animations or JavaScript marquee libraries.
```html
<!-- Modern CSS Alternative -->
<div class="scrolling-container">
  <p class="animate-marquee">Modern Accessible Scrolling Text</p>
</div>
```

---

### 12.4 `<big>`
* **Status:** **OBSOLETE / DEPRECATED**
* **Reason:** Presentation tag that increased font size by one size relative to surrounding text.
* **Obsolete Syntax:** `<big>Larger Text</big>`
* **Modern HTML5 + CSS Alternative:** Use CSS `font-size: larger;` or `font-size: 1.25rem;`.
```html
<!-- Modern Alternative -->
<span style="font-size: 1.25em;">Larger Text</span>
```

---

### 12.5 `<strike>`
* **Status:** **OBSOLETE / DEPRECATED**
* **Reason:** Purely visual strikethrough tag without semantic meaning.
* **Obsolete Syntax:** `<strike>Strikethrough text</strike>`
* **Modern HTML5 + CSS Alternative:** Use `<del>` (for deleted content edits) or `<s>` (for non-accurate content), or CSS `text-decoration: line-through;`.
```html
<!-- Modern Alternative -->
<del>Deleted text revision</del>
```

---

### 12.6 `<tt>` (Teletype Text)
* **Status:** **OBSOLETE / DEPRECATED**
* **Reason:** Legacy tag used for rendering fixed-width teletype font.
* **Obsolete Syntax:** `<tt>Monospace text</tt>`
* **Modern HTML5 + CSS Alternative:** Use `<code>`, `<kbd>`, `<samp>`, or CSS `font-family: monospace;`.
```html
<!-- Modern Alternative -->
<code>Monospace Code Text</code>
```

---

### 12.7 `<frame>` and `<frameset>`
* **Status:** **OBSOLETE / DEPRECATED**
* **Reason:** Divided browser screen into multiple frame sub-windows. Broken bookmarks, print layouts, SEO indexing, and mobile accessibility completely.
* **Obsolete Syntax:** `<frameset cols="50%,50%"><frame src="page1.html"><frame src="page2.html"></frameset>`
* **Modern HTML5 + CSS Alternative:** Use standard responsive layout `<div>` containers styled with CSS Flexbox or CSS Grid, or embedded `<iframe>` tags.

---

# ADDITIONAL COMPREHENSIVE STUDY SECTIONS

---

## 1. HTML Global Attributes

Global attributes are attributes that can be used on **almost any HTML element**, regardless of its category or specific tag type.

### Global Attributes Reference Table

| Global Attribute | Purpose / Function | Example Usage |
| --- | --- | --- |
| `id` | Specifies a unique identifier for an element in the entire DOM tree. Used for CSS styling, JS DOM selection, and URL fragment anchor links. | `<div id="header-nav">` |
| `class` | Specifies one or more class names for an element. Used to group multiple elements for CSS styling and JS selection. | `<p class="lead text-primary">` |
| `style` | Allows applying inline CSS styling rules directly to an element. | `<h1 style="color: blue; margin-top: 10px;">` |
| `title` | Provides advisory tooltip information that appears when hovering over the element with a mouse. | `<abbr title="HyperText Markup Language">HTML</abbr>` |
| `lang` | Specifies the language code of the element's content. | `<p lang="fr">Bonjour le monde</p>` |
| `dir` | Specifies text directionality (`ltr` for Left-To-Right, `rtl` for Right-To-Left, `auto` for browser choice). | `<p dir="rtl">سلام</p>` |
| `hidden` | Boolean attribute that visually hides the element from display on the page. | `<div hidden>Hidden content</div>` |
| `tabindex` | Controls keyboard tab navigation order and focusability (`0` puts in normal tab order, `-1` focusable via JS only, `>0` explicit tab index order). | `<div tabindex="0" role="button">` |
| `contenteditable` | Boolean/enum attribute (`true`/`false`) specifying whether element content is editable by the user. | `<div contenteditable="true">Editable note</div>` |
| `draggable` | Specifies whether an element is draggable using Drag and Drop APIs (`true`, `false`, `auto`). | `<img draggable="true" src="logo.png">` |
| `spellcheck` | Specifies whether element text should be checked for spelling/grammar errors by browser engine (`true`/`false`). | `<textarea spellcheck="true">` |
| `translate` | Hints whether element content should be translated when page localization occurs (`yes`/`no`). | `<span translate="no">BrandName</span>` |
| `data-*` | Custom data attributes allowing developers to store custom data payload attributes on HTML elements. | `<button data-user-id="1092" data-role="admin">` |
| `role` | WAI-ARIA role attribute defining element semantic purpose for assistive technologies. | `<div role="navigation" aria-label="Main">` |
| `accesskey` | Specifies a keyboard shortcut key to activate or focus the element. | `<button accesskey="s">Save (Alt+S)</button>` |

---

## 2. Event Handler Attributes

Event handler attributes allow executing inline JavaScript functions directly when specific user interactions or system events occur on HTML elements.

### Common Event Handler Attributes Table

| Event Attribute | Trigger Condition / Description | Example Usage |
| --- | --- | --- |
| `onclick` | Fires when user clicks mouse primary button on element. | `<button onclick="alert('Clicked!')">Click</button>` |
| `ondblclick` | Fires when user double-clicks element. | `<div ondblclick="zoomImage()">Double Click</div>` |
| `onmouseover` | Fires when mouse cursor enters element boundary. | `<img onmouseover="highlight(this)" src="pic.jpg">` |
| `onmouseout` | Fires when mouse cursor leaves element boundary. | `<img onmouseout="unhighlight(this)" src="pic.jpg">` |
| `onkeydown` | Fires when user depresses a key on keyboard. | `<input onkeydown="trackKey(event)">` |
| `onkeyup` | Fires when user releases a key on keyboard. | `<input onkeyup="validateLength()">` |
| `onchange` | Fires when input element value is committed/changed (e.g. dropdown pick, checkbox toggle). | `<select onchange="updateBranch(this.value)">` |
| `oninput` | Fires instantly as user types or modifies value inside input/textarea. | `<input oninput="updateLivePreview(this.value)">` |
| `onsubmit` | Fires when a form submission request is initiated. | `<form onsubmit="return validateForm()">` |
| `onload` | Fires when element or document finishes loading completely. | `<body onload="initApp()">` |

### Why Modern Web Development Prefers JavaScript Event Listeners

While inline event attributes (`onclick=""`) are simple for small beginner examples, modern engineering standards strongly discourage inline event handlers in favor of JavaScript `addEventListener()` separation for 4 major reasons:

1. **Separation of Concerns (SoC):** HTML handles structural markup, CSS handles presentation, and JavaScript handles behavior. Mixing JavaScript into HTML tags creates messy, unmaintainable code.
2. **Security & Content Security Policy (CSP):** Inline event handlers violate strict CSP rules (`unsafe-inline`). Modern secure web applications block inline scripts to prevent Cross-Site Scripting (XSS) attacks.
3. **Multiple Event Binding:** Inline attributes allow only ONE handler string assignment per event type (`onclick="func1()"` overwrites previous inline scripts). `addEventListener()` allows attaching multiple independent listener functions to the same element.
4. **Dynamic DOM Lifecycle:** Elements created dynamically via JavaScript cannot easily bind inline attributes cleanly.

```html
<!-- DISCOURAGED (Inline Event Handler) -->
<button onclick="submitData()">Submit</button>

<!-- MODERN BEST PRACTICE (Event Listener in JavaScript File) -->
<button id="submitBtn">Submit</button>

<script>
  document.getElementById("submitBtn").addEventListener("click", function(event) {
    // Clean, secure, modular event handler logic
    console.log("Form Submitted Safely");
  });
</script>
```

---

## 3. Void / Empty HTML Elements

### Void Elements Reference Table

| Void Element | Purpose | Typical Syntax |
| --- | --- | --- |
| `<area>` | Defines clickable hot-spot area inside an image-map (`<map>`). | `<area shape="rect" coords="0,0,82,126" href="sun.html" alt="Sun">` |
| `<base>` | Sets base URL prefix and default target context for relative links. | `<base href="https://univ.edu/assets/">` |
| `<br>` | Inserts a single text line break (newline). | `<p>Line 1<br>Line 2</p>` |
| `<col>` | Sets column properties inside a `<colgroup>` table group. | `<col style="background-color: lightgrey;">` |
| `<embed>` | Container for external non-HTML plugin content (Flash/PDF). | `<embed type="application/pdf" src="doc.pdf" width="300" height="200">` |
| `<hr>` | Represents a thematic horizontal rule divider break. | `<hr>` |
| `<img>` | Embeds an image file resource. | `<img src="logo.png" alt="Logo" width="100" height="100">` |
| `<input>` | Interactive form input control. | `<input type="text" name="usn" placeholder="USN">` |
| `<link>` | Specifies resource relationship link (CSS, Favicon). | `<link rel="stylesheet" href="style.css">` |
| `<meta>` | Document metadata configuration. | `<meta charset="UTF-8">` |
| `<param>` | Defines parameters for legacy `<object>` plugin elements. | `<param name="autoplay" value="true">` |
| `<source>` | Media source alternative for `<picture>`, `<video>`, `<audio>`. | `<source src="video.mp4" type="video/mp4">` |
| `<track>` | Timed text track subtitle file for video/audio. | `<track kind="subtitles" src="sub.vtt" srclang="en">` |
| `<wbr>` | Word break opportunity for responsive long strings. | `<p>http://long<wbr>.url</p>` |

### What Makes a Void Element Different from a Normal Container Element?

1. **No Closing Tag Allowed:** Normal HTML elements are paired container elements (`<tag>Content</tag>`) that encapsulate text or child tags inside them. Void elements MUST NOT have a closing tag (`</input>` or `</img>` are invalid syntax error in HTML5).
2. **No Inner HTML Content:** Void elements cannot contain nested text or child elements. They are self-contained tags whose behavior is defined entirely through their HTML attributes (e.g. `src`, `type`, `href`, `value`).
3. **Self-Closing Slash Syntax:** In HTML5 syntax standard, trailing self-closing slashes (`<br />` or `<img />`) are completely optional and ignored by HTML5 parsers. `<br>` and `<br />` behave identically.

---

## 4. Block-Level vs Inline Elements

In HTML layout rendering, elements traditionally fall into two primary display categories: **Block-Level Elements** and **Inline Elements**.

### Detailed Comparison Table

| Aspect / Feature | Block-Level Elements | Inline Elements |
| --- | --- | --- |
| **Default Display** | `display: block;` | `display: inline;` |
| **Line Break Behavior** | Always starts on a **new line**; forces subsequent elements to start on a new line. | Fits **inline** within surrounding text; does NOT break line. |
| **Width Behavior** | Takes up **100% full width** of parent container by default. | Occupies ONLY as much width as its **content requires**. |
| **Margin & Padding** | Respects all 4 sides (Top, Bottom, Left, Right) of margins & padding. | Respects Left & Right margins/padding; ignores Top & Bottom vertical height margins. |
| **Height & Width CSS** | `width` and `height` CSS properties can be explicitly set. | `width` and `height` CSS properties have **no effect**. |
| **Child Nesting Rules** | Can contain inline elements and OTHER block-level elements. | Can contain ONLY other inline elements (cannot nest block elements inside). |
| **Key Tag Examples** | `<div>`, `<p>`, `<h1>-<h6>`, `<section>`, `<article>`, `<ul>`, `<ol>`, `<table>`, `<form>` | `<span>`, `<a>`, `<img>`, `<strong>`, `<em>`, `<code>`, `<label>`, `<input>`, `<mark>` |

---

## 5. Semantic vs Non-Semantic Elements

HTML5 introduced semantic tags to give meaningful context to web page elements, making web pages readable by both humans, search engines, and screen reader software.

### Comparison Breakdown

#### 1. `<div>` vs `<section>`
* **`<div>` (Non-Semantic):** A generic block wrapper container. Carries zero semantic meaning. Used purely as a visual hook for CSS styling or JavaScript DOM wrappers.
* **`<section>` (Semantic):** Represents a distinct thematic grouping of content, typically with its own heading. Signals to search engines that the enclosed content forms a logical chapter/topic of the document.

#### 2. `<span>` vs Semantic Inline Elements (`<time>`, `<mark>`, `<code>`)
* **`<span>` (Non-Semantic):** A generic inline text container. Carries no semantic meaning. Used for applying inline CSS text styling (color, font).
* **Semantic Inline Elements:** Express specific meaning—`<time>` signals machine dates, `<mark>` signals search highlight relevance, and `<code>` signals computer program code.

#### 3. `<b>` vs `<strong>`
* **`<b>` (Stylistic Bold):** Formats text in bold font weight purely for visual aesthetic offset without implying any extra importance or urgency.
* **`<strong>` (Semantic Importance):** Formats text in bold font AND signals to screen readers and search engines that the enclosed text has **strong urgency or critical importance**.

#### 4. `<i>` vs `<em>`
* **`<i>` (Alternate Voice):** Formats text in italics for foreign words, technical terms, or idiomatic phrases without stress emphasis.
* **`<em>` (Stress Emphasis):** Formats text in italics AND instructs screen readers to pronounce the word with elevated verbal stress emphasis, altering sentence meaning.

---

## 6. Commonly Used HTML Tags — Quick Reference Table

| Tag Name | Primary Function / Purpose | Key HTML Attributes |
| --- | --- | --- |
| `<html>` | Document root element container. | `lang` |
| `<head>` | Document metadata container. | Global attributes |
| `<title>` | Browser tab title label. | Global attributes |
| `<body>` | Main renderable document content. | Global attributes |
| `<meta>` | Character encoding, viewport, SEO settings. | `charset`, `name`, `content`, `http-equiv` |
| `<link>` | Attach CSS stylesheets / fonts | `rel`, `href`, `type`, `media` |
| `<h1>-<h6>` | Document headings (Level 1 to Level 6). | `id`, `class` |
| `<p>` | Text paragraph block. | Global attributes |
| `<a>` | Hyperlink anchor element. | `href`, `target`, `rel`, `download` |
| `<img>` | Image embedding tag. | `src`, `alt`, `width`, `height`, `loading` |
| `<ul>` | Unordered bulleted list. | Global attributes |
| `<ol>` | Sequenced numbered list. | `type`, `start`, `reversed` |
| `<li>` | List item entry inside lists. | `value` (in ol) |
| `<table>` | Matrix data grid table. | `border` |
| `<tr>` | Table row container. | Global attributes |
| `<th>` | Table header cell (bold, centered). | `scope`, `colspan`, `rowspan` |
| `<td>` | Table data cell. | `colspan`, `rowspan` |
| `<form>` | User input form container. | `action`, `method`, `enctype`, `autocomplete` |
| `<input>` | Interactive form input control. | `type`, `name`, `value`, `placeholder`, `required` |
| `<label>` | Accessible caption for input fields. | `for` |
| `<button>` | Clickable button control. | `type`, `disabled` |
| `<textarea>` | Multi-line text input field. | `name`, `rows`, `cols`, `placeholder` |
| `<select>` | Dropdown select menu container. | `name`, `multiple`, `required` |
| `<option>` | Dropdown selection item choice. | `value`, `selected`, `disabled` |
| `<header>` | Semantic top header section. | Global attributes |
| `<footer>` | Semantic bottom footer section. | Global attributes |
| `<main>` | Unique primary page content landmark. | Global attributes |
| `<section>` | Thematic document chapter section. | `id` |
| `<article>` | Standalone reusable article post. | Global attributes |
| `<aside>` | Sidebar or auxiliary callout content. | Global attributes |
| `<div>` | Generic non-semantic block container. | `id`, `class`, `style` |
| `<span>` | Generic non-semantic inline container. | `class`, `style` |
| `<details>` | Interactive accordion disclosure box. | `open` |
| `<summary>` | Heading label for `<details>`. | Global attributes |
| `<script>` | JavaScript code embedding tag. | `src`, `async`, `defer`, `type` |

---

## 7. Complete HTML5 Webpage Example

Below is a complete, fully functional HTML5 webpage demonstrating standard document structure, semantic layout tags, headings, text formatting, media elements, tables, forms, and interactive widgets.

```html
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Metadata Configuration -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Complete College Web Technology Portal Demonstration">
  <meta name="author" content="Aryansh Sharma">
  <title>VTU CSE Department Portal | Web Tech Lab Assignment</title>
  
  <!-- Internal CSS Styling -->
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8fafc;
      color: #1e293b;
      line-height: 1.6;
    }
    header {
      background-color: #0f172a;
      color: white;
      padding: 1.5rem;
      text-align: center;
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
    nav a:hover {
      text-decoration: underline;
    }
    .container {
      max-width: 1100px;
      margin: 20px auto;
      padding: 0 20px;
      display: flex;
      gap: 20px;
    }
    main {
      flex: 3;
      background: white;
      padding: 25px;
      border-radius: 8px;
      box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }
    aside {
      flex: 1;
      background: #f1f5f9;
      padding: 20px;
      border-radius: 8px;
      height: fit-content;
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
      background-color: #e2e8f0;
    }
    fieldset {
      border: 1px solid #cbd5e1;
      border-radius: 6px;
      padding: 15px;
      margin-bottom: 15px;
    }
    legend {
      font-weight: bold;
      color: #0f172a;
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

  <!-- Primary Navigation -->
  <nav aria-label="Main Menu">
    <a href="#about">About Course</a>
    <a href="#syllabus">Syllabus</a>
    <a href="#registration">Registration</a>
    <a href="#faq">FAQ</a>
  </nav>

  <!-- Main Layout Container -->
  <div class="container">
    
    <!-- Primary Content Area -->
    <main>
      
      <!-- About Section -->
      <section id="about">
        <article>
          <h2>Course Overview: Web Technologies (18CS52)</h2>
          <p>This course introduces engineering students to fundamental web technologies including <abbr title="HyperText Markup Language">HTML5</abbr>, <abbr title="Cascading Style Sheets">CSS3</abbr>, JavaScript, and server-side computing.</p>
          <p>Key highlights include building <strong>semantic accessible web structures</strong>, responsive user interfaces, and interactive web applications.</p>
        </article>
      </section>

      <hr>

      <!-- Syllabus Table Section -->
      <section id="syllabus">
        <h3>Semester 3 Examination Timetable</h3>
        <table>
          <caption>Table 1: CSE Exam Schedule - 2026</caption>
          <thead>
            <tr>
              <th scope="col">Subject Code</th>
              <th scope="col">Subject Title</th>
              <th scope="col">Exam Date</th>
              <th scope="col">Session</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>18CS51</td>
              <td>Management and Entrepreneurship</td>
              <td><time datetime="2026-09-01">01 Sept 2026</time></td>
              <td>Morning</td>
            </tr>
            <tr>
              <td>18CS52</td>
              <td>Web Technology & Its Applications</td>
              <td><time datetime="2026-09-04">04 Sept 2026</time></td>
              <td>Morning</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="4">Note: Hall tickets must be verified prior to entry.</td>
            </tr>
          </tfoot>
        </table>
      </section>

      <hr>

      <!-- Interactive Registration Form Section -->
      <section id="registration">
        <h3>Student Lab Assignment Submission Form</h3>
        <form action="/submit-lab" method="POST" enctype="multipart/form-data">
          
          <fieldset>
            <legend>Student Information</legend>
            
            <p>
              <label for="usn">USN Number:</label><br>
              <input type="text" id="usn" name="usn_number" placeholder="e.g. 1VU22CS001" required pattern="1[A-Z]{2}[0-9]{2}[A-Z]{2}[0-9]{3}">
            </p>
            
            <p>
              <label for="email">College Email:</label><br>
              <input type="email" id="email" name="student_email" placeholder="student@college.edu" required>
            </p>

            <p>
              <label for="branch">Engineering Branch:</label><br>
              <select id="branch" name="branch" required>
                <option value="" disabled selected>-- Choose Branch --</option>
                <option value="cse">Computer Science (CSE)</option>
                <option value="ise">Information Science (ISE)</option>
                <option value="ece">Electronics (ECE)</option>
              </select>
            </p>
          </fieldset>

          <fieldset>
            <legend>Assignment File Upload</legend>
            <p>
              <label for="assignment">Upload Code File (.zip, .pdf):</label><br>
              <input type="file" id="assignment" name="assignment_file" accept=".zip,.pdf" required>
            </p>
            <p>
              <label for="comments">Student Remarks:</label><br>
              <textarea id="comments" name="remarks" rows="3" placeholder="Enter comments here..."></textarea>
            </p>
          </fieldset>

          <button type="submit">Submit Assignment</button>
          <button type="reset">Reset Form</button>
        </form>
      </section>

      <hr>

      <!-- Interactive Details Widget -->
      <section id="faq">
        <h3>Frequently Asked Questions</h3>
        <details>
          <summary>What is the submission deadline?</summary>
          <p>All HTML assignments must be submitted before <time datetime="2026-08-31T23:59">August 31, 2026, 11:59 PM</time>.</p>
        </details>
        <details>
          <summary>Can I resubmit my assignment?</summary>
          <p>Yes, multiple submissions are permitted prior to the final cutoff date.</p>
        </details>
      </section>

    </main>

    <!-- Sidebar Auxiliary Area -->
    <aside>
      <h3>Important Announcements</h3>
      <ul>
        <li><mark>New</mark>: Web Tech Lab Viva starts next week.</li>
        <li>Download official <a href="#syllabus" download>Syllabus Copy (PDF)</a>.</li>
      </ul>
      
      <hr>
      
      <h3>Lab Location</h3>
      <address>
        Computing Lab 3, CSE Block<br>
        VTU Campus, Belagavi<br>
        Karnataka - 590018
      </address>
    </aside>

  </div>

  <!-- Document Footer -->
  <footer>
    <p>&copy; 2026 Visvesvaraya Technological University. All Rights Reserved.</p>
    <p><small>Designed for Computer Science Engineering Web Development Curriculum.</small></p>
  </footer>

  <!-- External JavaScript -->
  <script>
    console.log("VTU Portal Loaded Successfully.");
  </script>
</body>
</html>
```

### Code Walkthrough Section-by-Section

1. **Document Header & Metadata (`<!DOCTYPE html>`, `<html>`, `<head>`, `<meta>`, `<title>`):** Sets HTML5 standard parsing, defines UTF-8 character encoding, responsive viewport sizing for mobile devices, page title bar text, and embedded CSS rules.
2. **Structural Header & Navigation (`<header>`, `<nav>`, `<a>`):** Encapsulates top site branding and provides accessible navigation hyperlinking to internal page sections (`#about`, `#syllabus`, `#registration`).
3. **Main & Sidebar Container (`<div class="container">`, `<main>`, `<aside>`):** Creates a responsive 2-column flexbox layout separating primary content (`<main>`) from secondary news/announcements (`<aside>`).
4. **Article & Sectioning (`<section>`, `<article>`, `<h2>`, `<p>`, `<abbr>`):** Organizes course overview content into semantic sections, using `<abbr>` for acronym tooltips (HTML5, CSS3).
5. **Tabular Schedule Data (`<table>`, `<caption>`, `<thead>`, `<tbody>`, `<tfoot>`, `<th>`, `<td>`, `<time>`):** Presents exam schedule with proper column header scopes (`scope="col"`), table caption, footer notes, and ISO date markup (`<time>`).
6. **Form Processing (`<form>`, `<fieldset>`, `<legend>`, `<label>`, `<input>`, `<select>`, `<textarea>`, `<button>`):** Implements student registration form with input pattern validation, file upload support (`enctype="multipart/form-data"`), dropdown choices, multi-line comment textareas, and submit buttons.
7. **Interactive Elements (`<details>`, `<summary>`):** Implements accordion FAQ dropdowns that expand/collapse natively without requiring JavaScript code.
8. **Sidebar Contact Information (`<aside>`, `<address>`, `<mark>`, `<small>`):** Uses `<address>` for physical contact details, `<mark>` for highlighted announcement badges, and `<small>` for footer legal fine print.

---

## 8. HTML Tag Cheat Sheet

**Tag → Purpose → Key Attribute(s)**

* **`<html>`** → Root document container → `lang`
* **`<head>`** → Document metadata wrapper → Global attributes
* **`<title>`** → Browser tab title text → Global attributes
* **`<body>`** → Visible document content canvas → Global attributes
* **`<meta>`** → Viewport, charset, SEO metadata → `charset`, `name`, `content`
* **`<link>`** → Attach CSS stylesheets / fonts → `rel`, `href`, `type`
* **`<style>`** → Embedded internal CSS block → `media`
* **`<h1>–<h6>`** → Heading hierarchy → `id`, `class`
* **`<p>`** → Paragraph text block → Global attributes
* **`<br>`** → Line break (newline) → None (Void element)
* **`<hr>`** → Horizontal thematic rule divider → None (Void element)
* **`<pre>`** → Preformatted monospace text → Global attributes
* **`<blockquote>`** → Extended indented block quote → `cite`
* **`<q>`** → Short inline quotation → `cite`
* **`<abbr>`** → Abbreviation or acronym tooltip → `title`
* **`<code>`** → Inline program code fragment → Global attributes
* **`<kbd>`** → Keyboard key entry display → Global attributes
* **`<samp>`** → Sample program output message → Global attributes
* **`<var>`** → Mathematical/programming variable → Global attributes
* **`<strong>`** → Strong importance (bold) → Global attributes
* **`<em>`** → Stress vocal emphasis (italics) → Global attributes
* **`<mark>`** → Text highlighter marker → Global attributes
* **`<small>`** → Legal fine print sub-text → Global attributes
* **`<sub>`** → Subscript text (H₂O) → Global attributes
* **`<sup>`** → Superscript text (x²) → Global attributes
* **`<del>`** → Deleted text (strikethrough) → `cite`, `datetime`
* **`<ins>`** → Inserted text (underline) → `cite`, `datetime`
* **`<a>`** → Hyperlink anchor → `href`, `target`, `rel`, `download`
* **`<nav>`** → Navigation link block → `aria-label`
* **`<img>`** → Image embed tag → `src`, `alt`, `width`, `height`, `loading`
* **`<picture>`** → Responsive image container → Global attributes
* **`<source>`** → Media source format choice → `srcset`, `src`, `type`, `media`
* **`<figure>`** → Image/diagram wrapper block → Global attributes
* **`<figcaption>`** → Figure title caption → Global attributes
* **`<audio>`** → Embedded audio player → `src`, `controls`, `autoplay`, `loop`
* **`<video>`** → Embedded video player → `src`, `controls`, `poster`, `width`, `height`
* **`<track>`** → Subtitles / CC track file → `kind`, `src`, `srclang`, `label`
* **`<iframe>`** → Embedded inline webpage window → `src`, `width`, `height`, `title`, `sandbox`
* **`<ul>`** → Unordered bulleted list → Global attributes
* **`<ol>`** → Ordered numbered list → `type`, `start`, `reversed`
* **`<li>`** → List item entry → `value` (in `<ol>`)
* **`<dl>`** → Description list wrapper → Global attributes
* **`<dt>`** → Description list term/key → Global attributes
* **`<dd>`** → Description list value/definition → Global attributes
* **`<table>`** → Matrix data grid table → `border`
* **`<caption>`** → Table title caption → Global attributes
* **`<thead>`** → Table header row group → Global attributes
* **`<tbody>`** → Table body data row group → Global attributes
* **`<tfoot>`** → Table summary footer row group → Global attributes
* **`<tr>`** → Table row container → Global attributes
* **`<th>`** → Table header cell (bold) → `scope`, `colspan`, `rowspan`
* **`<td>`** → Table data cell → `colspan`, `rowspan`
* **`<form>`** → Interactive form container → `action`, `method`, `enctype`, `autocomplete`
* **`<input>`** → Interactive input control → `type`, `name`, `value`, `placeholder`, `required`
* **`<label>`** → Accessible input text label → `for`
* **`<button>`** → Clickable button element → `type`, `disabled`
* **`<textarea>`** → Multi-line prose text box → `name`, `rows`, `cols`, `placeholder`
* **`<select>`** → Dropdown selection menu → `name`, `multiple`, `required`
* **`<option>`** → Dropdown option choice → `value`, `selected`, `disabled`
* **`<optgroup>`** → Dropdown category group → `label`, `disabled`
* **`<fieldset>`** → Form group bordered box → `disabled`
* **`<legend>`** → Fieldset title caption → Global attributes
* **`<datalist>`** → Auto-suggest list for inputs → Global attributes (`id`)
* **`<output>`** → Calculated result display → `for`, `name`
* **`<progress>`** → Task progress bar gauge → `value`, `max`
* **`<meter>`** → Scalar range measurement gauge → `value`, `min`, `max`, `low`, `high`, `optimum`
* **`<header>`** → Page/Section top header → Global attributes
* **`<footer>`** → Page/Section bottom footer → Global attributes
* **`<main>`** → Primary page content landmark → Global attributes
* **`<section>`** → Thematic chapter section → `id`
* **`<article>`** → Reusable independent article → Global attributes
* **`<aside>`** → Sidebar callout container → Global attributes
* **`<div>`** → Generic block wrapper container → `id`, `class`, `style`
* **`<span>`** → Generic inline text wrapper container → `class`, `style`
* **`<details>`** → Accordion disclosure widget → `open`
* **`<summary>`** → Accordion header label → Global attributes
* **`<dialog>`** → Native modal window popup → `open`
* **`<script>`** → JavaScript execution block → `src`, `async`, `defer`, `type`
* **`<noscript>`** → Fallback when JS disabled → Global attributes
* **`<canvas>`** → Dynamic 2D/3D graphics canvas → `width`, `height`
* **`<template>`** → Hidden reusable HTML template → Global attributes (`id`)
* **`<slot>`** → Web Component shadow DOM slot → `name`
* **`<time>`** → Machine date/time tag → `datetime`
* **`<data>`** → Machine translation value tag → `value`
* **`<ruby>`** → East Asian furigana wrapper → Global attributes
* **`<rt>`** → East Asian phonetic guide text → Global attributes
* **`<rp>`** → Non-ruby fallback parenthesis → Global attributes

---

