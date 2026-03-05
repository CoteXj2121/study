<?php

class Acellularia {
}

class Cellularia {
}

class Prokaryota extends Cellularia {
}

class Eukaryota extends Cellularia {
}

class Unicellularia extends Eukaryota {
}

class Fungi extends Eukaryota {
}

class Plantae extends Eukaryota {
}

class Animalia extends Eukaryota {
}

// Test case - just structure verification
$virus = new Acellularia();
$bacteria = new Prokaryota();
$unicell = new Unicellularia();
$fungus = new Fungi();
$plant = new Plantae();
$animal = new Animalia();

echo "Hierarchy created successfully\n";
?>
