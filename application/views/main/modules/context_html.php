<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background-color: #e7ebf8;
}

.container {
    display: flex;
    flex-direction: column;
    height: 100vh;
}

.header {
    background-color: #7091E6;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
}

.logo img {
    height: 40px;
    vertical-align: middle;
}

.logo span {
    color: white;
    font-size: 20px;
    margin-left: 10px;
}

.search-bar input {
    padding: 8px;
    border-radius: 5px;
    border: none;
    width: 300px;
}

.profile-icon img {
    height: 40px;
    border-radius: 50%;
}

.main-content {
    display: flex;
    flex: 1;
}

.sidebar {
    width: 250px;
    background-color: #f5f5f5;
    padding: 20px;
    border-right: 2px solid #ccc;
    height: 100vh; /* Full viewport height */
    overflow-y: auto; /* Enable scrolling */
}

/* Hide scrollbar for WebKit browsers (Chrome, Safari) */
.sidebar::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for Firefox */
.sidebar {
    scrollbar-width: none; /* Firefox */
}

/* Collapsible button styling */
.collapsible {
    background-color: #7091E6;
    color: white;
    cursor: pointer;
    padding: 10px;
    border: none;
    text-align: left;
    outline: none;
    font-size: 16px;
    width: 100%;
    border-radius: 5px;
    margin-bottom: 10px;
    position: relative;
    transition: background-color 0.3s;
}

.collapsible::after {
    content: '\25BC'; /* Unicode for down arrow */
    font-size: 14px;
    position: absolute;
    right: 10px;
    transition: transform 0.3s;
}

.collapsible.active::after {
    transform: rotate(180deg); /* Rotates arrow to point up */
}

.collapsible:hover {
    background-color: #5f7cc6;
}

/* Module content styling */
.module-content {
    display: none; /* Hidden by default */
    overflow: hidden;
    padding-left: 10px;
    margin-top: 10px;
}

.module-content ul {
    list-style: none;
}

.module-content ul li a {
    display: block;
    padding: 8px;
    background-color: #7091E6;
    color: white;
    border-radius: 5px;
    margin-bottom: 5px;
    text-decoration: none;
    transition: background-color 0.3s;
}

.module-content ul li a:hover {
    background-color: #5f7cc6;
}

.content {
    flex: 1;
    padding: 40px;
    background-color: white;
    border-radius: 10px;
    margin: 20px;
    height: 100vh;
    overflow-y: auto; /* Enable vertical scroll */
}

.content h1 {
    margin-bottom: 20px;
    font-size: 35px;
}

.content p {
    margin-bottom: 15px;
    font-size: 25px;
}

.content ul {
    list-style-type: disc;
    padding-left: 25px;
}

.content ul li {
    margin-bottom: 10px;
}
pre {
    padding: 20px;
    margin-left: 0;
    background-color: #f4f4f4;
    border: 1px solid #ddd;
    font-family: monospace;
    white-space: pre-wrap; /* Allows wrapping */
    word-wrap: break-word; /* Prevents long lines from overflowing */

}
code {
    background-color: #e8e8e8;
    padding: 2px 4px;
    border-radius: 4px;
}
caption {
            font-weight: bold;
            margin: 10px 0;
        }
        thead {
            background-color: #e6e6e6;
        }
        tfoot {
            background-color: #f9f9f9;
        }
        .highlight {
            background-color: yellow;
        }

</style>
      <!-- Main Content Section -->
        <div class="main-content">
            <!-- Left Sidebar -->
            <aside class="sidebar">
                <button class="back-btn">&larr;</button>
                <div class="module">
                    <button class="collapsible" data-module='module1'>Module 1: Getting started with HTML</button>
                    <div class="module-content">
                        <ul>
                            <li><a href="#" data-target='content-Hello-World'>Hello World</a></li>
                            <li><a href="#" data-target='content-Doctypes'>Doctypes</a></li>
                            <li><a href="#" data-target='content-Headings'>Headings</a></li>
                            <li><a href="#" data-target='content-Paragraphs'>Paragraphs</a></li>
                            <li><a href="#" data-target='content-Text Formatting'>Text Formatting</a></li>
                            <li><a href="#" data-target='content-module1-quiz'>Module 1 Quiz</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="module">
                    <button class="collapsible" data-module='module2'>Module 2: Anchors and Hyperlinks</button>
                    <div class="module-content">
                        <ul>
                            <li><a href="#" data-target='content-Anchors-and-Hyperlinks'> Anchors and Hyperlinks</a></li>
                            <li><a href="#" data-target='content-Lists'>Lists</a></li>
                            <li><a href="#" data-target='content-Tables'>Tables</a></li>
                            <li><a href="#" data-target='content-Comments'>Comments</a></li>
                            <li><a href="#" data-target='content-module2-quiz'>Module 2 Quiz</a></li>
                        </ul>
                    </div>
                </div>
                <div class="module">
                    <button class="collapsible" data-module='module3'>Module 3: Classes and IDs</button>
                    <div class="module-content">
                        <ul>
                            <li><a href="#" data-target='content-Classes-and-IDs'>Classes and IDs</a></li>
                            <li><a href="#" data-target='content-Data Attributes'>Data Attributes</a></li>
                            <li><a href="#" data-target='content-Linking Resources'>Linking Resources</a></li>
                            <li><a href="#" data-target='content-Include JavaScript Code in HTML'>Include JavaScript Code in HTML</a></li>
                            <li><a href="#" data-target='content-module3-quiz'>Module 3 Quiz</a></li>
                        </ul>
                    </div>
                </div>
                </aside>
                
        
            <!-- Content Section -->
            <section id="content1" class="content" style="display: none;">
            <h1>Getting Started with HTML</h1>
<table>
    <tr>
        <th>Version</th>
        <th>Specification</th>
        <th>Release Date</th>
    </tr>
    <tr>
        <td>1.0</td>
        <td>N/A</td>
        <td>1994-01-01</td>
    </tr>
    <tr>
        <td>2.0</td>
        <td>RFC 1866</td>
        <td>1995-11-24</td>
    </tr>
    <tr>
        <td>3.2</td>
        <td>W3C: HTML 3.2 Specification</td>
        <td>1997-01-14</td>
    </tr>
    <tr>
        <td>4.0</td>
        <td>W3C: HTML 4.0 Specification</td>
        <td>1998-04-24</td>
    </tr>
    <tr>
        <td>4.01</td>
        <td>W3C: HTML 4.01 Specification</td>
        <td>1999-12-24</td>
    </tr>
    <tr>
        <td>5</td>
        <td>WHATWG: HTML Living Standard</td>
        <td>2014-10-28</td>
    </tr>
    <tr>
        <td>5.1</td>
        <td>W3C: HTML 5.1 Specification</td>
        <td>2016-11-01</td>
    </tr>
</table>
           
</section>
            <section id="content-Hello-World" class="content" style="display: none;">
            <h1>Hello World</h1>
<h2>Introduction</h2>
<p>HTML (Hypertext Markup Language) uses a markup system composed of elements which represent specific content. Markup means that with HTML you declare what is presented to a viewer, not how it is presented. Visual representations are defined by Cascading Style Sheets (CSS) and realized by browsers. Still existing elements that allow for such, like e.g. <code>font</code>, "are entirely obsolete, and must not be used by authors".</p>
<p>HTML is sometimes called a programming language but it has no logic, so is a markup language. HTML tags provide semantic meaning and machine-readability to the content in the page.</p>
<p>An element usually consists of an opening tag (<code>&lt;element_name&gt;</code>), a closing tag (<code>&lt;/element_name&gt;</code>), which contain the content in between.</p>
<p>There are some HTML elements that don't have a closing tag or any contents. These are called void elements. Void elements include <code>&lt;meta&gt;</code>, <code>&lt;link&gt;</code>, and <code>&lt;input&gt;</code>.</p>
<p>Element names can be thought of as descriptive keywords for the content they contain, such as <code>table</code>, <code>footer</code>, <code>video</code>, <code>audio</code>.</p>
<p>A HTML page may consist of potentially hundreds of elements which are then read by a web browser, interpreted and rendered into human-readable or audible content on the screen.</p>
<p>For this document it is important to note the difference between elements and tags:</p>
<ul>
    <li><strong>Elements:</strong> video, footer, audio, table</li>
    <li><strong>Tags:</strong> <code>&lt;video&gt;</code>, <code>&lt;audio&gt;</code>, <code>&lt;table&gt;</code>, <code>&lt;footer&gt;</code>, <code>&lt;/html&gt;</code>, <code>&lt;/body&gt;</code></li>
</ul>

<h2>Element Insight</h2>
<p>Let's break down a tag...</p>
<p>The <code>&lt;p&gt;</code> tag represents a common paragraph. Elements commonly have an opening tag and a closing tag. The opening tag contains the element's name in angle brackets (<code>&lt;p&gt;</code>). The closing tag is identical to the opening tag with the addition of a forward slash (/) between the opening bracket and the element's name (<code>&lt;/p&gt;</code>).</p>
<p>Content can then go between these two tags:</p>
<pre><code>&lt;p&gt;This is a simple paragraph.&lt;/p&gt;</code></pre>

