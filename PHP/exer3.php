<?php
 function binarioParaDecimal($binario) {
    $decimal = 0;
    $tamanho = strlen($binario);
    for ($i = 0; $i < $tamanho; $i++) {
        $decimal += intval($binario[$i]) * pow(2, $tamanho - $i - 1);
    }
    return $decimal;
}

function decimalParaBinario($decimal) {
    $binario = "";
    while ($decimal > 0) {
        $binario = strval($decimal % 2) . $binario;
        $decimal = floor($decimal / 2);
    }
    return $binario;
}

$binario = $_POST['tBinario'];
$decimal = binarioParaDecimal($binario);
echo "Binário: " . $binario . " Decimal: " . $decimal . "\n";

$decimal = $_POST['tDecimal'];;
$binario = decimalParaBinario($decimal);
echo "Decimal: " . $decimal . " Binário: " . $binario;
echo "<br>";

?>
<br><br><a href="../html/botoes.html"><button>Voltar</button></a>