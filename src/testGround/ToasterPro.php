<?php
// linked to test2.php
declare(strict_types=1);

namespace testGround;

require_once __DIR__ . '/Toaster.php';

class ToasterPro extends Toaster
{
    public function __construct()
    {
        parent::__construct();

        $this->size = 4;
    }

    public function addSlice(string $slice): void 
    {
        parent::addSlice($slice);
    }

    public function toastBagel(): void
    {
        foreach($this->slices as $i => $slice) {
            echo ($i + 1) . ': Toasting ' . $slice . 'with bagels option' . PHP_EOL;
        }
    }
}