<h2>Creating a Simple Page</h2>
<p>The following HTML example creates a simple "Hello World" web page. HTML files can be created using any text editor. The files must be saved with a <code>.html</code> or <code>.htm</code> extension in order to be recognized as HTML files. Once created, this file can be opened in any web browser.</p>
<pre><code>&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Hello!&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Hello World!&lt;/h1&gt;
    &lt;p&gt;This is a simple paragraph.&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>

<h2>Simple Page Breakdown</h2>
<p>These are the tags used in the example:</p>
<table>
    <tr>
        <th>Tag</th>
        <th>Meaning</th>
    </tr>
    <tr>
        <td><code>&lt;!DOCTYPE&gt;</code></td>
        <td>Defines the HTML version used in the document. In this case it is HTML5.</td>
    </tr>
    <tr>
        <td><code>&lt;html&gt;</code></td>
        <td>Opens the page. No markup should come after the closing tag (<code>&lt;/html&gt;</code>).</td>
    </tr>
    <tr>
        <td><code>&lt;head&gt;</code></td>
        <td>Opens the head section, which contains metadata about the HTML document.</td>
    </tr>
    <tr>
        <td><code>&lt;meta&gt;</code></td>
        <td>Gives the browser some metadata about the document. The <code>charset</code> attribute declares the character encoding.</td>
    </tr>
    <tr>
        <td><code>&lt;title&gt;</code></td>
        <td>The title of the page. This text is displayed on the browser tab.</td>
    </tr>
    <tr>
        <td><code>&lt;body&gt;</code></td>
        <td>Opens the part of the document displayed to users.</td>
    </tr>
    <tr>
        <td><code>&lt;h1&gt;</code></td>
        <td>A level 1 heading for the page.</td>
    </tr>
    <tr>
        <td><code>&lt;p&gt;</code></td>
        <td>Represents a common paragraph of text.</td>
    </tr>
</table>
            
</section>
                
            <section id="content-Doctypes" class="content" style="display: none;">
            <h1>Doctypes</h1>
<p>Doctypes - short for 'document type' - help browsers to understand the version of HTML the document is written in for better interpretability. Doctype declarations are not HTML tags and belong at the very top of a document. This topic explains the structure and declaration of various doctypes in HTML.</p>

<h2>Adding the Doctype</h2>
<p>The <code>&lt;!DOCTYPE&gt;</code> declaration should always be included at the top of the HTML document, before the <code>&lt;html&gt;</code> element.</p>
<h3>HTML 5 Doctype</h3>
<p>HTML5 is not based on SGML (Standard Generalized Markup Language), and therefore does not require a reference to a DTD (Document Type Definition).</p>
<pre><code>&lt;!DOCTYPE html&gt;</code></pre>

<h3>Case Insensitivity</h3>
<p>Per the W3.org HTML 5 DOCTYPE Spec:</p>
<ul>
    <li>A DOCTYPE must consist of a string that is an ASCII case-insensitive match for the string <code>html</code>, therefore the following <code>DOCTYPEs</code> are also valid:</li>
    <ul>
        <li><code>&lt;doctype html&gt;</code></li>
        <li><code>&lt;dOCtyPe html&gt;</code></li>
        <li><code>&lt;DocTYpe html&gt;</code></li>
    </ul>
</ul>

            </section>
            <section id="content-Headings" class="content" style="display: none;">
            <h2>Headings</h2>
<p>HTML provides not only plain paragraph tags, but six separate header tags to indicate headings of various sizes and thicknesses. Enumerated as heading 1 through heading 6, heading 1 has the largest and thickest text while heading 6 is the smallest and thinnest, down to the paragraph level.</p>

<h3>Using Headings</h3>
<p>Headings can be used to describe the topic they precede and they are defined with the <code>&lt;h1&gt;</code> to <code>&lt;h6&gt;</code> tags:</p>
<pre><code>&lt;h1&gt;Heading 1&lt;/h1&gt;
&lt;h2&gt;Heading 2&lt;/h2&gt;
&lt;h3&gt;Heading 3&lt;/h3&gt;
&lt;h4&gt;Heading 4&lt;/h4&gt;
&lt;h5&gt;Heading 5&lt;/h5&gt;
&lt;h6&gt;Heading 6&lt;/h6&gt;</code></pre>

<p>Correct structure matters. Search engines and other user agents usually index page content based on heading elements, for example to create a table of contents, so using the correct structure for headings is important.</p>
<p>In general, an article should have one <code>&lt;h1&gt;</code> element for the main title followed by <code>&lt;h2&gt;</code> subtitles – going down a layer if necessary. If there are <code>&lt;h1&gt;</code> elements on a higher level they shouldn't be used to describe any lower-level content.</p>
<pre><code>&lt;h1&gt;Main title&lt;/h1&gt;
&lt;p&gt;Introduction&lt;/p&gt;
&lt;h2&gt;Reasons&lt;/h2&gt;
&lt;h3&gt;Reason 1&lt;/h3&gt;
&lt;p&gt;Paragraph&lt;/p&gt;
&lt;h3&gt;Reason 2&lt;/h3&gt;
&lt;p&gt;Paragraph&lt;/p&gt;
&lt;h2&gt;In conclusion&lt;/h2&gt;
&lt;p&gt;Paragraph&lt;/p&gt;</code></pre>
            </section>
            <section id="content-Paragraphs" class="content" style="display: none;">
            <h2>Paragraphs</h2>
<p>Paragraphs are the most basic HTML element. This topic explains and demonstrates the usage of the paragraph element in HTML.</p>
<p>The HTML <code>&lt;p&gt;</code> element defines a paragraph:</p>
<pre><code>&lt;p&gt;This is a paragraph.&lt;/p&gt;</code></pre>
<pre><code>&lt;p&gt;This is another paragraph.&lt;/p&gt;</code></pre>

<h3>Display</h3>
<p>You cannot be sure how HTML will be displayed. Large or small screens, and resized windows will create different results. With HTML, you cannot change the output by adding extra spaces or extra lines in your HTML code. The browser will remove any extra spaces and extra lines when the page is displayed:</p>
<pre><code>&lt;p&gt;This is          another     paragraph, extra spaces   will be   removed  by browsers&lt;/p&gt;</code></pre>        
            </section>
            <section id="content-Text Formatting" class="content" style="display: none;">
            <h2>Text Formatting</h2>
<p>While most HTML tags are used to create elements, HTML also provides in-text formatting tags to apply specific text-related styles to portions of text. This topic includes examples of HTML text formatting such as highlighting, bolding, underlining, subscript, and stricken text.</p>

<h3>Highlighting</h3>
<p>The <code>&lt;mark&gt;</code> element is new in HTML5 and is used to mark or highlight text in a document "due to its relevance in another context".</p>
<p>Example:</p>
<pre><code>&lt;p&gt;Here is some content from an article that contains the &lt;mark&gt;searched query&lt;/mark&gt; that we are looking for.&lt;/p&gt;</code></pre>

<h3>Output</h3>
<p>Here is some content from an article that contains the <mark>searched query</mark> that we are looking for. Highlighting the text will make it easier for the user to find what they are looking for.</p>

<h3>Bold, Italic, and Underline</h3>
<p>To bold text, use the <code>&lt;strong&gt;</code> or <code>&lt;b&gt;</code> tags:</p>
<pre><code>&lt;strong&gt;Bold Text Here&lt;/strong&gt;</code></pre>
<pre><code>&lt;b&gt;Bold Text Here&lt;/b&gt;</code></pre>
<p><strong>What’s the difference?</strong> Semantics. <code>&lt;strong&gt;</code> is used to indicate that the text is fundamentally or semantically important to the surrounding text, while <code>&lt;b&gt;</code> indicates no such importance and simply represents text that should be bolded.</p>

<h4>Italic Text</h4>
<p>To italicize text, use the <code>&lt;em&gt;</code> or <code>&lt;i&gt;</code> tags:</p>
<pre><code>&lt;em&gt;Italicized Text Here&lt;/em&gt;</code></pre>
<pre><code>&lt;i&gt;Italicized Text Here&lt;/i&gt;</code></pre>

<h4>Underlined Text</h4>
<p>While the <code>&lt;u&gt;</code> element itself was deprecated in HTML 4, it was reintroduced with alternate semantic meaning in HTML 5 - to represent an unarticulated, non-textual annotation.</p>
<p>Example:</p>
<pre><code>&lt;p&gt;This paragraph contains some &lt;u&gt;mispelled&lt;/u&gt; text.&lt;/p&gt;</code></pre>

<h2>Abbreviation</h2>
<p>To mark some expression as an abbreviation, use <code>&lt;abbr&gt;</code> tag:</p>
<pre><code>&lt;p&gt;I like to write &lt;abbr title="Hypertext Markup Language"&gt;HTML&lt;/abbr&gt;!&lt;/p&gt;</code></pre>

<h2>Inserted, Deleted, or Stricken</h2>
<p>To mark text as inserted, use the <code>&lt;ins&gt;</code> tag:</p>
<pre><code>&lt;ins&gt;New Text&lt;/ins&gt;</code></pre>
<p>To mark text as deleted, use the <code>&lt;del&gt;</code> tag:</p>
<pre><code>&lt;del&gt;Deleted Text&lt;/del&gt;</code></pre>
<p>To strike through text, use the <code>&lt;s&gt;</code> tag:</p>
<pre><code>&lt;s&gt;Struck-through text here&lt;/s&gt;</code></pre>

