<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exerc 8</title>
</head>
<body>
    <?php
    $n1 =$_POST ['no1'];
    $n2 =$_POST ['no2'];
    $result;
    $cod =$_POST ['cod'];
    switch($cod)
    {
        case 1:
            $result=$n1+$n2;
            echo '<h1> <center>'.$n1." + ".$n2." = ".$result.'</h1>';
            break;
        
        case 2:
            $result=$n1-$n2;
            echo '<h1> <center>'.$n1." - ".$n2." = ".$result.'</h1>'; 
            break;
        case 3:
            $result=$n1*$n2;
            echo '<h1> <center>'.$n1." X ".$n2." = ".$result.'</h1>';
            break;
                    
        case 4:
            $result=$n1/$n2;
            echo '<h1> <center>'.$n1." / ".$n2." = ".$result.'</h1>';
            break;
            
        default: 
         echo '<h1> <center>'."CÓDIGO INVALIDO".'</h1>';
    }
    ?>
    <h1><center><a href="8.html">voltar</a></center></h1>
</body>
</html>