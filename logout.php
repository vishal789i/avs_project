<?php

   session_start();
    
   unset($_SESSION["startedOfAdmin"]);
   
   echo 'You have cleaned session';
   header('Refresh: 2; URL = frontPage.php');
?>