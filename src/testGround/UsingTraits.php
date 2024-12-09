<?php
declare(strict_types=1);
namespace testGround;

class UsingTraits
{
    use RandomTrait;
    // use RTrait {
    //     RTrait::iWantToCopy insteadOf RandomTrait;
    // }
    // use RTrait {
    //     RTrait::iWantToCopy as copy;
    //}
}
// if you have 2 traits with the same method, you can use the insteadOf keyword to specify which one to use
// if you want to use both, you can use the as keyword to specify an alias
// you can also change the visibility of the method by using the as keyword (public, protected, private) try not to use it