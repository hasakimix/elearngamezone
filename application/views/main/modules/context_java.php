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
code {
    background-color: #e8e8e8;
    padding: 2px 4px;
    border-radius: 4px;
}
button {
    min-width: var(--width);
    width: var(----width);
    border: none;
    outline: none;
    cursor: pointer;
    border-radius: var(----width);
    overflow: hidden;
    background-color: #7091E6;
    border-top: 1px solid #0006;
    border-bottom: #0005;
    transition: background-color 400ms ease;
}
button ul{
    display: flex;
    width: fit-content;
    transform: translate(-50%);
    transition: ul 400ms ease, transform 400ms ease;
    list-style: none;
}
button li{
    width: var(--width);
}
button i{
    font-size: 20px;
    color: #e7ebf8;
    transition: color 400ms ease;
    line-height: calc(var(--width) / 2);
}
button:hover{
    transform: translateX(0);
}
button:hover i {
    color: black;
}

</style>
      <!-- Main Content Section -->
        <div class="main-content">
            <!-- Left Sidebar -->
            <aside class="sidebar">
                <button>
                <ul>
            <li><i class="ri-arrow-left-line"></i></li>
            </ul>
            </button>
                <div class="module">
                    <button class="collapsible" data-module='module1'>Module 1: Getting started with Java Language</button>
                    <div class="module-content">
                        <ul>
                            <li><a href="#" data-target='content-Creating-Your-First-Java-Program'>Creating Your First Java Program</a></li>
                            <li><a href="#" data-target='content-Numeric-primitive-casting'>Numeric primitive casting</a></li>
                            <li><a href="#" data-target='content-Non-numeric-primitive-casting'>Non-numeric primitive casting</a></li>
                            <li><a href="#" data-target='content-Object-casting'>Object casting</a></li>
                            <li><a href="#" data-target='content-Testing if an-object-can be-cast using-instanceof'>Testing if an object can be cast using instanceof</a></li> 
                            <li><a href="#" data-target='content-module1-quiz'>Module 1 Quiz</a></li>
                        </ul>
                    </div>
                </div>
                <div class="module">
                    <button class="collapsible" data-module='module2'>Module 2: Getters and Setters</button>
                    <div class="module-content">
                        <ul>
                            <li><a href="#" data-target='content-Using a setter-or getter to-implement a-constraint'> Using a setter or getter to implement a constraint</a></li>
                            <li><a href="#" data-target='content-Why Use-Getters-and-Setters?'> Why Use Getters and Setters?</a></li>
                            <li><a href="#" data-target='content-Adding-Getters-and-Setters'>Adding Getters and Setters</a></li>
                            <li><a href="#" data-target='content-module2-quiz'>Module 2 Quiz</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="module">
                    <button class="collapsible" data-module='module3'>Module 3: Reference Data Types</button>
                    <div class="module-content">
                        <ul>
                            <li><a href="#" data-target='content-Dereferencing'>Dereferencing</a></li>
                            <li><a href="#" data-target='content-Instantiating-a-reference-type'>Instantiating a reference type</a></li>
                            <li><a href="#" data-target='content-The javac command - getting started'>The 'javac' command - getting started</a></li>
                            <li><a href="#" data-target='content-Compiling for a different version of Java'>Compiling for a different version of Java</a></li>
                            <li><a href="#" data-target='content-module3-quiz'>Module 3 Quiz</a></li>
                        </ul>
                    </div>
                </div>
               </aside> 
        
            <!-- Content Section -->
            <section id="content1" class="content" style="display: none;">
            <h1>Java SE Versions</h1>
<table>
    <thead>
        <tr>
            <th>Java SE Version</th>
            <th>Code Name</th>
            <th>End-of-life</th>
            <th>Release Date</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Java SE 10 (Early Access)</td>
            <td>None</td>
            <td>future</td>
            <td>2018-03-20</td>
        </tr>
        <tr>
            <td>Java SE 9</td>
            <td>None</td>
            <td>future</td>
            <td>2017-07-27</td>
        </tr>
        <tr>
            <td>Java SE 8</td>
            <td>Spider</td>
            <td>future</td>
            <td>2014-03-18</td>
        </tr>
        <tr>
            <td>Java SE 7</td>
            <td>Dolphin</td>
            <td>2015-04-14</td>
            <td>2011-07-28</td>
        </tr>
        <tr>
            <td>Java SE 6</td>
            <td>Mustang</td>
            <td>2013-04-16</td>
            <td>2006-12-23</td>
        </tr>
        <tr>
            <td>Java SE 5</td>
            <td>Tiger</td>
            <td>2009-11-04</td>
            <td>2004-10-04</td>
        </tr>
        <tr>
            <td>Java SE 1.4</td>
            <td>Merlin</td>
            <td>prior to 2009-11-04</td>
            <td>2002-02-06</td>
        </tr>
        <tr>
            <td>Java SE 1.3</td>
            <td>Kestrel</td>
            <td>prior to 2009-11-04</td>
            <td>2000-05-08</td>
        </tr>
        <tr>
            <td>Java SE 1.2</td>
            <td>Playground</td>
            <td>prior to 2009-11-04</td>
            <td>1998-12-08</td>
        </tr>
        <tr>
            <td>Java SE 1.1</td>
            <td>None</td>
            <td>prior to 2009-11-04</td>
            <td>1997-02-19</td>
        </tr>
        <tr>
            <td>Java SE 1.0</td>
            <td>Oak</td>
            <td>prior to 2009-11-04</td>
            <td>1996-01-21</td>
        </tr>
    </tbody>
                
</table>
</section>
            <section id="content-Creating-Your-First-Java-Program" class="content" style="display: none;">
            <h1>Creating Your First Java Program: HelloWorld</h1>

<h2>Step 1: Create the Java File</h2>
<p>Create a new file in your text editor or IDE named <code>HelloWorld.java</code>. Then paste this code block into the file and save:</p>
<pre><code>public class HelloWorld {
    public static void main(String[] args) {
        System.out.println("Hello, World!");
    }
}</code></pre>

