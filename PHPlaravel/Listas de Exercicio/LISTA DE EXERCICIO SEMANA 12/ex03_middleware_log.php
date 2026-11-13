
<?php
declare(strict_types=1);

// Registra as informações de acesso.
function registrarAcesso(): void
{
    // Monta os dados da requisição.
    $data = date('d/m/Y H:i:s');
    $ip = $_SERVER['REMOTE_ADDR'] ?? 'Desconhecido';
    $metodo = $_SERVER['REQUEST_METHOD'];
    $uri = $_SERVER['REQUEST_URI'];

    // Cria a mensagem do registro.
    $registro = "$data | $ip | $metodo | $uri" . PHP_EOL;

    // Salva o registro no arquivo.
    $pasta = __DIR__ . '/logs';

    if (!is_dir($pasta)) {
        mkdir($pasta, 0775, true);
    }

    file_put_contents(
        $pasta . '/acessos.log',
        $registro,
        FILE_APPEND | LOCK_EX
    );
}

// Executa o registro antes da rota.
registrarAcesso();

// Simula o processamento da rota.
echo "Acesso registrado com sucesso!";
