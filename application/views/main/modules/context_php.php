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
        background-color: #2C84D5;
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
        height: 97vh;
        /* Full viewport height */
        overflow-y: auto;
        /* Enable scrolling */
    }

    /* Hide scrollbar for WebKit browsers (Chrome, Safari) */
    .sidebar::-webkit-scrollbar {
        display: none;
    }

    /* Hide scrollbar for Firefox */
    .sidebar {
        scrollbar-width: none;
        /* Firefox */
    }

    /* Collapsible button styling */
    .collapsible {
        background-color: #2C84D5;
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
        content: '\25BC';
        /* Unicode for down arrow */
        font-size: 14px;
        position: absolute;
        right: 10px;
        transition: transform 0.3s;
    }

    .collapsible.active::after {
        transform: rotate(180deg);
        /* Rotates arrow to point up */
    }

    .collapsible:hover {
        background-color: #1f5c96;
    }

    /* Module content styling */
    .module-content {
        display: none;
        /* Hidden by default */
        overflow: hidden;
        padding-left: 10px;
        margin-top: 10px;
        margin-bottom: 20px;
    }

    .module-content ul {
        list-style: none;
    }

    .module-content ul li a {
        display: block;
        padding: 8px;
        background-color: #2C84D5;
        color: white;
        border-radius: 5px;
        margin-bottom: 5px;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .module-content ul li a:hover {
        background-color: #1f5c96;
    }

    .content {
        flex: 1;
        padding: 40px;
        background-color: white;
        border-radius: 10px;
        margin: 20px;
        height: 94vh;
        overflow-y: auto;
        /* Enable vertical scroll */
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
        white-space: pre-wrap;
        /* Allows wrapping */
        word-wrap: break-word;
        /* Prevents long lines from overflowing */
    }

    .question {
        margin: 20px 0;
    }

    .correct {
        color: green;
    }

    .incorrect {
        color: red;
    }

    .check-button {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
        margin-top: 20px;
    }

    .check-button:hover {
        background-color: #45a049;
    }

    /**.back-btn styling */
    .sidebar .back-btn {
        top: 10px;
        left: 10px;
        width: 40px;
        height: 40px;
        font-size: 30px;
        background-color: #cccccc;
        border: none;
        border-radius: 15%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0;
        margin-bottom: 20px;
    }

    .sidebar .back-btn:hover {
        background-color: #8e8e8e;
    }

    .left-arrow {
        color: #fff;
        margin-bottom: 5px;

    }

    /**active page styling */
    .topic {
        padding: 10px;
        color: #000;
    }

    .topic.active {
        background-color: #1f5c96;
        /* Dark background */
        color: #fff;
        /* Light text */
    }
</style>
<!-- Main Content Section -->
<div class="main-content">
    <!-- Left Sidebar -->
    <aside class="sidebar">
        <!-- Back Button -->
        <button class="back-btn">
            <div class="left-arrow">&larr;</div>
        </button>
        <div class="module">
            <button class="collapsible" data-module='module1'>Module 1: Getting started with PHP</button>
            <div class="module-content">
                <ul>
                    <li><a class="topic" href="#" data-target='content-html-output'>HTML Output From Web Server</a></li>
                    <li><a class="topic" href="#" data-target='content-hello-world'>Hello, World!</a></li>
                    <li><a class="topic" href="#" data-target='content-non-html-output'>Non-HTML Output From Web Server</a></li>
                    <li><a class="topic" href="#" data-target='content-php-server'>PHP Build-in server</a></li>
                    <li><a class="topic" href="#" data-target='content-php-cli'>PHP CLI</a></li>
                    <li><a class="topic" href="#" data-target='content-instruction-separation'>Instruction Separation</a></li>
                    <li><a class="topic" href="#" data-target='content-php-tags'>PHP Tags</a></li>
                    <li><a class="topic" href="#" data-target='content-module1-quiz'>Module 1 Quiz</a></li>
                </ul>
            </div>
        </div>
        <div class="module">
            <button class="collapsible" data-module='module2'>Module 2: Variable</button>
            <div class="module-content">
                <ul>
                    <li><a class="topic" href="#" data-target='content-accessing-variable'>Accessing A Variable Dynamically By Name (Variable variable)</a></li>
                    <li><a class="topic" href="#" data-target='content-data-type'>Data Type</a></li>
                    <li><a class="topic" href="#" data-target='content-global-best-practice'>Global Variable Best Practice</a></li>
                    <li><a class="topic" href="#" data-target='content-default-values'>Default Values of Uninitialized Variables</a></li>
                    <li><a class="topic" href="#" data-target='content-truthiness'>Variable Value Truthiness And Identical Operator</a></li>
                    <li><a class="topic" href="#" data-target='content-module2-quiz'>Module 2 Quiz</a></li>
                </ul>
            </div>
        </div>
        <div class="module">
            <button class="collapsible" data-module='module3'>Module 3: Variable Scope</button>
            <div class="module-content">
                <ul>
                    <li><a class="topic" href="#" data-target='content-superglobal'>Superglobal Variables</a></li>
                    <li><a class="topic" href="#" data-target='content-static-properties'>Static Properties And Variables</a></li>
                    <li><a class="topic" href="#" data-target='content-user-defined-global'>User-defined Global Variables</a></li>
                    <li><a class="topic" href="#" data-target='content-module3-quiz'>Module 3 Quiz</a></li>
                </ul>
            </div>
        </div>

    </aside>


    <!-- Content Section -->
    <section id="content1" class="content" style="display: none;">
        <h1>Module 1: Getting started with PHP</h1>
        <p>PHP 7.x</p>
        <p>Version Supported Until Release Date</p>
        <ul>
            <li>7.1 2019-12-01 2016-12-01</li>
            <li>7.0 2018-12-03 2015-12-03</li>
        </ul>
        <p>PHP 5.x</p>
        <p>Version Supported Until Release Date</p>
        <ul>
            <li>5.6 2018-12-31 2014-08-28</li>
            <li>5.5 2016-07-21 2013-06-20</li>
            <li>5.4 2015-09-03 2012-03-01</li>
            <li>5.3 2014-08-14 2009-06-30</li>
            <li>5.2 2011-01-06 2006-11-02</li>
            <li>5.1 2006-08-24 2005-11-24</li>
            <li>5.0 2005-09-05 2004-07-13</li>
        </ul>
        <p>PHP 4.x</p>
        <p>Version Supported Until Release Date</p>
        <ul>
            <li>4.4 2008-08-07 2005-07-11</li>
            <li>4.3 2005-03-31 2002-12-27</li>
            <li>4.2 2002-09-06 2002-04-22</li>
            <li>4.1 2002-03-12 2001-12-10</li>
            <li>4.0 2001-06-23 2000-05-22</li>
        </ul>
        <p>Legacy Version</p>
        <p>Version Supported Until Release Date</p>
        <ul>
            <li>3.0 2000-10-20 1998-06-06</li>
            <li>2.0 __________1997-11-01</li>
            <li>1.0 __________1995-06-08</li>
        </ul>
    </section>

    <section id="content-html-output" class="content" style="display: none;">
        <h1>HTML output from web server</h1>
        <p>PHP can be used to add content to HTML files. While HTML is processed directly by a web browser, PHP scripts are executed by a web server and the resulting HTML is sent to the browser.</p>
        <p>The following HTML markup contains a PHP statement that will add Hello World! to the output:</p>
        <pre>
&lt;!DOCTYPE html&gt;
    &lt;html&gt;
        &lt;head&gt;
            &lt;title&gt;PHP!&lt;/title&gt;
        &lt;/head&gt;
        &lt;body&gt;
            &lt;p&gt;&lt;?php echo "Hello world!"; ?&gt;&lt;/p&gt;
        &lt;/body&gt;
    &lt;/html&gt;</pre>
        <p>When this is saved as a PHP script and executed by a web server, the following HTML will be sent to the user's browser:</p>
        <pre>
&lt;!DOCTYPE html&gt;
    &lt;html&gt;
        &lt;head&gt;
            &lt;title&gt;PHP!&lt;/title&gt;
        &lt;/head&gt;
        &lt;body&gt;
            &lt;p&gt;&lt;Hello world!&gt;&lt;/p&gt;
        &lt;/body&gt;
    &lt;/html&gt;</pre>
        <p>PHP 5.x Version ≥ 5.4</p>
        <p>echo also has a shortcut syntax, which lets you immediately print a value. Prior to PHP 5.4.0, this short syntax only works with the short_open_tag configuration setting enabled.</p>
        <p>For example, consider the following code:</p>
        <pre>
&lt;p&gt;&lt;?= "Hello world!" ?&gt;&lt;/p&gt;</pre>
        <p>Its output is identical to the output of the following:</p>
        <pre>
&lt;p&gt;&lt;?php echo "Hello world!"; ?&gt;&lt;/p&gt;</pre>
        <p>In real-world applications, all data output by PHP to an HTML page should be properly escaped to prevent XSS (Cross-site scripting) attacks or text corruption.</p>
        <p>See also: Strings and PSR-1, which describes best practices, including the proper use of short tags.</p>
    </section>
    <section id="content-hello-world" class="content" style="display: none;">
        <h1>Hello, World!</h1>
        <p>The most widely used language construct to print output in PHP is echo:</p>
        <pre>
echo "Hello, World!\n";</pre>
        <p>Alternatively, you can also use print:</p>
        <pre>
print "Hello, World!\n";</pre>
        <p>Both statements perform the same function, with minor differences:</p>
        <ul>
            <li>echo has a void return, whereas print returns an int with a value of 1</li>
            <li>echo can take multiple arguments (without parentheses only), whereas print only takes one argument</li>
            <li>echo is slightly faster than print</li>
        </ul>
        <p>Both echo and print are language constructs, not functions. That means they do not require parentheses around their arguments. For cosmetic consistency with functions, parentheses can be included. Extensive examples of the use of echo and print are available elsewhere.</p>
        <p>C-style printf and related functions are available as well, as in the following example:</p>
        <pre>
printf("%\n", "Hello, World!);</pre>
        <p>See Outputting the value of a variable for a comprehensive introduction of outputting variables in PHP.</p>
    </section>
    <section id="content-non-html-output" class="content" style="display: none;">
        <h1>Non-HTML output from web server</h1>
        <p>In some cases, when working with a web server, overriding the web server's default content type may be required. There may be cases where you need to send data as plain text, JSON, or XML, for example.</p>
        <p>The header() function can send a raw HTTP header. You can add the Content-Type header to notify the browser of the content we are sending</p>
        <p>Consider the following code, where we set Content-Type as text/plain:</p>
        <pre>
header("Content-Type: text/plain");
echo "Hello World";</pre>
        <p>This will produce a plain text document with the following content:</p>
        <pre>
Hello World</pre>
        <p>To produce JSON content, use the application/json content type instead:</p>
        <pre>
header("Content-Type: application/json");

// Create a PHP data array.
 $data = ["response" => "Hello World"];

// json_encode will convert it to a valid JSON string.
echo json_encode($data);</pre>
        <p>This will produce a document of type application/json with the following content:</p>
        <pre>
{"response":"Hello World"}</pre>
        <p>Note that the header() function must be called before PHP produces any output, or the web server will have already sent headers for the response. So, consider the following code:</p>
        <pre>
// Error: We cannot send any output before the headers
echo "Hello";
// All headers must be sent before ANY PHP output
header("Content-Type: text/plain");
echo "World";</pre>
        <p>This will produce a warning:</p>
        <pre>
Warning: Cannot modify header information - headers already sent by (output started at
/dir/example.php:2) in /dir/example.php on line 3</pre>
        <p>When using header(), its output needs to be the first byte that's sent from the server. For this reason it's important to not have empty lines or spaces in the beginning of the file before the PHP opening tag ?php>. For the same reason, it is considered best practice (see PSR-2) to omit the PHP closing tag ?> from files that contain only PHP and from blocks of PHP code at the very end of a file.</p>
        <p>View the output buffering section to learn how to 'catch' your content into a variable to output later, for example, after outputting headers.</p>
    </section>
    <section id="content-php-server" class="content" style="display: none;">
        <h1>PHP built-in server</h1>
        <p>PHP 5.4+ comes with a built-in development server. It can be used to run applications without having to install a production HTTP server such as nginx or Apache. The built-in server is only designed to be used for development and testing purposes.</p>
        <p>It can be started by using the -S flag:</p>
        <pre>
php -S &lt;host/ip&gt;:&lt;port&gt;</pre>
        <p>Example usage</p>
        <p>1. Create an index.php file containing:</p>
        <pre>
&lt;?php
echo "Hello World from built-in PHP server";</pre>
        <p>2. Run the command php -S localhost:8080 from the command line. Do not include</p>
        <ul>
            http://
        </ul>
        <ul>
            . This will start a web server listening on port 8080 using the current directory that you are in as the document root.
        </ul>
        <p>3. Open the browser and navigate to http://localhost:8080. You should see your "Hello World" page.</p>
        <p>Configuration</p>
        <p>To override the default document root (i.e. the current directory), use the -t flag:</p>
        <pre>
php -S &lt;host/ip&gt;:&lt;port&gt; -t &lt;directory&gt;</pre>
        <p>E.g. if you have a public/ directory in your project you can serve your project from that directory using php -S localhost:8080 -t public/.</p>
        <p>Logs</p>
        <p>Every time a request is made from the development server, a log entry like the one below is written to the command line.</p>
        <pre>
[Mon Aug 15 18:20:19 2016] ::1:52455 [200]: /</pre>
    </section>
    <section id="content-php-cli" class="content" style="display: none;">
        <h1>PHP CLI</h1>
        <p>PHP can also be run from command line directly using the CLI (Command Line Interface).</p>
        <p>CLI is basically the same as PHP from web servers, except some differences in terms of standard input and output.</p>
        <p>Triggering</p>
        <p>The PHP CLI allows four ways to run PHP code:</p>
        <ul>
            <li>1. Standard input. Run the php command without any arguments, but pipe PHP code into it: echo '&lt;?php echo "Hello world!";' | php</li>
            <li>2. Filename as argument. Run the php command with the name of a PHP source file as the first argument: php hello_world.php</li>
            <li>3. Code as argument. Use the -r option in the php command, followed by the code to run. The &lt;?php open tags are not required, as everything in the argument is considered as PHP code: php -r 'echo "Hello world!";'</li>
            <li>4. Interactive shell. Use the -a option in the php command to launch an interactive shell. Then, type (or paste) PHP code and hit return : $ php -a Interactive mode enabled php > echo "Hello world!"; Hello world!</li>
        </ul>
        <p>Output</p>
        <p>All functions or controls that produce HTML output in web server PHP can be used to produce output in the stdout stream (file descriptor 1), and all actions that produce output in error logs in web server PHP will produce output in the stderr stream (file descriptor 2).</p>
        <p>Example.php</p>
        <pre>
&lt;?php
echo "Stdout 1\n";
trigger_error("Stderr 2\n");
print_r("Stdout 3\n");
fwrite(STDERR, "Stderr 4\n");
throw new RuntimeException("Stderr 5\n");
?>
Stdout 6</pre>
        <p>Shell command line</p>
        <pre>
$ php Example.php 2>stderr.log >stdout.log;\
> echo STDOUT; cat stdout.log; echo;\
> echo STDERR; cat stderr.log\STDOUT

Stdout 1
Stdout 3

STDERR
Stderr 4
PHP Notice: Stderr 2
in /Example.php on line 3
PHP Fatal error: Uncaught RuntimeException: Stderr 5
in /Example.php:6
Stack trace:
#0 {main}
thrown in /Example.php on line 6</pre>
        <p>Input</p>
        <p>See: Command Line Interface (CLI)</p>
    </section>
    <section id="content-instruction-separation" class="content" style="display: none;">
        <h1>Instruction Separation</h1>
        <p>Just like most other C-style languages, each statement is terminated with a semicolon. Also, a closing tag is used to terminate the last line of code of the PHP block.</p>
        <p>If the last line of PHP code ends with a semicolon, the closing tag is optional if there is no code following that final line of code. For example, we can leave out the closing tag after echo "No error"; in the following example:</p>
        <pre>
&lt;?php echo "No error"; // no closing tag is needed as long as there is no code below</pre>
        <p>However, if there is any other code following your PHP code block, the closing tag is no longer optional:</p>
        <pre>
&lt;?php echo "This will cause an error if you leave out the closing tag"; ?>
    &lt;html>
        &lt;body>
        &lt;/body>
    &lt;/html></pre>
        <p>We can also leave out the semicolon of the last statement in a PHP code block if that code block has a closing tag:</p>
        <pre>
&lt;?php echo "I hope this helps! :D";
echo "No error" ?></pre>
        <p>It is generally recommended to always use a semicolon and use a closing tag for every PHP code block except the last PHP code block, if no more code follows that PHP code block.</p>
        <p>So, your code should basically look like this:</p>
        <pre>
&lt;?php
echo "Here we use a semicolon!";
echo "Here as well!";
echo "Here as well!";
echo "Here we use a semicolon and a closing tag because more code follows";
?>
&lt;p>Some HTML code goes here&gt;/p>
&lt;?php
echo "Here we use a semicolon!";
echo "Here as well!";
echo "Here as well!";
echo "Here we use a semicolon and a closing tag because more code follows";
?>
&lt;p>Some HTML code goes here&lt;/p>
&lt;?php
echo "Here we use a semicolon!";
echo "Here as well!";
echo "Here as well!";
echo "Here we use a semicolon but leave out the closing tag";</pre>
    </section>
    <section id="content-php-tags" class="content" style="display: none;">
        <h1>PHP Tags</h1>
        <p>There are three kinds of tags to denote PHP blocks in a file. The PHP parser is looking for the opening and (if present) closing tags to delimit the code to interpret</p>
        <p>Standard Tags</p>
        <p>These tags are the standard method to embed PHP code in a file.</p>
        <pre>
&lt;?php
    echo "Hello World";
?></pre>
        <ul>PHP 5.x Version ≥ 5.4</ul>
        <p>Echo Tags</p>
        <p>These tags are available in all PHP versions, and since PHP 5.4 are always enabled. In previous versions, echo tags could only be enabled in conjunction with short tags.</p>
        <pre>
&lt;?= "Hello World" ?></pre>
        <p>Short Tags</p>
        <p>You can disable or enable these tags with the option short_open_tag.</p>
        <pre>
&lt;? 
    echo "Hello World";
?></pre>
        <ul>Short tags;</ul>
        <li>are disallowed in all major PHP coding standards</li>
        <li>are discouraged in the official documentation</li>
        <li>are disabled by default in most distributions</li>
        <li>interfere with inline XML's processing instructions</li>
        <li>are not accepted in code submissions by most open source projects</li>
        <p>PHP 5.x Version ≤ 5.6</p>
        <p>ASP Tags</p>
        <p>By enabling the asp_tags option, ASP-style tags can be used.</p>
        <pre>
<%
    echo "Hello World";
%></pre>
        <p>These are an historic quirk and should never be used. They were removed in PHP 7.0.</p>
    </section>
    <section id="content-module1-quiz" class="content" style="display: none;">
        <h1>Module 1 Quiz</h1>
        <form id="quizForm">
            <div class="question" id="q1">
                <p>1. Which of the following statements about PHP and HTML integration is correct?</p>
                <input type="radio" name="q1" value="A"> A) PHP code is executed on the client side, directly by the browser.<br>
                <input type="radio" name="q1" value="B"> B) PHP code is executed on the server side, and the resulting HTML is sent to the browser.<br>
                <input type="radio" name="q1" value="C"> C) HTML code is executed on the server side and sent to the PHP engine.<br>
                <input type="radio" name="q1" value="D"> D) PHP and HTML cannot be used together.<br>
            </div>
            <div class="question" id="q2">
                <p>2. Which PHP version introduced the shorthand syntax &lt;?= "Hello world!" ?> without requiring the short_open_tag setting?</p>
                <input type="radio" name="q2" value="A"> A) PHP 4.3<br>
                <input type="radio" name="q2" value="B"> B) PHP 5.0<br>
                <input type="radio" name="q2" value="C"> C) PHP 5.4<br>
                <input type="radio" name="q2" value="D"> D) PHP 7.0<br>
            </div>
            <div class="question" id="q3">
                <p>3. What is the purpose of the PSR-1 standard in PHP?</p>
                <input type="radio" name="q3" value="A"> A) It describes best practices for file naming conventions only.<br>
                <input type="radio" name="q3" value="B"> B) It includes guidelines for using short tags and code formatting.<br>
                <input type="radio" name="q3" value="C"> C) It enforces HTML output to be generated only through echo statements.<br>
                <input type="radio" name="q3" value="D"> D) It is deprecated and no longer in use.<br>
            </div>
            <div class="question" id="q4">
                <p>4. Which output statement can take multiple arguments in PHP?</p>
                <input type="radio" name="q4" value="A"> A) print()<br>
                <input type="radio" name="q4" value="B"> B) echo<br>
                <input type="radio" name="q4" value="C"> C) printf<br>
                <input type="radio" name="q4" value="D"> D) Both print and echo<br>
            </div>
            <div class="question" id="q5">
                <p>5. Which of the following content types would you set in the header() function to produce a JSON response in PHP?</p>
                <input type="radio" name="q5" value="A"> A) text/plain<br>
                <input type="radio" name="q5" value="B"> B) application/json<br>
                <input type="radio" name="q5" value="C"> C) text/html<br>
                <input type="radio" name="q5" value="D"> D) application/xml<br>
            </div>
            <div class="question" id="q6">
                <p>6. What is the main purpose of the PHP built-in server introduced in PHP 5.4?</p>
                <input type="radio" name="q6" value="A"> A) To deploy websites in production environments.<br>
                <input type="radio" name="q6" value="B"> B) To provide a development environment without needing a full HTTP server like Apache or Nginx.<br>
                <input type="radio" name="q6" value="C"> C) To improve the performance of web servers.<br>
                <input type="radio" name="q6" value="D"> D) To replace web server software like Nginx and Apache for live sites.<br>
            </div>
            <div class="question" id="q7">
                <p>7. Which of the following is a correct way to run PHP code directly from the command line using the PHP CLI?</p>
                <input type="radio" name="q7" value="A"> A) php hello_world.php<br>
                <input type="radio" name="q7" value="B"> B) php -r 'echo "Hello world!";'<br>
                <input type="radio" name="q7" value="C"> C) echo '&lt;?php echo "Hello world!";' | php<br>
                <input type="radio" name="q7" value="D"> D) All of the above<br>
            </div>
            <div class="question" id="q8">
                <p>8. When is it optional to leave out the PHP closing tag (?>) at the end of a PHP block?</p>
                <input type="radio" name="q8" value="A"> A) When there is no code following the PHP block and the last statement ends with a semicolon.<br>
                <input type="radio" name="q8" value="B"> B) When the last statement in the block is a function.<br>
                <input type="radio" name="q8" value="C"> C) When the PHP block contains only a single statement.<br>
                <input type="radio" name="q8" value="D"> D) The closing tag is never optional.<br>
            </div>
            <div class="question" id="q9">
                <p>9. Which of the following is true about short tags in PHP?</p>
                <input type="radio" name="q9" value="A"> A) Short tags are always enabled by default in all PHP versions.<br>
                <input type="radio" name="q9" value="B"> B) Short tags are disabled by default in most PHP distributions and discouraged in official documentation.<br>
                <input type="radio" name="q9" value="C"> C) Short tags are the standard method to embed PHP code in a file.<br>
                <input type="radio" name="q9" value="D"> D) Short tags are recommended for use in modern PHP development.<br>
            </div>
            <div class="question" id="q10">
                <p>10. Which PHP tag is recommended for modern development and is always enabled since PHP 5.4?</p>
                <input type="radio" name="q10" value="A"> A) ASP tags<br>
                <input type="radio" name="q10" value="B"> B) Short tags<br>
                <input type="radio" name="q10" value="C"> C) Echo tags<br>
                <input type="radio" name="q10" value="D"> D) Standard tags<br>
            </div>
            <button type="button" class="check-button" onclick="checkAnswers()">Check Answers</button>
        </form>
    </section>

    <!-- Content Sections for Module 2 -->
    <section id="content-accessing-variable" class="content" style="display: none;">
        <h1>Module 2: Variables</h1>
        <h2>Accessing A Variable Dynamically By Name (Variable variables)</h2>
        <p>Variables can be accessed via dynamic variable names. The name of a variable can be stored in another variable, allowing it to be accessed dynamically. Such variables are known as variable variables.</p>
        <p>To turn a variable into a variable variable, you put an extra $ put in front of your variable.</p>
        <pre>
