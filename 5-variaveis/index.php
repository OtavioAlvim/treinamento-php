<!-- Variaveis -->
<?php
    $cor = "azul";
    $cor = "vermelho";
    //ele sempre vai pegar o ultimo vamor atribuido a variavel
    //Não pode iniciar uma varial com numeros
    //não pode usar variaveis reservadas pelo PHP
    echo "$cor<br>";

?>
<?php
    $x = 10;
    $y = 5;
// as variaveis x e y são para uso global, porem não sao reconhecidas dentro de uma função, para que a variavel funcione tambem na função, é necessario adicionar a função global dentro da função;
    function teste(){
        global $x;
        echo "O valor de x dentro da função: $x<br>";
    }
    teste();
    echo "O valor de X fora $$x";


?>


