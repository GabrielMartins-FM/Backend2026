
<?php
declare(strict_types=1);

// Controller responsável pelos produtos.
class ProdutoController
{
    public function detalhar(int $id): void
    {
        // Lista simulada de produtos.
        $produtos = [
            1 => ['nome' => 'Motor Industrial', 'preco' => 1500],
            2 => ['nome' => 'Sensor de Temperatura', 'preco' => 250],
        ];

        // Verifica se o produto existe.
        if (!isset($produtos[$id])) {
            http_response_code(404);
            echo "Produto não encontrado!";
            return;
        }

        echo json_encode($produtos[$id]);
    }
}

// Identifica a rota solicitada.
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (preg_match('#^/produtos/(?:detalhe/)?(\d+)$#', $uri, $dados)) {
    $controller = new ProdutoController();
    $controller->detalhar((int) $dados[1]);
} else {
    http_response_code(404);
    echo "Rota não encontrada!";
}
