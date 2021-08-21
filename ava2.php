<!DOCTYPE html>
<html>
    <head>
        <title>Números primos</title>
    </head>
<body>
    <form action="ava2.php?envio=true" method="post">
        <p>Verificar número: <input type="number" name="numero"></p>
        <p><input type="submit" value="Verificar"></p>
    </form> 
<?php
    
    
    
    function testarPrimo($numero){
        $c = 0;
        for ($i = 2; $i < $numero; $i++){ 
            if ($numero % $i == 0){
                $c ++;                
            }
        }
        if($c >= 2){
            $numero -= 1;
            testarPrimo($numero);
        }else{
            echo $numero;
        }
        
        
    }
    
    if(isset($_REQUEST['envio'])){
        $numero = $_POST['numero'];        
        $numero_testar = $numero - 1;
        
        $verPrimo = testarPrimo($numero_testar);
        
        
        
    }
    
  
?>
    </body>
</html>