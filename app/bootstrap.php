<?php
  // Load Config
  require_once 'config/config.php';
  // Load Helpers
  require_once 'helpers/url_helper.php';
  require_once 'helpers/session_helper.php';

  // Autoload Core Libraries
  spl_autoload_register(function($className){
    // if (file_exists('../app/libraries/' . $className . '.php')) {
      require_once '../app/libraries/' . $className . '.php';
    // }
    
  });
  
