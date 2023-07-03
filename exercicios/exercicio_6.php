<?php
function calcularFatoracao($num)
{
    $fat = 1;
    $clock = 1;
    $mensagem = null;
    while ($clock <= $num) {
        $fat *= $clock;
        $clock++;
        $mensagem = "<br><div class='alert alert-primary' role='alert'>O fatorial de " . $num . " igual a " . $fat . "</div>";
    }
    return $mensagem;
}
if (isset($_POST['fatorar'])) {
    $num = $_POST["n1"];
    $mensagem = calcularFatoracao($num);
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
    <title>Exercicio 6</title>
</head>

<body class="mt-3">
    <div class="container">
    <h1 class="h4 fw-normal">6- Crie um formulário web que calcule o fatorial de um número recebido do usuário pelo formulário.</h1> 
        <form method="post">
            <div class="mb-3">
                <label for="n1" class="form-label">ENTRE COM O NUMERO</label>
                <input type="text" name="n1" class="form-control" id="n1">
            </div>
            <button type="submit" name="fatorar" class="btn btn-primary">CALCULAR FATORIAL</button>
            <br>
        </form>
        <?php
        if (isset($mensagem)) {
            echo $mensagem;
            echo "<div class= 'mb-3'><p>Em caso de inatividade em <span style= 'color: red;'>15</span> segundos ele voltará para o index</p></div>";
            header("refresh:15; ../index.php");
            echo "<a href= 'exercicio_7.php'><div class = 'checkbox mb-4'><button type='submit' class='btn btn-primary'>Ir para o proximo</button></div></a>";
        }
        ?>
    </div>
</body>

</html>