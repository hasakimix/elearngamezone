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

</style>
      <!-- Main Content Section -->
        <div class="main-content">
            <!-- Left Sidebar -->
            <aside class="sidebar">
                <button class="back-btn">&larr;</button>
                <div class="module">
                    <button class="collapsible" data-module='module1'>Module 1: Getting started with Python Language</button>
                    <div class="module-content">
                        <ul>
                            <li><a href="#" data-target='content-creating-variables'>Creating variables and assigning values</a></li>
                            <li><a href="#" data-target='content-bloxk-indentation'>Block Indentation</a></li>
                            <li><a href="#" data-target='content-data-types'>Data types</a></li>
                            <li><a href="#" data-target='content-collection-types'>Collection Types</a></li>
                            <li><a href="#" data-target='content-python-gui'>IDLE - Python GUI</a></li>
                            <li><a href="#" data-target='content-user-input'>User Input</a></li>
                            <li><a href="#" data-target='content-modules-and-function'>Built in Modules and Functions</a></li>
                            <li><a href="#" data-target='content-creating-module'>Creating a module</a></li>
                            <li><a href="#" data-target='content-installation-python'>Installation of Python 2.7.x and 3.x</a></li>
                            <li><a href="#" data-target='content-string-function'>String function - str() and repr()</a></li>
                            <li><a href="#" data-target='content-installing-external'>Installing external modules using pip</a></li>
                            <li><a href="#" data-target='content-help-utility'>Help Utility</a></li>
                        </ul>
                    </div>
                </div>
                <div class="module">
                    <button class="collapsible" data-module='module2'>Module 2: Python Data Types</button>
                    <div class="module-content">
                        <ul>
                            <li><a href="#" data-target='content-string-data-type'>String Data Type</a></li>
                            <li><a href="#" data-target='content-set-data-types'>Set Data Types</a></li>
                            <li><a href="#" data-target='content-numbers-data-type'>Numbers data type</a></li>
                            <li><a href="#" data-target='content-list-data-type'>List Data Type</a></li>
                            <li><a href="#" data-target='content-dictionary-data-type'>Dictionary Data Type</a></li>
                            <li><a href="#" data-target='content-tuple-data-type'>Tuple Data Type</a></li>
                        </ul>
                    </div>
                </div>
                <div class="module">
                    <button class="collapsible" data-module='module3'>Module 3: Indentation</button>
                    <div class="module-content">
                        <ul>
                            <li><a href="#" data-target='content-how-Indentation-parsed'>How Indentation is Parsed</a></li>
                            <li><a href="#" data-target='content-indentation-errors'>Indentation Errors</a></li>
                        </ul>
                    </div>
                </div>
                <!--<div class="module">
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
                </div> -->
            </aside>
            

            <!-- Content Section -->
            <section id="content1" class="content" style="display: none;">
                <h1>Module 1: Getting started with Python Language</h1>
                <p>Python 3.x</p>
                <p>Version Release Date</p>
                <ul>
                    <li>3.8 2020-04-29</li>
                    <li>3.7 2018-06-27</li>
                    <li>3.6 2016-12-23</li>
                    <li>3.5 2015-09-13</li>
                    <li>3.4 2014-03-17</li>
                    <li>3.3 2012-09-29</li>
                    <li>3.2 2011-02-20</li>
                    <li>3.1 2009-06-26</li>
                    <li>3.0 2008-12-03</li>
                </ul>
                <p>Python 2.x</p>
                <p>Version Release Date</p>
                <ul>
                    <li>2.7 2010-07-03</li>
                    <li>2.6 2008-10-02</li>
                    <li>2.5 2006-09-19</li>
                    <li>2.4 2004-11-30</li>
                    <li>2.3 2003-07-29</li>
                    <li>2.2 2001-12-21</li>
                    <li>2.1 2001-04-15</li>
                    <li>2.0 2000-10-16</li>
                </ul>
                <p>Getting Started</p>
                <p>Python is a widely used high-level programming language for general-purpose programming, created by Guido van Rossum and first released in 1991. Python features a dynamic type system and automatic memory management and supports multiple programming paradigms, including object-oriented, imperative, functional programming, and procedural styles. It has a large and comprehensive standard library.</p>
                <p>Two major versions of Python are currently in active use:</p>
                <ul>
                    <li>Python 3.x is the current version and is under active development.</li>
                    <li>Python 2.x is the legacy version and will receive only security updates until 2020. No new features will be implemented. Note that many projects still use Python 2, although migrating to Python 3 is getting easier.</li>
                    <p>You can download and install either version of Python here. See Python 3 vs. Python 2 for a comparison between them. In addition, some third-parties offer re-packaged versions of Python that add commonly used libraries and ther features to ease setup for common use cases, such as math, data analysis or scientific use. See the list at the official site.</p>
                    <P>Verify if Python is installed</P>
                    <P>To confirm that Python was installed correctly, you can verify that by running the following command in your favorite terminal (If you are using Windows OS, you need to add path of python to the environment variable before using it in command prompt):</P>
<pre>
$ python --version
Python 3.x Version ≥ 3.0</pre>
                    <p>If you have Python 3 installed, and it is your default version (see Troubleshooting for more details) you should see something like this:</p>
<pre>
$ python --version
Python 3.6.0</pre>
                    <p>If you have Python 2 installed, and it is your default version (see Troubleshooting for more details) you should see something like this:</p>
<pre>
$ python --version
Python 2.7.13</pre>
                    <p>If you have installed Python 3, but $ python --version outputs a Python 2 version, you also have Python 2 installed. This is often the case on MacOS, and many Linux distributions. Use $ python3 instead to explicitly use the Python 3 interpreter.</p>
                    <p>Hello, World in Python using IDLE</p>
                    <p>IDLE is a simple editor for Python, that comes bundled with Python.</p>
                    <p>How to create Hello, World program in IDLE</p>
                    <ul>
                        <li>Open IDLE on your system of choice.</li>
                        <ul>
                            <li>In older versions of Windows, it can be found at All Programs under the Windows menu.</li>
                            <li>In Windows 8+, search for IDLE or find it in the apps that are present in your system.</li>
                            <li>On Unix-based (including Mac) systems you can open it from the shell by typing $ idle python_file.py</li>
                        </ul>
                        <li>It will open a shell with options along the top</li>
                    </ul>
                    <p>In the shell, there is a prompt of three right angle brackets:</p>
<pre>
>>></pre>
                    <p>Now write the following code in the prompt:</p>
<pre>
>>> print("Hello, World")</pre>
                    <p>Hit Enter .</p>
<pre>
>>> print("Hello, World")
Hello, World</pre>
                    <p>Hello World Python file</p>
                    <p>Create a new file hello.py that contains the following line:</p>
<pre>
Python 3.x Version ≥ 3.0
 print('Hello, World')
Python 2.x Version ≥ 2.6</pre>
                    <p>You can use the Python 3 print function in Python 2 with the following import statement:</p>
<pre>
from __future__ import print_function</pre>
                    <p>Python 2 has a number of functionalities that can be optionally imported from Python 3 using the __future__ module, as discussed here.</p>
                    <ul>Python 2.x Version ≤ 2.7</ul>
                    <p>If using Python 2, you may also type the line below. Note that this is not valid in Python 3 and thus not recommended because it reduces cross-version code compatibility.</p>
<pre>
print 'Hello, World'</pre>
                    <p>In your terminal, navigate to the directory containing the file hello.py.</p>
                    <p>Type python hello.py, then hit the Enter key.</p>
<pre>
$ python hello.py
Hello, World</pre>
                    <p>You should see Hello, World printed to the console.</p>
                    <p>You can also substitute hello.py with the path to your file. For example, if you have the file in your home directory and your user is "user" on Linux, you can type python /home/user/hello.py.</p>
                    <p>Launch an interactive Python shell</p>
                    <p>By executing (running) the python command in your terminal, you are presented with an interactive Python shell. This is also known as the Python Interpreter or a REPL (for 'Read Evaluate Print Loop').</p>
<pre>
$ python
Python 2.7.12 (default, Jun 28 2016, 08:46:01)
[GCC 6.1.1 20160602] on linux
Type "help", "copyright", "credits" or "license" for more information.
>>> print 'Hello, World'
Hello, World
>>></pre>
                    <p>If you want to run Python 3 from your terminal, execute the command python3.</p>
<pre>
$ python3
Python 3.6.0 (default, Jan 13 2017, 00:00:00)
[GCC 6.1.1 20160602] on linux
Type "help", "copyright", "credits" or "license" for more information.
>>> print('Hello, World')
Hello, World
>>></pre>
                    <p>Alternatively, start the interactive prompt and load file with python -i &lt;file.py>.</p>
                    <p>In command line, run:</p>
<pre>
$ python -i hello.py
"Hello World"
>>></pre>
                    <p>There are multiple ways to close the Python shell:</p>
