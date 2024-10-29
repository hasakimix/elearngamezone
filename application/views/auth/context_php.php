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
                    <button class="collapsible">Module 1: Getting started with PHP</button>
                    <div class="module-content">
                        <ul>
                            <li><a href="#">HTML Output From Web Server</a></li>
                            <li><a href="#">Hello, World!</a></li>
                            <li><a href="#">Non-HTML Output From Web Server</a></li>
                            <li><a href="#">PHP Build-in server</a></li>
                            <li><a href="#">PHP CLI</a></li>
                            <li><a href="#">Instruction Separation</a></li>
                            <li><a href="#">PHP Tags</a></li>
                        </ul>
                    </div>
                </div>
                <div class="module">
                    <button class="collapsible">Module 2: Variable</button>
                    <div class="module-content">
                        <ul>
                            <li><a href="#">Accessing A Variable Dynamically By Name (Variable variable)</a></li>
                            <li><a href="#">Data Type</a></li>
                            <li><a href="#">Global Variable Best Practice</a></li>
                            <li><a href="#">Default Values of Uninitialized Variables</a></li>
                            <li><a href="#">Variable Value Truthiness And Identical Operator</a></li>
                        </ul>
                    </div>
                </div>
                <div class="module">
                    <button class="collapsible">Module 3: Variable Scope</button>
                    <div class="module-content">
                        <ul>
                            <li><a href="#">Superglobal Variables</a></li>
                            <li><a href="#">Static Properties And Variables</a></li>
                            <li><a href="#">User-defined Global Variables</a></li>
                        </ul>
                    </div>
                </div>
                <div class="module">
                    <button class="collapsible">Module 4: Superglobal Variables PHP</button>
                    <div class="module-content">
                        <ul>
                            <li><a href="#">Superglobals Explained</a></li>
                            <li><a href="#">PHP5 SuperGlobals</a></li>
                        </ul>
                    </div>
                </div>
                <div class="module">
                    <button class="collapsible">Module 5: Outputting the Value of a Variable</button>
                    <div class="module-content">
                        <ul>
                            <li><a href="#">echo and print</a></li>
                            <li><a href="#">Outputting a Stractured View of Arrays and Objects</a></li>
                            <li><a href="#">String Concatenation with Echo</a></li>
                            <li><a href="#">printf vs sprinf</a></li>
                            <li><a href="#">Outputting large integers</a></li>
                            <li><a href="#">Output a Multidimensional Array with index and value and print into the table</a></li>
                        </ul>
                    </div>
                </div>
            </aside>
            

            <!-- Content Section -->
            <section id="content1" class="content">
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
                </ul><p>Legacy Version</p>
                <p>Version Supported Until Release Date</p>
                <ul>
                    <li>3.0 2000-10-20 1998-06-06</li>
                    <li>2.0 __________1997-11-01</li>
                    <li>1.0 __________1995-06-08</li>
                </ul>
            </section>

            <section id="content2" class="content" style="display: none;">
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
            <section id="content3" class="content" style="display: none;">
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
            <section id="content4" class="content" style="display: none;">
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
            <section id="content5" class="content" style="display: none;">
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
            <section id="content6" class="content" style="display: none;">
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
            <section id="content7" class="content" style="display: none;">
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
            <section id="content8" class="content" style="display: none;">
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

    // Collapsible functionality for modules
    const collapsibleButtons = document.querySelectorAll(".collapsible");
    const content1 = document.getElementById("content1");
    const content2 = document.getElementById("content2");
    const content3 = document.getElementById("content3");
    const content4 = document.getElementById("content4");
    const content5 = document.getElementById("content5"); // Added for PHP Built-in Server
    const content6 = document.getElementById("content6");
    const content7 = document.getElementById("content7");
    const content8 = document.getElementById("content8");

    collapsibleButtons.forEach(button => {
        button.addEventListener("click", function() {
            this.classList.toggle("active");
            const content = this.nextElementSibling;
            content.style.display = content.style.display === "block" ? "none" : "block";

            // Reset all content to hidden when a collapsible button is clicked
            content1.style.display = "none";
            content2.style.display = "none";
            content3.style.display = "none";
            content4.style.display = "none";
            content5.style.display = "none"; // Ensure content5 is hidden
            content6.style.display = "none";
            content7.style.display = "none";
            content8.style.display = "none";

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
            content3.style.display = "none";
            content4.style.display = "none";
            content5.style.display = "none"; // Ensure content5 is hidden
            content6.style.display = "none";
            content7.style.display = "none";
            content8.style.display = "none";
            // Show the corresponding content based on link text
            if (this.textContent === "HTML Output From Web Server") {
                content2.style.display = "block";
            } else if (this.textContent === "Hello, World!") {
                content3.style.display = "block";
            } else if (this.textContent === "Non-HTML Output From Web Server") {
                content4.style.display = "block";
            } else if (this.textContent === "PHP Build-in server") { // Check for correct spelling
                content5.style.display = "block"; // Ensure content5 is displayed
            } else if (this.textContent === "PHP CLI") { 
                content6.style.display = "block";
            } else if (this.textContent === "Instruction Separation") { 
                content7.style.display = "block";
            } else if (this.textContent === "PHP Tags") { 
                content8.style.display = "block";
            } else {
                // Default to content1 for other cases (like the module header)
                content1.style.display = "block";
            }
        });
    });
};

</script>
</html>
