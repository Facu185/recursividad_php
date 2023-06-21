<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $aryNums = [1, 2, 3, 20, 6, 10, 16, 18];
        $num = 0;
        function countNum($i) {
            global $aryNums, $num;
            if ($i > 100) {
                return;
            }
            $random = rand(0, count($aryNums) - 1);
            $lugar = $aryNums[$random];
            if ($lugar > $num) {
                $num = $lugar;
            }
            return countNum($i + 1);
        }
        countNum(0);
        echo "El número mayor es: " . $num;
        $aryPalabras = ["Facundo", "Santiago", "Martina", "Nestor", "Adriana", "Bruno", "Pia", "Max"];
        $maxLetras = PHP_INT_MAX;
        $aryGuardar = [];
        function countPalabras($e) {
            global $aryPalabras, $maxLetras, $aryGuardar;
            if ($e > 100) {
                return;
            }
            $random1 = rand(0, count($aryPalabras) - 1);
            $random2 = rand(0, count($aryPalabras) - 1);
            $cantLetra1 = strlen($aryPalabras[$random1]);
            $cantLetra2 = strlen($aryPalabras[$random2]);
            $cantLetras = $cantLetra1 + $cantLetra2;
            if ($cantLetras < $maxLetras && $aryPalabras[$random1] !== $aryPalabras[$random2]) {
                $maxLetras = $cantLetras;
                $aryGuardar[0] = $aryPalabras[$random1];
                $aryGuardar[1] = $aryPalabras[$random2];
            }
            return countPalabras($e + 1);
        }
        countPalabras(0);
        echo "<br>"."Los nombres más cortos son: " . implode(", ", $aryGuardar);
        $aryNums2 = [1, 2, 3, 22, 6, 5, 83, 11, 2, 3, 5, 7, 11, 13, 61, 67, 71, 73, 79];
        $num2 = 0;
        function countNum2($i) {
            global $aryNums2, $num2;
            if ($i > 100) {
                return;
            }
            $random2 = rand(0, count($aryNums2) - 1);
            $lugar2 = $aryNums2[$random2];
            if ($lugar2 > $num2 && esPrimo($lugar2)) {
                $num2 = $lugar2;
            }
            return countNum2($i + 1);
        }
        function esPrimo($num2) {
            if ($num2 <= 1) {
                return false;
            }
            for ($h = 2; $h < $num2; $h++) {
                if ($num2 % $h === 0) {
                    return false;
                }
            }
            return true;
        }
        countNum2(0);
        echo "<br>"."El mayor número primo es: " . $num2;
    ?>
</body>
</html>