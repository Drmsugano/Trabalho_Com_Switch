<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho 1 Bimestre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<body class="d-flex align-items-center py-4 bg-body-tertiary">
  <div class="container">
  <h1 class="h3 mb-3 fw-normal">Qual é o Exercicio que deseja executar?</h1>
  <div class ="mb-3">
<form method = "post" action = "escolhas.php">
  <select class="form-select form-select-sm" name="opcao" aria-label=".form-select-sm example">
    <option selected>Escolha o Exercicio</option>
    <option value="exercicio_1">Exercicio 1</option>
    <option value="exercicio_2">Exercicio 2</option>
    <option value="exercicio_3">Exercicio 3</option>
    <option value="exercicio_4">Exercicio 4</option>
    <option value="exercicio_5">Exercicio 5</option>
    <option value="exercicio_6">Exercicio 6</option>
    <option value="exercicio_7">Exercicio 7</option>
    </select>
    <br>
    <button type="submit" name = "confirmar" class="btn btn-primary">Confirmar</button>
</form>
</div>
</body>
</html>