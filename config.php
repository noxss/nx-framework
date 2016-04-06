<?php
  $config = Config::singleton();

  //App configuration
  $config->set('controllersFolder', 'controllers/');
  $config->set('modelsFolder', 'models/');					
  $config->set('viewsFolder_Default', 'views/default/'); //template directory
  $config->set('imgFolder', 'media/');
  $config->set('baseURL', 'http://' . $_SERVER["HTTP_HOST"] .'/');

  //Database configuration
  $config->set('dbhost', 'localhost');
  $config->set('dbname', '');
  $config->set('dbuser', '');
  $config->set('dbpass', '');
?>