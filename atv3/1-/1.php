<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exerc 1</title>
</head>
<body> 
        <?php
        $val =$_POST ['valor'];

        if($val>=100)
        {
         echo '<h1><center>'."O valor é maior ou igual a cem".'</h1>' ;   
        }
        else
        {
        echo '<h1><center>'."O valor é menor que cem".'</h1>' ;
        }
        ?>
        <br>

        <a href="1.html"><h1><center>VOLTAR</center></h1></a>

</body>
</html>