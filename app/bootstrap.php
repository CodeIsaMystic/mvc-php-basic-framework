<?php
/*
 * Loading the config file
 */
require_once 'config/config.php';

/**
 * autoload core libraries
 * Loading the libs files
 *  => `$className` needs that name's files and classes's name are matching
 */
spl_autoload_register(function($className) {
  require_once 'lib/' . $className . '.php';  
});