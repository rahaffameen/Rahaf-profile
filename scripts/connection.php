
<?php 

ini_set ('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);
 if ($dbc = @mysqli_connect('localhost','root','')){
   print '';
   if (!@mysqli_select_db ($dbc, 'portfolio')) {
    die ('<p>Error! Could not select the database because, <b>' . mysqli_error($dbc) . '</b></p>'); }
 }
 else {
   die ('Error! could not connect because, ' . mysqli_error($dbc));
 }

?>