<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

    <style>
        body{
            text-align: center;
            margin-top: 100px;
            font-family: Arial, Helvetica, sans-serif;
            border: solid   4px;
            border-radius: 50px;
            border-color: black;
            width: 500px; 
            height: 450px; 
            top: 500px;
            margin-left: 450px;
            font-size: large;
            background-color: rgb(225, 226, 228);
        }





        .ParIMPAR {
            color: red;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        .positivoNegativo {
            color: blue;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        .RedondoNaoR {
            color: purple;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        .n{
            color: palevioletred;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        input{
            width: 90px;
            margin-top: 0px;
            border-radius: 7px;
        }
        button{
            border-radius: 5px;
            background-color: lightsteelblue;
        }
      
    </style>

</head>
<body>

<div></div>
    <form method="post">
    <h1>Escolha um numero para verificar</h1>
    <!-- Caixa de pergunta para o usuario e botão -->
    <form method="post">
    <label for="nmr">Digite um número:</label><br>
    <input type="number" id="nmr" name="nmr" required>
    <button type="submit">OK</button><br><br>
</form>
<!-- PHP -->
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numb = $_POST["nmr"];
function ClassificaNmr1($numb) {
    $Re = "O número $numb é ";
// puxa a informação colocada no metodo "POST" no HTML para ser usada no PHP

        // Pega o numero informado e divide por dois, se não sobrar nada vai ser par caso contrario impar.
        if ($numb % 2 == 0) {
            $Re .= "<span class='n'> par</span>,";
        } else {
            $Re .= "<span class='n'> Impar</span>,";
        
    }

    
// mostra se o numero é positivo, negativo ou neutro.

if ($numb > 0) {
    $Re .= " <span class='n '> Positivo</span>,";
} elseif($numb < 0) {
    $Re .= " <span class='n '> Negativo</span>,";
}elseif($numb == 0){
    $Re .= " <span class='n '> Neutro</span>,";
}

// vai mostra se o numero é redondo ou não

    if ($numb % 10 == 0) {
        $Re .= "<span class='n '> Redondo</span></p>";
    } else {
        $Re .= "<span class='n '> Não Redondo</span></p>";
    
    }



return $Re;
}

   }   echo ClassificaNmr1($numb) . ".<br>";
    

//----------------------------------------------------------------------------------------------------------
function ClassificaNmr($nmr) {
    $R = "O número $nmr é ";
 
    // Verifica se é par ou ímpar-------------------------------------------------------------------------
    
    if ($nmr % 2 == 0) {
        $R .= "<span class='ParIMPAR'> par</span>,";
    } elseif($nmr == 0) {
        $R .= "neutro,"; 
    } else{
        $R .= "<span class='ParIMPAR'> Impar</span>,";
    }

    
 
    // Verifica se é positivo, negativo ou zero-----------------------------------------------------------
    if ($nmr > 0) {
        $R .= " <span class='positivoNegativo '> Positivo</span>,";
    } else if ($nmr < 0) {
        $R .= " <span class='positivoNegativo ' > Negativo</span>,";
    } 
 
    
 // verificar redondo ou não--------------------------------------------------------------------------------
    if ($nmr % 10 == 0) {
        $R .= " <span class='RedondoNaoR '> Redondo</span>";
    } else {
        $R .= " <span class='RedondoNaoR '> Não Redondo</span>";
    }

    return $R;
}

    

 
$nmrs = [7, 4, -60, 47];
 
foreach ($nmrs as $nmr) {
    echo ClassificaNmr($nmr) . ".<br>";
    echo "<br>";
}


    ?>

</div>
</body>
</html>