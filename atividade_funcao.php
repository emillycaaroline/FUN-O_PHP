<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função PHP</title>

    <style>
        body{
            text-align: center;
            margin-top: 200px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            border: solid   1px;
            border-radius: 5px;
            border-color: black;
            width: 450px; 
            height: 200px; 
            top: 500px;
            margin-left: 500px;
            font-size: large;
        }



        .ParIMPAR {
            color: red;
        }

        .positivoNegativo {
            color: blue;
        }

        .RedondoNaoR {
            color: purple;
        }

        
      
    </style>

</head>
<body>
    <?php


function ClassificaNmr($nmr) {
    $R = "O número $nmr é ";
 
    // Verifica se é par ou ímpar-------------------------------------------------------------------------
    
    if ($nmr % 2 == 0) {
        $R .= "<span class='ParIMPAR'>par</span>,";
    } elseif($nmr == 0) {
        $R .= "neutro,"; 
    } else{
        $R .= "<span class='ParIMPAR'>Impar</span>,";
    }

    
 
    // Verifica se é positivo, negativo ou zero-----------------------------------------------------------
    if ($nmr > 0) {
        $R .= " <span class='positivoNegativo '>Positivo</span>,";
    } else if ($nmr < 0) {
        $R .= " <span class='positivoNegativo '>Negativo</span>,";
    } 
 
    
 // verificar redondo ou não--------------------------------------------------------------------------------
    if ($nmr % 10 == 0) {
        $R .= " <span class='RedondoNaoR '>Redondo</span>";
    } else {
        $R .= " <span class='RedondoNaoR '>Não Redondo</span>";
    }

    return $R;
}

    

 
$nmrs = [7, 4, -60, 47, 300];
 
foreach ($nmrs as $nmr) {
    echo ClassificaNmr($nmr) . ".<br>";
    echo "<br>";
}


    ?>
</body>
</html>