$variableName = 'foo';
$foo = 'bar';

// The following are all equivalent, and all output "bar":
echo $foo;
echo ${$variableName};
echo $$variableName;

//similarly,
$variableName = 'foo';
$$variableName = 'bar';

// The following statements will also output 'bar'
echo $foo;
echo $$variableName;
echo ${$variableName}</pre>
        <p>Variable variables are useful for mapping function/method calls:</p>
        <pre>
function add($a, $b) {
    return $a + $b;
}

$funcName = 'add';

echo $funcName(1, 2); // outputs 3</pre>
        <p>This becomes particularly helpful in PHP classes:</p>
        <pre>
class myClass {
    public function __construct() {
        $functionName = 'doSomething';
        $this->$functionName('Hello World');
    }
    private function doSomething($string) {
        echo $string; // Outputs "Hello World"
    }
}</pre>
        <p>It is possible, but not required to put $variableName between {}:</p>
        <pre>
${$variableName} = $value;</pre>
        <p>The following examples are both equivalent and output "baz":</p>
        <pre>
$fooBar = 'baz';

$varPrefix = 'foo';

echo $fooBar;               // Outputs "baz"
echo ${$varPrefix . 'Bar'}; // Also outputs "baz"</pre>
        <p>Using {} is only mandatory when the name of the variable is itself an expression, like this:</p>
        <pre>
