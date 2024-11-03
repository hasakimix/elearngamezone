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
    max-height: 100vh; /* Full viewport height */
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

 table {
            width: 100%;
            border-collapse: collapse;
            margin: 10px 0;
}
th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
}

</style>
      <!-- Main Content Section -->
        <div class="main-content">
            <!-- Left Sidebar -->
            <aside class="sidebar">
                <button class="back-btn">&larr;</button>
                <div class="module">
                    <button class="collapsible"data-module='module1'>Module 1: Introduction of Java</button>
                    <div class="module-content">
                        <ul>
                            <li><a href="#"data-target='content-JavaScript-Where To'>JavaScript Where To</a></li>
                            <li><a href="#"data-target='content-JavaScript-Output'>JavaScript Output</a></li>
                            <li><a href="#"data-target='content-JavaScript-Statements'>JavaScript Statements</a></li>
                            <li><a href="#"data-target='content-JavaScript-Syntax'>JavaScript Syntax</a></li>
                            <li><a href="#"data-target='content-JavaScript-Comments'>JavaScript Comments</a></li>
                        </ul>
                    </div>
                </div>
                <div class="module">
                    <button class="collapsible"data-module='module2'>Module 2: JavaScript Variables</button>
                    <div class="module-content">
                        <ul>
                            <li><a href="#" data-target='content-JavaScript-Variables'>JavaScript Variables</a></li>
                            <li><a href="#" data-target='content-JavaScript-Let'>JavaScript Let</a></li>
                            <li><a href="#" data-target='content-JavaScript-Const'>JavaScript Const</a></li>
                            <li><a href="#" data-target='content-JavaScript-Operators'>JavaScript Operators</a></li>
                            <li><a href="#" data-target='content-JavaScript-Arithmetic'>JavaScript Arithmetic</a></li>
                        </ul>
                    </div>
                </div>
                <div class="module">
                    <button class="collapsible"data-module='module3'>Module 3: JavaScript Data Types</button>
                    <div class="module-content">
                        <ul>
                            <li><a href="#" data-target='content-JavaScript-Data-Types'>JavaScript Data Types</a></li>
                            <li><a href="#" data-target='content-JavaScript-Assignment'>JavaScript Assignment</a></li>
                            <li><a href="#" data-target='content-JavaScript-Functions'>JavaScript Functions</a></li>
                            <li><a href="#" data-target='content-JavaScript-Objects'>JavaScript Objects</a></li>
                            <li><a href="#" data-target='content-JavaScript-Object-Properties'>JavaScript Object Properties</a></li>
                        </ul>
                    </div>
                </div>
            </aside>
            

            <!-- Content Section -->
            
            <section id="content1" class="content" style="display: none;">
           <h1>JavaScript Can Change HTML Content</h1>
    <p>One of many JavaScript HTML methods is <code>getElementById()</code>.</p>
    <p>The example below "finds" an HTML element (with id="demo"), and changes the element content (innerHTML) to "Hello JavaScript":</p>
    <pre>
document.getElementById("demo").innerHTML = "Hello JavaScript";
    </pre>

    <p>JavaScript accepts both double and single quotes:</p>
    <pre>
document.getElementById('demo').innerHTML = 'Hello JavaScript';
    </pre>

    <h2>JavaScript Can Change HTML Styles (CSS)</h2>
    <p>Changing the style of an HTML element is a variant of changing an HTML attribute:</p>
    <pre>
document.getElementById("demo").style.fontSize = "35px";
    </pre>

    <h2>JavaScript Can Hide HTML Elements</h2>
    <p>Hiding HTML elements can be done by changing the display style:</p>
    <pre>
document.getElementById("demo").style.display = "none";
    </pre>

    <h2>JavaScript Can Show HTML Elements</h2>
    <p>Showing hidden HTML elements can also be done by changing the display style:</p>
    <pre>
document.getElementById("demo").style.display = "block";
    </pre>

    <h2>Example Output</h2>
    <div id="demo">This text can be changed, hidden, or shown again.</div>
</section>
    <section id="content-JavaScript-Where To" class="content" style="display: none;">
    <h1>The <code>&lt;script&gt;</code> Tag</h1>
    <p>In HTML, JavaScript code is inserted between <code>&lt;script&gt;</code> and <code>&lt;/script&gt;</code> tags.</p>
    <p>Example:</p>
    <pre>
&lt;script&gt;
document.getElementById("demo").innerHTML = "My First JavaScript";
&lt;/script&gt;
    </pre>

    <h2>JavaScript Functions and Events</h2>
    <p>A JavaScript function is a block of JavaScript code that can be executed when "called" for.</p>
    <p>For example, a function can be called when an event occurs, like when the user clicks a button.</p>

    <h2>JavaScript in <code>&lt;head&gt;</code> or <code>&lt;body&gt;</code></h2>
    <p>You can place any number of scripts in an HTML document.</p>
    <p>Scripts can be placed in the <code>&lt;body&gt;</code>, or in the <code>&lt;head&gt;</code> section of an HTML page, or in both.</p>

    <h3>JavaScript in <code>&lt;head&gt;</code></h3>
    <p>In this example, a JavaScript function is placed in the <code>&lt;head&gt;</code> section of an HTML page.</p>
    <p>The function is invoked (called) when a button is clicked:</p>
    <pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;script&gt;
function myFunction() {
  document.getElementById("demo").innerHTML = "Paragraph changed.";
}
&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h2&gt;Demo JavaScript in Head&lt;/h2&gt;

&lt;p id="demo"&gt;A Paragraph&lt;/p&gt;
&lt;button type="button" onclick="myFunction()"&gt;Try it&lt;/button&gt;

&lt;/body&gt;
&lt;/html&gt;
    </pre>

    <h3>JavaScript in <code>&lt;body&gt;</code></h3>
    <p>In this example, a JavaScript function is placed in the <code>&lt;body&gt;</code> section of an HTML page.</p>
    <p>The function is invoked (called) when a button is clicked:</p>
    <pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;h2&gt;Demo JavaScript in Body&lt;/h2&gt;

&lt;p id="demo"&gt;A Paragraph&lt;/p&gt;

&lt;button type="button" onclick="myFunction()"&gt;Try it&lt;/button&gt;

&lt;script&gt;
function myFunction() {
  document.getElementById("demo").innerHTML = "Paragraph changed.";
}
&lt;/script&gt;

&lt;/body&gt;
&lt;/html&gt;
    </pre>

    <h2>External JavaScript</h2>
    <p>Scripts can also be placed in external files:</p>
    <p>External file: <code>myScript.js</code></p>
    <pre>
function myFunction() {
  document.getElementById("demo").innerHTML = "Paragraph changed.";
}
    </pre>
    <p>External scripts are practical when the same code is used in many different web pages.</p>
    <p>JavaScript files have the file extension <code>.js</code>.</p>
    <p>To use an external script, put the name of the script file in the <code>src</code> (source) attribute of a <code>&lt;script&gt;</code> tag:</p>
    <pre>
&lt;script src="myScript.js"&gt;&lt;/script&gt;
    </pre>

    <h2>External JavaScript Advantages</h2>
    <p>Placing scripts in external files has some advantages:</p>
    <ul>
        <li>It separates HTML and code</li>
        <li>It makes HTML and JavaScript easier to read and maintain</li>
        <li>Cached JavaScript files can speed up page loads</li>
    </ul>
    <p>To add several script files to one page - use several script tags:</p>
    <pre>
&lt;script src="myScript1.js"&gt;&lt;/script&gt;
&lt;script src="myScript2.js"&gt;&lt;/script&gt;
    </pre>

    <h2>External References</h2>
    <p>An external script can be referenced in 3 different ways:</p>
    <ul>
        <li>With a full URL (a full web address)</li>
        <li>With a file path (like <code>/js/</code>)</li>
        <li>Without any path</li>
    </ul>
    <p>This example uses a full URL to link to <code>myScript.js</code>:</p>
    <pre>
&lt;script src="https://www.w3schools.com/js/myScript.js"&gt;&lt;/script&gt;
    </pre>
    <p>This example uses a file path to link to <code>myScript.js</code>:</p>
    <pre>
&lt;script src="/js/myScript.js"&gt;&lt;/script&gt;
    </pre>
    <p>This example uses no path to link to <code>myScript.js</code>:</p>
    <pre>
&lt;script src="myScript.js"&gt;&lt;/script&gt;
    </pre>
    </section>
    <section id="content-JavaScript-Output" class="content" style="display: none;">
    <h1>JavaScript Display Possibilities</h1>
<p>JavaScript can "display" data in different ways:</p>
<ul>
    <li>Writing into an HTML element, using <code>innerHTML</code>.</li>
    <li>Writing into the HTML output using <code>document.write()</code>.</li>
    <li>Writing into an alert box, using <code>window.alert()</code>.</li>
    <li>Writing into the browser console, using <code>console.log()</code>.</li>
</ul>

