<?php 
  require_once(__DIR__.'/config.php');
  require_once(__DIR__.'/router.php');
  require_once(__DIR__.'/helpers/helpers.php');
  
  $router = new Router();
  $router->run();