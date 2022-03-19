<?php
// HTTP
define('HTTP_SERVER', 'https://'.$_SERVER['HTTP_HOST'].'/admin/');
define('HTTP_CATALOG', 'https://'.$_SERVER['HTTP_HOST'].'/');

// HTTPS
define('HTTPS_SERVER', 'https://'.$_SERVER['HTTP_HOST'].'/admin/');
define('HTTPS_CATALOG', 'https://'.$_SERVER['HTTP_HOST'].'/');

// DIR
define('DIR_APPLICATION', rtrim($_SERVER['DOCUMENT_ROOT'], '\/').'/admin/');
define('DIR_SYSTEM', rtrim($_SERVER['DOCUMENT_ROOT'], '\/').'/system/');
define('DIR_IMAGE', rtrim($_SERVER['DOCUMENT_ROOT'], '\/').'/image/');
define('DIR_STORAGE', rtrim($_SERVER['DOCUMENT_ROOT'], '\/').'/../storage/');
define('DIR_CATALOG', rtrim($_SERVER['DOCUMENT_ROOT'], '\/').'/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'u1095413_re_shop');
define('DB_PASSWORD', '4Y6s6P0p');
define('DB_DATABASE', 'u1095413_re_shop');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
define('OPENCARTFORUM_SERVER', 'https://opencartforum.com/');