<h2>Using <code>innerHTML</code></h2>
<p>To access an HTML element, JavaScript can use the <code>document.getElementById(id)</code> method.</p>
<p>The id attribute defines the HTML element. The innerHTML property defines the HTML content:</p>

<h3>Example</h3>
<pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;h1&gt;My First Web Page&lt;/h1&gt;
&lt;p&gt;My First Paragraph&lt;/p&gt;

&lt;p id="demo"&gt;&lt;/p&gt;

&lt;script&gt;
document.getElementById("demo").innerHTML = 5 + 6;
&lt;/script&gt;

&lt;/body&gt;
&lt;/html&gt;
</pre>

<p>Changing the <code>innerHTML</code> property of an HTML element is a common way to display data in HTML.</p>

<h2>Using <code>document.write()</code></h2>
<p>For testing purposes, it is convenient to use <code>document.write()</code>:</p>

<h3>Example</h3>
<pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;h1&gt;My First Web Page&lt;/h1&gt;
&lt;p&gt;My first paragraph.&lt;/p&gt;

&lt;script&gt;
document.write(5 + 6);
&lt;/script&gt;

&lt;/body&gt;
&lt;/html&gt;
</pre>

<p>Using <code>document.write()</code> after an HTML document is loaded will delete all existing HTML:</p>

<h3>Example</h3>
<pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;h1&gt;My First Web Page&lt;/h1&gt;
&lt;p&gt;My first paragraph.&lt;/p&gt;

&lt;button type="button" onclick="document.write(5 + 6)"&gt;Try it&lt;/button&gt;

&lt;/body&gt;
&lt;/html&gt;
</pre>

<p>The <code>document.write()</code> method should only be used for testing.</p>

<h2>Using <code>window.alert()</code></h2>
<p>You can use an alert box to display data:</p>

<h3>Example</h3>
<pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;h1&gt;My First Web Page&lt;/h1&gt;
&lt;p&gt;My first paragraph.&lt;/p&gt;

&lt;script&gt;
window.alert(5 + 6);
&lt;/script&gt;

&lt;/body&gt;
&lt;/html&gt;
</pre>

<p>You can skip the window keyword.</p>

<h2>Using <code>console.log()</code></h2>
<p>For debugging purposes, you can call the <code>console.log()</code> method in the browser to display data.</p>

<h3>Example</h3>
<pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;script&gt;
console.log(5 + 6);
&lt;/script&gt;

&lt;/body&gt;
&lt;/html&gt;
</pre>

<h2>JavaScript Print</h2>
<p>JavaScript does not have any print object or print methods.</p>
<p>The only exception is that you can call the <code>window.print()</code> method in the browser to print the content of the current window.</p>

<h3>Example</h3>
<pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;button onclick="window.print()"&gt;Print this page&lt;/button&gt;

&lt;/body&gt;
&lt;/html&gt;
</pre>
    </section>
    <section id="content-JavaScript-Statements" class="content" style="display: none;">
    <h1>JavaScript Statements</h1>

<h2>Example</h2>
<pre>
let x, y, z;    // Statement 1
x = 5;          // Statement 2
y = 6;          // Statement 3
z = x + y;      // Statement 4
</pre>

<h2>JavaScript Programs</h2>
<p>A computer program is a list of "instructions" to be "executed" by a computer.</p>
<p>In a programming language, these programming instructions are called statements.</p>
<p>A JavaScript program is a list of programming statements.</p>
<p>In HTML, JavaScript programs are executed by the web browser.</p>

<h2>JavaScript Statements</h2>
<p>JavaScript statements are composed of:</p>
<ul>
    <li>Values, Operators, Expressions, Keywords, and Comments.</li>
</ul>
<p>This statement tells the browser to write "Hello Dolly." inside an HTML element with id="demo":</p>
<pre>
document.getElementById("demo").innerHTML = "Hello Dolly.";
</pre>
<p>Most JavaScript programs contain many JavaScript statements.</p>
<p>The statements are executed, one by one, in the same order as they are written.</p>
<p>JavaScript programs (and JavaScript statements) are often called JavaScript code.</p>

<h2>Semicolons ;</h2>
<p>Semicolons separate JavaScript statements.</p>
<p>Add a semicolon at the end of each executable statement:</p>
<pre>
let a, b, c;  // Declare 3 variables
a = 5;        // Assign the value 5 to a
b = 6;        // Assign the value 6 to b
c = a + b;    // Assign the sum of a and b to c
</pre>
<p>When separated by semicolons, multiple statements on one line are allowed:</p>
<pre>
a = 5; b = 6; c = a + b;
</pre>
<p>On the web, you might see examples without semicolons. Ending statements with a semicolon is not required, but highly recommended.</p>

<h2>JavaScript White Space</h2>
<p>JavaScript ignores multiple spaces. You can add white space to your script to make it more readable.</p>
<p>The following lines are equivalent:</p>
<pre>
let person = "Hege";
let person="Hege";
</pre>
<p>A good practice is to put spaces around operators ( = + - * / ): </p>
<pre>
let x = y + z;
</pre>

<h2>JavaScript Line Length and Line Breaks</h2>
<p>For best readability, programmers often like to avoid code lines longer than 80 characters.</p>
<p>If a JavaScript statement does not fit on one line, the best place to break it is after an operator:</p>
<pre>
document.getElementById("demo").innerHTML =
"Hello Dolly!";
</pre>

<h2>JavaScript Code Blocks</h2>
<p>JavaScript statements can be grouped together in code blocks, inside curly brackets {...}.</p>
<p>The purpose of code blocks is to define statements to be executed together.</p>
<p>One place you will find statements grouped together in blocks is in JavaScript functions:</p>
<pre>
function myFunction() {
  document.getElementById("demo1").innerHTML = "Hello Dolly!";
  document.getElementById("demo2").innerHTML = "How are you?";
}
</pre>
<p>In this tutorial, we use 2 spaces of indentation for code blocks. You will learn more about functions later in this tutorial.</p>

<h2>JavaScript Keywords</h2>
<p>JavaScript statements often start with a keyword to identify the JavaScript action to be performed.</p>
<p>Here is a list of some of the keywords you will learn about in this tutorial:</p>
<table border="1" style="border-collapse: collapse; width: 100%;">
    <thead>
        <tr>
            <th>Keyword</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>var</td>
            <td>Declares a variable</td>
        </tr>
        <tr>
            <td>let</td>
            <td>Declares a block variable</td>
        </tr>
        <tr>
            <td>const</td>
            <td>Declares a block constant</td>
        </tr>
        <tr>
            <td>if</td>
            <td>Marks a block of statements to be executed on a condition</td>
        </tr>
        <tr>
            <td>switch</td>
            <td>Marks a block of statements to be executed in different cases</td>
        </tr>
        <tr>
            <td>for</td>
            <td>Marks a block of statements to be executed in a loop</td>
        </tr>
        <tr>
            <td>function</td>
            <td>Declares a function</td>
        </tr>
        <tr>
            <td>return</td>
            <td>Exits a function</td>
        </tr>
        <tr>
            <td>try</td>
            <td>Implements error handling to a block of statements</td>
        </tr>
    </tbody>
</table>
<p>JavaScript keywords are reserved words. Reserved words cannot be used as names for variables.</p>
    </section>
    <section id="content-JavaScript-Syntax" class="content" style="display: none;">
    <h1>JavaScript Syntax</h1>

<h2>Creating Variables</h2>
<pre>
// How to create variables:
var x;
let y;

// How to use variables:
x = 5;
y = 6;
let z = x + y;
</pre>

<h2>JavaScript Values</h2>
<p>The JavaScript syntax defines two types of values:</p>
<ul>
    <li>Fixed values</li>
    <li>Variable values</li>
</ul>
<p>Fixed values are called <strong>Literals</strong>.</p>

<h2>JavaScript Literals</h2>
<p>The two most important syntax rules for fixed values are:</p>
<ol>
    <li>Numbers are written with or without decimals:</li>
    <pre>10.50</pre>
    <pre>1001</pre>

    <li>Strings are text, written within double or single quotes:</li>
    <pre>"John Doe"</pre>
    <pre>'John Doe'</pre>
</ol>

<h2>JavaScript Variables</h2>
<p>In a programming language, variables are used to store data values.</p>
<p>JavaScript uses the keywords <code>var</code>, <code>let</code>, and <code>const</code> to declare variables.</p>
<p>An equal sign is used to assign values to variables. For example:</p>
<pre>
let x;
x = 6;
</pre>

<h2>JavaScript Operators</h2>
<p>JavaScript uses arithmetic operators (<code> + - * / </code>) to compute values:</p>
<pre>(5 + 6) * 10</pre>

<p>JavaScript uses an assignment operator (<code>=</code>) to assign values to variables:</p>
<pre>
let x, y;
x = 5;
y = 6;
</pre>

<h2>JavaScript Expressions</h2>
<p>An expression is a combination of values, variables, and operators, which computes to a value. For example:</p>
<pre>5 * 10</pre>

