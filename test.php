<?php

declare(strict_types=1);

use Quintolin\Storage\HealthCheck;

require_once 'vendor/autoload.php';
$storageHealthCheck = new HealthCheck();
$healthCheck = new Quintolin\Core\HealthCheck($storageHealthCheck);
\var_dump($healthCheck());
