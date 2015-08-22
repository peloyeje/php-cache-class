<?php
include 'cache.class.php';
$settings = array('testcache');
$cache = new \Cache();
$cache->store('test', 14345, '0');
$cache->store('test2', 6.34324);
$cache->deleteExpired();
var_dump($cache);
 ?>
