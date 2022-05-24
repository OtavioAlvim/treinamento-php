<?php
    //TIPOS DE DADOS
    // STRING, [palavras]
    // INTEGER, [inteiro de qualquer numero não decimal]
    // FLOAT, [decimal numero decimais]
    // BOOLEAN, [booleano - true e false]
    // ARRAY, [matriz]
    // OBJECT, [objeto]
    // NULL, [nulo]

    //STRING
    $exemplo1 = " <h1>Olá mundo </h1> <br>"; //TODO TEXTO COLOCADO SOBRE ASPAS DUPLAS, OU SIMPLES, É CONSIDERADO UMA STRING
    //echo $exemplo1;

    //INTEGER 
    $exemplo2 = 345; //pode ser anumeros negativos tambem, numeros inteiros, podem ser somados, divididos, ou multiplicados tambem 
    //echo $exemplo2;

    //CASO QUEIRA SABER O TIPO DE DADO ARMAZENADO EM UMA VARIAVEL, PODEMOS USAR O COMANDO ABAIXO:
    //var_dump($exemplo2);
    
    //FLOAT
    $exemplo3 = 23.5;
    //echo $exemplo3;

    //BOOLEAN
    $professor_bonitao = true;//SÓ PODER RETORNAR DOIS TIPOS DE VALORES, VERDADEIRO OU FALSO.

    //ARRAY (matrizes) 
    //PODEMOS ARMAZENAR VARIOS VALORES DE UMA VEZ, SENDO POSSIVEL ACESSA-LOS ATRAVES DE INDICES, OU SEJA , A POSIÇÃO DAQUELE DADO DENTRO DA MATRIZ 
    //EXEMPLO
    $carros = array("Fusca","2021","Chevette");
    //var_dump ($carros);

    //OBJECT (OBJETO)
    
    class carro {
        public $cor;
        public $modelo;
        public function __construct($cor,$modelo){
            $this->cor = $cor;
            $this->modelo = $modelo;
        }
        public function mensagem(){
            return "o carro é $this->cor e o modelo é $this->modelo";
        }
    }
    $carro1 = new carro ("branco","Fusca");
    $carro2 = new carro ("preto","celta");
    $carro3 = new carro ("azul","Corolla");
    echo $carro2->mensagem();

    //NULL (NULO)
    $x = "oi";
    $x = null;
    //var_dump($x);
?>