<p>Expressions can also contain variable values:</p>
<pre>x * 10</pre>

<p>The values can be of various types, such as numbers and strings:</p>
<pre>"John" + " " + "Doe"</pre>

<h2>JavaScript Keywords</h2>
<p>JavaScript keywords are used to identify actions to be performed. For example:</p>
<pre>
let x, y;
x = 5 + 6;
y = x * 10;
</pre>

<h2>JavaScript Comments</h2>
<p>Not all JavaScript statements are "executed". Code after double slashes <code>//</code> or between <code>/*</code> and <code>*/</code> is treated as a comment:</p>
<pre>
let x = 5;   // I will be executed

// x = 6;   I will NOT be executed
</pre>

<h2>JavaScript Identifiers / Names</h2>
<p>Identifiers are JavaScript names used to name variables and functions. The rules for legal names are:</p>
<ul>
    <li>A JavaScript name must begin with:</li>
    <ul>
        <li>A letter (A-Z or a-z)</li>
        <li>A dollar sign ($)</li>
        <li>An underscore (_)</li>
    </ul>
    <li>Subsequent characters may be letters, digits, underscores, or dollar signs.</li>
    <li>Numbers are not allowed as the first character in names.</li>
</ul>

<h2>JavaScript is Case Sensitive</h2>
<p>All JavaScript identifiers are case sensitive. For example:</p>
<pre>
let lastname, lastName;
lastName = "Doe";
lastname = "Peterson";
</pre>

<h2>JavaScript and Camel Case</h2>
<p>JavaScript programmers tend to use camel case that starts with a lowercase letter:</p>
<pre>
firstName, lastName, masterCard, interCity.
</pre>

<h2>JavaScript Character Set</h2>
<p>JavaScript uses the Unicode character set.</p>

    </section>
    <section id="content-JavaScript-Comments" class="content" style="display: none;">
    <h1>JavaScript Comments</h1>

<p>JavaScript comments can be used to explain JavaScript code, and to make it more readable.</p>
<p>They can also be used to prevent execution, when testing alternative code.</p>

<h2>Single Line Comments</h2>
<p>Single line comments start with <code>//</code>.</p>
<p>Any text between <code>//</code> and the end of the line will be ignored by JavaScript (will not be executed).</p>

<p>This example uses a single-line comment before each code line:</p>
<pre>
// Change heading:
document.getElementById("myH").innerHTML = "My First Page";

// Change paragraph:
document.getElementById("myP").innerHTML = "My first paragraph.";
</pre>

<p>This example uses a single line comment at the end of each line to explain the code:</p>
<pre>
let x = 5;      // Declare x, give it the value of 5
let y = x + 2;  // Declare y, give it the value of x + 2
</pre>

<h2>Multi-line Comments</h2>
<p>Multi-line comments start with <code>/*</code> and end with <code>*/</code>.</p>
<p>Any text between <code>/*</code> and <code>*/</code> will be ignored by JavaScript.</p>

<p>This example uses a multi-line comment (a comment block) to explain the code:</p>
<pre>
/*
The code below will change
the heading with id = "myH"
and the paragraph with id = "myP"
in my web page:
*/
document.getElementById("myH").innerHTML = "My First Page";
document.getElementById("myP").innerHTML = "My first paragraph.";
</pre>

<p>It is most common to use single line comments. Block comments are often used for formal documentation.</p>

<h2>Using Comments to Prevent Execution</h2>
<p>Using comments to prevent execution of code is suitable for code testing.</p>
<p>Adding <code>//</code> in front of a code line changes the code line from an executable line to a comment.</p>

<p>This example uses <code>//</code> to prevent execution of one of the code lines:</p>
<pre>
//document.getElementById("myH").innerHTML = "My First Page";
document.getElementById("myP").innerHTML = "My first paragraph.";
</pre>

<p>This example uses a comment block to prevent execution of multiple lines:</p>
<pre>
/*
document.getElementById("myH").innerHTML = "My First Page";
document.getElementById("myP").innerHTML = "My first paragraph.";
*/
    </section>

        <!-- Content Sections for Module 2 -->
        <section id="content-JavaScript-Variables" class="content" style="display: none;">
    <h1>JavaScript Variables</h1>
<p>Variables are containers for storing data.</p>
<p>JavaScript Variables can be declared in 4 ways:</p>
<ul>
    <li>Automatically</li>
    <li>Using var</li>
    <li>Using let</li>
    <li>Using const</li>
</ul>
<p>In this first example, x, y, and z are undeclared variables. They are automatically declared when first used:</p>
<pre>
x = 5;
y = 6;
z = x + y;
</pre>
<p><strong>Note:</strong> It is considered good programming practice to always declare variables before use.</p>
<p>From the examples you can guess:</p>
<ul>
    <li>x stores the value 5</li>
    <li>y stores the value 6</li>
    <li>z stores the value 11</li>
</ul>

<h2>Example using var</h2>
<pre>
var x = 5;
var y = 6;
var z = x + y;
</pre>
<p><strong>Note:</strong> The var keyword was used in all JavaScript code from 1995 to 2015.</p>

<h2>Example using let</h2>
<pre>
let x = 5;
let y = 6;
let z = x + y;
</pre>

<h2>Example using const</h2>
<pre>
const x = 5;
const y = 6;
const z = x + y;
</pre>

<h2>Mixed Example</h2>
<pre>
const price1 = 5;
const price2 = 6;
let total = price1 + price2;
</pre>
<p>The two variables price1 and price2 are declared with the const keyword. These are constant values and cannot be changed. The variable total is declared with the let keyword. The value total can be changed.</p>

<h2>When to Use var, let, or const?</h2>
<ol>
    <li>Always declare variables</li>
    <li>Always use const if the value should not be changed</li>
    <li>Always use const if the type should not be changed (Arrays and Objects)</li>
    <li>Only use let if you can't use const</li>
    <li>Only use var if you MUST support old browsers.</li>
</ol>

<h2>Just Like Algebra</h2>
<p>Just like in algebra, variables hold values:</p>
<pre>
let x = 5;
let y = 6;
</pre>
<p>Just like in algebra, variables are used in expressions:</p>
<pre>
let z = x + y;
</pre>

<h2>JavaScript Identifiers</h2>
<p>All JavaScript variables must be identified with unique names. These unique names are called identifiers.</p>
<p>The general rules for constructing names for variables (unique identifiers) are:</p>
<ul>
    <li>Names can contain letters, digits, underscores, and dollar signs.</li>
    <li>Names must begin with a letter.</li>
    <li>Names can also begin with $ and _.</li>
    <li>Names are case sensitive (y and Y are different variables).</li>
    <li>Reserved words (like JavaScript keywords) cannot be used as names.</li>
</ul>

<h2>The Assignment Operator</h2>
<p>In JavaScript, the equal sign (=) is an "assignment" operator, not an "equal to" operator.</p>
<p>This is different from algebra.</p>
<pre>
x = x + 5
</pre>
<p>In JavaScript, however, it makes perfect sense: it assigns the value of x + 5 to x.</p>

<h2>JavaScript Data Types</h2>
<p>JavaScript variables can hold numbers like 100 and text values like "John Doe". In programming, text values are called text strings.</p>
<pre>
const pi = 3.14;
let person = "John Doe";
let answer = 'Yes I am!';
</pre>

<h2>Declaring a JavaScript Variable</h2>
<p>Creating a variable in JavaScript is called "declaring" a variable.</p>
<pre>
var carName;
let carName;
</pre>

<h2>Value = undefined</h2>
<p>In computer programs, variables are often declared without a value. The value can be something that has to be calculated, or something that will be provided later, like user input.</p>

<h2>Re-Declaring JavaScript Variables</h2>
<p>If you re-declare a JavaScript variable declared with var, it will not lose its value.</p>

<h2>JavaScript Arithmetic</h2>
<p>As with algebra, you can do arithmetic with JavaScript variables, using operators like = and +:</p>
<pre>
let x = 5 + 2 + 3;
</pre>

<h2>JavaScript Dollar Sign $</h2>
<p>Since JavaScript treats a dollar sign as a letter, identifiers containing $ are valid variable names:</p>
<pre>
let $ = "Hello World";
let $$$ = 2;
let $myMoney = 5;
</pre>

<h2>JavaScript Underscore (_)</h2>
<p>Since JavaScript treats underscore as a letter, identifiers containing _ are valid variable names:</p>
<pre>
let _lastName = "Johnson";
let _x = 2;
let _100 = 5;
</pre>
    </section>
    <section id="content-JavaScript-Let" class="content" style="display: none;">
    <h1>JavaScript Let</h1>
            <p>The let keyword was introduced in ES6 (2015).</p>
            <p>Variables declared with let have Block Scope.</p>
            <p>Variables declared with let must be Declared before use.</p>
            <p>Variables declared with let cannot be Redeclared in the same scope.</p>

            <h2>Block Scope</h2>
            <p>Before ES6 (2015), JavaScript did not have Block Scope.</p>
            <p>JavaScript had Global Scope and Function Scope.</p>
            <p>ES6 introduced the two new JavaScript keywords: let and const.</p>
            <p>These two keywords provided Block Scope in JavaScript:</p>
            <pre>
{
  let x = 2;
}
// x can NOT be used here
            </pre>

            <h2>Global Scope</h2>
            <p>Variables declared with the var always have Global Scope.</p>
            <p>Variables declared with the var keyword can NOT have block scope:</p>
            <pre>
{
  var x = 2;
}
// x CAN be used here
            </pre>

            <h2>Cannot be Redeclared</h2>
            <p>Variables defined with let can not be redeclared.</p>
            <p>You can not accidentally redeclare a variable declared with let.</p>
            <pre>
