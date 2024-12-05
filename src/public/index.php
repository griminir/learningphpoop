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

use App\PaymentGateway\Paddle\Transaction;

$paddleTransaction = new Transaction();

$id = new \Ramsey\Uuid\UuidFactory();

echo $id->uuid4();

var_dump($paddleTransaction);