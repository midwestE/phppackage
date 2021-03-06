<?php


$phpVersion = phpversion();
if (version_compare($phpVersion, '7.4.0', '>=')) {
    require_once __DIR__ . '/vendor/autoload.php';
} elseif (version_compare($phpVersion, '7.2.0', '>=')) {
    require_once __DIR__ . '/vendor7/autoload.php';
} else {
    require_once __DIR__ . '/vendor5/autoload.php';
}

if (interface_exists('\PHPUnit\Runner\BeforeFirstTestHook')) {
    require_once __DIR__ . '/tests/PhpPackageTestRunner.php';
}

ini_set('error_reporting', E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

$_SERVER['SERVER_PROTOCOL'] = 'https';
$_SERVER['HTTP_HOST'] = 'phppackagename.lndo.site';
$_SERVER['SCRIPT_NAME'] = '/index.php';
$_SERVER['REMOTE_ADDR'] = '127.0.0.1';
$_SERVER['REQUEST_METHOD'] = 'GET';
$_SERVER['REQUEST_URI'] = '/';
$_SERVER['HTTP_USER_AGENT'] = 'phpunit';
$base_url = $_SERVER['SERVER_PROTOCOL'] . '://' . $_SERVER['HTTP_HOST'];