<h2>Step 2: Running Live on Ideone</h2>
<p>Note: For Java to recognize this as a public class (and not throw a compile-time error), the filename must be the same as the class name (HelloWorld in this example) with a .java extension. There should also be a public access modifier before it.</p>
<p>Naming conventions recommend that Java classes begin with an uppercase character, and be in camel case format (where the first letter of each word is capitalized). The conventions recommend against underscores (_) and dollar signs ($).</p>

<h2>Step 3: Compiling the Program</h2>
<p>To compile, open a terminal window and navigate to the directory of <code>HelloWorld.java</code>:</p>
<pre><code>cd /path/to/containing/folder/</code></pre>
<p>Note: <code>cd</code> is the terminal command to change directory.</p>
<p>Enter <code>javac</code> followed by the file name and extension as follows:</p>
<pre><code>$ javac HelloWorld.java</code></pre>
<p>It’s fairly common to get the error <code>'javac' is not recognized as an internal or external command</code>, even when you have installed the JDK. This can happen if the path is not added to the environment by default.</p>
<p>To resolve this on Windows, try browsing to your <code>javac.exe</code> path, which is probably in:</p>
<pre><code>C:\Program Files\Java\jdk(version number)\bin</code></pre>
<p>Then run:</p>
<pre><code>$ C:\Program Files\Java\jdk(version number)\bin\javac HelloWorld.java</code></pre>

<h2>Step 4: Adding to PATH Environment Variable (Windows)</h2>
<p>To edit the PATH environment variable in Windows:</p>
<ul>
    <li>Control Panel ⇒ System ⇒ Advanced system settings</li>
    <li>Switch to "Advanced" tab ⇒ Environment Variables</li>
    <li>In "System Variables", scroll down to select "PATH" ⇒ Edit</li>
</ul>
<p>Copy your existing path to Notepad. Then browse to the folder where <code>javac</code> resides and copy the path. It should look something like:</p>
<pre><code>c:\Program Files\Java\jdk1.8.0_xx\bin</code></pre>
<p>In "Variable value", paste this in front of all existing directories, followed by a semicolon (;). Do not delete any existing entries.</p>

<h2>Step 5: Running Your Program</h2>
<p>To run your program, enter:</p>
<pre><code>$ java HelloWorld</code></pre>
<p>This will output to your console:</p>
<pre><code>Hello, World!</code></pre>
<p>You have successfully coded and built your very first Java program!</p>

<h2>Understanding the HelloWorld Program</h2>
<p>The "Hello World" program contains a single file with a class definition, a main method, and a print statement.</p>

<pre><code>public class HelloWorld {
    public static void main(String[] args) {
        System.out.println("Hello, World!");
    }
}</code></pre>

<h2>Key Components Explained</h2>
<ul>
    <li><strong>public class HelloWorld</strong>: The class definition.</li>
    <li><strong>public static void main(String[] args)</strong>: The entry point of the program.</li>
    <li><strong>System.out.println("Hello, World!");</strong>: Prints the text to the console.</li>
</ul>

<h2>Output</h2>
<p>Your output will be:</p>
<pre><code>Hello, World!</code></pre>

<h2>Example: Modeling a Football Team</h2>
<p>Here's an example demonstrating the Object-Oriented paradigm with a simple Team class:</p>
<pre><code>public class Team {
    Member member;
    public Team(Member member) {
        this.member = member;
    }
    public static void main(String[] args) {
        Member myMember = new Member("Aurieel", "light", 10, 1);
        Team myTeam = new Team(myMember);
        System.out.println(myTeam.member.getName());
        System.out.println(myTeam.member.getType());
        System.out.println(myTeam.member.getLevel());
        System.out.println(myTeam.member.getRank());
    }
}

class Member {
    private String name;
    private String type;
    private int level;
    private int rank;
    public Member(String name, String type, int level, int rank) {
        this.name = name;
        this.type = type;
        this.level = level;
        this.rank = rank;
    }
    public String getName() {
        return this.name;
    }
    public String getType() {
        return this.type;
    }
    public int getLevel() {
        return this.level;
    }
    public int getRank() {
        return this.rank;
    }
}</code></pre>

<h2>Expected Output</h2>
<pre><code>Aurieel
light
10
1</code></pre>
</section>
                
            <section id="content-Numeric-primitive-casting" class="content" style="display: none;">
            <h1>Casting Numeric Primitives in Java</h1>

<h2>Implicit Casting</h2>
<p>Implicit casting occurs when the source type has a smaller range than the target type. Here’s an example:</p>
<pre><code>// Implicit casting
byte byteVar = 42;
short shortVar = byteVar;
int intVar = shortVar;
long longVar = intVar;
float floatVar = longVar;
double doubleVar = floatVar;</code></pre>

<h2>Explicit Casting</h2>
<p>Explicit casting must be performed when the source type has a larger range than the target type. Here’s how you do it:</p>
<pre><code>// Explicit casting
double doubleVar = 42.0d;
float floatVar = (float) doubleVar;
long longVar = (long) floatVar;
int intVar = (int) longVar;
short shortVar = (short) intVar;
byte byteVar = (byte) shortVar;</code></pre>

<h2>Note on Casting Floating Point Primitives</h2>
<p>When casting floating point primitives (<code>float</code>, <code>double</code>) to whole number primitives, the number is rounded down.</p>


<h1>Basic Numeric Promotion in Java</h1>

<h2>Example Code</h2>
<p>The following method demonstrates basic numeric promotion:</p>
<pre><code>static void testNumericPromotion() {
    char char1 = 1, char2 = 2;
    short short1 = 1, short2 = 2;
    int int1 = 1, int2 = 2;
    float float1 = 1.0f, float2 = 2.0f;
    // char1 = char1 + char2;      // Error: Cannot convert from int to char;
    // short1 = short1 + short2;   // Error: Cannot convert from int to short;
    int1 = char1 + char2;          // char is promoted to int.
    int1 = short1 + short2;        // short is promoted to int.
    int1 = char1 + short2;         // both char and short promoted to int.
    float1 = short1 + float2;      // short is promoted to float.
    int1 = int1 + int2;            // int is unchanged.
}</code></pre>
            </section>
            <section id="content-Non-numeric-primitive-casting" class="content" style="display: none;">
            <h1>Casting in Java</h1>