let x = "John Doe";
let x = 0; // Not allowed
            </pre>
            <p>Variables defined with var can be redeclared:</p>
            <pre>
var x = "John Doe";
var x = 0; // Allowed
            </pre>

            <h2>Difference Between var, let and const</h2>
            <table>
                <tr>
                    <th>Scope</th>
                    <th>Redeclare</th>
                    <th>Reassign</th>
                    <th>Hoisted</th>
                    <th>Binds this</th>
                </tr>
                <tr>
                    <td>var</td>
                    <td>No</td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>let</td>
                    <td>Yes</td>
                    <td>No</td>
                    <td>Yes</td>
                    <td>No</td>
                </tr>
                <tr>
                    <td>const</td>
                    <td>Yes</td>
                    <td>No</td>
                    <td>No</td>
                    <td>No</td>
                </tr>
            </table>

            <h2>What is Good?</h2>
            <ul>
                <li>let and const have block scope.</li>
                <li>let and const cannot be redeclared.</li>
                <li>let and const must be declared before use.</li>
                <li>let and const do not bind to this.</li>
                <li>let and const are not hoisted.</li>
            </ul>

            <h2>What is Not Good?</h2>
            <ul>
                <li>var does not have to be declared.</li>
                <li>var is hoisted.</li>
                <li>var binds to this.</li>
            </ul>

            <h2>Redeclaring</h2>
            <p>Redeclaring a JavaScript variable with var is allowed anywhere in a program:</p>
            <pre>
var x = 2; // Allowed
var x = 3; // Allowed
            </pre>

            <h2>With let</h2>
            <p>Redeclaring a variable in the same block is NOT allowed:</p>
            <pre>
var x = 2;   // Allowed
let x = 3;   // Not allowed
{
    let x = 2;   // Allowed
    let x = 3;   // Not allowed
}
            </pre>

            <h2>Let Hoisting</h2>
            <p>Variables defined with var are hoisted to the top and can be initialized at any time:</p>
            <pre>
carName = "Volvo";
var carName;
            </pre>
            <p>If you want to learn more about hoisting, study the chapter JavaScript Hoisting.</p>
            <p>Variables defined with let are also hoisted to the top of the block, but not initialized:</p>
            <pre>
carName = "Saab";
let carName = "Volvo"; // ReferenceError
            </pre>
    </section>
    <section id="content-JavaScript-Const" class="content" style="display: none;">
    <h1>JavaScript Const</h1>
            <p>The const keyword was introduced in ES6 (2015).</p>
            <p>Variables defined with const cannot be Redeclared.</p>
            <p>Variables defined with const cannot be Reassigned.</p>
            <p>Variables defined with const have Block Scope.</p>

            <h2>Cannot be Reassigned</h2>
            <p>A variable defined with the const keyword cannot be reassigned:</p>
            <pre>
const PI = 3.141592653589793;
PI = 3.14;      // This will give an error
PI = PI + 10;   // This will also give an error
            </pre>

            <h2>Must be Assigned</h2>
            <p>JavaScript const variables must be assigned a value when they are declared:</p>
            <pre>
const PI = 3.14159265359; // Correct
const PI; // Incorrect
PI = 3.14159265359;
            </pre>

            <h2>When to use JavaScript const?</h2>
            <p>Always declare a variable with const when you know that the value should not be changed.</p>
            <ul>
                <li>A new Array</li>
                <li>A new Object</li>
                <li>A new Function</li>
                <li>A new RegExp</li>
            </ul>

            <h2>Constant Objects and Arrays</h2>
            <p>The keyword const is a little misleading. It does not define a constant value. It defines a constant reference to a value.</p>
            <p>Because of this you can NOT:</p>
            <ul>
                <li>Reassign a constant value</li>
                <li>Reassign a constant array</li>
                <li>Reassign a constant object</li>
            </ul>
            <p>But you CAN:</p>
            <ul>
                <li>Change the elements of a constant array</li>
                <li>Change the properties of a constant object</li>
            </ul>

            <h2>Constant Arrays</h2>
            <pre>
// You can create a constant array:
const cars = ["Saab", "Volvo", "BMW"];

// You can change an element:
cars[0] = "Toyota";

// You can add an element:
cars.push("Audi");
            </pre>

            <h2>But you can NOT reassign the array:</h2>
            <pre>
const cars = ["Saab", "Volvo", "BMW"];
cars = ["Toyota", "Volvo", "Audi"];    // ERROR
            </pre>

            <h2>Constant Objects</h2>
            <pre>
// You can create a const object:
const car = {type:"Fiat", model:"500", color:"white"};

// You can change a property:
car.color = "red";

// You can add a property:
car.owner = "Johnson";
            </pre>

            <h2>But you can NOT reassign the object:</h2>
            <pre>
const car = {type:"Fiat", model:"500", color:"white"};
car = {type:"Volvo", model:"EX60", color:"red"};    // ERROR
            </pre>

            <h2>Difference Between var, let and const</h2>
            <table>
                <tr>
                    <th>Scope</th>
                    <th>Redeclare</th>
                    <th>Reassign</th>
                    <th>Hoisted</th>
                    <th>Binds this</th>
                </tr>
                <tr>
                    <td>var</td>
                    <td>No</td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>let</td>
                    <td>Yes</td>
                    <td>No</td>
                    <td>Yes</td>
                    <td>No</td>
                </tr>
                <tr>
                    <td>const</td>
                    <td>Yes</td>
                    <td>No</td>
                    <td>No</td>
                    <td>No</td>
                </tr>
            </table>

            <h2>What is Good?</h2>
            <ul>
                <li>let and const have block scope.</li>
                <li>let and const cannot be redeclared.</li>
                <li>let and const must be declared before use.</li>
                <li>let and const do not bind to this.</li>
                <li>let and const are not hoisted.</li>
            </ul>

            <h2>What is Not Good?</h2>
            <ul>
                <li>var does not have to be declared.</li>
                <li>var is hoisted.</li>
                <li>var binds to this.</li>
            </ul>

            <h2>Block Scope</h2>
            <p>Declaring a variable with const is similar to let when it comes to Block Scope.</p>
            <pre>
const x = 10;
// Here x is 10
{
    const x = 2; // Here x is 2
}
// Here x is 10
            </pre>

            <h2>Redeclaring</h2>
            <pre>
var x = 2;     // Allowed
var x = 3;     // Allowed
x = 4;         // Allowed
// Redeclaring an existing var or let variable to const, in the same scope, is not allowed:
var x = 2;     // Allowed
const x = 2;   // Not allowed
            </pre>

            <h2>Hoisting</h2>
            <p>Variables defined with var are hoisted to the top and can be initialized at any time:</p>
            <pre>
carName = "Volvo";
var carName;
            </pre>
            <p>If you want to learn more about hoisting, study the chapter JavaScript Hoisting.</p>
            <p>Variables defined with const are also hoisted to the top, but not initialized:</p>
            <pre>
alert(carName); // ReferenceError
const carName = "Volvo";
            </pre>
    </section>

    <section id="content-JavaScript-Operators" class="content" style="display: none;">
    <h1>JavaScript Operators</h1>
    <p>JavaScript operators are used to perform different types of mathematical and logical computations.</p>
    
    <h2>Examples:</h2>
    <ul>
        <li>The Assignment Operator <code>=</code> assigns values</li>
        <li>The Addition Operator <code>+</code> adds values</li>
        <li>The Multiplication Operator <code>*</code> multiplies values</li>
        <li>The Comparison Operator <code>&gt;</code> compares values</li>
    </ul>

    <h2>JavaScript Assignment</h2>
    <p>The Assignment Operator (<code>=</code>) assigns a value to a variable:</p>
    <pre>
let x = 10;

// Assign the value 5 to x
let x = 5;
// Assign the value 2 to y
let y = 2;
// Assign the value x + y to z:
let z = x + y;
    </pre>

    <h2>JavaScript Addition</h2>
    <p>The Addition Operator (<code>+</code>) adds numbers:</p>
    <pre>
let x = 5;
let y = 2;
let z = x + y;
    </pre>

    <h2>JavaScript Multiplication</h2>
    <p>The Multiplication Operator (<code>*</code>) multiplies numbers:</p>
    <pre>
