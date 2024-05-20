<?php
$rectangulo = new Rectangle(5, 3);

class Rectangle {
    private $alto;
    private $ancho;

    public function __construct($alto, $ancho) {
        $this->alto = $alto;
        $this->ancho = $ancho;
    }

    public function calcularArea() {
        return $this->alto * $this->ancho;
    }
}


echo "El área del rectángulo es: " . $rectangulo->CalcularArea();
?>