${$variableNamePart1 . $variableNamePart2} = $value;</pre>
        <p>It is nevertheless recommended to always use {}, because it's more readable.</p>
        <p>While it is not recommended to do so, it is possible to chain this behavior:</p>
        <pre>
$$$$$$$$DoNotTryThisAtHomeKids = $value;</pre>
        <ul>It's important to note that the excessive usage of variable variables is considered a bad practice by many
            developers. Since they're not well-suited for static analysis by modern IDEs, large codebases with many
            variable variables (or dynamic method invocations) can quickly become difficult to maintain.</ul>
        <p>Differences between PHP5 and PHP7</p>
        <p>Another reason to always use {} or (), is that PHP5 and PHP7 have a slightly different way of dealing with dynamic variables, which results in a different outcome in some cases.</p>
        <p>In PHP7, dynamic variables, properties, and methods will now be evaluated strictly in left-to-right order, as opposed to the mix of special cases in PHP5. The examples below show how the order of evaluation has changed.</p>
        <p>Case 1 : $$foo['bar']['baz']</p>
        <ul>
            <li>PHP5 interpretation : ${$foo['bar']['baz']}</li>
            <li>PHP7 interpretation : ($$foo)['bar']['baz']</li>
        </ul>
        <p>Case 2 : $foo->$bar['baz']</p>
        <ul>
            <li>PHP5 interpretation : $foo->{$bar['baz']}</li>
            <li>PHP7 interpretation : ($foo->$bar)['baz']</li>
        </ul>
        <p>Case 3 : $foo->$bar['baz']()</p>
        <ul>
            <li>PHP5 interpretation : $foo->{$bar['baz']}()</li>
            <li>PHP7 interpretation : ($foo->$bar)['baz']()</li>
        </ul>
        <p>Case 4 : Foo::$bar['baz']()</p>
        <ul>
            <li>PHP5 interpretation : Foo::{$bar['baz']}()</li>
            <li>PHP7 interpretation : (Foo::$bar)['baz']()</li>
        </ul>
    </section>
    <section id="content-data-type" class="content" style="display: none;">
        <h1>Data Types</h1>
        <p>There are different data types for different purposes. PHP does not have explicit type definitions, but the type of a variable is determined by the type of the value that is assigned, or by the type that it is casted to. This is a brief overview about the types, for a detailed documentation and examples, see the PHP types topic.</p>
        <p>There are following data types in PHP: null, boolean, integer, float, string, object, resource and array.</p>
        <p>Null</p>
        <p>Null can be assigned to any variable. It represents a variable with no value.</p>
        <pre>
