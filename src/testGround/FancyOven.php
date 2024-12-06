<?php
declare(strict_types=1);

namespace testGround;

class FancyOven
{
    public function __construct(private ToasterPro $toaster)
    {
        
    }

    public function fry()
    {
        // do something frying
    }

    public function toast()
    {
        $this->toaster->toast();
    }

    public function toastBagel()
    {
        $this->toaster->toastBagel();
    }   
}