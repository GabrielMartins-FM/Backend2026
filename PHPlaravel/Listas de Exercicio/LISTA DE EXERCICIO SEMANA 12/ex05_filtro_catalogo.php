
<?php
declare(strict_types=1);

// Model responsável pela busca.
class Produto
{
    public static function buscarPorCategoria(string $categoria): array
    {
        // Lista simulada de produtos.
        $produtos = [
            ['nome' => 'Motor', 'categoria' => 'Usinagem'],
            ['nome' => 'Prensa', 'categoria' => 'Estamparia'],
            ['nome' => 'Torno', 'categoria' => 'Usinagem'],
        ];

        // Filtra os produtos pela categoria.
        return array_values(array_filter(
            $produtos,
            fn(array $produto): bool =>
                $produto['categoria'] === $categoria
        ));
    }
}

// Controller responsável pelo catálogo.
class ProdutoController
{
    public function listar(): void
    {
        // Recebe a categoria pela URL.
        $categoria = $_GET['categoria'] ?? '';

        // Busca os produtos selecionados.
        $produtos = Produto::buscarPorCategoria($categoria);

        // Exibe os resultados.
        foreach ($produtos as $produto) {
            echo htmlspecialchars($produto['nome']) . '<br>';
        }
    }
}

// Exibe a tela de busca.
?>

<h2>Catálogo de Produtos</h2>

<form method="GET">
    <select name="categoria">
        <option value="">Selecione uma categoria</option>
        <option value="Usinagem">Usinagem</option>
        <option value="Estamparia">Estamparia</option>
    </select>

    <button type="submit">Buscar</button>
</form>

<?php
if (isset($_GET['categoria'])) {
    (new ProdutoController())->listar();
}
?>
