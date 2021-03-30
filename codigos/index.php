<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.11 - Interação com URLs");

/*
 * [ argumentos ] ?[&[&][&]]
 */
fullStackPHPClassSession("argumentos", __LINE__);


/*
 * Olá, um primeiro programa mostrando criação de variaveis, operadores, estruturas de controle
 * array e demais comandos de saída.
 */

$cadastro1 = [
    "Nome" => "Pedro",
    "CPF"=>12345678911,
    "Telefone"=>1733333333,
    "email"=>"email@email.com.br",

];

$pedidos01 = [
    "Notebook Acer"=>3200,
    "Kit teclado"=>250,
];

$cadastro1["Meus Pedidos"] = $pedidos01;

$manager["Cadastros"] = $cadastro1;

var_dump($cadastro1);

$arrToString = implode(",",$cadastro1["Meus Pedidos"]);

echo "<h1>Olá {$cadastro1["Nome"]}, veja abaixo seus pedidos</h1>";
var_dump([
    array_keys($cadastro1["Meus Pedidos"]),
]);


$conta = $cadastro1["Meus Pedidos"]["Notebook Acer"] + $cadastro1["Meus Pedidos"]["Kit teclado"];

echo "<h2>O total do seu pedido é RS {$conta} reais</h2>";

$status = "não paga";

if($status == "paga"){
    echo "<p>O status da conta é {$status}, logo mais daremos mais opções</p>";
}else{
    echo "<p>Puts, o status da conta é {$status}, ou seja, a conta ainda não foi paga, por gentileza verifique\n 
junto ao seu banco se foi aprovado. Caso ja tenha sido aprovado mande um email para contato@contato.com</p>";
}

