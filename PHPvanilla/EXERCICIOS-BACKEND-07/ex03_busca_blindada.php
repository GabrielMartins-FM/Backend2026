<?php

declare(strict_types=1);

function e(string $texto): string
{
    return htmlspecialchars($texto, ENT_QUOTES, 'UTF-8');
}

$busca = $_GET['q'] ?? '';
?>

<h2>Busca de Produtos</h2>

<form method="get">

    <input
        type="text"
        name="q"
        value="<?= e($busca) ?>"
    >

    <button type="submit">Buscar</button>

</form>

<?php if ($busca !== ''): ?>

    <p>Você buscou por: <?= e($busca) ?></p>

<?php endif; ?>