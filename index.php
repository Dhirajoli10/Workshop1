<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';
require 'app/controllers/employee_controller.php';

use Jenssegers\Blade\Blade;

$blade = new Blade('app/views', 'cache');

$data = handleEmployeeRequest();

echo $blade->render($data['view'], $data);
