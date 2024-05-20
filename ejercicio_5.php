<?php
$pajaro = new Pajaro("Canario", "Amarillo");
$aguila = new Aguila("Águila Real", "Café");

class Ave {
    protected $nombre;
    protected $color;

    public function __construct($nombre, $color) {
        $this->nombre = $nombre;
        $this->color = $color;
    }

    public function volar() {
        return $this->nombre . " está volando.";
    }
}

class Pajaro extends Ave {
    public function __construct($nombre, $color) {
        parent::__construct($nombre, $color);
    }

    public function cantar() {
        return $this->nombre . " está cantando.";
    }
}

class Aguila extends Ave {
    public function __construct($nombre, $color) {
        parent::__construct($nombre, $color);
    }

    public function cazar() {
        return $this->nombre . " está cazando.";
    }
}



echo $pajaro->volar() . "\n"; 
echo $pajaro->cantar() . "\n"; 


echo $aguila->volar() . "\n"; 
echo $aguila->cazar() . "\n"; 
?>
