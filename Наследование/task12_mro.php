<?php

class A {
    public function __toString() {
        return "A.__str__ method";
    }

    public function hello() {
        echo "Hello\n";
    }
}

class B {
    public function __toString() {
        return "B.__str__ method";
    }

    public function good_evening() {
        echo "Good evening\n";
    }
}

class C extends A {
    // Uses A.__toString()
}

class D extends B {
    // Wait, this is wrong for multiple inheritance
    // Let me use traits for true multiple inheritance
}

// For proper implementation we need to use traits or interfaces
// Let me redefine using a different approach

trait AImplementation {
    public function hello() {
        echo "Hello\n";
    }
}

trait BImplementation {
    public function good_evening() {
        echo "Good evening\n";
    }
}

class BaseA {
    use AImplementation;
    public function __toString() {
        return "A.__str__ method";
    }
}

class BaseB {
    use BImplementation;
    public function __toString() {
        return "B.__str__ method";
    }
}

class NewC extends BaseA {
    use BImplementation;
}

class NewD extends BaseB {
    use AImplementation;
}

// Test case
$c = new NewC();
$c->hello();
$c->good_evening();
$d = new NewD();
$d->hello();
$d->good_evening();
echo $c . "\n";
echo $d . "\n";
?>
