<?php

class TableAdvanced
{
    private $data = [];

    public function __construct($rows, $cols)
    {
        for ($i = 0; $i < $rows; $i++) {
            $this->data[$i] = array_fill(0, $cols, 0);
        }
    }

    public function get_value($row, $col)
    {
        if (!isset($this->data[$row]) || !isset($this->data[$row][$col])) {
            return null;
        }
        return $this->data[$row][$col];
    }

    public function set_value($row, $col, $value)
    {
        $this->data[$row][$col] = $value;
    }

    public function n_rows()
    {
        return count($this->data);
    }

    public function n_cols()
    {
        return empty($this->data) ? 0 : count($this->data[0]);
    }

    public function delete_row($row)
    {
        unset($this->data[$row]);
        $this->data = array_values($this->data);
    }

    public function delete_col($col)
    {
        foreach ($this->data as &$row) {
            unset($row[$col]);
            $row = array_values($row);
        }
    }

    public function add_row($row)
    {
        $new_row = array_fill(0, $this->n_cols(), 0);
        array_splice($this->data, $row, 0, [$new_row]);
    }

    public function add_col($col)
    {
        foreach ($this->data as &$row) {
            array_splice($row, $col, 0, 0);
        }
    }
}

// Test case
$tab = new TableAdvanced(3, 5);
$tab->set_value(0, 1, 10);
$tab->set_value(1, 2, 20);
$tab->set_value(2, 3, 30);
for ($i = 0; $i < $tab->n_rows(); $i++) {
    for ($j = 0; $j < $tab->n_cols(); $j++) {
        echo $tab->get_value($i, $j) . " ";
    }
    echo "\n";
}
echo "\n";

$tab->add_row(1);

for ($i = 0; $i < $tab->n_rows(); $i++) {
    for ($j = 0; $j < $tab->n_cols(); $j++) {
        echo $tab->get_value($i, $j) . " ";
    }
    echo "\n";
}
?>
