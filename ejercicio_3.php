<?php
$circulo = new Circle(readline("Ingrese el radio del círculo"));

class Circle {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter() {
        return 2 * pi() * $this->radius;
    }
}



echo "El área del círculo es: " . $circulo->calculateArea() . "\n";
echo "El perímetro del círculo es: " . $circulo->calculatePerimeter();
?>
