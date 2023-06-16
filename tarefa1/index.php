<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tarefa</title>
    <link rel="stylesheet" href="style.c.ss">
</head>
<body>
    <div class="container" >
        <div class= "header">
            <h1>Tarefa soma</h1>
        </div>
        <div class="form">
            <form method ="POST" action="soma.php" >
                <label for="task_name">Número 1</label></br>
                <input type="text" name="num1" ></br>
                <label for="task_name">Número 2</label></br>
                <input type="text" name="num2"></br>
                <button type="submit">Somar</button></br>
            </form>
        </div>
    </div>
<?php

if ( isset($_SESSION['']) ) {
    $_SESSION['message'] ;
    

}
?>
</body>
</html>




