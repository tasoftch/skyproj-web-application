# Skyline Core Application
_Core Content Management System_

This package provides a skeleton template configuration to design a web application using Skyline CMS by TASoft Applications.
## Usage
````bin
$ composer create-project skyline-project/core -s "dev" ./my-skyline-application
````

This will install everything that Skyline CMS needs to deliver a compiled web application to clients.  
So after this install, copy the compiled data into the application and that's it.

#### Compilation
Skyline CMS runs from a compiled application to increase performance and while development detect possible bugs.  
There are several options, to compile an application:
- **Use the Skyline CMS Compiler package**  
    This allows developers to work directly with source files and compile them manually.  
    The Skyline CMS Compiler package is installed automatically when creating a development project.
    ````bin
    $ composer create-project skyline/template-web --no-dev ./my-skyline-application
    ````
    This command won't install the compiler
- **Use a Skyline CMS Control Panel**  
    With control panels, you can edit and manage the content, as you expect, online by the content management system.
    