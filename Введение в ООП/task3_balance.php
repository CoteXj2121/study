<?php

class Balance
{
    private $left = 0;
    private $right = 0;

    public function add_left($weight)
    {
        $this->left += $weight;
    }

    public function add_right($weight)
    {
        $this->right += $weight;
    }

    public function result()
    {
        if ($this->left === $this->right) {
            return "=";
        } elseif ($this->left > $this->right) {
            return "L";
        } else {
            return "R";
        }
    }
}

// Test cases
$balance = new Balance();
$balance->add_right(10);
$balance->add_left(9);
$balance->add_left(2);
echo $balance->result() . "\n"; // L
?>
