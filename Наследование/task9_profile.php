<?php

class Profile {
    protected $profession;

    public function __construct($profession) {
        $this->profession = $profession;
    }

    public function info() {
        return "";
    }

    public function describe() {
        echo $this->profession . $this->info() . "\n";
    }
}

class Vacancy extends Profile {
    protected $salary;

    public function __construct($profession, $salary) {
        parent::__construct($profession);
        $this->salary = $salary;
    }

    public function info() {
        return " - Предлагаемая зарплата: " . $this->salary;
    }
}

class Resume extends Profile {
    protected $experience;

    public function __construct($profession, $experience) {
        parent::__construct($profession);
        $this->experience = $experience;
    }

    public function info() {
        return " - Стаж работы: " . $this->experience;
    }
}

// Test case
$vacancy = new Vacancy("Developer", 100000);
$vacancy->describe();

$resume = new Resume("Developer", 5);
$resume->describe();
?>
