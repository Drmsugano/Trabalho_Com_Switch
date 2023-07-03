<?php
function calcularMedia($nome, $v1, $v2, $v3)
{
    $media = ($v1 + $v2 + $v3) / 3;
    if ($media == 0 && $media <= 5.9) {
        $media = "I";
        $media = "<br><div class='alert alert-danger' role='alert'>O aluno " . $nome . " com o conceito de " . $media . " está reprovado</div>";
    }
    if ($media == 6 || $media <= 6.9) {
        $media = "D";
        $media = "<br><div class='alert alert-danger' role='alert'>O aluno " . $nome . " com o conceito de " . $media . " está reprovado</div>";
    }
    if ($media == 7 || $media <= 7.9) {
        $media = "C";
        $media = "<br><div class='alert alert-warning' role='alert'>O aluno " . $nome . " com o conceito de " . $media . " está Aprovado</div>";
    }
    if ($media == 8 || $media <= 8.9) {
        $media = "B";
        $media = "<br><div class='alert alert-info' role='alert'>O aluno " . $nome . " com o conceito de " . $media . " está Aprovado</div>";
    }
    if ($media == 9 || $media <= 10) {
        $media = "A";
        $media = "<br><div class='alert alert-success' role='alert'>O aluno " . $nome . " com o conceito de " . $media . " está Aprovado</div>";
    }
    return $media;
}
if (isset($_POST['media'])) {
    $nome = $_POST["nome"];
    $v1 = $_POST["n1"];
    $v2 = $_POST["n2"];
    $v3 = $_POST["n3"];
    $mensagem = calcularMedia($nome, $v1, $v2, $v3);
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
    <title>Exercicio 5</title>
</head>

<body class="mt-3">
    <div class="container">
    <h1 class="h4 fw-normal">5- Crie um formulário web que receba o nome de um estudante e três notas. Calcule a média aritmética e a classificação do estudante:</h1> 
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
            <div class="mb-3">
                <label for="nome" class="form-label">Nota 3</label>
                <input type="number" min=0 max=10 step=0.1 name="n3" class="form-control" id="n2">
            </div>
            <button type="submit" name="media" class="btn btn-primary">CALCULAR MÉDIA</button>
            <br>
        </form>
        <?php
        if (isset($mensagem)) {
            echo $mensagem;
            echo "<div class= 'mb-3'><p>Em caso de inatividade em <span style= 'color: red;'>15</span> segundos ele voltará para o index</p></div>";
            header("refresh:15; ../index.php");
            echo "<a href= 'exercicio_6.php'><div class = 'checkbox mb-4'><button type='submit' class='btn btn-primary'>Ir para o proximo</button></div></a>";
        }
        ?>
    </div>
</body>

</html>