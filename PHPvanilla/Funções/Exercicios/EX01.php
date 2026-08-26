Exercicio 1
<?php

declare(strict_types=1);
function calcularIMC(float $peso, float $altura): float
{
    return $peso / (altura * altura);
}
$imc1 = calcularIMC(60, 1.65);
$imc2 = calcularIMC(75, 1.70);
$imc3 = calcularIMC(90, 1.80);

echo "IMC 1: " . number_format($imc1, 2) . "<br>";
echo "IMC 2: " . number_format($imc2, 2) . "<br>";
echo "IMC 3: " . number_format($imc3, 2) . "<br>";
?>

Exercico 2
<?php

declare(strict_types=1);

function classificarIMC(float $imc): string
{
    if ($imc < 18.5) {
        return "Abaixo do peso";
    } elseif ($imc <= 24.9) {
        return "Peso normal";
    } elseif ($imc <= 29.9) {
        return "Sobrepeso";
    } else {
        return "Obesidade";
    }
}

echo classificarIMC(17.5) . "<br>";
echo classificarIMC(22.0) . "<br>";
echo classificarIMC(27.0) . "<br>";
echo classificarIMC(32.0) . "<br>";
?>

Exercicio 3
<?php

declare(strict_types=1);

function senhaForte(string $senha): bool
{
    if (strlen($senha) > 8) {
        return true;
    }

    return false;
}

$senha1 = "12345678";
$senha2 = "123456789";

if (senhaForte($senha1)) {
    echo "A senha 1 é forte.<br>";
} else {
    echo "A senha 1 é fraca.<br>";
}

if (senhaForte($senha2)) {
    echo "A senha 2 é forte.<br>";
} else {
    echo "A senha 2 é fraca.<br>";
}
?>

Exercicio 4
<?php

declare(strict_types=1);

function formatarNome(string $nome): string
{
    $nome = trim($nome);
    $nome = strtolower($nome);
    $nome = ucfirst($nome);

    return $nome;
}

echo formatarNome("   JOÃO   ") . "<br>";
echo formatarNome("mArIa") . "<br>";
echo formatarNome("   PEDRO") . "<br>";
echo formatarNome("ana   ") . "<br>";
?>

Exercicio 5
<?php

declare(strict_types=1);

function calcularCarrinho(array $produtos): float
{
    $total = 0;

    foreach ($produtos as $produto) {
        $total = $total + ($produto["preco"] * $produto["quantidade"]);
    }

    return $total;
}

$produtos = [
    [
        "nome" => "Caderno",
        "preco" => 25.00,
        "quantidade" => 2
    ],
    [
        "nome" => "Caneta",
        "preco" => 3.50,
        "quantidade" => 4
    ]
];

$total = calcularCarrinho($produtos);

echo "Total da compra: R$ " . number_format($total, 2, ',', '.');
?>

Exercicio 6
<?php

declare(strict_types=1);

function aplicarDesconto(float &$preco, float $porcentagem): void
{
    $desconto = $preco * ($porcentagem / 100);

    $preco = $preco - $desconto;
}

$preco = 200.00;

echo "Preço antes do desconto: R$ " . number_format($preco, 2, ',', '.') . "<br>";

aplicarDesconto($preco, 15);

echo "Preço depois do desconto: R$ " . number_format($preco, 2, ',', '.');
?>

Exercicio 7
<?php

declare(strict_types=1);

function calcularMedia(array $notas): float
{
    $soma = 0;

    foreach ($notas as $nota) {
        $soma = $soma + $nota;
    }

    return $soma / count($notas);
}

function verificarAprovacao(float $media): string
{
    if ($media >= 7) {
        return "Aprovado";
    } else {
        return "Reprovado";
    }
}

$notas = [8.0, 7.5, 6.0, 9.0];

$media = calcularMedia($notas);

echo "Média: " . number_format($media, 2, ',', '.') . "<br>";
echo "Resultado: " . verificarAprovacao($media) . "<br>";
echo "Maior nota: " . max($notas) . "<br>";
echo "Menor nota: " . min($notas);
?>

Exercicio 8
<?php

declare(strict_types=1);

function limparCPF(string $cpf): string
{
    $cpf = str_replace(".", "", $cpf);
    $cpf = str_replace("-", "", $cpf);

    return $cpf;
}

function cpfValido(string $cpf): bool
{
    if (strlen($cpf) === 11 && is_numeric($cpf)) {
        return true;
    }

    return false;
}

$cpf1 = limparCPF("123.456.789-00");
$cpf2 = limparCPF("123.456-00");

echo "CPF 1: " . $cpf1 . "<br>";

if (cpfValido($cpf1)) {
    echo "CPF 1 é válido.<br>";
} else {
    echo "CPF 1 é inválido.<br>";
}

echo "CPF 2: " . $cpf2 . "<br>";

if (cpfValido($cpf2)) {
    echo "CPF 2 é válido.";
} else {
    echo "CPF 2 é inválido.";
}
?>

Exercicio 9
<?php

declare(strict_types=1);

function buscarCliente(array $clientes, string $nome): ?array
{
    foreach ($clientes as $cliente) {
        if ($cliente["nome"] === $nome) {
            return $cliente;
        }
    }

    return null;
}

$clientes = [
    [
        "nome" => "João",
        "email" => "joao@email.com"
    ],
    [
        "nome" => "Maria",
        "email" => "maria@email.com"
    ],
    [
        "nome" => "Pedro",
        "email" => "pedro@email.com"
    ]
];

$cliente1 = buscarCliente($clientes, "Maria");

if ($cliente1 !== null) {
    echo "Cliente encontrado: " . $cliente1["nome"] . "<br>";
    echo "E-mail: " . $cliente1["email"] . "<br>";
} else {
    echo "Cliente não encontrado.<br>";
}

$cliente2 = buscarCliente($clientes, "Carlos");

if ($cliente2 !== null) {
    echo "Cliente encontrado: " . $cliente2["nome"] . "<br>";
    echo "E-mail: " . $cliente2["email"];
} else {
    echo "Cliente não encontrado.";
}
?>

Exercicio 10
<?php

declare(strict_types=1);

function retirarEstoque(array &$produto, int $quantidade): bool
{
    if ($quantidade <= 0) {
        return false;
    }

    if ($quantidade > $produto["estoque"]) {
        return false;
    }

    $produto["estoque"] = $produto["estoque"] - $quantidade;

    return true;
}

$produto = [
    "nome" => "Caderno",
    "estoque" => 10
];

// Retirada permitida
if (retirarEstoque($produto, 3)) {
    echo "Retirada realizada com sucesso.<br>";
    echo "Estoque atual: " . $produto["estoque"] . "<br>";
} else {
    echo "Não foi possível realizar a retirada.<br>";
}

// Retirada recusada
if (retirarEstoque($produto, 20)) {
    echo "Retirada realizada com sucesso.<br>";
    echo "Estoque atual: " . $produto["estoque"];
} else {
    echo "Retirada recusada: estoque insuficiente.<br>";
    echo "Estoque atual: " . $produto["estoque"];
}
?>