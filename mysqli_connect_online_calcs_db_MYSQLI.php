<?php

  // set the database access information as constants
  DEFINE ('DB_HOST', 'localhost');
  DEFINE ('DB_USER', 'onlinecalcs_user');
  DEFINE ('DB_PASSWORD', 'your_password#46');
  DEFINE ('DB_NAME', 'onlinecalcsdb_generic');

  //make the connection
  $conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);      //this is procedural style
  if (!$conn) { die ("Could not connect to database"); }
?>