let x = 5;
let y = 2;
let z = x * y;
    </pre>

    <h2>Types of JavaScript Operators</h2>
    <p>There are different types of JavaScript operators:</p>
    <ul>
        <li>Arithmetic Operators</li>
        <li>Assignment Operators</li>
        <li>Comparison Operators</li>
        <li>String Operators</li>
        <li>Logical Operators</li>
        <li>Bitwise Operators</li>
        <li>Ternary Operators</li>
        <li>Type Operators</li>
    </ul>

    <h2>JavaScript Arithmetic Operators</h2>
    <p>Arithmetic Operators are used to perform arithmetic on numbers:</p>
    <pre>
let a = 3;
let x = (100 + 50) * a;
    </pre>

    <table>
        <tr>
            <th>Operator</th>
            <th>Description</th>
        </tr>
        <tr><td>+</td><td>Addition</td></tr>
        <tr><td>-</td><td>Subtraction</td></tr>
        <tr><td>*</td><td>Multiplication</td></tr>
        <tr><td>**</td><td>Exponentiation (ES2016)</td></tr>
        <tr><td>/</td><td>Division</td></tr>
        <tr><td>%</td><td>Modulus (Division Remainder)</td></tr>
        <tr><td>++</td><td>Increment</td></tr>
        <tr><td>--</td><td>Decrement</td></tr>
    </table>

    <h2>JavaScript Assignment Operators</h2>
    <p>Assignment operators assign values to JavaScript variables.</p>
    <p>The Addition Assignment Operator (<code>+=</code>) adds a value to a variable:</p>
    <pre>
let x = 10;
x += 5;
    </pre>

    <table>
        <tr>
            <th>Operator</th>
            <th>Example</th>
            <th>Same As</th>
        </tr>
        <tr><td>=</td><td>x = y</td><td>x = y</td></tr>
        <tr><td>+=</td><td>x += y</td><td>x = x + y</td></tr>
        <tr><td>-=</td><td>x -= y</td><td>x = x - y</td></tr>
        <tr><td>*=</td><td>x *= y</td><td>x = x * y</td></tr>
        <tr><td>/=</td><td>x /= y</td><td>x = x / y</td></tr>
        <tr><td>%=</td><td>x %= y</td><td>x = x % y</td></tr>
        <tr><td>**=</td><td>x **= y</td><td>x = x ** y</td></tr>
    </table>

    <h2>JavaScript Comparison Operators</h2>
    <table>
        <tr>
            <th>Operator</th>
            <th>Description</th>
        </tr>
        <tr><td>==</td><td>equal to</td></tr>
        <tr><td>===</td><td>equal value and equal type</td></tr>
        <tr><td>!=</td><td>not equal</td></tr>
        <tr><td>!==</td><td>not equal value or not equal type</td></tr>
        <tr><td>&gt;</td><td>greater than</td></tr>
        <tr><td>&lt;</td><td>less than</td></tr>
        <tr><td>&gt;=</td><td>greater than or equal to</td></tr>
        <tr><td>&lt;=</td><td>less than or equal to</td></tr>
        <tr><td>?</td><td>ternary operator</td></tr>
    </table>

    <h2>JavaScript String Comparison</h2>
    <p>All the comparison operators above can also be used on strings:</p>
    <pre>
let text1 = "A";
let text2 = "B";
let result = text1 < text2;
    </pre>
    <p>Note that strings are compared alphabetically:</p>
    <pre>
let text1 = "20";
let text2 = "5";
let result = text1 < text2;
    </pre>

    <h2>JavaScript String Addition</h2>
    <p>The <code>+</code> can also be used to add (concatenate) strings:</p>
    <pre>
let text1 = "John";
let text2 = "Doe";
let text3 = text1 + " " + text2;
    </pre>
    <p>The <code>+=</code> assignment operator can also be used to add (concatenate) strings:</p>
    <pre>
let text1 = "What a very ";
text1 += "nice day";
    </pre>
    <p>The result of text1 will be: <strong>What a very nice day</strong></p>

    <h2>Note</h2>
    <p>When used on strings, the <code>+</code> operator is called the concatenation operator.</p>

    <h2>Adding Strings and Numbers</h2>
    <pre>
let x = 5 + 5;           // 10
let y = "5" + 5;         // "55"
let z = "Hello" + 5;     // "Hello5"
    </pre>
    <p>The result of x, y, and z will be:</p>
    <ul>
        <li>x: 10</li>
        <li>y: "55"</li>
        <li>z: "Hello5"</li>
    </ul>
    <p><strong>Note:</strong> If you add a number and a string, the result will be a string!</p>

    <h2>JavaScript Logical Operators</h2>
    <table>
        <tr>
            <th>Operator</th>
            <th>Description</th>
        </tr>
        <tr><td>&&</td><td>logical and</td></tr>
        <tr><td>||</td><td>logical or</td></tr>
        <tr><td>!</td><td>logical not</td></tr>
    </table>
    <p>Note: Logical operators are fully described in the JS Comparisons chapter.</p>

    <h2>JavaScript Type Operators</h2>
    <table>
        <tr>
            <th>Operator</th>
            <th>Description</th>
        </tr>
        <tr><td>typeof</td><td>Returns the type of a variable</td></tr>
        <tr><td>instanceof</td><td>Returns true if an object is an instance of an object type</td></tr>
    </table>
    <p>Note: Type operators are fully described in the JS Type Conversion chapter.</p>

    <h2>JavaScript Bitwise Operators</h2>
    <p>Bit operators work on 32 bits numbers.</p>
    <p>Any numeric operand in the operation is converted into a 32 bit number. The result is converted back to a JavaScript number.</p>
    <table>
        <tr>
            <th>Operator</th>
            <th>Description</th>
            <th>Example</th>
            <th>Result</th>
        </tr>
        <tr><td>&</td><td>AND</td><td>5 & 1</td><td>1</td></tr>
        <tr><td>|</td><td>OR</td><td>5 | 1</td><td>5</td></tr>
        <tr><td>~</td><td>NOT</td><td>~ 5</td><td>-6</td></tr>
        <tr><td>^</td><td>XOR</td><td>5 ^ 1</td><td>4</td></tr>
        <tr><td>&lt;&lt;</td><td>left shift</td><td>5 &lt;&lt; 1</td><td>10</td></tr>
        <tr><td>&gt;&gt;</td><td>right shift</td><td>5 &gt;&gt; 1</td><td>2</td></tr>
        <tr><td>&gt;&gt;&gt;</td><td>unsigned right shift</td><td>5 &gt;&gt;&gt; 1</td><td>2</td></tr>
    </table>
    <p>The examples above uses 4 bits unsigned examples. But JavaScript uses 32-bit signed numbers. Because of this, in JavaScript, <code>~ 5</code> will not return 10. It will return -6.</p>
    </section>
    <section id="content-JavaScript-Arithmetic" class="content" style="display: none;">
    <h1>JavaScript Arithmetic</h1>
    <h2>JavaScript Arithmetic Operators</h2>
    <p>Arithmetic operators perform arithmetic on numbers (literals or variables).</p>

    <table>
        <tr>
            <th>Operator</th>
            <th>Description</th>
        </tr>
        <tr><td>+</td><td>Addition</td></tr>
        <tr><td>-</td><td>Subtraction</td></tr>
        <tr><td>*</td><td>Multiplication</td></tr>
        <tr><td>**</td><td>Exponentiation (ES2016)</td></tr>
        <tr><td>/</td><td>Division</td></tr>
        <tr><td>%</td><td>Modulus (Remainder)</td></tr>
        <tr><td>++</td><td>Increment</td></tr>
        <tr><td>--</td><td>Decrement</td></tr>
    </table>

    <h2>Arithmetic Operations</h2>
    <p>A typical arithmetic operation operates on two numbers.</p>
    <p>The two numbers can be literals:</p>
    <pre>let x = 100 + 50;</pre>
    <p>or variables:</p>
    <pre>let x = a + b;</pre>
    <p>or expressions:</p>
    <pre>let x = (100 + 50) * a;</pre>

    <h2>Operators and Operands</h2>
    <p>The numbers (in an arithmetic operation) are called operands.</p>
    <p>The operation (to be performed between the two operands) is defined by an operator.</p>
    <pre>
Operand	Operator	Operand
100	+	50
    </pre>

    <h2>Adding</h2>
    <p>The addition operator (+) adds numbers:</p>
    <pre>
let x = 5;
let y = 2;
let z = x + y;
    </pre>

    <h2>Subtracting</h2>
    <p>The subtraction operator (-) subtracts numbers.</p>
    <pre>
let x = 5;
let y = 2;
let z = x - y;
    </pre>

    <h2>Multiplying</h2>
    <p>The multiplication operator (*) multiplies numbers.</p>
    <pre>
let x = 5;
let y = 2;
let z = x * y;
    </pre>

    <h2>Dividing</h2>
    <p>The division operator (/) divides numbers.</p>
    <pre>
let x = 5;
let y = 2;
let z = x / y;
    </pre>

    <h2>Remainder</h2>
    <p>The modulus operator (%) returns the division remainder.</p>
    <pre>
