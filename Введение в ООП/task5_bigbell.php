<?php

class BigBell
{
    private $count = 0;

    public function sound()
    {
        if ($this->count % 2 === 0) {
            echo "ding\n";
        } else {
            echo "dong\n";
        }
        $this->count++;
    }
}

// Test cases
$bell = new BigBell();
$bell->sound();
$bell->sound();
$bell->sound();
?>
