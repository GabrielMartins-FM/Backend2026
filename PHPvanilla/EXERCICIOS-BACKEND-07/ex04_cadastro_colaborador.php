<?php

declare(strict_types=1);

function e(string $texto): string
{
    return htmlspecialchars($texto, ENT_QUOTES, 'UTF-8');
}

function sanitizarTexto(string $dado): string
{
    return trim(strip_tags($dado));
}

function validarColaborador(array $dados): array
{
    $erros = [];

    if ($dados['nome'] === '') {
        $erros[] = 'Nome obrigatório.';
    }

    if (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
        $erros[] = 'E-mail inválido.';
    }

    if (filter_var($dados['matricula'], FILTER_VALIDATE_INT) === false) {
        $erros[] = 'Matrícula inválida.';
    }

    if (filter_var($dados['salario'], FILTER_VALIDATE_FLOAT) === false) {
        $erros[] = 'Salário inválido.';
    }

    return $erros;
}

$nome = '';
$email = '';
$matricula = '';
$salario = '';
$erros = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = sanitizarTexto($_POST['nome'] ?? '');
    $email = sanitizarTexto($_POST['email'] ?? '');
    $matricula = sanitizarTexto($_POST['matricula'] ?? '');
    $salario = sanitizarTexto($_POST['salario'] ?? '');

    $dados = [
        'nome' => $nome,
        'email' => $email,
        'matricula' => $matricula,
        'salario' => $salario
    ];

    $erros = validarColaborador($dados);
}
?>

<h2>Cadastro de Colaborador</h2>

<form method="post">

    <input type="text" name="nome" placeholder="Nome">
    <br><br>

    <input type="text" name="email" placeholder="E-mail">
    <br><br>

    <input type="text" name="matricula" placeholder="Matrícula">
    <br><br>

    <input type="text" name="salario" placeholder="Salário">
    <br><br>

    <button type="submit">Cadastrar</button>

</form>

<?php if (count($erros) > 0): ?>

    <h3>Erros:</h3>

    <?php foreach ($erros as $erro): ?>
        <p><?= e($erro) ?></p>
    <?php endforeach; ?>

<?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>

    <h3>Cadastro realizado!</h3>

    <p>Nome: <?= e($nome) ?></p>
    <p>E-mail: <?= e($email) ?></p>
    <p>Matrícula: <?= e($matricula) ?></p>
    <p>Salário: <?= e($salario) ?></p>

<?php endif; ?>