let x = 5;
let y = 2;
let z = x % y;
    </pre>

    <h2>Incrementing</h2>
    <p>The increment operator (++) increments numbers.</p>
    <pre>
let x = 5;
x++;
let z = x;
    </pre>

    <h2>Decrementing</h2>
    <p>The decrement operator (--) decrements numbers.</p>
    <pre>
let x = 5;
x--;
let z = x;
    </pre>

    <h2>Exponentiation</h2>
    <p>The exponentiation operator (**) raises the first operand to the power of the second operand.</p>
    <pre>
let x = 5;
let z = x ** 2;
    </pre>

    <h2>Operator Precedence</h2>
    <p>Operator precedence describes the order in which operations are performed in an arithmetic expression.</p>
    <pre>
let x = 100 + 50 * 3;
    </pre>
    <p>Is the result of the example above the same as 150 * 3, or is it the same as 100 + 150?</p>
    <p>As in traditional school mathematics, the multiplication is done first.</p>
    <p>Multiplication (*) and division (/) have higher precedence than addition (+) and subtraction (-).</p>
    <p>And (as in school mathematics) the precedence can be changed by using parentheses.</p>
    <pre>
let x = (100 + 50) * 3;
    </pre>
    <p>When many operations have the same precedence (like addition and subtraction or multiplication and division), they are computed from left to right:</p>
    <pre>
let x = 100 + 50 - 3;
let x = 100 / 50 * 3;
    </pre>
    </section>
    <!-- Content Sections for Module 3 -->
    <section id="content-JavaScript-Data-Types" class="content" style="display: none;">
    <h1>JavaScript Data Types</h1>
    <h2>JavaScript has 8 Datatypes</h2>
    <ul>
        <li>String</li>
        <li>Number</li>
        <li>Bigint</li>
        <li>Boolean</li>
        <li>Undefined</li>
        <li>Null</li>
        <li>Symbol</li>
        <li>Object</li>
    </ul>

    <h2>The Object Datatype</h2>
    <p>The object data type can contain both built-in objects, and user-defined objects:</p>
    <p>Built-in object types can be:</p>
    <ul>
        <li>objects</li>
        <li>arrays</li>
        <li>dates</li>
        <li>maps</li>
        <li>sets</li>
        <li>intarrays</li>
        <li>floatarrays</li>
        <li>promises</li>
        <li>and more.</li>
    </ul>

    <h3>Examples</h3>
    <pre>
// Numbers:
let length = 16;
let weight = 7.5;

// Strings:
let color = "Yellow";
let lastName = "Johnson";

// Booleans
let x = true;
let y = false;

// Object:
const person = {firstName:"John", lastName:"Doe"};

// Array object:
const cars = ["Saab", "Volvo", "BMW"];

// Date object:
const date = new Date("2022-03-25");
    </pre>

    <h2>Note</h2>
    <p>A JavaScript variable can hold any type of data.</p>

    <h2>The Concept of Data Types</h2>
    <p>In programming, data types is an important concept.</p>
    <p>To be able to operate on variables, it is important to know something about the type.</p>
    <p>Without data types, a computer cannot safely solve this:</p>
    <pre>let x = 16 + "Volvo";</pre>
    <p>Does it make any sense to add "Volvo" to sixteen? Will it produce an error or will it produce a result?</p>
    <p>JavaScript will treat the example above as:</p>
    <pre>let x = "16" + "Volvo";</pre>

    <h2>Note</h2>
    <p>When adding a number and a string, JavaScript will treat the number as a string.</p>
    <pre>
let x = 16 + "Volvo";
let x = "Volvo" + 16;
    </pre>

    <h2>JavaScript evaluates expressions from left to right</h2>
    <pre>
let x = 16 + 4 + "Volvo";  // Result: 20Volvo
let x = "Volvo" + 16 + 4;  // Result: Volvo164
    </pre>
    <p>In the first example, JavaScript treats 16 and 4 as numbers, until it reaches "Volvo".</p>
    <p>In the second example, since the first operand is a string, all operands are treated as strings.</p>

    <h2>JavaScript Types are Dynamic</h2>
    <p>JavaScript has dynamic types. This means that the same variable can be used to hold different data types:</p>
    <pre>
let x;       // Now x is undefined
x = 5;       // Now x is a Number
x = "John";  // Now x is a String
    </pre>

    <h2>JavaScript Strings</h2>
    <p>A string (or a text string) is a series of characters like "John Doe".</p>
    <p>Strings are written with quotes. You can use single or double quotes:</p>
    <pre>
// Using double quotes:
let carName1 = "Volvo XC60";

// Using single quotes:
let carName2 = 'Volvo XC60';
    </pre>

    <p>You can use quotes inside a string, as long as they don't match the quotes surrounding the string:</p>
    <pre>
// Single quote inside double quotes:
let answer1 = "It's alright";

// Single quotes inside double quotes:
let answer2 = "He is called 'Johnny'";

// Double quotes inside single quotes:
let answer3 = 'He is called "Johnny"';
    </pre>

    <h2>JavaScript Numbers</h2>
    <p>All JavaScript numbers are stored as decimal numbers (floating point).</p>
    <p>Numbers can be written with, or without decimals:</p>
    <pre>
// With decimals:
let x1 = 34.00;

// Without decimals:
let x2 = 34;
    </pre>

    <h2>Exponential Notation</h2>
    <p>Extra large or extra small numbers can be written with scientific (exponential) notation:</p>
    <pre>
let y = 123e5;    // 12300000
let z = 123e-5;   // 0.00123
    </pre>

    <h2>Note</h2>
    <p>Most programming languages have many number types:</p>
    <ul>
        <li>Whole numbers (integers): byte (8-bit), short (16-bit), int (32-bit), long (64-bit)</li>
        <li>Real numbers (floating-point): float (32-bit), double (64-bit).</li>
    </ul>
    <p>Javascript numbers are always one type: double (64-bit floating point).</p>

    <h2>JavaScript BigInt</h2>
    <p>All JavaScript numbers are stored in a 64-bit floating-point format.</p>
    <p>JavaScript BigInt is a new datatype (ES2020) that can be used to store integer values that are too big to be represented by a normal JavaScript Number.</p>
    <pre>let x = BigInt("123456789012345678901234567890");</pre>

    <h2>JavaScript Booleans</h2>
    <p>Booleans can only have two values: true or false.</p>
    <pre>
let x = 5;
let y = 5;
let z = 6;
(x == y)       // Returns true
(x == z)       // Returns false
    </pre>
    <p>Booleans are often used in conditional testing.</p>

    <h2>JavaScript Arrays</h2>
    <p>JavaScript arrays are written with square brackets.</p>
    <p>Array items are separated by commas.</p>
    <pre>const cars = ["Saab", "Volvo", "BMW"];</pre>
    <p>Array indexes are zero-based, which means the first item is [0], second is [1], and so on.</p>

    <h2>JavaScript Objects</h2>
    <p>JavaScript objects are written with curly braces {}.</p>
    <p>Object properties are written as name:value pairs, separated by commas.</p>
    <pre>const person = {firstName:"John", lastName:"Doe", age:50, eyeColor:"blue"};</pre>
    <p>The object (person) in the example above has 4 properties: firstName, lastName, age, and eyeColor.</p>

    <h2>The typeof Operator</h2>
    <p>You can use the JavaScript typeof operator to find the type of a JavaScript variable.</p>
    <p>The typeof operator returns the type of a variable or an expression:</p>
    <pre>
typeof ""             // Returns "string"
typeof "John"         // Returns "string"
typeof "John Doe"     // Returns "string"
typeof 0              // Returns "number"
typeof 314            // Returns "number"
typeof 3.14           // Returns "number"
typeof (3)            // Returns "number"
typeof (3 + 4)        // Returns "number"
    </pre>

    <h2>Undefined</h2>
    <p>In JavaScript, a variable without a value has the value undefined. The type is also undefined.</p>
    <pre>let car;    // Value is undefined, type is undefined</pre>

    <h2>Any variable can be emptied</h2>
    <p>By setting the value to undefined. The type will also be undefined.</p>
    <pre>car = undefined;    // Value is undefined, type is undefined</pre>

    <h2>Empty Values</h2>
    <p>An empty value has nothing to do with undefined.</p>
    <p>An empty string has both a legal value and a type.</p>
    <pre>let car = "";    // The value is "", the typeof is "string"</pre>

    </section>
    <section id="content-JavaScript-Assignment" class="content" style="display: none;">
    <h1>JavaScript Assignment</h1>

