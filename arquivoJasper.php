<?php
require __DIR__ . './composer/vendor/autoload.php';

use PHPJasper\PHPJasper;

$input = __DIR__ . './composer/vendor/geekcom/phpjasper/examples/BaseAdapsTeste.jrxml';   

$jasper = new PHPJasper;
$jasper->compile($input)->execute();