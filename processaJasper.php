<?php
require __DIR__ . './composer/vendor/autoload.php';

use PHPJasper\PHPJasper;

$input = './composer/vendor/geekcom/phpjasper/examples/hello_world.jasper';   
$output = './composer/vendor/geekcom/phpjasper/examples';
$options = [
  'format' => ['pdf'],
  'locale' => 'pt_BR',
  'params' => [],
  'db_connection' => [
      'driver' => 'mysql',
      'username' => 'root',
      'password' => '',
      'host' => 'localhost',
      'database' => 'db_teste',
      'port' => '3306'
  ]
];

$jasper = new PHPJasper;

$jasper->process(
      $input,
      $output,
      $options
)->execute();


/* $input = __DIR__ . '/composer/vendor/geekcom/phpjasper/examples/hello_world.jasper';  
$output = __DIR__ . '/composer/vendor/geekcom/phpjasper/examples';    
$options = [ 
    'format' => ['pdf', 'rtf'] 
];

$jasper = new PHPJasper;

$jasper->process(
    $input,
    $output,
    $options
)->execute(); */