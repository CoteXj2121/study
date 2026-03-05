<?php

class LeftParagraph
{
    private $width;
    private $words = [];

    public function __construct($width)
    {
        $this->width = $width;
    }

    public function add_word($word)
    {
        $this->words[] = $word;
    }

    public function end()
    {
        $lines = [];
        $current_line = "";

        foreach ($this->words as $word) {
            if (empty($current_line)) {
                $current_line = $word;
            } elseif (strlen($current_line) + 1 + strlen($word) <= $this->width) {
                $current_line .= " " . $word;
            } else {
                $lines[] = $current_line;
                $current_line = $word;
            }
        }

        if (!empty($current_line)) {
            $lines[] = $current_line;
        }

        foreach ($lines as $line) {
            echo $line . "\n";
        }

        $this->words = [];
    }
}

class RightParagraph
{
    private $width;
    private $words = [];

    public function __construct($width)
    {
        $this->width = $width;
    }

    public function add_word($word)
    {
        $this->words[] = $word;
    }

    public function end()
    {
        $lines = [];
        $current_line = "";

        foreach ($this->words as $word) {
            if (empty($current_line)) {
                $current_line = $word;
            } elseif (strlen($current_line) + 1 + strlen($word) <= $this->width) {
                $current_line .= " " . $word;
            } else {
                $lines[] = $current_line;
                $current_line = $word;
            }
        }

        if (!empty($current_line)) {
            $lines[] = $current_line;
        }

        foreach ($lines as $line) {
            $padding = $this->width - strlen($line);
            echo str_repeat(" ", $padding) . $line . "\n";
        }

        $this->words = [];
    }
}

// Test case
$lp = new LeftParagraph(8);
$lp->add_word("abc");
$lp->add_word("defg");
$lp->add_word("hi");
$lp->add_word("jklmnopq");
$lp->add_word("r");
$lp->add_word("stuv");
$lp->end();
echo "\n";

$rp = new RightParagraph(8);
$rp->add_word("abc");
$rp->add_word("defg");
$rp->add_word("hi");
$rp->add_word("jklmnopq");
$rp->add_word("r");
$rp->add_word("stuv");
$rp->end();
?>
