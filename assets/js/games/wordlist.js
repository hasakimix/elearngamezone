const wordList = [
    // HTML
    {
        word: "doctype",
        hint: "defines the document type and version of html.",
        subject: "html"
    },
    {
        word: "meta",
        hint: "provides metadata about the html document.",
        subject: "html"
    },
    {
        word: "header",
        hint: "defines a header for a document or section.",
        subject: "html"
    },
    {
        word: "footer",
        hint: "defines a footer for a document or section.",
        subject: "html"
    },
    {
        word: "aside",
        hint: "defines content aside from the main content.",
        subject: "html"
    },
    {
        word: "section",
        hint: "defines a section in a document.",
        subject: "html"
    },
    {
        word: "article",
        hint: "defines an independent piece of content.",
        subject: "html"
    },
    {
        word: "nav",
        hint: "defines navigation links in html.",
        subject: "html"
    },
    {
        word: "figure",
        hint: "represents self-contained content, often with a caption.",
        subject: "html"
    },
    {
        word: "blockquote",
        hint: "used to define a section quoted from another source.",
        subject: "html"
    },

    // Java
    {
        word: "arraylist",
        hint: "a resizable array in java.",
        subject: "java"
    },
    {
        word: "hashmap",
        hint: "a data structure to store key-value pairs in java.",
        subject: "java"
    },
    {
        word: "thread",
        hint: "a thread of execution in a program.",
        subject: "java"
    },
    {
        word: "servlet",
        hint: "a java class used to handle requests on a web server.",
        subject: "java"
    },
    {
        word: "jvm",
        hint: "java virtual machine, executes java bytecode.",
        subject: "java"
    },
    {
        word: "jre",
        hint: "java runtime environment, provides the runtime for java.",
        subject: "java"
    },
    {
        word: "jar",
        hint: "a java archive file used to distribute java applications.",
        subject: "java"
    },
    {
        word: "annotation",
        hint: "provides metadata for java code.",
        subject: "java"
    },
    {
        word: "generics",
        hint: "allows type-safe collections in java.",
        subject: "java"
    },
    {
        word: "lambda",
        hint: "a feature for writing anonymous functions in java.",
        subject: "java"
    },

    // JavaScript
    {
        word: "json",
        hint: "javascript object notation, a lightweight data-interchange format.",
        subject: "javascript"
    },
    {
        word: "es6",
        hint: "a major update to javascript with new features.",
        subject: "javascript"
    },
    {
        word: "nodejs",
        hint: "a javascript runtime built on chrome's v8 engine.",
        subject: "javascript"
    },
    {
        word: "react",
        hint: "a javascript library for building user interfaces.",
        subject: "javascript"
    },
    {
        word: "eventlistener",
        hint: "used to listen for events like clicks in javascript.",
        subject: "javascript"
    },
    {
        word: "hoisting",
        hint: "javascript's default behavior of moving declarations to the top.",
        subject: "javascript"
    },
    {
        word: "scope",
        hint: "defines the visibility of variables in javascript.",
        subject: "javascript"
    },
    {
        word: "prototype",
        hint: "the mechanism by which javascript objects inherit features.",
        subject: "javascript"
    },
    {
        word: "eventloop",
        hint: "handles execution of multiple operations in javascript.",
        subject: "javascript"
    },
    {
        word: "api",
        hint: "a set of functions for interacting with a system or library.",
        subject: "javascript"
    },

    // Python
    {
        word: "iterable",
        hint: "an object capable of returning its members one at a time.",
        subject: "python"
    },
    {
        word: "generator",
        hint: "a function that yields values one at a time in python.",
        subject: "python"
    },
    {
        word: "pandas",
        hint: "a python library for data analysis and manipulation.",
        subject: "python"
    },
    {
        word: "numpy",
        hint: "a library for numerical computations in python.",
        subject: "python"
    },
    {
        word: "flask",
        hint: "a micro web framework for python.",
        subject: "python"
    },
    {
        word: "django",
        hint: "a high-level python web framework.",
        subject: "python"
    },
    {
        word: "comprehension",
        hint: "a concise way to create lists, sets, or dictionaries in python.",
        subject: "python"
    },
    {
        word: "decorator",
        hint: "a function that extends the behavior of another function.",
        subject: "python"
    },
    {
        word: "exception",
        hint: "an error that can be handled in python.",
        subject: "python"
    },
    {
        word: "interpreter",
        hint: "executes python code line by line.",
        subject: "python"
    },

    // SQL
    {
        word: "normalization",
        hint: "process of organizing data to reduce redundancy.",
        subject: "sql"
    },
    {
        word: "denormalization",
        hint: "process of introducing redundancy to improve performance.",
        subject: "sql"
    },
    {
        word: "subquery",
        hint: "a query nested within another query.",
        subject: "sql"
    },
    {
        word: "aggregate",
        hint: "functions like count, sum, avg in sql.",
        subject: "sql"
    },
    {
        word: "alias",
        hint: "a temporary name for a table or column in sql.",
        subject: "sql"
    },
    {
        word: "trigger",
        hint: "a procedure executed automatically in response to certain events.",
        subject: "sql"
    },
    {
        word: "storedprocedure",
        hint: "a precompiled sql statement stored in the database.",
        subject: "sql"
    },
    {
        word: "constraint",
        hint: "rules applied to table columns like unique or not null.",
        subject: "sql"
    },
    {
        word: "cursor",
        hint: "a database object used to retrieve and manipulate data row by row.",
        subject: "sql"
    },
    {
        word: "replication",
        hint: "copying data from one database to another.",
        subject: "sql"
    },

    // PHP
    {
        word: "get",
        hint: "http method used to request data from a server in php.",
        subject: "php"
    },
    {
        word: "post",
        hint: "http method used to send data to a server in php.",
        subject: "php"
    },
    {
        word: "mysqli",
        hint: "a php extension for interacting with mysql databases.",
        subject: "php"
    },
    {
        word: "composer",
        hint: "a dependency manager for php.",
        subject: "php"
    },
    {
        word: "trait",
        hint: "mechanism for code reuse in php.",
        subject: "php"
    },
    {
        word: "namespace",
        hint: "organizes code into groups in php.",
        subject: "php"
    },
    {
        word: "autoloading",
        hint: "automatically includes required php files.",
        subject: "php"
    },
    {
        word: "preparedstatement",
        hint: "a feature to execute sql queries securely in php.",
        subject: "php"
    },
    {
        word: "superglobals",
        hint: "built-in variables in php like $_post and $_get.",
        subject: "php"
    },
    {
        word: "htaccess",
        hint: "a configuration file for web servers used with php.",
        subject: "php"
    }
];
