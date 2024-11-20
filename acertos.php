<?php
$acertos=0;

$numeros =[$_POST['numero1'],$_POST['numero2'],$_POST['numero3'],$_POST['numero4'],$_POST['numero5']];

if ($_POST['pergunta1'] == $numeros[2]) { 
    $acertos++;
}

if ($_POST['pergunta2'] == $numeros[3]) { 
    $acertos++;
}

if ($_POST['pergunta3'] == $numeros[4]) { 
    $acertos++;
}

if ($_POST['pergunta4'] == $numeros[1]) { 
    $acertos++;
}

if ($_POST['pergunta5'] == $numeros[0]) { 
    $acertos++;
}

if ($_POST['pergunta6'] == $numeros[2] + $numeros[3]) { 
    $acertos++;
}

if ($_POST['pergunta7'] == $numeros[2] - $numeros[4]) { 
    $acertos++;
}

if ($_POST['pergunta8'] == $numeros[0] * $numeros[1]) { 
    $acertos++;
}

if ($_POST['pergunta9'] == $numeros[0] + $numeros[1] + $numeros[2]) { 
    $acertos++;
}

if ($_POST['pergunta10'] == $numeros[0] + $numeros[1] + $numeros[2] + $numeros[3] + $numeros[4]) {
    $acertos++;
}

echo "Acertos:".$acertos;
?>