<h2>Key Points</h2>
<ul>
    <li>The <code>boolean</code> type cannot be cast to/from any other primitive type.</li>
    <li>A <code>char</code> can be cast to/from any numeric type using code-point mappings specified by Unicode.</li>
    <li>A <code>char</code> is represented in memory as an unsigned 16-bit integer value (2 bytes).</li>
    <li>Casting a <code>char</code> to a <code>byte</code> (1 byte) will drop 8 bits (this is safe for ASCII characters).</li>
    <li>Utility methods of the <code>Character</code> class use <code>int</code> (4 bytes) for code-point values, but <code>short</code> (2 bytes) can also be used.</li>
</ul>

<h2>Example Code</h2>
<pre><code>int badInt   = (int)  true; // Compiler error: incompatible types
char char1   = (char)   65; // A
byte byte1   = (byte)  'A'; // 65
short short1 = (short) 'A'; // 65
int int1     = (int)   'A'; // 65
char char2   = (char) 8253; // ‽
byte byte2   = (byte)  '‽'; // 61 (truncated code-point into the ASCII range)
short short2 = (short) '‽'; // 8253
int int2     = (int)   '‽'; // 8253</code></pre>
            </section>
            <section id="content-Object-casting" class="content" style="display: none;">
            <h1>Casting Objects in Java</h1>

<h2>Key Points</h2>
<ul>
    <li>As with primitives, objects can be cast both explicitly and implicitly.</li>
    <li>Implicit casting occurs when the source type extends or implements the target type (casting to a superclass or interface).</li>
    <li>Explicit casting must be done when the source type is extended or implemented by the target type (casting to a subtype).</li>
    <li>This explicit casting can produce a runtime exception (<code>ClassCastException</code>) if the object being cast is not of the target type (or the target's subtype).</li>
</ul>

<h2>Example Code</h2>
<pre><code>Float floatVar = new Float(42.0f);
Number n = floatVar;                // Implicit (Float implements Number)
Float floatVar2 = (Float) n;        // Explicit
Double doubleVar = (Double) n;      // Throws exception (the object is not Double)</code></pre>            
            </section>
            <section id="content-Testing if an-object-can be-cast using-instanceof" class="content" style="display: none;">
            <h1>Using the instanceof Operator in Java</h1>

<h2>Overview</h2>
<p>Java provides the <code>instanceof</code> operator to test if an object is of a certain type, or a subclass of that type. The program can then choose to cast or not cast that object accordingly.</p>

<h2>Example Code</h2>
<pre><code>Object obj = Calendar.getInstance();
long time = 0;

if(obj instanceof Calendar) {
    time = ((Calendar)obj).getTime();
}

if(obj instanceof Date) {
    time = ((Date)obj).getTime(); // This line will never be reached, obj is not a Date type.
}</code></pre>
            </section>
            
            <section id="content-module1-quiz" class="content" style="display: none;">
                <h1>Module 1 Quiz</h1>
                <form id="quizForm">
                    <div class="question" id="q1">
                        <p>1. How can a global variable be accessed from within a function without using the global keyword in PHP?</p>
                        <input type="radio" name="q1" value="A"> A) Use the $GLOBALS array.<br>
                        <input type="radio" name="q1" value="B"> B) Declare the variable again within the function.<br>
                        <input type="radio" name="q1" value="C"> C) Use the static keyword.<br>
                        <input type="radio" name="q1" value="D"> D) Use the public access modifier.<br>
                    </div>
                    <div class="question" id="q2">
                        <p>2. Which of the following statements about $_POST superglobal is correct?</p>
                        <input type="radio" name="q2" value="A"> A) It is used to collect form data after submitting a form using the GET method.<br>
                        <input type="radio" name="q2" value="B"> B) It is a superglobal variable that can be accessed anywhere without the global keyword.<br>
                        <input type="radio" name="q2" value="C"> C)  It can only be used inside functions.<br>
                        <input type="radio" name="q2" value="D"> D) It is used to store data in cookies.<br>
                    </div>
                    <div class="question" id="q3">
                        <p>3. What will the following Java code output?</p>
                        <pre>java
byte byteVar = 42;
short shortVar = byteVar;
int intVar = shortVar;
long longVar = intVar;
float floatVar = longVar;
double doubleVar = floatVar;
System.out.println(doubleVar);</pre>
                        <input type="radio" name="q3" value="A"> A) 42.0<br>
                        <input type="radio" name="q3" value="B"> B) 42<br>
                        <input type="radio" name="q3" value="C"> C) Error: Cannot convert from int to short<br>
                        <input type="radio" name="q3" value="D"> D) Error: Cannot convert from byte to short<br>
                    </div>
                    <div class="question" id="q4">
                        <p>4. What will the following Java code output? </p>
                        <pre>java
double doubleVar = 42.99;
int intVar = (int) doubleVar;
System.out.println(intVar);</pre>
                        <input type="radio" name="q4" value="A"> A) 42.99<br>
                        <input type="radio" name="q4" value="B"> B) 43<br>
                        <input type="radio" name="q4" value="C"> C) 42<br>
                        <input type="radio" name="q4" value="D"> D) Compilation Error<br>
                    </div>
                    <div class="question" id="q5">
                        <p>5.  What will the following code output?</p>
                        <pre>java
float floatVar = 12.75f;
int intVar = (int) floatVar;
System.out.println(intVar);</pre>
                        <input type="radio" name="q5" value="A"> A) 12.75<br>
                        <input type="radio" name="q5" value="B"> B) 12<br>
                        <input type="radio" name="q5" value="C"> C) 13<br>
                        <input type="radio" name="q5" value="D"> D) Compilation Error<br>
                    </div>
                    <div class="question" id="q6">
                        <p>6. What will the following code output?</p>
                        <pre>java
long longVar = 1234567890L;
short shortVar = (short) longVar;
System.out.println(shortVar);</pre>
                        <input type="radio" name="q6" value="A"> A) 1234567890<br>
                        <input type="radio" name="q6" value="B"> B)12345<br>
                        <input type="radio" name="q6" value="C"> C) -16194<br>
                        <input type="radio" name="q6" value="D"> D)  Compilation Error<br>
                    </div>
                    <div class="question" id="q7">
                        <p>7. 1. What is the result of the following code?</p>
                        <pre>char char1 = (char) 65;
