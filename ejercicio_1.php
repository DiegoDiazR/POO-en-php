<?php
$vehiculo = new Vehiculo(readline("ingrese la placa de su vehiculo"));
$fechaActual = date('Y-m-d'); 

class Vehiculo{
	private $placa;

 	public function __construct($placa) {
        $this->placa = $placa;
    }
	public function datetime($fecha){
		$ultimo_digito = substr($this->placa, -1);

		$dia_semana = date('N', strtotime($fecha));


		switch ($dia_semana) {
			case 1:
				return in_array($ultimo_digito, [1,2]);	
			case 2: // Martes
                return in_array($ultimo_digito, [3, 4]);
            case 3: // Miércoles
                return in_array($ultimo_digito, [5, 6]);
            case 4: // Jueves
                return in_array($ultimo_digito, [7, 8]);
            case 5: // Viernes
                return in_array($ultimo_digito, [9, 0]);
            default:
                return false; // No hay restricción en fines de semana
		}
	}
}


if ($vehiculo->datetime($fechaActual)) {
    echo "El vehículo tiene restricción de pico y placa hoy.";
} else {
    echo "El vehículo NO tiene restricción de pico y placa hoy.";
}


?>