<h2>Superscript and Subscript</h2>
<p>To create superscript:</p>
<pre><code>&lt;sup&gt;superscript here&lt;/sup&gt;</code></pre>
<p>To create subscript:</p>
<pre><code>&lt;sub&gt;subscript here&lt;/sub&gt;</code></pre>
            </section>
            <section id="content-module1-quiz" class="content" style="display: none;">
                <h1>Module 1 Quiz</h1>
                <form id="quizForm">
                    <div class="question" id="q1">
                        <p>1.  What is the purpose of the <code>&lt;!DOCTYPE html&gt;</code> declaration in an HTML document?</p>
                        <input type="radio" name="q1" value="A"> A) It specifies the language of the HTML document.<br>
                        <input type="radio" name="q1" value="B"> B) It declares the version of HTML used.<br>
                        <input type="radio" name="q1" value="C"> C) It opens the <code>&lt;html&gt;</code> element.<br>
                        <input type="radio" name="q1" value="D"> D) It defines the character encoding for the document.<br>
                    </div>
                    <div class="question" id="q2">
                        <p>2.  Which HTML tag is used to define a level 1 heading in the content?</p>
                        <input type="radio" name="q2" value="A"> A) <code>&lt;h2&gt;</code><br>
                        <input type="radio" name="q2" value="B"> B) <code>&lt;h1&gt;</code><br>
                        <input type="radio" name="q2" value="C"> C) <code>&lt;heading&gt;</code><br>
                        <input type="radio" name="q2" value="D"> D) <code>&lt;header&gt;</code><br>
                    </div>
                    <div class="question" id="q3">
                        <p>3. What type of elements are <code>&lt;meta&gt;</code>, <code>&lt;link&gt;</code>, and <code>&lt;input&gt;</code>?</p>
                        <input type="radio" name="q3" value="A"> A) Void elements (elements without a closing tag)<br>
                        <input type="radio" name="q3" value="B"> B) Structural elements<br>
                        <input type="radio" name="q3" value="C"> C) Block-level elements<br>
                        <input type="radio" name="q3" value="D"> D) Form elements<br>
                    </div>
                    <div class="question" id="q4">
                        <p>4. What is the purpose of the <code>&lt;!DOCTYPE html&gt;</code> declaration in an HTML document?</p>
                        <input type="radio" name="q4" value="A"> A) It defines the version of the HTML document.<br>
                        <input type="radio" name="q4" value="B"> B) It specifies the character encoding of the document.<br>
                        <input type="radio" name="q4" value="C"> C) It is used to link external CSS files.<br>
                        <input type="radio" name="q4" value="D"> D) It defines the title of the web page.<br>
                    </div>
                    <div class="question" id="q5">
                        <p>5. In HTML5, what does the <code>&lt;!DOCTYPE html&gt;</code> declaration indicate?</p>
                        <input type="radio" name="q5" value="A"> A) It specifies that the document is written in HTML5.<br>
                        <input type="radio" name="q5" value="B"> B) It links to an external DTD (Document Type Definition).<br>
                        <input type="radio" name="q5" value="C"> C) It indicates that the document is a CSS file.<br>
                        <input type="radio" name="q5" value="D"> D) It defines the encoding used for the document.<br>
                    </div>
                    <div class="question" id="q6">
                        <p>6. What is the purpose of the <code>&lt;h1&gt;</code> to <code>&lt;h6&gt;</code> tags in HTML?</p>
                        <input type="radio" name="q6" value="A"> A) To define different styles of text for paragraphs.<br>
                        <input type="radio" name="q6" value="B"> B) To create headings of various sizes, with <code>&lt;h1&gt;</code> being the largest and <code>&lt;h6&gt;</code><br> being the smallest.<br>
                        <input type="radio" name="q6" value="C"> C) To display images as headings.<br>
                        <input type="radio" name="q6" value="D"> D) To define the background color of headings.<br>
                    </div>
                    <div class="question" id="q7">
                        <p>7. In HTML, how should headings be structured for optimal SEO and accessibility?</p>
                        <input type="radio" name="q7" value="A"> A) Use multiple <code>&lt;h1&gt;</code> tags for different sections, followed by <code>&lt;h2&gt;</code> and <code>&lt;h3&gt;</code> tags as needed.<br>
                        <input type="radio" name="q7" value="B"> B) Use a single <code>&lt;h1&gt;</code> for the main title and then use <code>&lt;h2&gt;</code> tags for subtitles, continuing in order down to <code>&lt;h6&gt;</code>.<br>
                        <input type="radio" name="q7" value="C"> C) Use <code>&lt;h1&gt;</code> tags for each paragraph and <code>&lt;h2&gt;</code> for the main title.<br>
                        <input type="radio" name="q7" value="D"> D) Use <code>&lt;h3&gt;</code> tags only, and avoid using <code>&lt;h1&gt;</code> or <code>&lt;h2&gt;</code> tags.<br>
                    </div>
                    <div class="question" id="q8">
                        <p>8. What does the <code>&lt;p&gt;</code> element in HTML define?</p>
                        <input type="radio" name="q8" value="A"> A) A heading<br>
                        <input type="radio" name="q8" value="B"> B) A table row<br>
                        <input type="radio" name="q8" value="C"> C)  A paragraph<br>
                        <input type="radio" name="q8" value="D"> D) An image container<br>
                    </div>
                    <div class="question" id="q9">
                        <p>9. How does HTML handle extra spaces and line breaks within the <code>&lt;p&gt;</code> element?</p>
                        <input type="radio" name="q9" value="A"> A) Extra spaces and line breaks are preserved and displayed exactly as written.<br>
                        <input type="radio" name="q9" value="B"> B) Extra spaces and line breaks are ignored and removed by the browser when rendering the page.<br>
                        <input type="radio" name="q9" value="C"> C) Extra spaces and line breaks will cause the browser to throw an error.<br>
                        <input type="radio" name="q9" value="D"> D) Extra spaces are displayed as a single space, but line breaks are kept.<br>
                    </div>
                    <div class="question" id="q10">
                        <p>10. Which tag is used to mark text as an abbreviation in HTML?</p>
                        <input type="radio" name="q10" value="A"> A) <code>&lt;abbr&gt;</code><br>
                        <input type="radio" name="q10" value="B"> B) <code>&lt;acronym&gt;</code><br>
                        <input type="radio" name="q10" value="C"> C) <code>&lt;abbrv&gt;</code><br>
                        <input type="radio" name="q10" value="D"> D) <code>&lt;short&gt;</code><br>
                    </div>
                </form>
                <button type="button" class="check-button" onclick="checkAnswers()">Check Answers</button>
            </section>
            
               
            
            <!-- Content Sections for Module 2 -->
            <section id="content-Anchors-and-Hyperlinks" class="content" style="display: none;">
            <h1>Anchors and Hyperlinks</h1>

<h2>Parameter</h2>
<h3>href</h3>
<p>Specifies the destination address. It can be an absolute or relative URL, or the name of an anchor. An absolute URL is the complete URL of a website like <code>http://example.com/</code>. A relative URL points to another directory and/or document inside the same website, e.g. <code>/about-us/</code> points to the directory “about-us” inside the root directory (/). When pointing to another directory without explicitly specifying the document, web servers typically return the document “index.html” inside that directory.</p>

<h3>hreflang</h3>
<p>Specifies the language of the resource linked by the href attribute (which must be present with this one). Use language values from BCP 47 for HTML5 and RFC 1766 for HTML 4.</p>

<h3>rel</h3>
<p>Specifies the relationship between the current document and the linked document. For HTML5, the values must be defined in the specification or registered in the Microformats wiki.</p>

<h3>target</h3>
<p>Specifies where to open the link, e.g. in a new tab or window. Possible values are <code>_blank</code>, <code>_parent</code>, <code>_top</code>, and <code>_self</code>, framename (deprecated). Forcing such behavior is not recommended since it violates the control of the user over a website.</p>

<h3>title</h3>
<p>Specifies extra information about a link. The information is most often shown as tooltip text when the cursor moves over the link. This attribute is not restricted to links; it can be used on almost all HTML tags.</p>

<h3>download</h3>
<p>Specifies that the target will be downloaded when a user clicks on the hyperlink. The value of the attribute will be the name of the downloaded file. There are no restrictions on allowed values, and the browser will automatically detect the correct file extension and add it to the file (.img, .pdf, etc.). If the value is omitted, the original filename is used.</p>

<p>Anchor tags are commonly used to link separate webpages, but they can also be used to link between different places in a single document, often within a table of contents or even launch external applications. This topic explains the implementation and application of HTML anchor tags in various roles.</p>

<h2>Link to Another Site</h2>
<p>This is the basic use of the <code>&lt;a&gt;</code> (anchor element) element:</p>
<pre><code>&lt;a href="http://example.com/"&gt;Link to example.com&lt;/a&gt;</code></pre>
<p>It creates a hyperlink to the URL <code>http://example.com/</code> as specified by the href (hypertext reference) attribute, with the anchor text "Link to example.com". It would look something like the following:</p>
<p><a href="http://example.com/">Link to example.com</a></p>

<p>To denote that this link leads to an external website, you can use the external link type:</p>
<pre><code>&lt;a href="http://example.com/" rel="external"&gt;example site&lt;/a&gt;</code></pre>

<p>You can link to a site that uses a protocol other than HTTP. For example, to link to an FTP site, you can do:</p>
<pre><code>&lt;a href="ftp://example.com/"&gt;This could be a link to an FTP site&lt;/a&gt;</code></pre>

