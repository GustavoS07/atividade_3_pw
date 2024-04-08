<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exerc 7</title>
</head>
<body>
    <?php
    $cod =$_POST ['cod'];

    switch($cod)
    {
        case 1:
            echo '<h1> <center>'."Secretária".'</h1>';
            break;
        
        case 2:
            echo '<h1> <center>'."Gerente".'</h1>';
            break;
                    
        case 3:
            echo '<h1> <center>'."Operario".'</h1>';
            break;
                    
        case 4:
            echo '<h1> <center>'."Analista".'</h1>';
            break;
                    
        case 5:
            echo '<h1> <center>'."Faxineiro".'</h1>';
            break;

        default: 
         echo '<h1> <center>'."CÓDIGO INVALIDO".'</h1>';
    }
    ?>
    <h1><center><a href="7.html">voltar</a></center></h1>
</body>
</html>