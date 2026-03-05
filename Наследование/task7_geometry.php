<?php

class Shape {
}

class Polygon extends Shape {
}

class Triangle extends Polygon {
}

class IsoscelesTriangle extends Triangle {
}

class EquilateralTriangle extends IsoscelesTriangle {
}

class Quadrilateral extends Polygon {
}

class Parallelogram extends Quadrilateral {
}

class Rectangle extends Parallelogram {
}

class Square extends Rectangle {
}

// Test case
echo "Geometry hierarchy created successfully\n";
?>
