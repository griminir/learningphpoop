<?php
declare(strict_types=1);

// custom autoloader
// spl_autoload_register(function($class) {
//     $path = __DIR__ . '/../' . str_replace('\\', '/', $class) . '.php';

//     if(file_exists($path)) {
//         require $path;
//     }
// });

// using the composer autoloader is the prefered way during development
// running composer dump-autoload will regenerate the autoload files
// for production you should use classmap autoloading to run faster
// composer dump-autoload -o
require __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../testGround/Router.php';

$router = new testGround\Router();
$router->register('/', [\App\Classes\Home::class, 'index'])
    ->register('/invoices', [\App\Classes\Invoice::class, 'index'])
    ->register('/invoices/create', [\App\Classes\Invoice::class, 'create']);


echo $router->resolve($_SERVER['REQUEST_URI']);