<?php

declare(strict_types=1);

function e(string $texto): string
{
    return htmlspecialchars($texto, ENT_QUOTES, 'UTF-8');
}

$recados = [];

$nome = $_POST['nome'] ?? '';
$mensagem = $_POST['mensagem'] ?? '';
$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (strlen(trim($nome)) < 3) {
        $erro = 'O nome precisa ter pelo menos 3 caracteres.';
    } elseif (strlen(trim($mensagem)) < 5) {
        $erro = 'A mensagem precisa ter pelo menos 5 caracteres.';
    } else {
        $recados[] = [
            'nome' => $nome,
            'mensagem' => $mensagem
        ];
    }
}
?>

<h2>Mural de Recados</h2>

<?php if ($erro !== ''): ?>
    <p><?= e($erro) ?></p>
<?php endif; ?>

<form method="post">
    <input type="text" name="nome" placeholder="Nome">
    <br><br>

    <textarea name="mensagem" placeholder="Mensagem"></textarea>
    <br><br>

    <button type="submit">Enviar</button>
</form>

<hr>

<?php foreach ($recados as $recado): ?>

    <h3><?= e($recado['nome']) ?></h3>

    <p><?= nl2br(e($recado['mensagem'])) ?></p>

<?php endforeach; ?>