byte byte1 = (byte) 'A';
short short1 = (short) 'A';
int int1 = (int) 'A';
System.out.println(byte1);
System.out.println(short1);
System.out.println(int1);
</pre>
                        <input type="radio" name="q7" value="A"> A) 65 65 65<br>
                        <input type="radio" name="q7" value="B"> B) 65 65 66<br>
                        <input type="radio" name="q7" value="C"> C) 65 66 66<br>
                        <input type="radio" name="q7" value="D"> D) Compilation Error<br>
                    </div>
                    <div class="question" id="q8">
                        <p>8. What is the output of the following code?</p>
                        <pre>char char2 = (char) 8253;
byte byte2 = (byte) '‽';
short short2 = (short) '‽';
int int2 = (int) '‽';
System.out.println(byte2);
System.out.println(short2);
System.out.println(int2);
</pre>
                        <input type="radio" name="q8" value="A"> A) 8253 8253 8253<br>
                        <input type="radio" name="q8" value="B"> B) 61 8253 8253<br>
                        <input type="radio" name="q8" value="C"> C)  61 61 8253<br>
                        <input type="radio" name="q8" value="D"> D) 8253 61 8253.<br>
                    </div>
                    <div class="question" id="q9">
                        <p>9. What is the result of the following code?</p>
                        <pre>Object obj = new Integer(10);
String str = (String) obj;
System.out.println(str);
</pre>
                        <input type="radio" name="q9" value="A"> A) 10<br>
                        <input type="radio" name="q9" value="B"> B) Compilation Error<br>
                        <input type="radio" name="q9" value="C"> C) ClassCastException.<br>
                        <input type="radio" name="q9" value="D"> D) NullPointerException<br>
                    </div>
                    <div class="question" id="q10">
                        <p>10. What is the result of the following code?</p>
                        <input type="radio" name="q10" value="A"> A) 42.0<br>
                        <input type="radio" name="q10" value="B"> B) Compilation Error<br>
                        <input type="radio" name="q10" value="C"> C)  ClassCastException<br>
                        <input type="radio" name="q10" value="D"> D) NullPointerException<br>
                    </div>
                </form>
                <button type="button" class="check-button" onclick="checkAnswers()">Check Answers</button>
            </section>
        
            
            <!-- Content Sections for Module 2 -->
            <section id="content-Using a setter-or getter to-implement a-constraint" class="content" style="display: none;">
            <h1>Setters and Getters in Java</h1>

<h2>Overview</h2>
<p>Setters and Getters allow for an object to contain private variables which can be accessed and changed with restrictions.</p>

<h2>Example Code</h2>
<pre><code>public class Person {
    private String name;

    public String getName() {
        return name;
    }

    public void setName(String name) {
        if(name != null && name.length() > 2)
            this.name = name;
    }
}</code></pre>

<h2>Explanation</h2>
<p>In this <code>Person</code> class, there is a single variable: <code>name</code>. This variable can be accessed using the <code>getName()</code> method and changed using the <code>setName(String)</code> method. However, setting a name requires the new name to have a length greater than 2 characters and to not be null. Using a setter method rather than making the variable <code>name</code> public allows others to set the value of <code>name</code> with certain restrictions.</p>

<h2>Modified Getter Example</h2>
<pre><code>public String getName() {
    if(name.length() > 16)
        return "Name is too large!";
    else
        return name;
}</code></pre>

<p>In the modified <code>getName()</code> method above, the name is returned only if its length is less than or equal to 16. Otherwise, "Name is too large!" is returned. This allows the programmer to create variables that are reachable and modifiable while preventing client classes from editing the variables unintentionally.</p>

            </section>
            <section id="content-Why Use-Getters-and-Setters?" class="content" style="display: none;">
           <p>Consider a basic class containing an object with getters and setters in Java:</p>

<h2>Basic Class Example</h2>
<pre><code>public class CountHolder {
    private int count = 0;
    
    public int getCount() { 
        return count; 
    }
    
    public void setCount(int c) { 
        count = c; 
    }
}</code></pre>

<p>We can't access the <code>count</code> variable because it's private. But we can access the <code>getCount()</code> and <code>setCount(int)</code> methods because they are public. This raises the question: why introduce the middleman? Why not simply make the <code>count</code> public?</p>

<pre><code>public class CountHolder {
    public int count = 0;
}</code></pre>

<p>For all intents and purposes, these two classes are functionally the same. The difference lies in extensibility. Consider what each class communicates:</p>

<ul>
    <li>First: "I have a method that will give you an <code>int</code> value, and a method that will set that value to another <code>int</code>."</li>
    <li>Second: "I have an <code>int</code> that you can set and get as you please."</li>
</ul>

<p>The first is more guarded; it controls interactions with its internal state. The second exposes its implementation, making it vulnerable and committed to maintaining that implementation, especially in an API.</p>

<h2>Synchronizing Access</h2>
<p>Let's consider if we want to synchronize access to modifying and accessing the count:</p>
<pre><code>public class CountHolder {
    private int count = 0;
    
    public synchronized int getCount() { 
        return count; 
    }
    
    public synchronized void setCount(int c) { 
        count = c; 
    }
}</code></pre>

<p>In the first case, synchronization is straightforward, but in the second, it's challenging without modifying every reference to <code>count</code>.</p>

<h2>Are Public Variables Ever a Good Thing?</h2>
<p>Public variables can be seen as convenient but come with risks:</p>
<ol>
    <li>The variable should have no conceivable reason to ever change in its implementation.</li>
    <li>The variable needs to be referenced frequently enough to justify being public.</li>
</ol>

<p>If you're ever in doubt, it's best to use getters and setters.</p>
            </section>
            <section id="content-Adding-Getters-and-Setters" class="content" style="display: none;">
            <p>Encapsulation is a basic concept in Object-Oriented Programming (OOP). It involves wrapping data and code into a single unit. A good practice is to declare variables as <code>private</code> and access them through Getters and Setters to view and/or modify them.</p>