$foo = null;</pre>
        <p>This invalidates the variable and it's value would be undefined or void if called. The variable is cleared from memory and deleted by the garbage collector.</p>
        <p>Boolean</p>
        <p>This is the simplest type with only two possible values.</p>
        <pre>
$foo = true;
$bar = false;</pre>
        <p>Booleans can be used to control the flow of code.</p>
        <pre>
$foo = true;
if ($foo) {
    echo "true";
} else {
    echo "false";
}</pre>
        <p>Integer</p>
        <p>An integer is a whole number positive or negative. It can be in used with any number base. The size of an integer is platform-dependent. PHP does not support unsigned integers</p>
        <pre>
$foo = -3; // negative
$foo = 0; // zero (can also be null or false (as boolean))
$foo = 123; // positive decimal
$bar = 0123; // octal = 83 decimal
$bar = 0xAB; // hexadecimal = 171 decimal
$bar = 0b1010; // binary = 10 decimal
var_dump(0123, 0xAB, 0b1010); // output: int(83) int(171) int(10)</pre>
        <p>Float</p>
        <p>Floating point numbers, "doubles" or simply called "floats" are decimal numbers.</p>
        <pre>
$foo = 1.23;
$foo = 10.0;
$bar = -INF;
$bar = NAN;
</pre>
        <p>Array</p>
        <p>An array is like a list of values. The simplest form of an array is indexed by integer, and ordered by the index, with the first element lying at index 0.</p>
        <pre>
