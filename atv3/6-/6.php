<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exerc 6</title>
</head>
<body><h1><center>
    <?php
    $nome = $_POST["nome"];
    $peso = $_POST["peso"];
    $alt = $_POST["alt"];
    $sex = $_POST["sex"];
    $PI = 0;

    if($sex == "Masculino")
    {
        $PI = ($alt*$alt)*23;
    }
    else
    {
        $PI = ($alt*$alt)*22;
    }

    if($PI<$peso)
    {
        echo $nome." você está ".'<font color="FF0000">'." Acima do peso ideal".'</font>'.'<br>'."Peso ideal: ".$PI." seu peso: ".$peso;
    }
    elseif($PI == $peso)
    {
        echo $nome." você está ".'<font color="4169E1">'." Dentro do Peso ideal".'</font>'.'<br>'."Peso ideal: ".$PI." seu peso: ".$peso;
    }
        else
        {
            echo $nome." você está ".'<font color="Yellow">'." Abaixo do peso ideal".'</font>'.'<br>'."Peso ideal: ".$PI." seu peso: ".$peso;
        }
    ?>
    </h1>
    <br>
    <h1><center><a href="6.html">voltar</a></center></h1>
</body>
</html>