<h2>Example Class</h2>
<pre><code>public class Sample {
    private String name;
    private int age;

    public int getAge() {
        return age;
    }
    
    public void setAge(int age) {
        this.age = age;
    }
    
    public String getName() {
        return name;
    }
    
    public void setName(String name) {
        this.name = name;
    }
}</code></pre>

<p>These private variables cannot be accessed directly from outside the class, thus protecting them from unauthorized access. If you want to view or modify them, you can use Getters and Setters.</p>

<h2>Getter and Setter Methods</h2>
<p>The <code>getXxx()</code> method will return the current value of the variable <code>xxx</code>, while you can set the value using <code>setXxx()</code>.</p>

<h3>Naming Conventions</h3>
<p>The naming convention for the methods is as follows:</p>
<ul>
    <li>For all non-boolean variables:
        <ul>
            <li><code>getVariableName()</code> // Getter, variable name should start with uppercase</li>
            <li><code>setVariableName(..)</code> // Setter, variable name should start with uppercase</li>
        </ul>
    </li>
    <li>For boolean variables:
        <ul>
            <li><code>isVariableName()</code> // Getter, variable name should start with uppercase</li>
            <li><code>setVariableName(..)</code> // Setter, variable name should start with uppercase</li>
        </ul>
    </li>
</ul>

<p>Public Getters and Setters are part of the Property definition of a Java Bean.</p>
            </section>
            <!-- Quiz 2 -->
            <section id="content-module2-quiz" class="content" style="display: none;">
            <h1>Module 2 Quiz</h1>
                <form id="quizForm">
                    <div class="question" id="q1">
                        <p>1. What will the following code print when executed?</p>
                        <pre>public class Person {
    private String name;

    public String getName() {
        return name;
    }

    public void setName(String name) {
        if(name != null && name.length() > 2)
            this.name = name;
    }

    public static void main(String[] args) {
        Person person = new Person();
        person.setName("Jo");
        System.out.println(person.getName());
    }
}
</pre>
                        <input type="radio" name="q1" value="A"> A)  Jo<br>
                        <input type="radio" name="q1" value="B"> B) null<br>
                        <input type="radio" name="q1" value="C"> C) Compilation Error<br>
                        <input type="radio" name="q1" value="D"> D) No output.<br>
                    </div>
                    <div class="question" id="q2">
                        <p>2. In the following code, what will happen when setName("Alexandra") is called?</p>
                        <pre>public class Person {
    private String name;

    public String getName() {
        if(name.length() > 16)
            return "Name is too large!";
        else
            return name;
    }

    public void setName(String name) {
        if(name != null && name.length() > 2)
            this.name = name;
    }

    public static void main(String[] args) {
        Person person = new Person();
        person.setName("Alexandra");
        System.out.println(person.getName());
    }
}
</pre>
                        <input type="radio" name="q2" value="A"> A)  Alexandra<br>
                        <input type="radio" name="q2" value="B"> B)  Name is too large!<br>
                        <input type="radio" name="q2" value="C"> C) Compilation Error<br>
                        <input type="radio" name="q2" value="D"> D) null<br>
                    </div>
                    <div class="question" id="q3">
                        <p>3. What will the following code print when executed?</p>
                        <pre>public class Person {
    private String name;

    public String getName() {
        return name;
    }

    public void setName(String name) {
        if(name != null && name.length() > 2)
            this.name = name;
    }

    public static void main(String[] args) {
        Person person = new Person();
        person.setName("A");
        System.out.println(person.getName());
    }
}
</pre>
                        <input type="radio" name="q3" value="A"> A) A<br>
                        <input type="radio" name="q3" value="B"> B) null<br>
                        <input type="radio" name="q3" value="C"> C) Compilation Error<br>
                        <input type="radio" name="q3" value="D"> D) No output<br>
                    </div>
                    <div class="question" id="q4">
                        <p>4. In the following <code>CountHolder</code> class, why is it better to use a getter and setter method instead of making <code>count</code> public?</p>
                        <pre>public class CountHolder {
    private int count = 0;
    
    public int getCount() { 
        return count; 
    }
    
    public void setCount(int c) { 
        count = c; 
    }
}
</pre>
                        <input type="radio" name="q4" value="A"> A) It allows better control over the modification of <code>count</code>.<br>
                        <input type="radio" name="q4" value="B"> B) It ensures that <code>count</code> can never be modified.<br>
                        <input type="radio" name="q4" value="C"> C) It makes the code less readable and harder to understand.<br>
                        <input type="radio" name="q4" value="D"> D) It reduces the performance of the program.<br>
                    </div>
                    <div class="question" id="q5">
                        <p>5.  What is the advantage of synchronizing access to <code>count</code> in the following <code>CountHolder</code> class?</p>
                        <pre>public class CountHolder {
    private int count = 0;
    
    public synchronized int getCount() { 
        return count; 
    }
    
    public synchronized void setCount(int c) { 
        count = c; 
    }
}
</pre>
                        <input type="radio" name="q5" value="A"> A) It prevents multiple threads from modifying <code>count</code> simultaneously, ensuring thread safety.<br>
                        <input type="radio" name="q5" value="B"> B) It makes the <code>count</code>variable public.<br>
                        <input type="radio" name="q5" value="C"> C) It improves the performance of the code.<br>
                        <input type="radio" name="q5" value="D"> D) It simplifies the code by eliminating the need for a getter and setter.<br>
                    </div>
                    <div class="question" id="q6">
                        <p>6. What potential downside does making <code>count</code> public in the <code>CountHolder</code> class have?</p>
                        <pre>public class CountHolder {
    public int count = 0;
}
</pre>
                        <input type="radio" name="q6" value="A"> A)  It allows any code to modify <code>count</code> without any restrictions or control.<br>
                        <input type="radio" name="q6" value="B"> B)  It makes <code>count</code>  thread-safe.<br>
                        <input type="radio" name="q6" value="C"> C)  It ensures that <code>count</code>  is only accessible within the class.<br>
                        <input type="radio" name="q6" value="D"> D)  It makes the class more extensible and flexible.<br>
                    </div>
                    <div class="question" id="q7">
                        <p>7. Why are private variables in Java classes typically accessed using Getters and Setters instead of being directly accessed?</p>
                        <input type="radio" name="q7" value="A"> A) It allows for better control over how variables are modified and accessed, providing flexibility for future changes.<br>
                        <input type="radio" name="q7" value="B"> B)  It makes the variables easier to access directly.<br>
                        <input type="radio" name="q7" value="C"> C) It prevents the use of inheritance in Java.<br>
                        <input type="radio" name="q7" value="D"> D) It improves the performance of the program by reducing method calls.<br>
                    </div>
                    <div class="question" id="q8">
                        <p>8.  In the following <code>Sample</code> class, what is the purpose of the ]<code>getAge()</code> and <code>setAge()</code> methods?</p>
                        <pre>public class Sample {
    private String name;
    private int age;

    public int getAge() {
        return age;
    }

    public void setAge(int age) {
        this.age = age;
    }
}
</pre>
                        <input type="radio" name="q8" value="A"> A) To allow direct access to the <code>age</code> variable from outside the class<br>
                        <input type="radio" name="q8" value="B"> B) To encapsulate the <code>age</code> variable and allow controlled access and modification.<br>
                        <input type="radio" name="q8" value="C"> C) To provide access to the <code>age</code> variable only for the class itself.
                        <input type="radio" name="q8" value="D"> D) To modify the <code>name</code> variable directly.<br>
                    </div>
                    <div class="question" id="q9">
                        <p>9. According to Java naming conventions, how should a boolean variable's getter and setter methods be named?</p>
                        <input type="radio" name="q9" value="A"> A) getVariableName() for the getter and setVariableName() for the setter.<br>
                        <input type="radio" name="q9" value="B"> B) isVariableName() for the getter and setVariableName() for the setter.<br>
                        <input type="radio" name="q9" value="C"> C) getVariableName() for both getter and setter.<br>
                        <input type="radio" name="q9" value="D"> D) isVariableName() for both getter and setter.<br>
                    </div>
                    <div class="question" id="q10">
                        <p>What is the benefit of making a variable private in Java and providing a <code>public</code> getter and setter for it?</p>
                        <input type="radio" name="q10" value="A"> A) It allows external classes to directly modify the variable's value without any restrictions.<br>
                        <input type="radio" name="q10" value="B"> B) It makes the variable accessible to all classes in the same package.<br>
                        <input type="radio" name="q10" value="C"> C) It ensures that the variable is only modified in controlled ways through the setter method, protecting the integrity of the object's state.<br>
                        <input type="radio" name="q10" value="D"> D) It eliminates the need for the getter and setter methods.<br>
                    </div>
                </form>
                <button type="button" class="check-button" onclick="checkAnswers()">Check Answers</button>
            </section>
            </section>


            <!-- Content Sections for Module 3 -->
            <section id="content-Dereferencing" class="content" style="display: none;">
            <h1>Dereferencing in Java</h1>

