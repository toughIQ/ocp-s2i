<?php
  //set headers to NOT cache a page
  //header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
  //header("Pragma: no-cache"); //HTTP 1.0
  //header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

  //or, if you DO want a file to cache, use:
  header("Cache-Control: public"); //30days (60sec * 60min * 24hours * 30days)

?>

php header
