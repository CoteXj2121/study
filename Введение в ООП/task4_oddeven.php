<?php

class OddEvenSeparator
{
    private $even_numbers = [];
    private $odd_numbers = [];

    public function add_number($num)
    {
        if ($num % 2 === 0) {
            $this->even_numbers[] = $num;
        } else {
            $this->odd_numbers[] = $num;
        }
    }

    public function even()
    {
        return $this->even_numbers;
    }

    public function odd()
    {
        return $this->odd_numbers;
    }
}

// Test cases
$separator = new OddEvenSeparator();
$separator->add_number(1);
$separator->add_number(5);
$separator->add_number(6);
$separator->add_number(8);
$separator->add_number(3);
echo implode(" ", $separator->even()) . "\n"; // 6 8
echo implode(" ", $separator->odd()) . "\n";  // 1 5 3
?>
