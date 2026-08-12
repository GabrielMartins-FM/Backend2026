<?php 
// 1. blindagem de operações entre variáveis de tipos diferentes
declare(strict_types=1);

// Criar um cálculo de Holerite em PHP

// 2. Declaração da Constantes

const TAXA_INSS = 0.08; //8% => 8/100
const DESCONTO_VT = 150.00;

// 3. Declarar as variaveis 
//Dados do funcionario
$nomeFuncionario = "João Silva";
$salarioBase = 3200.00;
$horasExtras = 10; //10 horas extras no mês

//declaração de variaveis usando o lowerCamelCase
//regra -> primeira palavra toda minusculo e depois as demais palavras usa-se maiusculas na primeira letra
//Exemplo: $hojeEstaUmDiaBonito

// 4. Calculos de salarios
//Valor da hora extra (1.6 da hora normal)
$valorHoraExtra = ($salarioBase/220) * 1.6;
// -> Crie uma variavel $totalHorasExtras
$totalHoraExtra = $valorHoraExtra * $horasExtras;
// -> Crie uma variavel $salariobruto
$salarioBruto = $salarioBase + $totalHoraExtra;
// -> Criar a variável $descontoInss
$descontoInss = $salarioBruto * TAXA_INSS;
// -> Criar a variavel $salarioLiquido
$salarioLiquido = ($salarioBruto - $descontoInss) - DESCONTO_VT ;

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holerite <?php echo $nomeFuncionario ?></title>
    <!-- folha de estilização CSS -->
     <link rel="stylesheet" href="style.CSS">
</head>
<body>
    <h2>Demonstração de pagamento</h2>
    <!-- Saida de dados misturando HTML e PHP em uma Tabela -->
     <table>
        <tr>
            <th>Colaborador(a)</th>
            <td><?php echo $nomeFuncionario; ?></td>
        </tr>
        <tr>
            <th>Salario Base</th>
            <td>R$ <?php echo number_format($salarioBase, 2, ",", "."); ?></td>
            <!-- usando uma função chamada number_format (formata a saida de numeros) -->
        </tr>
                <!-- fazer as demais linhas da tabela utilizando as variaveis criadas  -->
                 <tr>
          <th>Valor Hora Extra </th>
          <td> <?php echo number_format($valorHoraExtra, 2, ",", "."); ?></td>
       </tr>
        <tr>
            <th>Hora Extra</th>
            <td> <?php echo number_format($horasExtras, 2, ",", "."); ?></td>
         </tr>
         <tr>
            <th>Salário Bruto </th>
            <td> <?php echo number_format($salarioBruto, 2, ",", "."); ?></td>
         </tr>
          <tr>
            <th>Desconto INSS </th>
            <td> <?php echo number_format($descontoInss, 2, ",", "."); ?></td>
         </tr>
          <tr>
            <th>Total Salário Liquido </th>
            <td> <?php echo number_format($salarioLiquido, 2, ",", "."); ?></td>
         </tr>

    </table>
    





</body>
</html>