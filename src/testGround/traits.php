<?php
declare(strict_types=1);
namespace testGround;

trait RandomTrait
{
    public function iWantToCopy()
    {
        // implimentasjon
    }
}
// traits are used if you want to have the same functionality in multiple classes without different implementations
// to use a trait in a class, you use the keyword 'use' followed by the trait name
// use RandomTrait;
// you can use traits in traits
// presedence goes class > trait > parent class