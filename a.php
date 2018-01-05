<? 
  echo('Current working directory on the server: <br><br>');
  echo('<textarea rows="1" cols="100">');
  echo getcwd();
  echo('</textarea>');
  echo('<br><br><h2>Instructions:</h2><br><b>Copy this above directory address with appropriate slashes till the folder name that you see in your address bar!
  <br>For example, let you are in abc.com/img/usr/a.php and the working directory is /home/user/abc.com/img/usr/<br>
  now, you have to do is, copy the whole line except img/usr/ at the end.<br>
  now paste this in the b.php file and run b.php to complete the process!</b>');
?>