<h2>JavaScript Assignment Operators</h2>
<p>Assignment operators assign values to JavaScript variables.</p>
<table>
    <tr>
        <th>Operator</th>
        <th>Example</th>
        <th>Same As</th>
    </tr>
    <tr>
        <td>=</td>
        <td>x = y</td>
        <td>x = y</td>
    </tr>
    <tr>
        <td>+=</td>
        <td>x += y</td>
        <td>x = x + y</td>
    </tr>
    <tr>
        <td>-=</td>
        <td>x -= y</td>
        <td>x = x - y</td>
    </tr>
    <tr>
        <td>*=</td>
        <td>x *= y</td>
        <td>x = x * y</td>
    </tr>
    <tr>
        <td>/=</td>
        <td>x /= y</td>
        <td>x = x / y</td>
    </tr>
    <tr>
        <td>%=</td>
        <td>x %= y</td>
        <td>x = x % y</td>
    </tr>
    <tr>
        <td>**=</td>
        <td>x **= y</td>
        <td>x = x ** y</td>
    </tr>
</table>

<h2>Shift Assignment Operators</h2>
<table>
    <tr>
        <th>Operator</th>
        <th>Example</th>
        <th>Same As</th>
    </tr>
    <tr>
        <td>&lt;&lt;=</td>
        <td>x &lt;&lt;= y</td>
        <td>x = x &lt;&lt; y</td>
    </tr>
    <tr>
        <td>&gt;&gt;=</td>
        <td>x &gt;&gt;= y</td>
        <td>x = x &gt;&gt; y</td>
    </tr>
    <tr>
        <td>&gt;&gt;&gt;=</td>
        <td>x &gt;&gt;&gt;= y</td>
        <td>x = x &gt;&gt;&gt; y</td>
    </tr>
</table>

<h2>Bitwise Assignment Operators</h2>
<table>
    <tr>
        <th>Operator</th>
        <th>Example</th>
        <th>Same As</th>
    </tr>
    <tr>
        <td>&amp;=</td>
        <td>x &amp;= y</td>
        <td>x = x &amp; y</td>
    </tr>
    <tr>
        <td>^=</td>
        <td>x ^= y</td>
        <td>x = x ^ y</td>
    </tr>
    <tr>
        <td>|=</td>
        <td>x |= y</td>
        <td>x = x | y</td>
    </tr>
</table>

<h2>Logical Assignment Operators</h2>
<table>
    <tr>
        <th>Operator</th>
        <th>Example</th>
        <th>Same As</th>
    </tr>
    <tr>
        <td>&&=</td>
        <td>x &&= y</td>
        <td>x = x && (x = y)</td>
    </tr>
    <tr>
        <td>||=</td>
        <td>x ||= y</td>
        <td>x = x || (x = y)</td>
    </tr>
    <tr>
        <td>??=</td>
        <td>x ??= y</td>
        <td>x = x ?? (x = y)</td>
    </tr>
</table>

<h2>The = Operator</h2>
<p>The Simple Assignment Operator assigns a value to a variable.</p>
<h3>Simple Assignment Examples</h3>
<pre>let x = 10;</pre>
<pre>let x = 10 + y;</pre>

<h2>The += Operator</h2>
<p>The Addition Assignment Operator adds a value to a variable.</p>
<h3>Addition Assignment Examples</h3>
<pre>let x = 10; x += 5;</pre>
<pre>let text = "Hello"; text += " World";</pre>

<h2>The -= Operator</h2>
<p>The Subtraction Assignment Operator subtracts a value from a variable.</p>
<h3>Subtraction Assignment Example</h3>
<pre>let x = 10; x -= 5;</pre>

<h2>The *= Operator</h2>
<p>The Multiplication Assignment Operator multiplies a variable.</p>
<h3>Multiplication Assignment Example</h3>
<pre>let x = 10; x *= 5;</pre>

<h2>The **= Operator</h2>
<p>The Exponentiation Assignment Operator raises a variable to the power of the operand.</p>
<h3>Exponentiation Assignment Example</h3>
<pre>let x = 10; x **= 5;</pre>

<h2>The /= Operator</h2>
<p>The Division Assignment Operator divides a variable.</p>
<h3>Division Assignment Example</h3>
<pre>let x = 10; x /= 5;</pre>

<h2>The %= Operator</h2>
<p>The Remainder Assignment Operator assigns a remainder to a variable.</p>
<h3>Remainder Assignment Example</h3>
<pre>let x = 10; x %= 5;</pre>

<h2>The <<= Operator</h2>
<p>The Left Shift Assignment Operator left shifts a variable.</p>
<h3>Left Shift Assignment Example</h3>
<pre>let x = -100; x <<= 5;</pre>

<h2>The >>= Operator</h2>
<p>The Right Shift Assignment Operator right shifts a variable (signed).</p>
<h3>Right Shift Assignment Example</h3>
<pre>let x = -100; x >>= 5;</pre>

<h2>The >>>= Operator</h2>
<p>The Unsigned Right Shift Assignment Operator right shifts a variable (unsigned).</p>
<h3>Unsigned Right Shift Assignment Example</h3>
<pre>let x = -100; x >>>= 5;</pre>

<h2>The &= Operator</h2>
<p>The Bitwise AND Assignment Operator does a bitwise AND operation on two operands and assigns the result to the variable.</p>
<h3>Bitwise AND Assignment Example</h3>
<pre>let x = 10; x &= 5;</pre>

<h2>The |= Operator</h2>
<p>The Bitwise OR Assignment Operator does a bitwise OR operation on two operands and assigns the result to the variable.</p>
<h3>Bitwise OR Assignment Example</h3>
<pre>let x = 10; x |= 5;</pre>

<h2>The ^= Operator</h2>
<p>The Bitwise XOR Assignment Operator does a bitwise XOR operation on two operands and assigns the result to the variable.</p>
<h3>Bitwise XOR Assignment Example</h3>
<pre>let x = 10; x ^= 5;</pre>

<h2>The &&= Operator</h2>
<p>The Logical AND assignment operator is used between two values.</p>
<h3>Logical AND Assignment Example</h3>
<pre>let x = 10; x &&= 5;</pre>

<h2>The ||= Operator</h2>
<p>The Logical OR assignment operator is used between two values.</p>
<h3>Logical OR Assignment Example</h3>
<pre>let x = 10; x ||= 5;</pre>

<h2>The ??= Operator</h2>
<p>The Nullish coalescing assignment operator is used between two values.</p>
<h3>Nullish Coalescing Assignment Example</h3>
<pre>let x; x ??= 5;</pre>
    </section>
    <section id="content-JavaScript-Functions" class="content" style="display: none;">
    <h1>JavaScript Functions</h1>
    <p>A JavaScript function is a block of code designed to perform a particular task.</p>
    <p>A JavaScript function is executed when "something" invokes it (calls it).</p>

    <h2>Example</h2>
    <pre>
// Function to compute the product of p1 and p2
function myFunction(p1, p2) {
  return p1 * p2;
}</pre>

    <h2>JavaScript Function Syntax</h2>
    <p>A JavaScript function is defined with the <code>function</code> keyword, followed by a name, followed by parentheses <code>()</code>.</p>
    <p>Function names can contain letters, digits, underscores, and dollar signs (same rules as variables).</p>
    <p>The parentheses may include parameter names separated by commas:</p>
    <pre>(parameter1, parameter2, ...)</pre>
    <p>The code to be executed, by the function, is placed inside curly brackets:</p>
    <pre>
function name(parameter1, parameter2, parameter3) {
  // code to be executed
}</pre>

    <h2>Function Parameters and Arguments</h2>
    <p>Function parameters are listed inside the parentheses <code>()</code> in the function definition.</p>
    <p>Function arguments are the values received by the function when it is invoked.</p>
    <p>Inside the function, the arguments (the parameters) behave as local variables.</p>

    <h2>Function Invocation</h2>
    <p>The code inside the function will execute when "something" invokes (calls) the function:</p>
    <ul>
        <li>When an event occurs (when a user clicks a button)</li>
        <li>When it is invoked (called) from JavaScript code</li>
        <li>Automatically (self-invoked)</li>
    </ul>

    <h2>Function Return</h2>
    <p>When JavaScript reaches a <code>return</code> statement, the function will stop executing.</p>
    <p>If the function was invoked from a statement, JavaScript will "return" to execute the code after the invoking statement.</p>
    <p>Functions often compute a return value. The return value is "returned" back to the "caller":</p>
    <pre>
// Function is called, the return value will end up in x
let x = myFunction(4, 3);

function myFunction(a, b) {
  // Function returns the product of a and b
  return a * b;
}</pre>

    <h2>Why Functions?</h2>
    <p>With functions you can reuse code.</p>
    <p>You can write code that can be used many times.</p>
    <p>You can use the same code with different arguments, to produce different results.</p>

    <h2>The () Operator</h2>
    <p>The <code>()</code> operator invokes (calls) the function:</p>
    <h3>Example</h3>
    <pre>function toCelsius(fahrenheit) {
  return (5/9) * (fahrenheit-32);
}

let value = toCelsius(77);</pre>

    <h2>Accessing a Function with Incorrect Parameters</h2>
    <pre>function toCelsius(fahrenheit) {
  return (5/9) * (fahrenheit-32);
}

