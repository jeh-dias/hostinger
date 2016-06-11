<?php

$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';
$settings['hash_salt'] = 'NMbiNN0w+RyikSmBtpT9ej5j3udmCT/WlLG2qdFYi1o=';
$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['extension_discovery_scan_tests'] = TRUE;
$settings['rebuild_access'] = TRUE;

$config['system.logging']['error_level'] = 'verbose';
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

$databases['default']['default'] = array(
  'database' => 'u774965308_site',
  'username' => 'u774965308_site',
  'password' => 'jujuba10',
  'prefix' => '',
  'host' => 'mysql.hostinger.com.br',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);