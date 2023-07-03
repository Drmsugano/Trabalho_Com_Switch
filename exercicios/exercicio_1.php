<?php
function somar ($n1,$n2){
    return $n1+$n2;
}
if (isset($_POST['calcular'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $res = somar($n1, $n2);
    $mensagem = "O resultado da soma é " . $res;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>

<body class="mt-3">
    <div class="container">
    <h1 class="h4 fw-normal">1- Crie um formulário web que receba 2 valores e mostre a soma desses valores.</h1>    
        <form method="post">
            <div class="mb-3">
                <label for="n1" class="form-label">Numero 1</label>
                <input type="text" name="n1" class="form-control" id="n1">
            </div>
            <div class="mb-3">
                <label for="n2" class="form-label">Numero 2</label>
                <input type="text" name="n2" class="form-control" id="n2">
            </div>
            <button type="submit" name="calcular" class="btn btn-primary">CALCULAR</button>
        </form>
        <?php
        if (isset($_POST['calcular'])) {
            echo "<br>
        <div class='alert alert-primary' role='alert'>
          $mensagem
        </div>";
            echo "<div class= 'mb-3'><p>Em caso de inatividade em <span id = 'contador' style= 'color:red;'>15</span> segundos ele voltará para o index</p></div>";
            header("refresh:15; ../index.php");
            echo "<a href= 'exercicio_2.php'><div class = 'checkbox mb-4'><button type='submit' class='btn btn-primary'>Ir para o proximo</button></div></a>";
        }
        ?>
    </div>
</body>

</html>
</body>

</html>