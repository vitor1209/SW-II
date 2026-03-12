<?php
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $mes = $_POST['mes'];

    $isPassouMes = date('m') <= $mes;
    $nascimento = $isPassouMes ? date('Y') - $idade - 1: date('Y') - $idade;
    $isMaior = $idade >= 18;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processar</title>
</head>
<body>

    <p>Nome: <?php echo $nome ?></p>
    <p>Idade: <?php echo $idade ?></p>
    <p>Email: <?php echo $email ?></p>  
    <p>Nascimento: <?php echo $nascimento ?></p>    

    <?php
        if ($isMaior) {
            echo "<p style='color: red;'> MAIOR DE IDADE</p>";
        } else {
            echo "<p style='color: blue;'> MENOR DE IDADE</p>";
        }
    ?>

    <h1>Clientes</h1>
    <ul>
        <?php
            for ($i=1; $i <= 3 ; $i++) { 
                echo "<li>Cliente $i</li>";
            }
        ?>
    </ul>
  
</body>
</html>