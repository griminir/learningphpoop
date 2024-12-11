<?php
declare (strict_types = 1);
namespace testGround\Exceptions;
class RouteNotFoundException extends \Exception
{
    protected $message = 'Route not found';
}