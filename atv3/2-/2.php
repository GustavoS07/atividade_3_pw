<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exerc 2</title>
</head>
<body> 
        <?php
        $val =$_POST ['num'];

        if($val>=0)
        {
         echo '<font color="007FFF"><h1><center>'."Número positivo".'</h1></font>';
        }
        else
        {
        echo '<font color="FF0000 "><h1><center>'."Número negativo".'</h1></font>' ;
        }
        ?>
        <br>
        <a href="2.html"><h1><center>VOLTAR</center></h1></a>
</body>
</html>