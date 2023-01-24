<?php
    function calcular(){
        $distancia = $_POST['tDistancia'];
        $consumo   = $_POST['tConsumo'];
        return $distancia / $consumo;
    }

    echo calcular();

?>
<br><br><a href="../html/botoes.html"><button>Voltar</button></a>