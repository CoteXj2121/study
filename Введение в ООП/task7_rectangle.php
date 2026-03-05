<?php

class BoundingRectangle
{
    private $min_x = null;
    private $max_x = null;
    private $min_y = null;
    private $max_y = null;

    public function add_point($x, $y)
    {
        if ($this->min_x === null) {
            $this->min_x = $x;
            $this->max_x = $x;
            $this->min_y = $y;
            $this->max_y = $y;
        } else {
            $this->min_x = min($this->min_x, $x);
            $this->max_x = max($this->max_x, $x);
            $this->min_y = min($this->min_y, $y);
            $this->max_y = max($this->max_y, $y);
        }
    }

    public function left_x()
    {
        return $this->min_x;
    }

    public function right_x()
    {
        return $this->max_x;
    }

    public function bottom_y()
    {
        return $this->min_y;
    }

    public function top_y()
    {
        return $this->max_y;
    }

    public function width()
    {
        return $this->max_x - $this->min_x;
    }

    public function height()
    {
        return $this->max_y - $this->min_y;
    }
}

// Test cases
$rect = new BoundingRectangle();
$rect->add_point(-1, -2);
$rect->add_point(3, 4);
echo $rect->left_x() . " " . $rect->right_x() . "\n"; // -1 3
echo $rect->bottom_y() . " " . $rect->top_y() . "\n"; // -2 4
echo $rect->width() . " " . $rect->height() . "\n";   // 4 6
?>
