<?php

class Summator {
    public function transform($n) {
        return $n;
    }

    public function sum($N) {
        $result = 0;
        for ($i = 1; $i <= $N; $i++) {
            $result += $this->transform($i);
        }
        return $result;
    }
}

class PowerSummator extends Summator {
    protected $power;

    public function __construct($power) {
        $this->power = $power;
    }

    public function transform($n) {
        return pow($n, $this->power);
    }
}

class SquareSummator extends PowerSummator {
    public function __construct() {
        parent::__construct(2);
    }
}

class CubeSummator extends PowerSummator {
    public function __construct() {
        parent::__construct(3);
    }
}

// Test case
$power3 = new PowerSummator(3);
echo $power3->sum(5) . "\n"; // 1+8+27+64+125 = 225

$square = new SquareSummator();
echo $square->sum(5) . "\n"; // 1+4+9+16+25 = 55

$cube = new CubeSummator();
echo $cube->sum(5) . "\n"; // 1+8+27+64+125 = 225
?>
