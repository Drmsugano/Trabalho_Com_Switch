<?php
function calculo($raio, $altura)
{
    return 3.14159 * pow($raio, $raio) * $altura;
}
if (isset($_POST['calcular'])) {
    $raio = str_replace(",", ".",$_POST['raio']);
    $altura = str_replace(",", ".",$_POST['altura']);
    $res = calculo($raio, $altura);
    $mensagem = "O resultado do volume é " . $res;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 3</title>
    </head>
</head>

<body>

    <body>
        <div class="container">
            <form method="post">
            <h1 class="h4 fw-normal">3- Crie um formulário web para receber do usuário o raio e a altura de uma lata de óleo e calcule o seu volume utilizando a fórmula:
V = 3.14159 * R²* h</h1>    
                <div class="mb-3">
                    <label for="n1" class="form-label">Raio</label>
                    <input type="text" name="raio" class="form-control" id="n1">
                </div>
                <div class="mb-3">
                    <label for="n2" class="form-label">Altura</label>
                    <input type="text" name="altura" class="form-control" id="n2">
                </div>
                <button type="submit" name="calcular" class="btn btn-primary">CALCULAR</button>
            </form>
            <?php
            if (isset($_POST['calcular'])) {
                echo "<br>
        <div class='alert alert-primary' role='alert'>
          $mensagem
        </div>";
                echo "<div class= 'mb-3'><p>Em caso de inatividade em <span style= 'color:red;'>15</span> segundos ele voltará para o index</p></div>";
                header("refresh:15; ../index.php");
                echo "<a href= 'exercicio_4.php'><div class = 'checkbox mb-4'><button type='submit' class='btn btn-primary'>Ir para o proximo</button></div></a>";
            }
            ?>
        </div>
    </body>

</html>
</body>

</html>