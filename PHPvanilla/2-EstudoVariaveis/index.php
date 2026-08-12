<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo de Variáveis</title>
</head>
<body>
    <h3>Estudo de Variáveis</h3>
    <?php 
    declare(strinct_types=1); // Blinda o sistema contra misturas acidentais de tipos de dados
    // sintaxe de variaveis em PHP
    // variaveis são representadas pelo simbolo "$" seguido do nome da variavel
    // exemplo
    $nome = "joao"; // Variavel do tipo string
     $idade = 25; // Variável do tipo Number
    $status = true; //Variavel do tipo Boolean
    $altura = 1.75; // Variavel do tipo Number (float)
    $email = null; // Variável do tipo Null
    $idade2 = 0; 
 #$endereco; não é possivel declarar uma variável sem atribuir um valor a ela, não existe Undefined em PHP 

    // Exibir as variáveis na tela 
    echo "Nome: $nome <br>";
    echo "Idade: $idade <br>";
    echo "Status: $status <br>";
    echo "Altura: $altura <br>";
    echo "Email: $email <br>";

    echo "<br> <h3> Constantes <\h3> <\br>";

    // Constantes são representadas pela palavra "const"
    // Exemplos de constantes
    const PI = 3.14; //Constante do tipo number (float)
    const Empresa = "google"; //Constante do tipo string
    define("SITE", "www.google.com"); //Constante do tipo string
    // uma boa pratica é utilizar letras maiusculas para nomear constantes, para diferenciar das variaveis

    //exibir as constantes na tela
    echo "Valor de PI: PI <br>";
    echo "Nome da empresa: EMPRESA <br>";
    echo "Site: SITE <br>";

    // tentando alterar o valor de uma constante isso ira gerar um erro, pois constantes não podem ser alteradas
    // PI = 3.14159; // Isso é um erro
    // redeclarar uma constante também ira gerar um erro
    const SITE = "www.google.com.br"; // Isso é um erro 

     //Regra de Ouro: Sempre coloque a instrução declare(strict_types=1); no início do seu código PHP, 
    //isso blinda o seu sistema contra mistura acidentais de tipos de dados. 
    
    // Utilização de TEXTO ( Concatenção VS Interpolação)
    //exemplo de Concatenação -> juntar duas ou mais string utilizando o operador "." (ponto)
    echo "Olá, " . $nome . "! Seja bem-vindo ao nosso site !<br>";
    
    // Exemplo de Interpolação => Utilização de variáveis dentro de um texto, utilizando aspas duplas
    echo "$nome, tem $idade anos e sua altura é $altura metros. <br>"; //forma mais correta de misturar texto e variáveis
    
    
    ?>



    


    

</body>
</html>