# PHP-I Jan 2019

## Homework
* For Fri 11 Jan 2019
  * First Assignment: create a simple PHP program under sandbox and run it in the browser

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

## Q & A
Q: Can you provide an example of a string holding non-string data?

## ERRATA
* file:///D:/Repos/PHP-Fundamentals-I/Course_Materials/index.html#/2/2: curly brace s/be on next line

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
