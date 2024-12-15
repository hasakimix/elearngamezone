const wordList = [
    // HTML
    {
        word: "doctype",
        hint: "defines the document type and version of html.",
        subject: 2
    },
    {
        word: "meta",
        hint: "provides metadata about the html document.",
        subject: 2
    },
    {
        word: "header",
        hint: "defines a header for a document or section.",
        subject: 2
    },
    {
        word: "footer",
        hint: "defines a footer for a document or section.",
        subject: 2
    },
    {
        word: "aside",
        hint: "defines content aside from the main content.",
        subject: 2
    },
    {
        word: "section",
        hint: "defines a section in a document.",
        subject: 2
    },
    {
        word: "article",
        hint: "defines an independent piece of content.",
        subject: 2
    },
    {
        word: "nav",
        hint: "defines navigation links in html.",
        subject: 2
    },
    {
        word: "figure",
        hint: "represents self-contained content, often with a caption.",
        subject: 2
    },
    {
        word: "blockquote",
        hint: "used to define a section quoted from another source.",
        subject: 2
    },

    // Java
    {
        word: "arraylist",
        hint: "a resizable array in java.",
        subject: 1
    },
    {
        word: "hashmap",
        hint: "a data structure to store key-value pairs in java.",
        subject: 1
    },
    {
        word: "thread",
        hint: "a thread of execution in a program.",
        subject: 1
    },
    {
        word: "servlet",
        hint: "a java class used to handle requests on a web server.",
        subject: 1
    },
    {
        word: "jvm",
        hint: "java virtual machine, executes java bytecode.",
        subject: 1
    },
    {
        word: "jre",
        hint: "java runtime environment, provides the runtime for java.",
        subject: 1
    },
    {
        word: "jar",
        hint: "a java archive file used to distribute java applications.",
        subject: 1
    },
    {
        word: "annotation",
        hint: "provides metadata for java code.",
        subject: 1
    },
    {
        word: "generics",
        hint: "allows type-safe collections in java.",
        subject: 1
    },
    {
        word: "lambda",
        hint: "a feature for writing anonymous functions in java.",
        subject: 1
    },

    // JavaScript
    {
        word: "json",
        hint: "javascript object notation, a lightweight data-interchange format.",
        subject: 3
    },
    {
        word: "es6",
        hint: "a major update to javascript with new features.",
        subject: 3
    },
    {
        word: "nodejs",
        hint: "a javascript runtime built on chrome's v8 engine.",
        subject: 3
    },
    {
        word: "react",
        hint: "a javascript library for building user interfaces.",
        subject: 3
    },
    {
        word: "eventlistener",
        hint: "used to listen for events like clicks in javascript.",
        subject: 3
    },
    {
        word: "hoisting",
        hint: "javascript's default behavior of moving declarations to the top.",
        subject: 3
    },
    {
        word: "scope",
        hint: "defines the visibility of variables in javascript.",
        subject: 3
    },
    {
        word: "prototype",
        hint: "the mechanism by which javascript objects inherit features.",
        subject: 3
    },
    {
        word: "eventloop",
        hint: "handles execution of multiple operations in javascript.",
        subject: 3
    },
    {
        word: "api",
        hint: "a set of functions for interacting with a system or library.",
        subject: 3
    },

    // Python
    {
        word: "iterable",
        hint: "an object capable of returning its members one at a time.",
        subject: 5
    },
    {
        word: "generator",
        hint: "a function that yields values one at a time in python.",
        subject: 5
    },
    {
        word: "pandas",
        hint: "a python library for data analysis and manipulation.",
        subject: 5
    },
    {
        word: "numpy",
        hint: "a library for numerical computations in python.",
        subject: 5
    },
    {
        word: "flask",
        hint: "a micro web framework for python.",
        subject: 5
    },
    {
        word: "django",
        hint: "a high-level python web framework.",
        subject: 5
    },
    {
        word: "comprehension",
        hint: "a concise way to create lists, sets, or dictionaries in python.",
        subject: 5
    },
    {
        word: "decorator",
        hint: "a function that extends the behavior of another function.",
        subject: 5
    },
    {
        word: "exception",
        hint: "an error that can be handled in python.",
        subject: 5
    },
    {
        word: "interpreter",
        hint: "executes python code line by line.",
        subject: 5
    },

    // SQL
    {
        word: "normalization",
        hint: "process of organizing data to reduce redundancy.",
        subject: 6
    },
    {
        word: "denormalization",
        hint: "process of introducing redundancy to improve performance.",
        subject: 6
    },
    {
        word: "subquery",
        hint: "a query nested within another query.",
        subject: 6
    },
    {
        word: "aggregate",
        hint: "functions like count, sum, avg in sql.",
        subject: 6
    },
    {
        word: "alias",
        hint: "a temporary name for a table or column in sql.",
        subject: 6
    },
    {
        word: "trigger",
        hint: "a procedure executed automatically in response to certain events.",
        subject: 6
    },
    {
        word: "storedprocedure",
        hint: "a precompiled sql statement stored in the database.",
        subject: 6
    },
    {
        word: "constraint",
        hint: "rules applied to table columns like unique or not null.",
        subject: 6
    },
    {
        word: "cursor",
        hint: "a database object used to retrieve and manipulate data row by row.",
        subject: 6
    },
    {
        word: "replication",
        hint: "copying data from one database to another.",
        subject: 6
    },

    // PHP
    {
        word: "get",
        hint: "http method used to request data from a server in php.",
        subject: 4
    },
    {
        word: "post",
        hint: "http method used to send data to a server in php.",
        subject: 4
    },
    {
        word: "mysqli",
        hint: "a php extension for interacting with mysql databases.",
        subject: 4
    },
    {
        word: "composer",
        hint: "a dependency manager for php.",
        subject: 4
    },
    {
        word: "trait",
        hint: "mechanism for code reuse in php.",
        subject: 4
    },
    {
        word: "namespace",
        hint: "organizes code into groups in php.",
        subject: 4
    },
    {
        word: "autoloading",
        hint: "automatically includes required php files.",
        subject: 4
    },
    {
        word: "preparedstatement",
        hint: "a feature to execute sql queries securely in php.",
        subject: 4
    },
    {
        word: "superglobals",
        hint: "built-in variables in php like $_post and $_get.",
        subject: 4
    },
    {
        word: "htaccess",
        hint: "a configuration file for web servers used with php.",
        subject: 4
    }
];
