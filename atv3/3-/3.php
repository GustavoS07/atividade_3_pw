<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exerc 3</title>
</head>
<body>
    <?php
    $val =$_POST ['num'];
 
            if($val % 2 !=0)
            {
                echo '<font color="FF0000"><h1><center>'."Número IMPAR".'</h1></font>';
            }
            else
            {
                echo '<font color="90ee90"><h1><center>'."Número PAR".'</h1></font>';
            }
    ?>
    <br>
    <h1><center><a href="3.html">voltar</a></center></h1>
</body>
</html>