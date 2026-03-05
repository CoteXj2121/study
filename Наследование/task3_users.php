<?php

class User {
    public function solve($n) {
    }
}

class Student extends User {
}

class Teacher extends User {
    public function check_solution($user, $n) {
    }
}

class Admin extends User {
    public function edit($n) {
    }
}

class SuperAdmin extends Admin {
    public function grant($user) {
    }
}

// Test case
$student = new Student();
$teacher = new Teacher();
$admin = new Admin();
$superadmin = new SuperAdmin();

echo "Hierarchy created successfully\n";
?>
