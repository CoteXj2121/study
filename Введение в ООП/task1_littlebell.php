<?php

class LittleBell
{
    public function sound()
    {
        echo "ding\n";
    }
}

// Test cases
$bell = new LittleBell();
$bell->sound();
$bell->sound();
$bell->sound();
?>
