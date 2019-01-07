# PHP-I Jan 2019

## Homework

## Class Notes

## Q & A

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
