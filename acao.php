<!DOCTYPE html>
<head>
    <title>Perguntas</title>
</head>
<body>
    <form action="acertos.php" method="post">
        <input type="hidden" name="numero1" value="<?php echo $_POST['numero1']; ?>">
        <input type="hidden" name="numero2" value="<?php echo $_POST['numero2']; ?>">
        <input type="hidden" name="numero3" value="<?php echo $_POST['numero3']; ?>">
        <input type="hidden" name="numero4" value="<?php echo $_POST['numero4']; ?>">
        <input type="hidden" name="numero5" value="<?php echo $_POST['numero5']; ?>">
        Qual foi o terceiro numero que voce colocou?
        <input type="text" name="pergunta1">
        <br>
        Qual foi o quarto numero que voce colocou?
        <input type="text" name="pergunta2">
        <br>
        Qual foi o quinto numero que voce colocou?
        <input type="text" name="pergunta3">
        <br>
        Qual foi o segundo numero que voce colocou?
        <input type="text" name="pergunta4">
        <br>
        Qual foi o primeiro numero que voce colocou?
        <input type="text" name="pergunta5">
        <br>
        Qual é a soma do terceiro e quarto numero?
        <input type="text" name="pergunta6">
        <br>
        Qual é a subtração do terceiro e quinto numero?
        <input type="text" name="pergunta7">
        <br>
        Qual é a multiplicacao do primeiro e segundo numero?
        <input type="text" name="pergunta8">
        <br>
        Qual é a soma dos tres primeiros numeros?
        <input type="text" name="pergunta9">
        <br>
        Qual é a soma de todos os numeros que voce colocou?
        <input type="text" name="pergunta10">
        <br>
        <input type="submit" value="Descobrir quantos eu acertei">
    </form>
</body>
</html>