$foo = array(1, 2, 3); // An array of integers
$bar = ["A", true, 123 => 5]; // Short array syntax, PHP 5.4+
echo $bar[0]; // Returns "A"
echo $bar[1]; // Returns true
echo $bar[123]; // Returns 5
echo $bar[1234]; // Returns null</pre>
        <p>Arrays can also associate a key other than an integer index to a value. In PHP, all arrays are associative arrays behind the scenes, but when we refer to an 'associative array' distinctly, we usually mean one that contains one or more keys that aren't integers.</p>
        <pre>
$array = array();
$array["foo"] = "bar";
$array["baz"] = "quux";
$array[42] = "hello";
echo $array["foo"]; // Outputs "bar"
echo $array["bar"]; // Outputs "quux"
echo $array[42]; // Outputs "hello"</pre>
        <p>String</p>
        <p>A string is like an array of characters.</p>
        <pre>
$foo = "bar";</pre>
        <p>Like an array, a string can be indexed to return its individual characters:</p>
        <pre>
$foo = "bar";
echo $foo[0]; // Prints 'b', the first character of the string in $foo.</pre>
        <p>Object</p>
        <p>An object is an instance of a class. Its variables and methods can be accessed with the -> operator.</p>
        <pre>
$foo = new stdClass(); // create new object of class stdClass, which a predefined, empty class
$foo->bar = "baz";
echo $foo->bar; // Outputs "baz"
// Or we can cast an array to an object:
$quux = (object) ["foo" => "bar"];
echo $quux->foo; // This outputs "bar".</pre>
        <p>Resource</p>
        <p>Resource variables hold special handles to opened files, database connections, streams, image canvas areas and the like (as it is stated in the manual)</p>
        <pre>
$fp = fopen('file.ext', 'r'); // fopen() is the function to open a file on disk as a resource.
var_dump($fp); // output: resource(2) of type (stream)</pre>
        <p>To get the type of a variable as a string, use the gettype() function:</p>
        <pre>
echo gettype(1); // outputs "integer"
echo gettype(true); // "boolean"</pre>
    </section>
    <section id="content-global-best-practice" class="content" style="display: none;">
        <h1>Global variable best practices</h1>
        <p>We can illustrate this problem with the following pseudo-code</p>
        <pre>
function foo() {
    global $bob;
    $bob->doSomething();
}</pre>
        <p>Your first question here is an obvious one</p>
        <ul>Where did $bob come from?</ul>
        <p>Are you confused? Good. You've just learned why globals are confusing and considered a bad practice.</p>
        <p>If this were a real program, your next bit of fun is to go track down all instances of $bob and hope you find the right one (this gets worse if $bob is used everywhere). Worse, if someone else goes and defines $bob (or you forgot and reused that variable) your code can break (in the above code example, having the wrong object, or no object at all, would cause a fatal error).</p>
        <p>Since virtually all PHP programs make use of code like include('file.php'); your job maintaining code like this becomes exponentially harder the more files you add.</p>
        <p>Also, this makes the task of testing your applications very difficult. Suppose you use a global variable to hold your database connection:</p>
        <pre>
$dbConnector = new DBConnector(...);

function doSomething() {
    global $dbConnector;
    $dbConnector->execute("...");
}</pre>
        <p>In order to unit test this function, you have to override the global $dbConnector variable, run the tests and then reset it to its original value, which is very bug prone:</p>
        <pre>
/**
 * @test
 */
function testSomething() {
    global $dbConnector;

    $bkp = $dbConnector; // Make backup
    $dbConnector = Mock::create('DBConnector'); // Override

    assertTrue(foo());
    $dbConnector = $bkp; // Restore
}
</pre>
        <p>How do we avoid Globals?</p>
        <p>The best way to avoid globals is a philosophy called Dependency Injection. This is where we pass the tools we need into the function or class.</p>
        <pre>
function foo(\Bar $bob) {
    $bob->doSomething();
}</pre>
        <p>This is much easier to understand and maintain. There's no guessing where $bob was set up because the caller is responsible for knowing that (it's passing us what we need to know). Better still, we can use type declarations to restrict what's being passed</p>
        <p>So we know that $bob is either an instance of the Bar class, or an instance of a child of Bar, meaning we know we can use the methods of that class. Combined with a standard autoloader (available since PHP 5.3), we can now go track down where Bar is defined. PHP 7.0 or later includes expanded type declarations, where you can also use scalar types (like int or string)</p>
        <p>Superglobal variables</p>
        <p>Super globals in PHP are predefined variables, which are always available, can be accessed from any scope throughout the script.</p>
        <p>There is no need to do global $variable; to access them within functions/methods, classes or files.</p>
        <p>These PHP superglobal variables are listed below:</p>
        <ul>
            <li>$GLOBALS</li>
            <li>$_SERVER</li>
            <li>$_REQUEST</li>
            <li>$_POST</li>
            <li>$_GET</li>
            <li>$_FILES</li>
            <li>$_ENV</li>
            <li>$_COOKIE</li>
            <li>$_SESSION</li>
        </ul>
    </section>
    <section id="content-default-values" class="content" style="display: none;">
        <h1>Default Values of Uninitialized Variables</h1>
        <p>Although not necessary in PHP however it is a very good practice to initialize variables. Uninitialized variables have a default value of their type depending on the context in which they are used:</p>
        <p>Unset AND unreferenced</p>
        <pre>
var_dump($unset_var); // outputs NULL</pre>
        <p>Boolean</p>
        <pre>
echo($unset_bool ? "true\n" : "false\n"); // outputs 'false'</pre>
        <p>String</p>
        <pre>
$unset_str .= 'abc';
var_dump($unset_str); // outputs 'string(3) "abc"'</pre>
        <p>Integer</p>
        <pre>
$unset_int += 25; // 0 + 25 => 25
var_dump($unset_int); // outputs 'int(25)'</pre>
        <p>Float/double</p>
        <pre>
