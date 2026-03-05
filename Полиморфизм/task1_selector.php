<?php

class Selector
{
    private $values = [];

    public function __construct($values = [])
    {
        $this->values = $values;
    }

    public function get_odds()
    {
        $odds = [];
        foreach ($this->values as $num) {
            if ($num % 2 !== 0) {
                $odds[] = $num;
            }
        }
        return $odds;
    }

    public function get_evens()
    {
        $evens = [];
        foreach ($this->values as $num) {
            if ($num % 2 === 0) {
                $evens[] = $num;
            }
        }
        return $evens;
    }
}

// Test case
$values = [11, 12, 13, 14, 15, 16, 22, 44, 66];
$selector = new Selector($values);
$odds = $selector->get_odds();
$evens = $selector->get_evens();
echo implode(" ", $odds) . "\n";
echo implode(" ", $evens) . "\n";
?>
