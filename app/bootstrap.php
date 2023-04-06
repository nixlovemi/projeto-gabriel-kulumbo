<?php
// Load Config
require_once '../app/config/config.php';

// loading helpers
$files = glob(APPROOT . '/helpers/*.{php}', GLOB_BRACE);
foreach ($files as $file) {
    require_once $file;
}

// Loading libraries
spl_autoload_register(function($className){
    require_once 'libraries/'.$className.'.php';
});