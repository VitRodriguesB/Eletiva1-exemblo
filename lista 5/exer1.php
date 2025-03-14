<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Execício 1</title>
</head>
<body>
    <form action="exer1.php" method="POST">
        <?php for($i=0;$i<5;$i++): ?>
            <input type="text" nome="nome[]" placeholder="Nome"/>
            <input type="number" nome="tel[]" placeholder="Telefone"/>
            <br/>
        <?php endfor; ?>
            
        <button type="subit">Enviar</button>

    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD']== "POST"){
            try{
                $;

            }catch (Exception $e){
                echo $e->getMessage();
            }

            
        } 
    ?>
</body>
</html>