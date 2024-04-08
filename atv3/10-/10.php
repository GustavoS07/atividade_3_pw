<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exerc 10</title>
</head>
<body><h1><center>
    <?php 
    $i;
    $r = 0;
    for($i=0;$i<=10;$i++)
    {
        if($i % 2 ==0)
        {
            $r += $i;
            echo "Número par: ".$i.'<br>';
        }
       
    }
    echo '<br>'."SOMA :".$r.'<br>';
    ?>
    <a href="10.html">voltar</a>
</body>
</html>