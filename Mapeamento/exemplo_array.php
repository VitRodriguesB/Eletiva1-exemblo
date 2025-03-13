<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Exemplo array</h1>

    <form action="exemplo_array.php" method="post">
        <?php for ($i = 0; $i < 10; $i++): ?>
            <input type="number" name="valor[]" placeholder="informe o valor <?= $i ?>" />

        <?php endfor; ?>

        <button type="submit">Enviar </button>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            try {
                $valores = $_POST['valor'];
                echo "O primeiro valor é: " . $valores[0];
                echo "<br/>";
                print_r($valores);
                $valores['texto'] = 'dados';
                unset($valores['texto']);
                echo "</br>";
                print_r($valores);
                //pega o valor $c da possição e o $v e o valor local
                foreach ($valores as $c => $v) {
                    echo "<p>Posição: $c - Valor: $v</p>";
                }
                $array = [10,11,12,13];
                $array2 = array("uva","maça","pêra");
                $array3 = [
                    // => significa assosiação 
                    "uva" => 3,
                    "maça" => 4,
                    "pêra"=> 4
                ];

            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
        ?>
    </form>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>