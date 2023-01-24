<?php
function gerarFibonacci($limite) {
    
    $fib1 = 0;
    $fib2 = 1;
    $fibonacci = array();

    
    array_push($fibonacci, $fib1);
    array_push($fibonacci, $fib2);

   
    while ($fib2 < $limite) {
        $temp = $fib2;
        $fib2 += $fib1;
        $fib1 = $temp;
        array_push($fibonacci, $fib2);
    }

    
    return $fibonacci;

}
$limite = 900;
$fibonacci = gerarFibonacci($limite);
print_r($fibonacci);


?>
<br><br><a href="../html/botoes.html"><button>Voltar</button></a>