<?php
function decimalParaHexadecimal($decimal) {
    return dechex($decimal);
}


function hexadecimalParaDecimal($hexadecimal) {
    return hexdec($hexadecimal);
}

$decimal = $_POST['tDecimal'];
$hexadecimal = decimalParaHexadecimal($decimal);
echo "Decimal: " . $decimal . " Hexadecimal: " . $hexadecimal . "\n";

$hexadecimal = $_POST['tHexadecimal'];
$decimal = hexadecimalParaDecimal($hexadecimal);
echo "Hexadecimal: " . $hexadecimal . " Decimal: " . $decimal;
echo "<br>";
?>