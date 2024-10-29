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
    max-height: 500px; /* Set a maximum height */
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
                        <li><a href= "#"data-target='content-JavaScript-Where To'>JavaScript Where To</a></li>
                            <li><a href="#"data-target='content-JavaScript-Output'>JavaScript Output</a></li>
                            <li><a href="#"data-target='content-JavaScript-Statements'>JavaScript Statements</a></li>
                            <li><a href="#"data-target='content-JavaScript-Syntax'>JavaScript Syntax</a></li>
                            <li><a href="#"data-target='content-JavaScript-Comments'>JavaScript Comments</a></li>
                        </ul>
                    </div>
                </div>
                <div class="module">
                    <button class="collapsible">Module 2: JavaScript Introduction</button>
                    <div class="module-content">
                        <ul>
                        <li><a href="#" data-target='content-accessing-variable'>Accessing A Variable Dynamically By Name (Variable variable)</a></li>
                        <li><a href="#" data-target='content-data-type'>Data Type</a></li>
                        <li><a href="#" data-target='content-global-best-practice'>Global Variable Best Practice</a></li>
                        <li><a href="#" data-target='content-default-values'>Default Values of Uninitialized Variables</a></li>
                        <li><a href="#" data-target='content-truthiness'>Variable Value Truthiness And Identical Operator</a></li>
                        </ul>
                    </div>
                </div>
                <div class="module">
                    <button class="collapsible">Module 3: Introduction of Java</button>
                    <div class="module-content">
                        <ul>
                            <li><a href="#">Java Output</a></li>
                            <li><a href="#">Print Text</a></li>
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
<script>
    window.onload = function() {
    const openPopupBtn = document.querySelector("#open-popup");
    const closePopupBtn = document.querySelector(".popup .close-btn");

    // Check if openPopupBtn exists
    if (openPopupBtn) {
        openPopupBtn.addEventListener("click", function(e) {
            e.preventDefault(); // Prevent default behavior
            document.body.classList.add("active-popup");
        });
    }

    // Close Popup
    if (closePopupBtn) {
        closePopupBtn.addEventListener("click", function() {
            document.body.classList.remove("active-popup");
        });
    }

    // Close the popup if clicked outside of it
    window.addEventListener("click", function(e) {
        if (e.target.classList.contains("popup")) {
            document.body.classList.remove("active-popup");
        }
    });

    // Collapsible functionality for modules
    const collapsibleButtons = document.querySelectorAll(".collapsible");
    const content1 = document.getElementById("content1");
    const content2 = document.getElementById("content2");
    

    collapsibleButtons.forEach(button => {
        button.addEventListener("click", function() {
            this.classList.toggle("active");
            const content = this.nextElementSibling;
            content.style.display = content.style.display === "block" ? "none" : "block";

            // Reset all content to hidden when a collapsible button is clicked
            content1.style.display = "none";
            content2.style.display = "none";
            
            // Show content1 when any collapsible button is clicked
            content1.style.display = "block";
        });
    });

    // Content toggle based on link clicks
    const links = document.querySelectorAll(".module-content ul li a");

    links.forEach(link => {
        link.addEventListener("click", function(e) {
            e.preventDefault();

            // Hide all content sections initially
            content1.style.display = "none";
            content2.style.display = "none";
            
            // Show the corresponding content based on link text
            if (this.textContent === "JavaScript in <head> or <body>") {
                content2.style.display = "block";
            } else if (this.textContent === "JavaScript in <head>") {
                content3.style.display = "block";
            
            } else {
                // Default to content1 for other cases (like the module header)
                content1.style.display = "block";
            }
        });
    });
};

</script>
</html>
