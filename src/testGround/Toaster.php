<?php
// linked to test2.php
declare(strict_types=1);

namespace testGround;

class Toaster
{
    protected array $slices;
    protected int $size;

    public function __construct()
    {
        $this->slices = [];
        $this->size = 2;
    }

    public function addSlice(string $slice): void 
    {
        if(count($this->slices) < $this->size) {
            $this->slices[] = $slice;
        }
    }

    // final keyword is used to prevent overriding of the method
    final public function toast(): void
    {
        foreach($this->slices as $i => $slice) {
            echo ($i + 1) . ': Toasting ' . $slice . PHP_EOL;
        }
    }
}