<p>Dereferencing happens with the <code>.</code> operator:</p>
<pre><code>Object obj = new Object();
String text = obj.toString(); // 'obj' is dereferenced.</code></pre>

<p>Dereferencing follows the memory address stored in a reference to the place in memory where the actual object resides. When an object has been found, the requested method is called (in this case, <code>toString</code>).</p>

<p>When a reference has the value <code>null</code>, dereferencing results in a <code>NullPointerException</code>:</p>
<pre><code>Object obj = null;
obj.toString(); // Throws a NullPointerException when this statement is executed.</code></pre>

<p><code>null</code> indicates the absence of a value, meaning that following the memory address leads nowhere. Thus, there is no object on which the requested method can be called.</p>
               </section>
            <section id="content-Instantiating-a-reference-type" class="content" style="display: none;">
            <p>To create an object in Java, you use the <code>new</code> keyword:</p>
<pre><code>Object obj = new Object(); // Note the 'new' keyword</code></pre>

<h2>Where:</h2>
<ul>
    <li><code>Object</code> is a reference type.</li>
    <li><code>obj</code> is the variable in which to store the new reference.</li>
    <li><code>Object()</code> is the call to a constructor of <code>Object</code>.</li>
</ul>

<h2>What happens:</h2>
<ul>
    <li>Space in memory is allocated for the object.</li>
    <li>The constructor <code>Object()</code> is called to initialize that memory space.</li>
    <li>The memory address is stored in <code>obj</code>, so that it references the newly created object.</li>
</ul>

<h2>This is different from primitives:</h2>
<pre><code>int i = 10;</code></pre>
<p>Where the actual value <code>10</code> is stored in <code>i</code>.</p>
            </section>
            <section id="content-The javac command - getting started" class="content" style="display: none;">
            <h1>Simple Hello World Example</h1>
<p>Assuming that the <code>HelloWorld.java</code> contains the following Java source:</p>

<pre><code>public class HelloWorld {
    public static void main(String[] args) {
        System.out.println("Hello world!");
    }
}</code></pre>

<p>(For an explanation of the above code, please refer to Getting started with Java Language</a>.)</p>

<h2>Compiling and Running the Program</h2>
<p>We can compile the above file using this command:</p>
<pre><code>$ javac HelloWorld.java</code></pre>

<p>This produces a file called <code>HelloWorld.class</code>, which we can then run as follows:</p>
<pre><code>$ java HelloWorld
Hello world!</code></pre>

<h2>Key Points</h2>
<ul>
    <li>The source filename <code>HelloWorld.java</code> must match the class name in the source file ... which is <code>HelloWorld</code>. If they don't match, you will get a compilation error.</li>
    <li>The bytecode filename <code>HelloWorld.class</code> corresponds to the classname. If you were to rename the <code>HelloWorld.class</code>, you would get an error when you tried to run it.</li>
    <li>When running a Java application using <code>java</code>, you supply the classname NOT the bytecode filename.</li>
</ul>

<h2>Example with Packages</h2>
<p>Most practical Java code uses packages to organize the namespace for classes and reduce the risk of accidental class name collision.</p>
<p>If we wanted to declare the <code>HelloWorld</code> class in a package called <code>com.example</code>, the <code>HelloWorld.java</code> would contain the following Java source:</p>

