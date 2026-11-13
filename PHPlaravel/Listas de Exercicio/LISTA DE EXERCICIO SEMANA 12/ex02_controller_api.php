
<?php
declare(strict_types=1);

// Controller base da aplicação.
class Controller
{
    public function renderizarJson(array $dados, int $status = 200): void
    {
        // Define o formato da resposta.
        header('Content-Type: application/json; charset=utf-8');

        // Define o código HTTP.
        http_response_code($status);

        // Converte os dados para JSON.
        echo json_encode($dados, JSON_UNESCAPED_UNICODE);
    }
}

// Catálogo simulado de produtos.
$produtos = [
    ['id' => 1, 'nome' => 'Motor Industrial', 'preco' => 1500],
    ['id' => 2, 'nome' => 'Sensor', 'preco' => 250],
];

// Verifica a rota solicitada.
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri === '/api/produtos' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $controller = new Controller();
    $controller->renderizarJson($produtos);
}
