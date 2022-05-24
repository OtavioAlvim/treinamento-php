<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula-1</title>
</head>
<body>
<!-- esse bloco em php com a variavel ativado, se estiver igual a sim, ele vai mostrar que esta ativado,caso esteja igual a não, ele vai mostrar que nao esta ativado -->
    <?php $ativado ="sim";?>
    <?php if($ativado == "sim"){?>
        <h1>Esta ativado sim</h1>
    <?php } else{ ?>
        <h1>Não esta ativo</h1>
        <?php } ?>    
</body>
</html>