<pre><code>package com.example;

public class HelloWorld {
    public static void main(String[] args) {
        System.out.println("Hello world!");
    }
}</code></pre>

<p>This source code file needs to be stored in a directory tree whose structure corresponds to the package naming:</p>

<pre><code>.
└── com
    └── example
        └── HelloWorld.java</code></pre>

<p>We can compile the above file using this command:</p>
<pre><code>$ javac com/example/HelloWorld.java</code></pre>

<p>This produces a file called <code>com/example/HelloWorld.class</code>; i.e. after compilation, the file structure should look like this:</p>

<pre><code>.
└── com
    └── example
        ├── HelloWorld.java
        └── HelloWorld.class</code></pre>

<p>We can then run the application as follows:</p>
<pre><code>$ java com.example.HelloWorld

Hello world!</code></pre>

<h2>Additional Points</h2>
<ul>
    <li>The directory structure must match the package name structure.</li>
    <li>When you run the class, the full class name must be supplied; i.e. <code>com.example.HelloWorld</code> not <code>HelloWorld</code>.</li>
    <li>You don't have to compile and run Java code out of the current directory. We are just doing it here for illustration.</li>
</ul>

<h2>Compiling Multiple Files at Once</h2>
<p>If your application consists of multiple source code files (and most do!), you can compile them one at a time. Alternatively, you can compile multiple files at the same time by listing the pathnames:</p>
<pre><code>$ javac Foo.java Bar.java</code></pre>