$unset_float += 1.25;
var_dump($unset_float); // outputs 'float(1.25)'</pre>
        <p>Array</p>
        <pre>
$unset_arr[3] = "def";
var_dump($unset_arr); // outputs array(1) { [3]=> string(3) "def" }</pre>
        <p>Object</p>
        <pre>
$unset_obj->foo = 'bar';
var_dump($unset_obj); // Outputs: object(stdClass)#1 (1) { ["foo"]=> string(3) "bar" }</pre>
        <p>Relying on the default value of an uninitialized variable is problematic in the case of including one file into another which uses the same variable name.</p>
    </section>
    <section id="content-truthiness" class="content" style="display: none;">
        <h1>Variable Value Truthiness And Identical Operator</h1>
        <p>In PHP, variable values have an associated "truthiness" so even non-boolean values will equate to true or false. This allows any variable to be used in a conditional block, e.g</p>
        <pre>
if ($var == true) { /* explicit version */ }
if ($var) { /* $var == true is implicit */ }</pre>
        <p>Here are some fundamental rules for different types of variable values:</p>
        <ul>
            <li>Strings with non-zero length equate to true including strings containing only whitepace such as ' '.</li>
            <li>Empty strings '' equate to false.</li>
        </ul>
        <pre>
$var = '';
$var_is_true = ($var == true); // false
$var_is_false = ($var == false); // true
$var = ' ';
$var_is_true = ($var == true); // true
$var_is_false = ($var == false); // false</pre>
        <ul>
            <li>Integers equate to true if they are nonzero, while zero equates to false.</li>
        </ul>
        <pre>
$var = -1;
$var_is_true = ($var == true); // true
$var = 99;
$var_is_true = ($var == true); // true
$var = 0;
$var_is_true = ($var == true); // false</pre>
        <ul>
            <li>null equates to false</li>
        </ul>
        <pre>
$var = null;
$var_is_true = ($var == true); // false
$var_is_false = ($var == false); // true</pre>
        <ul>
            <li>Empty strings '' and string zero '0' equate to false.</li>
        </ul>
        <pre>
$var = '';
$var_is_true = ($var == true); // false
$var_is_false = ($var == false); // true

$var = '0';
$var_is_true = ($var == true); // false
$var_is_false = ($var == false); // true</pre>
        <ul>
            <li>Floating-point values equate to true if they are nonzero, while zero values equates to false.</li>
            <ul>
                <li>NAN (PHP's Not-a-Number) equates to true, i.e. NAN == true is true. This is because NAN is a nonzero floating-point value.</li>
                <li>Zero-values include both +0 and -0 as defined by IEEE 754. PHP does not distinguish between +0 and -0 in its double-precision floating-point, i.e. floatval('0') == floatval('-0') is true.</li>
                <ul>
                    <li>In fact, floatval('0') === floatval('-0').</li>
                    <li>Additionally, both floatval('0') == false and floatval('-0') == false.</li>
                </ul>
            </ul>
        </ul>
        <pre>
$var = NAN;
$var_is_true = ($var == true); // true
$var_is_false = ($var == false); // false

$var = floatval('-0');
$var_is_true = ($var == true); // false
$var_is_false = ($var == false); // true

$var = floatval('0') == floatval('-0');
$var_is_true = ($var == true); // false
$var_is_false = ($var == false); // true</pre>
        <p>IDENTICAL OPERATOR</p>
        <p>In the PHP Documentation for Comparison Operators, there is an Identical Operator ===. This operator can be used to check whether a variable is identical to a reference value:</p>
        <pre>
$var = null;
$var_is_null = $var === null; // true
$var_is_true = $var === true; // false
$var_is_false = $var === false; // false
</pre>
        <p>It has a corresponding not identical operator !==:</p>
        <pre>
$var = null;
$var_is_null = $var !== null; // false
$var_is_true = $var !== true; // true
$var_is_false = $var !== false; // true
</pre>
        <p>The identical operator can be used as an alternative to language functions like is_null().</p>
        <p>USE CASE WITH strpos()</p>
        <p>The strpos($haystack, $needle) language function is used to locate the index at which $needle occurs in $haystack, or whether it occurs at all. The strpos() function is case sensitive; if case-insensitive find is what you need you can go with stripos($haystack, $needle)</p>
        <p>The strpos & stripos function also contains third parameter offset (int) which if specified, search will start this number of characters counted from the beginning of the string. Unlike strrpos and strripos, the offset cannot be negative</p>
        <p>The function can return:</p>
        <ul>
            <li>0 if $needle is found at the beginning of $haystack;</li>
            <li>a non-zero integer specifying the index if $needle is found somewhere other than the beginning in $haystack;</li>
            <li>and value false if $needle is not found anywhere in $haystack.</li>
        </ul>
        <p>Because both 0 and false have truthiness false in PHP but represent distinct situations for strpos(), it is important to distinguish between them and use the identical operator === to look exactly for false and not just a value that equates to false.</p>
        <pre>
$idx = substr($haystack, $needle);
if ($idx === false)
{
    // logic for when $needle not found in $haystack
}
else
{
    // logic for when $needle found in $haystack
}</pre>
        <p>Alternatively, using the not identical operator:</p>
        <pre>
$idx = substr($haystack, $needle);
if ($idx !== false)
{
    // logic for when $needle found in $haystack
}
else
{
    // logic for when $needle not found in $haystack
}</pre>
    </section>
    <section id="content-module2-quiz" class="content" style="display: none;">
        <h1>Module 2 Quiz</h1>
        <form id="quizForm">
            <div class="question" id="q1">
                <p>1. What is a variable variable in PHP?</p>
                <input type="radio" name="q1" value="A"> A) A variable whose name is dynamically created by concatenating strings.<br>
                <input type="radio" name="q1" value="B"> B) A variable that stores a function or method name.<br>
                <input type="radio" name="q1" value="C"> C) A variable that can only store integers.<br>
                <input type="radio" name="q1" value="D"> D) A variable whose name is the result of another variable's value.<br>
            </div>
            <div class="question" id="q2">
                <p>2. What is the primary difference in how dynamic variables are evaluated between PHP 5 and PHP 7?</p>
                <input type="radio" name="q2" value="A"> A) PHP 7 evaluates dynamic variables from right to left, while PHP 5 uses left to right.<br>
                <input type="radio" name="q2" value="B"> B) PHP 7 always requires parentheses around dynamic variables.<br>
                <input type="radio" name="q2" value="C"> C) PHP 5 evaluates dynamic variables strictly from left to right.<br>
                <input type="radio" name="q2" value="D"> D) PHP 7 evaluates dynamic variables strictly in left-to-right order, whereas PHP 5 has special cases.<br>
            </div>
            <div class="question" id="q3">
                <p>3. What is the main advantage of using curly braces {} around dynamic variable names in PHP?</p>
                <input type="radio" name="q3" value="A"> A) They make the code harder to read but faster to execute.<br>
                <input type="radio" name="q3" value="B"> B) They are required in all PHP versions.<br>
                <input type="radio" name="q3" value="C"> C) They improve code readability and avoid ambiguity when concatenating variable names.<br>
                <input type="radio" name="q3" value="D"> D) They allow variables to store arrays and objects.<br>
            </div>
            <div class="question" id="q4">
                <p>4. Which of the following is NOT a valid way to define an integer in PHP?</p>
                <input type="radio" name="q4" value="A"> A) $foo = 0;<br>
                <input type="radio" name="q4" value="B"> B) $foo = 0xAB;<br>
                <input type="radio" name="q4" value="C"> C) $foo = 0123;<br>
                <input type="radio" name="q4" value="D"> D) $foo = "123";<br>
            </div>
            <div class="question" id="q5">
                <p>5. Which data type is used to store key-value pairs in PHP?</p>
                <input type="radio" name="q5" value="A"> A) Array<br>
                <input type="radio" name="q5" value="B"> B) Integer<br>
                <input type="radio" name="q5" value="C"> C) Float<br>
                <input type="radio" name="q5" value="D"> D) String<br>
            </div>
            <div class="question" id="q6">
                <p>6. Why are global variables considered bad practice in PHP?</p>
                <input type="radio" name="q6" value="A"> A) They are not secure.<br>
                <input type="radio" name="q6" value="B"> B) They make code harder to maintain and test.<br>
                <input type="radio" name="q6" value="C"> C) They improve performance.<br>
                <input type="radio" name="q6" value="D"> D) They are only accessible within the function where defined.<br>
            </div>
            <div class="question" id="q7">
                <p>7. Which of the following is a superglobal variable in PHP?</p>
                <input type="radio" name="q7" value="A"> A) $dbConnector<br>
                <input type="radio" name="q7" value="B"> B) $_POST<br>
                <input type="radio" name="q7" value="C"> C) $bob<br>
                <input type="radio" name="q7" value="D"> D) $functionName<br>
            </div>
            <div class="question" id="q8">
                <p>8. What is the main advantage of using type declarations in PHP functions?</p>
                <input type="radio" name="q8" value="A"> A) They speed up code execution.<br>
                <input type="radio" name="q8" value="B"> B) They help with error handling.<br>
                <input type="radio" name="q8" value="C"> C) They provide type safety and better code clarity.<br>
                <input type="radio" name="q8" value="D"> D) They make variables accessible globally.<br>
            </div>
            <div class="question" id="q9">
                <p>9. When using the strpos() function, which of the following is the correct way to check if the needle was not found in the haystack?</p>
                <input type="radio" name="q9" value="A"> A) if ($idx == false)<br>
                <input type="radio" name="q9" value="B"> B) if ($idx === false)<br>
                <input type="radio" name="q9" value="C"> C) if ($idx != false)<br>
                <input type="radio" name="q9" value="D"> D) if ($idx == 0)<br>
            </div>
            <div class="question" id="q10">
                <p>10. What will be the output of the following code?</p>
                <pre>$unset_int += 25;