<pre>
>>> exit()</pre>
                    <p>or</p>
<pre>
>>> quit()</pre>
                    <p>Alternatively, CTRL + D will close the shell and put you back on your terminal's command line.</p>
                    <p>If you want to cancel a command you're in the middle of typing and get back to a clean command prompt, while staying inside the Interpreter shell, use CTRL + C .</p>
                    <p>Other Online Shells</p>
                    <p>Various websites provide online access to Python shells.</p>
                    <p>Online shells may be useful for the following purposes:</p>
                    <ul>
                        <li>Run a small code snippet from a machine which lacks python installation(smartphones, tablets etc).</li>
                        <li>Learn or teach basic Python.</li>
                        <li>Solve online judge problems.</li>
                    </ul>
                    <p>Examples:</p>
                    <ul>
                        <ul>Disclaimer: documentation author(s) are not affiliated with any resources listed below.</ul>
                        <li>https://www.python.org/shell/ - The online Python shell hosted by the official Python website.</li>
                        <li>https://ideone.com/ - Widely used on the Net to illustrate code snippet behavior.</li>
                        <li>https://repl.it/languages/python3 - Powerful and simple online compiler, IDE and interpreter. Code, compile, and run code in Python.</li>
                        <li>https://www.tutorialspoint.com/execute_python_online.php - Full-featured UNIX shell, and a user-friendly project explorer.</li>
                        <li>http://rextester.com/l/python3_online_compiler - Simple and easy to use IDE which shows execution time</li>
                    </ul>
                    <p>Run commands as a string</p>
                    <p>Python can be passed arbitrary code as a string in the shell:</p>
<pre>
$ python -c 'print("Hello, World")'
Hello, World</pre>
                    <p>This can be useful when concatenating the results of scripts together in the shell.</p>
                    <p>Shells and Beyond</p>
                    <p>Package Management - The PyPA recommended tool for installing Python packages is PIP. To install, on your command line execute pip install <the package name>. For instance, pip install numpy. (Note: On windows you must add pip to your PATH environment variables. To avoid this, use python -m pip install &lt;the package name>)</p>
                    <p>Shells - So far, we have discussed different ways to run code using Python's native interactive shell. Shells use</p>
                    <p>Python's interpretive power for experimenting with code real-time. Alternative shells include IDLE - a pre-bundled GUI, IPython - known for extending the interactive experience, etc.</p>
                    <p>Programs - For long-term storage you can save content to .py files and edit/execute them as scripts or programs with external tools e.g. shell, IDEs (such as PyCharm), Jupyter notebooks, etc. Intermediate users may use these tools; however, the methods discussed here are sufficient for getting started.</p>
                    <p>Python tutor allows you to step through Python code so you can visualize how the program will flow, and helps you to understand where your program went wrong.</p>
                    <p>PEP8 defines guidelines for formatting Python code. Formatting code well is important so you can quickly read what the code does.</p>
            </section>

            <section id="content-creating-variables" class="content" style="display: none;">
                    <h1>Creating variables and assigning values</h1>
                    <p>To create a variable in Python, all you need to do is specify the variable name, and then assign a value to it.</p>
<pre>
&lt;variable name> = &lt;value></pre>
                    <p>Python uses = to assign values to variables. There's no need to declare a variable in advance (or to assign a data type to it), assigning a value to a variable itself declares and initializes the variable with that value. There's no way to declare a variable without assigning it an initial value.</p>
<pre>
# Integer
a = 2
print(a)
# Output: 2

# Integer
b = 9223372036854775807
print(b)
# Output: 9223372036854775807

# Floating point
pi = 3.14
print(pi)
# Output: 3.14

# String
c = 'A'
print(c)
# Output: A

# String
name = 'John Doe'
print(name)
# Output: John Doe

# Boolean
q = True
print(q)
# Output: True

# Empty value or null data type
x = None
print(x)
# Output: None</pre>
                    <p>Variable assignment works from left to right. So the following will give you an syntax error.</p>
<pre>
0 = x
=> Output: SyntaxError: can't assign to literal</pre>
                    <p>You can not use python's keywords as a valid variable name. You can see the list of keyword by:</p>
<pre>
import keyword
print(keyword.kwlist)</pre>
                    <p>Rules for variable naming:</p>
                    <ul>1. Variables names must start with a letter or an underscore.</ul>
<pre> 
x = True # valid
 _y = True # valid
 9x = False # starts with numeral
=> SyntaxError: invalid syntax
 $y = False # starts with symbol
=> SyntaxError: invalid syntax</pre>
                    <ul>2. The remainder of your variable name may consist of letters, numbers and underscores.</ul>
<pre>
has_0_in_it = "Still Valid"</pre>
                    <ul>3. Names are case sensitive.</ul>
<pre>
x = 9
y = X*5
=>NameError: name 'X' is not defined</pre>
                    <p>Even though there's no need to specify a data type when declaring a variable in Python, while allocating the necessary area in memory for the variable, the Python interpreter automatically picks the most suitable built-in type for it:</p>
<pre>
a = 2
print(type(a))
# Output: &lt;type 'int'>
b = 9223372036854775807
print(type(b))
# Output: &lt;type 'int'>
pi = 3.14
print(type(pi))
# Output: &lt;type 'float'>
c = 'A'
print(type(c))
# Output: &lt;type 'str'>
name = 'John Doe'
print(type(name))
# Output: &lt;type 'str'>
q = True
print(type(q))
# Output: &lt;type 'bool'>
x = None
print(type(x))
# Output: &lt;type 'NoneType'></pre>
                    <p>Now you know the basics of assignment, let's get this subtlety about assignment in python out of the way.</p>
                    <p>When you use = to do an assignment operation, what's on the left of = is a name for the object on the right. Finally, what = does is assign the reference of the object on the right to the name on the left.</p>
                    <p>That is:</p>
<pre>
a_name = an_object # "a_name" is now a name for the reference to the object "an_object"</pre>
                    <p>So, from many assignment examples above, if we pick pi = 3.14, then pi is a name (not the name, since an object can have multiple names) for the object 3.14. If you don't understand something below, come back to this point and read this again! Also, you can take a look at this for a better understanding.</p>
                    <p>You can assign multiple values to multiple variables in one line. Note that there must be the same number of arguments on the right and left sides of the = operator:</p>
<pre>
a, b, c = 1, 2, 3
print(a, b, c)
# Output: 1 2 3

a, b, c = 1, 2
=> Traceback (most recent call last):
=> File "name.py", line N, in &lt;module>
=> a, b, c = 1, 2
=> ValueError: need more than 2 values to unpack

a, b = 1, 2, 3
=> Traceback (most recent call last):
=> File "name.py", line N, in &lt;module>
=> a, b = 1, 2, 3
=> ValueError: too many values to unpack</pre>
                    <p>The error in last example can be obviated by assigning remaining values to equal number of arbitrary variables. This dummy variable can have any name, but it is conventional to use the underscore (_) for assigning unwanted values:</p>
<pre>
a, b, _ = 1, 2, 3
print(a, b)
# Output: 1, 2</pre>
                    <p>Note that the number of _ and number of remaining values must be equal. Otherwise 'too many values to unpack error' is thrown as above:</p>
<pre>
a, b, _ = 1,2,3,4
=>Traceback (most recent call last):
=>File "name.py", line N, in <module>
=>a, b, _ = 1,2,3,4
=>ValueError: too many values to unpack (expected 3)</pre>
                    <p>You can also assign a single value to several variables simultaneously.</p>
<pre>
a = b = c = 1
print(a, b, c)
# Output: 1 1 1</pre>
                    <p>When using such cascading assignment, it is important to note that all three variables a, b and c refer to the same object in memory, an int object with the value of 1. In other words, a, b and c are three different names given to the same int object. Assigning a different object to one of them afterwards doesn't change the others, just as expected:</p>
<pre>
a = b = c = 1 # all three names a, b and c refer to same int object with value 1
print(a, b, c)
# Output: 1 1 1
b = 2 # b now refers to another int object, one with a value of 2
print(a, b, c)
# Output: 1 2 1 # so output is as expected.</pre>
                    <p>The above is also true for mutable types (like list, dict, etc.) just as it is true for immutable types (like int, string, tuple, etc.):</p>
<pre>
x = y = [7, 8, 9] # x and y refer to the same list object just created, [7, 8, 9]
x = [13, 8, 9] # x now refers to a different list object just created, [13, 8, 9]
print(y) # y still refers to the list it was first assigned
# Output: [7, 8, 9]</pre>
                    <p>So far so good. Things are a bit different when it comes to modifying the object (in contrast to assigning the name to a different object, which we did above) when the cascading assignment is used for mutable types. Take a look below, and you will see it first hand:</p>
