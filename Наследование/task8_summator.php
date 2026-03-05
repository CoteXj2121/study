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

class SquareSummator extends Summator {
    public function transform($n) {
        return $n * $n;
    }
}

class CubeSummator extends Summator {
    public function transform($n) {
        return $n * $n * $n;
    }
}

// Test case
$summator = new Summator();
echo $summator->sum(5) . "\n"; // 1+2+3+4+5 = 15

$square = new SquareSummator();
echo $square->sum(5) . "\n"; // 1+4+9+16+25 = 55

$cube = new CubeSummator();
echo $cube->sum(5) . "\n"; // 1+8+27+64+125 = 225
?>