<p>In this case, the difference is that this anchor tag is requesting that the user's browser connect to example.com using the File Transfer Protocol (FTP) rather than the Hypertext Transfer Protocol (HTTP).</p>

<h2>Link to an Anchor</h2>
<p>Anchors can be used to jump to specific tags on an HTML page. The <code>&lt;a&gt;</code> tag can point to any element that has an <code>id</code> attribute. Anchors are mostly used to jump to a subsection of a page and are used in conjunction with header tags.</p>

<p>Suppose you've created a page (<code>page1.html</code>) on many topics:</p>
<pre><code>&lt;h2&gt;First topic&lt;/h2&gt;
&lt;p&gt;Content about the first topic&lt;/p&gt;
&lt;h2&gt;Second topic&lt;/h2&gt;
&lt;p&gt;Content about the second topic&lt;/p&gt;</code></pre>

<p>Once you have several sections, you may want to create a Table of Contents at the top of the page with quick-links (or bookmarks) to specific sections. If you gave an <code>id</code> attribute to your topics, you could then link to them:</p>
<pre><code>&lt;h2 id="Topic1"&gt;First topic&lt;/h2&gt;
&lt;p&gt;Content about the first topic&lt;/p&gt;
&lt;h2 id="Topic2"&gt;Second topic&lt;/h2&gt;
&lt;p&gt;Content about the second topic&lt;/p&gt;</code></pre>

<p>Now you can use the anchor in your table of contents:</p>
<pre><code>&lt;h1&gt;Table of Contents&lt;/h1&gt;
&lt;a href='#Topic1'&gt;Click to jump to the First Topic&lt;/a&gt;
&lt;a href='#Topic2'&gt;Click to jump to the Second Topic&lt;/a&gt;</code></pre>

<p>These anchors are also attached to the web page they're on (<code>page1.html</code>). So you can link across the site from one page to the other by referencing the page and anchor name. Remember, you can always <a href="page1.html#Topic1">look back in the First Topic</a> for supporting information.</p>

<h2>Link to a Page on the Same Site</h2>
<p>You can use a relative path to link to pages on the same website.</p>
<pre><code>&lt;a href="/example"&gt;Text Here&lt;/a&gt;</code></pre>
<p>The above example would go to the file <code>example</code> at the root directory (/) of the server. If this link was on <code>http://example.com</code>, the following two links would bring the user to the same location:</p>
<pre><code>&lt;a href="/page"&gt;Text Here&lt;/a&gt;
&lt;a href="http://example.com/page"&gt;Text Here&lt;/a&gt;</code></pre>
<p>Both of the above would go to the <code>page</code> file at the root directory of <code>example.com</code>.</p>

<h2>Link That Dials a Number</h2>
<p>If the value of the href attribute begins with <code>tel:</code>, your device will dial the number when you click it. This works on mobile devices or on computers/tablets running software – like Skype or FaceTime – that can make phone calls.</p>
<pre><code>&lt;a href="tel:11234567890"&gt;Call us&lt;/a&gt;</code></pre>
<p>Most devices and programs will prompt the user in some way to confirm the number they are about to dial.</p>

<h2>Open Link in New Tab/Window</h2>
<p><code>&lt;a href="example.com" target="_blank"&gt;Text Here&lt;/a&gt;</code></p>
<p>The target attribute specifies where to open the link. By setting it to <code>_blank</code>, you tell the browser to open it in a new tab or window (per user preference).</p>
<p><strong>SECURITY VULNERABILITY WARNING!</strong> Using <code>target="_blank"</code> gives the opening site partial access to the <code>window.opener</code> object via JavaScript, which allows that page to then access and change the <code>window.opener.location</code> of your page and potentially redirect users to malware or phishing sites. Whenever using this for pages you do not control, add <code>rel="noopener"</code> to your link to prevent the <code>window.opener</code> object from being sent with the request. Currently, Firefox does not support <code>noopener</code>, so you will need to use <code>rel="noopener noreferrer"</code> for maximum effect.</p>

<h2>Link That Runs JavaScript</h2>
<p>Simply use the <code>rel="noopener noreferrer"</code> for <code>javascript:</code> protocol to run the text as JavaScript instead of opening it as a normal link:</p>
<pre><code>&lt;a href="javascript:myFunction();"&gt;Run Code&lt;/a&gt;</code></pre>
<p>You can also achieve the same thing using the <code>onclick</code> attribute:</p>
<pre><code>&lt;a href="#" onclick="myFunction(); return false;"&gt;Run Code&lt;/a&gt;</code></pre>
<p>The <code>return false;</code> is necessary to prevent your page from scrolling to the top when the link to <code>#</code> is clicked. Make sure to include all code you'd like to run before it, as returning will stop execution of further code. Also noteworthy, you can include an exclamation mark <code>!</code> after the hashtag in order to prevent the page from scrolling to the top. This works because any invalid slug will cause the link to not scroll anywhere on the page, because it couldn't locate the element it references (an element with <code>id="!"</code>). You could also just use any invalid slug (such as <code>#scrollsNowhere</code>) to achieve the same effect. In this case, <code>return false;</code> is not required:</p>
<pre><code>&lt;a href="#!" onclick="myFunction();"&gt;Run Code&lt;/a&gt;</code></pre>

<h2>Link That Runs Email Client</h2>
<h3>Basic Usage</h3>
<p>If the value of the href attribute begins with <code>mailto:</code>, it will try to open an email client on click:</p>
<pre><code>&lt;a href="mailto:example@example.com"&gt;Send email&lt;/a&gt;</code></pre>
<p>This will put the email address <code>example@example.com</code> as the recipient for the newly created email.</p>

<h3>Cc and Bcc</h3>
<p>You can also add addresses for cc- or bcc-recipients using the following syntax:</p>
<pre><code>&lt;a href="mailto:example@example.com?cc=john@example.com&amp;bcc=jane@example.com"&gt;Send email&lt;/a&gt;</code></pre>

<h3>Subject and Body Text</h3>
<p>You can populate the subject and body for the new email as well:</p>
<pre><code>&lt;a href="mailto:example@example.com?subject=Example+subject&amp;body=Message+text"&gt;Send email&lt;/a&gt;</code></pre>
<p>Those values must be URL encoded. Clicking on a link with <code>mailto:</code> will try to open the default email client specified by your operating system or it will ask you to choose what client you want to use. Not all options specified after the recipient's address are supported in all email clients.</p>
            </section>
            <section id="content-Lists" class="content" style="display: none;">
            <h1>Lists in HTML</h1>
<p>HTML offers three ways for specifying lists: ordered lists, unordered lists, and description lists. Ordered lists use ordinal sequences to indicate the order of list elements, unordered lists use a defined symbol such as a bullet to list elements in no designated order, and description lists use indents to list elements with their children. This topic explains the implementation and combination of these lists in HTML markup.</p>

<h2>Ordered List</h2>
<p>An ordered list can be created with the <code>&lt;ol&gt;</code> tag and each list item can be created with the <code>&lt;li&gt;</code> tag as in the example below:</p>
<pre><code>&lt;ol&gt;
    &lt;li&gt;Item&lt;/li&gt;
    &lt;li&gt;Another Item&lt;/li&gt;
    &lt;li&gt;Yet Another Item&lt;/li&gt;
&lt;/ol&gt;</code></pre>
<p>This will produce a numbered list (which is the default style):</p>
<ol>
    <li>Item</li>
    <li>Another Item</li>
    <li>Yet Another Item</li>
</ol>

<h3>Manually Changing the Numbers</h3>
<p>There are a couple of ways you can play with which numbers appear on the list items in an ordered list. The first way is to set a starting number, using the <code>start</code> attribute. The list will start at this defined number, and continue incrementing by one as usual:</p>
<pre><code>&lt;ol start="3"&gt;
    &lt;li&gt;Item&lt;/li&gt;
    &lt;li&gt;Some Other Item&lt;/li&gt;
    &lt;li&gt;Yet Another Item&lt;/li&gt;
&lt;/ol&gt;</code></pre>
<p>This will produce a numbered list starting at 3:</p>
<ol start="3">
    <li>Item</li>
    <li>Some Other Item</li>
    <li>Yet Another Item</li>
</ol>

<p>You can also explicitly set a certain list item to a specific number:</p>
<pre><code>&lt;ol&gt;
    &lt;li value="7"&gt;Some Item&lt;/li&gt;
&lt;/ol&gt;</code></pre>
<p>Additionally, using the <code>value</code> attribute directly on a list item can override the existing numbering system:</p>
<pre><code>&lt;ol start="5"&gt;
    &lt;li&gt;Item&lt;/li&gt;
    &lt;li&gt;Some Other Item&lt;/li&gt;
    &lt;li value="4"&gt;A Reset Item&lt;/li&gt;
    &lt;li&gt;Another Item&lt;/li&gt;
    &lt;li&gt;Yet Another Item&lt;/li&gt;
&lt;/ol&gt;</code></pre>

<p>This example will produce a list that follows the numbering pattern of 5, 6, 4, 5, 6:</p>
<ol start="5">
    <li>Item</li>
    <li>Some Other Item</li>
    <li value="4">A Reset Item</li>
    <li>Another Item</li>
    <li>Yet Another Item</li>
</ol>