<pre>
x = y = [7, 8, 9] # x and y are two different names for the same list object just created, [7,
8, 9]
x[0] = 13 # we are updating the value of the list [7, 8, 9] through one of its names, x
in this case
print(y) # printing the value of the list using its other name
# Output: [13, 8, 9] # hence, naturally the change is reflected</pre>
                    <p>Nested lists are also valid in python. This means that a list can contain another list as an element.</p>
<pre>
x = [1, 2, [3, 4, 5], 6, 7] # this is nested list
print x[2]
# Output: [3, 4, 5]
print x[2][1]
# Output: 4</pre>
                    <p>Lastly, variables in Python do not have to stay the same type as which they were first defined -- you can simply use = to assign a new value to a variable, even if that value is of a different type.</p>
<pre>
a = 2
print(a)
# Output: 2
a = "New value"
print(a)
# Output: New value</pre>
                    <p>If this bothers you, think about the fact that what's on the left of = is just a name for an object. First you call the int object with value 2 a, then you change your mind and decide to give the name a to a string object, having value 'New value'. Simple, right?</p>
            </section>

            <section id="content-bloxk-indentation" class="content" style="display: none;">
                    <h1>Block Indentation</h1>
                    <p>Python uses indentation to define control and loop constructs. This contributes to Python's readability, however, it requires the programmer to pay close attention to the use of whitespace. Thus, editor miscalibration could result in code that behaves in unexpected ways.</p>
                    <p>Python uses the colon symbol (:) and indentation for showing where blocks of code begin and end (If you come from another language, do not confuse this with somehow being related to the ternary operator). That is, blocks in Python, such as functions, loops, if clauses and other constructs, have no ending identifiers. All blocks start with a colon and then contain the indented lines below it.</p>
                    <p>For example:</p>
<pre>
def my_function(): # This is a function definition. Note the colon (:)
    a = 2 # This line belongs to the function because it's indented
    return a # This line also belongs to the same function
print(my_function()) # This line is OUTSIDE the function block</pre>
                    <p>or</p>
<pre>
if a > b: # If block starts here
    print(a) # This is part of the if block
else: # else must be at the same level as if
    print(b) # This line is part of the else block</pre>
                    <p>Blocks that contain exactly one single-line statement may be put on the same line, though this form is generally not considered good style:</p>
<pre>
if a > b: print(a)
else: print(b)</pre>
                    <p>Attempting to do this with more than a single statement will not work:</p>
<pre>
if x > y: y = x
    print(y) # IndentationError: unexpected indent
if x > y: while y != z: y -= 1 # SyntaxError: invalid syntax</pre>
                    <p>An empty block causes an IndentationError. Use pass (a command that does nothing) when you have a block with no content:</p>
<pre>
def will_be_implemented_later():
    pass</pre>
                    <p>Spaces vs. Tabs</p>
                    <p>In short: always use 4 spaces for indentation.</p>
                    <p>Using tabs exclusively is possible but PEP 8, the style guide for Python code, states that spaces are preferred.</p>
                    <p>Python 3.x Version ≥ 3.0</p>
                    <p>Python 3 disallows mixing the use of tabs and spaces for indentation. In such case a compile-time error is generated: Inconsistent use of tabs and spaces in indentation and the program will not run.</p>
                    <p>Python 2.x Version ≤ 2.7</p>
                    <p>Python 2 allows mixing tabs and spaces in indentation; this is strongly discouraged. The tab character completes the previous indentation to be a multiple of 8 spaces. Since it is common that editors are configured to show tabs as multiple of 4 spaces, this can cause subtle bugs.</p>
                    <p>Citing PEP 8:</p>
                    <ul>When invoking the Python 2 command line interpreter with the -t option, it issues warnings about codethat illegally mixes tabs and spaces. When using -tt these warnings become errors. These options arehighly recommended!</ul>
                    <p>Many editors have "tabs to spaces" configuration. When configuring the editor, one should differentiate between the tab character ('\t') and the Tab key.</p>
                    <ul>
                        <li>The tab character should be configured to show 8 spaces, to match the language semantics - at least in cases when (accidental) mixed indentation is possible. Editors can also automatically convert the tab character to spaces.</li>
                        <li>However, it might be helpful to configure the editor so that pressing the Tab key will insert 4 spaces, instead of inserting a tab character.</li>
                    </ul>
                    <p>Python source code written with a mix of tabs and spaces, or with non-standard number of indentation spaces can be made pep8-conformant using autopep8. (A less powerful alternative comes with most Python installations: reindent.py)</p>
            </section>

            <section id="content-data-types" class="content" style="display: none;">
                    <h1>Data types</h1>
                    <p>Built-in Types</p>
                    <p>Booleans</p>
                    <p>bool: A boolean value of either True or False. Logical operations like and, or, not can be performed on booleans.</p>
<pre>
x or y # if x is False then y otherwise x
x and y # if x is False then x otherwise y
not x # if x is True then False, otherwise True
</pre>
                    <p>In Python 2.x and in Python 3.x, a boolean is also an int. The bool type is a subclass of the int type and True and False are its only instances:</p>
<pre>
issubclass(bool, int) # True
isinstance(True, bool) # True
isinstance(False, bool) # True</pre>
                    <p>If boolean values are used in arithmetic operations, their integer values (1 and 0 for True and False) will be used to return an integer result:</p>
<pre>
True + False == 1 # 1 + 0 == 1
True * True == 1 # 1 * 1 == 1</pre>
                    <p>Numbers</p>   
                    <ul>
                        <li>int: Integer number</li>
                    </ul>
                    <ul>
<pre>
a = 2
b = 100
c = 123456789
d = 38563846326424324</pre>
                    </ul>
                    <ul>Integers in Python are of arbitrary sizes.</ul>
                    <ul>Note: in older versions of Python, a long type was available and this was distinct from int. The two have been unified.</ul>
                    <ul>
                        <li>float: Floating point number; precision depends on the implementation and system architecture, for CPython the float datatype corresponds to a C double.</li>
                    </ul>
                    <ul>
<pre>
a = 2.0
b = 100.e0
c = 123456789.e1</pre>
                    </ul>
                    <ul>
                        <li>complex: Complex numbers</li>
                    </ul>
                    <ul>
<pre>
a = 2 + 1j
b = 100 + 10j</pre>
                    </ul>
                    <p>The <, <=, > and >= operators will raise a TypeError exception when any operand is a complex number.</p>
                    <p>Strings</p>
                    <p>Python 3.x Version ≥ 3.0</p>
                    <ul>
                        <ul>
                            <li>str: a unicode string. The type of 'hello'</li>
                            <li>bytes: a byte string. The type of b'hello'</li>
                        </ul>
                    </ul>
                    <p>Python 2.x Version ≤ 2.7</p>
                    <ul>
                        <ul>
                            <li>str: a byte string. The type of 'hello'</li>
                            <li>bytes: synonym for str</li>
                            <li>unicode: a unicode string. The type of u'hello'</li>
                        </ul>
                    </ul>
                    <p>Sequences and collections</p>
                    <p>Python differentiates between ordered sequences and unordered collections (such as set and dict).</p>
                    <ul>
                        <ul>
                            <li>strings (str, bytes, unicode) are sequences</li>
                            <li>reversed: A reversed order of str with reversed function</li>
                        </ul>
                        <ul>
<pre>
a = reversed('hello')</pre>
                            <li>tuple: An ordered collection of n values of any type (n >= 0).</li>
                        </ul>
                        <ul>
<pre>
a = (1, 2, 3)
b = ('a', 1, 'python', (1, 2))
b[2] = 'something else' # returns a TypeError</pre>
                        </ul>
                    </ul>
                    <ul><ul>Supports indexing; immutable; hashable if all its members are hashable</ul></ul>
                    <ul>
                        <ul>
                            <li>list: An ordered collection of n values (n >= 0)</li>
<pre>
a = [1, 2, 3]
b = ['a', 1, 'python', (1, 2), [1, 2]]
b[2] = 'something else' # allowed</pre>
                        </ul>
                    </ul>
                    <ul><ul>Not hashable; mutable.</ul></ul>
                    <ul>
                        <ul>
                            <li>set: An unordered collection of unique values. Items must be hashable.</li>
<pre>
a = {1, 2, 'a'}</pre>
                            <li>dict: An unordered collection of unique key-value pairs; keys must be hashable.</li>
<pre>
a = {1: 'one',
    2: 'two'}
b = {'a': [1, 2, 3],
    'b': 'a string'}</pre>
                        <ul>An object is hashable if it has a hash value which never changes during its lifetime (it needs a __hash__() method), and can be compared to other objects (it needs an __eq__() method). Hashable objects which compare equality must have the same hash value.</ul>
                        </ul>
                    </ul>
                    <p>Built-in constants</p>
                    <p>In conjunction with the built-in datatypes there are a small number of built-in constants in the built-in namespace:</p>
                    <ul>
                        <li>True: The true value of the built-in type bool</li>
                        <li>False: The false value of the built-in type bool</li>
                        <li>None: A singleton object used to signal that a value is absent</li>
                        <li>Ellipsis or ...: used in core Python3+ anywhere and limited usage in Python2.7+ as part of array notation. numpy and related packages use this as a 'include everything' reference in arrays.</li>
                        <li>NotImplemented: a singleton used to indicate to Python that a special method doesn't support the specific arguments, and Python will try alternatives if available.</li>
                    </ul>
