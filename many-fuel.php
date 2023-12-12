<?php
class Car {
    private float $tank = 0; 
    public function getTank(): float {
        return $this->tank;
    }

    public function setTank(float $gallons): self {
        $this->tank = $gallons;
        return $this;
    }

    public function addFuel(float $gallons): self {
        $this->tank += $gallons;
        return $this;
    }

    public function ride(float $kilometers): self {
        $fuelConsumed = $kilometers / 20;
        $this->tank -= $fuelConsumed;
        return $this;
    }
}

$car = new Car();
$car->addFuel(10)->ride(100)->addFuel(5)->ride(50);

echo $car->getTank(); 
