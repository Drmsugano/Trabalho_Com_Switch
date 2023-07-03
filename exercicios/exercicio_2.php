<?php
function calcularMedia($v1, $v2, $v3, $v4)
{
    $media = ($v1 + $v2 + $v3 + $v4) / 4;
    return $media;
}
if (isset($_POST['media'])) {
    $nome = $_POST["nome"];
    $v1 = $_POST["n1"];
    $v2 = $_POST["n2"];
    $v3 = $_POST["n3"];
    $v4 = $_POST["n4"];
    $media = calcularMedia($v1, $v2, $v3, $v4);
    $mensagem = "<br> <div class='alert alert-primary' role='alert'>A média do aluno " . $nome . " é " . $media."</div>";
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
    <title>Exercicio 2</title>
</head>

<body class="mt-3">
    <div class="container">
    <h1 class="h4 fw-normal">2- Crie um formulário web que receba 4 notas, calcule a média dentre as notas e retorne o valor da média.</h1>    
        <form method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome </label>
                <input type="text" name="nome" class="form-control" id="nome">
            </div>
            <div class="mb-3">
                <label for="n1" class="form-label">Nota 1</label>
                <input type="number" step=0.1 min=0 max=10 name="n1" class="form-control" id="n1">
            </div>
            <div class="mb-3">
                <label for="nome" class="form-label">Nota 2</label>
                <input type="number" step=0.1 min=0 max=10 name="n2" class="form-control" id="n2">
            </div>
            <div class="mb-3">
                <label for="n3" class="form-label">Nota 3</label>
                <input type="number" step=0.1 min=0 max=10 name="n3" class="form-control" id="n3">
            </div>
            <div class="mb-3">
                <label for="n4" class="form-label">Nota 4 </label>
                <input type="number"  step=0.1 min=0 max=10 name="n4" class="form-control" id="n4">
            </div>
            <button type="submit" name="media" class="btn btn-primary">CALCULAR MÉDIA</button>
            <br>
        </form>
        <?php
        if (isset($mensagem)) {
            echo $mensagem;
            echo "<div class= 'mb-3'><p>Em caso de inatividade em <span style= 'color: red;'>15</span> segundos ele voltará para o index</p></div>";
            header("refresh:15; ../index.php");
            echo "<a href= 'exercicio_3.php'><div class = 'checkbox mb-4'><button type='submit' class='btn btn-primary'>Ir para o proximo</button></div></a>";
        }
        ?>
    </div>
</body>

</html>