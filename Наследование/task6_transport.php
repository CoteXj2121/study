<?php

class Transport {
}

class WaterTransport extends Transport {
}

class Ship extends WaterTransport {
}

class Boat extends WaterTransport {
}

class Submarine extends WaterTransport {
}

class AirTransport extends Transport {
}

class Aviation extends AirTransport {
}

class Airplane extends Aviation {
}

class Fighter extends Airplane {
}

class Airlift extends Aviation {
}

class Airship extends Airlift {
}

class Balloon extends Airlift {
}

class LandTransport extends Transport {
}

class RailwayTransport extends LandTransport {
}

class Train extends RailwayTransport {
}

class Tram extends RailwayTransport {
}

class AutomotiveTransport extends LandTransport {
}

class Car extends AutomotiveTransport {
}

class Bus extends AutomotiveTransport {
}

class Truck extends AutomotiveTransport {
}

class BicycleTransport extends LandTransport {
}

class Bicycle extends BicycleTransport {
}

class AnimalTransport extends LandTransport {
}

class Horse extends AnimalTransport {
}

class Camel extends AnimalTransport {
}

class SpaceTransport extends Transport {
}

class Rocket extends SpaceTransport {
}

class Shuttle extends SpaceTransport {
}

// Test case
echo "Transport hierarchy created successfully\n";
?>
