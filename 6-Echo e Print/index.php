<?php
    //TIPOS DE SAIDA
    //PARA QUE UM ECHO LEIA A VRIAVEL, É NECESSARIO QUE ESTEJA DENTRO DE ASPAS DUPLAS O ECHO
    //EXEMPLO:
    $nome ="Dimitri";
    $sobrenome = "Teixeira";
    echo "O nome de usuário é $nome, e seu sobrenome é $sobrenome <br>";
    //CASO SEJA USADO ASPAS SIMPLES NO ECHO, ELE VAI CONCATENAR AS VARIAVEIS
    //O PONTO NO PHP SERVE COMO CONCATENAÇÃO DE VALORES ATRIBUIDOS A UMA VARIAVEL
    //EXEMPLO
    echo 'O nome de usuário é ' .$nome.' '.$sobrenome;
    // O PRINT É A MESMA COISA QUE O ECHO, POREM NA PRATICA, ELE É BEM MAIS LENTO 
    //SINTAXE DO PRINT
    //print $nome;
?>
