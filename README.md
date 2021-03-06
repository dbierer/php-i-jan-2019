# PHP-I Jan 2019

file:///D:/Repos/PHP-Fundamentals-I/Course_Materials/index.html#/7/45
TODO: formatting goes off later in this file!

## TODO:
* Q: Do you have an example of reading a formatted stream?
* A: Use `fscanf()` with a pattern which matches the proprietary data format
* A: See: `scanf_read_formatted_text.php` in `/sandbox/public`

* Q: Please find examples of HTML/PHP and PHP/HTML as per the latest labs
* A: PHP + HTML: https://github.com/dbierer/classic_php_examples/blob/master/web/using_php_to_generate_html.php
* A: HTML + PHP: https://github.com/dbierer/classic_php_examples/blob/master/web/form_submit_multi_array.php

## Q & A
* Q: Please have a look at `/homework/olawale/lab4/readDirctories.php` and get it working.
* A: Done

* Q: Do you have an example of using `static` to parse a directory tree?
* A: See sample program in this repository: `sandbox/public/functions_recursive_parse_dir_tree.php`

* Q: Can you provide an example of a string holding non-string data?
* A: See sample program in this repository: `sandbox/public/string_holding_binary.php`

* Q: PHP Libraries
* A: See: https://packagist.org/

## Homework
* For Thu 24 Jan 2019
  * Lab: SQL
  * Lab: Putting It Together
  * Docs on mysqli: http://php.net/manual/en/book.mysqli.php
* For Tue 22 Jan 2019
  * Suggestion for these three labs: just use the same form, which has username, email and password + submit
      * Lab: Embedded PHP
      * Lab: PHP Form String
      * Lab: Secure Input Handling
      * Lab: Escaping Exercise
* For Sun 20 Jan 2019
  * Lab: F-Type Functions
  * Lab: file_get_contents()
  * Lab: file_put_contents()
  * Lab: Write Array Lab
  * Lab: Read Directories
* For Thu 17 Jan 2019
  * Lab: Defining and Calling a Function
  * Lab: Recursive Function Exercise
  * Introducing the Order Inquiry Application  (do this on your own, and ask questions on Thursday)
  * Lab: Two Functions
    * Add to the existing example under /php1/src/ModFunctions/runForms.php
* For Tue 15 Jan 2019
  * Lab: Conditional If-ElseIf
  * Lab: Switch Construct
  * Lab: Foreach Loop
  * Lab: For Loop
  * Lab: While Loop
  * Lab: Do...While Loop
* For Sun 13 Jan 2019
  * Module 3: Foundation
      * Lab: The Mixed Array 1
      * Lab: The Mixed Array 2
      * Lab: The Multi Array
      * Lab: The Multi Configuration Array
      * Lab: First Program
        * NOTE: use some of the different operators we've discussed to gain practice with them
      * Lab: Additional Crew Members
  * Module 4: Control Structures
    * Lab: Conditional If
    * Lab: Conditional If-Else Equality
    * Lab: Conditional If-Else Exclusive OR
* For Thu 10 Jan 2019
  * First Assignment: create a simple PHP program under sandbox and run it in the browser

* Olawale: https://github.com/oadekoya12/zend-training.git

## Class Notes
* Memory Considerations
    * these considerations are only applicable within a single request cycle, where it's long running
    * use `unset()` to remove a variable at runtime
    * use `gc_collect_cycles()` to restore unset memory
    * `php.ini` directives: http://php.net/manual/en/ini.list.php
    * To override the memory limit temporarily:
```
ini_set('memory_limit', '500M');
```
* PHP Documentor Project: https://phpdoc.org/
* Composer is a package manager for 3rd party open source PHP libraries: https://getcomposer.org/
* Composer draws from a repository of open source software: https://packagist.org/
* To get a list of files in a directory: use the `glob()` function: http://php.net/manual/en/function.glob.php
* Bitwise Operators
    * Read the docs: http://php.net/manual/en/language.operators.bitwise.php
    * Go through the tutorial: https://www.w3resource.com/php/operators/bitwise-operators.php
