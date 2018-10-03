<?php
session_start();
session_destroy();
  $_SESSION = [];
  echo "Logged out";

  include("index.php");



?>