<p>Or using your command shell's filename wildcard functionality:</p>
<pre><code>$ javac *.java
$ javac com/example/*.java
$ javac */**/*.java  # Only works on Zsh or with globstar enabled on your shell</code></pre>

<p>This will compile all Java source files in the current directory, in the <code>com/example</code> directory, and recursively in child directories respectively. A third alternative is to supply a list of source filenames (and compiler options) as a file. For example:</p>
<pre><code>$ javac @sourcefiles</code></pre>

<p>Where the <code>sourcefiles</code> file contains:</p>
<pre><code>Foo.java
Bar.java
com/example/HelloWorld.java</code></pre>

<p><strong>Note:</strong> Compiling code like this is appropriate for small one-person projects, and for once-off programs. Beyond that, it is advisable to select and use a Java build tool. Alternatively, most programmers use a Java IDE (e.g. NetBeans, Eclipse, IntelliJ IDEA) which offers an embedded compiler and incremental building of "projects".</p>

<h2>Commonly Used 'javac' Options</h2>
<p>Here are a few options for the <code>javac</code> command that are likely to be useful to you:</p>
<ul>
    <li>The <code>-d</code> option sets a destination directory for writing the ".class" files.</li>
    <li>The <code>-sourcepath</code> option sets a source code search path.</li>
    <li>The <code>-cp</code> or <code>-classpath</code> option sets the search path for finding external and previously compiled classes.</li>
    <li>The <code>-version</code> option prints the compiler's version information.</li>
</ul>
            </section>
            <section id="content-Compiling for a different version of Java" class="content" style="display: none;">
            <h1>Java Language Changes and Compatibility</h1>
<p>The Java programming language (and its runtime) has undergone numerous changes since its initial public release. These changes include:</p>
<ul>
    <li>Changes in the Java programming language syntax and semantics</li>
    <li>Changes in the APIs provided by the Java standard class libraries</li>
    <li>Changes in the Java (bytecode) instruction set and classfile format</li>
</ul>

<p>With very few exceptions (for example, the <code>enum</code> keyword, changes to some "internal" classes, etc.), these changes are backwards compatible.</p>
<p>A Java program that was compiled using an older version of the Java toolchain will run on a newer version of the Java platform without recompilation.</p>
<p>A Java program that was written in an older version of Java will compile successfully with a new Java compiler.</p>

<h2>Compiling Old Java with a Newer Compiler</h2>
<p>If you need to (re-)compile older Java code on a newer Java platform to run on the newer platform, you generally don't need to give any special compilation flags. In a few cases (e.g., if you had used <code>enum</code> as an identifier), you could use the source option to disable the new syntax. For example, given the following class:</p>

<pre><code>public class OldSyntax {
    private static int enum;  // invalid in Java 5 or later
}</code></pre>

<p>The following is required to compile the class using a Java 5 compiler (or later):</p>
<pre><code>$ javac -source 1.4 OldSyntax.java</code></pre>

<h2>Compiling for an Older Execution Platform</h2>
<p>If you need to compile Java to run on an older Java platform, the simplest approach is to install a JDK for the oldest version you need to support and use that JDK's compiler in your builds.</p>
<p>You can also compile with a newer Java compiler, but there are complications. First of all, there are some important preconditions that must be satisfied:</p>
<ul>
    <li>The code you are compiling must not use Java language constructs that were not available in the version of Java that you are targeting.</li>
    <li>The code must not depend on standard Java classes, fields, methods, and so on that were not available in the older platforms.</li>
    <li>Third-party libraries that the code depends on must also be built for the older platform and available at compile-time and run-time.</li>
</ul>

<p>If the preconditions are met, you can recompile code for an older platform using the <code>-target</code> option. For example:</p>
<pre><code>$ javac -target 1.4 SomeClass.java</code></pre>
<p>will compile the above class to produce bytecodes that are compatible with Java 1.4 or later JVM. (In fact, the <code>-source</code> option implies a compatible target, so <code>javac -source 1.4</code> would have the same effect. The <code>-target</code> is described in the Oracle documentation.)</p>
<p>Having said that, if you simply use <code>-target</code> or <code>-source</code>, you will still be compiling against the standard class libraries provided by the compiler's JDK. If you are not careful, you can end up with classes with the correct bytecode version, but with dependencies on APIs that are not available. The solution is to use the <code>-bootclasspath</code> option.</p>
<p>For example:</p>
<pre><code>$ javac -target 1.4 --bootclasspath path/to/java1.4/rt.jar SomeClass.java</code></pre>
<p>will compile against an alternative set of runtime libraries. If the class being compiled has (accidental) dependencies on newer libraries, this will give you compilation errors.</p>
            </section>
             <!-- Quiz 3 -->
             <section id="content-module3-quiz" class="content" style="display: none;">
                <h1>Module 3 Quiz</h1>
                <form id="quizForm">
                    <div class="question" id="q1">
                        <p>1. What happens when you attempt to dereference a null reference in Java?</p>
                        <input type="radio" name="q1" value="A"> A) The program compiles but runs without any output.<br>
                        <input type="radio" name="q1" value="B"> B) The program executes, but the method call is ignored<br>
                        <input type="radio" name="q1" value="C"> C) The program throws a <code>NullPointerException</code>.<br>
                        <input type="radio" name="q1" value="D"> D) The program defaults to the method of a default object.<br>
                    </div>
                    <div class="question" id="q2">
                        <p>2. What does the . (dot) operator do in Java when used with an object? </p>
                        <input type="radio" name="q2" value="A"> A) It assigns a value to an object reference.<br>
                        <input type="radio" name="q2" value="B"> B) It dereferences the reference to access the object's members (fields or methods).<br>
                        <input type="radio" name="q2" value="C"> C) It checks if the object reference is null.<br>
                        <input type="radio" name="q2" value="D"> D) It creates a new reference to the object.<br>
                    </div>
                    <div class="question" id="q3">
                        <p>3. What does the <code>new</code> keyword do when creating an object in Java?</p>
                        <input type="radio" name="q3" value="A"> A) It assigns an existing object to the reference variable.<br>
                        <input type="radio" name="q3" value="B"> B) It creates a new reference variable for an existing object.<br>
                        <input type="radio" name="q3" value="C"> C) It allocates memory for the object and calls its constructor to initialize the object.<br>
                        <input type="radio" name="q3" value="D"> D)  It creates a new primitive variable and stores the reference to the object.<br>
                    </div>
                    <div class="question" id="q4">
                        <p>4.  What is the key difference between creating an object using <Code>new</Code> and assigning a value to a primitive type in Java?</p>
                        <input type="radio" name="q4" value="A"> A) Objects are stored in a different memory area than primitives.<br>
                        <input type="radio" name="q4" value="B"> B) Primitives do not require memory allocation.<br>
                        <input type="radio" name="q4" value="C"> C) Primitives are reference types while objects are value types.<br>
                        <input type="radio" name="q4" value="D"> D) Objects store the actual data, while primitives store references.<br>
                    </div>
                    <div class="question" id="q5">
                        <p>5. What is the reason the source filename <code>HelloWorld.java</code> must match the class name <code>HelloWorld</code> in Java?</p>
                        <input type="radio" name="q5" value="A"> A) The JVM requires the filenames to match for security purposes.<br>
                        <input type="radio" name="q5" value="B"> B) The class name must match the filename for correct compilation and runtime execution.<br>
                        <input type="radio" name="q5" value="C"> C) The Java compiler automatically renames the source file to match the class name.<br>
                        <input type="radio" name="q5" value="D"> D) It is a best practice but not necessary for Java to run correctly.<br>
                    </div>
                    <div class="question" id="q6">
                        <p>6. If your Java program is organized in a package called <code>com.example</code>, how would you compile the <code>HelloWorld.java</code> file?</p>
                        <input type="radio" name="q6" value="A"> A) <code>$ javac HelloWorld.java</code><br>
                        <input type="radio" name="q6" value="B"> B) <code>$ javac com/example/HelloWorld.java</code><br>
                        <input type="radio" name="q6" value="C"> C) <code>$ javac -package com.example HelloWorld.java</code><br>
                        <input type="radio" name="q6" value="D"> D) <code>$ javac package com.example HelloWorld.java</code><br>
                    </div>
                    <div class="question" id="q7">
                        <p>7. When running a Java program that uses a package, which command would you use to run the <code>HelloWorld</code> class in the <code>com.example</code> package?</p>
                        <input type="radio" name="q7" value="A"> A) <code>$ java HelloWorld</code><br>
                        <input type="radio" name="q7" value="B"> B) <code>$ java com.example.HelloWorld</code><br>
                        <input type="radio" name="q7" value="C"> C) <code>$ java -cp com.example HelloWorld</code><br>
                        <input type="radio" name="q7" value="D"> D) <code>$ java com/example/HelloWorld</code><br>
                    </div>
                    <div class="question" id="q8">
                        <p>8. What does it mean that Java is "backwards compatible"?</p>
                        <input type="radio" name="q8" value="A"> A) Java programs compiled with an older Java version will not run on newer Java platforms.<br>
                        <input type="radio" name="q8" value="B"> B) Java programs written with an older version of Java will fail to compile on newer versions.<br>
                        <input type="radio" name="q8" value="C"> C) Java programs compiled with an older Java version will run on newer versions of the Java platform without recompilation.<br>
                        <input type="radio" name="q8" value="D"> D) Java programs written in a newer version will not compile with older Java compilers.<br>
                    </div>
                    <div class="question" id="q9">
                        <p>9. What compilation flag would you use to compile a Java program that uses a syntax introduced in Java 5, like the <code>enum</code> keyword, using an older Java compiler (Java 1.4)?</p>
                        <input type="radio" name="q9" value="A"> A) <code>-target 1.4</code><br>
                        <input type="radio" name="q9" value="B"> B) <code>-source 1.4</code><br>
                        <input type="radio" name="q9" value="C"> C) <code>-source 1.5</code><br>
                        <input type="radio" name="q9" value="D"> D) <code>-disable-enum</code><br>
                    </div>
                    <div class="question" id="q10">
                        <p>10. When compiling Java code for an older execution platform, why might you need to use the <code>-bootclasspath</code> option in addition to the <code>-target</code> option?</p>
                        <input type="radio" name="q10" value="A"> A)  To specify a different JDK version for compilation<br>
                        <input type="radio" name="q10" value="B"> B) To link the program against the older platform's runtime libraries.<br>
                        <input type="radio" name="q10" value="C"> C) To ensure that newer Java features can still be used.<br>
                        <input type="radio" name="q10" value="D"> D) To compile Java code to work with third-party libraries.<br>
                    </div>
                </form>
                <button type="button" class="check-button" onclick="checkAnswers()">Check Answers</button>
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