let value = toCelsius();</pre>

    <h2>Accessing a Function without ()</h2>
    <pre>function toCelsius(fahrenheit) {
  return (5/9) * (fahrenheit-32);
}

let value = toCelsius;</pre>
    <p>Note: As you see from the examples above, <code>toCelsius</code> refers to the function object, and <code>toCelsius()</code> refers to the function result.</p>

    <h2>Functions Used as Variable Values</h2>
    <p>Functions can be used the same way as you use variables, in all types of formulas, assignments, and calculations.</p>
    <pre>let x = toCelsius(77);
let text = "The temperature is " + x + " Celsius";</pre>
    <p>You can use the function directly, as a variable value:</p>
    <pre>let text = "The temperature is " + toCelsius(77) + " Celsius";</pre>

    <h2>Local Variables</h2>
    <p>Variables declared within a JavaScript function, become LOCAL to the function.</p>
    <p>Local variables can only be accessed from within the function.</p>
    <pre>// code here can NOT use carName
function myFunction() {
  let carName = "Volvo";
  // code here CAN use carName
}
// code here can NOT use carName</pre>
    <p>Since local variables are only recognized inside their functions, variables with the same name can be used in different functions.</p>
    <p>Local variables are created when a function starts, and deleted when the function is completed.</p>
    </section>
    <section id="content-JavaScript-Objects" class="content" style="display: none;">
    <h1>JavaScript Objects</h1>
    
    <h2>Object Properties</h2>
    <p>A real life car has properties like weight and color:</p>
    <pre>car.name = Fiat, car.model = 500, car.weight = 850kg, car.color = white.</pre>
    <p>Car objects have the same properties, but the values differ from car to car.</p>

    <h2>Object Methods</h2>
    <p>A real life car has methods like start and stop:</p>
    <pre>car.start(), car.drive(), car.brake(), car.stop().</pre>
    <p>Car objects have the same methods, but the methods are performed at different times.</p>

    <h2>JavaScript Variables</h2>
    <p>JavaScript variables are containers for data values.</p>
    <pre>let car = "Fiat";</pre>

    <h2>JavaScript Objects</h2>
    <p>Objects are variables too. But objects can contain many values.</p>
    <pre>const car = {type:"Fiat", model:"500", color:"white"};</pre>

    <h2>JavaScript Object Definition</h2>
    <p>How to Define a JavaScript Object:</p>
    <ul>
        <li>Using an Object Literal</li>
        <li>Using the new Keyword</li>
        <li>Using an Object Constructor</li>
    </ul>

    <h2>JavaScript Object Literal</h2>
    <p>An object literal is a list of name:value pairs inside curly braces <code>{}</code>.</p>
    <pre>{firstName:"John", lastName:"Doe", age:50, eyeColor:"blue"}</pre>
    <p>Note: name:value pairs are also called key:value pairs.</p>
    <p>Object literals are also called object initializers.</p>

    <h2>Creating a JavaScript Object</h2>
    <p>These examples create a JavaScript object with 4 properties:</p>
    <pre>const person = {firstName:"John", lastName:"Doe", age:50, eyeColor:"blue"};</pre>

    <p>Spaces and line breaks are not important. An object initializer can span multiple lines:</p>
    <pre>
const person = {
  firstName: "John",
  lastName: "Doe",
  age: 50,
  eyeColor: "blue"
};</pre>

    <p>This example creates an empty JavaScript object, and then adds 4 properties:</p>
    <pre>const person = {};
person.firstName = "John";
person.lastName = "Doe";
person.age = 50;
person.eyeColor = "blue";</pre>

    <h2>Using the new Keyword</h2>
    <p>This example creates a new JavaScript object using <code>new Object()</code>, and then adds 4 properties:</p>
    <pre>const person = new Object();
person.firstName = "John";
person.lastName = "Doe";
person.age = 50;
person.eyeColor = "blue";</pre>

    <h2>Object Properties</h2>
    <p>The named values in JavaScript objects are called properties:</p>
    <pre>
Property	Value
firstName	John
lastName	Doe
age	50
eyeColor	blue</pre>

    <h2>Accessing Object Properties</h2>
    <p>You can access object properties in two ways:</p>
    <pre>person.lastName;</pre>
    <pre>person["lastName"];</pre>

    <h2>JavaScript Object Methods</h2>
    <p>Methods are actions that can be performed on objects. Methods are function definitions stored as property values:</p>
    <pre>
const person = {
  firstName: "John",
  lastName : "Doe",
  id       : 5566,
  fullName : function() {
    return this.firstName + " " + this.lastName;
  }
};</pre>

    <h2>In JavaScript, Objects are King</h2>
    <p>If you Understand Objects, you Understand JavaScript.</p>
    <p>Objects are containers for Properties and Methods.</p>
    <p>Properties are named Values.</p>
    <p>Methods are Functions stored as Properties.</p>
    <p>Properties can be primitive values, functions, or even other objects.</p>
    <p>In JavaScript, almost "everything" is an object.</p>

    <h2>JavaScript Primitives</h2>
    <p>A primitive value is a value that has no properties or methods.</p>
    <pre>3.14 is a primitive value</pre>
    <p>A primitive data type is data that has a primitive value.</p>
    <p>JavaScript defines 7 types of primitive data types:</p>
    <ul>
        <li>string</li>
        <li>number</li>
        <li>boolean</li>
        <li>null</li>
        <li>undefined</li>
        <li>symbol</li>
        <li>bigint</li>
    </ul>

    <h2>Immutable</h2>
    <p>Primitive values are immutable (they are hardcoded and cannot be changed).</p>
    <pre>if x = 3.14, you can change the value of x, but you cannot change the value of 3.14.</pre>

    <h2>Value Types</h2>
    <pre>
Value	Type	Comment
"Hello"	string	"Hello" is always "Hello"
3.14	number	3.14 is always 3.14
true	boolean	true is always true
false	boolean	false is always false
null	null (object)	null is always null
undefined	undefined	undefined is always undefined</pre>

    <h2>JavaScript Objects are Mutable</h2>
    <p>Objects are mutable: They are addressed by reference, not by value.</p>
    <pre>const x = person;</pre>
    <p>The object <code>x</code> is not a copy of <code>person</code>. The object <code>x</code> and the object <code>person</code> share the same memory address.</p>
    <p>Any changes to <code>x</code> will also change <code>person</code>:</p>
    <pre>
//Create an Object
const person = {
  firstName:"John",
  lastName:"Doe",
  age:50, eyeColor:"blue"
}

// Create a copy
const x = person;

// Change Age in both
x.age = 10;</pre>
    </section>
    <section id="content-JavaScript-Object-Properties" class="content" style="display: none;">
    <h1>JavaScript Object Properties</h1>
    
    <h2>An Object is an Unordered Collection of Properties</h2>
    <p>Properties are the most important part of JavaScript objects.</p>
    <p>Properties can be changed, added, deleted, and some are read-only.</p>

    <h2>Accessing JavaScript Properties</h2>
    <p>The syntax for accessing the property of an object is:</p>
    <pre>// objectName.property
let age = person.age;</pre>
    <p>or</p>
    <pre>// objectName["property"]
let age = person["age"];</pre>
    <p>or</p>
    <pre>// objectName[expression]
let age = person[x];</pre>
    <p>Examples:</p>
    <pre>person.firstname + " is " + person.age + " years old.";
person["firstname"] + " is " + person["age"] + " years old.";
let x = "firstname";
let y = "age";
person[x] + " is " + person[y] + " years old.";</pre>

    <h2>Adding New Properties</h2>
    <p>You can add new properties to an existing object by simply giving it a value:</p>
    <pre>person.nationality = "English";</pre>

    <h2>Deleting Properties</h2>
    <p>The <code>delete</code> keyword deletes a property from an object:</p>
    <pre>const person = {
  firstName: "John",
  lastName: "Doe",
  age: 50,
  eyeColor: "blue"
};

delete person.age;</pre>
    <p>or</p>
    <pre>delete person["age"];</pre>

    <h2>Note:</h2>
    <p>The delete keyword deletes both the value of the property and the property itself.</p>
    <p>After deletion, the property cannot be used before it is added back again.</p>

    <h2>Nested Objects</h2>
    <p>Property values in an object can be other objects:</p>
    <pre>myObj = {
  name: "John",
  age: 30,
  myCars: {
    car1: "Ford",
    car2: "BMW",
    car3: "Fiat"
  }
}</pre>
    <p>You can access nested objects using the dot notation or the bracket notation:</p>
    <p>Examples:</p>
    <pre>myObj.myCars.car2;
myObj.myCars["car2"];
myObj["myCars"]["car2"];</pre>
    <pre>let p1 = "myCars";
let p2 = "car2";
myObj[p1][p2];</pre>
    </section>

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
                document.getElementById("content-JavaScript-Variables").style.display = "block"; // Show Module 2 content
            } else if (module === "module3") {
                // Show Module 3 default content (Superglobal Variables)
                const superglobalContent = document.getElementById("content-JavaScript-Data-Types");
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
