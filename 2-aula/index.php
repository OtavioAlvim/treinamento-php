<!-- Esse é um bloco de script PHP -->
<!-- Para o PHP não importa se é maiusculo ou minusculo porem variaveis em PHP faz diferença, sendo ela maiuscula ou minuscula. -->
<!-- O PHP carrega antes do HTML e do JavaScript  -->
<?php
    $js = "<script>alert('Criado com PHP')</script>";//Criar um alerta com o PHP
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá mundo</title>
</head>
<body>
    <h1><?php echo $js;?></h1>
</body>
</html>
