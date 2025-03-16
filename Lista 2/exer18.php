<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Exercicio 18 </h1>
    <form method="post" action="exer18resposta.php">  
                        
                        <div class="mb-3">
                            <label for="valor_inicial" class="form-label"> Insera o valor do produto </label>
                            <input type="number" id="valor_inicial" name="valor_inicial" class="form-control" required="">
                        </div>
                        <div class="mb-3">
                            <label for="juros " class="form-label"> Insera o valor da taxa de juros  </label>
                            <input type="number" id="juros" name="juros" class="form-control" required="">
                        </div>
                        <div class="mb-3">
                            <label for="perd" class="form-label"> Insera o periodo em meses </label>
                            <input type="number" id="perd" name="perd" class="form-control" required="">
                        </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>