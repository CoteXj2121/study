<?php

class MinStat
{
    private $numbers = [];

    public function add_number($num)
    {
        $this->numbers[] = $num;
    }

    public function result()
    {
        if (empty($this->numbers)) {
            return null;
        }
        return min($this->numbers);
    }
}

class MaxStat
{
    private $numbers = [];

    public function add_number($num)
    {
        $this->numbers[] = $num;
    }

    public function result()
    {
        if (empty($this->numbers)) {
            return null;
        }
        return max($this->numbers);
    }
}

class AverageStat
{
    private $numbers = [];

    public function add_number($num)
    {
        $this->numbers[] = $num;
    }

    public function result()
    {
        if (empty($this->numbers)) {
            return null;
        }
        return array_sum($this->numbers) / count($this->numbers);
    }
}

// Test case
$values = [1, 2, 4, 5];

$mins = new MinStat();
$maxs = new MaxStat();
$average = new AverageStat();
foreach ($values as $v) {
    $mins->add_number($v);
    $maxs->add_number($v);
    $average->add_number($v);
}

echo $mins->result() . " " . $maxs->result() . " " . sprintf("%.3f", $average->result()) . "\n";
?>
