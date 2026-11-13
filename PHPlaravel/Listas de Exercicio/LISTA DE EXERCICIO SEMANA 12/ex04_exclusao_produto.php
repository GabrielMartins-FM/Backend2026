
<?php
declare(strict_types=1);

session_start();

// Model responsável pelos produtos.
class Produto
{
    public static function excluir(int $id): bool
    {
        // Procura o produto pelo identificador.
        foreach ($_SESSION['produtos'] as $chave => $produto) {
            if ($produto['id'] === $id) {
                unset($_SESSION['produtos'][$chave]);
                return true;
            }
        }

        return false;
    }
}

// Controller responsável pela exclusão.
class ProdutoController
{
    public function excluir(): void
    {
        // Recebe o ID enviado pelo formulário.
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

        if ($id === false || $id === null || $id <= 0) {
            echo "ID inválido!";
            return;
        }

        // Executa a exclusão do produto.
        $excluido = Produto::excluir($id);

        echo $excluido ? "Produto excluído!" : "Produto não encontrado!";
    }
}

// Cria os produtos iniciais.
if (!isset($_SESSION['produtos'])) {
    $_SESSION['produtos'] = [
        ['id' => 1, 'nome' => 'Motor Industrial'],
        ['id' => 2, 'nome' => 'Sensor'],
        ['id' => 3, 'nome' => 'Esteira Industrial'],
    ];
}

// Processa a exclusão.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    (new ProdutoController())->excluir();
    header('Refresh: 1');
    exit;
}
?>

<h2>Lista de Produtos</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Produto</th>
        <th>Ação</th>
    </tr>

    <?php foreach ($_SESSION['produtos'] as $produto): ?>
        <tr>
            <td><?= $produto['id'] ?></td>
            <td><?= htmlspecialchars($produto['nome']) ?></td>
            <td>
                <form method="POST">
                    <input type="hidden" name="id"
                        value="<?= $produto['id'] ?>">
                    <button type="submit"
                        onclick="return confirm('Deseja excluir?')">
                        Excluir
                    </button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
