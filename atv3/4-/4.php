<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exerc 4</title>
</head>
<body>
    <?php
    $user =$_POST ['user'];
    $senha =$_POST ['senha'];
 
            if($user == "ETE" && $senha == "ETE")
            {
                echo '<font color="90ee90"><h1><center>'."BEM VINDO AO SISTEMA!!!!".'</h1></font>';  
            }
            else
            {
                echo '<font color="FF0000"><h1><center>'."Usuario ou senha invalidos!!! tente novamente!!!".'</h1></font>';
            }
    ?>
    <br>
    <h1><center><a href="4.html">voltar</a></center></h1>
</body>
</html>