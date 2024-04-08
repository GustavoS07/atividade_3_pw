<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exerc 5</title>
</head>
<body>
    <?php
    $nome = $_POST["nome"];
    $no1 = $_POST["not1"];
    $no2 = $_POST["not2"];
    $med = 0;

    $med = ($no1+$no2)/2; 

    if($med>=8)
    {
        echo '<center><h1>'."O aluno ".$nome." está aprovado com a média ".$med.", PARABÉNS!!!";
    }
    elseif($med<=3)
    {
        echo '<center><h1>'."O aluno ".$nome." está retido com a média ".$med.", que decepção :(";
    }
    else
    {
        echo '<center><h1>'."O aluno ".$nome." ficou com a média ".$med.", vai fazer o exame de recuperação.";
    }
    ?>
    <br>
    <h1><center><a href="5.html">voltar</a></center></h1>
</body>
</html>