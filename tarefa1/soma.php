<?php
    if (isset($_POST['num1']) && isset($_POST['num2'])) {
        $num1=$_POST["num1"];
        $num2=$_POST["num2"];
        $total= $num1 + $num2;
        if ($total < 100) {
            echo "O valor total é:  $total " ;
        }
        else {
           
            session_start();
            $_SESSION["somaerrada"] = "Esse valor está muito alto, tente outros números!";
            header("location: error.php");   
    
        }
    }
   


?>