<?php

class Triangle {
    protected $side1;
    protected $side2;
    protected $side3;

    public function __construct($side1, $side2, $side3) {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function perimeter() {
        return $this->side1 + $this->side2 + $this->side3;
    }
}

class EquilateralTriangle extends Triangle {
    public function __construct($side) {
        parent::__construct($side, $side, $side);
    }
}

// Test case
$triangle = new Triangle(3, 4, 5);
echo $triangle->perimeter() . "\n"; // 12

$equilateral = new EquilateralTriangle(5);
echo $equilateral->perimeter() . "\n"; // 15
?>