<h3>Reverse Numbering</h3>
<p>You can reverse the numbering by adding <code>&lt;ol reversed&gt;</code> in your <code>&lt;ol&gt;</code> element:</p>
<pre><code>&lt;ol reversed&gt;
    &lt;li&gt;Item&lt;/li&gt;
    &lt;li&gt;Some Other Item&lt;/li&gt;
    &lt;li value="4"&gt;A Reset Item&lt;/li&gt;
    &lt;li&gt;Another Item&lt;/li&gt;
    &lt;li&gt;Yet Another Item&lt;/li&gt;
&lt;/ol&gt;</code></pre>

<h3>Changing the Type of Numeral</h3>
<p>You can easily change the type of numeral shown in the list item marker by using the <code>&lt;ol type="1|a|A|i|I"&gt;</code> type attribute:</p>
<table>
    <tr>
        <th>Type</th>
        <th>Description</th>
        <th>Examples</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Default value - Decimal numbers</td>
        <td>1, 2, 3, 4</td>
    </tr>
    <tr>
        <td>a</td>
        <td>Alphabetically ordered (lowercase)</td>
        <td>a, b, c, d</td>
    </tr>
    <tr>
        <td>A</td>
        <td>Alphabetically ordered (uppercase)</td>
        <td>A, B, C, D</td>
    </tr>
    <tr>
        <td>i</td>
        <td>Roman Numerals (lowercase)</td>
        <td>i, ii, iii, iv</td>
    </tr>
    <tr>
        <td>I</td>
        <td>Roman Numerals (uppercase)</td>
        <td>I, II, III, IV</td>
    </tr>
</table>

<h2>Unordered List</h2>
<p>An unordered list can be created with the <code>&lt;ul&gt;</code> tag:</p>
<pre><code>&lt;ul&gt;
    &lt;li&gt;Item&lt;/li&gt;
    &lt;li&gt;Another Item&lt;/li&gt;
    &lt;li&gt;Yet Another Item&lt;/li&gt;
&lt;/ul&gt;</code></pre>
<p>This will produce a bulleted list (which is the default style):</p>
<ul>
    <li>Item</li>
    <li>Another Item</li>
    <li>Yet Another Item</li>
</ul>

<h3>Nested Lists</h3>
<p>You can nest lists to represent sub-items of a list item:</p>
<pre><code>&lt;ul&gt;
    &lt;li&gt;item 1&lt;/li&gt;
    &lt;li&gt;item 2
        &lt;ul&gt;
            &lt;li&gt;sub-item 2.1&lt;/li&gt;
            &lt;li&gt;sub-item 2.2&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/li&gt;
    &lt;li&gt;item 3&lt;/li&gt;
&lt;/ul&gt;</code></pre>
<p>This will produce:</p>
<ul>
    <li>item 1</li>
    <li>item 2
        <ul>
            <li>sub-item 2.1</li>
            <li>sub-item 2.2</li>
        </ul>
    </li>
    <li>item 3</li>
</ul>

<h2>Description List</h2>
<p>A description list can be created with the <code>&lt;dl&gt;</code> element. It consists of name-value groups:</p>
<pre><code>&lt;dl&gt;
    &lt;dt&gt;name 1&lt;/dt&gt;
    &lt;dd&gt;value for 1&lt;/dd&gt;
    &lt;dt&gt;name 2&lt;/dt&gt;
    &lt;dd&gt;value for 2&lt;/dd&gt;
&lt;/dl&gt;</code></pre>
<p>Live demo:</p>
<dl>
    <dt>name 1</dt>
    <dd>value for 1</dd>
    <dt>name 2</dt>
    <dd>value for 2</dd>
</dl>

<p>A name-value group can have more than one name and/or value:</p>
<pre><code>&lt;dl&gt;
    &lt;dt&gt;name 1&lt;/dt&gt;
    &lt;dt&gt;name 2&lt;/dt&gt;
    &lt;dd&gt;value for 1 and 2&lt;/dd&gt;
    &lt;dt&gt;name 3&lt;/dt&gt;
    &lt;dd&gt;value for 3&lt;/dd&gt;
    &lt;dd&gt;value for 3&lt;/dd&gt;
&lt;/dl&gt;</code></pre>
            </section>
            <section id="content-Tables" class="content" style="display: none;">
            <h1>Tables in HTML</h1>
<p>The HTML <code>&lt;table&gt;</code> element allows web authors to display tabular data (such as text, images, links, other tables, etc.) in a two-dimensional table with rows and columns of cells.</p>

<h2>Simple Table</h2>
<table>
    <tr>
        <th>Heading 1/Column 1</th>
        <th>Heading 2/Column 2</th>
    </tr>
    <tr>
        <td>Row 1 Data Column 1</td>
        <td>Row 1 Data Column 2</td>
    </tr>
    <tr>
        <td>Row 2 Data Column 1</td>
        <td>Row 2 Data Column 2</td>
    </tr>
</table>
<p>This will render a table consisting of three total rows: one row of header cells (<code>&lt;th&gt;</code>) and two rows of content cells (<code>&lt;td&gt;</code>).</p>

<h2>Spanning Columns or Rows</h2>
<table>
    <tr>
        <td>row 1 col 1</td>
        <td>row 1 col 2</td>
        <td>row 1 col 3</td>
    </tr>
    <tr>
        <td colspan="3">This second row spans all three columns</td>
    </tr>
    <tr>
        <td rowspan="2">This cell spans two rows</td>
        <td>row 3 col 2</td>
        <td>row 3 col 3</td>
    </tr>
    <tr>
        <td>row 4 col 2</td>
        <td>row 4 col 3</td>
    </tr>
</table>
<p>Note that you should not design a table where both rows and columns overlap as this is invalid HTML.</p>

<h2>Column Groups</h2>
<p>Sometimes you may want to apply styling to a column or group of columns. To do this, use <code>&lt;colgroup&gt;</code> and <code>&lt;col&gt;</code> elements.</p>
<table>
    <colgroup>
        <col style="background-color: #e0f7fa">
        <col style="background-color: #fce4ec">
    </colgroup>
    <tr>
        <th>Column 1</th>
        <th>Column 2</th>
    </tr>
    <tr>
        <td>Data 1</td>
        <td>Data 2</td>
    </tr>
</table>

<h2>Table with <code>&lt;thead&gt;</code>, <code>&lt;tbody&gt;</code>, <code>&lt;tfoot&gt;</code>, and <code>&lt;caption&gt;</code></h2>
<table>
    <caption>Table Title</caption>
    <thead>
        <tr>
            <th>Header content 1</th>
            <th>Header content 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Body content 1</td>
            <td>Body content 2</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td>Footer content 1</td>
            <td>Footer content 2</td>
        </tr>
    </tfoot>
</table>

<h2>Heading Scope</h2>
<p>The <code>&lt;th&gt;</code> elements are commonly used to indicate headings for table rows and columns:</p>
<table>
    <thead>
        <tr>
            <td></td>
            <th scope="col">Column Heading 1</th>
            <th scope="col">Column Heading 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">Row Heading 1</th>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row">Row Heading 2</th>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
<p>The <code>scope</code> attribute improves accessibility by indicating whether the header is for a row, column, or group.</p>

            </section>
            <section id="content-Comments" class="content" style="display: none;">
            <h1>HTML Comments</h1>
<p>Similar to other programming, markup, and markdown languages, comments in HTML provide other developers with development-specific information without affecting the user interface. Unlike other languages, HTML comments can be used to specify HTML elements for Internet Explorer only. This topic explains how to write HTML comments and their functional applications.</p>

<h2>Creating Comments</h2>
<p>HTML comments can be used to leave notes to yourself or other developers about a specific point in code. They can be initiated with <code>&lt;!--</code> and concluded with <code>--&gt;</code>, like so:</p>
<pre><code>&lt;!-- I'm an HTML comment! --&gt;</code></pre>
<p>They can be incorporated inline within other content:</p>
<pre><code>&lt;h1&gt;This part will be displayed &lt;!-- while this will not be displayed --&gt;.&lt;/h1&gt;</code></pre>
<p>They can also span multiple lines to provide more information:</p>
<pre><code>&lt;!-- This is a multiline HTML comment.
Whatever is in here will not be rendered by the browser.
You can "comment out" entire sections of HTML code.--&gt;</code></pre>
<p>However, they cannot appear within another HTML tag, like this:</p>
<pre><code>&lt;h1 &lt;!-- testAttribute="something" --&gt;&gt;This will not work&lt;/h1&gt;</code></pre>
<p>This produces invalid HTML as the entire <code>&lt;h1</code> block would be considered a single start tag with some invalid information contained within it.</p>

