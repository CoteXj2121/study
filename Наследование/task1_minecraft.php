<?php

class BaseObject {
    protected $x;
    protected $y;
    protected $z;

    public function __construct($x, $y, $z) {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function get_coordinates() {
        return [$this->x, $this->y, $this->z];
    }
}

class Block extends BaseObject {
    public function shatter() {
        $this->x = null;
        $this->y = null;
        $this->z = null;
    }
}

class Entity extends BaseObject {
    public function move($x, $y, $z) {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
}

class Thing extends BaseObject {
}

// Test case
$block = new Block(10, 20, 30);
echo implode(", ", $block->get_coordinates()) . "\n";
$block->shatter();
echo implode(", ", array_map(function($v) { return $v === null ? "null" : $v; }, $block->get_coordinates())) . "\n";

$entity = new Entity(0, 0, 0);
$entity->move(5, 5, 5);
echo implode(", ", $entity->get_coordinates()) . "\n";
?>
