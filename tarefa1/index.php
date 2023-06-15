<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tarefa</title>
</head>
<body>
    <div class="container" >
        <div class= "header">
            <h1>Tarefa soma</h1>
        </div>
        <div class="form">
            <form method ="POST" action="" >
                <label for="task_name">Número 1</label></br>
                <input type="text" name="num1" ></br>
                <label for="task_name">Número 2</label></br>
                <input type="text" name="num2"></br>
                <button type="submit">Somar</button></br>
            </form>
        </div>
    </div>
    
</body>
</html>

<?php
    if ($_POST) {
        $num1=$_POST["numero1"];
        $num2=$_POST["numero2"];
        $total= $num1 + $num2;
        if ($total > 100) {
            echo $total ;
        }
        else {
            echo "O total está acima de 100, Tente outro número" ;
        }
    }
   


?>


