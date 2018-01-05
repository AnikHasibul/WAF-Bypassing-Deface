# WAF Bypassing Deface (Or maybe an inappropriate title to express!)
This repository contains scripts that can be used to deface such websites that supports php but no web shells!
Well, pretty confusing right? Let's make it more clear with examples because example is better than concept!
Assume, you are uploading shell through uploader in a site but all functionalities that shell has are triggering the firewall or not letting the shell run, then this will be useful to atleast deface in the public_html directory.
the usage is below!
# Usage:
-------
First, upload your deface page(let it's name is hacked.html)
Secondly, upload the a.php and b.php file
Thirdly, open the a.php file in the server
Fourthly, copy the texts from the text box in a.php and paste it in the source file of b.php and run the b.php to and you are done!
Finally, open the a.php(in the browser, you need not to check source code) and b.php(before you run it, change the required info
as per given instruction both in here and the b.php file itself!) respectedly.
Done!
If any problem arises, Issues tab is available!
# N.B:
-----
This will work only when php code is executed in the server! The concept is simply using the copy function of php to copy deface page from
sub directory to the main directory!