<h2>Commenting Out Whitespace Between Inline Elements</h2>
<p>Inline display elements, usually such as <code>&lt;span&gt;</code> or <code>&lt;a&gt;</code>, will include up to one white-space character before and after them in the document. To avoid very long lines in the markup (that are hard to read) and unintentional whitespace (which affects formatting), the whitespace can be commented out:</p>
<pre><code>&lt;!-- Use an HTML comment to nullify the newline character below: --&gt;
&lt;a href="#"&gt;I hope there will be no extra whitespace after this!&lt;/a&gt;&lt;!----&gt;&lt;button&gt;Foo&lt;/button&gt;</code></pre>
<p>Try it without a comment between the inline elements, and there will be one space between them. Sometimes picking up the space character is desired.</p>
<p>Example code:</p>
<pre><code>&lt;!-- Use an HTML comment to nullify the newline character below: --&gt;
&lt;a href="#"&gt;I hope there will be no extra whitespace after this!&lt;/a&gt;&lt;!----&gt;&lt;button&gt;Foo&lt;/button&gt;</code></pre>
<hr>
<p><strong>Without it, you can notice a small formatting difference:</strong></p>
<pre><code>&lt;a href="#"&gt;I hope there will be no extra whitespace after this!&lt;/a&gt;
&lt;button&gt;Foo&lt;/button&gt;</code></pre>
            </section>
            <section id="content-module2-quiz" class="content" style="display: none;">
            <h1>Module 2 Quiz</h1>
                <form id="quizForm">
                    <div class="question" id="q1">
                        <p>1. What is the purpose of the <code>download</code> attribute in an anchor tag?</p>
                        <input type="radio" name="q1" value="A"> A) It specifies the destination URL of the link.<br>
                        <input type="radio" name="q1" value="B"> B) It determines the language of the resource being linked.<br>
                        <input type="radio" name="q1" value="C"> C) It causes the browser to download the linked resource instead of navigating to it.<br>
                        <input type="radio" name="q1" value="D"> D) It opens the link in a new tab or window.<br>
                    </div>
                    <div class="question" id="q2">
                        <p>2.  Which of the following is the correct way to create a link that dials a phone number when clicked on a mobile device?</p>
                        <input type="radio" name="q2" value="A"> A) <code>&lt;a href="tel:+123456789"&gt;Call us&lt;/a&gt;</code><br>
                        <input type="radio" name="q2" value="B"> B) <code>&lt;a href="mailto:+123456789"&gt;Call us&lt;/a&gt;</code><br>
                        <input type="radio" name="q2" value="C"> C) <code>&lt;a href="sms:+123456789"&gt;Send SMS&lt;/a&gt;</code><br>
                        <input type="radio" name="q2" value="D"> D) <code>&lt;a href="ftp://+123456789"&gt;Call us&lt;/a&gt;</code><br>
                    </div>
                    <div class="question" id="q3">
                        <p>3. What tag is used to create an ordered list in HTML?</p>
                        <input type="radio" name="q3" value="A"> A) <code>&lt;ul&gt;</code><br>
                        <input type="radio" name="q3" value="B"> B) <code>&lt;ol&gt;</code><br>
                        <input type="radio" name="q3" value="C"> C) <code>&lt;dl&gt;</code><br>
                        <input type="radio" name="q3" value="D"> D) <code>&lt;li&gt;</code><br>
                    </div>
                    <div class="question" id="q4">
                        <p>4. How can you change the type of numbering in an ordered list to Roman numerals in HTML?</p>
                        <input type="radio" name="q4" value="A"> A) <code>&lt;ol type="i"&gt;</code><br>
                        <input type="radio" name="q4" value="B"> B) <code>&lt;ol type="I"&gt;</code><br>
                        <input type="radio" name="q4" value="C"> C) <code>&lt;ol type="roman"&gt;</code><br>
                        <input type="radio" name="q4" value="D"> D) <code>&lt;ol type="1|a|A|i|I"&gt;</code><br>
                    </div>
                    <div class="question" id="q5">
                        <p>5. What is the default style of an unordered list in HTML?</p>
                        <input type="radio" name="q5" value="A"> A) Numbered list<br>
                        <input type="radio" name="q5" value="B"> B) Bulleted list<br>
                        <input type="radio" name="q5" value="C"> C) Roman numerals<br>
                        <input type="radio" name="q5" value="D"> D) Alphabetical list<br>
                    </div>
                    <div class="question" id="q6">
                        <p>6. Which HTML tag is used to define the main table in HTML?</p>
                        <input type="radio" name="q6" value="A"> A) <code>&lt;thead&gt;</code><br>
                        <input type="radio" name="q6" value="B"> B) <code>&lt;table&gt;</code><br>
                        <input type="radio" name="q6" value="C"> C) <code>&lt;otd&gt;</code><br>
                        <input type="radio" name="q6" value="D"> D) <code>&lt;th&gt;</code><br>
                    </div>
                    <div class="question" id="q7">
                        <p>7. How can you specify that a table heading applies to a row in HTML?</p>
                        <input type="radio" name="q7" value="A"> A) Use the <code>scope</code> attribute with the value "row"<br>
                        <input type="radio" name="q7" value="B"> B) Use the <code>scope</code>attribute with the value "col"<br>
                        <input type="radio" name="q7" value="C"> C) Use the <code>th</code> tag with no attributes<br>
                        <input type="radio" name="q7" value="D"> D) Use the <code>tr</code> tag with the <code>row</code> attribute<br>
                    </div>
                    <div class="question" id="q8">
                        <p>8. What tag is used to define a table row in HTML?</p>
                        <input type="radio" name="q8" value="A"> A) <code>&lt;tr&gt;</code><br>
                        <input type="radio" name="q8" value="B"> B) <code>&lt;td&gt;</code><br>
                        <input type="radio" name="q8" value="C"> C) <code>&lt;th&gt;</code><br>
                        <input type="radio" name="q8" value="D"> D) <code>&lt;table&gt;</code><br>
                    </div>
                    <div class="question" id="q9">
                        <p>9. How do you create a comment in HTML?</p>
                        <input type="radio" name="q9" value="A"> A) <code>&lt;!-- comment --&gt;</code><br>
                        <input type="radio" name="q9" value="B"> B) <code>&lt;!--- comment ---&gt;</code><br>
                        <input type="radio" name="q9" value="C"> C) <code>/* comment */</code><br>
                        <input type="radio" name="q9" value="D"> D) <code>// comment</code><br>
                    </div>
                    <div class="question" id="q10">
                        <p>10. What happens if you try to place a comment inside an HTML tag?</p>

                        <input type="radio" name="q10" value="A"> A)  It will be displayed as text in the browser.<br>
                        <input type="radio" name="q10" value="B"> B) It will be ignored by the browser.<br>
                        <input type="radio" name="q10" value="C"> C) The HTML will become invalid, and the page may not render correctly.<br>
                        <input type="radio" name="q10" value="D"> D) The browser will treat it as a special attribute.<br>
                    </div>
                </form>
                <button type="button" class="check-button" onclick="checkAnswers()">Check Answers</button>
            </section>
            </section>

            
            <!-- Content Sections for Module 3 -->
            <section id="content-Classes-and-IDs" class="content" style="display: none;">
            <h1>Classes and IDs</h1>
<table style="width: 100%; border-collapse: collapse;">
    <tr>
        <th style="border: 1px solid #ccc; padding: 8px;">Parameter</th>
        <th style="border: 1px solid #ccc; padding: 8px;">Details</th>
    </tr>
    <tr>
        <td style="border: 1px solid #ccc; padding: 8px;"><code>class</code></td>
        <td style="border: 1px solid #ccc; padding: 8px;">Indicates the Class of the element (non-unique)</td>
    </tr>
    <tr>
        <td style="border: 1px solid #ccc; padding: 8px;"><code>id</code></td>
        <td style="border: 1px solid #ccc; padding: 8px;">Indicates the ID of the element (unique in the same context)</td>
    </tr>
</table>

<p>Classes and IDs make referencing HTML elements from scripts and stylesheets easier. The <code>class</code> attribute can be used on one or more tags and is used by CSS for styling. <code>IDs</code>, however, are intended to refer to a single element, meaning the same ID should never be used twice. IDs are generally used with JavaScript and internal document links, and are discouraged in CSS.</p>

<h2>Giving an Element a Class</h2>
<p>Classes are identifiers for the elements that they are assigned to. Use the <code>class</code> attribute to assign a class to an element:</p>
<pre><code>&lt;div class="example-class"&gt;&lt;/div&gt;</code></pre>
<p>To assign multiple classes to an element, separate the class names with spaces:</p>
<pre><code>&lt;div class="class1 class2"&gt;&lt;/div&gt;</code></pre>

<h2>Using Classes in CSS</h2>
<p>Classes can be used for styling certain elements without changing all elements of that kind. For example, these two <code>&lt;span&gt;</code> elements can have completely different stylings:</p>
<pre><code>&lt;span&gt;&lt;/span&gt;
&lt;span class="special"&gt;&lt;/span&gt;</code></pre>
<p>Classes of the same name can be given to any number of elements on a page, and they will all receive the styling associated with that class. For example:</p>
<pre><code>&lt;div class="highlight"&gt;Lorem ipsum&lt;/div&gt;
&lt;span class="highlight"&gt;Lorem ipsum&lt;/span&gt;</code></pre>
<p>If our CSS is as below, then the color green will be applied to the text within both elements:</p>
<pre><code>.highlight { color: green; }</code></pre>

<h2>Giving an Element an ID</h2>
<p>The <code>ID</code> attribute of an element is an identifier which must be unique in the whole document. Its purpose is to uniquely identify the element when linking (using an anchor), scripting, or styling (with CSS):</p>
<pre><code>&lt;div id="example-id"&gt;&lt;/div&gt;</code></pre>
<p>You should not have two elements with the same ID in the same document:</p>
<pre><code>&lt;div id="example-id"&gt;&lt;/div&gt;
&lt;span id="example-id"&gt;&lt;/span&gt;</code></pre>