* PHP Examples: https://github.com/dbierer/classic_php_examples
* Keyword `static` can be used to retain values when making recursive function calls
    * If you want to parse a directory tree recursively, there is a class which does that:
    * see: http://php.net/RecursiveDirectoryIterator
```
<?php

$path = realpath('/etc');

$objects = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator($path),
                RecursiveIteratorIterator::SELF_FIRST
);
foreach($objects as $name => $object) {
    // NOTE: each $object is an instance of SplFileInfo
    echo "$name\n";
}
```
* File Operations
    * `file()` command == `file_get_contents()` except it returns an array, one element per line
* Sending data via HTTP POST:
    * php.ini setting `post_max_size` : http://php.net/manual/en/ini.core.php#ini.post-max-size
* Database Rankings: https://db-engines.com/en/ranking

## ERRATA
* Setting up the Jenkins CI lab: The CheckStyle plug-in reached end-of-life. All functionality has been integrated into the Warnings Next Generation Plugin.
* Same applies to `warnings` and `pmd` : integrated into warnings NG
* file:///D:/Repos/PHP-Fundamentals-I/Course_Materials/index.html#/2/2: curly brace s/be on next line
* file:///D:/Repos/PHP-Fundamentals-I/Course_Materials/index.html#/4/29: s/be `$astronaut` on the 1st line
* file:///D:/Repos/PHP-Fundamentals-I/Course_Materials/index.html#/6/14: this example isn't working
```
function getCount( $counter )
{
    if (!file_exists($counter)) touch($counter);
    $fh = fopen( $counter, 'r+' );
    //get the current count
    $num = (int) fread( $fh, 10 );
    // write new hit count back to the file
    rewind($fh);
    // we use pre-increment to write the incremented hit count
    fwrite($fh, ++$num);
    fclose( $fh );
    return $num;
}
echo 'Hit count: ' . getCount('counter.txt') . PHP_EOL;
```
* file:///D:/Repos/PHP-Fundamentals-I/Course_Materials/index.html#/7/14: missing a PHP open tag!
* file:///D:/Repos/PHP-Fundamentals-I/Course_Materials/index.html#/8/2: dBase??? isn't an RDBMS
* file:///D:/Repos/PHP-Fundamentals-I/Course_Materials/index.html#/8/12: Dr. Codd responsible for RDBMS not SQL

# VM Troubleshooting Guide

## General Debugging Tips
* Check your BIOS to make sure `Hardware Virtualization` is enabled
* Make sure your OS is properly updated
* Check your local computer and/or corporate firewall to ensure that port 22 (i.e. ssh/sftp) is not being blocked
* To get debugging information from `vagrant` add the `--debug` flag to whatever operation you're performing
* To get the "provisioning" process restarted:
```
vagrant provision
```

## Running Under Windows 10
* `ERROR [COM]: aRC=E_FAIL (0x8004005) ... {The virtual machine ... has terminated unexpectedly during startup with exit code ... (0xc0000190)`
  * Description
    * I had tried to access the training from Windows 10 machine, as part of which I was creating the VM set-up. Received Attached error, request you to assist. Also, have attached system spec for your reference. Please get in touch with me if you need further details.
  * Solution
    * First of all, please make sure that "Hardware Virtualization" is enabled on your computer BIOS: https://support.lenovo.com/th/en/solutions/ht500006
    * Next, can you please try removing your current VirtualBox installation, and then reinstalling the latest version of VirtualBox as Administrator?
      Have a look at these forum threads.  They're a bit dated, but seem to be a general trend over the years:
        * https://forums.virtualbox.org/viewtopic.php?p=406582
        * https://stackoverflow.com/questions/30837998/oracle-virtualbox-terminated-unexpectedly-with-exit-code-1073741819-0xc000000

## Running Under Windows 7
* Minimum Requirements:
  * Service Pack 1
  * Windows 7 Convenience Rollup
  * .NET Framework 4.5
  * Powershell version 3
    * Which you should get from: Windows Management Framework 4.0
  * VirtualBox: at least 5.2.6
  * Vagrant: at least 2.0.2
* General Notes:
  * Took an extremely long time to install `vagrant`
    * Got stuck for about 15 minutes on `Calculating Available Space`
    * Installed OK after that
