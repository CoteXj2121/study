<?php

class Person
{
    private $first_name;
    private $patronymic;
    private $last_name;
    private $phones;

    public function __construct($first_name, $patronymic, $last_name, $phones)
    {
        $this->first_name = $first_name;
        $this->patronymic = $patronymic;
        $this->last_name = $last_name;
        $this->phones = $phones;
    }

    public function get_phone()
    {
        return $this->phones["private"] ?? null;
    }

    public function get_name()
    {
        return $this->last_name . " " . $this->first_name . " " . $this->patronymic;
    }

    public function get_work_phone()
    {
        return $this->phones["work"] ?? null;
    }

    public function get_sms_text()
    {
        return "Уважаемый " . $this->first_name . " " . $this->patronymic . "! Примите участие в нашем беспроигрышном конкурсе для физических лиц";
    }
}

class Company
{
    private $name;
    private $type;
    private $phones;
    private $employees;

    public function __construct($name, $type, $phones, ...$employees)
    {
        $this->name = $name;
        $this->type = $type;
        $this->phones = $phones;
        $this->employees = $employees;
    }

    public function get_phone()
    {
        if (isset($this->phones["contact"])) {
            return $this->phones["contact"];
        }
        foreach ($this->employees as $employee) {
            $phone = $employee->get_work_phone();
            if ($phone !== null) {
                return $phone;
            }
        }
        return null;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_sms_text()
    {
        return "Для компании " . $this->name . " есть супер предложение! Примите участие в нашем беспроигрышном конкурсе для " . $this->type;
    }
}

function send_sms(...$recipients)
{
    foreach ($recipients as $recipient) {
        $phone = $recipient->get_phone();
        if ($phone !== null) {
            echo "Отправлено СМС на номер " . $phone . " с текстом: " . $recipient->get_sms_text() . "\n";
        } else {
            echo "Не удалось отправить сообщение абоненту: " . $recipient->get_name() . "\n";
        }
    }
}

// Test case
$person1 = new Person("Ivan", "Ivanovich", "Ivanov", ["private" => 123, "work" => 456]);
$person2 = new Person("Ivan", "Petrovich", "Petrov", ["private" => 789]);
$person3 = new Person("Ivan", "Petrovich", "Sidorov", ["work" => 789]);
$person4 = new Person("John", "Unknown", "Doe", []);
$company1 = new Company("Bell", "ООО", ["contact" => 111], $person3, $person4);
$company2 = new Company("Cell", "АО", ["non_contact" => 222], $person2, $person3);
$company3 = new Company("Dell", "Ltd", ["non_contact" => 333], $person2, $person4);
send_sms($person1, $person2, $person3, $person4, $company1, $company2, $company3);
?>