var_dump($unset_int);</pre>
                <input type="radio" name="q10" value="A"> A) int(0)<br>
                <input type="radio" name="q10" value="B"> B) int(25)<br>
                <input type="radio" name="q10" value="C"> C) string(25)<br>
                <input type="radio" name="q10" value="D"> D) NULL<br>
            </div>
            <button type="button" class="check-button" onclick="checkAnswers()">Check Answers</button>
        </form>
    </section>
    </section>

    <!-- Content Sections for Module 3 -->
    <section id="content-superglobal" class="content" style="display: none;">
        <h1>Module 3: Variable Scope</h1>
        <p>Variable scope refers to the regions of code where a variable may be accessed. This is also referred to as visibility. In PHP scope blocks are defined by functions, classes, and a global scope available throughout an application.</p>
        <h1>Superglobal Variables</h1>
        <p>Superglobal variables are defined by PHP and can always be used from anywhere without the global keyword.</p>
        <pre>
&lt;?php
function getPostValue($key, $default = NULL) {
    // $_POST is a superglobal and can be used without
    // having to specify 'global $_POST;'
    if (isset($_POST[$key])) {
        return $_POST[$key];
    }

    return $default;
}

// retrieves $_POST['username']
echo getPostValue('username');

// retrieves $_POST['email'] and defaults to empty string
echo getPostValue('email', '');</pre>
    </section>
    <section id="content-static-properties" class="content" style="display: none;">
        <h1>Static Properties And Variables</h1>
        <p>Static class properties that are defined with the public visibility are functionally the same as global variables. They can be accessed from anywhere the class is defined.</p>
        <pre>
class SomeClass {
    public static int $counter = 0;
}
// The static $counter variable can be read/written from anywhere
// and doesn't require an instantiation of the class
SomeClass::$counter += 1;</pre>
        <p>Functions can also define static variables inside their own scope. These static variables persist through multiple function calls, unlike regular variables defined in a function scope. This can be a very easy and simple way to implement the Singleton design pattern:</p>
        <pre>
class Singleton {
    public static function getInstance() {
        // Static variable $instance is not deleted when the function ends
        static $instance;

        // Second call to this function will not get into the if-statement,
        // Because an instance of Singleton is now stored in the $instance
        // variable and is persisted through multiple calls
        if (!$instance) {
            // First call to this function will reach this line,
            // because the $instance has only been declared, not initialized
            $instance = new Singleton();
        }
        return $instance;
    }
}
$instance1 = Singleton::getInstance();
$instance2 = Singleton::getInstance();

// Comparing objects with the '===' operator checks whether they are
// the same instance. Will print 'true', because the static $instance
// variable in the getInstance() method is persisted through multiple calls
var_dump($instance1 === $instance2);</pre>
    </section>
    <section id="content-user-defined-global" class="content" style="display: none;">
        <h1>User-defined Global Variables</h1>
        <p>The scope outside of any function or class is the global scope. When a PHP script includes another (using include or require) the scope remains the same. If a script is included outside of any function or class, it's global variables are included in the same global scope, but if a script is included from within a function, the variables in the included script are in the scope of the function.</p>
        <p>Within the scope of a function or class method, the global keyword may be used to create an access user-defined global variables.</p>
        <pre>
&lt;?php

$amount_of_log_calls = 0;

function log_message($message) {
    // Accessing global variable from function scope
    // requires this explicit statement
    global $amount_of_log_calls;

    // This change to the global variable is permanent
    $amount_of_log_calls += 1;

    echo $message;
}
// When in the global scope, regular global variables can be used
// without explicitly stating 'global $variable;'
echo $amount_of_log_calls; // 0

log_message("First log message!");
echo $amount_of_log_calls; // 1

log_message("Second log message!");
echo $amount_of_log_calls; // 2</pre>
        <p>A second way to access variables from the global scope is to use the special PHP-defined $GLOBALS array</p>
        <p>The $GLOBALS array is an associative array with the name of the global variable being the key and the contents of that variable being the value of the array element. Notice how $GLOBALS exists in any scope, this is because $GLOBALS is a superglobal.</p>
        <p>This means that the log_message() function could be rewritten as:</p>
        <pre>
