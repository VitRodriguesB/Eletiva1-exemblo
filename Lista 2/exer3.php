<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class = "container mt-5">
<h1>Exercício 3</h1>
    <p>MULTIPLICADOR</p>
    <form method="post" action="exer3resposta.php">
                        
                        <div class="mb-3">
                            <label for="valor1m" class="form-label">Insira o primeiro valor</label>
                            <input type="number" id="valor1m" name="valor1m" class="form-control" required="">
                        </div>
                    
                        <div class="mb-3">
                            <label for="valor2m" class="form-label">Insira o segundo valor</label>
                            <input type="number" id="valor2m" name="valor2m" class="form-control" required="">
                        </div>
                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
</div>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>