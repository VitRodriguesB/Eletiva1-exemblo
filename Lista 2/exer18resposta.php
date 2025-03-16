<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Exercicio 18</h1>
    
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        try{
            $valor_inicial = $_POST['valor_inicial'];
            $juros = $_POST['juros'];
            $perd = $_POST['perd'];
            #$investimento_acumulado = $valor_inicial;
            #$juros_composto_total=0;
            #$juros_compostos=0; 
            #for ($i =   0; $i < $perd; $i++){
                #$juros_compostos += ($investimento_acumulado * $juros)/100;
                #$juros_composto_total += $juros_compostos;
                #$investimento_acumulado += $juros_compostos + $investimento_acumulado;
            #}   
            $resultado = ($valor_inicial*(1+$juros)^$perd);
            echo"O valor inicial:".number_format( $valor_inicial,2, ",",".");  
            echo"<br>";
            echo"\tTotal a pagar: ". number_format($resultado,2, ",",".");

            
        }catch(Exception $e){
            echo $e->getMessage();
        }
        
        }
        

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>