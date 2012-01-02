<?php
require 'tests/helpers.php';
require 'Universal/ClassLoader/SplClassLoader.php';
$loader = new \Universal\ClassLoader\SplClassLoader( array(  
    'Mail' => 'src'
));
$loader->register();
