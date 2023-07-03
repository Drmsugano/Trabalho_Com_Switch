<?php
if (isset($_POST['confirmar'])) {
    $opcoes = $_POST['opcao'];
    switch ($opcoes) {
        case 'exercicio_1':
            header('location: exercicios/exercicio_1.php');
            break;
        case 'exercicio_2':
            header('location: exercicios/exercicio_2.php');
            break;
        case 'exercicio_3':
            header('location: exercicios/exercicio_3.php');
            break;
        case 'exercicio_4':
            header('location: exercicios/exercicio_4.php');
            break;
        case 'exercicio_5':
            header('location: exercicios/exercicio_5.php');
            break;
        case 'exercicio_6':
            header('location: exercicios/exercicio_6.php');
            break;
        case 'exercicio_7':
            header('location: exercicios/exercicio_7.php');
            break;
        default:
            include 'index.php';
            break;
    }
}
?>