<?php

class Rectangle
{
    private $x;
    private $y;
    private $w;
    private $h;

    public function __construct($x, $y, $w, $h)
    {
        $this->x = $x;
        $this->y = $y;
        $this->w = $w;
        $this->h = $h;
    }

    public function get_x()
    {
        return $this->x;
    }

    public function get_y()
    {
        return $this->y;
    }

    public function get_w()
    {
        return $this->w;
    }

    public function get_h()
    {
        return $this->h;
    }

    public function intersection($other)
    {
        $x1 = max($this->x, $other->x);
        $y1 = max($this->y, $other->y);
        $x2 = min($this->x + $this->w, $other->x + $other->w);
        $y2 = min($this->y + $this->h, $other->y + $other->h);

        if ($x1 >= $x2 || $y1 >= $y2) {
            return null;
        }

        return new Rectangle($x1, $y1, $x2 - $x1, $y2 - $y1);
    }
}

// Test case
$rect1 = new Rectangle(0, 0, 10, 10);
$rect2 = new Rectangle(5, 5, 10, 10);
$rect3 = $rect1->intersection($rect2);

if ($rect3 === null) {
    echo "No intersection\n";
} else {
    echo $rect3->get_x() . " " . $rect3->get_y() . " " . $rect3->get_w() . " " . $rect3->get_h() . "\n";
}
?>
