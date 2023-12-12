<?php
abstract class AbstractGeometry {
    abstract public function area(): float;
    abstract public function perimeter(): float;
}

class Rectangle extends AbstractGeometry {
    private float $width;
    private float $height;

    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area(): float {
        return $this->width * $this->height;
    }

    public function perimeter(): float {
        return 2 * ($this->width + $this->height);
    }
}

class Square extends Rectangle {
    public function __construct(float $side) {
        parent::__construct($side, $side);
    }
}

class Triangle extends AbstractGeometry {
    private float $side1;
    private float $side2;
    private float $side3;

    public function __construct(float $side1, float $side2, float $side3) {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function area(): float {
        $s = ($this->side1 + $this->side2 + $this->side3) / 2;
        return sqrt($s * ($s - $this->side1) * ($s - $this->side2) * ($s - $this->side3));
    }

    public function perimeter(): float {
        return $this->side1 + $this->side2 + $this->side3;
    }
}

$rectangle = new Rectangle(5, 10);
echo $rectangle->area() . "\n"; // 50
echo $rectangle->perimeter() . "\n"; // 30

$square = new Square(5);
echo $square->area() . "\n"; // 25
echo $square->perimeter() . "\n"; // 20

$triangle = new Triangle(3, 4, 5);
echo $triangle->area() . "\n"; // 6
echo $triangle->perimeter(); // 12
