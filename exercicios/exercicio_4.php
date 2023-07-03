<?php
function calcularMedia($nome, $v1, $v2)
{
    $media = ($v1 + $v2) / 2;
    if ($media < 7.0) {
        $mensagem = "<br><div class='alert alert-danger' role='alert'>O aluno " . $nome . " com o conceito de " . $media . " está reprovado</div>";
    } else {
        $mensagem = "<br><div class='alert alert-success' role='alert'>O aluno " . $nome . " com o conceito de " . $media . " está Aprovado</div>";
    }
    return $mensagem;
}

if (isset($_POST['media'])) {
    $nome = $_POST["nome"];
    $v1 =  $_POST["n1"];
    $v2 = $_POST["n2"];
    $mensagem = calcularMedia($nome, $v1, $v2);
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
    <title>Exercicio 4</title>
</head>

<body class="mt-3">
    <div class="container">
    <h1 class="h4 fw-normal"> 4- Crie um formulário web que receba 2 notas, calcule a média dentre as notas e mostre se o aluno está aprovado ou reprovado. Considere a aprovação a nota maior ou igual a 7.</h1>    
        <form method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome </label>
                <input type="text" name="nome" class="form-control" id="nome">
            </div>
            <div class="mb-3">
                <label for="n1" class="form-label">Nota 1</label>
                <input type="number" min=0 max=10 step=0.1 name="n1" class="form-control" id="n1">
            </div>
            <div class="mb-3">
                <label for="nome" class="form-label">Nota 2</label>
                <input type="number" min=0 max=10 step=0.1 name="n2" class="form-control" id="n2">
            </div>
            <button type="submit" name="media" class="btn btn-primary">CALCULAR MÉDIA</button>
            <br>
        </form>
        <?php
        if (isset($mensagem)) {
            echo $mensagem;
            echo "<div class= 'mb-3'><p>Em caso de inatividade em <span style= 'color: red;'>15</span> segundos ele voltará para o index</p></div>";
            header("refresh:15; ../index.php");
            echo "<a href= 'exercicio_5.php'><div class = 'checkbox mb-4'><button type='submit' class='btn btn-primary'>Ir para o proximo</button></div></a>";
        }
        ?>
    </div>
</body>

</html>