<pre>
a = None # No value will be assigned. Any valid datatype can be assigned later</pre>
                    <p>Python 3.x Version ≥ 3.0</p>
                    <p>None doesn't have any natural ordering. Using ordering comparison operators (<, <=, >=, >) isn't supported anymore and will raise a TypeError.</p>
                    <p>Python 2.x Version ≤ 2.7</p>
                    <p>None is always less than any number (None < -32 evaluates to True).</p>
                    <p>Testing the type of variables</p>
                    <p>In python, we can check the datatype of an object using the built-in function type.</p>
<pre>
a = '123'
print(type(a))
# Out: &lt;class 'str'>
b = 123
print(type(b))
# Out: &lt;class 'int'></pre>
                    <p>In conditional statements it is possible to test the datatype with isinstance. However, it is usually not encouraged to rely on the type of the variable.</p>
<pre>
i = 7
if isinstance(i, int):
    i += 1
elif isinstance(i, str):
    i = int(i)
    i += 1</pre>
                    <p>For information on the differences between type() and isinstance() read: Differences between isinstance and type in Python</p>
                    <p>To test if something is of NoneType:</p>
<pre>
x = None
if x is None:
    print('Not a surprise, I just defined x as None.')</pre>
                    <p>Converting between datatypes</p>
                    <p>You can perform explicit datatype conversion.</p>
                    <p>For example, '123' is of str type and it can be converted to integer using int function.</p>
<pre>
a = '123'
b = int(a)</pre>
                    <p>Converting from a float string such as '123.456' can be done using float function.</p>
<pre>
a = '123.456'
b = float(a)
c = int(a) # ValueError: invalid literal for int() with base 10: '123.456'
d = int(b) # 123</pre>
                    <p>You can also convert sequence or collection types</p>
<pre>
a = 'hello'
list(a) # ['h', 'e', 'l', 'l', 'o']
set(a) # {'o', 'e', 'l', 'h'}
tuple(a) # ('h', 'e', 'l', 'l', 'o')</pre>
                    <p>Explicit string type at definition of literals</p>
                    <p>With one letter labels just in front of the quotes you can tell what type of string you want to define.</p>
                    <ul>
                        <li>b'foo bar': results bytes in Python 3, str in Python 2</li>
                        <li>u'foo bar': results str in Python 3, unicode in Python 2</li>
                        <li>'foo bar': results str</li>
                        <li>r'foo bar': results so called raw string, where escaping special characters is not necessary, everything is taken verbatim as you typed</li>
                    </ul>
<pre>
normal = 'foo\nbar' # foo
                    # bar
escaped = 'foo\\nbar' # foo\nbar
raw = r'foo\nbar' # foo\nbar</pre>
                    <p>Mutable and Immutable Data Types</p>
                    <p>An object is called mutable if it can be changed. For example, when you pass a list to some function, the list can be changed:</p>
<pre>
def f(m):
    m.append(3) # adds a number to the list. This is a mutation.

x = [1, 2]
f(x)
x == [1, 2] # False now, since an item was added to the list</pre>
                    <p>An object is called immutable if it cannot be changed in any way. For example, integers are immutable, since there's no way to change them:</p>
<pre>
def bar():
    x = (1, 2)
    g(x)
    x == (1, 2) # Will always be True, since no function can change the object (1, 2)</pre>
                    <p>Note that variables themselves are mutable, so we can reassign the variable x, but this does not change the object that x had previously pointed to. It only made x point to a new object.</p>
                    <p>Data types whose instances are mutable are called mutable data types, and similarly for immutable objects and datatypes.</p>
                    <p>Examples of immutable Data Types:</p>
                    <ul>
                        <ul>
                            <li>int, long, float, complex</li>
                            <li>str</li>
                            <li>bytes</li>
                            <li>tuple</li>
                            <li>frozenset</li>
                        </ul>
                    </ul>    
                    <p>Examples of mutable Data Types:</p>
                    <ul>
                        <ul>
                            <li>bytearray</li>
                            <li>list</li>
                            <li>set</li>
                            <li>dict</li>
                        </ul>
                    </ul>
            </section>
            <section id="content-collection-types" class="content" style="display: none;">
                    <h1>Collection types</h1>
                    <p>There are a number of collection types in Python. While types such as int and str hold a single value, collection types hold multiple values.</p>
                    <p>Lists</p>
                    <p>The list type is probably the most commonly used collection type in Python. Despite its name, a list is more like an array in other languages, mostly JavaScript. In Python, a list is merely an ordered collection of valid Python values. A list can be created by enclosing values, separated by commas, in square brackets:</p>
<pre>
int_list = [1, 2, 3]
string_list = ['abc', 'defghi']</pre>
                    <p>A list can be empty:</p>
<pre>
empty_list = []</pre>
                    <p>The elements of a list are not restricted to a single data type, which makes sense given that Python is a dynamic language:</p>
<pre>
mixed_list = [1, 'abc', True, 2.34, None]</pre>
                    <p>A list can contain another list as its element:</p>
<pre>
nested_list = [['a', 'b', 'c'], [1, 2, 3]]</pre>
                    <p>The elements of a list can be accessed via an index, or numeric representation of their position. Lists in Python are zero-indexed meaning that the first element in the list is at index 0, the second element is at index 1 and so on:</p>
<pre>
names = ['Alice', 'Bob', 'Craig', 'Diana', 'Eric']
print(names[0]) # Alice
print(names[2]) # Craig</pre>
                    <p>Indices can also be negative which means counting from the end of the list (-1 being the index of the last element). So, using the list from the above example:</p>
<pre>
print(names[-1]) # Eric
print(names[-4]) # Bob</pre>
                    <p>Lists are mutable, so you can change the values in a list:</p>
<pre>
names[0] = 'Ann'
print(names)
# Outputs ['Ann', 'Bob', 'Craig', 'Diana', 'Eric']</pre>
                    <p>Besides, it is possible to add and/or remove elements from a list:</p>
                    <p>Append object to end of list with L.append(object), returns None.</p>
<pre>
names = ['Alice', 'Bob', 'Craig', 'Diana', 'Eric']
names.append("Sia")
print(names)
# Outputs ['Alice', 'Bob', 'Craig', 'Diana', 'Eric', 'Sia']</pre>
                    <p>Add a new element to list at a specific index. L.insert(index, object)</p>
<pre>
names.insert(1, "Nikki")
print(names)
# Outputs ['Alice', 'Nikki', 'Bob', 'Craig', 'Diana', 'Eric', 'Sia']</pre>
                    <p>Remove the first occurrence of a value with L.remove(value), returns None</p>
<pre>
names.remove("Bob")
print(names) # Outputs ['Alice', 'Nikki', 'Craig', 'Diana', 'Eric', 'Sia']</pre>
                    <p>Get the index in the list of the first item whose value is x. It will show an error if there is no such item.</p>
<pre>
name.index("Alice")
0</pre>
                    <p>Count length of list</p>
<pre>
len(names)
6</pre>
                    <p>count occurrence of any item in list</p>
<pre>
a = [1, 1, 1, 2, 3, 4]
a.count(1)
3</pre>
                    <p>Reverse the list</p>
<pre>a.reverse()
[4, 3, 2, 1, 1, 1]
# or
a[::-1]
[4, 3, 2, 1, 1, 1]</pre>
                    <p>Remove and return item at index (defaults to the last item) with L.pop([index]), returns the item</p>
<pre>
names.pop() # Outputs 'Sia'</pre>
                    <p>You can iterate over the list elements like below:</p>
<pre>
for element in my_list:
    print (element)</pre>
                    <p>Tuples</p>
                    <p>A tuple is similar to a list except that it is fixed-length and immutable. So the values in the tuple cannot be changed nor the values be added to or removed from the tuple. Tuples are commonly used for small collections of values that will not need to change, such as an IP address and port. Tuples are represented with parentheses instead of square brackets:</p>
<pre>
ip_address = ('10.20.30.40', 8080)</pre>
                    <p>The same indexing rules for lists also apply to tuples. Tuples can also be nested and the values can be any valid Python valid.</p>
                    <p>A tuple with only one member must be defined (note the comma) this way:</p>
<pre>
one_member_tuple = ('Only member',)</pre>
                    <p>or</p>
<pre>
one_member_tuple = 'Only member', # No brackets</pre>
                    <p>or just using tuple syntax</p>
