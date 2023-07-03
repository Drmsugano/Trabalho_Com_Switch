<?php
function gerenciar($num)
{
    $seq = 1;
    $mensagem = $seq;
    while ($seq<$num) {
    $seq++;
    $mensagem = $mensagem.", ".$seq;
    }
    $mensagem= "<br> <div class='alert alert-primary' role='alert'>$mensagem</div>";
    return $mensagem;
}
if (isset($_POST['sequencia'])) {
    $num = $_POST["n1"];
    $mensagem = gerenciar($num);
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 7</title>
</head>

<body class="mt-3">
    <div class="container">
    <h1 class="h4 fw-normal">7- Crie um formulário web que receba um número inteiro e mostre na tela de 1 até o número informado.</h1>    
    <br>
        <form method="post">
            <div class="mb-3">
                <label for="n1" class="form-label">ENTRE COM O NUMERO</label>
                <input type="number" name="n1" class="form-control" id="n1">
            </div>
            <button type="submit" name="sequencia" class="btn btn-primary">Mostrar Sequência</button>
            <br>
        </form>
        <?php
        if (isset($mensagem)) {
            echo $mensagem;
            echo "<div class= 'mb-3'><p>Em caso de inatividade em <span style= 'color: red;'>15</span> segundos ele voltará para o index</p></div>";
            header("refresh:15; ../index.php");
            echo "<a href='../index.php'><div class ='checkbox mb-4'><button type='submit' class='btn btn-success'>Voltar para o Index</button></div></a>";
        }
        ?>
    </div>
</body>

</html>