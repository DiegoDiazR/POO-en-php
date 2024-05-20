<?php

class Power {
    public static function power($x, $n) {
        if ($n < 0) {
            return 1 / self::powerPositive($x, -$n);
        } else {
            return self::powerPositive($x, $n);
        }
    }

    private static function powerPositive($x, $n) {
        if ($n == 0) {
            return 1;
        }

        $result = 1;
        for ($i = 0; $i < $n; $i++) {
            $result *= $x;
        }
        return $result;
    }
}


echo "2^3 = " . Power::power(2, 3) . "\n"; // Salida: 8
echo "3^4 = " . Power::power(3, 4) . "\n"; // Salida: 81
?>
