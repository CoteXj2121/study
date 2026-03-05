<?php

class MinMaxWordFinder
{
    private $all_words = [];
    private $word_count = [];

    public function add_sentence($sentence)
    {
        $words = preg_split("/\s+/", trim($sentence), -1, PREG_SPLIT_NO_EMPTY);
        foreach ($words as $word) {
            $this->all_words[] = $word;
            if (!isset($this->word_count[$word])) {
                $this->word_count[$word] = 0;
            }
            $this->word_count[$word]++;
        }
    }

    public function shortest_words()
    {
        if (empty($this->all_words)) {
            return [];
        }

        $min_length = min(array_map("strlen", $this->all_words));
        $shortest = [];

        foreach ($this->all_words as $word) {
            if (strlen($word) === $min_length) {
                $shortest[] = $word;
            }
        }

        sort($shortest);
        return $shortest;
    }

    public function longest_words()
    {
        if (empty($this->all_words)) {
            return [];
        }

        $max_length = max(array_map("strlen", $this->all_words));
        $longest = [];

        foreach (array_keys($this->word_count) as $word) {
            if (strlen($word) === $max_length) {
                $longest[] = $word;
            }
        }

        sort($longest);
        return $longest;
    }
}

// Test cases
$finder = new MinMaxWordFinder();
$finder->add_sentence("hello abc world");
$finder->add_sentence("def asdf qwert");
echo implode(" ", $finder->shortest_words()) . "\n"; // abc def
echo implode(" ", $finder->longest_words()) . "\n";  // hello qwert world
?>
