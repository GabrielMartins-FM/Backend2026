<?php

declare(strict_types=1);

function e(string $texto): string
{
    return htmlspecialchars($texto, ENT_QUOTES, 'UTF-8');
}

$nome = $_POST['nome'] ?? '';
$url = $_POST['url'] ?? '';
$erro = '';
$linkValido = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!filter_var($url, FILTER_VALIDATE_URL)) {
        $erro = 'Digite uma URL válida.';
    } elseif (
        !str_starts_with($url, 'http://') &&
        !str_starts_with($url, 'https://')
    ) {
        $erro = 'A URL precisa começar com http:// ou https://.';
    } else {
        $linkValido = $url;
    }
}
?>

<h2>Validador de Links</h2>

<form method="post">
    <input type="text" name="nome" placeholder="Seu nome">
    <br><br>

    <input type="text" name="url" placeholder="Link do GitHub ou LinkedIn">
    <br><br>

    <button type="submit">Cadastrar</button>
</form>

<?php if ($erro !== ''): ?>
    <p><?= e($erro) ?></p>
<?php endif; ?>

<?php if ($linkValido !== ''): ?>

    <p>Nome: <?= e($nome) ?></p>

    <a href="<?= e($linkValido) ?>" target="_blank">
        Visitar Portfólio
    </a>

<?php endif; ?>