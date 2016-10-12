<?php

  if( !defined('INIT') )
    try
    {
      define('INIT', TRUE);
      $_GLOBALS['servicesUrl'] = 'http://localhost';
      $_GLOBALS['connection'] = new PDO("mysql:host=localhost;dbname=urls", "root", "toor");
    }
    catch(Exception $e)
    {
        echo $e->getMessage();
    }

?>
