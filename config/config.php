<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'upgrade.disable-web' => true,
  'instanceid' => 'ocx60lt7l19v',
  'passwordsalt' => 'rx1rGms2P7YU+J7QQtW1gFAbtM4gzd',
  'secret' => '9930WaNEpW0+LcTcWRADbVteBLOnz9EICWbvI7sVgRt+tq/V',
  'trusted_domains' => 
  array (
    0 => 'localhost:8081',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '30.0.2.2',
  'overwrite.cli.url' => 'http://localhost:8081',
  'dbname' => 'nextcloud',
  'dbhost' => 'postgres',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
);