<h2>Acceptable Values</h2>
<p>For an ID, the only restrictions are:</p>
<ol>
    <li>It must be unique in the document</li>
    <li>It must not contain any space characters</li>
    <li>It must contain at least one character</li>
</ol>
<p>So these are valid:</p>
<pre><code>&lt;div id="container"&gt; ... &lt;/div&gt;</code></pre>
<pre><code>&lt;div id="999"&gt; ... &lt;/div&gt;</code></pre>
<p>This is invalid:</p>
<pre><code>&lt;div id=" "&gt; ... &lt;/div&gt;</code></pre>

<h2>Problems Related to Duplicated IDs</h2>
<p>Having more than one element with the same ID is a hard to troubleshoot problem. The HTML parser will usually try to render the page in any case. However, unexpected behavior may occur:</p>
<pre><code>&lt;div id="aDiv"&gt;a&lt;/div&gt;
&lt;div id="aDiv"&gt;b&lt;/div&gt;</code></pre>
<p>CSS selectors still work:</p>
<pre><code>#aDiv {
    color: red;
}</code></pre>
<p>But JavaScript fails to handle both elements:</p>
<pre><code>var html = document.getElementById("aDiv").innerHTML;</code></pre>
<p>In this case, the <code>html</code> variable will only bear the content of the first <code>&lt;div&gt;</code>.</p>
               </section>
            <section id="content-Data Attributes" class="content" style="display: none;">
            <h1>Data Attributes</h1>
<table style="width: 100%; border-collapse: collapse;">
    <tr>
        <th style="border: 1px solid #ccc; padding: 8px;">Value</th>
        <th style="border: 1px solid #ccc; padding: 8px;">Description</th>
    </tr>
    <tr>
        <td style="border: 1px solid #ccc; padding: 8px;"><code>somevalue</code></td>
        <td style="border: 1px solid #ccc; padding: 8px;">Specifies the value of the attribute (as a string)</td>
    </tr>
</table>

<h2>Older Browsers Support</h2>
<p>Data attributes were introduced in HTML5, which is supported by all modern browsers. However, older browsers before HTML5 don't recognize the data attributes.</p>
<p>In HTML specifications, attributes that are not recognized by the browser must be left alone, and the browser will simply ignore them when rendering the page. Web developers have utilized this fact to create non-standard attributes which are any attributes not part of the HTML specifications. For example, the <code>value</code> attribute in the line below is considered a non-standard attribute because the specifications for the <code>&lt;img&gt;</code> tag don't have a <code>value</code> attribute and it is not a global attribute:</p>
<pre><code>&lt;img src="sample.jpg" value="test" /&gt;</code></pre>
<p>This means that although data attributes are not supported in older browsers, they still work, and you can set and retrieve them using the same generic JavaScript <code>setAttribute</code> and <code>getAttribute</code> methods, but you cannot use the new <code>dataset</code> property, which is only supported in modern browsers.</p>

<h2>Data Attribute Use</h2>
<p>HTML5 <code>data-* </code> attributes provide a convenient way to store data in HTML elements. The stored data can be read or modified using JavaScript:</p>
<pre><code>&lt;div data-submitted="yes" class="user_profile"&gt;
    … some content …
&lt;/div&gt;</code></pre>
<p>Data attribute structure is <code>data-* </code>, i.e., the name of the data attribute comes after the <code>data-</code> part. Data in string format (including JSON) can be stored using <code>data-* </code> attributes.</p>
            </section>
            <section id="content-Linking Resources" class="content" style="display: none;">
            <h1>Linking Resources</h1>
<table>
    <tr>
        <th>Attribute</th>
        <th>Details</th>
    </tr>
    <tr>
        <td><code>charset</code></td>
        <td>Specifies the character encoding of the linked document</td>
    </tr>
    <tr>
        <td><code>crossorigin</code></td>
        <td>Specifies how the element handles cross-origin requests</td>
    </tr>
    <tr>
        <td><code>href</code></td>
        <td>Specifies the location of the linked document</td>
    </tr>
    <tr>
        <td><code>hreflang</code></td>
        <td>Specifies the language of the text in the linked document</td>
    </tr>
    <tr>
        <td><code>media</code></td>
        <td>Specifies on what device the linked document will be displayed, often used with selecting stylesheets</td>
    </tr>
    <tr>
        <td><code>rel</code></td>
        <td>Required. Specifies the relationship between the current document and the linked document</td>
    </tr>
    <tr>
        <td><code>rev</code></td>
        <td>Specifies the relationship between the linked document and the current document</td>
    </tr>
    <tr>
        <td><code>sizes</code></td>
        <td>Specifies the size of the linked resource. Only when <code>rel="icon"</code></td>
    </tr>
    <tr>
        <td><code>target</code></td>
        <td>Specifies where the linked document is to be loaded</td>
    </tr>
    <tr>
        <td><code>type</code></td>
        <td>Specifies the media type of the linked document</td>
    </tr>
    <tr>
        <td><code>integrity</code></td>
        <td>Specifies a base64 encoded hash (sha256, sha384, or sha512) of the linked resource allowing the browser to verify its legitimacy.</td>
    </tr>
</table>

<p>While many scripts, icons, and stylesheets can be written straight into HTML markup, it is best practice and more efficient to include these resources in their own file and link them to your document. This topic covers linking external resources such as stylesheets and scripts into an HTML document.</p>

<h2>JavaScript</h2>
<p><strong>Synchronous:</strong></p>
<pre><code>&lt;script src="path/to.js"&gt;&lt;/script&gt;</code></pre>
<p>Standard practice is to place JavaScript <code>&lt;script&gt;</code> tags just before the closing <code>&lt;/body&gt;</code> tag. Loading your scripts last allows your site's visuals to show up more quickly and discourages your JavaScript from trying to interact with elements that haven't loaded yet.</p>

<p><strong>Asynchronous:</strong></p>
<pre><code>&lt;script src="path/to.js" async&gt;&lt;/script&gt;</code></pre>
<p>Another alternative, when the JavaScript code being loaded is not necessary for page initialization, can be loaded asynchronously, speeding up the page load.</p>

<p><strong>Deferred:</strong></p>
<pre><code>&lt;script src="path/to.js" defer&gt;&lt;/script&gt;</code></pre>
<p>Deferred scripts are like async scripts, with the exception that the parsing will only be performed once the HTML is fully parsed.</p>

<p><strong>Using <code>&lt;noscript&gt;</code>:</strong></p>
<pre><code>&lt;noscript&gt;JavaScript disabled&lt;/noscript&gt;</code></pre>
<p>The <code>&lt;noscript&gt;</code> element defines content to be displayed if the user has scripts disabled or if the browser does not support using scripts.</p>

<h2>External CSS Stylesheet</h2>
<pre><code>&lt;link rel="stylesheet" href="path/to.css" type="text/css"&gt;</code></pre>
<p>The standard practice is to place CSS <code>&lt;link&gt;</code> tags inside the <code>&lt;head&gt;</code> tag at the top of your HTML.</p>

<h2>Favicon</h2>
<pre><code>&lt;link rel="icon" type="image/png" href="/favicon.png"&gt;</code></pre>
<pre><code>&lt;link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"&gt;</code></pre>
<p>A file named <code>favicon.ico</code> at the root of your website will typically be loaded and applied automatically.</p>

<h2>Resource Hints</h2>
<p>Use link attributes like <code>preconnect</code>, <code>dns-prefetch</code>, <code>prefetch</code>, and <code>prerender</code> to optimize resource loading.</p>

<h2>Prev and Next</h2>
<p>When a page is part of a series of articles, use <code>prev</code> and <code>next</code> to point to pages that are coming before and after.</p>
<pre><code>&lt;link rel="prev" href="http://example.com/previous"&gt;</code></pre>
<pre><code>&lt;link rel="next" href="http://example.com/next"&gt;</code></pre>

<h2>Web Feed</h2>
<p>Use the <code>rel="alternate"</code> attribute to allow discoverability of your Atom/RSS feeds.</p>
<pre><code>&lt;link rel="alternate" type="application/atom+xml" href="http://example.com/feed.xml" /&gt;</code></pre>
<pre><code>&lt;link rel="alternate" type="application/rss+xml" href="http://example.com/feed.xml" /&gt;</code></pre>
            </section>
            <section id="content-Include JavaScript Code in HTML" class="content" style="display: none;">
            <h1>Include JavaScript Code in HTML</h1>
<table>
    <tr>
        <th>Attribute</th>
        <th>Details</th>
    </tr>
    <tr>
        <td><code>src</code></td>
        <td>Specifies the path to a JavaScript file. Either a relative or absolute URL.</td>
    </tr>
    <tr>
        <td><code>type</code></td>
        <td>Specifies the MIME type. This attribute is required in HTML4, but optional in HTML5.</td>
    </tr>
    <tr>
        <td><code>async</code></td>
        <td>Specifies that the script shall be executed asynchronously (only for external scripts).</td>
    </tr>
    <tr>
        <td><code>defer</code></td>
        <td>Specifies that the script shall be executed when the page has finished parsing (only for external scripts).</td>
    </tr>
    <tr>
        <td><code>charset</code></td>
        <td>Specifies the character encoding used in an external script file, e.g. UTF-8.</td>
    </tr>
    <tr>
        <td><code>crossorigin</code></td>
        <td>How the element handles cross-origin requests.</td>
    </tr>
    <tr>
        <td><code>nonce</code></td>
        <td>Cryptographic nonce used in Content Security Policy checks (CSP3).</td>
    </tr>
