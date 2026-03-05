<?php

class Button
{
    private $clicks = 0;

    public function click()
    {
        $this->clicks++;
    }

    public function click_count()
    {
        return $this->clicks;
    }

    public function reset()
    {
        $this->clicks = 0;
    }
}

// Test cases
$button = new Button();
$button->click();
$button->click();
echo $button->click_count() . "\n"; // 2
$button->click();
echo $button->click_count() . "\n"; // 3
?>