function log_message($message) {
    // Access the global $amount_of_log_calls variable via the
    // $GLOBALS array. No need for 'global $GLOBALS;', since it
    // is a superglobal variable.
    $GLOBALS['amount_of_log_calls'] += 1;

    echo $messsage;
}</pre>
        <p>One might ask, why use the $GLOBALS array when the global keyword can also be used to get a global variable's value? The main reason is using the global keyword will bring the variable into scope. You then can't reuse the same variable name in the local scope.</p>
    </section>
    <section id="content-module3-quiz" class="content" style="display: none;">
        <h1>Module 3 Quiz</h1>
        <form id="quizForm">
            <div class="question" id="q1">
                <p>1. Which of the following variables are considered superglobals in PHP?</p>
                <input type="radio" name="q1" value="A"> A) $GLOBALS<br>
                <input type="radio" name="q1" value="B"> B) $_SESSION<br>
                <input type="radio" name="q1" value="C"> C) $_POST<br>
                <input type="radio" name="q1" value="D"> D) All of the above<br>
            </div>
            <div class="question" id="q2">
                <p>2. What does the global keyword do in PHP?</p>
                <input type="radio" name="q2" value="A"> A) It allows a variable to be accessed within a function from the global scope.<br>
                <input type="radio" name="q2" value="B"> B) It makes a variable local to a function.<br>
                <input type="radio" name="q2" value="C"> C) It creates a new variable in the global scope.<br>
                <input type="radio" name="q2" value="D"> D) It makes all variables within a function global by default.<br>
            </div>
            <div class="question" id="q3">
                <p>3. In the following code, what will the function getPostValue return if $_POST['username'] is not set?</p>
                <pre>function getPostValue($key, $default = NULL) {
    if (isset($_POST[$key])) {
        return $_POST[$key];
    }

    return $default;
}</pre>
                <input type="radio" name="q3" value="A"> A) NULL<br>
                <input type="radio" name="q3" value="B"> B) The default value provided<br>
                <input type="radio" name="q3" value="C"> C) false<br>
                <input type="radio" name="q3" value="D"> D) empty string<br>
            </div>
            <div class="question" id="q4">
                <p>4. What is the main difference between a regular class property and a static class property in PHP?</p>
                <input type="radio" name="q4" value="A"> A) A static class property can only be accessed within the class.<br>
                <input type="radio" name="q4" value="B"> B) A static class property must be declared as private.<br>
                <input type="radio" name="q4" value="C"> C) A static class property can be accessed without instantiating the class.<br>
                <input type="radio" name="q4" value="D"> D) A regular class property can be accessed from anywhere.<br>
            </div>
            <div class="question" id="q5">
                <p>5. In the code below, what will be the value of SomeClass::$counter after the following execution?</p>
                <pre>class SomeClass {
    public static int $counter = 0;
}

SomeClass::$counter += 1;</pre>
                <input type="radio" name="q5" value="A"> A) 0<br>
                <input type="radio" name="q5" value="B"> B) 1<br>
                <input type="radio" name="q5" value="C"> C) null<br>
                <input type="radio" name="q5" value="D"> D) Error<br>
            </div>
            <div class="question" id="q6">
                <p>6. How does a static variable inside a function behave in PHP?</p>
                <input type="radio" name="q6" value="A"> A) It gets reset every time the function is called.<br>
                <input type="radio" name="q6" value="B"> B) It persists its value between function calls.<br>
                <input type="radio" name="q6" value="C"> C) It can only be accessed from outside the function.<br>
                <input type="radio" name="q6" value="D"> D) It can only hold integer values.<br>
            </div>
            <div class="question" id="q7">
                <p>7. What is the purpose of the global keyword in PHP?</p>
                <input type="radio" name="q7" value="A"> A) It is used to define a variable within the function scope.<br>
                <input type="radio" name="q7" value="B"> B) It allows a function to access and modify variables in the global scope.<br>
                <input type="radio" name="q7" value="C"> C) It defines a variable as static within a function.<br>
                <input type="radio" name="q7" value="D"> D) It is used to include external files.<br>
            </div>
            <div class="question" id="q8">
                <p>8. In the following code, what will be the value of $amount_of_log_calls after calling the log_message() function twice?</p>
                <pre>$amount_of_log_calls = 0;

function log_message($message) {
    global $amount_of_log_calls;
    $amount_of_log_calls += 1;
    echo $message;
}

log_message("First log message!");
log_message("Second log message!");</pre>
                <input type="radio" name="q8" value="A"> A) 0<br>
                <input type="radio" name="q8" value="B"> B) 1<br>
                <input type="radio" name="q8" value="C"> C) 2<br>
                <input type="radio" name="q8" value="D"> D) 3<br>
            </div>
            <div class="question" id="q9">
                <p>9. How can you access a global variable from within a function without using the global keyword?</p>
                <input type="radio" name="q9" value="A"> A) Use the $GLOBALS array.<br>
                <input type="radio" name="q9" value="B"> B) Directly access the global variable.<br>
                <input type="radio" name="q9" value="C"> C) Declare the variable within the function.<br>
                <input type="radio" name="q9" value="D"> D) Use the global keyword within the function.<br>
            </div>
            <div class="question" id="q10">
                <p>10. What is the advantage of using the $GLOBALS array over the global keyword in PHP?</p>
                <input type="radio" name="q10" value="A"> A) $GLOBALS makes the variable private.<br>
                <input type="radio" name="q10" value="B"> B) $GLOBALS does not change the scope of the variable and can be reused in the function.<br>
                <input type="radio" name="q10" value="C"> C) The global keyword is more efficient than $GLOBALS.<br>
                <input type="radio" name="q10" value="D"> D) $GLOBALS can only be used for arrays.<br>
            </div>
            <button type="button" class="check-button" onclick="checkAnswers()">Check Answers</button>
        </form>
    </section>
    </section>
</div>
</div>
</body>
<script>
    // Function for checking answers, placed outside window.onload to be globally accessible
    function checkAnswers() {
        const correctAnswers = {
            q1: 'D',
            q2: 'A',
            q3: 'B',
            q4: 'C',
            q5: 'B',
            q6: 'B',
            q7: 'B',
            q8: 'C',
            q9: 'A',
            q10: 'B'
        };

        // Loop through all questions
        for (const [questionId, correctAnswer] of Object.entries(correctAnswers)) {
            const selectedAnswer = document.querySelector(`input[name="${questionId}"]:checked`);

            // Remove previous styles (correct or incorrect)
            const labels = document.querySelectorAll(`#${questionId} .radio-label`);
            labels.forEach(label => {
                label.classList.remove('correct', 'incorrect');
            });

            // If an answer is selected
            if (selectedAnswer) {
                const selectedLabel = document.querySelector(`input[name="${questionId}"][value="${selectedAnswer.value}"]`).nextElementSibling;

                if (selectedAnswer.value === correctAnswer) {
                    selectedLabel.classList.add('correct'); // Green for correct answer
                } else {
                    selectedLabel.classList.add('incorrect'); // Red for incorrect answer
                }
            }
        }
    };

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
                    document.getElementById("content-accessing-variable").style.display = "block"; // Show Module 2 content
                } else if (module === "module3") {
                    // Show Module 3 default content (Superglobal Variables)
                    const superglobalContent = document.getElementById("content-superglobal");
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
        // Highlight active topic
        const topics = document.querySelectorAll('.topic');

        topics.forEach(topic => {
            topic.addEventListener('click', () => {
                // Remove active class from all topics
                topics.forEach(t => t.classList.remove('active'));

                // Add active class to the clicked topic
                topic.classList.add('active');
            });
        });
    };
</script>

</html>