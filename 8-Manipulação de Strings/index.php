<?php
    //MANIPULAÇÃO DE STRINGS

    //STRLEN ->ESSA FUNÇÃO NOS MOSTRA A QUANTIDADE DE CARACTERES PRESENTES EM UMA STRING
    
    //exemplo
    $palavra = "beleza";

    //strlen()
    //echo strlen('oi pessoal');
    //echo strlen($palavra);
    
    //str_word_count() //SERVE PARA CONTAR QUANTAS PALAVRAS HA NA STRING A PARTIR DOS ESPAÇOS EM LINHAS.
    echo str_word_count($palavra);
     
?>