<pre>
one_member_tuple = tuple(['Only member'])</pre>
                    <p>Dictionaries</p>
                    <p>A dictionary in Python is a collection of key-value pairs. The dictionary is surrounded by curly braces. Each pair is separated by a comma and the key and value are separated by a colon. Here is an example:</p>
<pre>
state_capitals = {
    'Arkansas': 'Little Rock',
    'Colorado': 'Denver',
    'California': 'Sacramento',
    'Georgia': 'Atlanta'
}</pre>
                    <p>To get a value, refer to it by its key:</p>
<pre>
ca_capital = state_capitals['California']</pre>
                    <p>You can also get all of the keys in a dictionary and then iterate over them:</p>
<pre>
for k in state_capitals.keys():
    print('{} is the capital of {}'.format(state_capitals[k], k))</pre>

                    <p>Dictionaries strongly resemble JSON syntax. The native json module in the Python standard library can be used to convert between JSON and dictionaries.</p>
                    <p>set</p>
                    <p>A set is a collection of elements with no repeats and without insertion order but sorted order. They are used in situations where it is only important that some things are grouped together, and not what order they were included. For large groups of data, it is much faster to check whether or not an element is in a set than it is to do the same for a list.</p>
                    <p>Defining a set is very similar to defining a dictionary:</p>
<pre>
first_names = {'Adam', 'Beth', 'Charlie'}</pre>
                    <p>Or you can build a set using an existing list:</p>
<pre>
my_list = [1,2,3]
my_set = set(my_list)</pre>
                    <p>Check membership of the set using in:</p>
<pre>
if name in first_names:
    print(name)</pre>
                    <p>You can iterate over a set exactly like a list, but remember: the values will be in an arbitrary, implementationdefined order.</p>
                    <p>defaultdict</p>
                    <p>A defaultdict is a dictionary with a default value for keys, so that keys for which no value has been explicitly defined can be accessed without errors. defaultdict is especially useful when the values in the dictionary are collections (lists, dicts, etc) in the sense that it does not need to be initialized every time when a new key is used</p>
                    <p>A defaultdict will never raise a KeyError. Any key that does not exist gets the default value returned.</p>
                    <p>For example, consider the following dictionary</p>
<pre>
>>> state_capitals = {
    'Arkansas': 'Little Rock',
    'Colorado': 'Denver',
    'California': 'Sacramento',
    'Georgia': 'Atlanta'
}</pre>
                    <p>If we try to access a non-existent key, python returns us an error as follows</p>
<pre>
>>> state_capitals['Alabama']
Traceback (most recent call last):

    File "&lt;ipython-input-61-236329695e6f>", line 1, in &lt;module>
        state_capitals['Alabama']

KeyError: 'Alabama</pre>
                    <p>Let us try with a defaultdict. It can be found in the collections module.</p>
<pre>
>>> from collections import defaultdict
>>> state_capitals = defaultdict(lambda: 'Boston')</pre>
                    <p>What we did here is to set a default value (Boston) in case the give key does not exist. Now populate the dict as before:</p>
<pre>
>>> state_capitals['Arkansas'] = 'Little Rock'
>>> state_capitals['California'] = 'Sacramento'
>>> state_capitals['Colorado'] = 'Denver'
>>> state_capitals['Georgia'] = 'Atlanta'</pre>
                    <p>If we try to access the dict with a non-existent key, python will return us the default value i.e. Boston</p>
<pre>
>>> state_capitals['Alabama']
'Boston'</pre>
                    <p>and returns the created values for existing key just like a normal dictionary</p>