</table>

<h2>Handling Disabled JavaScript</h2>
<p>It is possible that the client browser does not support JavaScript or has JavaScript execution disabled. To inform users that a script is supposed to execute, you can use the <code>&lt;noscript&gt;</code> tag:</p>
<pre><code>&lt;script&gt;
  document.write("Hello, world!");
&lt;/script&gt;
&lt;noscript&gt;This browser does not support JavaScript.&lt;/noscript&gt;</code></pre>

<h2>Linking to an External JavaScript File</h2>
<p>You can link to an external JavaScript file using the <code>src</code> attribute:</p>
<pre><code>&lt;script src="example.js"&gt;&lt;/script&gt;</code></pre>
<p>This is typically added inside the <code>&lt;head&gt;</code> tags at the top of the HTML document.</p>

<h2>Directly Including JavaScript Code</h2>
<p>You can also include JavaScript code directly in your HTML:</p>
<pre><code>&lt;script&gt;
// JavaScript code here
&lt;/script&gt;</code></pre>

<h2>Including a JavaScript File Executing Asynchronously</h2>
<p>To include a JavaScript file that executes asynchronously, use:</p>
<pre><code>&lt;script type="text/javascript" src="URL" async&gt;&lt;/script&gt;</code></pre>
            </section>
            <section id="content-module3-quiz" class="content" style="display: none;">
            <h1>Module 3 Quiz</h1>
                <form id="quizForm">
                    <div class="question" id="q1">
                        <p>1. What is the primary difference between a class and an ID in HTML?</p>
                        <input type="radio" name="q1" value="A"> A) An ID can be assigned to multiple elements, while a class can only be assigned to one.<br>
                        <input type="radio" name="q1" value="B"> B) A class is unique within a document, while an ID can be used multiple times.<br>
                        <input type="radio" name="q1" value="C"> C) A class can be assigned to multiple elements, while an ID must be unique within a document.<br>
                        <input type="radio" name="q1" value="D"> D) Both IDs and classes are unique and cannot be reused.<br>
                    </div>
                    <div class="question" id="q2">
                        <p>2. Can you use the same ID multiple times within a single HTML document?</p>
                        <input type="radio" name="q2" value="A"> A) Yes, it's perfectly valid.<br>
                        <input type="radio" name="q2" value="B"> B) No, IDs must be unique within a document.<br>
                        <input type="radio" name="q2" value="C"> C) Yes, but only in certain browsers.<br>
                        <input type="radio" name="q2" value="D"> D) No, using the same ID will cause the page to not load.<br>
                    </div>
                    <div class="question" id="q3">
                        <p>3. What is the recommended way to apply styling to multiple elements that share the same style?</p>

                        <input type="radio" name="q3" value="A"> A) NUse an ID for each element.<br>
                        <input type="radio" name="q3" value="B"> B) Use classes for the elements and apply styles via CSS.<br>
                        <input type="radio" name="q3" value="C"> C) Use inline styles for each element.<br>
                        <input type="radio" name="q3" value="D"> D) Use JavaScript to apply styles dynamically.<br>
                    </div>                        
                    <div class="question" id="q4">
                        <p>4. What happens if you use a data attribute in HTML5 but the browser doesn't recognize it (e.g., in older browsers)?</p>
                        <input type="radio" name="q4" value="A"> A) The browser will throw an error.<br>
                        <input type="radio" name="q4" value="B"> B) The browser will ignore the data attribute and render the page as usual.<br>
                        <input type="radio" name="q4" value="C"> C) The data attribute will be treated as a standard HTML attribute.<br>
                        <input type="radio" name="q4" value="D"> D) The browser will fail to load the page.<br>
                    </div>
                    <div class="question" id="q5">
                        <p>5. What kind of data can you store in data attributes?</p>

                        <input type="radio" name="q5" value="A"> A) Only numeric data<br>
                        <input type="radio" name="q5" value="B"> B) Only text strings<br>
                        <input type="radio" name="q5" value="C"> C) Any data in string format, including JSON<br>
                        <input type="radio" name="q5" value="D"> D) Only URLs<br>
                    </div>
                    <div class="question" id="q6">
                        <p>6. How can data attributes be useful in web development?</p>
                        <input type="radio" name="q6" value="A"> A) For storing additional data about elements without affecting the page layout<br>
                        <input type="radio" name="q6" value="B"> B) For creating custom HTML tags<br>
                        <input type="radio" name="q6" value="C"> C) For linking external stylesheets to elements<br>
                        <input type="radio" name="q6" value="D"> D) For adding event listeners to elements<br>
                    </div>
                    <div class="question" id="q7">
                        <p>7. What does the <code>crossorigin</code>attribute do when linked to a resource?</p>
                        <input type="radio" name="q7" value="A"> A) It specifies the font type for the linked resource.<br>
                        <input type="radio" name="q7" value="B"> B) It defines how the browser should handle cross-origin requests.<br>
                        <input type="radio" name="q7" value="C"> C) It allows the browser to ignore the linked resource.<br>
                        <input type="radio" name="q7" value="D"> D) It specifies the size of the linked resource.<br>
                    </div>
                    <div class="question" id="q8">
                        <p>8. Which attribute would you use to specify the character encoding for a linked document?</p>

                        <input type="radio" name="q8" value="A"> A) <code>charset</code><br>
                        <input type="radio" name="q8" value="B"> B) <code>type</code><br>
                        <input type="radio" name="q8" value="C"> C) <code>media</code><br>
                        <input type="radio" name="q8" value="D"> D) <code>hreflang</code><br>
                    </div>
                    <div class="question" id="q9">
                        <p>9. Which attribute would you use to ensure that a JavaScript file is executed only after the HTML document has been fully parsed?</p>
                        <input type="radio" name="q9" value="A"> A) <code>defer</code><br>
                        <input type="radio" name="q9" value="B"> B) <code>async</code><br>
                        <input type="radio" name="q9" value="C"> C) <code>src</code>.<br>
                        <input type="radio" name="q9" value="D"> D) <code>type</code><br>
                    </div>
                    <div class="question" id="q10">
                        <p>10. What is the correct usage of the &lt;nonce&gt; attribute in the &lt;script&gt; tag?</p>
                        <input type="radio" name="q10" value="A"> A) It specifies a cryptographic nonce used for Content Security Policy (CSP3) checks.<br>
                        <input type="radio" name="q10" value="B"> B) It sets the character encoding for the JavaScript file.<br>
                        <input type="radio" name="q10" value="C"> C) It makes the JavaScript code execute asynchronously.<br>
                        <input type="radio" name="q10" value="D"> D)  It defines the MIME type for the script.<br>
                    </div>
                </form>
                <button type="button" class="check-button" onclick="checkAnswers()">Check Answers</button>
            </section>
            </section>
            
            
        </div>
    </div>
</body>
<script>
    window.onload = function() {
    // Popup and collapsible functionality
    const openPopupBtn = document.querySelector("#open-popup");
    const closePopupBtn = document.querySelector(".popup .close-btn");

    if (openPopupBtn) {
        openPopupBtn.addEventListener("click", function(e) {
            e.preventDefault();
        document.body.classList.add("active-popup");
        });
    }

    if (closePopupBtn) {
        closePopupBtn.addEventListener("click", function() {
            document.body.classList.remove("active-popup");
        });
    }

    window.addEventListener("click", function(e) {
    if (e.target.classList.contains("popup")) {
            document.body.classList.remove("active-popup");
        }
    });

    // Collapsible functionality and default content display based on module
    const collapsibleButtons = document.querySelectorAll(".collapsible");
    const content1 = document.getElementById("content1"); // Reference to Module 1 default content

    // Initially hide all content sections and display content1 for Module 1
    const contentSections = document.querySelectorAll(".content");
    contentSections.forEach(section => section.style.display = "none");
    content1.style.display = "block"; // Show Module 1 content by default

    collapsibleButtons.forEach(button => {
    button.addEventListener("click", function() {
        // Toggle the collapsible button
        this.classList.toggle("active");
        const content = this.nextElementSibling;
        content.style.display = content.style.display === "block" ? "none" : "block";

        // Hide all content sections initially
        contentSections.forEach(section => section.style.display = "none");

        const module = this.getAttribute("data-module");
        if (module === "module1") {
                content1.style.display = "block"; // Show Module 1 content
            } else if (module === "module2") {
                document.getElementById("content-Using a setter-or getter to-implement a-constraint").style.display = "block"; // Show Module 2 content
            } else if (module === "module3") {
                // Show Module 3 default content (Superglobal Variables)
                const superglobalContent = document.getElementById("content-Dereferencing");
                superglobalContent.style.display = "block";
            }
        });
    });

    // Content toggle based on link clicks in Module 3
    const links = document.querySelectorAll(".module-content ul li a");

    links.forEach(link => {
        link.addEventListener("click", function(e) {
            e.preventDefault();

            // Hide all content sections initially
            contentSections.forEach(section => section.style.display = "none");

            // Show the content based on the link's data-target attribute
            const targetContentId = this.getAttribute("data-target");
            const targetContent = document.getElementById(targetContentId);
            if (targetContent) {
                targetContent.style.display = "block"; // Display the specific content
            }
        });
    });
};


</script>
</html>