<pre>
>>> state_capitals['Arkansas']
'Little Rock'</pre>
            </section>
            <section id="content-python-gui" class="content" style="display: none;">
                    <h1>IDLE - Python GUI</h1>
                    <p>IDLE is Python’s Integrated Development and Learning Environment and is an alternative to the command line. As the name may imply, IDLE is very useful for developing new code or learning python. On Windows this comes with the Python interpreter, but in other operating systems you may need to install it through your package manager.</p>
                    <p>The main purposes of IDLE are:</p>
                    <ul>
                        <li>Multi-window text editor with syntax highlighting, autocompletion, and smart indent</li>
                        <li>Python shell with syntax highlighting</li>
                        <li>Integrated debugger with stepping, persistent breakpoints, and call stack visibility</li>
                        <li>Automatic indentation (useful for beginners learning about Python's indentation)</li>
                        <li>Saving the Python program as .py files and run them and edit them later at any them using IDLE.</li>
                    </ul>
                    <p>In IDLE, hit F5 or run Python Shell to launch an interpreter. Using IDLE can be a better learning experience for new users because code is interpreted as the user writes.</p>
                    <p>Note that there are lots of alternatives, see for example this discussion or this list.</p>
                    <p>Troubleshooting</p>
                    <ul>
                        <li><p>Windows</p></li>
                        <ul><p>If you're on Windows, the default command is python. If you receive a "'python' is not recognized" error, the most likely cause is that Python's location is not in your system's PATH environment variable. This can be accessed by right-clicking on 'My Computer' and selecting 'Properties' or by navigating to 'System' through 'Control Panel'. Click on 'Advanced system settings' and then 'Environment Variables...'. Edit the PATH variable to include the directory of your Python installation, as well as the Script folder (usually C:\Python27;C:\Python27\Scripts). This requires administrative privileges and may require a restart.</p></ul>
                        
                        <ul><p>When using multiple versions of Python on the same machine, a possible solution is to rename one of the python.exe files. For example, naming one version python27.exe would cause python27 to become the Python command for that version.</p></ul>
                        
                        <ul><p>You can also use the Python Launcher for Windows, which is available through the installer and comes by default. It allows you to select the version of Python to run by using py -[x.y] instead of python[x.y]. You can use the latest version of Python 2 by running scripts with py -2 and the latest version of Python 3 by running scripts with py -3.</p></ul>
                        <li><p>Debian/Ubuntu/MacOS</p></li>
                        <ul><p>This section assumes that the location of the python executable has been added to the PATH environmen variable.</p></ul>
                        <ul><p>If you're on Debian/Ubuntu/MacOS, open the terminal and type python for Python 2.x or python3 for Python 3.x.</p></ul>
                        <ul><p>Type which python to see which Python interpreter will be used</p></ul>
                        <li><p>Arch Linux</p></li>
                        <ul><p>The default Python on Arch Linux (and descendants) is Python 3, so use python or python3 for Python 3.x and python2 for Python 2.x.</p></ul>
                        <li><p>Other systems</p></li>
                        <ul><p>Python 3 is sometimes bound to python instead of python3. To use Python 2 on these systems where it is installed, you can use python2.</p></ul>
                    </ul>
            </section>
            <section id="content-user-input" class="content" style="display: none;">
                    <h1>User Input </h1>
                    <p>Interactive input</p>
                    <p>To get input from the user, use the input function (note: in Python 2.x, the function is called raw_input instead, although Python 2.x has its own version of input that is completely different):</p>
                    <p>Python 2.x Version ≥ 2.3</p>
<pre>
name = raw_input("What is your name? ")
# Out: What is your name? _</pre>
                    <ul>
                        <ul>Security Remark Do not use input() in Python2 - the entered text will be evaluated as if it were a Python expression (equivalent to eval(input()) in Python3), which might easily become a vulnerability. See this article for further information on the risks of using this function.</ul>
                    </ul>
                    <p>Python 3.x Version ≥ 3.0</p>
<pre>
name = input("What is your name? ")
# Out: What is your name? _</pre>
                    <p>The remainder of this example will be using Python 3 syntax.</p>
                    <p>The function takes a string argument, which displays it as a prompt and returns a string. The above code provides a prompt, waiting for the user to input.</p>
<pre>
name = input("What is your name? ")
# Out: What is your name?</pre>
                    <p>If the user types "Bob" and hits enter, the variable name will be assigned to the string "Bob":</p>
<pre>
name = input("What is your name? ")
# Out: What is your name? Bob
print(name)
# Out: Bob</pre>
                    <p>Note that the input is always of type str, which is important if you want the user to enter numbers. Therefore, you need to convert the str before trying to use it as a number:</p>
<pre>
x = input("Write a number:")
# Out: Write a number: 10
x / 2
# Out: TypeError: unsupported operand type(s) for /: 'str' and 'int'
float(x) / 2
# Out: 5.0</pre>
                    <p>NB: It's recommended to use try/except blocks to catch exceptions when dealing with user inputs. For instance, if your code wants to cast a raw_input into an int, and what the user writes is uncastable, it raises a ValueError.</p>
            </section>
            <section id="content-modules-and-function" class="content" style="display: none;">
                    <h1>Built in Modules and Functions </h1>
                    <p>A module is a file containing Python definitions and statements. Function is a piece of code which execute some logic.</p>
<pre>
>>> pow(2,3) #8</pre>
                    <p>To check the built in function in python we can use dir(). If called without an argument, return the names in the current scope. Else, return an alphabetized list of names comprising (some of) the attribute of the given object, and of attributes reachable from it.</p>
<pre>
>>> dir(__builtins__)
[
    'ArithmeticError',
    'AssertionError',
    'AttributeError',
    'BaseException',
    'BufferError',
    'BytesWarning',
    'DeprecationWarning',
    'EOFError',
    'Ellipsis',
    'EnvironmentError',
    'Exception',
    'False',
    'FloatingPointError',
    'FutureWarning',
    'GeneratorExit',
    'IOError',
    'ImportError',
    'ImportWarning',
    'IndentationError',
    'IndexError',
    'KeyError',
    'KeyboardInterrupt',
    'LookupError',
    'MemoryError',
    'NameError',
    'None',
    'NotImplemented',
    'NotImplementedError',
    'OSError',
    'OverflowError',
    'PendingDeprecationWarning',
    'ReferenceError',
    'RuntimeError',
    'RuntimeWarning',
    'StandardError',
    'StopIteration',
    'SyntaxError',
    'SyntaxWarning',
    'SystemError',
    'SystemExit',
    'TabError',
    'True',
    'TypeError',
    'UnboundLocalError',
    'UnicodeDecodeError',
    'UnicodeEncodeError',
    'UnicodeError',
    'UnicodeTranslateError',
    'UnicodeWarning',
    'UserWarning',
    'ValueError',
    'Warning',
    'ZeroDivisionError',
    '__debug__',
    '__doc__',
    '__import__',
    '__name__',
    '__package__',
    'abs',
    'all',
    'any',
    'apply',
    'basestring',
    'bin',
    'bool',
    'buffer',
    'bytearray',
    'bytes',
    'callable',
    'chr',
    'classmethod',
    'cmp',
    'coerce',
    'compile',
    'complex',
    'copyright',
    'credits',
    'delattr',
    'dict',
    'dir',
    'divmod',
    'enumerate',
    'eval',
    'execfile',
    'exit',
    'file',
    'filter',
    'float',
    'format',
    'frozenset',
    'getattr',
    'globals',
    'hasattr',
    'hash',
    'help',
    'hex',
    'id',
    'input',
    'int',
    'intern',
    'isinstance',
    'issubclass',
    'iter',
    'len',
    'license',
    'list',
    'locals',
    'long',
    'map',
    'max',
    'memoryview',
    'min',
    'next',
    'object',
    'oct',
    'open',
    'ord',
    'pow',
    'print',
    'property',
    'quit',
    'range',
    'raw_input',
    'reduce',
    'reload',
    'repr',
    'reversed',
    'round',
    'set',
    'setattr',
    'slice',
    'sorted',
    'staticmethod',
    'str',
    'sum',
    'super',
    'tuple',
    'type',
    'unichr',
    'unicode',
    'vars',
    'xrange',
    'zip'
]
</pre>
                    <p>To know the functionality of any function, we can use built in function help .</p>
<pre>
>>> help(max)
Help on built-in function max in module __builtin__:
max(...)
    max(iterable[, key=func]) -> value
    max(a, b, c, ...[, key=func]) -> value
    With a single iterable argument, return its largest item.
    With two or more arguments, return the largest argument</pre>
                    <p>Built in modules contains extra functionalities. For example to get square root of a number we need to include math module</p>
<pre>
>>> import math
>>> math.sqrt(16) # 4.0</pre>
                    <p>To know all the functions in a module we can assign the functions list to a variable, and then print the variable.</p>
<pre>
>>> import math
>>> dir(math)
    ['__doc__', '__name__', '__package__', 'acos', 'acosh',
    'asin', 'asinh', 'atan', 'atan2', 'atanh', 'ceil', 'copysign',
    'cos', 'cosh', 'degrees', 'e', 'erf', 'erfc', 'exp', 'expm1',
    'fabs', 'factorial', 'floor', 'fmod', 'frexp', 'fsum', 'gamma',
    'hypot', 'isinf', 'isnan', 'ldexp', 'lgamma', 'log', 'log10',
    'log1p', 'modf', 'pi', 'pow', 'radians', 'sin', 'sinh', 'sqrt',
    'tan', 'tanh', 'trunc']</pre>
                    <p>it seems __doc__ is useful to provide some documentation in, say, functions</p>
<pre>
>>> math.__doc__
'This module is always available. It provides access to the\nmathematical
    functions defined by the C standard.'</pre>
                    <p>In addition to functions, documentation can also be provided in modules. So, if you have a file named helloWorld.py like this:</p>
<pre>
"""This is the module docstring."""

def sayHello():
    """This is the function docstring."""
    return 'Hello World'</pre>
                    <p>You can access its docstrings like this:</p>
<pre>
>>> import helloWorld
>>> helloWorld.__doc__
'This is the module docstring.'
>>> helloWorld.sayHello.__doc__
'This is the function docstring.'</pre>
                    <ul>
                        <li>For any user defined type, its attributes, its class's attributes, and recursively the attributes of its class's base classes can be retrieved using dir()</li>
                    </ul>
<pre>
>>> class MyClassObject(object):
...     pass
...
>>> dir(MyClassObject)
['__class__', '__delattr__', '__dict__', '__doc__', '__format__', '__getattribute__', '__hash__',
'__init__', '__module__', '__new__', '__reduce__', '__reduce_ex__', '__repr__', '__setattr__',
'__sizeof__', '__str__', '__subclasshook__', '__weakref__']</pre>
                    <p>Any data type can be simply converted to string using a builtin function called str. This function is called by default when a data type is passed to print</p>
<pre>
>>> str(123) # "123"</pre>
            </section>
            <section id="content-creating-module" class="content" style="display: none;">
                    <h1>Creating a module </h1>
                    <p>A module is an importable file containing definitions and statements.</p>
                    <p>A module can be created by creating a .py file.</p>
<pre>
# hello.py
def say_hello():
    print("Hello!")</pre>
                    <p>Functions in a module can be used by importing the module.</p>
                    <p>For modules that you have made, they will need to be in the same directory as the file that you are importing them into. (However, you can also put them into the Python lib directory with the pre-included modules, but should be avoided if possible.)</p>
<pre>
$ python
>>> import hello
>>> hello.say_hello()
=> "Hello!"</pre>
                    <p>Modules can be imported by other modules.</p>
<pre>
# greet.py
import hello
hello.say_hello()</pre>                    
                    <p>Specific functions of a module can be imported.</p>
<pre>
# greet.py
from hello import say_hello
say_hello()</pre>                    
                    <p>Modules can be aliased.</p>
<pre>
# greet.py
import hello as ai
ai.say_hello()</pre>                    
                    <p>A module can be stand-alone runnable script.</p>
<pre>
# run_hello.py
if __name__ == '__main__':
    from hello import say_hello
    say_hello()</pre>
                    <p>Run it!</p>
<pre>
$ python run_hello.py
=> "Hello!"</pre>
                    <p>If the module is inside a directory and needs to be detected by python, the directory should contain a file named __init__.py.</p>
            </section>
            <section id="content-installation-python" class="content" style="display: none;">
                    <h1>Installation of Python 2.7.x and 3.x </h1>
                    <ul>
                        <ul>Note: Following instructions are written for Python 2.7 (unless specified): instructions for Python 3.x are similar.</ul>
                    </ul>
                    <p>Windows</p>
                    <p>First, download the latest version of Python 2.7 from the official Website (https://www.python.org/downloads/). Version is provided as an MSI package. To install it manually, just double-click the file.</p>
                    <p>By default, Python installs to a directory:</p>
<pre>
C:\Python27\</pre>
                    <p>Warning: installation does not automatically modify the PATH environment variable.</p>
                    <p>Assuming that your Python installation is in C:\Python27, add this to your PATH:</p>
<pre>
C:\Python27\;C:\Python27\Scripts\</pre>
                    <p>Now to check if Python installation is valid write in cmd:</p>
<pre>
python --version</pre>
                    <p>Python 2.x and 3.x Side-By-Side</p>
                    <p>To install and use both Python 2.x and 3.x side-by-side on a Windows machine:</p>
                    <ul>
                        1. Install Python 2.x using the MSI installer.
                            <ul>
                                <ul>
                                <li>Ensure Python is installed for all users.</li>
                                <li>Optional: add Python to PATH to make Python 2.x callable from the command-line using python.</li>
                                </ul>
                            </ul>
                            2. Install Python 3.x using its respective installer.
                            <ul>
                                <ul>
                                <li>Again, ensure Python is installed for all users.</li>
                                <li>Optional: add Python to PATH to make Python 3.x callable from the command-line using python. This may override Python 2.x PATH settings, so double-check your PATH and ensure it's configured to your preferences.</li>
                                <li>Make sure to install the py launcher for all users.</li>
                                </ul>
                            </ul>
                    </ul>
                    <p>Python 3 will install the Python launcher which can be used to launch Python 2.x and Python 3.x interchangeably from the command-line:</p>
<pre>
P:\>py -3
Python 3.6.1 (v3.6.1:69c0db5, Mar 21 2017, 17:54:52) [MSC v.1900 32 bit (Intel)] on win32
Type "help", "copyright", "credits" or "license" for more information.
>>>

C:\>py -2
Python 2.7.13 (v2.7.13:a06454b1afa1, Dec 17 2016, 20:42:59) [MSC v.1500 32 Intel)] on win32
Type "help", "copyright", "credits" or "license" for more information.
>>></pre>
                    <p>To use the corresponding version of pip for a specific Python version, use:</p>
<pre>
C:\>py -3 -m pip -V
pip 9.0.1 from C:\Python36\lib\site-packages (python 3.6)

C:\>py -2 -m pip -V
pip 9.0.1 from C:\Python27\lib\site-packages (python 2.7)</pre>                    
                    <p>Linux</p>
                    <p>The latest versions of CentOS, Fedora, Red Hat Enterprise (RHEL) and Ubuntu come with Python 2.7.</p>
                    <p>To install Python 2.7 on linux manually, just do the following in terminal:</p>
<pre>
wget --no-check-certificate https://www.python.org/ftp/python/2.7.X/Python-2.7.X.tgz
tar -xzf Python-2.7.X.tgz
cd Python-2.7.X
./configure
make
sudo make install</pre>                    
                    <p>Also add the path of new python in PATH environment variable. If new python is in /root/python-2.7.X then run export PATH = $PATH:/root/python-2.7.X</p>
                    <p>Now to check if Python installation is valid write in terminal:</p>
<pre>
python --version</pre>                    
                    <p>Ubuntu (From Source)</p>
                    <p>If you need Python 3.6 you can install it from source as shown below (Ubuntu 16.10 and 17.04 have 3.6 version in the universal repository). Below steps have to be followed for Ubuntu 16.04 and lower versions:</p>
<pre>
sudo apt install build-essential checkinstall
sudo apt install libreadline-gplv2-dev libncursesw5-dev libssl-dev libsqlite3-dev tk-dev libgdbmdev libc6-dev libbz2-dev
wget https://www.python.org/ftp/python/3.6.1/Python-3.6.1.tar.xz
tar xvf Python-3.6.1.tar.xz
cd Python-3.6.1/
./configure --enable-optimizations
sudo make altinstall</pre>
                    <p>macOS</p>
                    <p>As we speak, macOS comes installed with Python 2.7.10, but this version is outdated and slightly modified from the regular Python.</p>
                    <ul>
                        <ul>The version of Python that ships with OS X is great for learning but it’s not good for development. The version shipped with OS X may be out of date from the official current Python release, which is considered the stable production version. (source)</ul>
                    </ul>
                    <p>Install Homebrew:</p>
<pre>
/usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"</pre>           
                    <p>Install Python 2.7:</p>
<pre>
brew install python</pre>            
                    <p>For Python 3.x, use the command brew install python3 instead.</p>
            </section>
            <section id="content-string-function" class="content" style="display: none;">
                    <h1>String function - str() and repr()</h1>
                    <p>There are two functions that can be used to obtain a readable representation of an object.</p>
                    <p>repr(x) calls x.__repr__(): a representation of x. eval will usually convert the result of this function back to the original object.</p>
                    <p>str(x) calls x.__str__(): a human-readable string that describes the object. This may elide some technical detail.</p>
                    <p>repr()</p>
                    <p>For many types, this function makes an attempt to return a string that would yield an object with the same value when passed to eval(). Otherwise, the representation is a string enclosed in angle brackets that contains the name of the type of the object along with additional information. This often includes the name and address of the object</p>
                    <p>str()</p>
                    <p>For strings, this returns the string itself. The difference between this and repr(object) is that str(object) does not always attempt to return a string that is acceptable to eval(). Rather, its goal is to return a printable or 'human readable' string. If no argument is given, this returns the empty string, ''.</p>
                    <p>Example 1:</p>
<pre>
s = """w'o"w"""
repr(s) # Output: '\'w\\\'o"w\''
str(s) # Output: 'w\'o"w'
eval(str(s)) == s # Gives a SyntaxError
eval(repr(s)) == s # Output: True</pre>                    
                    <p>Example 2:</p>
<pre>
import datetime
today = datetime.datetime.now()
str(today) # Output: '2016-09-15 06:58:46.915000'
repr(today) # Output: 'datetime.datetime(2016, 9, 15, 6, 58, 46, 915000)'</pre>                    
                    <p>When writing a class, you can override these methods to do whatever you want:</p>
<pre>
class Represent(object):

    def __init__(self, x, y):
        self.x, self.y = x, y

    def __repr__(self):
        return "Represent(x={},y=\"{}\")".format(self.x, self.y)
        
    def __str__(self):
        return "Representing x as {} and y as {}".format(self.x, self.y)</pre>
                    <p>Using the above class we can see the results:</p>
<pre>
r = Represent(1, "Hopper")
print(r) # prints __str__
print(r.__repr__) # prints __repr__: '&lt;bound method Represent.__repr__ of
Represent(x=1,y="Hopper")>'
rep = r.__repr__() # sets the execution of __repr__ to a new variable
print(rep) # prints 'Represent(x=1,y="Hopper")'
r2 = eval(rep) # evaluates rep
print(r2) # prints __str__ from new object
print(r2 == r) # prints 'False' because they are different objects</pre>
            </section>
            <section id="content-installing-external" class="content" style="display: none;">
                    <h1>Installing external modules using pip </h1>
                    <p>pip is your friend when you need to install any package from the plethora of choices available at the python package index (PyPI). pip is already installed if you're using Python 2 >= 2.7.9 or Python 3 >= 3.4 downloaded from python.org. For computers running Linux or another *nix with a native package manager, pip must often be manually installed.</p>
                    <p>On instances with both Python 2 and Python 3 installed, pip often refers to Python 2 and pip3 to Python 3. Using pip will only install packages for Python 2 and pip3 will only install packages for Python 3.</p>
                    <p>Finding / installing a package</p>
                    <p>Searching for a package is as simple as typing</p>
<pre>
$ pip search &lt;query>
# Searches for packages whose name or summary contains &lt;query></pre>
                    <p>Installing a package is as simple as typing (in a terminal / command-prompt, not in the Python interpreter)</p>
<pre>
$ pip install [package_name] # latest version of the package

$ pip install [package_name]==x.x.x # specific version of the package

$ pip install '[package_name]>=x.x.x' # minimum version of the package</pre>
                    <p>where x.x.x is the version number of the package you want to install.</p>
                    <p>When your server is behind proxy, you can install package by using below command:</p>
<pre>
$ pip --proxy http://&lt;server address>:&lt;port> install</pre>
                    <p>Upgrading installed packages</p>
                    <p>When new versions of installed packages appear they are not automatically installed to your system. To get an overview of which of your installed packages have become outdated, run:</p>
<pre>
$ pip list --outdated</pre>
                    <p>To upgrade a specific package use</p>
<pre>
$ pip install [package_name] --upgrade</pre>
                    <p>Updating all outdated packages is not a standard functionality of pip.</p>
                    <p>Upgrading pip</p>
                    <p>You can upgrade your existing pip installation by using the following commands</p>
                    <ul>
                        <li>On Linux or macOS X:</li>
<pre>
$ pip install -U pip</pre>
                        You may need to use sudo with pip on some Linux Systems
                        <li>On Windows:</li>
<pre>
py -m pip install -U pip</pre>                    
                        or
<pre>
python -m pip install -U pip</pre>
                    </ul>
            </section>
            <section id="content-help-utility" class="content" style="display: none;">
                    <h1>Help Utility </h1>
                    <p>Python has several functions built into the interpreter. If you want to get information of keywords, built-in functions, modules or topics open a Python console and enter:</p>
<pre>
>>> help()</pre>     
                    <p>You will receive information by entering keywords directly:</p>       
<pre>
>>> help(help)</pre>
                    <p>or within the utility:</p>       
<pre>
help> help</pre>
                    <p>which will show an explanation:</p>       
<pre>
Help on _Helper in module _sitebuiltins object:
class _Helper(builtins.object)
| Define the builtin 'help'.
|
| This is a wrapper around pydoc.help that provides a helpful message
| when 'help' is typed at the Python interactive prompt.
|
| Calling help() at the Python prompt starts an interactive help session.
| Calling help(thing) prints help for the python object 'thing'.
|
| Methods defined here:
|
| __call__(self, *args, **kwds)
|
| __repr__(self)
|
| ----------------------------------------------------------------------
| Data descriptors defined here:
|
| __dict__
| dictionary for instance variables (if defined)
|
| __weakref__
| list of weak references to the object (if defined)</pre>
                    <p>You can also request subclasses of modules:</p>       
<pre>
help(pymysql.connections)</pre>
                    <p>You can use help to access the docstrings of the different modules you have imported, e.g., try the following:</p>       
<pre>
>>> help(math)</pre>
                    <p>and you'll get an error</p>       
<pre>
>>> import math
>>> help(math)</pre>
                    <p>And now you will get a list of the available methods in the module, but only AFTER you have imported it.</p>       
                    <p>Close the helper with quit</p>             
            </section>


            <!-- Content Sections for Module 2 -->
            <section id="content-python-data-type" class="content" style="display: none;">
                    <h1>Module 2: Python Data Types</h1>
                    <p>Data types are nothing but variables you use to reserve some space in memory. Python variables do not need an explicit declaration to reserve memory space. The declaration happens automatically when you assign a value to a variable.</p>
            </section>
            <section id="content-string-data-type" class="content" style="display: none;">
                    <h1>String Data Type</h1>
                    <p>String are identified as a contiguous set of characters represented in the quotation marks. Python allows for either pairs of single or double quotes. Strings are immutable sequence data type, i.e each time one makes any changes to a string, completely new string object is created.</p>
<pre>
a_str = 'Hello World'
print(a_str) #output will be whole string. Hello World
print(a_str[0]) #output will be first character. H
print(a_str[0:5]) #output will be first five characters. Hello</pre>            
            </section>
            <section id="content-set-data-types" class="content" style="display: none;">
                    <h1>Set Data Types</h1>
                    <p>Sets are unordered collections of unique objects, there are two types of set:</p>
                    <ul>
                        <ul>
                            1. Sets - They are mutable and new elements can be added once sets are defined
                        
<pre>
basket = {'apple', 'orange', 'apple', 'pear', 'orange', 'banana'}
print(basket) # duplicates will be removed
> {'orange', 'banana', 'pear', 'apple'}
a = set('abracadabra')
print(a) # unique letters in a
> {'a', 'r', 'b', 'c', 'd'}
a.add('z')
print(a)
> {'a', 'c', 'r', 'b', 'z', 'd'}</pre>
                            2. Frozen Sets - They are immutable and new elements cannot added after its defined.
<pre>
b = frozenset('asdfagsa')
print(b)
> frozenset({'f', 'g', 'd', 'a', 's'})
cities = frozenset(["Frankfurt", "Basel","Freiburg"])
print(cities)
> frozenset({'Frankfurt', 'Basel', 'Freiburg'})</pre>
                        </ul>
                    </ul>
            </section>
            <section id="content-numbers-data-type" class="content" style="display: none;">
                    <h1>Numbers data type</h1>
                    <p>Numbers have four types in Python. Int, float, complex, and long.</p>
<pre>
int_num = 10 #int value
float_num = 10.2 #float value
complex_num = 3.14j #complex value
long_num = 1234567L #long value</pre>
            </section>
            <section id="content-list-data-type" class="content" style="display: none;">
                    <h1>List Data Type</h1>
                    <p>A list contains items separated by commas and enclosed within square brackets [].lists are almost similar to arrays in C. One difference is that all the items belonging to a list can be of different data type.</p>
<pre>
list = [123,'abcd',10.2,'d'] #can be an array of any data type or single data type.
list1 = ['hello','world']
print(list) #will output whole list. [123,'abcd',10.2,'d']
print(list[0:2]) #will output first two element of list. [123,'abcd']
print(list1 * 2) #will gave list1 two times. ['hello','world','hello','world']
print(list + list1) #will gave concatenation of both the lists.
[123,'abcd',10.2,'d','hello','world']</pre>
            </section>
            <section id="content-dictionary-data-type" class="content" style="display: none;">
                    <h1>Dictionary Data Type</h1>
                    <p>Dictionary consists of key-value pairs. It is enclosed by curly braces {} and values can be assigned and accessed using square brackets[].</p>
<pre>
dic={'name':'red','age':10}
print(dic) #will output all the key-value pairs. {'name':'red','age':10}
print(dic['name']) #will output only value with 'name' key. 'red'
print(dic.values()) #will output list of values in dic. ['red',10]
print(dic.keys()) #will output list of keys. ['name','age']</pre>            
            </section>
            <section id="content-tuple-data-type" class="content" style="display: none;">
                    <h1>Tuple Data Type</h1>
                    <p>Lists are enclosed in brackets [ ] and their elements and size can be changed, while tuples are enclosed in parentheses ( ) and cannot be updated. Tuples are immutable.</p>
<pre>
tuple = (123,'hello')
tuple1 = ('world')
print(tuple) #will output whole tuple. (123,'hello')
print(tuple[0]) #will output first value. (123)
print(tuple + tuple1) #will output (123,'hello','world')
tuple[1]='update' #this will give you error.</pre>    
            </section>
            
            <!-- Content Sections for Module 3 -->
            <section id="content-indentation" class="content" style="display: none;">                    
                    <h1>Module 3: Indentation</h1>
                    <h1>Simple example</h1>
                    <p>For Python, Guido van Rossum based the grouping of statements on indentation. The reasons for this are explained in the first section of the "Design and History Python FAQ". Colons, :, are used to declare an indented code block, such as the following example:</p>
<pre>
class ExampleClass:
    #Every function belonging to a class must be indented equally
    def __init__(self):
        name = "example"
    def someFunction(self, a):
        #Notice everything belonging to a function must be indented
        if a > 5:
            return True
        else:
            return False

#If a function is not indented to the same level it will not be considers as part of the parent class
def separateFunction(b):
    for i in b:
    #Loops are also indented and nested conditions start a new indentation
        if i == 1:
            return True
    return False
separateFunction([2,3,5,6,1])</pre>
                    <p>Spaces or Tabs?</p>
                    <p>The recommended indentation is 4 spaces but tabs or spaces can be used so long as they are consistent. Do not mix tabs and spaces in Python as this will cause an error in Python 3 and can causes errors in Python 2.</p>
            </section>
            <section id="content-how-Indentation-parsed" class="content" style="display: none;">
                    <h1>How Indentation is Parsed</h1>
                    <p>Whitespace is handled by the lexical analyzer before being parsed.</p>
                    <p>The lexical analyzer uses a stack to store indentation levels. At the beginning, the stack contains just the value 0, which is the leftmost position. Whenever a nested block begins, the new indentation level is pushed on the stack, and an "INDENT" token is inserted into the token stream which is passed to the parser. There can never be more than one "INDENT" token in a row (IndentationError).</p>
                    <p>When a line is encountered with a smaller indentation level, values are popped from the stack until a value is on top which is equal to the new indentation level (if none is found, a syntax error occurs). For each value popped, a "DEDENT" token is generated. Obviously, there can be multiple "DEDENT" tokens in a row.</p>
                    <p>The lexical analyzer skips empty lines (those containing only whitespace and possibly comments), and will never generate either "INDENT" or "DEDENT" tokens for them.</p>
                    <p>At the end of the source code, "DEDENT" tokens are generated for each indentation level left on the stack, until just the 0 is left.</p>
                    <p>For example:</p>
<pre>
if foo:
    if bar:
    x = 42
else:
    print foo</pre>
                    <p>is analyzed as:</p>
<pre>
&lt;if> &lt;foo> <:> [0]
&lt;INDENT> &lt;if> &lt;bar> <:> [0, 4]
&lt;INDENT> &lt;x> <=> &lt;42> [0, 4, 8]
&lt;DEDENT> &lt;DEDENT> &lt;else> <:> [0]
&lt;INDENT> &lt;print> &lt;foo> [0, 2]
&lt;DEDENT></pre>
                    <p>The parser than handles the "INDENT" and "DEDENT" tokens as block delimiters.</p>
            </section>
            <section id="content-indentation-errors" class="content" style="display: none;">
                    <h1>Indentation Errors</h1>
                    <p>The spacing should be even and uniform throughout. Improper indentation can cause an IndentationError or cause the program to do something unexpected. The following example raises an IndentationError:</p>
<pre>
a = 7
if a > 5:
    print "foo"
else:
    print "bar"
print "done"</pre>
                    <p>Or if the line following a colon is not indented, an IndentationError will also be raised:</p>
<pre>
if True:
print "true"</pre>
                    <p>If you add indentation where it doesn't belong, an IndentationError will be raised:</p>
<pre>
if True:
    a = 6
    b = 5</pre>
                    <p>If you forget to un-indent functionality could be lost. In this example None is returned instead of the expected False:</p>
<pre>
def isEven(a):
    if a%2 ==0:
    return True
    #this next line should be even with the if
    return False
print isEven(7)</pre>
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
                document.getElementById("content-python-data-type").style.display = "block"; // Show Module 2 content
            } else if (module === "module3") {
                // Show Module 3 default content (Superglobal Variables)
                const superglobalContent = document.getElementById("content-indentation");
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
